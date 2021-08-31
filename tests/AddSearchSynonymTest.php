<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddSearchSynonym;

class AddSearchSynonymTest extends AddSearchSynonymTestCase {

    protected function createRequest($term, $synonym, $optional=array()) {
        return new AddSearchSynonym($term, $synonym, $optional);
    }
}
?>
