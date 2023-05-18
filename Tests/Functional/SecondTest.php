<?php

declare(strict_types=1);

namespace SBUERK\TF7TestExtension\Tests\Functional;

use TYPO3\CMS\Core\Cache\CacheManager;
use TYPO3\CMS\Core\Cache\Frontend\PhpFrontend;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class SecondTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'sbuerk/tf7-test-extension',
    ];

    /**
     * @test
     */
    public function checkThatCacheEntryIsNotSet(): void
    {
        /** @var PhpFrontend $core */
        $core = $this->get(CacheManager::class)->getCache('core');
        self::assertFalse($core->require('test'));
    }
}
