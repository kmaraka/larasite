@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">      
      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          <div class="col-12">

            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" >
                  <h3 class="widget-user-username"> User Name: {{ $currentuser->name }} </h3>
                  <a href="{{ route('profile.create') }}" style="float: right" class="btn btn-rounded btn-success mb-2">Edit Profile</a>
                  <h6 class="widget-user-desc"> User Type: {{ $currentuser->usertype }} </h6>
                  <h6 class="widget-user-desc"> User Email: {{ $currentuser->email }} </h6>
                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="{{ (!empty($currentuser->image))? url('upload/users_images/'.$currentuser->image):url('upload/no_image.jpg') }}" alt="User Avatar">
                </div>
                <div class="box-footer ">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Mobile Number</h5>
                        <span class="description-text">{{ $currentuser->mobile }}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">Address</h5>
                        <span class="description-text">{{ $currentuser->address }}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Gender</h5>
                        <span class="description-text">{{ $currentuser->gender }}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <hr>
                  <div class="widget-user-content " >
                    <h3> Bio: </h3>
                    <p>
                      {{ $currentuser->bio }}
                    </p>
                  </div>
                </div>
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