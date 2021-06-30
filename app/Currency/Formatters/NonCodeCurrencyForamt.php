<?php

namespace App\Currency\Formatters;

use Torann\Currency\Contracts\FormatterInterface;

class FooBar implements FormatterInterface
{
    /**
     * Config options.
     *
     * @var array
     */
    protected $config;

    /**
     * Create a new instance.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * {@inheritdoc}
     */
    public function format($value, $code = null)
    {
        return $value . ($this->config['append_code'] === true ? $code : '');
    }
}