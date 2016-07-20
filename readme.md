# Router container integration

[![Build Status](https://img.shields.io/travis/weew/router-container-aware.svg)](https://travis-ci.org/weew/router-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/router-container-aware.svg)](https://scrutinizer-ci.com/g/weew/router-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/router-container-aware.svg)](https://coveralls.io/github/weew/router-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/router-container-aware.svg)](https://packagist.org/packages/weew/router-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/router-container-aware.svg)](https://packagist.org/packages/weew/router-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/router-container-aware`

## Introduction

This package integrates [weew/router](https://github.com/weew/router) with [weew/container](https://github.com/weew/container) and allows filters, parameter resolvers, etc. to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create a container aware instance of `Router` and pass in an instance of `IContainer`.

```php
$commander = new Weew\Router\ContainerAware\Router(new Container());
```
