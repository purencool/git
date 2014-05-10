<?php

namespace GitView\Tests;

use \ __ ; //-- underscore php

class GitViewTest extends \PHPUnit_Framework_TestCase
{

  /**
  * Testing to see if underscore works so it can be used
  */
  public function testUnderScore()
  {
     //-- This test came from underscore on github
     $this->assertEquals(1, __::first(array(1,2,3)), 'can pull out the first element of an array');
  }
}

