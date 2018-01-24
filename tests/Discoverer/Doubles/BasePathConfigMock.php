<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Tests\Discoverer\Doubles;

use LionNet\MozPrefs\Discoverer\Config\BasePathConfig;

class BasePathConfigMock extends BasePathConfig
{

    /** @var string */
    public $basePath;

    /**
     * Intentional overwrite
     */
    public function __construct(string $configFilePath) {}

    /**
     * @return string
     */
    public function getBasePath(): string
    {
        return $this->basePath;
    }

}