<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUserViewPortions;

class ListUserViewPortionsTest extends ListUserInteractionsTestCase {

    protected function createRequest($user_id) {
        return new ListUserViewPortions($user_id);
    }
}
?>
