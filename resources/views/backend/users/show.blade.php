@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            User
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Id Field -->
                    <div class="form-group col-sm-6">
                        <label for="id">Id:</label>
                        <p>{{$user->id}}</p>
                    </div>

                    <!-- Fullname Field -->
                    <div class="form-group col-sm-6">
                        <label for="fullrname">Fullrname:</label>
                        <p>{{$user->name}}</p>
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        <label for="email">Email:</label>
                        <p>{{$user->email}}</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Image Field -->
                    <div class="form-group col-sm-6">
                        <label for="image">Image:</label>
                        <p>
                            <img src="{{ asset('storage/avatars/' . $user->image) }}" alt="" class="img-responsive" width="150px" height="auto">
                        </p>
                    </div>

                    <!-- Role Field -->
                    <div class="form-group col-sm-6">
                        <label for="role">Role:</label>
                        <p>Admin</p>
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
                        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop