@extends("layout.default")
<div class="container mt-4 p-6">
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-hover caption-top table-success table-striped-columns">
                <caption class="text-sm text-primary">List of students</caption>
                <thead class="table-light">
                    <tr>
                        <th>student's name</th>
                        <th>student's DOB</th>
                        <th>student's AGE</th>
                        <th>student's Course</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student->students_name}}</td>
                        <td>{{$student->DOB}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->course}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
