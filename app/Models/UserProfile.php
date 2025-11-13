<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class UserProfile extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
      "id",
      "Username",
        "email",
        "image_url",
      "phonenumber",
      "	EditAdress",
      "setAsPrimeryAdd"
    ];
}
