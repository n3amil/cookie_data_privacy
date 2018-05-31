<?php
namespace TYPO3Liebhaber\CookieDataPrivacy\Domain\Model;

/***
 *
 * This file is part of the "Cookie Data Privacy" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Ghanshyam B. Gohel <ghanshyam.typo3developer@gmail.com>
 *
 ***/

/**
 * FileInclude
 */
class FileInclude extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * originalPath
     *
     * @var string
     */
    protected $originalPath = '';

    /**
     * path
     *
     * @var string
     */
    protected $path = '';

    /**
     * Returns the originalPath
     *
     * @return string $originalPath
     */
    public function getOriginalPath()
    {
        return $this->originalPath;
    }

    /**
     * Sets the originalPath
     *
     * @param string $originalPath
     * @return void
     */
    public function setOriginalPath($originalPath)
    {
        $this->originalPath = $originalPath;
    }

    /**
     * Returns the path
     *
     * @return string $path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets the path
     *
     * @param string $path
     * @return void
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
}
