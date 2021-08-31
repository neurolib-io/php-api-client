<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\UserBasedRecommendation;

class UserBasedRecommendationTest extends RecommendationDeprecatedTestCase {

    protected function createRequest($user_id, $count, $optional=array()) {
        return new UserBasedRecommendation($user_id, $count, $optional);
    }
}
?>
