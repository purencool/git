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
include("src/git/gitinterface.php");
include("src/git/gitabstract.php");
include("src/git/gitmodel.php");

$git = new \GitModelDisplay\GitModel();

print $git->testExecutableShell();

print $git->getGitDiff();

print $git->getGitLog();
