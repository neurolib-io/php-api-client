<?php

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Client;
use Neurolib\NeurolibApi\Requests as Reqs;
use Neurolib\NeurolibApi\Exceptions as Exc;

abstract class RecommendationDataTestCase extends NeurolibTestCase {

    protected function setUp(): void {
        parent::setUp();

        $num = 1000;
        $probability_purchased = 0.007;

        $my_user_ids = array();
        $my_item_ids = array();
        for($i=0; $i < $num; $i++) {
            array_push($my_user_ids, "user-{$i}");
            array_push($my_item_ids, "item-{$i}");
        }

        $my_purchases = array();
        foreach ($my_user_ids as $user_id) {
            foreach ($my_item_ids as $item_id) {
                if(mt_rand() / mt_getrandmax() < $probability_purchased)
                    array_push($my_purchases, new Reqs\AddPurchase($user_id, $item_id));
            }
        }

        $client = new Client('client-test', 'jGGQ6ZKa8rQ1zTAyxTc0EMn55YPF7FJLUtaMLhbsGxmvwxgTwXYqmUk5xVZFw98L');

        $user_requests = array_map(function($userId) {return new Reqs\AddUser($userId);}, $my_user_ids);
        $client->send(new Reqs\Batch($user_requests));
        $client->send(new Reqs\Batch([new Reqs\AddItemProperty('answer', 'int'), new Reqs\AddItemProperty('id2', 'string'), new Reqs\AddItemProperty('empty', 'string')]));

        $item_requests = array_map(function($itemId) {return new Reqs\SetItemValues($itemId, ['answer' => 42, 'id2' => $itemId, '!cascadeCreate' => true]);}, $my_item_ids);
        $client->send(new Reqs\Batch($item_requests));
        $client->send(new Reqs\Batch($my_purchases));
    }
}
?>