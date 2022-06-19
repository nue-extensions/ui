nue-extensions/ui
========

[![Packagist](https://img.shields.io/packagist/l/nue-extensions/ui.svg?maxAge=2592000)](https://packagist.org/packages/nue-extensions/ui)
[![Total Downloads](https://img.shields.io/packagist/dt/nue-extensions/ui.svg?style=flat-square)](https://packagist.org/packages/nue-extensions/ui)
[![Pull request welcome](https://img.shields.io/badge/pr-welcome-green.svg?style=flat-square)]()

Backend Template for Nue.

## Installation

```
$ composer require nue-extensions/ui -vvv

$ php artisan vendor:publish --provider="Nue\Ui\UiServiceProvider"
```

## Usage

### Layouts
`@extends('ui::app')` or `@extends('ui::blank')`

### Custom favicon, brands and sidebar themes
You can customize them from `config/ui.php` using your links.

### Custom menu (manual)
Manage it as usual code from `resources/views/vendor/nue/menu/*`.

### Example

Open `http://localhost/example`.

## Components (soon)

### Alert
```html
<x-alert class="alert-soft-danger"></x-alert>
```

License
------------
Licensed under [The MIT License (MIT)](LICENSE).