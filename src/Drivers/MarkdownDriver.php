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

namespace Ingress\Markdown\Drivers;

interface MarkdownDriver
{
    /**
     * Parses a markdown string to HTML.
     * 
     * @param  string  $text
     * @return string
     */
    function text($text);

    /**
     * Parses a single line of markdown to HTML.
     *
     * @param  string  $text
     * @return string
     */
    function line($text);
}