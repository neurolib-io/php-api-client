<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\RecommendItemsToUser;

class RecommendItemsToUserTest extends RecommendationTestCase {

    protected function createRequest($user_id, $count, $optional=array()) {
        return new RecommendItemsToUser($user_id, $count, $optional);
    }
}
?>
