@extends('admin.post.partials.form')

@section('titleHeader', 'Posts - create')
@section('title', 'Create post')

@section('openForm')
    {!! Form::open(['route' => ['admin.posts.store'],'class'=> 'form-horizontal form-label-left', 'novalidate' => 'novalidate']) !!}
@endsection


