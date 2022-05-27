<div class="modal fade" id="remarkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Add Remark</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <form id="form" method="POST">
            @csrf
            <input type="text" name="remark" id="remark" class="form-control form-control-lg">
            @error('remark')
              <span>
                <strong class="text-danger">{{$message}}</strong>
              </span>  
            @enderror
            <div class="modal-footer">
              <button type="submit"class="btn btn-primary">add</button>
              <a href="#" class=" btn-secondary" data-dismiss="modal">Close</a>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>