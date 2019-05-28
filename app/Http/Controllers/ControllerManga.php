<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metier\Manga;
use App\Modeles\MangasDAO;

class ControllerManga extends Controller
{
    public function getLesMangas(){
        $manga = new MangasDAO();
        $LesMangas = $manga->getLesMangas();
        return view('Vue',compact('LesMangas'));
    }
}
