<?php
/**
 * Camel Space plugin for Craft CMS
 *
 * Convert camelCased strings to spaces
 *
 * @author    Venveo
 * @copyright Copyright (c) 2016 Venveo
 * @link      https://www.venveo.com
 * @package   CamelSpace
 * @since     1.0.0
 */

namespace Craft;

class CamelSpacePlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Camel Space');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Convert camelCased strings to spaces');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/venveo/camelspace/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/venveo/camelspace/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Venveo';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://www.venveo.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.camelspace.twigextensions.CamelSpaceTwigExtension');

        return new CamelSpaceTwigExtension();
    }
}