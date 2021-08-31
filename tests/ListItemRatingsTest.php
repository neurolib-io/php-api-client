<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItemRatings;

class ListItemRatingsTest extends ListItemInteractionsTestCase {

    protected function createRequest($item_id) {
        return new ListItemRatings($item_id);
    }
}
?>
