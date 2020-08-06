@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))

@section('auth_body')

              {{-- <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form> --}}

    <form action="{{ $register_url }}" method="post" role="form">
        {{ csrf_field() }}

        {{-- Name field --}}
        <div class="form-group mb-3">
             <label for="firstname">Firstame: </label>
            <input type="text" name="firstname" id="firstname" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}"
                   value="{{ old('firstname') }}" placeholder="Enter Firstname" autofocus>
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
                   value="{{ old('lastname') }}" placeholder="Enter Lastname" autofocus>
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
                   value="{{ old('username') }}" placeholder="Enter a Username" autofocus>
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
                   value="{{ old('email') }}" placeholder="Enter Email" autofocus>
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
                   value="{{ old('phone') }}" placeholder="Phone without space" autofocus>
            @if($errors->has('phone'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('phone') }}</strong>
                </div>
            @endif
        </div>

          {{-- Role field --}}
        <div class="form-group mb-3">
                <label for="role_id">Registered As : </label>
            <select class="custom-select" name="role_id" id="role_id">
                <option value="">Choose a Role</option>
                <option value="1">Member</option>
                <option value="2">Mentor</option>
                <option value="3">Sponsor</option>
                <option value="4">Patron/Matron</option>
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
            <select class="custom-select" name="gender" id="gender">
                <option value="">Choose a Gender</option>
                <option value="male">Male</option>
                <option value="male">Female</option>
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
            <span class="fas fa-user-plus"></span>
            {{ __('adminlte::adminlte.register') }}
        </button>

    </form>
@stop

@section('auth_footer')
<div class="row">
    <p class="my-0 col-md-6">
            <a href="{{ $login_url }}">
                {{ __('adminlte::adminlte.i_already_have_a_membership') }}
            </a>
        </p>

        <p class="my-0 col-md-6">
            <a href="{{ url('/') }}">
            Return Home
            </a>
    </p>
</div>

@stop
