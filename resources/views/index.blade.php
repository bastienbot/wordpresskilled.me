@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col s12 m7 l8 post-list">

            @foreach($posts as $post)
                @include('partials.post.preview', ['post' => $post])
            @endforeach

            @if(!count($posts))
                No posts yet.
            @endif

            {!! with((new Ohlandt\Presenters\Pagination\Materialize($posts))->setColor('deep-orange darken-2'))->render() !!}

        </div>
        <div class="col s12 m5 l4 sidebar">
            @include('partials.sidebar')
        </div>
    </div>
</div>
<div class="container">

</div>
@endsection