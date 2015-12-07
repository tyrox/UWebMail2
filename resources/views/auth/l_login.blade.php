@extends('auth.login')
	@section('content')
	<form method="POST" action="/auth/login">
                                    {!! csrf_field() !!}
                                    <div>
                                        Email
                                        <input type="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div>
                                        Password
                                        <input type="password" name="password" id="password">
                                    </div>

                                    <div>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </div>

                                    <div>
                                        <button class="btn waves-effect waves-light" type="submit">Login</button>
                                    </div>
                                </form>
	@endsection