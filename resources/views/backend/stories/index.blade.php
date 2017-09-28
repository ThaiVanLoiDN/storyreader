@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1 class="pull-left">
            Stories
        </h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('stories.create') }}">Add New</a>
        </h1>
    </section>

    <section class="content">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success"><p><strong>{{ Session::get('success') }}</strong></p></div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
                @endif
                <div class="clearfix"></div>
                <div class="box box-primary">
                    <div class="box-body table-responsive">
                        <table class="table table-responsive table-bordered" id="tours-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Upload by</th>
                                    <th class="text-center" colspan="3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(0)
                                <td colspan="2">List of stories is empty!</td>
                            @else
                                @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td>loremipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>example@email.com</td>
                                    <td>Admin</td>
                                    <td class="text-center">
                                        <form method="POST" action="{{ route('stories.destroy', 1) }}" accept-charset="UTF-8">
                                            {{ csrf_field() }}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <div class='btn-group'>
                                                <a href="{{ route('stories.show', 1) }}" class='btn btn-default btn-xs'>
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                </a>
                                                <a href="{{ route('stories.edit', 1) }}" class='btn btn-default btn-xs'>
                                                    <i class="glyphicon glyphicon-edit"></i>
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endfor
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="pagination-sm no-margin pull-right">
                            <ul class="pagination">
                                <li class="disabled"><span>&laquo;</span></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="disabled"><span>...</span></li>
                                <li><a href="#">13</a></li>
                                <li><a href="#">14</a></li>
                                <li><a href="#" rel="next">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop