<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class ItemToItemRecommendationTestCase extends RecommendationDataTestCase {

    abstract protected function createRequest($item_id,$target_user_id,$count,$optional=array());

    public function testItemToItemRecommendation() {

         //it recommends
         $req = $this->createRequest('entity_id','entity_id',9);
         $resp = $this->client->send($req);

         //it recommends to previously nonexisting entity with cascadeCreate
         $req = $this->createRequest('nonexisting','entity_id',9,['cascadeCreate' => true]);
         $resp = $this->client->send($req);

         //it recommends with expert settings
         $req = $this->createRequest('nonexisting2','entity_id',9,['cascadeCreate' => true,'expertSettings' => new \stdclass()]);
         $resp = $this->client->send($req);

    }
}

?>
