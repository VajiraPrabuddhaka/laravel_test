@extends('layouts.app')


@section('content')
    <h1>Create your offer here</h1>
    <br>
    {!! Form::open(['url' => '/submitOffer']) !!}
    <div class="form-group">
        {{Form::label('Company name', 'Copmany name')}}
        {{Form::text('Company_name', '', ['class'=>'form-control', 'placeholder'=>'Enter company name here'])}}
    </div>

    <div class="form-group">
        {{Form::label('country', 'Country')}}
        {{Form::text('country', '',['class'=>'form-control', 'placeholder'=>'country name here'])}}
    </div>

    <div class="form-group">
        {{Form::label('Slogan', 'Slogan')}}
        {{Form::text('slogan', '', ['class'=>'form-control', 'placeholder'=>'Enter your slogan here'])}}
    </div>

    <div class="form-group">
        {{Form::label('region', 'Region')}}
        {{Form::select('region', ['L' => 'Colombo', 'S' => 'Gampaha'], ['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('startsin', 'Offer starts in')}}
        {{Form::date('starts_in', '')}}
    </div>

    <div class="form-group">
        {{Form::label('period', 'Select period that you want to active offer for')}}
        {{Form::select('period', ['d' => 'Daily', 'w' => 'Weekly', 'm' => 'Monthly'], ['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('endsin', 'Offer ends in')}}
        {{Form::date('ends_in', '')}}
    </div>

    <div class="form-group">
        {{Form::label('vperiod', 'Select valid period for buying offer')}}
        {{Form::number('valid_period', 'value',['class'=>'form-control'])}}
    </div>

    <div class="pull-right">
        {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
    </div>


    {!! Form::close() !!}
@endsection