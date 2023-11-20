@extends('admin.admin_master')

@section('title','Slider List')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">       
      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          <div class="col-12">

            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Slider List</h3>
                <a href="{{ route('sliders.create') }}" style="float: right" class="btn btn-rounded btn-success mb-5">Add New Slider</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    @if($sliders->count() > 0)
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">N°</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th width="25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($sliders as $key => $slider)
                          <tr>
                              <td> {{ $key+1 }} </td>
                              <td> <img src="{{ asset('/storage/'.$slider->image) }}" style="height: 40px; width: 70px;" alt=""> </td>
                              <td> {{ $slider->title }} </td>
                              <td> {{ $slider->description }} </td>
                              <td>
                                  <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-info">Edit</a>
                                  <a href="{{ route('sliders.destroy', $slider->id) }}" id="destroy" class="btn btn-danger">Delete</a>
                              </td>
                          </tr>                             
                          @endforeach                          
                        </tbody>
                        <tfoot>

                        </tfoot>
                      </table>
                    @else
                      <h3 class="text-center mt-5 mb-5">No Users Yet.</h3>
                    @endif
                  </div>
              </div>
              <!-- /.box-body -->
            </div>  

          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->
    
    </div>
</div>

@endsection