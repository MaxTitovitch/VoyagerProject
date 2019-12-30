@extends('template.template')

@section('title')
    {!! $page->title !!}
@endsection

@section("content")
    {!! $page->body !!}
    {{ storage_path() . '\\' . setting('site.logo') }}
@endsection
