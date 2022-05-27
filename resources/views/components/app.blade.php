<x-master>
    <main class="py-4">
           
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-color">
                    {{-- @yield('content') --}}
                    {{$slot}}
                </div>
                <div class="col-md-5 "  >
                    <div class="img-fluid mx-auto" style="width:100%;height:100%;background-image: url('/images/header.png'); background-size:cover;">

                    </div>
                    {{-- <img src="/images/header.png" class="mx-auto img-fluid"  alt="" srcset=""> --}}
                </div>
            </div>
        </div>
    </main>
</x-master>