<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUserPurchases;

class ListUserPurchasesTest extends ListUserInteractionsTestCase {

    protected function createRequest($user_id) {
        return new ListUserPurchases($user_id);
    }
}
?>
