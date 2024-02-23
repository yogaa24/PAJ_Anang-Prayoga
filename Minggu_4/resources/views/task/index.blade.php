@extends ('layout.app')

@section('content')
    <div>
    <h1>Task List</h1>
    @foreach ($tasks as $task)
    <div class="task-item">
    <strong>Name : {{ $task->name }}</strong>
    <p>Description : {{ $task->description }}</p>
    <a href="{{url("/task/{$task->id}")}}" class="view-link">View</a>
    <a href="{{url("/task/{$task->id}/edit")}}" class="edit-link">Edit</a>
    </div>
@endforeach
</div>

@endsection