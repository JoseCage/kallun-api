<?php

namespace Kallun\Http\Controllers\API;

use Kallun\Http\Controllers\Controller;
use Kallun\Http\Resources\SlangCollection as Slangs;
use Kallun\Models\Slang;

class SlangsController extends Controller
{
    //
    public function getAllSlangs()
    {
        return new Slangs(Slang::paginate(20));
    }
}
