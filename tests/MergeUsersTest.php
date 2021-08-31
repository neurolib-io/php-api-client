<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\MergeUsers;

class MergeUsersTest extends MergeUsersTestCase {

    protected function createRequest($target_user_id, $source_user_id, $optional=array()) {
        return new MergeUsers($target_user_id, $source_user_id, $optional);
    }
}
?>
