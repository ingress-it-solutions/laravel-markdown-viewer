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

use Parsedown;

class ParsedownDriver implements MarkdownDriver
{
    protected $parser;

    /**
     * Constructs a new ParsedownDriver instance.
     * 
     * @param  array  $config
     */
    public function __construct(array $config)
    {
        $this->parser = new Parsedown;

        $this->setOptions($config);
    }

    /**
     * {@inheritDoc}
     */
    public function text($text)
    {
        return $this->parser->text($text);
    }

    /**
     * {@inheritDoc}
     */
    public function line($text)
    {
        return $this->parser->line($text);
    }

    private function setOptions(array $config)
    {
        if (isset($config['urls'])) {
            $this->parser->setUrlsLinked($config['urls']);
        }

        if (isset($config['escape_markup'])) {
            $this->parser->setMarkupEscaped($config['escape_markup']);
        }

        if (isset($config['breaks'])) {
            $this->parser->setBreaksEnabled($config['breaks']);
        }
    }
}