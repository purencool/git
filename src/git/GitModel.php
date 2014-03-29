<?php
/**
 *  Description
 *
 *  @link
 *  @version
 *  @author    Purencool Website Development <purencool at gmail dot com>
 *  @license   GPLV3
 *
 * Documentation:
 * Tickets:
 */
namespace GitModelDisplay;

class GitModel extends \GitAbstractDisplay\GitAbstract
{

  /**
   *  Implements the static GitTraitView
   */
  use \GitTraitView\GitTraitView;

  /**
   *  Sets gitExecutable path if needed
   *
   *  @return void
   */
  public function setGitExecutable($string)
  {
    $string = "";
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
  public function testExecutableShell()
  {
    return self::viewPre(shell_exec('ls -lart'));
  }

  /**
   *  This method adds to GITDIFF constant into exec shell
   *
   *  self::viewPre() is a trait that formats the
   *  output in <pre> tags
   *
   *  @return string
   */
  public function getGitDiff()
  {
    return self::viewPre(shell_exec(self::GITDIFF));
  }

  /**
   *  This method adds to GITLOG constant into exec shell
   *
   *  self::viewPre() is a trait that formats the
   *  output in <pre> tags
   *
   *  @return string
   */
  public function getGitLog()
  {
    return self::viewPre(shell_exec(self::GITLOG));
  }
}

