@extends("layout.home")
@section("content")
    <form method="post" enctype="multipart/form-data" action="{{route('employees.update',[$employee->id])}}">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" value={{$employee->name}} class="form-control @error('name') is-invalid @enderror"
                name="name">
                @error('name')
                <p class="text-danger">{{$errors->first('name')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Surname</label>
                <input type="name" value={{$employee->surname}} class="form-control  @error('surname') is-invalid @enderror" name="surname">
                @error('surname')
                <p class="text-danger">{{$errors->first('surname')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Position</label>
                <input type="name" value={{$employee->position}} class="form-control  @error('position') is-invalid @enderror" name="position">
                @error('position')
                <p class="text-danger">{{$errors->first('position')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="name" value={{$employee->phone}} class="form-control @error('phone') is-invalid @enderror" name="phone">
                @error('phone')
                <p class="text-danger">{{$errors->first('phone')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="is_hired">
                    <option value=0 {{ $employee->is_hired == 0 ? 'selected' : '' }}>Not Hired</option>
                    <option value=1 {{ $employee->is_hired == 1 ? 'selected' : '' }}>Hired</option>
                </select>
            </div>
        </div>
        @method('PUT')
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
