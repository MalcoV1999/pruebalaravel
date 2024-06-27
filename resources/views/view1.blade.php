@extends('viewbootstrap')

@section('content')
<div>
  <fieldset disabled="">
    <label class="form-label" for="disabledInput">Disabled input</label>
    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
  </fieldset>
</div>
<div>
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">Readonly input</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here..." readonly="">
  </fieldset>
</div>
<div class="has-success">
  <label class="form-label mt-4" for="inputValid">Valid input</label>
  <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
  <div class="valid-feedback">Success! You've done it.</div>
</div>
<div class="has-danger">
  <label class="form-label mt-4" for="inputInvalid">Invalid input</label>
  <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
  <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
</div>
<div>
  <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Large input</label>
  <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
</div>
<div>
  <label class="col-form-label mt-4" for="inputDefault">Default input</label>
  <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
</div>
<div>
  <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Small input</label>
  <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
</div>
<div>
  <label class="form-label mt-4">Input addons</label>
  <div>
    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
    </div>
  </div>
</div>
<div>
  <label class="form-label mt-4">Floating labels</label>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
    <label for="floatingPassword">Password</label>
  </div>
</div>

@stop