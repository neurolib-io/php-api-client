<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\InsertToSeries;

class InsertToSeriesTest extends InsertToSeriesTestCase {

    protected function createRequest($series_id, $item_type, $item_id, $time, $optional=array()) {
        return new InsertToSeries($series_id, $item_type, $item_id, $time, $optional);
    }
}
?>
