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
   return new GitModel(array('repository_path' => '../../trace-dev/build/'));
};

$renderGitRepoPath = $app['git.view']->getGitRepository();
$renderShellTest = $app['git.view']->testExecutableShell(true);
echo $app['git.view']->getLastGitCommand();
$renderGitDiff = $app['git.view']->getGitDiff(true);

$renderGitLog = $app['git.view']->getGitLog(true);

