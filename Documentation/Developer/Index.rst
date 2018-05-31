.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt

.. _developer:

Developer Manual
================

.. _condition:

TypoScript condition
--------------------

A TypoScript condition to check cookie status. 

.. code-block:: typoscript

   [TYPO3Liebhaber\CookieDataPrivacy\TypoScript\Conditions\CookieStatusCondition]
       cookie status is deny.
   [global]

.. _utility:

Utility
-------

To get status of cookie in your controller/PHP file (status: allow or deny)

.. code-block:: php

	use TYPO3Liebhaber\CookieDataPrivacy\Utility\CookieDataPrivacyUtility; // put this line before your controler start

	$status = CookieDataPrivacyUtility::getStatus();

.. _viewHelpers:

ViewHelpers
-----------

To get status of cookie in your fluid template (status: allow or deny)

::

   {namespace cp=TYPO3Liebhaber\CookieDataPrivacy\ViewHelpers}

   <cp:cookieDataPrivacy /> or inline {cp:cookieDataPrivacy()}

To get mandatory checkboxes for forms/newsletter/registration form etc. May multiple forms has different text, so add your text in locallang.xlf with different translateKey.

::

   {namespace cp=TYPO3Liebhaber\CookieDataPrivacy\ViewHelpers}

   <f:format.raw><cp:formPrivacy translateKey="data_privacy_contact_form" /></f:format.raw>

.. _frontend:

Frontend
--------

Revoke button

::

   <button id="cookie-btn-open" class="btn btn-primary">Revoke</button>