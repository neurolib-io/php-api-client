<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\SetViewPortion;

class SetViewPortionTest extends SetViewPortionTestCase {

    protected function createRequest($user_id, $item_id, $portion, $optional=array()) {
        return new SetViewPortion($user_id, $item_id, $portion, $optional);
    }
}
?>
