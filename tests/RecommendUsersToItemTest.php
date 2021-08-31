<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\RecommendUsersToItem;

class RecommendUsersToItemTest extends RecommendationTestCase {

    protected function createRequest($item_id, $count, $optional=array()) {
        return new RecommendUsersToItem($item_id, $count, $optional);
    }
}
?>
