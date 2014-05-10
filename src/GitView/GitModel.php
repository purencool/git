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
   *  Git repository command.
   */
  private $gitCommand;
  
  
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
   *  Sets path for git repository tests if directory exists
   *  if it doesn't it returns error saying it does not exist.
   *
   *  @param array $array needs key repository_path
   *
   *  @return void.
   *
   */
   public function setGitRepository($array)
   {
     if (array_key_exists('repository_path', $array)) {
       $pathTest = $array['repository_path'];
       if(is_dir($array['repository_path'])) {
         $this->repositoryPath = $pathTest;
       } else {
         $this->repositoryPath = "This $pathTest directory does not exist"; 
       }
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
     $path = $this->repositoryPath;
     return ($path)? $path : 'No repository path set';
   }
   
  /**
   *  Gets last git command to be use if variable is set
   *
   *  @return string git repository path.
   *
   */
   public function getLastGitCommand() 
   {
     return ($this->gitCommand)? $this->gitCommand : 'No last git command';
   }
  
  /**
   *  Test exec shell is able to be accessed.
   *  This test will display current directory
   *  and files permissions and there owners.
   *
   *  self::viewPre() is a trait that formats the
   *  output in <pre> tags
   *
   *  @param boolean $usePath tells gitView to use path
   *  @return string
   */
  public function testExecutableShell($usePath = false)
  {
    if($usePath == false) {
      $command = 'ls -lart';
      $return = self::viewPre(shell_exec($command));
    } else {
      if(is_dir($this->repositoryPath)) {
        $command = 'ls -lart '.$this->repositoryPath;
        $return = self::viewPre(shell_exec($command));
      } else {
        $return = "Git repository path is wrong";
      }
    }
    $this->gitCommand = $command;
    return $return; 
  }

  /**
   *  This method adds to GITDIFF constant into exec shell
   *
   *  self::viewDiff() is a trait that formats the
   *  output into html tags
   * 
   *  @param boolean $usePath tells gitView to use path
   *  @return string
   */
  public function getGitDiff($usePath = false)
  {
    $repoPath = $this->repositoryPath;
    if($usePath == false) {
      $command = self::GITCOMMAND.' '.self::GITDIFF;
      $return = self::viewDiff(shell_exec($command));
    } else {
      if(is_dir($repoPath)) {
        $command = self::GITCOMMAND.' -C '.$repoPath.' '.self::GITDIFF;
        $return = self::viewDiff(shell_exec($command));
      } else {
        $return = "Git repository path is wrong";
      }
    }
    $this->gitCommand = $command;
    return $return;
  }

  /**
   *  This method adds to GITLOG constant into exec shell
   *
   *  self::viewPre() is a trait that formats the
   *  output in pre tags
   *
   *  @param boolean $usePath tells gitView to use path
   *  @return string
   */
  public function getGitLog($usePath = false)
  {
    $repoPath = $this->repositoryPath;
    if($usePath == false) {
      $command = self::GITCOMMAND.' '.self::GITLOG;
      $return = self::viewDiff(shell_exec($command));
    } else {
      if(is_dir($repoPath)) {
        $command = self::GITCOMMAND.' -C '.$repoPath.' '.self::GITLOG;
        $return = self::viewDiff(shell_exec($command));
      } else {
        $return = "Git repository path is wrong";
      }
    }
    $this->gitCommand = $command;
    return $return; 
  }
}

