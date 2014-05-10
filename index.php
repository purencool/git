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
include("Controller.php");
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>Git Test Page</title>
    <link rel='stylesheet' href='style.css'>
  </head>
  <body>
    <div id='wrapper'>
      <header>
        <h1>Git Test Page</h1>
      </header>
      <section>
        <article>
          <div>
            <h3>Git Repository Path</h3>
            <?php print $renderGitRepoPath;?>
          </div>
          <div>
            <h3>Shell Test</h3>
            <?php print $renderShellTest;?>
          </div>
          <div>
            <h3>Git Log</h3>
            <?php print $renderGitLog;?>
          </div>
          <div>
            <h3>Git Diff</h3>
            <?php print $renderGitDiff;?>
          </div>
        </article>
      </section>
      <section>
       <nav>
       </nav>
      </section>  
     <footer>
       <p>Purencool Website Development</p>  
     </footer>
   </div>
  </body>
</html>
