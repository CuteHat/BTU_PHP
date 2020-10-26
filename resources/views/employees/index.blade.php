@extends("layout.home")
@section("content")
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Position</th>
            <th scope="col">Phone</th>
            <th scope="col">Is Hired</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td><a href="/employees/{{$employee->id}}}/edit">{{$employee->name}}</a></td>
                <td>{{$employee->surname}}</td>
                <td>{{$employee->position}}</td>
                <td>{{$employee->phone}}</td>
                @if($employee->is_hired == 1)
                    <td>hired</td>
                @else
                    <td>not hired</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
