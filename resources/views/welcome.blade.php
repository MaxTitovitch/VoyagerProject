@extends('template.template')



@if ($page->title == 'Main')
    @section('title-no-main')
    @endsection
@else
    @section('title')
        {!! $page->title !!}
    @endsection
@endif

@section("content")
    {!! $page->body !!}
@endsection
