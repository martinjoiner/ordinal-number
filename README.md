Ordinal PHP Class
=================

A simple class with 1 public method convert() which takes a number in the range 1-9999 and converts it to a human readable sentence of it's ordinal form eg. _'Three thousand five hundred sixty first'_ 

```php
include( 'ordinal.class.php' );
$objOrdinal = new Ordinal();
print $objOrdinal->convert(378);
```

Optional parameters:
* appendAnd - Boolean - Default: false - Places an 'and' before the final 2 parts if number above 101 or higher (eg. One hundred and first)
* titleCase - Boolean - Default: false - Capitalises the first letter

To see some working examples simply run index.php 

