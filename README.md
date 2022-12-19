# Summa Frontend Bundle

[![Version Status](https://img.shields.io/badge/version-1.0-brightgreen.svg)]()


## Description
This bundle is for define templates for this project

## Features 
No add new feature, only define themes for this project

## Related Bundles
 
- [Extended] OroUIBundle (oro/platform/src/Oro/Bundle/UIBundle)
- SummaFrontedBundle

## Related Issues

* [[US] Crear pagina estatica - #15](https://summasol.assembla.com/spaces/Andikem-eCommerce/tickets/15--us--crear-pagina-estatica/details)
* [[US] Aplicar Colores y Base de Homepage - #9](https://summasol.assembla.com/spaces/Andikem-eCommerce/tickets/9--us--aplicar-colores-y-base-de-homepage/details)

## Install
For install this bundle copy to /src/Summa folder and run this commands.

```php
$ php bin/console cache:clear --env=dev
$ php bin/console oro:assets:install --env=dev --symlink
$ php bin/console oro:requirejs:build --env=dev
```

## Bundle structure

- [ ] Controller
- [ ] DependencyInjection
- [ ] EventListener
- [ ] Form
- [ ] Migrations
- [ ] Model
- [ ] Validator
- [x] Resources/config
- [ ] Resources/doc/
- [x] Resources/public/
- [ ] Resources/translations/
- [x] Resources/views/

#### Official links
* [ORO Dev guide] - Developer Guide.
* [ORO Create Bundle] - How to create new bundle.
* [Symfony Bundle] - The Bundle System.


[![Power by ](https://www.summasolutions.net/wp-content/uploads/2018/11/summa_color.png)](https://www.summasolutions.net)


[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [ORO Create Bundle]: <https://oroinc.com/orocrm/doc/current/dev-guide/cookbook/how-to-create-new-bundle>
   [Symfony Bundle]: <https://oroinc.com/orocrm/doc/current/dev-guide/cookbook/how-to-create-new-bundle>
   [ORO Dev guide]: <https://oroinc.com/orocrm/doc/current/dev-guide>
   