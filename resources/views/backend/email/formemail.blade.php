@extends('backend.vbase')
@section('title')
  <h1>
   Email
    <small>it all email</small>
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
  @if(session('send'))
      <div class="alert alert-danger alert-dismissible faded" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-info"></i> {{session('send')}}
      </div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-body">

            <form method="POST" enctype="multipart/form-data"  action="{{ url('email/send') }}" >
                {!! csrf_field() !!}
              <div class="form-group">
                <label>To</label>
                <input class="form-control" name='mail_to' placeholder="Enter ..." type="text">
              </div>
              <div class="form-group">
                <label>Subject</label>
                <input class="form-control" name='mail_subject' placeholder="Enter ..." type="text" >
              </div>
              <div class="form-group">
                <label>Email</label>
                  <textarea id="editor1" name="message" rows="10" cols="80"></textarea>
              </div>


            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
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
