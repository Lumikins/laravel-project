@props(['product'])
  <x-card-frame>
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
  </x-card-frame>