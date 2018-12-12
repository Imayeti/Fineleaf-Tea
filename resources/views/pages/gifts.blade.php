@extends('layout')

@section('title')
    Gifts
@endsection
@section('content')


<div class="site-content">
  @if($userGifts )

<h1 class="text-center mt-5 ">Gifts</h1>
<hr width="100px" class="center-block pb-5">

<table  id="t01"  class="table">
  <tbody>
  <tr class="border-bottom">
    <th class="pl-5 border-top-0 "></th>
    <th class="pl-5 border-top-0 "></th>



@foreach ($gifts as $gift)
    </tr>
    <tr class="border-bottom">
      <td>
          <a href="tea/{{$gift->id}}"><image class="ml-4 mr-5 zero-margins "src="{{ $gift->img_src }}" style="max-width:75px;"></a>
          <strong>{{ $gift->name }}</strong>&nbsp -<span class="ml-1">{{ $gift->short_description }}
      </td>
      <td><i class="fas fa-gift"></i></td>
    </tr>

@endforeach

  </tbody>
</table>

<h1 class="text-center mt-5 mb-5 ">Shipping Information</h1>
<div class="container">
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
    <button type="submit" class="btn btn-light float-right mb-4 mr-2" >Send me the Gifts!</button>
  </form>
</div>
@else

<h4 class="text-center mt-3 mb-3 pt-3 pb-3 bg-primary">You Have No Gifts</h4>

@endif

</div>

@endsection
