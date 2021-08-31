<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeletePurchase;

class DeletePurchaseTest extends DeleteInteractionTestCase {

    protected function createRequest($user_id, $item_id, $optional=array()) {
        return new DeletePurchase($user_id, $item_id, $optional);
    }
}
?>
