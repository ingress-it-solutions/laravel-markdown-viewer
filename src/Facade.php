<?php
/**
 * Laravel-Markdown-Viewer
 * 
 * A small, lightweight and easy-to-use Laravel package for
 * handling markdown.
 * 
 * @author    Ingress Team <hello@ingressit.com>
 * @package   ingress-it-solutions/laravel-markdown-viewer
 * @link      https://github.com/ingress-it-solutions/laravel-markdown-viewer
 * @license   MIT
 */

namespace Ingress\Markdown;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'markdown';
    }
}
