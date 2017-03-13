@extends('admin.tag.partials.form')

@section('titleHeader', 'Tags - edit')
@section('title', 'Edit tag')

@section('openForm')
    {!! Form::open(['route' => ['admin.tags.update', $tag->id], 'method' => 'PUT', 'class'=> 'form-horizontal form-label-left', 'novalidate' => 'novalidate']) !!}
@endsection
