<?php

namespace App;

use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use BelongsToTenants;

    protected $guarded = [];
}
