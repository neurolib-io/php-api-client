<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddRating;

class AddRatingTest extends AddRatingTestCase {

    protected function createRequest($user_id, $item_id, $rating, $optional=array()) {
        return new AddRating($user_id, $item_id, $rating, $optional);
    }
}
?>
