@extends('layouts.frontend')

@section('content')
<section class="h-full w-full border-box lg:px-24 md:px-16 sm:px-8 px-8 sm:py-32 pt-20 pb-20 transition-all duration-500 linear" style="background-color: #FFFCFA;">
  <div class="empty-3-1" style="font-family: 'Poppins', sans-serif;">
    <div class="container mx-auto flex items-center justify-center flex-col">
      <img class="sm:w-auto w-5/6 mb-10 object-cover object-center" src="{{ url('frontend/images/success.png') }}" alt="">                       
      <div class="text-center w-full">
        <h1 class="text-3xl mb-3 font-semibold text-black tracking-wide">
          Checkout Successful
        </h1>
        <p class="caption-text mb-12 text-base tracking-wide leading-7">
          We've sent the receipt to your email<br class="sm:block hidden"> address is example@gmail.com
        </p>
        <div class="flex justify-center">
          <a href="{{ route('dashboard.my-transaction.index') }}" class="btn-view inline-flex font-semibold text-white text-lg leading-7 py-4 px-8 rounded-xl focus:outline-none">
            View My Order
          </a>
        </div>
      </div>
    </div>
  </div>
  </section> 
@endsection