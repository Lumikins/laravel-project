@extends('layout')

@section('content')

<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
  <div class="mx-4">
    <x-card-frame class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6" src="{{asset('images/no-image.png')}}" alt=""/>
          <h3 class="text-2xl mb-2">{{$product->name}}</h3>
            <div class="text-xl font-bold mb-4">{{$product->price}}&euro;</div>
              <ul class="flex">
                @if (($product->category_id) == 1)
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                  <a href="#">Man</a>
                </li>
                @else
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                  <a href="#">Woman</a>
                </li>
                @endif
              </ul>
              @if ($product['is_sale'])
              <div class="text-lg my-4 uppercase">
                <i class="fa-solid fa-hand-holding-dollar"></i> on sale
              </div>
              @endif
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
              <h3 class="text-3xl font-bold mb-4">Product Description</h3>
                <div class="text-lg space-y-6">
                  <p>{{$product->description}}</p>
                </div>
            </div>
      </div>
    </x-card-frame>
  </div>


{{-- <p>{{$product['description']}}</p>

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
<p>refrence id: {{$product['reference']}}</p> --}}

@endsection