<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class InsertToSeriesTestCase extends NeurolibTestCase {

    abstract protected function createRequest($series_id,$item_type,$item_id,$time,$optional=array());

    public function testInsertToSeries() {

         //it does not fail when inserting existing item into existing set
         $req = new Reqs\AddItem('new_item');
         $resp = $this->client->send($req);
         $req = $this->createRequest('entity_id','item','new_item',3);
         $resp = $this->client->send($req);

         //it does not fail when cascadeCreate is used
         $req = $this->createRequest('new_set','item','new_item2',1,['cascadeCreate' => true]);
         $resp = $this->client->send($req);

         //it really inserts item to the set
         $req = new Reqs\AddItem('new_item3');
         $resp = $this->client->send($req);
         $req = $this->createRequest('entity_id','item','new_item3',2);
         $resp = $this->client->send($req);
         try {

             $this->client->send($req);
             throw new \Exception('Exception was not thrown');
         }
         catch(Exc\ResponseException $e)
         {
            $this->assertEquals(409, $e->status_code);
         }

    }
}

?>
