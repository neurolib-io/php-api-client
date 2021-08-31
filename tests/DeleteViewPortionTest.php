<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteViewPortion;

class DeleteViewPortionTest extends DeleteViewPortionTestCase {

    protected function createRequest($user_id, $item_id, $optional=array()) {
        return new DeleteViewPortion($user_id, $item_id, $optional);
    }
}
?>
