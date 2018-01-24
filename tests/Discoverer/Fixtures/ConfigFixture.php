<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Tests\Discoverer\Fixtures;

use LionNet\MozPrefs\Discoverer\Config\BasePathConfig;
use LionNet\MozPrefs\Tests\Discoverer\Doubles\BasePathConfigMock;

class ConfigFixture
{

    /**
     * @param string $basePath
     * @return BasePathConfig
     */
    public static function createBasePathConfig(string $basePath): BasePathConfig
    {
        $config = new BasePathConfigMock('any');
        $config->basePath = $basePath;
        return $config;
    }

}