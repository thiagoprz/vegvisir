# Vegvisir - Laravel Search Indexer
[![PHPUnit](https://github.com/thiagoprz/vegvisir/actions/workflows/phpunit.yml/badge.svg?branch=main)](https://github.com/thiagoprz/vegvisir/actions/workflows/phpunit.yml)


## Table of contents
* [Installation](#installation)
* [Configuration](#configuration)
* [Available Adapters](#available-adapters)
    - [Elasticsearch](#elasticsearch)
    - [MongoDB](#mongodb)
* [Create You Own Adapter](#create-you-own-adapter)
* [Roadmap](#roadmap)
* [Contributing](#package-testing)
* [Testing](#testing)
* [Support](#support)
    - [Issues](#issues)
* [License](#license)

## Installation
Install it using composer on your application:
`composer require thiagoprz/vegvisir`


## Configuration
Install chosen AdapterServiceProvider (see [adapters](#adapters) for more information) service provider to `config/app.php`:
```
..
'providers' => [
...
    \Thiagoprz\Vegvisir\VegvisirElasticSearchServiceProvider::class,
],
...
```

Publish configuration by running
`php artisan vendor:publish` and typing the number for your desired adapter (if using multiple adapters there's no need for running more than once, just choose one of them).

This will add the `vegvisir.php` file to the `config` directory. Bear in mind that this configuration contains directives for all adapters inside your application, those you don't need multiple configurations files for each adapter you use in case your application will be using more than one.


## Available Adapters
This package comes with built-in Adapters that can be easily use without any customization depending on your needs, of course you can and are encouraged to build your own Adapter to fill any specification or if you are using a different platform that the ones listed here.


### Elasticsearch
This adapter connects to Elasticsearch host(s) and will insert/update/delete everytime changes happen to your model.

Follow the instructions in the adapter [repository](https://github.com/thiagoprz/vegvisir-elasticsearch).


### MongoDB

> **Status: Under Development**

This adapter connects to MongoDB and will insert/update/delete everytime changes happen to your model.

Follow the instructions in the adapter [repository](https://github.com/thiagoprz/vegvisir-mongodb).

## Create You Own Adapter
The main idea behind this project is to allow enhancing Laravel applications by using different databases from the main one (usually MySQL) as the entry point for search requests, those providing a better preformance and avoiding performance issues for large operations on the database. 
Based on this idea this repository will be useful for anyone who wants to implement their own search tool inside laravel application, it's really straight forward to create an adapter by following this steps.

### Adapter Package Structure

- src/
  - Adapters/
    - CustomAdapter.php 
  - config/
    - vegvisir.php 
  - Repositories/
    - CustomRepository.php
  - CustomServiceProvider.php

## Roadmap
- Implement as mush sustainable as possible the most diverse numbers of adapters for enhancing Laravel Application

| Adapter                           | STATUS      | Release Version | Engine Version¹ |
|-----------------------------------|-------------|-----------------|-----------------|
| [Elastic Search](#elastic-search) | Done        | 0.0.1           | 7.11.0          |
| [MongoDB](#mongodb)               | In Progress |                 |                 |
| MySQL                             | Todo        |                 |                 |
| Cassandra/ScyllaDB                | Todo        |                 |                 |
| SQLite                            | Todo        |                 |                 |


¹ Engine version means the version of the software used to build the package, there is a possibility that depending on the changes (specially breaking changes) made on the Third Party this package may not be stable or not work as expected.

## Contributing

## Testing

```
vendor/phpunit/phpunit/phpunit --configuration phpunit.xml tests
```

## Support

### Issues
Please feel free to [create issues](https://github.com/thiagoprz/vegvisir/issues) on this package, it will help a lot. I will address it as soon as possible.

## License
This package is licensed under the
[MIT](License.txt) license.


<img width="36" height="36" src="assets/Vegvisir.svg">
