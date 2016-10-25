@extends('backend.vbase')
@section('title')
  <h1>
    ABOUT US
    <small>it all about us</small>
  </h1>
@stop
@section('content')
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"></h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-bordered table-hover">
          <thead>
          <tr>
              <th>About Us</th>
              <th colspan="2" style="width:20px;">Actions</th>
          </tr>
          </thead>
          <tbody>
             @foreach ($aboutus as $about)
                    <tr>
                        <td>{{ $about->about_us }}</td>
                        <td style="width:20px" ><a href="{{route('about.show',$about->id_about)}}" class="btn btn-mini btn-primary no-border">Read</a></td>
                        <td style="width:20px" ><a href="{{route('about.edit',$about->id_about)}}" class="btn btn-mini btn-warning no-border">Update</a></td>
                        {{-- <td style="width:20px" >
                        {!! Form::open(['method' => 'DELETE', 'route'=>['about.destroy', $about->id_about]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn  btn-mini btn-danger no-border']) !!}
                        {!! Form::close() !!}
                        </td> --}}
                    </tr>
                @endforeach
        </tbody>
      </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
@stop
