Symfony Form Application
============

The "Symfony Form Application" is a simple application to show how to
create a collection form following the [Symfony Best Practices][1].

Requirements
------------

Require the [usual Symfony application requirements][2].

  * PHP 7.2.9 or higher
  * Some PHP extensions
  * Composer
  * Symfony CLI
  
Installation
------------

Clone the [repository][3] on your computer:

```bash
$ git clone https://github.com/mickaelbober/symfony-form.git symfony-form
```

Composer
------------

[Download Composer][4] to install the `composer` binary on your computer and install
dependencies to the `./vendor` directory.

```bash
$ cd symfony-form/
$ composer install
```

Symfony CLI
------------

[Download Symfony][5] to install the `symfony` binary on your computer. 

```bash
$ wget https://get.symfony.com/cli/installer -O - | bash
```

Run this command and access the application in your
browser at the given URL (<https://localhost:8000> by default):

```bash
$ cd symfony-form/
$ symfony server:start
```

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][6] like Nginx or
Apache to run the application.

References
------------

 * [Validation][7]
 * [Validation Constraints Reference][8]
 * [How to Create a custom Validation Constraint][9]
 * [Bootstrap 4 Form Theme][10]
 * [How to Embed a Collection of Forms][11]
 * [Openclassrooms.com : Tutorial][12]

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/setup.html
[3]: https://github.com/mickaelbober/symfony-form
[4]: https://getcomposer.org/download/
[5]: https://symfony.com/download
[6]: https://symfony.com/doc/current/setup/web_server_configuration.html
[7]: https://symfony.com/doc/current/validation.html
[8]: https://symfony.com/doc/current/reference/constraints.html
[9]: https://symfony.com/doc/current/validation/custom_constraint.html
[10]: https://symfony.com/doc/current/form/bootstrap4.html
[11]: https://symfony.com/doc/current/form/form_collections.html
[12]: https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-4/5517026-interagissez-avec-vos-utilisateurs
