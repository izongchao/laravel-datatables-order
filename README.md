<h1 align="center"> laravel-datatables-order </h1>

<p align="center"> Laravel ORM 中 jquery datatables 排序</p>

## 安装

```shell
$ composer require izongchao/laravel-datatables-order -vvv
```

## 使用

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
## License

MIT
