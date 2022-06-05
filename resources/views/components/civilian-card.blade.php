@props(['civilian'])
<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ $civilian->mugshot ? asset('storage/' . $civilian->mugshot) : asset('/images/no-image.png') }}" alt="{{ $civilian->firstname . ' ' . $civilian->lastname . ' mugshot' }}" />
        <div>
            <h3 class="text-2xl">
                <a href="/civilians/{{$civilian->id}}">{{ $civilian->firstname . ' ' . $civilian->lastname }}</a>
            </h3>
        </div>
    </div>
</x-card>