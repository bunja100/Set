<?php

namespace App\Http\Controllers;

use App\Father;
use App\Mother;
use Illuminate\Http\Request;

use \App\display;
use App\Patient;


use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        return view('home');
    }

    public function create()
    {
        return view('layouts.create');
    }

    public function save(Request $req)
    {
        $this->validate($req, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'date_of_birth' => 'required|date|before:today',
            'place_of_birth' => 'required|max:255',
            'immunisation' => 'required|max:255',
            'rec_of_imm' => 'required|max:255',
            'sex' => 'required|max:255',
            'fathers_name' => 'required|max:255',
            'Occupation_of_father' => 'required|max:255',
            'address_of_father' => 'required|max:255',
            'mothers_name' => 'required|max:255',
            'Occupation_of_mother' => 'required|max:255',
            'address_of_mother' => 'required|max:255',
        ]);

        $patient = new Patient();
        $patient->first_name = $req['first_name'];
        $patient->last_name = $req['last_name'];
        $patient->date_of_birth = $req['date_of_birth'];
        $patient->place_of_birth = $req['place_of_birth'];
        $patient->immunisation = $req['immunisation'];
        $patient->rec_of_imm = $req['rec_of_imm'];
        $patient->sex = $req['sex'];

        $patient->save();

        $father = new Father();
        $father->fathers_name = $req['fathers_name'];
        $father->Occupation_of_father = $req['Occupation_of_father'];
        $father->address_of_father = $req['address_of_father'];

        $patient->fathers()->associate($father);
        $father->save();

        $mother = new Mother();
        $mother->mothers_name = $req['fathers_name'];
        $mother->Occupation_of_mother = $req['Occupation_of_mother'];
        $mother->address_of_mother = $req['address_of_mother'];

        $patient->mothers()->associate($mother);
        $mother->save();

        return redirect(route('display'));

    }

    public function display()
    {


        $records = Patient::with(['mothers', 'fathers'])->get();
        $no = 1;
        return view('layouts.display', compact('records', 'no'));
    }

    public function register()
    {

        if (!Auth::user()->admin) {
            return back();
        }

        return view('auth._register');
    }

    public function details()
    {
        return view('layouts.details');
    }

}
