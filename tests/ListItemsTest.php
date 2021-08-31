<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItems;

class ListItemsTest extends ListEntitiesWithPropertiesTestCase {

    protected function createRequest($optional=array()) {
        return new ListItems($optional);
    }
}
?>
