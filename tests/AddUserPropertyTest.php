<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddUserProperty;

class AddUserPropertyTest extends AddPropertyTestCase {

    protected function createRequest($property_name, $type) {
        return new AddUserProperty($property_name, $type);
    }
}
?>
