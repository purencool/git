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
namespace GitView;

abstract class GitAbstract implements GitInterface
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
   *  Sets path for git repository
   *
   *  @param array $array needs key repository_path
   *
   *  @return void.
   *
   */
   abstract public function setGitRepository($array);
  
  /**
   *  Gets path for git repository
   *
   *  @return string git repository path.
   *
   */
   abstract public function getGitRepository();
  
  /**
   *  Test exec shell is able to be accessed
   *
   *  @return string
   */
  abstract public function testExecutableShell();

  /**
   *  forces class to create a method so it can
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
