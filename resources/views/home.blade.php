
<x-master>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header text-center ">Daily Activity</h3>
                <div class="card-body">
                    <form action="{{route('activity.store')}}" method="post">
                        @csrf
                        <div class="d-flex">
                            <textarea name="activity" id="" cols="" rows="2" class="form-control form-control-lg rounded"></textarea>
                        </div>
                        @error('activity')
                        <span  role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="submit" class="btn  mt-2 bg-color btn-success ">submit</button>
                    </form>
                    
                    
                </div>
            </div>
            
            @foreach ($activities as $item)
            <div class="card mt-2">
                <div class="card-body row ">
                    <div class="col-md-9"> 
                        <div class="accordion" id="accordionExample">
                            <div>
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                    {{$item->activity}}
                                  </button>
                                </h2>
                              </div>
                        
                              <div id="collapse{{$item->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  @foreach ($item->remarks as $remark)
                                    <li class="list" style="list-style: none"><strong>{{$remark->user()->first()->username}}</strong> 👉 {{$remark->remark}}</li>  
                                  @endforeach
                                </div>
                              </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="py-3">
                        @if(!$item->status)
                       
                        <a tabindex="0" data-toggle="popover" data-container='body' data-trigger='hover' data-content='set status to done' data-placement='bottom' class="btn btn-danger btn-sm " href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('activity-success-{{$item->id}}').submit();">
                                        pending
                                    </a>

                                    <form id="activity-success-{{$item->id}}" action="{{ route('activity.change-status',$item->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('patch')
                                    </form>
                        @else 
                        <a tabindex="0" data-toggle="popover" data-container='body' data-trigger='hover' data-content='set status to pending' data-placement='bottom' class="btn btn-success btn-sm " href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('activity-destroy-{{$item->id}}').submit();">
                                        done
                                    </a>

                                    <form id="activity-destroy-{{$item->id}}" action="{{ route('activity.change-status',$item->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('patch')
                                    </form>
                        {{-- <button disabled="disabled" class="btn  btn-sm btn-success">done</button> --}}
                        @endif
                    
                        <button class="btn btn-sm btn-info" data-toggle="modal" data-id='{{$item->id}}' data-target='#remarkModal'> <svg class="w-3 h-3"style='width:20px;height:15px' fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>remark</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
            @include('_modal')
        </div>
    </div>
</div>
 @section('scripts')
    <script >
        $('[data-toggle="popover"]').popover()
        // $('.popover-dismiss').popover({trigger:'hover'})
        $('#remarkModal').on('show.bs.modal', function (event) {
            
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        
        // set dynamic action attribute
        modal.find('#form').attr('action','/activity/'+id + '/remarks')
    
      })
    </script>
   @endsection 

</x-master>
{{-- @endsection --}}
