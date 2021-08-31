<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteGroup;

class DeleteGroupTest extends DeleteEntityTestCase {

    protected function createRequest($group_id) {
        return new DeleteGroup($group_id);
    }
}
?>
