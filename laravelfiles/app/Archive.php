<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    public function loadAllArchives()
    {
        $data = Archive::all();
        dd($data);
    }
}
