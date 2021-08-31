<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class GetPropertyInfoTestCase extends NeurolibTestCase {

    abstract protected function createRequest($property_name);

    public function testGetPropertyInfo() {

         //it does not fail with existing properties
         $req = $this->createRequest('int_property');
         $resp = $this->client->send($req);
         $this->assertEquals('int',$resp['type']);
         $req = $this->createRequest('str_property');
         $resp = $this->client->send($req);
         $this->assertEquals('string',$resp['type']);

    }
}

?>
