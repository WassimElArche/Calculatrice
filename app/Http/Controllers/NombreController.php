<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use function PHPUnit\Framework\isEmpty;

class NombreController extends Controller
{

    /*public function test2($tab){
        if(!isset($tab)){
        $tab = [];}
        if (isset($_POST['send'])){
                array_push($tab , intval(request('nombre')));
        }
        return $tab;
    }*/




    public function operation()
    {

       Session();
       session()->push('nombre', request('nombre'));
        $compt = 0;
       if (request("nombre") == "+")
       {
       $tab = session()->get('nombre');


       foreach ($tab as $value => $key){
           $compt += intval($key);

       }

           echo "Le Resultat est : ".$compt;
       }

       else if (request("nombre") == "-") {
           $tab = session()->get('nombre');
           $compt = $tab[0];
            var_dump($tab);
           for ($i = 1; $i <= count($tab)-1; $i++) {
               echo "zeze";
               $compt -= intval($tab[$i]);
           }
           echo "Le Resultat est  = : ".$compt;
       }
           /*
       else if (request("nombre") == "*")
       {
           $tab = session()->get('nombre');
           $compt = 1;
           foreach ($tab as $value => $key){
               $compt *= intval($key);
           }*/






       return view('welcome');

       //session()->flush();
    }

    /*
    public function calculer($tab){

        if ($tab[count($tab)-1]=='+'){
            $compt = 0;
            unset($tab[count($tab)-1]);
            foreach ($tab as $value => $key){
                $compt += intval($key);
            }
        }
        session()->flush();
        return $compt;
    }*/

}
