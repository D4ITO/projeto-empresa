<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataClient extends Model
{
    protected $fillabe = [
        "name",
        "lastname",
        "rgs",
        "email",
        "country",
        "adress",
        "city",
        "region",
        "postalcode"
    ];
}
