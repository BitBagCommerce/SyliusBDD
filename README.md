![BitBag](https://bitbag.pl/static/bitbag-sylius.png)

**This is Sylius Standard Edition repository for the purposes of BitBagBlog about Sylius Behavioral-driven development process.**

The tutorial can be found on [BitBagBlog](https://bitbag.shop/blog/post/working-with-bdd-and-resources-in-sylius-part-0-introduction).

## Support

We work on amazing eCommerce projects on top of Sylius and Pimcore. Need some help or additional resources for a project?
Write us an email on mikolaj.krol@bitbag.pl or visit [our website](https://bitbag.shop/)! :rocket:

Installation
------------

```bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar install
$ yarn install
$ yarn run gulp
$ php bin/console sylius:install --env test
$ php bin/console server:start --env test
$ open http://localhost:8000
```

Testing
------------

```bash
$ bin/behat features/*
$ bin/phpspec run
```
