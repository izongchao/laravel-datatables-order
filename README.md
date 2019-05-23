<h1 align="center"> laravel-datatables-order </h1>

<p align="center"> Datatables order by laravel..</p>

## Installing

```shell
$ composer require izongchao/laravel-datatables-order -vvv
```

## Usage

先在模型中use DatatablesOrder
```php
/**
 * Class User
 */
class User extends Model
{
    use DatatablesOrder;
}
```
调用排序
```php

User::datatablesOrder($request)->get();
```
 


## Contributing

You can contribute in one of three ways:


1. File bug reports using the [issue tracker](https://github.com/izongchao/laravel-datatables-order/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/izongchao/laravel-datatables-order/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
