{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<x-app>
  <div class="w-75 mx-auto">
  <div style="height: 30vh;"></div>
  <h1 class="font-weight-bolder text-center" > Register</h1>
<form method="POST" action="{{ route('register')}}" class="p-2">
    @csrf
    <div class=" mt-2">
      <div class="w-100 mt-2">
         
          <input type="text" name='username' class="form-control-lg form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username*">
          @error('username')
              <span>
                <strong class="text-red">{{$message}}</strong>
              </span>
          @enderror
        </div>
        <div class="w-100 mt-2 ">
         
          <input type="password" name='password' class="form-control-lg form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password*">
          
          @error('password')
              <span>
                <strong class="text-red">{{$message}}</strong>
              </span>
          @enderror
        </div>
        
      </div>
      <div class="row justify-content-center">
        <button type="submit" class="btn mt-2 bg-color mr-1 text-color">submit</button>
        {{-- <span class="align-self-center">or</span> --}}
      </div>
      <div class="text-sm">
        If you already have an account <button class=" bg-secondary text-color mt-2 ml-1"><a class='text-color' href="/login">login</a></button> here
      </div>
      
  </form>
</div>
{{-- @endsection --}}
</x-app>