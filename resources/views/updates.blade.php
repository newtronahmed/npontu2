<x-master>
    <div class="container" style="color: white;">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header text-center text-dark">Updates Today</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
            @foreach ($notifications as $notification) 
            @if($notification->type === 'App\Notifications\Updates')
            {{-- {{dd($notification)}} --}}
            <li class="list-group-item text-dark">
            
                 Activity :<strong> {{$notification->data['activity']['activity']}} </strong> status changed to <strong>{{$notification->data['activity']['status'] ? "pending" : "done"}} </strong> by 
                 <strong>{{$notification->data["user"]["username"]}}</strong>
                <span class="text-muted text-sm"> {{$notification->created_at->diffForHumans()}} </span>
                {{-- <a  href="{{route('discussions.show',$notification->data['discussion']['slug'])}}" style='text-decoration:none;'> click to view  </a> --}}
              </li>
            @endif
            @if($notification->type === 'App\Notifications\NewActivity')
            {{-- {{dd($notification)}} --}}
            <li class="list-group-item text-dark">
                
                 Activity :<strong> {{$notification->data['activity']['activity']}} </strong> has been added  by 
                 <strong>{{$notification->data["user"]["username"]}}</strong>
                <span class="text-muted text-sm"> {{$notification->created_at->diffForHumans()}} </span>
              </li>
            @endif
            @if($notification->type === 'App\Notifications\NewRemark')
            {{-- {{dd($notification)}} --}}
            <li class="list-group-item text-dark">
                 Remark:<strong> {{$notification->data['remark']['remark']}} </strong> has been added  to Activity: <strong>{{$notification->data["remark"]["activity"]}}</strong>  by 
                 <strong>{{$notification->data["user"]["username"]}}</strong>
                <span class="text-muted text-sm"> {{$notification->created_at->diffForHumans()}} </span>
              </li>
            @endif

            @endforeach
            </div>
        </div>
        
    </div>
</x-master>