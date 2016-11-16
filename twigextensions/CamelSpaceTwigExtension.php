<?php
/**
 * Camel Space plugin for Craft CMS
 *
 * Camel Space Twig Extension
 *
 * @author    Venveo
 * @copyright Copyright (c) 2016 Venveo
 * @link      https://www.venveo.com
 * @package   CamelSpace
 * @since     1.0.0
 */

namespace Craft;

class CamelSpaceTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'CamelSpace';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            'camelSpace' => new \Twig_Filter_Method(
                $this,
                'camelSpace'
            ),
        ];
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            'camelSpace' => new \Twig_Function_Method(
                $this,
                'camelSpace'
            ),
        ];
    }

    /**
     * @param string $text
     * @return string
     */
    public function camelSpace($text)
    {
        return preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $text);
    }
}