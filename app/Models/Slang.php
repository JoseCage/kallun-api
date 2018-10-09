<?php

namespace Kallun\Models;

use Illuminate\Database\Eloquent\Model;
use Kallun\Traits\UuidTrait as Uuids;

class Slang extends Model
{
    use Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filliable = [
        'name', 'meaning', 'example', 'description'
    ];
}
