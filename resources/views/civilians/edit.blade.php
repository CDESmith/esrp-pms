<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit {{ $civilian->firstname . ' ' . $civilian->lastname}}</h2>
      </header> 
      <form method="POST" action="/civilians/{{ $civilian->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="firstname" class="inline-block text-lg mb-2">Firstname</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname" value="{{ $civilian->firstname }}" />
          @error('firstname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="lastname" class="inline-block text-lg mb-2">Lastname</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname" value="{{ $civilian->lastname }}" />
          @error('lastname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="fingerprint" class="inline-block text-lg mb-2">Fingerprint</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="fingerprint" value="{{ $civilian->fingerprint }}" />
          @error('fingerprint')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="dna" class="inline-block text-lg mb-2">DNA</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="dna" value="{{ $civilian->dna }}" />
          @error('dna')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="mugshot" class="inline-block text-lg mb-2">Mugshot</label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="mugshot" />
          <img class="w-48 mr-6 mb-6" src="{{ $civilian->mugshot ? asset('storage/' . $civilian->mugshot) : asset('/images/no-image.png') }}" alt="{{ $civilian->firstname . ' ' . $civilian->lastname . ' mugshot' }}" alt="{{ $civilian->firstname . ' ' . $civilian->lastname . ' mugshot' }}" />
          @error('mugshot')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Edit civilian
          </button>
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
  </x-layout>
  