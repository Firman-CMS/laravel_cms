@extends('backend.vbase')
@section('title')
  <h1>
    EDIT service
    <small>it all service</small>
  </h1>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-body">
            <form method="POST" action="{{ url('service/update/'.$service->id_service) }}">
                {!! csrf_field() !!}
              <div class="form-group">
                <label>Service</label>
                <input class="form-control" name='service' placeholder="Enter ..." type="text" value="{{ $service->service }}">
              </div>
              <div class="form-group">
                <label>Description</label>
                <input class="form-control" name='description' placeholder="Enter ..." type="text" value="{{ $service->description }}">
              </div>
              <div class="form-group">
                <label>Icon</label>
                <input class="form-control" name='icon' placeholder="Enter ..." type="text" value="{{ $service->icon }}">
              </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
@stop
