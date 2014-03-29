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
include("src/git/GitInterface.php");
include("src/git/GitAbstract.php");
include("src/git/GitTraitView.php");
include("src/git/GitModel.php");

$git = new \GitModelDisplay\GitModel();

$renderShellTest = $git->testExecutableShell();

$renderGitDiff = $git->getGitDiff();

$renderGitLog = $git->getGitLog();
