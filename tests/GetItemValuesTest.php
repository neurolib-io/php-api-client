<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\GetItemValues;

class GetItemValuesTest extends GetValuesTestCase {

    protected function createRequest($item_id) {
        return new GetItemValues($item_id);
    }
}
?>
