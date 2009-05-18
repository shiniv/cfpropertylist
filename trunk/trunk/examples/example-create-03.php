<?php
/**
 * Examples for how to use CFPropertyList
 * Create the PropertyList sample.xml.plist by using CFPropertyList::guess().
 * This example shows how to get around the limitation of guess() regarding {@link CFDate} and {@link CFData}.
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
 * create a new CFPropertyList instance without loading any content
 */
$plist = new CFPropertyList();

/*
 * import the array structure to create the sample.xml.plist
 * We make use of CFPropertyList::guess(), which truly is not almighty!
 */

$structure = array(
  'Year Of Birth' => 1965,
  // Note: dates cannot be guessed, it thus has to be specified explicitly
  'Date Of Graduation' => new CFDate( gmmktime( 19, 23, 43, 06, 22, 2004 ) ),
  'Pets Names' => array(),
  // Note: data cannot be guessed, it thus has to be specified explicitly
  'Picture' => new CFData( 'PEKBpYGlmYFCPA==', true ),
  'City Of Birth' => 'Springfield',
  'Name' => 'John Doe',
  'Kids Names' => array( 'John', 'Kyra' ),
  
);

$guessedStructure = CFPropertyList::guess( $structure );
$plist->add( $guessedStructure );


/*
 * Save PList as XML
 */
$plist->saveXML( dirname(__FILE__).'/example-create-03.xml.plist' );

/*
 * Save PList as Binary
 */
$plist->saveBinary( dirname(__FILE__).'/example-create-03.binary.plist' );

?>