Ordinal Number
==============

A PHP package for converting numbers to a human readable sentence of it's ordinal form eg. _'first'_, _'second'_ or even _'Three thousand five hundred and sixty first'_ 

Supports numbers in the range 1-9999. 

## Usage

Recomended installation via Composer: 

```
	composer require martinjoiner/ordinal-number
```
See library page on Packagist https://packagist.org/packages/martinjoiner/ordinal-number

Use the OrdinalNumber class in your PHP code as follows: 

```php
	$ordinal = new OrdinalNumber( true );
	// The following line will set the value or $ordinalForm to the string 'three hundred and seventy eighth'
	$ordinalForm = $ordinal->convert( 378 );
```


### Optional parameters

* appendAnd {boolean} - Default: _false_ - Places the word 'and' before the final 2 parts if number above 101 or higher (eg. One hundred and first). Added to support both American and European versions of English language.
* titleCase {boolean} - Default: _false_ - Capitalises the first letter

To see some working examples simply run index.php 
