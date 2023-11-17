@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
  <div class="container-full">      
    <!-- Main content -->
    
    <section class="content">

      <!-- Basic Forms -->
       <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title"> Edit User </h3>
         <a href="{{ route('user.view') }}" style="float: right" class="btn btn-rounded btn-secondary mb-5">Back User List</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
         <div class="col">


           <form action="{{ route('users.update', $editData->id) }}" method="POST">
            @csrf
             <div class="row">
             <div class="col-12">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <h5>Update User Role <span class="text-danger">*</span></h5>
                    <div class="controls">
                      <select name="usertype" id="usertype" required="" class="form-control">
                        <option value="" selected="" disabled="">Select Role</option>
                        <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected" : "") }} >Admin</option>
                        <option value="User" {{ ($editData->usertype == "User" ? "selected" : "") }} >User</option>
                        <option value="Writer" {{ ($editData->usertype == "Writer" ? "selected" : "") }} >Writer</option>
                      </select>
                    </div>
                  </div>	
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <h5>Update User Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                      <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}" > </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <h5>Update User Email <span class="text-danger">*</span></h5>
                    <div class="controls">
                      <input type="email" name="email" class="form-control" required="" value="{{ $editData->email }}" > </div>
                  </div>
                </div>
              </div>          

             <div class="text-xs-right">
                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update User">
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

@endsection