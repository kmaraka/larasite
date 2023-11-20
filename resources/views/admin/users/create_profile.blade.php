@extends('admin.admin_master')

@section('title','Edit User Profile')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content-wrapper">
  <div class="container-full">      
    <!-- Main content -->
    
    <section class="content">

      <!-- Basic Forms -->
       <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title"> Edit User Profile</h3>
         <a href="{{ route('profile.view') }}" style="float: right" class="btn btn-rounded btn-secondary mb-5">Back Profile</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
         <div class="col">


           <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="row">
             <div class="col-12">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <h5>User Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                      <input type="text" name="name" class="form-control" required="" value="{{ $editcurrentuser->name }}" > </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <h5>User Email <span class="text-danger">*</span></h5>
                    <div class="controls">
                      <input type="email" name="email" class="form-control" required="" value="{{ $editcurrentuser->email }}" > </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <h5>User Mobile</h5>
                    <div class="controls">
                      <input type="text" name="mobile" class="form-control" value="{{ $editcurrentuser->mobile }}" > </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <h5>User Address </h5>
                    <div class="controls">
                      <input type="text" name="address" class="form-control" value="{{ $editcurrentuser->address }}" > </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <h5>User Bio</h5>
                        <div class="controls">
                            <textarea name="bio" id="bio" class="form-control" placeholder="Your Biographic text" aria-invalid="false">{{ $editcurrentuser->bio }} </textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <h5>Profile Image</h5>
                    <div class="controls">
                      <input type="file" name="image" class="form-control" id="image"> 
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <img id="showImage" src="{{ (!empty($currentuser->image))? url('upload/users_images/'.$currentuser->image):url('upload/no_image.jpg') }}" style="width: 100px; hight: 100px; border: 1px solid #000;" alt="User Avatar"> 
                    </div>
                  </div>

                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <h5>User Gender </h5>
                    <div class="controls">
                      <select name="gender" id="gender" class="form-control">
                        <option value="" selected="" disabled="">Select Gender</option>
                        <option value="Male" {{ ($editcurrentuser->gender == "Male" ? "selected" : "") }} >Male</option>
                        <option value="Female" {{ ($editcurrentuser->gender == "Female" ? "selected" : "") }} >Female</option>
                      </select>
                    </div>
                  </div>	
                </div>
              </div>

             <div class="text-xs-right">
                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update Profile">
             </div>
           </form>


 
         </div>
         <!-- /.col -->
         </div>
         <!-- /.row -->
       </div>
       <!-- /.box-body -->
       </div>
       <!-- /.box -->
 
     </section>


    <!-- /.content -->
  
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection