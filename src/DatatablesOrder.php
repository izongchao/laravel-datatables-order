<?php

/*
 * This file is part of the izongchao/gweather.
 *
 * (c) xuzongchao <zchao0723@126.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Izongchao\LaravelDatatablesOrder;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * Trait DatatablesOrder.
 */
trait DatatablesOrder
{
    /**
     * 高级排序.
     *
     * @param $query
     * @param $request
     *
     * @return mixed
     */
    public function scopeDatatablesOrder($query, Request $request)
    {
        $key = array_get($request->all(), 'order.0.column', false);
        $dir = array_get($request->all(), 'order.0.dir', false);

        if ($key && $dir) {
            $columnKey = 'columns.'.$key.'.data';
            $column = array_get($request->all(), $columnKey, false);

            if ($column && Schema::hasColumn($this->getTable(), $column)) {
                if ('desc' === $dir) {
                    return $query->latest($column);
                }

                return $query->oldest($column);
            }
        }

        return $query;
    }
}
