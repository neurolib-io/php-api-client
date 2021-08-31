<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteAllSearchSynonyms;

class DeleteAllSearchSynonymsTest extends DeleteAllSearchSynonymsTestCase {

    protected function createRequest() {
        return new DeleteAllSearchSynonyms();
    }
}
?>
