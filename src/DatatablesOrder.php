<?php

namespace Izongchao\LaravelDatatablesOrder;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * Trait DatatablesOrder
 * 
 * @package Izongchao\LaravelDatatablesOrder
 */
trait DatatablesOrder
{
    /**
     * 高级排序
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
            $columnKey = 'columns.' . $key . '.data';
            $column = array_get($request->all(), $columnKey, false);

            if ($column && Schema::hasColumn($this->getTable(), $column)) {
                if ($dir === 'desc') {
                    return $query->latest($column);
                }
                return $query->oldest($column);
            }
        }

        return $query;
    }
}
