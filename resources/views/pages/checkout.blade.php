@extends('layout')

@section('title')

    Checkout
@endsection

@section('content')


<div class=" container">
  <h1 class="text-center mt-5">Checkout</h1>
  <hr width="100px" class="center-block ">
  <form class="mt-5">
    <div class="form-row">
      <div class="form-group col-6">
        <label for="CreditCard">First name</label>
        <input type="text" class="form-control" id="CreditCard" placeholder="">
      </div>
      <div class="form-group col-6">
        <label for="CreditCard">last name</label>
        <input type="text" class="form-control" id="CreditCard" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>AR</option>
          <option>AZ</option>
          <option>CA</option>
          <option>CO</option>
          <option>CT</option>
          <option>FL</option>
          <option>GA</option>
          <option>HI</option>
          <option>IA</option>
          <option>ID</option>
          <option>IL</option>
          <option>IN</option>
          <option>KS</option>
          <option>KY</option>
          <option>LA</option>
          <option>MA</option>
          <option>MD</option>
          <option>ME</option>
          <option>MI</option>
          <option>MN</option>
          <option>MO</option>
          <option>MS</option>
          <option>MT</option>
          <option>NC</option>
          <option>ND</option>
          <option>NE</option>
          <option>NH</option>
          <option>NJ</option>
          <option>NM</option>
          <option>NV</option>
          <option>NY</option>
          <option>OH</option>
          <option>OK</option>
          <option>OR</option>
          <option>PA</option>
          <option>RI</option>
          <option>SC</option>
          <option>SD</option>
          <option>TN</option>
          <option>TX</option>
          <option>UT</option>
          <option>VA</option>
          <option>VT</option>
          <option>WA</option>
          <option>WI</option>
          <option>WV</option>
          <option>WY</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
  </div>
  <h3 class="text-center mt-5 mb-5">Credit Card Information</h3>
  <div class="form-row">
    <div class="form-group col-6">
      <label for="CreditCard">name on credit Card</label>
      <input type="text" class="form-control" id="CreditCard" placeholder="">
    </div>
    <div class="form-group col-6">
      <label for="CreditCard">Credit Card Number</label>
      <input type="text" class="form-control" id="CreditCard" placeholder="123456789">
    </div>
  </div>
  <div class="form-row  ml-3 mt-2">
    <label class="mt-1 mr-1" for="CreditCard ">expiration date</label>
    <div class="form-group col-lg-2 col-sm-4 col-xs-3">
      <input type="month" class="form-control" id="CreditCard" placeholder="">
    </div>
  </div>
  <div class="form-row  ml-3 mt-2">
      <label class="mt-1 mr-1" for="CreditCard">security code</label>
    <div class="form-group col-lg-1 col-sm-2 col-xs-6">
      <input type="number" class="form-control" id="CreditCard" placeholder="123">
    </div>
  </div>

  </form>
  <div class="clearfix mb-3">
  <h3 class="float-right ">order total - ${{ $id }}.00</h3>
  </div>
  <div class="clearfix">
    <a href="/shopping_cart/create"><button type="submit" class="btn btn-secondary mb-5 float-right">Place order</button></a>
  </div>

</div>
@endsection
