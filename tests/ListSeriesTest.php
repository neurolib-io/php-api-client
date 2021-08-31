<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\ListSeries;

class ListSeriesTest extends ListEntitiesTestCase {

    protected function createRequest() {
        return new ListSeries();
    }
}
?>
