# CakePHP Application Skeleton (Strawberry)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 4.x.

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Clone repository.

In working directory, run

```bash
composer install
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```
or
```bash
bin/cake server
```

Then visit `http://localhost:8765` to see the welcome page.

## Configuration

Read and edit the environment specific `config/app_local.php` and set up the
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.


# Fix: AdminLTE Bake Template Twig Filter Error

## Error
```
[Twig\Error\RuntimeError] array_filter(): Argument #2 ($callback) must be a valid callback or null
in vendor/maiconpinto/cakephp-adminlte-theme/templates/bake/Template/index.twig at line 63
```

## Cause

Newer versions of Twig no longer accept inline expressions as filter callbacks. The `BelongsTo` association filter in the AdminLTE bake template uses the old syntax.

## Fix

**File:** `vendor/maiconpinto/cakephp-adminlte-theme/templates/bake/Template/index.twig`, line 63

```twig
{# Before #}
{% for alias, details in associations.BelongsTo|filter(field == details.foreignKey) %}

{# After #}
{% for alias, details in associations.BelongsTo|filter(d => field == d.foreignKey) %}
```

## Persist the Fix

Since `vendor/` is not committed to source control, copy the patched template into your project so it survives `composer update`:

```
templates/plugin/AdminLTE/bake/Template/index.twig
```
