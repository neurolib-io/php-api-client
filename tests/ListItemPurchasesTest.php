<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItemPurchases;

class ListItemPurchasesTest extends ListItemInteractionsTestCase {

    protected function createRequest($item_id) {
        return new ListItemPurchases($item_id);
    }
}
?>
