@extends('layouts/header-footer')

@section('title', 'How to use signals')

@section('content')




<div class="container mx-auto px-4 py-12 max-w-4xl ">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-indigo-700 mb-4">How to use our signals</h1>
    </div>

<!-- Centered section -->
<section class="flex items-center justify-center bg-gray-50 p-4">
  <!-- Grid: 1 column on mobile, 2 on sm+ -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 justify-items-center w-full max-w-3xl">
    <!-- Box 1 -->
    <a href="{{route('how-to-use-crypto-signals')}}">
        <div class="w-48 sm:w-56 md:w-64 aspect-square bg-blue-500 rounded-xl shadow-lg flex items-center justify-center text-center p-4 bg-indigo-700">
          <div>
            <h3 class="text-lg font-semibold text-white">Crypto Signals</h3>
            <p class="text-sm text-white mt-2">Trading guild</p>
          </div>
        </div>
    </a>

    <!-- Box 2 -->
    <a href="{{route('how-to-use-forex-signals')}}">
        <div class="w-48 sm:w-56 md:w-64 aspect-square bg-blue-500 rounded-xl shadow-lg flex items-center justify-center text-center p-4 bg-indigo-700">
          <div>
            <h3 class="text-lg font-semibold text-white">Forex Signals</h3>
            <p class="text-sm text-white mt-2">Trading guild</p>
          </div>
        </div>
    </a>
  </div>
</section>

    
</div>



@endsection

        
