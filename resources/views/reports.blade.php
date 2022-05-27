<x-master>
    <div class="container" style="color: white">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header text-center text-dark">Report</h3>
                </div>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <form action="/report" method="post" >
                    @csrf
                    <div class="form-group">
                        <label class="label w-100" for="from">From</label>
                        <input type="date"  class="form-control form-control-lg rounded" name="from" id="from">
                        @error('from')
                            <span>
                                <strong class="text-danger">{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    
                   <div class="form-group">
                    <label class="label w-100" for="to">To</label>
                    <input type="date" class="form-control form-control-lg rounded" name="to" id="to">
                    @error('to')
                    <span>
                        <strong class="text-danger">{{$message}}</strong>
                    </span>
                    @enderror
                   </div>
                    
                    
                    <button class="btn btn-success" type="submit">submit</button>
                </form>
            
            </div>
            </div>
            
        </div>
        @if(session()->get('reports'))
        <div class="text-center"> Reports From <strong>{{ date('j F, Y', strtotime(session()->get('dateInputs')['from']))}}</strong> to <strong>{{ date('j F, Y', strtotime(session()->get('dateInputs')['to']))}}</strong></div>
       
        @forelse (session()->get('reports') as $item) 
        <div class="row justify-content-center">
            <div class="col-md-8 ">
               
            <div class="card text-dark mt-2">
                <div class="card-content">
                    <div class="card-body">
                       {{$item->activity}}
                    </div>
                </div>
            </div>
        
            </div>
        </div>
        @empty
        <p class="text-center ">No Reports Recorded</p>

        @endforelse
        @endif
    </div>
</x-master>