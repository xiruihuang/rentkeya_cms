@extends('desktop.layout._base')


@section('mainContent')
        <div class="article">
            <div class="art_head">
                <h2>{{ $article->title }}</h2>
            </div>
            <div class="art_meta clearfix">
                <span class="icon-folder"></span> <a href="{{ slug_url($article->category->slug) }}" title="查看“{{ $article->category->name }}”分类下文章">{{ $article->category->name }}</a>    <span class="icon-calendar"></span> <a href="javascript:void(0);">{{ $article->created_at->format('Y-m-d') }}</a>
            </div>
            <div class="art_con">
            {!! mark2html($article->content) !!}
            </div>
        </div>
                        <?php
                            $_url = slug_url($article->category->slug, $article->slug, false);
                        ?>
@endsection