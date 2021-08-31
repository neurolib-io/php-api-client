<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\GetUserValues;

class GetUserValuesTest extends GetValuesTestCase {

    protected function createRequest($user_id) {
        return new GetUserValues($user_id);
    }
}
?>
