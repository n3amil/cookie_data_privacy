<?php
namespace TYPO3Liebhaber\CookieDataPrivacy\ViewHelpers;

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
 *  (c) 2018 Ghanshyam Gohel <ghanshyam.typo3developer@gmail.com>
 *
 * uses case for fluid template
 * {namespace cp=TYPO3Liebhaber\CookieDataPrivacy\ViewHelpers}
 * <cp:cookieDataPrivacy /> or inline {cp:cookieDataPrivacy()}
 *
 * get cookie status for marker/piBase extension see CookieDataPrivacyUtility
 ***/
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class CookieDataPrivacyViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    
    /**
     * @return string
     */
    public function render() {
        $cookie_status = NULL;

        if($_COOKIE['cookieconsent_status']){
          $cookie_status = $_COOKIE['cookieconsent_status'];
        }

        return $cookie_status;
    }
}

?>