<?php

/*
 * This file is auto-generated, do not edit
 */

namespace Neurolib\NeurolibApi\Tests;

use Neurolib\NeurolibApi\Exceptions as Exc;
use Neurolib\NeurolibApi\Requests as Reqs;

abstract class DeleteAllSearchSynonymsTestCase extends NeurolibTestCase {

    abstract protected function createRequest();

    public function testDeleteAllSearchSynonyms() {

         //it deletes all search synonyms
         $req = $this->createRequest();
         $resp = $this->client->send($req);

    }
}

?>
