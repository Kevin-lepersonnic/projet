@foreach($questions as $question)
    <article>
        <header>
            <h3><a href="{{ route('questions.show', ['slug' => $question->slug]) }}">{{ $question->title }}</a></h3>
        </header>
        <main>
            <p>{!! nl2br(e(substr($question->content, 0, 200))) !!} <a href="{{ route('questions.show', ['slug' => $question->slug]) }}">[...]</a></p>
            
            <p>
                @foreach ($question->categories as $category)
                    {{ $category-> name }}
                    @endforeach
            </p>
            
            <small>Rédigé par {{ $question->user->name }} le {{ $question->created_at->format('d/m/Y H:i') }}</small>
        </main>
    </article>
@endforeach