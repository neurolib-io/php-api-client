<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteSearchSynonym;

class DeleteSearchSynonymTest extends DeleteSearchSynonymTestCase {

    protected function createRequest($id) {
        return new DeleteSearchSynonym($id);
    }
}
?>
