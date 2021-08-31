<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddUser;

class AddUserTest extends AddEntityTestCase {

    protected function createRequest($user_id) {
        return new AddUser($user_id);
    }
}
?>
