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
                    <label><strong>Tags:</strong></label><br>
                    <select name="tag_id[]" id="cars"  class="form-control custom-select">
<!--                        <select name="name[]" id="cars" multiple class="form-control custom-select">-->
                        @foreach($tags as $tag)

                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>image</label>
                        <div class="input-group">
                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose
                                                 </a>
                                               </span>
                            <input id="thumbnail"  class="form-control" type="text" name="image">
                        </div>
                        <div id="holder"  style="margin-top:15px;max-height:200px;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Body</label>
                    <input type="text" name="body" class="form-control" id="body" placeholder="body" value="">
                </div>
                <div class="form-group pt-2">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>

            </form>
        </div>

    </div>
</div>
@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection
