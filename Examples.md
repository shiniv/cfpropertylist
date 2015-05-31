# `CFPropertyList` Examples #

This page shows how easy `PropertyLists` can be created and manipulated. More in the [examples directory](http://code.google.com/p/cfpropertylist/source/browse/#svn/trunk/examples).


## Reading `PropertyLists` ##

### Read XML `PropertyList` ###
```
$plist = new CFPropertyList( '/path/to/sample.xml.plist', CFPropertyList::FORMAT_XML );
```

### Read Binary `PropertyList` ###
```
$plist = new CFPropertyList( '/path/to/sample.binary.plist', CFPropertyList::FORMAT_BINARY );
```

### Read `PropertyList` (automatic type-detection) ###
```
$plist = new CFPropertyList( '/path/to/sample.binary.plist' );
```

## Accessing `PropertyList` Content ##

### `PropertyList` to array() ###
```
$array = $plist->toArray();
```

### `PropertyList` to XML ###
```
$xml = $plist->toXML();
```

**Note:** You could use this method to directly send your XML formatted PList to the output buffer.

### `PropertyList` to Binary ###
```
$binarystring = $plist->toBinary();
```

**Note:** You could use this method to directly send your binary formatted PList to the output buffer.

## Saving `PropertyLists` ##

### Save XML `PropertyList` ###
```
$plist->saveXML( '/path/to/sample.xml.plist' );
```

### Save Binary `PropertyList` ###
```
$plist->saveBinary( '/path/to/sample.binary.plist' );
```

### Save `PropertyList` as opened ###
```
$plist->save();
```

## Creating And Manipulating `PropertyLists` ##

### Create `PropertyList` using the `CFPropertyList` API ###
```
$plist = new CFPropertyList();
$plist->add( $dict = new CFDictionary() );
$dict->add( 'Year Of Birth', new CFNumber( 1965 ) );
$dict->add( 'Pets Names', new CFArray() );
$dict->add( 'City Of Birth', new CFString( 'Springfield' ) );
$dict->add( 'Name', new CFString( 'John Doe' ) );
$dict->add( 'Kids Names', $array = new CFArray() );
$array->add( new CFString( 'John' ) );
$array->add( new CFString( 'Kyra' ) );
```

### Create `PropertyList` by guessing the structure ###
```
$structure = array(
  'Year Of Birth' => 1965,
  'Pets Names' => array(),
  'City Of Birth' => 'Springfield',
  'Name' => 'John Doe',
  'Kids Names' => array( 'John', 'Kyra' ),
);
$plist = new CFPropertyList();
$td = new CFTypeDetector();  
$guessedStructure = $td->toCFType( $structure );
$plist->add( $guessedStructure );
```