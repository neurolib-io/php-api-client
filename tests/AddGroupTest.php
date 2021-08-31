<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddGroup;

class AddGroupTest extends AddEntityTestCase {

    protected function createRequest($group_id) {
        return new AddGroup($group_id);
    }
}
?>
