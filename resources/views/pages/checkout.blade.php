@extends('layouts.master')
@section('title', 'Checkout')
@section('content')
    <header class="page-header">
        <h1>Checkout</h1>
        <h3 class="cart-amount">$91745</h3>
    </header>
   
    <main class="checkout-page">
        <div class="container">
            <div class="checkout-form">
                <form action="{{route('stripeCheckout')}}" id="payment-form" method="post">
                    @csrf

                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="@error('name') has-error @enderror" placeholder="Ali Muhavia" value="{{old('name') ? old('name'): auth()->user()->name}}">
                        @error('name')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="@error('email') has-error @enderror" value="{{old('email') ? old('email'): auth()->user()->email}}">
                        @error('email')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="@error('phone') has-error @enderror"  value="{{old('phone') ? old('phone'): auth()->user()->phone}}">
                        @error('phone')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="country">Country</label>

                        <select id="country" name="country" >
                            <option value="">--select Country--</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Kashmir">Kashmir</option>
                        </select>

                        @error('country')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" class="@error('state') has-error @enderror"  value="{{old('state')}}">
                        @error('state')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" class="@error('city') has-error @enderror"  value="{{old('city')}}">
                        @error('city')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip" name="zip" class="@error('zip') has-error @enderror"  value="{{old('zip')}}">
                        @error('zip')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="field">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="@error('address') has-error @enderror"  value="{{old('address')}}">
                        @error('address')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block">Submit Payment</button>


                </form>
            </div>
        </div>
    </main>



@endsection