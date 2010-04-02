<?php
//Path to NOLOH on your system, this is our test path.
require_once('/var/www/htdocs/Stable/NOLOH/NOLOH.php');
/*
 * Path to NOLOHBadge Nodule, only necessary if the NOLOHBadge
 * nodule is not placed in the NOLOH nodules folder.
 */
require_once('../NOLOHBadge.php');

class BadgeTest extends WebPage
{
	function BadgeTest()
	{
		parent::WebPage('Welcome to BadgeTest');
		/* The default behavior of NOLOHBadge is to display
		 * an image next to the NOLOH version number.*/
		$badge1 = new NOLOHBadge(100, 100);
		/* However, you can decide to display a text-only version
		 * by passing in true to the textOnly parameter.
		 * an image next to the NOLOH version number.*/
		$badge2 = new NOLOHBadge(100, 200, true);
		/* Futhermore, you can decide to turn off the version
		 * number by passing in false to the showVersion parameter*/
		$badge3 = new NOLOHBadge(100, 300, true, false);
		/* Futhermore, you can decide to turn off the version
		 * number while keeping the image*/
		$badge4 = new NOLOHBadge(100, 400, false, false);
		
		$this->Controls->AddRange($badge1, $badge2, $badge3, $badge4);
	}
}
SetStartupPage('BadgeTest');
?>