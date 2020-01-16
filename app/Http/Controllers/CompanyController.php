<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;

class CompanyController extends Controller
{
    public function list(){
      // // alle bedrijven ophalen en Opslaan
      // $companies = DB::table('companies')->orderBy('name','asc')->get();
      // // $companies = DB::table('companies')->where('country','=','Bahamas')->where('city','=','Middelkerke')->value('name');
      // // $companies = DB::table('companies')->where('country','=','Bahamas')->where('city','=','Middelkerke')->get();
      //
      // return view('company.list', ['bedrijven' => $companies]);

      // -------------------------

      $companies = Company::all();
      dd($companies);

    }

    public function details($id){
      // //haal bedrijf uit database waar id=id
      // $company = DB::table('companies')->where('id','=', $id)->first();
      // // DB::table('companies')->find($id);
      //
      // return view('company.details',['bedrijf' => $company]);

      //---------------------------

      $company = Company::find($id);
      dd($company);

    }
}
