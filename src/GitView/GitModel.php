<?php
/**
 *  Description
 *
 *  @link
 *  @version
 *  @author    Purencool Website Development <purencool at gmail dot com>
 *  @license   GPLV3
 *
 *  Documentation:
 *  Tickets:
 */
namespace GitView;

class GitModel extends GitAbstract
{
  /**
   *  Path to git repository path.
   */
  private $repositoryPath;
    
  /**
   *  Configuration array for git
   *  
   *  @param array $configArr injecting configuration
   *  
   */
  public function __construct($configArr = array()) {
    $this->setGitRepository($configArr);
      
  }
  
  /**
   *  Implements the static GitTraitView
   */
  use GitTraitView;

  /**
   *  Sets gitExecutable path if needed
   *
   *  @return void
   */
  public function setGitExecutable($string)
  {
    $string = "";
  }

  /**
   *  Sets path for git repository
   *
   *  @param array $array needs key repository_path
   *
   *  @return void.
   *
   */
   public function setGitRepository($array)
   {
     if (array_key_exists('repository_path', $array)) {
       $this->repositoryPath = $array['repository_path'];
     }
   }
  
  /**
   *  Gets path for git repository
   *
   *  @return string git repository path.
   *
   */
   public function getGitRepository() 
   {
     $ret = ($this->repositoryPath)? $this->repositoryPath : 'No repo path set'; 
     return $ret;
   }
  
  /**
   *  Test exec shell is able to be accessed.
   *  This test will display current directory
   *  and files permissions and there owners.
   *
   *  self::viewPre() is a trait that formats the
   *  output in <pre> tags
   *
   *  @return string
   */
  public function testExecutableShell()
  {
    return self::viewPre(shell_exec('ls -lart'));
  }

  /**
   *  This method adds to GITDIFF constant into exec shell
   *
   *  self::viewDiff() is a trait that formats the
   *  output into html tags
   *
   *  @return string
   */
  public function getGitDiff()
  {
    return self::viewDiff(shell_exec(self::GITDIFF));
  }

  /**
   *  This method adds to GITLOG constant into exec shell
   *
   *  self::viewPre() is a trait that formats the
   *  output in pre tags
   *
   *  @return string
   */
  public function getGitLog()
  {
    return self::viewPre(shell_exec(self::GITLOG));
  }
}

