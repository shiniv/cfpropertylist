<?php
/**
 * Examples for how to use CFPropertyList with strings
 * Read a binary from a string PropertyList
 * @package plist
 * @subpackage plist.examples
 */

// just in case...
error_reporting( E_ALL );
ini_set( 'display_errors', 'on' );

/**
 * Require CFPropertyList
 */
require_once(dirname(__FILE__).'/../CFPropertyList.php');


/*
 * create a new CFPropertyList instance which loads the sample.plist on construct.
 * We don't know that it is a binary plist, so we simply call ->parse()
 */
$content = file_get_contents(dirname(__FILE__).'/sample.binary.plist');
$plist = new CFPropertyList();
$plist->parse($content);

/*
 * retrieve the array structure of sample.plist and dump to stdout
 */

echo '<pre>';
var_dump( $plist->toArray() );
echo '</pre>';

?>