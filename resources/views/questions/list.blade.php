@foreach($questions as $question)
    <article class="border rounded mb-4">
        <header class="container">
            <h3><a href="{{ route('questions.show', ['slug' => $question->slug]) }}">{{ $question->title }}</a></h3>
        </header>
        <main>
            <article class="container">
                <p>{!! nl2br(e(substr($question->content, 0, 200))) !!} <a href="{{ route('questions.show', ['slug' => $question->slug]) }}">[...]</a></p>

                <p>
                    @foreach ($question->categories as $category)
                        <span class="badge badge-pill badge-success">{{ $category->name }}</span>
                        @endforeach
                </p>
            </article>

            <div class="container bg-light">
                <small class="bg-light">Rédigé par {{ $question->user->name }} le {{ $question->created_at->format('d/m/Y H:i') }}</small>
            </div>
        </main>
    </article>
@endforeach