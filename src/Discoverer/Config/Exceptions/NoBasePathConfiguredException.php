<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Discoverer\Config\Exceptions;

class NoBasePathConfiguredException extends ConfigurationException
{

    /**
     * @return NoBasePathConfiguredException
     */
    public static function create(): self
    {
        return new self('Base path not set. See resources/config.yml.dist file.');
    }
}
