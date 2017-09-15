@extends('layouts/app')


@section('content')

	<h1 class="page-heading">Prepare a DMCA Notice</h1>

	{!! Form::open(['method'=>'GET', 'action'=>'NoticesController@confirm']) !!}
    		<div class="form-group">	

    				{!! Form::label('provider_id', 'who are we sending this to?') !!}
    				{!! Form::select('provider_id', $providers, null, ['class'=>'form-control']) !!}

    		</div>

    		<div class="form-group">	

    				{!! Form::label('infringing_title', 'what is the title of the content that is being infringed upon') !!}
    				{!! Form::text('infringing_title',null, ['class'=>'form-control']) !!}

    		</div>

    		<div class="form-group">	

    				{!! Form::label('infringing_link', 'what is the link to where its infringing') !!}
    				{!! Form::text('infringing_link',null, ['class'=>'form-control']) !!}

    		</div>

    		<div class="form-group">	

    				{!! Form::label('original_title', 'what is the original title of the content') !!}
    				{!! Form::text('original_title',null, ['class'=>'form-control']) !!}

    		</div>

    		<div class="form-group">	

    				{!! Form::label('original_link', 'what is the original link of the content') !!}
    				{!! Form::text('original_link',null, ['class'=>'form-control']) !!}

    		</div>

    		<div class="form-group">	

    				{!! Form::submit('Preview Notice', ['class' => 'btn btn-primary form-control']) !!}

    		</div>

	
	{!! Form::close() !!}

	@include ('partials.errorslist')
@endsection 