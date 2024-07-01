@extends('viewbootstrap')

@section('content')
<div class="container">
<h1>Up employee</h1>
<hr>
<form action = "{{route('saveemployee')}}" method = "POST">
    {{csrf_field()}}
    <div class="well">
      <div class="form-group">
          <label for="dni">Key employee:
          @if($errors->first('ide'))
          <p class = 'text-danger'>{{$errors->first('ide')}}</ide>
          @endif



          </label>
          <input type="text" name="ide" id="ide" value="{{$idsigue}}" readonly = 'readonly' class="form-control" placeholder="Key employee" tabindex="5">
      </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="name">Name:
                      @if($errors->first('name'))
                      <p class = 'text-danger'>{{$errors->first('name')}}</p>
                      @endif
                    </label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Name" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="lastname">Lastname:
                      @if($errors->first('lastname'))
                      <p class = 'text-danger'>{{$errors->first('lastname')}}</p>
                      @endif
                    </label>
                    <input type="text" name="lastname" id="lastname" value="{{old('lastname')}}" class="form-control" placeholder="Lastname" tabindex="2">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="email">Email:
                      @if($errors->first('email'))
                      <p class = 'text-danger'>{{$errors->first('email')}}</p>
                      @endif
                    </label>
                    <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Email" tabindex="4">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="cellphone">Cellphone:
                      @if($errors->first('cellphone'))
                      <p class = 'text-danger'>{{$errors->first('cellphone')}}</p>
                      @endif
                    </label>
                    <input type="text" name="cellphone" id="cellphone" value="{{old('cellphone')}}" class="form-control" placeholder="Cellphone" tabindex="3">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <label for="dni">Sex:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="sex1" name="sex"  value = "M" class="custom-control-input" checked="">
                <label class="custom-control-label" for="sex1">Male</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="sex2" name="sex" value = "F" class="custom-control-input">
                <label class="custom-control-label" for="sex2">Female</label>
                </div>


            </div>

        



            <div class="col-xs-6 col-sm-6 col-md-6">

              <div class="form-group"> 
                <label for="dni">Department:</label>
                <select name = 'idd' class="custom-select">
                  <option selected="">Select a department</option>
                  @foreach($departments as $depa)
                  <option value="{{$depa-> idd}}">{{$depa-> name}}</option>
                  @endforeach
                </select>
              </div>

            </div>
        </div>
        <div class="form-group">
            <label for="dni">Description:</label>
            <textarea name="description" id="description" class="form-control" tabindex="5">
            </textarea>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Save" class="btn btn-danger btn-block btn-lg" tabindex="9"
                title="Save entered data"></div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="name">Age:
                      @if($errors->first('age'))
                      <p class = 'text-danger'>{{$errors->first('age')}}</p>
                      @endif
                    </label>
                <input type="text" name="age" id="age" value="{{old('age')}}" class="form-control" placeholder="Age" tabindex="8">
                </div>
            </div>


            <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="name">Salary:
                      @if($errors->first('salary'))
                      <p class = 'text-danger'>{{$errors->first('salary')}}</p>
                      @endif
                    </label>
                <input type="text" name="salary" id="salary" value="{{old('salary')}}" class="form-control" placeholder="Salary" tabindex="9">
                </div>
            </div>





</form>
  @stop
