<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = [
        'last_name',
        'first_name', 
        'middle_name',
        'extention_name',
        'birthday',
        'rel_head',
        'marital_status',
        'address_1',
        'address_2',
        'education',
        'mobile_num',
        'telephone_num',
        'email',
        'height',
        'weight',
        'business_name',
        'house_built',
        'employment_record'
    ];
    //
}
