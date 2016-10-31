@extends('backend.vbase')
@section('title')
  <h1>
   About me
    <small>it all about me</small>
  </h1>
@stop
@section('content')
<style media="screen">
.faded{
  position: absolute;
  z-index: 1;
  margin-left: 64%;
  margin-top: -2%;
}
</style>
  @if(session('message'))
      <div class="alert alert-danger alert-dismissible faded" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-info"></i> {{session('message')}}
      </div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-body">

            <form method="POST" enctype="multipart/form-data"  action="{{ url('aboutme/update/'.$aboutme->id_about) }}" >
                {!! csrf_field() !!}
              <div class="form-group">
                <label>complate name</label>
                <input class="form-control" name='complate_name' placeholder="Enter ..." type="text" value="{{ $aboutme->complate_name }}">
              </div>
              <div class="form-group">
                <label>date birth</label>
                <input class="form-control" name='date_birth' placeholder="Enter ..." type="text" value="{{ $aboutme->date_birth }}">
              </div>
              <div class="form-group">
                <label>nationality</label>
                <input class="form-control" name='nationality' placeholder="Enter ..." type="text" value="{{ $aboutme->nationality }}">
              </div>
              <div class="form-group">
                <label>email</label>
                <input class="form-control" name='email' placeholder="Enter ..." type="text" value="{{ $aboutme->email }}">
              </div>
              <div class="form-group">
                <label>phone number</label>
                <input class="form-control" name='number_phone' placeholder="Enter ..." type="text" value="{{ $aboutme->number_phone }}">
              </div>

              <div class="form-group">
                <img src="{{ url($aboutme->pic) }}" style="width:150px;height:200px; border:solid 1px;">
              </div>
              <div class="form-group">
                <input id="exampleInputFile" name="pic" type="file">
              </div>

              <div class="form-group">
                <label>about me</label>
                <textarea id="editor1" name="aboutme" rows="10" cols="80">
                  {{ $aboutme->aboutme }}
                </textarea>
              </div>
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

<script type="text/javascript">
setTimeout(function() {
  var divs = document.getElementsByClassName("faded");
  $(divs).fadeIn(2000);
  setTimeout(function()
    { $(divs).fadeOut(3000)},
  9000);
},900);
</script>



@stop
