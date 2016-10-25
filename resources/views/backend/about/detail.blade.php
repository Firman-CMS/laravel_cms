@extends('backend.vbase')
@section('title')
  <h1>
    DETAIL ABOUT US
    <small>it all about us</small>
  </h1>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <form role="form">
            <div class="form-group">
               <label>Title</label>
               <input class="form-control" placeholder="Enter ..." disabled="" type="text" value="{{ $aboutus->about_us}}">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" rows="7" placeholder="Enter ..." disabled="">{{ $aboutus->description }}</textarea>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
