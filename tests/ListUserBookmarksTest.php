<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUserBookmarks;

class ListUserBookmarksTest extends ListUserInteractionsTestCase {

    protected function createRequest($user_id) {
        return new ListUserBookmarks($user_id);
    }
}
?>
