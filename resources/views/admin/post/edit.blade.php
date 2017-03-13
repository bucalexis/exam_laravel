@extends('admin.post.partials.form')

@section('titleHeader', 'Posts - edit')
@section('title', 'Edit post')

@section('openForm')
    {!! Form::open(['route' => ['admin.posts.update', $post->id], 'method' => 'PUT', 'class'=> 'form-horizontal form-label-left', 'novalidate' => 'novalidate']) !!}
@endsection
