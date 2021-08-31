<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\GetItemPropertyInfo;

class GetItemPropertyInfoTest extends GetPropertyInfoTestCase {

    protected function createRequest($property_name) {
        return new GetItemPropertyInfo($property_name);
    }
}
?>
