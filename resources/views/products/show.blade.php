<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left mr-1"></i>Retour</a>
    <div class="mx-4">
      <x-card-frame class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
          <img class="w-48 mr-6 mb-6" src="{{$product->image ? asset('storage/' . $product->image) : asset('/images/no-image.png')}}" alt=""/>
            <h3 class="text-2xl mb-2 font-bold">{{$product->name}}</h3>
              <div class="text-xl italic mb-4">{{$product->price}}&euro;</div>
                <ul class="flex">
                  @if (($product->category_id) == 1)
                  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Homme</a>
                  </li>
                  @else
                  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Femme</a>
                  </li>
                  @endif
                </ul>
                @if ($product['is_sale'])
                <div class="text-lg my-4 uppercase">
                  <i class="fa-solid fa-hand-holding-dollar"></i> Soldes
                </div>
                @endif
              <div class="border border-gray-200 w-full mb-6"></div>
              <div>
                <h3 class="text-3xl font-bold mb-4">Description du produit</h3>
                  <div class="text-lg space-y-6">
                    <p>{{$product->description}}</p>
                  </div>
                </div>
            </div>
          </x-card-frame>
        </div>
</x-layout>
