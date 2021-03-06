<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ItemBasedRecommendation;

class ItemBasedRecommendationTest extends RecommendationDeprecatedTestCase {

    protected function createRequest($item_id, $count, $optional=array()) {
    	$optional = array_merge($optional, ['targetUserId' => 'entity_id']);
        return new ItemBasedRecommendation($item_id, $count, $optional);
    }
}
?>
