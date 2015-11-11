# Router container integration

[![Build Status](https://img.shields.io/travis/weew/php-router-container-aware.svg)](https://travis-ci.org/weew/php-router-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/php-router-container-aware.svg)](https://scrutinizer-ci.com/g/weew/php-router-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-router-container-aware.svg)](https://coveralls.io/github/weew/php-router-container-aware)
[![Dependencies](https://img.shields.io/versioneye/d/php/weew:php-router-container-aware.svg)](https://versioneye.com/php/weew:php-router-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/php-router-container-aware.svg)](https://packagist.org/packages/weew/php-router-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/php-router-container-aware.svg)](https://packagist.org/packages/weew/php-router-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/php-router-container-aware`

## Introduction

This package integrates [weew/php-router](https://github.com/weew/php-router) with [weew/php-container](https://github.com/weew/php-container) and allows filters, parameter resolvers, etc. to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create a container aware instance of `IRouter` and pass in an instance of `IContainer`.

```php
$commander = new Weew\Router\ContainerAware\Router(new Container());
```
