<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class SetValuesTestCase extends NeurolibTestCase {

    abstract protected function createRequest($item_id,$values,$optional=array());

    public function testSetValues() {

         //it does not fail with existing entity and property
         $req = $this->createRequest('entity_id',['int_property' => 5]);
         $resp = $this->client->send($req);

         //it does not fail with non-ASCII string
         $req = $this->createRequest('entity_id',['str_property' => 'šřžذ的‎']);
         $resp = $this->client->send($req);

         //it sets multiple properties
         $req = $this->createRequest('entity_id',['int_property' => 5,'str_property' => 'test']);
         $resp = $this->client->send($req);

         //it does not fail with !cascadeCreate
         $req = $this->createRequest('new_entity',['int_property' => 5,'str_property' => 'test','!cascadeCreate' => true]);
         $resp = $this->client->send($req);

         //it does not fail with cascadeCreate optional parameter
         $req = $this->createRequest('new_entity2',['int_property' => 5,'str_property' => 'test'],['cascadeCreate' => true]);
         $resp = $this->client->send($req);

         //it fails with nonexisting entity
         $req = $this->createRequest('nonexisting',['int_property' => 5]);
         try {

             $this->client->send($req);
             throw new \Exception('Exception was not thrown');
         }
         catch(Exc\ResponseException $e)
         {
            $this->assertEquals(404, $e->status_code);
         }

    }
}

?>
