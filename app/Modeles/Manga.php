<?php

namespace App\Modeles;

use DB;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    public function getMangas()
    {
        $LesMangas=DB::table('manga')->select('id_manga','titre','prix','genre')->get();
        return $LesMangas;
    }
}
