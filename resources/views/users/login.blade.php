<x-layout>
  <x-card-frame class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2-xl font-bold uppercase mb-1">Connexion</h2>
        <p class="mb-4">Connectez-vous pour créer de nouveaux produits</p>
    </header>

    <form method="POST" action="/users/authenticate">
      @csrf
      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Adresse e-mail</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      
      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">Mot de passe</label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}" />

        @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-weFashion text-white rounded py-2 px-4 hover:bg-emerald-500">Se connecter</button>
      </div>
    </form>
  </x-card-frame>
</x-layout>