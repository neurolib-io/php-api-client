<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUserRatings;

class ListUserRatingsTest extends ListUserInteractionsTestCase {

    protected function createRequest($user_id) {
        return new ListUserRatings($user_id);
    }
}
?>
