<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUsers;

class ListUsersTest extends ListEntitiesWithPropertiesTestCase {

    protected function createRequest($optional=array()) {
        return new ListUsers($optional);
    }
}
?>
