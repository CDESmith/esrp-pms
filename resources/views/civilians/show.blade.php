<x-layout>
@include('partials._search')
<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    <x-card class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" src="{{ $civilian->mugshot ? asset('storage/' . $civilian->mugshot) : asset('/images/no-image.png') }}" alt="{{ $civilian->firstname . ' ' . $civilian->lastname . ' mugshot' }}" alt="{{ $civilian->firstname . ' ' . $civilian->lastname . ' mugshot' }}" />
            <h3 class="text-2xl mb-2">{{ $civilian->firstname . ' ' . $civilian->lastname }}</h3>
            <div class="flex">
                <p class="rounder-xl px-3 py-1 mr-2">Fingerprint: {{ $civilian->fingerprint }}</p>
                <p class="rounder-xl px-3 py-1 mr-2">DNA: {{ $civilian->dna }}</p>
            </div>
        </div>
    </x-card>
    <x-card class="mt-4 p-2 flex space-x-6">
        <a href="/civilians/{{$civilian->id}}/edit">
          <i class="fa-solid fa-pencil"></i> Edit
        </a>
  
        <form method="POST" action="/civilians/{{$civilian->id}}">
          @csrf
          @method('DELETE')
          <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
        </form>
      </x-card>
</div>
</x-layout>