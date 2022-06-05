<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Add a civilian</h2>
      </header> 
      <form method="POST" action="/civilians" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="firstname" class="inline-block text-lg mb-2">Firstname</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname" value="{{old('firstname')}}" />
          @error('firstname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="lastname" class="inline-block text-lg mb-2">Lastname</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname" value="{{old('lastname')}}" />
          @error('lastname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="fingerprint" class="inline-block text-lg mb-2">Fingerprint</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="fingerprint" value="{{old('fingerprint')}}" />
          @error('fingerprint')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="dna" class="inline-block text-lg mb-2">DNA</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="dna" value="{{old('dna')}}" />
          @error('dna')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="mugshot" class="inline-block text-lg mb-2">Mugshot</label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="mugshot" /> 
          @error('mugshot')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Add civilian
          </button>
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
  </x-layout>
  