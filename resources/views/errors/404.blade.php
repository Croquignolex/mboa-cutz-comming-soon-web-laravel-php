@extends('layouts.error')

@section('error.title', page_title('404'))

@section('error.code')
    <h1>
        <strong>4</strong><span>0</span><strong>4</strong>
    </h1>
@endsection

@section('error.description', trans('error.description'))