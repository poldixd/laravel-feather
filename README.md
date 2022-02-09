# poldixd/laravel-feather

Use [Feather Icons](https://feathericons.com) as a Blade `include()` or [Blade Component](https://laravel.com/docs/7.x/blade#components) in your Laravel 8.x or 9.x application. This Package uses [Feather 4.28.0](https://github.com/feathericons/feather/releases/tag/v4.28.0).

## Installation

Simply require poldixd/larave-feather through Composer:

```bash
composer require poldixd/laravel-feather
```

## Usage

Include the icon like a Blade template in your view:

```php+HTML
<!-- Your Blade view -->
@include('feather::airplay')

<!-- Output: -->
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
```

Optional you can use Blade Components if you're using [laravel](https://laravel.com) greater than 7.x.

```php+HTML
<!-- Your Blade view -->
<x:feather-activity />

<!-- Output: -->
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
```

You can find a list of all icons on [this](https://feathericons.com/) website.

### Using CSS Classes

You can include the icons with css classes.

```php+HTML
<!-- Your Blade view -->
@include('feather::airplay', ['class' => 'my-awesome-class my-second-class'])

<!-- or as a blade component -->
<x:feather-activity class="my-awesome-class my-second-class" />

<!-- Output: -->
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay my-awesome-class my-second-class"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
```

### Using Style attributes

```php+HTML
<!-- Your Blade view -->
@include('feather::airplay', ['style' => 'color: red'])

<!-- or as a blade component -->
<x:feather-activity style="color: red" />

<!-- Output: -->
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay" style="color: red"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
```

## License

poldixd/laravel-feather is licensed under the [MIT License](https://github.com/poldixd/laravel-feather/blob/master/LICENSE). The icons in this code are from [Feather](https://github.com/feathericons/feather). It is also licensed under the [MIT License](https://github.com/feathericons/feather/blob/master/LICENSE).