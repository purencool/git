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

  public function setGitExecutable($string)
  {
    $string = "";
  }

  /**
   *
   *  @return string test exec shell is able
   *  to be accessed. This test will display
   *  current directory and files permissions
   *  and there owners
   */
  public function testExecutableShell()
  {
    return "<pre>".shell_exec('ls -lart')."</pre>";
  }

    /**
   *
   *  @return
   */
  public function getGitDiff()
  {
    return "<pre>".shell_exec(self::GITDIFF)."</pre>";
  }

     /**
   *
   *  @return
   */
  public function getGitLog()
  {
    return "<pre>".shell_exec(self::GITLOG)."</pre>";
  }
}

