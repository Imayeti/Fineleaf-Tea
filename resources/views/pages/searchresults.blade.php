@extends('layout')

@section('title')
    Search Results
@endsection
@if($searchResultsArray)
@section('content')

<table  id="t01"  class="table display-off-when-small">
  <tbody>
  <tr class="border-bottom">
    <th class="pl-5">PRODUCTS</th>
    <th class="pl-5"></th>
@foreach ($searchResultsArray as $products)
@foreach ($products as $product)
    </tr>
    <tr class="border-bottom">
      <td >
          <a href="tea/{{$product->id}}"><image class="ml-4 mr-5 zero-margins "src="{{ $product->img_src }}" style="max-width:75px;"></a>
      </td>
      <td>
        <strong>{{ $product->name }}</strong>&nbsp -<span class="ml-1">{{ $product->short_description }}
      </td>


@endforeach
@endforeach
  </tbody>
</table>
@else
<h1>No Products Match</h1>

@endif


@endsection
