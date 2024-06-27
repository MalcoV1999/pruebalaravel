<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{


    public function vb()
    {

        return view ('viewbootstrap');
        
    }    


    public function view1()
    {

        return view ('view1');
        
    }    


    public function view2()
    {

        return view ('view2');
        
    }    









    public function greetings($name,$days) {

        $payment = 100;
        $nomina = $days * $payment;

        //return view('employee',compact('name','days'));


        //return view('employee', ['namex'=>$name,'days'=>$days]);


       return view('employee')
       ->with('nombre',$name)
       ->with('days',$days)
       ->with('nomina',$nomina);

    }   


    public function exit()
    {

        return "Exit";
        
    }    





    public function message()
    {

        return "Hello Worker";
        
    }    


    public function payment()
    {

        $days = 7;
        $payment = 600;
        $nomina = $days * $payment;
        return "employee payment is $nomina";
        
    }    

    public function nomina($diast,$payment)
    {
        $nomina = $diast*$payment;
        dd($nomina,$diast,$payment);
        return "payment is $nomina with days $diast and diary payment is $pago";
    }    

}
