<?php

namespace GitView\Tests;

class GitViewTest extends \PHPUnit_Framework_TestCase
{

  public function testTrueIsTrue()
  {
    $foo = false;
    $this->assertTrue($foo);
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

