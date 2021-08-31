<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListGroupItems;

class ListGroupItemsTest extends ListSetItemsTestCase {

    protected function createRequest($group_id) {
        return new ListGroupItems($group_id);
    }
}
?>
