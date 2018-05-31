<?php
namespace TYPO3Liebhaber\CookieDataPrivacy\Utility;

/***
 * Copyright notice
 *
 * (c) 2018 Ghanshyam Gohel <ghanshyam.typo3developer@gmail.com>
 * 
 * All rights reserved
 *
 * This file is part of the "Cookie Data Privacy" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 * uses case for extBase
 * use TYPO3Liebhaber\CookieDataPrivacy\Utility\CookieDataPrivacyUtility; // put this line before your controler start
 * $status = CookieDataPrivacyUtility::getStatus();
 *
 * uses case for marker/piBase extension
 * use TYPO3Liebhaber\CookieDataPrivacy\Utility\CookieDataPrivacyUtility; // put this line before your controler start
 * 
 * in function where marker is define
 * $status = CookieDataPrivacyUtility::getStatus();
 * if($status === 'deny'){ //script on deny status }elseif($status === 'allow'){ //script on allow status }
 *
 * $marker['###COOKIE_STATUS###']= $status; // set marker if needed
 * 
 * ###COOKIE_STATUS### <!-- use this marker in your template -->
 ***/
 use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class CookieDataPrivacyUtility {

   /**
    * cookie status
    *
    * @return string
    */
   public function getStatus() {
      $cookie_status = NULL;
      
      if($_COOKIE['cookieconsent_status']){
	      $cookie_status = $_COOKIE['cookieconsent_status'];
      }
      
      return $cookie_status;
   }
}