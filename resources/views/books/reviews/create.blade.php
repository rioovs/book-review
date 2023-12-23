@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add Review for {{ $book->title }}</h1>

    @if ($errors->any())
        <div class="mb-4">
            @foreach ($errors->all() as $error)
                <h4 class="bg-red-50">{{ $error }}</h4>
            @endforeach
        </div>
    @endif

    <!-- Create Post Form -->

    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" required class="input mb-4"></textarea>

        <label for="rating">Rating</label>

        <select name="rating" id="rating" class="input mb-4" required>
            <option value="">Select a Rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection
