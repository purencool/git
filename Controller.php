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

//-- Create pimple container for testing
$app = new Pimple();

//-- Add GitModel to pimple container
$app['git.view'] = function () {
   //-- Set path to git repository if null will use local directory
   //-- To alter the path to another git repository do the following 
   //-- array('repository_path' => 'path/to/the/git/repository')
   return new GitModel();
};

//-- Display git directory to the repository
$renderGitRepoPath = $app['git.view']->getGitRepository();

//-- Display local files of the git directory if set to true it will
//-- use the path of that was injected into the constructor
//$renderShellTest = $app['git.view']->testExecutableShell(true);
$renderShellTest = $app['git.view']->testExecutableShell();

//-- Display local git diff of the git if set to true it will
//-- use the path of that was injected into the constructor
//$renderGitDiff = $app['git.view']->getGitDiff(true);
$renderGitDiff = $app['git.view']->getGitDiff();


//-- Display local log for the git repository if set to true it will
//-- use the path of that was injected into the constructor
//$renderGitLog = $app['git.view']->getGitLog(true);
$renderGitLog = $app['git.view']->getGitLog();


//echo $app['git.view']->getLastGitCommand();
