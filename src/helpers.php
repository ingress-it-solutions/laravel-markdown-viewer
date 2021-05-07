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

if (! function_exists('markdown')) {
    /**
     * Short-hand helper function to parse a
     * markdown string to HTML.
     * 
     * @see \Ingress\Markdown\Parser::parse
     * @param  string  $markdown
     * @return string
     */
    function markdown($markdown)
    {
        return app('Ingress\Markdown\Parser')->parse($markdown);
    }
}

if (! function_exists('markdown_capture')) {
    /**
     * Short-hand helper function to parse
     * all output from a closure from markdown
     * to HTML.
     * 
     * @see \Ingress\Markdown\Parser::begin
     * @see \Ingress\Markdown\Parser::end
     * @param  Closure  $callback
     * @return string
     */
    function markdown_capture(Closure $callback)
    {
        $parser = app('Ingress\Markdown\Parser');
        $parser->begin();
        $callback();
        return $parser->end();
    }
}

