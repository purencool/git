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

trait GitTraitView
{

  /**
   *  Accepts array and prints the array into as string.
   *
   *  @static
   *  @param array $pregOutput accepts array
   *
   *  @return string
   */
  private static function getPrintrOutput($pregOutput)
  {
    ob_start();
      print_r($pregOutput);
    $preReturn = \ob_get_clean();

    return $preReturn;
  }
  
  /**
   *  Accepts array and prints the array into as string.
   *
   *  @static
   *  @param array $pregOutput accepts array
   *
   *  @return string
   */
  private static function getFormattedDiff($inputArr = array())
  {
    $return = "";
      foreach($inputArr as $inputArrVal)
    {
     //echo substr($inputArrVal, 0, 3);
      if(substr($inputArrVal, 0, 3) == '---' || substr($inputArrVal, 0, 1) == '-')
      {
        $return .= "<div class='removed'>$inputArrVal</div>";
      }
      elseif(substr($inputArrVal, 0, 3) == '+++' || substr($inputArrVal, 0, 1) == '+')
      {
        $return .= "<div class='added'>$inputArrVal</div>";
      }
      else 
      {
         $return .= "<div class='none'>$inputArrVal</div>"; 
      }
    }
    return $return;
  }

  /**
   *  Gets variable string and wraps it in html pre tags
   *
   *  @static
   *  @param string $stringView any wrapped in pre tags
   *
   *  @return string
   */
  public static function viewPre($stringView)
  {
     return "<pre>".$stringView."</pre>";
  }

  /**
   *  Gets variable string and wraps it in html pre tags
   *
   *  self::getPrintrOutput() gets array add turns print_r into string
   *  self::viewPre() wraps string in pre tags
   *
   *  @static
   *  @param string $stringView for html formatting
   *  @return string
   */
  public static function viewDiff($stringView, $retArrayPre = \FALSE)
  {
     $pregOutput = preg_split('/[\r\n]+/', $stringView);
     
     if( $retArrayPre == TRUE )
     {
       return self::viewPre(self::getPrintrOutput($pregOutput));
     }
     else
     {
       return self::getFormattedDiff($pregOutput);
     }
  }
   
  /**
   *  Gets variable string and wraps it in html pre tags
   *
   *  @return string
  */
  public static function className()
  {
    return "GitTraitView";
  }
}
