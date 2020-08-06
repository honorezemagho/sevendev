@extends('adminlte::page')

@section('title', 'SEVENDEV COMMUNITY')

@section('content_header')
    <h1 class="m-0 text-dark text-center pt-2 pb-2">Edit Profile</h1>
@stop

@section('content')
    <div class="row">
            <div class="col-md-6">
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
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

                  <div class="col-md-6">
            <div class="card">
  <div class="card-body">
      <form action="{{route('users.update', $user->id)}}" method="post" class="form">
            {{ csrf_field() }}
            {{ method_field('patch') }}

    {{-- Name field --}}
        <div class="form-group mb-3">
             <label for="firstname">Firstame: </label>
            <input type="text" name="firstname" id="firstname" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}"
                   value="{{  $user->firstname  ?? old('firstname') }}" placeholder="Enter Firstname" autofocus>
            @if($errors->has('firstname'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </div>
            @endif
        </div>

         {{-- LastName field --}}
        <div class="form-group mb-3">
            <label for="lastname">Lastname: </label>
            <input type="text" name="lastname" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
                   value="{{ $user->lastname  ?? old('lastname') }}" placeholder="Enter Lastname" autofocus>
            @if($errors->has('lastname'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </div>
            @endif
        </div>

          {{-- Username field --}}
        <div class="form-group mb-3">
            <label for="username">Username: </label>
            <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
                   value="{{  $user->username  ?? old('username') }}" placeholder="Enter a Username" autofocus>
            @if($errors->has('username'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('username') }}</strong>
                </div>
            @endif
        </div>

            {{-- Email field --}}
        <div class="form-group mb-3">
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                   value="{{  $user->email  ?? old('email') }}" placeholder="Enter Email" autofocus >
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>

          {{-- Phone field --}}
        <div class="form-group mb-3">
            <label for="phone">Phone: </label>
            <input type="tel" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                   value="{{  $user->phone  ?? old('phone') }}" placeholder="Phone without space" autofocus disabled>
            @if($errors->has('phone'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('phone') }}</strong>
                </div>
            @endif
        </div>

          {{-- Role field --}}
        <div class="form-group mb-3">
                <label for="role_id">Registered As : </label>
            <select class="custom-select" name="role_id" id="role_id" >
                <option value="" >Choose a Role</option>
                <option value="1" {{ old('role_id', $user->role_id) == 1 ? 'selected' : '' }}>Member</option>
                <option value="2" {{ old('role_id', $user->role_id) == 2 ? 'selected' : '' }}>Mentor</option>
                <option value="3" {{ old('role_id', $user->role_id) == 3 ? 'selected' : '' }}>Sponsor</option>
                <option value="4" {{ old('role_id', $user->role_id) == 4 ? 'selected' : '' }}>Patron/Matron</option>
            </select>
            @if($errors->has('role_id'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('role_id') }}</strong>
                </div>
            @endif
        </div>

             {{-- Gender field --}}
        <div class="form-group mb-3">
                <label for="phone">Gender : </label>
            <select class="custom-select" name="gender" id="gender" disabled>
                <option value="">Choose a Gender</option>
                <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
            </select>
            @if($errors->has('gender'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('gender') }}</strong>
                </div>
            @endif
        </div>

        {{-- Password field --}}
        <div class="form-group mb-3">
            <label for="password">Password : </label>
            <input type="password" name="password"
                   class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                   placeholder="{{ __('adminlte::adminlte.password') }}">

            @if($errors->has('password'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
            @endif
        </div>

        {{-- Confirm password field --}}
        <div class="form-group mb-3">
            <label for="passord"> Password Confirmation: </label>
            <input type="password" name="password_confirmation"
                   class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                   placeholder="{{ __('adminlte::adminlte.retype_password') }}">

            @if($errors->has('password_confirmation'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
            @endif
        </div>

        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
           Update
        </button>
        </form>
  </div>
</div>
<!-- /.card -->
        </div>
    </div>
@stop
