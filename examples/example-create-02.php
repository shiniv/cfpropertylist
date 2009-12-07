<?php
/**
 * Examples for how to use CFPropertyList
 * Create the PropertyList sample.xml.plist by using CFPropertyList::guess()
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
  // Note: dates cannot be guessed, so this will become a CFNumber and be treated as an integer
  // See example-04.php for a possible workaround
  'Date Of Graduation' => gmmktime( 19, 23, 43, 06, 22, 2004 ),
  'Pets Names' => array(),
  // Note: data cannot be guessed, so this will become a CFString
  // See example-04.php for a possible workaround
  'Picture' => 'PEKBpYGlmYFCPA==',
  'City Of Birth' => 'Springfield',
  'Name' => 'John Doe',
  'Kids Names' => array( 'John', 'Kyra' ),
  
);

$guessedStructure = CFPropertyList::guess( $structure );
$plist->add( $guessedStructure );


/*
 * Save PList as XML
 */
$plist->saveXML( dirname(__FILE__).'/example-create-02.xml.plist' );

/*
 * Save PList as Binary
 */
$plist->saveBinary( dirname(__FILE__).'/example-create-02.binary.plist' );

?>