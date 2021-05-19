@foreach($questions as $question)
    <article>
        <header>
            <h3><a href="{{ route('questions.show', ['slug' => $question->slug]) }}">{{ $question->title }}</a></h3>
        </header>
        <main>
            <p>{!! nl2br(e(substr($question->content, 0, 200))) !!} <a href="{{ route('questions.show', ['slug' => $question->slug]) }}">[...]</a></p>
            <small>Posée le {{ $question->created_at->format('d/m/Y H:i') }} par {{ $question->user->name }}</small>
        </main>
    </article>
@endforeach