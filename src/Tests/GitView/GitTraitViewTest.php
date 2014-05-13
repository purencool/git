<?php

namespace GitView\Tests;


class GitTraitViewTest extends \PHPUnit_Framework_TestCase
{
  
  use \GitView\GitTraitView;
  
  /**
   *  Access to trait testing to see if pre string
   *  works
   *
   *  @return string
   */
   public function testViewPre()
   {
     $string = "This is a string and it";
     $test = self::viewPre($string);
     
     //-- Test string
     $this->expectOutputString($test);
     
     //-- Test for pre tag
     $tag = array('tag' => 'pre');
     $this->assertTag($tag, $test);
     print $test;
   }
   
  /**
   * Returning a string wrapped in pre tags
   */
   public function testViewDiffPre()
   {
     //-- Test for string pre
     $string = "Testing1\r\n"."Testing2\r\n"."Testing3\r\n";
     $test = self::viewDiff($string, TRUE);
     
      //-- Test string
     $this->expectOutputString($test);
     
     //-- Test for pre tag
     $tag = array('tag' => 'pre');
     $this->assertTag($tag, $test);
     print $test;    
   } 
   
  /**
   * Returning a string wrapped in div tags
   */
   public function testViewDiffDiv()
   {
     //-- Test for string
     $string = "Testing1\r\n"."Testing2\r\n"."Testing3\r\n";
     $test = self::viewDiff($string, FALSE);
     
     //-- Test string
     $this->expectOutputString($test);
     
     //-- Test for pre tag
     $tag = array('tag' => 'div');
     $this->assertTag($tag, $test); 
     print $test;       
   }
   
  /**
   * Test for removed class in div tag
   */
   public function testViewDiffRemovedClass()
   {
     //-- Test for string
     $string = "---Testing1\r\n  -Testing1\r\n";
     $test = self::viewDiff($string, FALSE);
     $tag = array(
      'tag' => 'div',
      'attributes' => array('class' => 'removed')
     );
     $this->assertTag($tag, $test); 
     print $test;       
   }

  /**
   * Test for added class in div tag
   */
   public function testViewDiffAddedClass()
   {
     //-- Test for string
     $string = "+++Testing1\r\n  +Testing1\r\n";
     $test = self::viewDiff($string, FALSE);
     $tag = array(
      'tag' => 'div',
      'attributes' => array('class' => 'added')
     );
     $this->assertTag($tag, $test); 
     print $test;       
   }
   
  /**
   * Test for none class in div tag
   */
   public function testViewDiffNoneClass()
   {
     //-- Test for string
     $string = "Testing1\r\n  Testing1\r\n";
     $test = self::viewDiff($string, FALSE);
     $tag = array(
      'tag' => 'div',
      'attributes' => array('class' => 'none')
     );
     $this->assertTag($tag, $test); 
     print $test;       
   }
}

