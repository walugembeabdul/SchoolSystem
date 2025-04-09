@extends("layout.default")
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table"
                    <thead class="thead-dark">
                        <tr>
                        <th>students_name</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>

                            <td>{{$student->students_name}}</td>
<td><a href="{{route("details",$student->id)}}">details</a></td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
        </div>
    </div>
</div>
