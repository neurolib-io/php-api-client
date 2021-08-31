<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\RecommendNextItems;

class RecommendNextItemsTest extends NextItemsRecommendationTestCase {

    protected function createRequest($recomm_id, $count) {
        return new RecommendNextItems($recomm_id, $count);
    }
}
?>
