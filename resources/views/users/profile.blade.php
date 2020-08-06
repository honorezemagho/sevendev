@extends('adminlte::page')

@section('title', 'SEVENDEV COMMUNITY')

@section('content')
    <div class="row">
        <div class="col-md-8"><h1 class="m-0 text-dark text-center pt-2 pb-2">Profile</h1></div>

         <div class="col-md-2">
            <a href="{{route('users.edit', $user->id)}}">
                <button class="btn btn-block btn-primary">Update</button>
            </a>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username ">{{$user->firstname}} {{$user->lastname}}</h3>
                <h5 class="widget-user-desc">{{$user->role->name}}</h5>
              </div>
              <div class="widget-user-image">
                <img src="{{Avatar::create($user->firstname)}}" alt="User Avatar" class="img-circle elevation-2">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Username</h5>
                      <span class="description-text">{{$user->username}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Email</h5>
                      <span class="description-text">{{$user->email}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">Phone</h5>
                      <span class="description-text">{{$user->phone}}</span>
                    </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>



@stop
