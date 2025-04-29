@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <article class="page-content">
        <h1>{{ $page->title }}</h1>
        <div class="page-body">
            {!! $page->content !!}
        </div>
    </article>
@endsection