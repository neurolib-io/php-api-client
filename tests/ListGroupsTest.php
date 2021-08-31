<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListGroups;

class ListGroupsTest extends ListEntitiesTestCase {

    protected function createRequest() {
        return new ListGroups();
    }
}
?>
