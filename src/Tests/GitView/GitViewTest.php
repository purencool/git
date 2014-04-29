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

  /**
   *  Test exec shell is able to be accessed.
   *  This test will display current directory
   *  and files permissions and there owners.
   *
   *  self::viewPre() is a trait that formats the
   *  output in <pre> tags
   *
   *  @return string
   */
 // public function testExecutableShell()
 // {
 //   return self::viewPre(shell_exec('ls -lart'));
 // }

  /**
   *  This method adds to GITDIFF constant into exec shell
   *
   *  self::viewDiff() is a trait that formats the
   *  output into html tags
   *
   *  @return string
   */
//  public function testGitDiff()
//  {
//    return self::viewDiff(shell_exec(self::GITDIFF));
//  }

  /**
   *  This method adds to GITLOG constant into exec shell
   *
   *  self::viewPre() is a trait that formats the
   *  output in pre tags
   *
   *  @return string
   */
//  public function testGitLog()
//  {
//    return self::viewPre(shell_exec(self::GITLOG));
//  }
}

