@extends('backend.vbase')
@section('title')
  <h1>
    DETAIL service
    <small>it all service</small>
  </h1>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
            <form  action="{{ url('service') }}">
            <div class="form-group">
               <label>Service</label>
               <input class="form-control" placeholder="Enter ..." disabled="" type="text" value="{{ $service->service }}">
            </div>
            <div class="form-group">
               <label>Description</label>
               <input class="form-control" placeholder="Enter ..." disabled="" type="text" value="{{ $service->description }}">
            </div>
            <div class="form-group">
               <label>Icon</label>
               <input class="form-control" placeholder="Enter ..." disabled="" type="text" value="{{ $service->icon }}">
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Back</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
