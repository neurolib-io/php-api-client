<?php

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Client;
use Neurolib\NeurolibApi\Requests as Reqs;

class InteractionsTestCase extends NeurolibTestCase {

    protected function setUp(): void {
        parent::setUp();

        $client = new Client('client-test', 'jGGQ6ZKa8rQ1zTAyxTc0EMn55YPF7FJLUtaMLhbsGxmvwxgTwXYqmUk5xVZFw98L');
        $requests = new Reqs\Batch([
            new Reqs\AddUser('user'),
            new Reqs\AddItem('item'),
            new Reqs\AddDetailView('user', 'item', ['timestamp' => 0]),
            new Reqs\AddPurchase('user', 'item', ['timestamp' => 0]),
            new Reqs\AddRating('user', 'item', 1, ['timestamp' => 0]),
            new Reqs\AddCartAddition('user', 'item', ['timestamp' => 0]),
            new Reqs\AddBookmark('user', 'item', ['timestamp' => 0]),
            new Reqs\SetViewPortion('user', 'item', 1, ['timestamp' => 0])
        ]);

        $client->send($requests);
    }
}

?>