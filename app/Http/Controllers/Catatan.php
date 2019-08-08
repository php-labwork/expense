<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Catatan extends Controller {

    private $menu;
    public function __construct() {
        $this->menu = new Menu();
    }
    
    public function index() { return view('catatan.index', ["mainMenu" => $this->menu->mainMenu]); }
    
}
