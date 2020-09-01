@extends('layouts.error')

@section('error.title', page_title('404'))

@section('error.code')
    <h1>4<span>0</span>4</h1>
@endsection

@section('error.description', trans('error.description'))