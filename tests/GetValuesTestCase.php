<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class GetValuesTestCase extends NeurolibTestCase {

    abstract protected function createRequest($item_id);

    public function testGetValues() {

         //it gets values
         $req = $this->createRequest('entity_id');
         $resp = $this->client->send($req);
         $this->assertEquals(42,$resp['int_property']);
         $this->assertEquals('hello',$resp['str_property']);

    }
}

?>
