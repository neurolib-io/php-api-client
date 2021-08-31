<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class ListEntitiesTestCase extends NeurolibTestCase {

    abstract protected function createRequest();

    public function testListEntities() {

         //it lists entities
         $req = $this->createRequest();
         $resp = $this->client->send($req);
         $this->assertEquals(['entity_id'],$resp);

    }
}

?>
