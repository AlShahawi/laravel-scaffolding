Laravel Scaffolding
=====================
A non-official laravel application scaffolding that includes `debugbar`, `ide-helper`, `.php_cs` and `Eslint` configurations.
Mirrored from [https://github.com/laravel/laravel.git](https://github.com/laravel/laravel.git).

## Requirements
The requirements is the same as of the [official requirements](https://laravel.com/docs/6.0/installation#server-requirements).

## Installation
You can also install Laravel via Composer by issuing the `create-project` command in your terminal:
```
composer create-project --prefer-dist alshahawi/laravel-scaffolding blog
```
The above command will install a new laravel application for you.

## Composer Scripts
We added composer scripts to avoid long and repeated commands. These scripts are:
```
composer php-cs:issues # Used for checking for any configured code style issues.

composer php-cs:fix # Used for fix any configured code style issues automatically.

composer auto-complete:generate # Used for generating ide helper files.

composer app:clear # Used for clear application cache files.
```

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
