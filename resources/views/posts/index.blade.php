@extends('layouts.app', ['title' => 'Index'])

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <h4>All Post</h4>
            <hr>
            </div>

            <div>
                <a href="/posts/create" class="btn btn-primary">New Post</a>
            </div>
    </div>
            <div class="row">
                @if ($posts->count())

                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-5">
                            <div class="card-header">
                                {{ $post->title }}
                            </div>
                            <div class="card-body">
                                <div class="">
                                    {{ Str::limit($post->body, 60) }}
                                </div>

                                <a href="/posts/{{ $post->slug }}">Read More</a>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                Published on {{ $post->created_at->format("d M, Y") }}
                                <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success"> Edit </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                <div class="alert alert-info">
                    There are no posts.
                </div>
                @endif

                </div>
                <div class="d-flex justify-content-center">
                    <div>
                        {{  $posts->links() }}
                    </div>
                </div>

</div>
@endsection
