@extends('admin.template.master')
@section('body')

<h1>Create New Post</h1>

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="">
                </div>
                <div class="form-group">
                    <strong>slug</strong>
                    <input type="text" name="slug" class="form-control" placeholder="email">

                </div>
                <div class="form-group">
                    <label><strong>Tags:</strong></label><br>
                    <select name="name[]" id="cars"  class="form-control custom-select">
<!--                        <select name="name[]" id="cars" multiple class="form-control custom-select">-->
                        @foreach($tags as $tag)

                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="title">image</label>
                    <input type="file" name="title" class="form-control" id="title" placeholder="Title" value="">
                </div>
                <div class="form-group">
                    <label for="title">Body</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="">
                </div>
                <div class="form-group pt-2">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>

            </form>
        </div>

    </div>
</div>

<script>
    CKEDITOR.replace( 'post_content' );
</script

@endsection
