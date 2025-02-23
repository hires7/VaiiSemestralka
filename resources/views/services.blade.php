@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <input
        type="text"
        id="search-input"
        class="w-full p-2 border rounded"
        placeholder="Vyhľadajte službu podľa názvu alebo popisu"
    >
    <div id="search-results" class="mt-4"></div>
</div>

<div class="container mx-auto p-4 md:p-8">
    <div class="card">
        <h3 class="text-2xl md:text-3xl font-bold mb-2">Služba 1</h3>
        <p class="text-lg md:text-xl text-gray-700">Popis</p>
    </div>
    <div class="card mt-6">
        <h3 class="text-2xl md:text-3xl font-bold mb-2">Služba 2</h3>
        <p class="text-lg md:text-xl text-gray-700">Popis</p>
    </div>
    <div class="card mt-6">
        <h3 class="text-2xl md:text-3xl font-bold mb-2">Služba 3</h3>
        <p class="text-lg md:text-xl text-gray-700">Popis</p>
    </div>
</div>
@endsection
