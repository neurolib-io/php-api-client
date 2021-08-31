<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUserCartAdditions;

class ListUserCartAdditionsTest extends ListUserInteractionsTestCase {

    protected function createRequest($user_id) {
        return new ListUserCartAdditions($user_id);
    }
}
?>
