<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 23/05/2019
 * Time: 20:59
 */

namespace  App\Http\Controllers;

class HomeController extends Controller
{
public function index(){
    return view(home.index);
}

}

