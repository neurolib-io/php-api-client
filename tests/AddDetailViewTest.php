<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddDetailView;

class AddDetailViewTest extends AddInteractionTestCase {

    protected function createRequest($user_id, $item_id, $optional=array()) {
        return new AddDetailView($user_id, $item_id, $optional);
    }
}
?>
