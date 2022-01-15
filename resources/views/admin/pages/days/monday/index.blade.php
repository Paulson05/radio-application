@extends('admin.template.master')
@section('body')

<div class="row py-lg-2">
    <div class="col-md-6 mt-5">
        <h2>This is Team List</h2>
    </div>

    <div class="col-md-6 mt-5">
        <a href="{{route('tuesday.create')}}" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Create AOP</a>
    </div>

</div>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th style="font-size: 12px; !important;">Name of programme</th>
                    <th style="font-size: 12px; !important;">Name of host</th>
                    <th style="font-size: 12px; !important;">image</th>
                    <th style="font-size: 12px; !important;">Time</th>


                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th >Name of programme</th>
                    <th>Name of host</th>
                    <th>image</th>
                    <th>Time</th>
                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($mondays as $monday)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$monday->programme}}</td>
                    <td>{{$monday->host}}</td>
                    <td><img src="{{$monday->image}}" style="max-height: 90px; max-width: 50px;"></td>
                    <th>{{$monday->time}}</th>
                    <td class="text-right">
                        <a href="{{route('monday.edit', ['monday'=>$monday->id])}}" class="btn btn-round"><i class="fas fa-clock" style="color: red;"></i>edit</a>
                        <a href="{{route('monday.show', ['monday'=>$monday->id] )}}" class="btn btn-round "><i class="fa fa-calendar-alt">show</i></a>

                        <form style="display: inline-block" method="post" action="{{route('monday.destroy', ['monday'=>$monday->id])}}" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm p-0"><i class="" ></i>delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you shure you want to delete this?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "delete" If you realy want to delete this post.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form method="POST" action="/posts/">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="post_id" name="post_id" value="">
                    <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js_post_page')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var post_id = button.data('postid')

        var modal = $(this)
        modal.find('.modal-footer #post_id').val(post_id);
        modal.find('form').attr('action','/posts/' + post_id);
    })
</script>
@endsection
