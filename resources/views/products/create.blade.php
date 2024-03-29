<x-layout>
  <x-card-frame class=" max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-10">
        Créer un nouveau produit
      </h2>
    </header>
    <form method="POST" action="/products" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Nom du produit</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" placeholder="Nom du produit" />
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="price" class="inline-block text-lg mb-2">Prix du produit</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price" value="{{old('price')}}"" placeholder="Prix du produit" />
          @error('price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="is_sale" class="inline-block text-lg mb-2">En soldes ?</label>
        <select id="is_sale" name="is_sale" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Veuillez choisir une option--</option>
          <option value="1" {{old('is_sale') == 1 ? 'selected' : ""}}>Oui</option>
          <option value="0" {{old('is_sale') == 0 ? 'selected' : ""}}>Non</option>
        </select>
        @error('is_sale')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="is_published" class="inline-block text-lg mb-2">Publier sur le site ?</label>
        <select id="is_published" name="is_published" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Veuillez choisir une option--</option>
          <option value="1" {{old('is_published') == 1 ? 'selected' : ""}}>Oui</option>
          <option value="0" {{old('is_published') == 0 ? 'selected' : ""}}>Non</option>
        </select>
        @error('is_published')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="category_id" class="inline-block text-lg mb-2">Sélectionner la catégorie</label>
        <select id="category_id" name="category_id" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Veuillez choisir une option--</option>
          <option value="1" {{old('category_id') == 1 ? 'selected' : ""}}>Homme</option>
          <option value="2" {{old('category_id') == 2 ? 'selected' : ""}}>Femme</option>
        </select>
        @error('category_id')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="size" class="inline-block text-lg mb-2">Sélectionner la taille</label>
        <select id="size" name="size" class="border border-gray-200 rounded p-2 w-full">
          <option value="">--Veuillez choisir une option--</option>
          <option value="XS" {{old('size') === 'XS' ? 'selected' : ""}}>XS</option>
          <option value="S" {{old('size') === 'S' ? 'selected' : ""}}>S</option>
          <option value="M" {{old('size') === 'M' ? 'selected' : ""}}>M</option>
          <option value="L" {{old('size') === 'L' ? 'selected' : ""}}>L</option>
          <option value="XL" {{old('size') === 'XL' ? 'selected' : ""}}>XL</option>
        </select>
        @error('size')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="reference" class="inline-block text-lg mb-2">Référence du produit</label>
          <input type="text" maxlength="16" class="border border-gray-200 rounded p-2 w-full" name="reference" value="{{old('reference')}}" placeholder="Référence du produit (16 caractères alphanumériques)" />
          @error('reference')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">Image du produit</label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
          @error('image')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">Description du produit</label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" value="{{old('description')}}" placeholder="Décrivez au mieux le produit"></textarea>
          @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <button class="bg-weFashion text-white rounded py-2 px-4 hover:bg-black">Créer le produit</button>
          <a href="/" class="text-black ml-4"> Retour </a>
      </div>
    </form>
  </x-card-frame>
</x-layout>