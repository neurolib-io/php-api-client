<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteUser;

class DeleteUserTest extends DeleteEntityTestCase {

    protected function createRequest($user_id) {
        return new DeleteUser($user_id);
    }
}
?>
