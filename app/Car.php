<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'max_speed',
        'is_automatic',
        'engine',
        'number_of_doors',
    ];

    public function scopeSearchByBrand($query, $brand = "")
    {
        if (!$brand) {
            return $query;
        }

        return $query->where('brand', 'like', "%{$brand}%");
    }

    public function scopeSearchByModel($query, $model = "")
    {
        if (!$model) {
            return $query;
        }

        return $query->where('model', 'like', "%{$model}%");
    }
}
