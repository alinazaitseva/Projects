@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Feedback page</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::open(array('route' => ['feedstore', $id], 'method'=>'POST')) }}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{Form::label('id_user', 'User')}}:</strong>
                {{ DB::table('users')->where('id',DB::table('messages')->where('id', $id)->value('user_id'))->value('name')}}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Message:</strong>
                    {{ DB::table('messages')->where('id',$id)->value('description')}}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <br><strong>Answer:</strong>
                        {{ Form::textarea('feedback', null, array('placeholder' => 'feedback','class' => 'form-control', 'style' => 'height:100px')) }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    {{ Form::close() }}

@endsection
