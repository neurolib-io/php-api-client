<?php
namespace Neurolib\NeurolibApi\Tests;
use Neurolib\NeurolibApi\Requests\DeleteSeries;

class DeleteSeriesTest extends DeleteEntityTestCase {

    protected function createRequest($series_id) {
        return new DeleteSeries($series_id);
    }
}
?>
