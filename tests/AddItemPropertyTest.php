<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddItemProperty;

class AddItemPropertyTest extends AddPropertyTestCase {

    protected function createRequest($property_name, $type) {
        return new AddItemProperty($property_name, $type);
    }
}
?>
