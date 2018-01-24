<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Discoverer\Config;

use LionNet\MozPrefs\Discoverer\Config\Exceptions\InvalidBasePathException;
use LionNet\MozPrefs\Discoverer\Config\Exceptions\NoBasePathConfiguredException;
use LionNet\MozPrefs\Discoverer\Config\Exceptions\NoConfigFileException;
use Symfony\Component\Yaml\Yaml;

class BasePathConfig
{

    private $config;

    /**
     * @throws NoConfigFileException
     */
    public function __construct(string $configFilePath)
    {
        if (!is_readable($configFilePath)) {
            throw NoConfigFileException::create();
        }
        $this->config = Yaml::parse(file_get_contents($configFilePath));
    }

    /**
     * @return string
     * @throws NoBasePathConfiguredException
     * @throws InvalidBasePathException
     */
    public function getBasePath(): string
    {
        if (!isset($this->config['basePath']) || empty($this->config['basePath'])) {
            throw NoBasePathConfiguredException::create();
        }
        if (!is_dir($this->config['basePath'])) {
            throw InvalidBasePathException::create();
        }
        return $this->config['basePath'];
    }

}