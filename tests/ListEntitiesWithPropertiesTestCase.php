<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class ListEntitiesWithPropertiesTestCase extends NeurolibTestCase {

    abstract protected function createRequest($optional=array());

    public function testListEntitiesWithProperties() {

         //it lists entities
         $req = $this->createRequest();
         $resp = $this->client->send($req);
         $this->assertEquals(['entity_id'],$resp);

         //it return properties
         $req = $this->createRequest();
         $resp = $this->client->send($req);
         $this->assertCount(1, $resp);

    }
}

?>
