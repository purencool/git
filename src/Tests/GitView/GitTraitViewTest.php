<?php

namespace GitView\Tests;


class GitTraitViewTest extends \PHPUnit_Framework_TestCase
{
  
  use \GitView\GitTraitView;
  
  /**
   *  access to trait toString 
   *
   *  @return string
   */
   public function testExecutableShell()
   {
     
     $this->assertEquals();
     reself::viewPre(shell_exec('ls -lart'));
   }
   
   
  /**
   *  self::viewPre() 
   *
   *  @return string
   */
 // public function testExecutableShell()
 // {
 //   reself::viewPre(shell_exec('ls -lart'));
 // }

  /**
   *  This method adds to GITDIFF constant into exec shell
   *
   *  self::viewDiff() is a trait that formats the
   *  output into html tags
   *
   *  @return string
   */
  // public function testGitDiff()
  // {
  //   $this->expectOutputString(self::viewDiff(array(1,2,3,4)));
  // }

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

