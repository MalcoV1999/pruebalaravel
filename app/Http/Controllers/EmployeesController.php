<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use App\Models\departments;

class EmployeesController extends Controller
{

    





        public function upemployee()
        {


            $consultation = employees::orderBy('ide','DESC')
                                       -> take (1) -> get();
    
            
              $count = count($consultation);
              if ($count==0)
              {

              $idesigue = 1;

              }

              else {


                 $idesigue = $consultation[0] ->ide + 1;
              }


                $departments = departments::orderBy('name')-> get();

              //return $idesigue;
              return view ('upemployee')
                     -> with('idsigue',$idesigue)
                     -> with('departments',$departments);


            //return view ('upemployee');
            
        }    
    
    
        public function saveemployee(Request $request)
        { 
    
            //return $request;
            //dd($request);
            //$name =$request->name;
            //$sex =$request->sex;
            $this->validate($request,[
               //'ide' => 'required|regex:/^[E][M][P][-][0-9]{5}$/',
               'name' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
               'lastname' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
               'email' => 'required|email',
               'cellphone' => 'required|regex:/^[0-9]{10}$/',
            ]);
           



            $employees =new employees;
            $employees -> ide =$request -> ide;
            $employees -> name =$request -> name;
            $employees -> lastname =$request -> lastname;
            $employees -> email =$request -> email;
            $employees -> cellphone =$request -> cellphone;
            $employees -> sex =$request -> sex;
            $employees -> description =$request -> description;
            $employees -> idd =$request -> idd;
            $employees -> age =$request -> age;
            $employees -> salary =$request -> salary;
            $employees -> save();
            


            return view('messages')
            ->with('process',"UP EMPLOYEES")
            ->with('messages',"The employees $request -> name $request -> lastname has been given in correctlyup");
            



             //echo "ALL CORRECT";




           // public function eloquent()
           // {



        /*$employees = employees::create([

       'ide' => 5, 'name' => "Alejandra", 'lastname' => "Fonseca", 'email' => "alejandra@gmail.com", 'cellphone' => "7965451312", 'sex' => "F", 
       'description'=> "Detail7",'idd' => 2]);*/




       /*$employees = employees::find(1);
       $employees -> name = "Dulce";
       $employees -> lastname = "Montiel";
       $employees -> save();*/



       /*employees::where('sex','M')
       
       -> update (['name' => 'Francisco','cellphone' => '5555555']);*/


       //employees::destroy(1);

       /*$employees = employees::find(5); 
       $employees -> delete();*/




       /*$consultation = employee::all();*/

       //$consultation = employees::withTrashed()-> get();
       //$consultation = employees::onlyTrashed()
       //-> get();
       //with()-> get()

       //-> where('sex','F')
       //-> get();

       //employees::withTrashed()-> where('ide',1)-> restore();
       //$employees=employees::find(1)-> forceDelete();
       //$consultation = employees::all();
       //$consultation = employees::where('sex','M')-> get();
       //$consultation = employees::where('age','>='20)
       //-> where('age','<='30)
       //-> get();
     //$consultation = employees::whereBetween('age',[20,25]) -> get();

    
      //$consultation = employees::whereIn('ide',[3,4,5]) 
      //-> orderBy('name','description');

     // -> get();


      //$consultation = employees::where('age','>='20)
      //-> where('age','<='30)
      //-> take(2)
      //-> get();

      //$consultation = employees::select(['name','lastname','age']) 
      //-> where('age','>='30)
      //-> get();


      //$consultation = employees::select(['name','lastname','age']) 
     // -> where('lastname','LIKE','%rre%')
      //-> get();


      //$consultation = employees::where('sex','F') -> sum('salary');

      //$consultation = employees::groupBy('sex') 
     // -> selectRaw('sex,sum(salary); as salarytotal')
      //-> get();

     // $consultation = employees::groupBy('sex') 
     // -> selectRaw('sex,count(*); as cuantos')
     // -> get();


      




      //SQL = "SELECT e.ide,e.name,d.name AS department, e.age
     // FROM employees AS e
      //INNER JOIN departments AS d ON d.idd = e.idd
      //WHERE e.age'>= 30"

      //$consultation = employees::join('departments','employees.idd','=','departments.idd')
     // -> selectRaw('sex,sum(salary); as salarytotal')
      //-> where('employees.age','>= '30)
     // -> get();

     //$consultation = employees::where('age','>='40)
     //-> orwhere('sex','F')
     //-> get();







       //return $consultation;

      /* $employees=employees::where('sex','F')


      
      -> where('cellphone','7462712487') 
      -> delete();*/

     //return "operation perfomed";
     }    


    public function vb()
    {

        return view ('viewbootstrap');
        
    }    


   





        //if($sex == 'M')
        //{
          //  echo "The employee $name is of sex Male";
        //}

        //else
        //{
           // echo "The employee $name is of sex Female";
        //}





        //return view ('saveemployee');
        
    }    




   /* public function greetings($name,$days) {

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

}*/
