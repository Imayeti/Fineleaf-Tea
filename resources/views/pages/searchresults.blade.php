@extends('layout')

@section('title')
    Search Results
@endsection
@section('content')


<div class="site-content">
  @if($searchResultsArray[0]->all() != [] )

<h1 class="text-center mt-5 ">Search Results</h1>
<hr width="100px" class="center-block pb-5">

<table  id="t01"  class="table">
  <tbody>
  <tr class="border-bottom">
    <th class="pl-5 border-top-0 "></th>
    <th class="pl-5 border-top-0"></th>
    <th class="pl-5 border-top-0"></th>
@foreach ($searchResultsArray as $products)
@foreach ($products as $product)
    </tr>
    <tr class="border-bottom">
      <td>
          <a href="tea/{{$product->id}}"><image class="ml-4 mr-5 zero-margins "src="{{ $product->img_src }}" style="max-width:75px;"></a>
          <strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}
      </td>
      <td>
        2 oz. - ${{ $product->price }}.00
      </td>
      <td>
        <a href="tea/{{$product->id}}"><button type="button" class="btn-secondary btn btn-sm">Purchase</button></a>
      </td>
    </tr>

@endforeach
@endforeach
  </tbody>
</table>
@else

<h4 class="text-center mt-3 mb-3 pt-3 pb-3 bg-primary">No Products Match Your Search</h4>

@endif

</div>

@endsection
