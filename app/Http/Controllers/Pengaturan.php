<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengaturan extends Controller {

    private $menu;
    public function __construct() {
        $this->menu = new Menu();
    }
    
    public function index() { return view('pengaturan.index', ["mainMenu" => $this->menu->mainMenu]); }

}
