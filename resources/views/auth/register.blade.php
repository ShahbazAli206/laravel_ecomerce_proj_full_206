@extends('layouts.master')
@section('title', 'Login')
@section('content')
    <section class="login-page">
        <div class="login-form-box">
            <div class="login-title">Register</div>
            <div class="login-form">
                <form action="{{route('register')}}" method="post">
                    @csrf

                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="@error('name') has-error @enderror" placeholder="Ali Muhavia">
                        @error('name')

                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="@error('email') has-error @enderror"placeholder="Muhavia_206@gmail.com">
                        @error('email')

                        <span class="field-error">{{$message}}</span>
                        @enderror
                    
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="@error('password') has-error @enderror" placeholder="*******">
                        @error('password')

                        <span class="field-error">{{$message}}</span>
                        @enderror
                    
                    </div>

                    <div class="field">
                        <label for="password_confirmation">Confirm password</label>
                        <input type="password" id="name" name="password_confirmation" placeholder="*******">
                    
                    
                    </div>

                    <div class="field">
                        <button type="submit" class="btn btn-primary btn-block" >Register</button>
                    </div>
                    <a href="{{route('login')}}">Already Registered? Login here ...</a>


                </form>
            </div>
        
        </div>
    </section>



@endsection