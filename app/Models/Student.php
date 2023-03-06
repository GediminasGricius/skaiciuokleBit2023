<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ["name", "surname", "year", "phone", "group_id"];

    public function group(){
       return $this->belongsTo(Group::class);
    }

    public function scopeAleksai(Builder $query){
        $query->where("name", "=",'Alexie');
        $query->orderBy('surname', "ASC");
    }

    public function scopeYear(Builder $query, $year){
        $query->where('year', '=', $year);
    }

}
