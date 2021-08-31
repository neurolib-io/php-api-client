<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class SearchTestCase extends RecommendationDataTestCase {

    abstract protected function createRequest($user_id,$search_query,$count,$optional=array());

    public function testSearch() {

         //it finds "hello"
         $req = $this->createRequest('entity_id','hell',9);
         $resp = $this->client->send($req);
         $this->assertCount(1, $resp['recomms']);

         //it does not find random string
         $req = $this->createRequest('entity_id','sdhskldf',9);
         $resp = $this->client->send($req);
         $this->assertCount(0, $resp['recomms']);

         //it returnProperties
         $req = $this->createRequest('entity_id','hell',9,['returnProperties' => true]);
         $resp = $this->client->send($req);
         $this->assertCount(1, $resp['recomms']);

    }
}

?>
