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
   *  @const string git status command
   */
  const GITADD = 'git status';

  /**
   *  @const string git diff command
   */
  const GITDIFF = 'git diff';

  /**
   *  @const string gets current git branch
   */
  const GITBRANCH = 'git branch';

  /**
   *  @const string git clone command
   */
  const GITCLONE = 'git clone';

  /**
   *  @const string displays git logs
   */
  const GITLOG = 'git log';

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

