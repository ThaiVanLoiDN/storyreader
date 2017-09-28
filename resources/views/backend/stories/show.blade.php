@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Story
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Id Field -->
                    <div class="form-group col-sm-6">
                        <label for="id">Id:</label>
                        <p>1</p>
                    </div>

                    <!-- Username Field -->
                    <div class="form-group col-sm-6">
                        <label for="title">Title:</label>
                        <p>Minima consectetur praesentium obcaecati dolor eu adipisicing iure nobis occaecat aut non hic</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Fullname Field -->
                    <div class="form-group col-sm-6">
                        <label for="author">Author:</label>
                        <p>Ab in modi necessitatibus</p>
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        <label for="category">Category:</label>
                        <p>Manga Chinese</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Image Field -->
                    <div class="form-group col-sm-6">
                        <label for="image">Image:</label>
                        <p>
                            <img src="{{ asset('storage/stories/noimage.png') }}" alt="" class="img-responsive" width="150px" height="auto" style="border: 1px solid #cccccc">
                        </p>
                    </div>

                    <!-- Upload by Field -->
                    <div class="form-group col-sm-6">
                        <label for="upload_by">Upload by:</label>
                        <p>Admin</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- File Field -->
                    <div class="form-group col-sm-6">
                        <label for="file">File:</label>
                        <p><a href="">Minima consectetur praesentium obcaecati dolor eu adipisicing iure nobis occaecat aut non hic</a></p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Created At Field -->
                    <div class="form-group col-sm-6">
                        <label for="created_at">Created At:</label>
                        <p>16-05-2017</p>
                    </div>

                    <!-- Updated At Field -->
                    <div class="form-group col-sm-6">
                        <label for="updated_at">Updated At:</label>
                        <p>21-05-2017</p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12">
                        <a href="{{ route('stories.index') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop