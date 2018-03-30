<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Tests\Discoverer\Fixtures;

use LionNet\MozPrefs\Tests\Discoverer\Doubles\BasePathConfigStub;

class ConfigFixture
{

    /**
     * @param string $basePath
     * @return BasePathConfigStub
     */
    public static function createBasePathConfig(string $basePath): BasePathConfigStub
    {
        return new BasePathConfigStub($basePath);
    }
}
