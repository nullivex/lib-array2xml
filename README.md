lib-array2xml
=============

Array2XML conversion library credit to lalit.org

Usage
----
```php
//create XML
$xml = Array2XML::createXML('root_node_name', $php_array);
echo $xml->saveXML();

//create Array
$array = XML2Array::createArray($xml);
print_r($array);
```

Reference
----
More complete references can be found here
	http://www.lalit.org/lab/convert-xml-to-array-in-php-xml2array/
	http://www.lalit.org/lab/convert-php-array-to-xml-with-attributes/

