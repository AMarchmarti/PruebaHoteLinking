<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    public $primaryKey = 'id';

    public $timestamps = true;
}
