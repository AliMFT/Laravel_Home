@extends('combonent.layout')
@section('totle','post')
@section('content')
    <article>
        <?= $post->title; ?>
        <?= $post->body; ?>
        <a href="/">Go Back</a>
    </article>
@endsection
