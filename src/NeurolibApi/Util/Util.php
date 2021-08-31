<?php
/**
 * Util
 * @author Neurolib <tech@neurolib.io>
 */

namespace Neurolib\NeurolibApi\Util;

/**
 * Utils
 */
class Util
{
	public static function sliceDbName($uri) {
	    $prefix = '/{databaseId}/';
	    if (substr($uri, 0, strlen($prefix)) == $prefix) {
	        $uri = substr($uri, strlen($prefix));
	    }
	    return $uri;
	}
}
?>