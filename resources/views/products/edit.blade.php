<x-layout>
  <x-card-frame class=" max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-10">
        Edit a product
      </h2>
      <p class="mb-4">Edit: {{$product->name}}</p>
    </header>
    <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Product Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{$product->name}}" placeholder="Enter Product Name" />
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="price" class="inline-block text-lg mb-2">Product Price</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price" value="{{$product->price}}"" placeholder="Enter Price" />
          @error('price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="is_sale" class="inline-block text-lg mb-2">On Sale?</label>
        <select id="is_sale" name="is_sale" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Please choose an option--</option>
          <option value="1" {{$product->is_sale}}>Yes</option>
          <option value="0" {{$product->is_sale}}>No</option>
        </select>
        @error('is_sale')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="is_published" class="inline-block text-lg mb-2">Publish on site?</label>
        <select id="is_published" name="is_published" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Please choose an option--</option>
          <option value="1" {{$product->is_published}}>Yes</option>
          <option value="0" {{$product->is_published}}>No</option>
        </select>
        @error('is_published')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="category_id" class="inline-block text-lg mb-2">Select category</label>
        <select id="category_id" name="category_id" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Please choose an option--</option>
          <option value="1" {{$product->category_id}}>Male</option>
          <option value="2" {{$product->category_id}}>Female</option>
        </select>
        @error('category_id')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="size" class="inline-block text-lg mb-2">Select size</label>
        <select id="size" name="size" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Please choose an option--</option>
          <option value="XS" {{$product->size}}>XS</option>
          <option value="S" {{$product->size}}>S</option>
          <option value="M" {{$product->size}}>M</option>
          <option value="L" {{$product->size}}>L</option>
          <option value="XL" {{$product->size}}>XL</option>
        </select>
        @error('size')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="reference" class="inline-block text-lg mb-2">Product Reference</label>
          <input type="text" maxlength="16" class="border border-gray-200 rounded p-2 w-full" name="reference" value="{{$product->reference}}" placeholder="Enter Product Refernce (16 characters and digits)" />
          @error('reference')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">Product Image</label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
          <img class="w-48 mr-6 mb-6" src="{{$product->image ? asset('storage/' . $product->image) : asset('/images/no-image.png')}}" alt=""/>
          @error('image')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">Product Description</label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" value="{{$product->description}}" placeholder="Describe the product as best as possible"></textarea>
          @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <button class="bg-weFashion text-white rounded py-2 px-4 hover:bg-black">Update Product</button>
          <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card-frame>
</x-layout>