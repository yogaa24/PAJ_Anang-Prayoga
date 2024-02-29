@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Task</h1>
    <form action="{{ url('/task/' . $task->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Penting untuk operasi update -->

        <div class="form-group">
            <label for="name">Task Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $task->description }}</textarea>
        </div>
        <input type="hidden" class="form-control" id="id" name="id" value="{{ $task->id}}" >
        <button type="submit" class="btn btn-primary">update Task</button>
        <a href="{{ url('/task') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection