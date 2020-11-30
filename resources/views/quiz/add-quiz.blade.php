@extends("layout.home")
@section("content")
    <form method="post" style="display: flex;justify-content: center" enctype="multipart/form-data"
          action="{{route('quizz.store')}}">
        <div style="width: 50%">
            <div class="box-body">
                <br>
                <div class="form-group">
                    <input class="form-control @error('question') is-invalid @enderror"
                           name="question" placeholder="question">
                    @error('question')
                    <p class="text-danger">{{$errors->first('question')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('answer1') is-invalid @enderror"
                           name="answer1" placeholder="answer1">
                    @error('answer1')
                    <p class="text-danger">{{$errors->first('answer1')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('answer2') is-invalid @enderror"
                           name="answer2" placeholder="answer2">
                    @error('answer2')
                    <p class="text-danger">{{$errors->first('answer2')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('answer3') is-invalid @enderror"
                           name="answer3" placeholder="answer3">
                    @error('answer3')
                    <p class="text-danger">{{$errors->first('answer3')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('answer4') is-invalid @enderror"
                           name="answer4" placeholder="answer4">
                    @error('answer4')
                    <p class="text-danger">{{$errors->first('answer4')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Choose correct answer</label>
                    <select name="correct_answer_index">
                        <option value="1">Answer 1</option>
                        <option value="2">Answer 2</option>
                        <option value="3">Answer 3</option>
                        <option value="4">Answer 4</option>
                    </select>
                    @error('correct_answer_index')
                    <p class="text-danger">{{$errors->first('correct_answer_index')}}</p>
                    @enderror
                </div>
            </div>
            @method('POST')
            <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save quiz</button>
            </div>
        </div>
    </form>
@endsection
