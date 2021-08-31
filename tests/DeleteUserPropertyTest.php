<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteUserProperty;

class DeleteUserPropertyTest extends DeletePropertyTestCase {

    protected function createRequest($property_name) {
        return new DeleteUserProperty($property_name);
    }
}
?>
