<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUserDetailViews;

class ListUserDetailViewsTest extends ListUserInteractionsTestCase {

    protected function createRequest($user_id) {
        return new ListUserDetailViews($user_id);
    }
}
?>
