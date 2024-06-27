<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('message',[EmployeesController::class,'message']);
route::get('paymentcontrol',[EmployeesController::class,'payment']);
route::get('nomina/{diast}/{payment}',[EmployeesController::class,'nomina']);


route::get('showgreetings/{name}/{days}',[EmpleadosController::class,'grettings']);
route::get('exit',[EmployeesController::class,'exit'])->name('exitnomina');


route::get('vb',[EmployeesController::class,'vb'])->name('vb');
route::get('view1',[EmployeesController::class,'view1'])->name('view1');
route::get('view2',[EmployeesController::class,'view2'])->name('view2');


Route::get('/', function () {
    return view('welcome');
});




/*
Route::get('/route1', function () {
    return "hello world";
});

Route::get('/arearectangle', function () {
    $base = 4;
    $height = 10;
    $area = $base *$height;
    return $area;
});


Route::get('/arearectangle2', function () {
    $base = 4;
    $altura = 10;
    $area = $base *$altura;
    return "rectangle are is: . $area . con base $base and height $height";
});

Route::get('/arearectangle3/{base}/{height}', 
    function ($base,$height) {
    $area = $base *$height;
    return "rectangle are is:" . $area . "with base $base and height $height";
});


Route::get('/nomina/{diast}/{diarypayment?}', 
    function ($diast, $diarypayment=null) {
    if($diarypayment==null)
    {
        $diarypayment = 100;
        $nomina = $diast * $diarypayment;
    }else { 
        $nomina = $diast * $diarypayment;
    
    }
    
    echo "Worked Days $diast";
    echo "<br> Nomina Payment" . $diarypayment;
    echo "<br> Payment Total Payment $nomina";


   }); 

Route::get('/redirect', function () {
    return redirect ('route1');
    });


    Route::redirect('redirect2','route1');

    Route::redirect('redirect3','arearectangle3/4/5');

    Route::get('/redirect4/{base}/{height}', function ($base,$height) {
        return redirect ("arearectangle3/$base/$height");
        });


    Route::redirect('redirect5','http://www.google.com'); */