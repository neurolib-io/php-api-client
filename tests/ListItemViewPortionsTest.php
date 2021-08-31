<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItemViewPortions;

class ListItemViewPortionsTest extends ListItemInteractionsTestCase {

    protected function createRequest($item_id) {
        return new ListItemViewPortions($item_id);
    }
}
?>
