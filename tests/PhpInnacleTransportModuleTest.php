<?php

/**
 * phpinnacle transport module for PHP Service Bu
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\Transport\Module\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;
use ServiceBus\Transport\Module\PhpInnacleTransportModule;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 *
 */
final class PhpInnacleTransportModuleTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     *
     * @throws \Throwable
     */
    public function boot(): void
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->addDefinitions(['service_bus.logger' => new Definition(NullLogger::class)]);

        $module = new PhpInnacleTransportModule(
            (string) \getenv('TRANSPORT_CONNECTION_DSN'),
            'test',
            'qwerty'
        );

        $module->boot($containerBuilder);

        $containerBuilder->compile();

        static::assertTrue(true);
    }
}
