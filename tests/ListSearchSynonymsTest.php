<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListSearchSynonyms;

class ListSearchSynonymsTest extends ListSearchSynonymsTestCase {

    protected function createRequest($optional=array()) {
        return new ListSearchSynonyms($optional);
    }
}
?>
