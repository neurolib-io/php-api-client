<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddCartAddition;

class AddCartAdditionTest extends AddInteractionTestCase {

    protected function createRequest($user_id, $item_id, $optional=array()) {
        return new AddCartAddition($user_id, $item_id, $optional);
    }
}
?>
