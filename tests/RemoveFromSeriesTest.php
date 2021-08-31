<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\RemoveFromSeries;

class RemoveFromSeriesTest extends RemoveFromSeriesTestCase {

    protected function createRequest($series_id, $item_type, $item_id, $time) {
        return new RemoveFromSeries($series_id, $item_type, $item_id, $time);
    }
}
?>
