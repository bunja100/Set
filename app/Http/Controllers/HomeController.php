<?php

namespace App\Http\Controllers;

use App\Father;
use App\Mother;
use App\User;
use Illuminate\Http\Request;

use \App\display;
use App\Patient;
use Illuminate\Support\Facades\DB;


use Auth;
use Illuminate\Support\Facades\Hash;

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

    public function print($id)
    {

        $patient = Patient::findOrFail($id);
        $mother = \App\Mother::find($patient->mother_id)->first();
        $father = \App\Father::find($patient->father_id)->first();
        return view('layouts.print', compact('patient', 'mother', 'father'));
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

        try {
            DB::connection()->getPdo()->beginTransaction();
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

            //dd($req);


            $father = new Father();
            $father->fathers_name = $req['fathers_name'];
            $father->Occupation_of_father = $req['Occupation_of_father'];
            $father->address_of_father = $req['address_of_father'];

            $father->save();


            $mother = new Mother();
            $mother->mothers_name = $req['fathers_name'];
            $mother->Occupation_of_mother = $req['Occupation_of_mother'];
            $mother->address_of_mother = $req['address_of_mother'];

            $mother->save();


            $patient = new Patient;
            $patient->first_name = $req['first_name'];
            $patient->last_name = $req['last_name'];
            $patient->date_of_birth = $req['date_of_birth'];
            $patient->place_of_birth = $req['place_of_birth'];
            $patient->immunisation = $req['immunisation'];
            $patient->rec_of_imm = $req['rec_of_imm'];
            $patient->sex = $req['sex'];
            $patient->mother_id = $mother->id;
            $patient->father_id = $father->id;
            $patient->save();
            //  $patient->fathers()->attach($father);
            //$patient->mothers()->attach($mother);

            DB::connection()->getPdo()->commit();

            //    return $father;

            //

            return redirect(route('display'));

        } catch (Exception $e) {
            DB::connection()->getPdo()->rollback();
            return redirect()->back()->with('error', 'Error encountered saving the data');
        }

    }

    public function display()
    {
        $records = Patient::all();
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

    public function details($id)
    {
        $patient = Patient::findOrFail($id);
        $mother = Mother::find($patient->mother_id)->first();
        $father = Father::find($patient->father_id)->first();
        return view('layouts.details', compact('patient', 'mother', 'father'));
    }

    public function update(Request $req)
    {
        $patient = Patient::find($req->id);
        $mother = Mother::find($patient->mother_id)->first();
        $father = Father::find($patient->father_id)->first();


        $updates = $req->all();

        $patient->first_name = $updates['first_name'];
        $patient->last_name = $updates['last_name'];
        $patient->date_of_birth = $updates['date_of_birth'];
        $patient->place_of_birth = $updates['place_of_birth'];
        $patient->immunisation = $updates['immunisation'];
        $patient->rec_of_imm = $updates['rec_of_imm'];
        $patient->sex = $updates['sex'];
        $patient->mother_id = $mother->id;
        $patient->father_id = $father->id;

        $patient->mother()->associate($mother);
        $mother->mothers_name = $updates['mothers_name'];
        $mother->Occupation_of_mother = $updates['Occupation_of_mother'];
        $mother->address_of_mother = $updates['address_of_mother'];

        $patient->father()->associate($father);
        $father->fathers_name = $updates['fathers_name'];
        $father->Occupation_of_father = $updates['Occupation_of_father'];
        $father->address_of_father = $updates['address_of_father'];

        $admin_password = \Illuminate\Support\Facades\Auth::user()->getAuthPassword();

        $confirmation_password = $updates['c_password'];


        if (Hash::check($confirmation_password, $admin_password)) {
            if ($patient->update() && $mother->update() && $father->update()) {
                $msg = 'Data Successfully Updated!';
                return redirect()->back()->with('msg', $msg);
            } else {
                $msg = 'Error encountered updating the data';
                return redirect()->back()->with('msg', $msg);
            }
        } else {
            $msg = 'Incorrect Confirmation Password, Please try again';
            return redirect()->back()->with('msg', $msg);
        }


    }

    public function destroy()
    {
        return 'This is the delete link';
    }

}
