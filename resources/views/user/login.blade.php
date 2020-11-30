@extends("layout.home")
@section("content")
    <form method="post" action="{{route('submit_login')}}">
        <div class="form-group">
            <input class="form-control @error('name') is-invalid @enderror"
                   name="name" placeholder="name">
            @error('name')
            <p class="text-danger">{{$errors->first('name')}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" placeholder="password">
            @error('password')
            <p class="text-danger">{{$errors->first('password')}}</p>
            @enderror
        </div>
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
@endsection
