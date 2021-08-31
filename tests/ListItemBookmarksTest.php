<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItemBookmarks;

class ListItemBookmarksTest extends ListItemInteractionsTestCase {

    protected function createRequest($item_id) {
        return new ListItemBookmarks($item_id);
    }
}
?>
