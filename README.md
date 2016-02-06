Ordinal Number
==============

A PHP package for converting numbers to a human readable sentence of it's ordinal form eg. _'first'_, _'second'_ or even _'Three thousand five hundred and sixty first'_ 

Latest release supports numbers in the range 1 - 9999. 

## Installation

Recomended installation via Composer: 

```
	composer require martinjoiner/ordinal-number @dev
```
See library page on Packagist https://packagist.org/packages/martinjoiner/ordinal-number


## Usage example

```php
	// Tell our code to use the namespace
	use MartinJoiner\OrdinalNumber\OrdinalNumber;
	
	// Define an instance of the OrdinalNumber class
	$ordinal = new OrdinalNumber();

	// The following line will output 'three hundred seventy eighth'
	print $ordinal->convert( 378 );

	// The following line will output 'three hundred and seventy eighth'
	print $ordinal->convert( 378, true );

	// The following line will output 'Three hundred and seventy eighth' (notice capitalised)
	print $ordinal->convert( 378, true, true );
```


## convert() method parameters

### Required parameters

* num {integer} A number to be converted (in the range of 1 - 9999)

### Optional parameters

* appendAnd {boolean} - Default: _false_ - Places the word 'and' before the final 2 parts if number above 101 or higher (eg. One hundred and first). Added to support both American and European versions of English language.
* titleCase {boolean} - Default: _false_ - Capitalises the first letter

To see some working examples simply run index.php 
