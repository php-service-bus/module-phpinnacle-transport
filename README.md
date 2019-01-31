[![Build Status](https://travis-ci.org/php-service-bus/module-phpinnacle-transport.svg?branch=master)](https://travis-ci.org/php-service-bus/module-phpinnacle-transport)
[![Code Coverage](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/php-service-bus/module-phpinnacle-transport/?branch=master)

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
The [configureQos()](https://github.com/php-service-bus/module-phpinnacle-transport/blob/master/src/PhpInnacleTransportModule.php#L82) method is used to configure the QoS parameters
```php
$module->configureQos(10, 100, true);
```

Enable module:

```php
$bootstrap->applyModules($module);
```
