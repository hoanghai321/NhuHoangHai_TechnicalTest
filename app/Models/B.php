<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class B extends Model
{
    public function __construct(A $a)
    {
        return $a->hello();  
    }
    public function hello()
    {
        return 'Hello B';  
    }
}

