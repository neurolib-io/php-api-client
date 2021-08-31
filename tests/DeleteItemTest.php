<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteItem;

class DeleteItemTest extends DeleteEntityTestCase {

    protected function createRequest($item_id) {
        return new DeleteItem($item_id);
    }
}
?>
