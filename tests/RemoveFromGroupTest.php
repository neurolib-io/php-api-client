<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\RemoveFromGroup;

class RemoveFromGroupTest extends RemoveFromGroupTestCase {

    protected function createRequest($group_id, $item_type, $item_id) {
        return new RemoveFromGroup($group_id, $item_type, $item_id);
    }
}
?>
