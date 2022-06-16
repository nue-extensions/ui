nuesu/ui
========

[![Packagist](https://img.shields.io/packagist/l/nuesu/ui.svg?maxAge=2592000)](https://packagist.org/packages/nuesu/ui)
[![Total Downloads](https://img.shields.io/packagist/dt/nuesu/ui.svg?style=flat-square)](https://packagist.org/packages/nuesu/ui)
[![Pull request welcome](https://img.shields.io/badge/pr-welcome-green.svg?style=flat-square)]()

Backend Template for Nue.

## Installation

```
$ composer require nuesu/ui -vvv

$ php artisan vendor:publish --provider="Nue\Ui\UiServiceProvider"
```

## Usage

### Layouts
`@extends('ui::app')` or `@extends('ui::blank')`

### Change Icons (& Favicon)
You can customize them from `config/ui.php` using your links.

### Custom Menu (Manual)
Manage it as usual code from `resources/views/vendor/nue/menu/*`.

### Example

Open `http://localhost/example`.

## Components (Soon)

### Alert
```html
<x-alert class="alert-soft-danger"></x-alert>
```

License
------------
Licensed under [The MIT License (MIT)](LICENSE).