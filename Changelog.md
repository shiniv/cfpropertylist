# `CFPropertyList` Changelog #

This document presents the changes made to the different releases of `CFPropertyList`.

## CFPropertyList 1.1.1 ##

This release fixes a bug with parsing XML plist strings.

## CFPropertyList 1.1 ##

This release fixes an error with userland streams (since one can only read 8192 bytes at once from userland streams). We also implemented the feature of parsing plists from strings.

## CFPropertyList 1.0.6 ##

This release merges the patches provided by [issue 7](https://code.google.com/p/cfpropertylist/issues/detail?id=7) (support streams as input for load and read functions by Hugo Wetterberg) and [issue 8](https://code.google.com/p/cfpropertylist/issues/detail?id=8) (add support for Math\_BigInteger to avoid compiled dependencies by Hugo Wetterberg). Also fixes a bug with parsing a binary plist file with a specific table size.

## CFPropertyList 1.0.5 ##

This release fixes [issue 3](https://code.google.com/p/cfpropertylist/issues/detail?id=3) (default handling for NULL values in arrays) as well as [issue 5](https://code.google.com/p/cfpropertylist/issues/detail?id=5) (handling strings of length 0 in binary plists).

## CFPropertyList 1.0.4 ##
This release fixes another UTF-8/UTF-16 bug and some spelling mistakes, an upgrade is strongly recommended.

## CFPropertyList 1.0.3 ##
This release fixed UTF-8/UTF-16 bugs and separated CFPropertyList::guess(), an upgrade is strongly recommended.
  * Added class `CFTypeDetector` as extensible replacement of CFPropertyList::guess()
  * Fixed UTF-8/UTF-16 bugs (thanks to Thomas Broquist)

## CFPropertyList 1.0.2 ##
This release only introduced new but secondary functionality.
  * Added [ArrayAccess](http://php.net/arrayaccess) implementation (thanks to Sean Coates, who supplied the patch)

## CFPropertyList 1.0.1 ##
Since a severe bug has been fixed in this release, an upgrade is strongly recommended.
  * BigIntegerBug fixed
  * now also requiring either [BC](http://php.net/bc) or [GMP](http://php.net/gmp)

## CFPropertyList 1.0.0 ##
  * First official Release
  * requiring either [MBString](http://php.net/mbstring) or [Iconv](http://php.net/iconv)