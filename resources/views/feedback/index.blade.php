@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Messages</h3>
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
            <th>From whome</th>
            <th>User message</th>
            <th>My answer</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($feedback as $key => $feedbacks)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{('App\Message'::find($id))->user_id }}</td>
                <td>{{ $feedbacks->feedback }}</td>
                <td>{{ $feedbacks->description }}</td>
                <td>
                    {{ Form::open(['method' => 'DELETE','route' => ['feedback.destroy', $feedbacks->id],'style'=>'display:inline']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </table>

    {{ $feedback->render()}}

@endsection