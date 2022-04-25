<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class A extends Model 
{
    public function hello()
    {
        return 'Hello A';
    }
}
