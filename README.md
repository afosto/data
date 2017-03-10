# Afosto Data

Abstraction of the data models that are to be used to interact with our API. 
Currently this package has support for the following 'Operations':

- [Product](https://docs.afosto.com/#/product)

More operations are to be included soon. If you see a great usecase for this but need more information just contact us at support@afosto.com.

##Why

There already is an Api Client, why do I need this package? Well have concluded that the api client as it is right now it to tightly coupled with the API and interacting with it. This package is part of a bigger idea that we want to
decouple parts that might be usefull for interaction with the API.

For instance you can already use the separated [oauth-client](https://github.com/afosto/oauth-client) to solve your problems in obtaining authentication for the API.

## Getting Started

Simply follow the installation instructions.

### Prerequisites

What things you need to install the software and how to install them
- PHP5.5+
- Composer (for installation)

### Installing

Installing is easy through [Composer](http://www.getcomposer.org/). 

```
composer require afosto/data
```

## Examples

Now to build a product model:

```php
$product = new Product();
```
Set the values inline:
```php
$product->weight = 10;

$product->supplier = new Supplier();
$product->supplier->id = 1;
$product->supplier->name = 'TestSupplier';
```
Or use setAttributes to set data based on an input array
```php
$item = new Item();
$item->setAttributes([
    'sku'    => 'TEST-SKU-234',
    'ean'    => '234554245',
    'prices' => [
        [
            'price_gross' => 23.54,
            'tax_class'   => [
                'id' => 2,
            ],
        ],
    ],
]);
$product->items[] = $item;
```
Optionally validate the newly generated model:
```php
$product->validate();
```
Returns the structured data as an array:
```php
$product->getAttributes();
```

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/afosto/data/tags). 


## License

This project is licensed under the Apache License 2.0 - see the [LICENSE.md](LICENSE.md) file for details