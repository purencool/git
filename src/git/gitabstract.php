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
namespace GitAbstractDisplay;

abstract class GitAbstract implements \gitInterfaceDisplay\GitInterface
{
  /**
   *  Sets path for git system executable
   *
   *  @param string $string
   *
   *  @return void
   */
  abstract public function setGitExecutable($string);

  /**
   *  Test exec shell is able to be accessed
   *
   *  @return string
   */
  abstract public function testExecutableShell();

  /**
   *  forces class to create a  method so it can
   *  access to GITLOG constant in exec shell
   *
   *  @return string
   */
  abstract public function getGitLog();

  /**
   *  forces class to create a  method so it can
   *  access to GITDIFF constant in exec shell
   *
   *  @return string
   */
  abstract public function getGitDiff();
}
