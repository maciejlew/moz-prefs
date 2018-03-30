<?php

declare(strict_types=1);

namespace LionNet\MozPrefs\Tests\Discoverer\Unit;

use LionNet\MozPrefs\Discoverer\UserPreferencesDiscoverer;
use LionNet\MozPrefs\Tests\Discoverer\Fixtures\FileSystemFixture;
use LionNet\MozPrefs\Tests\Discoverer\Fixtures\ConfigFixture;
use PHPUnit\Framework\TestCase;

class UserPreferencesDiscovererTest extends TestCase
{

    /** @var UserPreferencesDiscoverer */
    private $discoverer;

    /**
     * @before
     */
    public function init()
    {
        $fileSystemStream = FileSystemFixture::create('test_resources');
        $basePath = $fileSystemStream->url() . DIRECTORY_SEPARATOR . 'profilesPath';
        $config = ConfigFixture::createBasePathConfig($basePath);
        $this->discoverer = new UserPreferencesDiscoverer($config);
    }

    /**
     * @test
     */
    public function itShouldFindUserPreferenceFileInPath()
    {
        $userPreferenceFiles = $this->discoverer->discover();

        $this->assertCount(2, $userPreferenceFiles);
        foreach ($userPreferenceFiles as $userPreferenceFile) {
            $this->assertEquals('prefs.js', $userPreferenceFile->getFilename());
        }
    }
}
