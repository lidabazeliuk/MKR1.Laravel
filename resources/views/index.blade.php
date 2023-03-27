<!-- resources/views/students/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>List of Students</h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Specialty</th>
            <th>Subjects</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->specialty }}</td>
                <td>
                    <ul>
                        @foreach($student->scores as $score)
                            <li>{{ $score->subject_name }}: {{ $score->score }} ({{ $score->date_received }})</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
