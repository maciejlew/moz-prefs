<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Tests\Discoverer\Doubles;

use LionNet\MozPrefs\Discoverer\Config\BasePathConfig;

class BasePathConfigStub implements BasePathConfig
{

    private $basePath;

    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function getBasePath(): string
    {
        return $this->basePath;
    }

}