@extends('layout')

@section('title')

    Checkout
@endsection

@section('content')


<div class=" container">
  <h1 class="text-center mt-5">Checkout</h1>
  <hr width="100px" class="center-block ">
  <form class="" method="post" action="/shopping_cart">
    @csrf
    <div class="form-row">
      <div class="form-group col-6">
        <label for="CreditCard">First name</label>
        <input type="text" class="form-control" id="CreditCard" name="firstname" placeholder="" required>
      </div>
      <div class="form-group col-6">
        <label for="CreditCard">last name</label>
        <input type="text" class="form-control" id="CreditCard" name="lastname"placeholder="" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Apartment</label>
      <input type="text" class="form-control" id="inputAddress2" name="apartment" placeholder="Apartment, studio, or floor" >
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" name="city" id="inputCity" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" name="state" required class="form-control">
          <option select></option>
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
        <input type="text" class="form-control" name="zip" id="inputZip" required>
      </div>
  </div>
  <h3 class="text-center mt-5 mb-5">Credit Card Information</h3>
  <div class="form-row">
    <div class="form-group col-6">
      <label for="CreditCard">name on credit Card</label>
      <input type="text" class="form-control" name="creditcardname" id="CreditCard" placeholder="">
    </div>
    <div class="form-group col-6">
      <label for="CreditCard">Credit Card Number</label>
      <input type="text" class="form-control"  id="CreditCard" placeholder="123456789">
    </div>
  </div>
  <div class="form-row  ml-3 mt-2">
    <label class="mt-1 mr-1" for="CreditCard ">expiration date</label>
    <div class="form-group col-lg-3 col-sm-4 col-xs-3">
      <input type="month" class="form-control" name="expirationdate" id="CreditCard" placeholder="">
    </div>
  </div>
  <div class="form-row  ml-3 mt-2">
      <label class="mt-1 mr-1" for="CreditCard">security code</label>
    <div class="form-group col-lg-1 col-sm-2 col-xs-6">
      <input type="number" class="form-control" name="securitycode" id="CreditCard" placeholder="123">
    </div>
  </div>

  <div class="clearfix mb-3">
  <h3 class="float-right ">order total - ${{ $id }}.00</h3>
  </div>
  <div class="clearfix">
    <button type="submit" class="btn btn-secondary mb-5 float-right">Place order</button>
  </div>
</form>

</div>

@endsection
