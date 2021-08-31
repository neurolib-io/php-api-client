<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class ListPropertiesTestCase extends NeurolibTestCase {

    abstract protected function createRequest();

    public function testListProperties() {

         //it lists properties
         $req = $this->createRequest();
         $resp = $this->client->send($req);
         $this->assertCount(2, $resp);

    }
}

?>
