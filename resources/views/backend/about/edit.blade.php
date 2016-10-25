@extends('backend.vbase')
@section('title')
  <h1>
    EDIT ABOUT US
    <small>it all about us</small>
  </h1>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-body">
            <form role="form" href="{{route('about.update',$aboutus->id_about)}}"  method="POST" >
              <div class="form-group">
                 <label>Title</label>
                 <input class="form-control" name="about" placeholder="Enter ..." type="text" value="{{ $aboutus->about_us}}" >
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="7" placeholder="Enter ..." type="text" >{{ $aboutus->description }}</textarea>
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
