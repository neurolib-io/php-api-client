<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteBookmark;

class DeleteBookmarkTest extends DeleteInteractionTestCase {

    protected function createRequest($user_id, $item_id, $optional=array()) {
        return new DeleteBookmark($user_id, $item_id, $optional);
    }
}
?>
