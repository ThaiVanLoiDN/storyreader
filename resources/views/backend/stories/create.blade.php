@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create story
        </h1>
    </section>

    <section class="content">
        @if($errors->count()>0)
            <ul class="alert alert-danger" style="list-style-type: none">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <form method="POST" action="{{ route('stories.store') }}" accept-charset="UTF-8" id="stories">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <!-- Title Field -->
                            <div class="col-sm-6">
                                <label for="title">Title:</label>
                                <input class="form-control" name="title" type="text" id="title">
                            </div>
                            <!-- Category Field -->
                            <div class="col-sm-6">
                                <label for="category">Category:</label>
                                <select class="form-control select2" style="width: 100%" name="role">
                                    <option value="2">Anime</option>
                                    <option value="1">Manga Chinese</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Author Field -->
                            <div class="col-sm-6">
                                <label for="author">Author:</label>
                                <input class="form-control" name="author" type="text" id="author">
                            </div>
                            <!-- File Field -->
                            <div class="col-sm-6">
                                <label for="file">File:</label>
                                <input class="form-control" name="file" type="file" id="file">
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Image Field -->
                            <div class="col-sm-6">
                                <label for="image">Image:</label>
                                <input class="form-control" name="image" type="file" id="image" onchange="viewImg(this)">
                                <br>
                                <p><img src="{{ asset('storage/stories/noimage.png') }}" alt="" class="img-responsive" width="150px" height="auto" style="border: 1px solid #cccccc"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Preview Field -->
                            <div class="col-sm-12">
                                <label for="preview">Preview:</label>
                                <textarea class="form-control" name="preview" id="preview" rows="3" placeholder="Preview the story ..."></textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Submit Field -->
                            <div class="col-sm-12">
                                <input class="btn btn-primary" type="submit" value="Save">
                                <a href="{{ route('stories.index') }}" class="btn btn-default">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
@stop

@section('script')
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script type="text/javascript">
        $('.select2').select2();
    </script>

    <script>
        function viewImg(img) {
            var fileReader = new FileReader;
            fileReader.onload = function(img) {
                var avartarShow = document.getElementById("avartar-img-show");

                avartarShow.src = img.target.result
            }, fileReader.readAsDataURL(img.files[0])
        }
    </script>
@stop