@extends('layouts.app')

@section('content')

<div class="container mx-auto p-4 md:p-8">
    <div class="flex justify-center items-center">
        <h1 class="text-3xl font-bold mb-4 text-center">Upraviť recenziu</h1>
    </div>


    <div class="form-container">
        <form action="{{ route('reviews.update', $review->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="rating" class="form-label">Hodnotenie (1-5):</label>
                <select name="rating" id="rating" class="form-input">
                    <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>1 - Veľmi zlé</option>
                    <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>2 - Zlé</option>
                    <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>3 - Priemerné</option>
                    <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>4 - Dobré</option>
                    <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>5 - Výborné</option>
                </select>
            </div>

            <div>
                <label for="content" class="form-label">Vaša recenzia:</label>
                <textarea name="content" id="content" rows="5" class="form-input">{{ $review->content }}</textarea>
            </div>

            <button type="submit" class="form-button">Uložiť zmeny</button>
        </form>
    </div>
</div>


@endsection
