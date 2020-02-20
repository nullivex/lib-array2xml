<?php

namespace LSS_tests;

/**
 * @internal
 */
final class XML2ArrayTest extends \PHPUnit\Framework\TestCase
{
   public function testCreateArray() {
       $xml = '<?xml version="1.0" encoding="UTF-8"?>
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

       $array = \LSS\XML2Array::createArray($xml);

       $expected = array(
           'news' => array(
               'title' => 'A title',
               'body'  => array(
                   'html' => array(
                       'body' => array(
                           'p' => 'The content for the news item',
                       ),
                   ),
               ),
           ),
       );

       static::assertSame($expected, $array);
   }
}
