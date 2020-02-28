<?php

namespace LSS_tests;

/**
 * @internal
 */
final class Array2XMLTest extends \PHPUnit\Framework\TestCase
{
   public function testCreateXml() {
       $array = array(
           'title' => 'A title',
           'body' => array(
               '@xml' => '<html><body><p>The content for the news item</p></body></html>',
           ),
       );

       // Use the Array2XML object to transform it.
       $xml = \LSS\Array2XML::createXML('news', $array);

       $expected = '<?xml version="1.0" encoding="UTF-8"?>
<news>
  <title>A title</title>
  <body>
    <html>
      <body>
        <p>The content for the news item</p>
      </body>
    </html>
  </body>
</news>
';

       static::assertSame($expected, $xml->saveXML());
   }
}
