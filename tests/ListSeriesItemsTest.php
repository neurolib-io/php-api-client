<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListSeriesItems;

class ListSeriesItemsTest extends ListSetItemsTestCase {

    protected function createRequest($series_id) {
        return new ListSeriesItems($series_id);
    }
}
?>
