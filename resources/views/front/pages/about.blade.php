@extends('front.template')
@section('title')
    <title>About Me</title>
@stop
@section('main')
    <h5 class="center">About Me</h5>
    <div class="divider"></div>
    <div class="card">
        <div class="card-content">
            <div class="markdown-body">
               王二麻子
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $('nav').addClass('blue');
        $('.top-tags > a').addClass('blue');
        $('.side-nav').addClass('blue');
        $('.collapsible-according').addClass('blue');
    </script>
@stop