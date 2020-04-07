@extends('layouts.auth')
@section('pagetitle','Confirm Password')
@section('content')

                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group ">

                            <div class="col-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12 ">
                                <button type="submit" class="btn btn-primary btn-block btn-lg waves-effect waves-light">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                @endif
                            </div>
                        </div>
                    </form>
                
@endsection
