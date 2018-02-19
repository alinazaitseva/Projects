@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Messages</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('messages.create') }}"> Create New Message</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>№</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($messages as $key => $message)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $message->title }}</td>
        <td>{{ $message->description }}</td>
        <td>
           <!--  <a class="btn btn-info" href="{{ route('messages.show',$message->id) }}">Show</a> -->
            <a class="btn btn-primary" href="{{ route('feedback1', $message->id) }}">Feedback</a>
            {{ Form::open(['method' => 'DELETE','route' => ['messages.destroy', $message->id],'style'=>'display:inline']) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </table>

    {{ $messages->render()}}

@endsection