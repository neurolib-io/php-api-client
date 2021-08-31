<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class RecommendationDeprecatedTestCase extends RecommendationDataTestCase {

    abstract protected function createRequest($user_id,$count,$optional=array());

    public function testRecommendationDeprecated() {

         //it recommends
         $req = $this->createRequest('entity_id',9);
         $resp = $this->client->send($req);
         $this->assertCount(9, $resp);

         //it recommends to previously nonexisting entity with cascadeCreate
         $req = $this->createRequest('nonexisting',9,['cascadeCreate' => true]);
         $resp = $this->client->send($req);
         $this->assertCount(9, $resp);

         //it recommends with expert settings
         $req = $this->createRequest('nonexisting2',9,['cascadeCreate' => true,'expertSettings' => new \stdclass()]);
         $resp = $this->client->send($req);
         $this->assertCount(9, $resp);

    }
}

?>
