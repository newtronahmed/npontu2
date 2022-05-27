{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<x-app>
            <div class="w-50 bl-2  " style="border-left-color: #1b0a64;">
                <div class="display-3">BlurrsApp</div>
            <div class="display-4 mb-4">Free To Use</div>
            <h4 class='font-weight-bolder text-capitalize mb-4 pl-3 ' style="border-left: 5px solid #1b0a64; ">
                An Activities tracker for the Applications support team 
            </h4>
            </div>
        <div class="flex justify-content-around " >
            @if (Route::has('login'))
                               
                <a class="btn btn-lg text-color bg-color" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
            @if (Route::has('register'))
            
                <a class="btn btn-lg text-color bg-color" href="{{ route('register') }}">{{ __('Register') }}</a>
            
        
        @endif
        
            
           
        </div>
    </x-app>
    
{{-- @endsection --}}
