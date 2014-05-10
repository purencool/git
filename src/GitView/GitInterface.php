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

interface GitInterface
{
  /**
   *  @const string git command
   */
  const GITCOMMAND = 'git'; 
    
  /**
   *  @const string git status command
   */
  const GITSTATUS = 'status';

  /**
   *  @const string git diff command
   */
  const GITDIFF = 'diff';

  /**
   *  @const string gets current git branch
   */
  const GITBRANCH = 'branch';

  /**
   *  @const string git clone command
   */
  const GITCLONE = 'clone';

  /**
   *  @const string displays git logs
   */
  const GITLOG = 'log';

  /**
   *  Sets path for git system executable
   *
   *  @param string $string
   *
   *  @return void
   *
   */
  public function setGitExecutable($string);
  
  /**
   *  Sets path for git repository
   *
   *  @param array $array needs key repository_path
   *
   *  @return void.
   *
   */
  public function setGitRepository($array);
  
  /**
   *  Gets path for git repository
   *
   *  @return string git repository path.
   *
   */
  public function getGitRepository();

  /**
   *  Test exec shell is able to be accessed
   *
   *  @return string
   */
  public function testExecutableShell();

  /**
   *  Implements access to GITLOG constant in exec shell
   *
   *  @return string
   */
  public function getGitLog();

  /**
   *  Implements access to GITDIFF constant in exec shell
   *
   *  @return string
   */
  public function getGitDiff();
}

