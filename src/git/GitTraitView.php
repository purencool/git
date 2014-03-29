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
namespace GitTraitView;

trait GitTraitView
{
  public static function viewPre($stringView)
  {
     return "<pre>".$stringView."</pre>";
  }
}