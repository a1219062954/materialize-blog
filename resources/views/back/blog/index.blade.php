@extends('back.template')
@section('title')
    <title>Posts</title>
    <style>
        .pagination li.active {
            background-color: #448AFF !important;
        }
    </style>
@stop

@section('main')
    <div class="container">
        <h4 class="page-header">Post</h4>
        <div class="divider"></div>

        <div class="card-panel">
            <table class="bordered striped">
                <thead>
                <tr>
                    <th>标题</th>
                    <th>日期</th>
                    <th>是否公开</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{!! $post->title !!}</td>
                        <td>{!! substr($post->created_at, 0, 10) !!}</td>
                        <td>{!! checkbox($post->published, ['name' => 'publish', 'value' => $post->id, 'class' => 'filled-in put-chk']) !!}</td>
                        <td><a href="{!! url('/posts/' . $post->slug) !!}" class="btn btn-success">主页</a></td>
                        <td><a href="{!! url('/posts/' . $post->id . '/edit') !!}" class="btn btn-warning">编辑</a></td>
                        <td>
                            {!! Form::open(['method' => 'delete', 'url' => '/posts/' . $post->id]) !!}
                            {!! destroy('Really destroy this post?') !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $links !!}
    </div>
@stop

@section('script')
    <script>
        @if(session('ok'))
            Materialize.toast('{!! session('ok') !!}', 3000);
        @endif
    </script>
@stop