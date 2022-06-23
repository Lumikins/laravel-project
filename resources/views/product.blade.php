@extends('layout')

@section('content')

<h2>{{$product['name']}}</h2>
<p>{{$product['description']}}</p>
<p>{{$product['price']}} &euro;</p>
@if ($product['is_published'])
    <p>product published</p>
@else
    <p>product not published</p>
@endif
@if ($product['is_sale'])
    <p>product on sale</p>
@else
    <p>product no on sale</p>
@endif
<p>refrence id: {{$product['reference']}}</p>

@endsection