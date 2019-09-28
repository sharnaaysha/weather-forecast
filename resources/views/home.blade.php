@extends('layouts/app')
@section('mainContent')

<div id="home" class="banner-area">
<div class="home-wrapper">
    <div class="col-md-10 col-md-offset-1 text-center">
        <div class="home-content">
            <h2 class="black-text">Weather Monitoring Page</h2>
            <h4 class="black-text-small">Enter the name of a city</h4>
            {{ Form::open(array('url' => '/', 'method'=>'post')) }}
            {!! Form::text('search',null,['name' => 'cityId','class' => 'form-control search-input','placeholder' => 'search']) !!}
            {!! Form::submit('submit', ['name' => 'commit','class' => 'btn btn-primary button-input']) !!}
            {{ Form::close() }}
        </div>
    </div>
 </div>
</div>

@endsection