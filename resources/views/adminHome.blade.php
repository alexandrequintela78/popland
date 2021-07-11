@extends('layouts.app')

@section('content')
<div class="margepage">
<div class="container p-4 block5 justify-content-center">
    @if (is_array($tasks) || is_object($tasks))
    @foreach($tasks as $task)
            <form method="POST" action="{{route('mark')}}">
                @csrf
                <input type="checkbox" name="id" value="{{$task->id}}" onClick="this.form.submit()" {{$task->task_status ? 'checked' : ''}}> <strong>{{$task->task_name}}</strong>

                <input type="hidden" name="id" value="{{$task->id}}" />
            </form>
        <p>{{$task->task_details}}</p>
    @endforeach
    @endif
    {{$tasks->links()}}
</div>
</div>
@endsection
