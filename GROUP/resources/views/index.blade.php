@extends('layouts.app')

@section('content')
<div class="container">
    <h1>CV List</h1>
    <a href="{{ route('cvs.create') }}" class="btn btn-primary">Add New CV</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Experience</th>
                <th>Skills</th>
                <th>Application Link</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cvs as $cv)
                <tr>
                    <td>{{ $cv->name }}</td>
                    <td>{{ $cv->email }}</td>
                    <td>{{ $cv->experience }}</td>
                    <td>{{ $cv->skills }}</td>
                    <td>{{ $cv->application_link }}</td>
                    <td>{{ $cv->status }}</td>
                    <td>
                        <a href="{{ route('cvs.edit', $cv->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
