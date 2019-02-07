[![Build Status](https://travis-ci.org/php-service-bus/module-phpinnacle-transport.svg?branch=v3.0)](https://travis-ci.org/php-service-bus/module-phpinnacle-transport)
[![Code Coverage](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/badges/coverage.png?b=v3.0)](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/?branch=v3.0)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/badges/quality-score.png?b=v3.0)](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/?branch=v3.0)

## What is it?

Module for working with RabbitMQ (via [phpinnacle/ridge](https://github.com/phpinnacle/ridge)) transport implementation

## Installation

```bash
composer req php-service-bus/module-phpinnacle-transport
```

Example of module creation

```php
$module = new PhpInnacleTransportModule(
   'amqp://guest:guest@localhost:5672', // Connection DSN
   'exchangeName',                      // Default exchange name
   'queueName'                          // The queue we will listen to
);
```
The [configureQos()](https://github.com/php-service-bus/module-phpinnacle-transport/blob/v3.0/src/PhpInnacleTransportModule.php#L82) method is used to configure the QoS parameters
```php
$module->configureQos(10, 100, true);
```

Enable module:

```php
$bootstrap->applyModules($module);
```
