<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class MergeUsersTestCase extends NeurolibTestCase {

    abstract protected function createRequest($target_user_id,$source_user_id,$optional=array());

    public function testMergeUsers() {

         //it does not fail with existing users
         $req = new Reqs\AddUser('target');
         $resp = $this->client->send($req);
         $req = $this->createRequest('target','entity_id');
         $resp = $this->client->send($req);

         //it fails with nonexisting user
         $req = $this->createRequest('nonex_id','entity_id');
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
