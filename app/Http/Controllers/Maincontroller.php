<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\login;
use App\Models\register;
use Illuminate\Support\facades\Hash;


class Maincontroller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function Homme()
    {
        return view('themes/Homme');
    }
    public function save(Request $request)
    {
        // $request->validate([

        //     'Prenom'=>'required',
        //     'nomfamille'=>'required',
        //     'email'=>'required'|'email',
        //     'pass'=>'required'|'min:5'|'max:12',
            

        // ]);
        $validator = login::make(

            [
                'Prenom'=>'brahim',
                'nomfamille' => 'ait',
                'pass' => '12345',
                'email' => 'brahim@gmail.com'
            ],
            [
                'Prenom'=>'required',
                'nomfamille' => 'required',
                'pass' => 'required|min:8',
                'email' => 'required|email|unique:admins'
            ]
        );
        $validator = register::make(

            [
                'Prenom'=>'brahim',
                'nomfamille' => 'ait',
                'pass' => '12345',
                'email' => 'brahim@gmail.com'
            ],
            [
                'Prenom'=>'required',
                'nomfamille' => 'required',
                'pass' => 'required|min:8',
                'email' => 'required|email|unique:admins'
            ]
        );
        $Admin=new Admin ;
        $Admin ->Prenom=$request->Prenom;
        $Admin ->nomfamille=$request->nomfamille;
        $Admin ->pass=$request->pass;
        $Admin ->email=Hash::make($request->email);
        $save=$Admin->save();
 
        //    if($save){
        //      return back()->with('success','Le nouvel utilisateur a été ajouté avec succès à la base de données');
           
        //    }else{
           
        //       return back()->with('fail','Something went wrong,try again later');
        //    }
        
    }
          public function chek(Request $request)
        {
            // return $request->input();
            $validator = login::make(

                [
                  
                    'password' => '12345',
                    'email' => 'brahim@gmail.com',
                    'Prenom' => 'brahim',
                    'nomfamille' => 'ait'
                ],
                [
                    
                    'password' => 'required|min:8',
                    'email' => 'required|email|unique:admins',
                    'Prenom' => 'required|',
                    'nomfamille' => 'required|',
                    
                    
                ]
            );
            $validator = register::make(

                [
                  
                    'password' => '12345',
                    'email' => 'brahim@gmail.com',
                    'Prenom' => 'brahim',
                    'nomfamille' => 'ait'
                ],
                [
                    
                    'password' => 'required|min:8',
                    'email' => 'required|email|unique:admins',
                    'Prenom' => 'required|',
                    'nomfamille' => 'required|',
                    
                ]
            );
          
            
        }


        public function calendriers()
        {
            return view('themes/calendriers');
        }

        public function book(Request $request)
        {
            // return $request->input();
            $validator = login::make(

                [
                    'cin'=>'BK21331',
                    'lastname'=>'ait',
                    'firstname'=>'Brahim',
                    'phone'=>'0606070200',
                    'password' => '12345',
                    'email' => 'brahim@gmail.com'
                ],
                [
                    'cin'=>'required',
                    'phone'=>'required',
                    'lastname'=>'required',
                    'firstname'=>'required',
                    'password' => 'required|min:8',
                    'email' => 'required|email|unique:admins'
                ]
            );
            
        }
        public function service()
        
         {
             return view('themes/service');
         }
         public function typeservice()
        
         {
             return view('themes/typeservice');
         }


}
