@extends('layouts.app', ['title' => 'New Post'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            {{-- @include('alert') --}}
            {{-- @if (session()->has('success'))
            <div class="alert alert-success">
                {{  sesion()->get('success') }}
            </div>
            @endif --}}
            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
          @endif --}}
            <div class="card">
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form action="/posts/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                                <textarea type="text" name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
