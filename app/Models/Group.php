<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;


    public function students(){
        return $this->hasMany(Student::class);
    }

    public function scopeFilter(Builder $query, $filter){
        if ($filter!=null){
            if (isset($filter->name) && $filter->name!=null){
                $query->where("name", "like", "%$filter->name%");
            }
            if (isset($filter->year) && $filter->year!=null){
                $query->where("year", "=", "$filter->year");
            }
        }
        $query->orderBy("name", "ASC");

    }

}
