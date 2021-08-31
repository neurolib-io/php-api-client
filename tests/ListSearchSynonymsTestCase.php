<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class ListSearchSynonymsTestCase extends NeurolibTestCase {

    abstract protected function createRequest($optional=array());

    public function testListSearchSynonyms() {

         //it lists search synonyms
         $req = new Reqs\AddSearchSynonym('sci-fi','science fiction');
         $resp = $this->client->send($req);
         $req = $this->createRequest();
         $resp = $this->client->send($req);
         $this->assertCount(1, $resp['synonyms']);
         $req = $this->createRequest(['count' => 10,'offset' => 1]);
         $resp = $this->client->send($req);
         $this->assertCount(0, $resp['synonyms']);

    }
}

?>
