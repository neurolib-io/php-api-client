<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItemDetailViews;

class ListItemDetailViewsTest extends ListItemInteractionsTestCase {

    protected function createRequest($item_id) {
        return new ListItemDetailViews($item_id);
    }
}
?>
