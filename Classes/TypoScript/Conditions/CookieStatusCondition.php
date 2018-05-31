<?php
namespace TYPO3Liebhaber\CookieDataPrivacy\TypoScript\Conditions;

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
 ***/
 use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class CookieStatusCondition extends \TYPO3\CMS\Core\Configuration\TypoScript\ConditionMatching\AbstractCondition {

   /**
    * Evaluate condition
    *
    * @param array $conditionParameters
    * @return bool
    */
   public function matchCondition(array $conditionParameters) {
      $result = FALSE;
      
      if($_COOKIE['cookieconsent_status']){
		$cookie_status = $_COOKIE['cookieconsent_status'];
		
		if($cookie_status === 'deny'){
			$result = TRUE;
		}
      }
      
      return $result;
   }
}