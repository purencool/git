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
require_once __DIR__.'/vendor/autoload.php';


use GitView\GitModel;

$app = new Pimple();


$app['git.view'] = function () {
   return new GitModel();
};

$renderShellTest = $app['git.view']->testExecutableShell();
$renderGitDiff = $app['git.view']->getGitDiff();
$renderGitLog = $app['git.view']->getGitLog();
