<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Discoverer\Config\Exceptions;

class InvalidBasePathException extends ConfigurationException
{

    /**
     * @return InvalidBasePathException
     */
    public static function create(): self
    {
        return new self('Invalid base path. See resources/config.yml file.');
    }

}