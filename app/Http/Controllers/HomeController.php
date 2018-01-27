<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import Model Nigorice for the eloquent
use App\Http\Models\Nigorice;
// import DI Nigorice
use App\Repositories\NigoriceInterface;

/*
|--------------------------------------------------------------------------
| HomeController : Controller to handle CRUD Nigorice
|--------------------------------------------------------------------------
| @author Thomas
| __construct  = append DI to construct
| http://php.net/manual/en/language.oop5.decon.php
|
*/
class HomeController extends Controller
{
    
    public function __construct(NigoriceInterface $interface) {
        $this->middleware('auth');
        $this->interface = $interface;
    }

    /*
    |--------------------------------------------------------------------------
    | Function information
    |--------------------------------------------------------------------------
    | @author Thomas
    | home()         : redirect to /index
    | index()        : show all data based on Nigorice Test # 3
    | show()         : show specific data based on Nigorice Test # 3
    | create()       : page to add new data based on Nigorice Test # 3
    | edit()         : page to edit the data based on Nigorice Test # 3 
    |
    */

    public function home() {   
        return redirect('index');
    }

    public function index() {
        $data = $this->interface->get_all_data();
        return view('home',compact('data'));
    }

    public function show(Request $request) {
        $data = $this->interface->get_specific_data($request);
        return view('show',compact('data'));
    }

    public function create() {
        return view('create');
    }

    public function edit(Request $request) {
        $data = $this->interface->get_specific_data($request);
        return view('edit',compact('data'));
    }

    /*
    |--------------------------------------------------------------------------
    | Function information
    |--------------------------------------------------------------------------
    | @author Thomas
    | create_post()        : add new data logic
    | edit_post()          : edit data logic 
    |
    */

    public function create_post(Request $request) {
        $this->interface->createNew($request);
        return redirect('index');  
    }

    public function edit_post(Request $request) {
        $this->interface->update($request);
        return redirect('index');  
    }
}
