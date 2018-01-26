<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Nigorice;
use App\Repositories\NigoriceInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(NigoriceInterface $interface)
    {
        $this->middleware('auth');
        $this->interface = $interface;
    }

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


    public function create_post(Request $request) {
        $this->interface->createNew($request);
        return redirect('index');  
    }

    public function edit(Request $request) {
        $data = $this->interface->get_specific_data($request);
        return view('edit',compact('data'));
    }

    public function edit_post(Request $request) {
        $this->interface->update($request);
        return redirect('index');  
    }
}
