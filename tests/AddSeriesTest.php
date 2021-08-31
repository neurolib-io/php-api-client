<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\AddSeries;

class AddSeriesTest extends AddEntityTestCase {

    protected function createRequest($series_id) {
        return new AddSeries($series_id);
    }
}
?>
