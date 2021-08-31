<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\SearchItems;

class SearchItemsTest extends SearchTestCase {

    protected function createRequest($user_id, $search_query, $count, $optional=array()) {
        return new SearchItems($user_id, $search_query, $count, $optional);
    }
}
?>
