@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@unless (count($products) == 0)
    @foreach ($products as $product)
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
      <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}" alt=""/>
          <div>
            <h3 class="text-2xl">
              <a href="/products/{{$product->id}}">{{$product->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">WeFashion</div>
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
              <div class="text-lg mt-4 uppercase">
                <i class="fa-solid fa-hand-holding-dollar"></i> on sale
              </div>
              @endif
          </div>
      </div>
    </div>
    @endforeach
  @else
    <p>No products found</p>
@endunless
</div>
@endsection