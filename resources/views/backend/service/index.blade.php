@extends('backend.vbase')
@section('title')
  <h1>
    SERVICE
    <small>it all service</small>
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
              <th>Service</th>
              <th>Status</th>

              <th colspan="2" style="width:20px;">Actions</th>
          </tr>
          </thead>
          <tbody>
             @foreach ($service as $srvc)
               <?php if ($srvc->status == 1){
                 $class = 'info';
                 $text  = 'aktif';
                 $post  = 2;
               }else if(($srvc->status == 2)){
                 $class = 'danger';
                 $text  = 'non aktif';
                 $post  = 1;
                }?>


                    <tr>
                        <td>{{ $srvc->service }}</td>
                        <td style="width:20px" ><a href="{{ url('service/status/'.$srvc->id_service.'/'.$post)}}" class="btn btn-mini btn-{{ $class }} no-border">{{ $text }}</a></td>

                        <td style="width:20px" ><a href="{{ url('service/show/'.$srvc->id_service)}}" class="btn btn-mini btn-primary no-border">Read</a></td>
                        <td style="width:20px" ><a href="{{ url('service/edit/'.$srvc->id_service)}}" class="btn btn-mini btn-warning no-border">Update</a></td>

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
