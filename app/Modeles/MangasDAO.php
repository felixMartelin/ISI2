<?php

namespace App\Modeles;

use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Manga;

class MangasDAO extends DAO
{
    public function getLesMangas(){
        $mangas = DB::table('manga')->get();
       // $genres = DB::table('genre')->get()
        $lesMangas = array();
        foreach ($mangas as $manga){
            $idmanga = $manga->id_manga;
            $lesMangas[$idmanga] = $this->creerObjetMetier($manga);

        }
        return $lesMangas;
    }

    protected function creerObjetMetier(\stdClass $manga)
    {
        $manga0 = new Manga();
        $manga0->setIdManga($manga->id_manga);
        $manga0->setTitre($manga->titre);
        $manga0->setPrix($manga->prix);
        $manga0->setGenre($manga->genre);
        return $manga0;
    }
}
