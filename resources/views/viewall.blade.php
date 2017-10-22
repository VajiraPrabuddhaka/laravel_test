@extends('layouts.app')
@section('content')
    <h1>View your offers</h1>
    @for ($i = 0; $i < 10; $i++)
        @include('inc.offer' ,['title'=>$i, 'id'=>$i, 'name'=>$i])
    @endfor
@endsection