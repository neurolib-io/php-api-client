<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddItem;

class AddItemTest extends AddEntityTestCase {

    protected function createRequest($item_id) {
        return new AddItem($item_id);
    }
}
?>
