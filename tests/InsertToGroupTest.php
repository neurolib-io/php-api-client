<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\InsertToGroup;

class InsertToGroupTest extends InsertToGroupTestCase {

    protected function createRequest($group_id, $item_type, $item_id, $optional=array()) {
        return new InsertToGroup($group_id, $item_type, $item_id, $optional);
    }
}
?>
