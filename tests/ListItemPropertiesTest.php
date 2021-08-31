<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListItemProperties;

class ListItemPropertiesTest extends ListPropertiesTestCase {

    protected function createRequest() {
        return new ListItemProperties();
    }
}
?>
