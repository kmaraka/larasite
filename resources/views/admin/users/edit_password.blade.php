@extends('admin.admin_master')

@section('title','Change Password')

@section('admin')

<div class="content-wrapper">
  <div class="container-full">      
    <!-- Main content -->
    
    <section class="content">

      <!-- Basic Forms -->
       <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title"> Change Password </h3>
         <a href="{{ route('profile.view') }}" style="float: right" class="btn btn-rounded btn-secondary mb-5">Back To Profile</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
         <div class="col">


           <form action="{{ route('password.update') }}" method="POST">
            @csrf
             <div class="row">
             <div class="col-12">

             
                  <div class="form-group">
                    <h5> Current Password <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input id="current_password" type="password" name="oldpassword" class="form-control" > 
                        @error('oldpassword')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                  </div>                
                
                  <div class="form-group">
                    <h5> New Password <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input id="password" type="password" name="password" class="form-control"   >
                        @error('password')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                  </div>
                
                  <div class="form-group">
                    <h5> Confirm Password <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"   > 
                        @error('password_confirmation')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                  </div>
                       

             <div class="text-xs-right">
                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Upload Password">
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