<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteItemProperty;

class DeleteItemPropertyTest extends DeletePropertyTestCase {

    protected function createRequest($property_name) {
        return new DeleteItemProperty($property_name);
    }
}
?>
