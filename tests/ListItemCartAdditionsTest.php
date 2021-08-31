<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItemCartAdditions;

class ListItemCartAdditionsTest extends ListItemInteractionsTestCase {

    protected function createRequest($item_id) {
        return new ListItemCartAdditions($item_id);
    }
}
?>
