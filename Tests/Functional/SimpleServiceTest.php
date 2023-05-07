<?php

declare(strict_types=1);

namespace SBUERK\TF7TestExtension\Tests\Functional;

use SBUERK\TF7TestExtension\SimpleService;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class SimpleServiceTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'sbuerk/tf7-test-extension',
    ];

    /**
     * @test
     */
    public function methodTextReturnsExpectedValue(): void
    {
        self::assertSame('simpleservice::text()', $this->get(SimpleService::class)->text());
    }
}
