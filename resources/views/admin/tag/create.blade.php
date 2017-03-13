@extends('admin.tag.partials.form')

@section('titleHeader', 'Tags - create')
@section('title', 'Create tag')

@section('openForm')
    {!! Form::open(['route' => ['admin.tags.store'],'class'=> 'form-horizontal form-label-left', 'novalidate' => 'novalidate']) !!}
@endsection


