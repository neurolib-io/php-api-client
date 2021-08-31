<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class ListSetItemsTestCase extends NeurolibTestCase {

    abstract protected function createRequest($series_id);

    public function testListSetItems() {

         //it lists set items
         $req = $this->createRequest('entity_id');
         $resp = $this->client->send($req);
         $this->assertCount(1, $resp);
         $this->assertEquals('entity_id',$resp[0]['itemId']);
         $this->assertEquals('item',$resp[0]['itemType']);

    }
}

?>
