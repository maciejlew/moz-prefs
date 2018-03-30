<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Discoverer;

use LionNet\MozPrefs\Discoverer\Config\BasePathConfig;
use LionNet\MozPrefs\Discoverer\Config\Exceptions\InvalidBasePathException;
use LionNet\MozPrefs\Discoverer\Config\Exceptions\NoBasePathConfiguredException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class UserPreferencesDiscoverer
{

    /** @var string */
    private $basePath;

    /**
     * @param BasePathConfig $config
     * @throws NoBasePathConfiguredException
     * @throws InvalidBasePathException
     */
    public function __construct(BasePathConfig $config)
    {
        $this->basePath = $config->getBasePath();
    }

    /**
     * @return SplFileInfo[]
     */
    public function discover(): array
    {
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->basePath));
        $iterator = new UserPreferencesFileIterator($iterator);
        return iterator_to_array($iterator);
    }
}
