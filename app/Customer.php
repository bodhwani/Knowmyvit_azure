<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;



class Customer extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

}



