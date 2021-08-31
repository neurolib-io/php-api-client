<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListUserProperties;

class ListUserPropertiesTest extends ListPropertiesTestCase {

    protected function createRequest() {
        return new ListUserProperties();
    }
}
?>
