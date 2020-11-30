@extends("layout.home")
@section("content")
    <form method="post" action="{{route('submit_result')}}">
        @foreach($questions as $question)
            <hr>
            <div style="display:flex;justify-content: center">
                <div>
                    <h3>{{$question->question}}</h3>
                    <select name="{{$question->question}}">
                        @foreach($question->answers as $answer)
                            <option value="{{$answer->id}}">{{$answer->answer}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
        @endforeach
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div style="display: flex;justify-content: center">
            <button type="submit" class="btn btn-primary">Show result</button>
        </div>
    </form>
    <span><a class="nav-link" href="/quizz/create">make quiz</a></span>
@endsection
