<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Discoverer\Config;

interface BasePathConfig
{

    public function getBasePath(): string;
}