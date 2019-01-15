<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Host;
use App\Intercambista;
use App\Buddy;
use App\Ong;
use App\Projeto;
use App\User;
use App\Faq;
use App\Atrativo;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class PrincipalController extends Controller
{
    public function index()
    {
        $count_user = count(User::get());
        $count_host = count(Host::get()); 
        $count_intercambista = count(Intercambista::get()); 
        $count_buddy = count(Buddy::get());
        $count_ong = count(Ong::get());
        $count_projeto = count(Projeto::get());

        return view('pages.dashboard.index', compact('count_user', 'count_host', 'count_intercambista', 'count_buddy', 'count_ong', 'count_projeto'));
    }

    public function home(){
        $faqs = Faq::get();
        $atrativos = Atrativo::get(); 
        $ongs = Ong::get();
        $projetos = Projeto::get();

        return view('pages.index', compact('faqs', 'atrativos', 'ongs', 'projetos'));
    }
   
}
