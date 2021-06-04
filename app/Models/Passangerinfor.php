<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passangerinfor extends Model
{
    use HasFactory;
    protected $fillable = [

'FirstName','LastName','Gender','DateOfBirth','PhoneNumber','Email','locationFrom','locationto','n_id','Agance'
    ];
}
