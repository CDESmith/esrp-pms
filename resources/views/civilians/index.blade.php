<x-layout>
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@unless(count($civilians) == 0)
@foreach ($civilians as $civilian)
    <x-civilian-card :civilian="$civilian" />
@endforeach
@else
    <p>No records found...</p>
@endunless
</div>
<div class="mt-6 p-5">
    {{ $civilians->links() }}
</div>
</x-layout>