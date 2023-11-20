@extends('admin.admin_master')

@section('title','Users List')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">       
      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          <div class="col-12">

            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Users List</h3>
                <a href="{{ route('user.create') }}" style="float: right" class="btn btn-rounded btn-success mb-5">Add New User</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    @if($allData->count() > 0)
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">N°</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Code</th>
                                <th width="25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($allData as $key => $user)
                          <tr>
                              <td> {{ $key+1 }} </td>
                              <td> {{ $user->role }} </td>
                              <td> {{ $user->name }} </td>
                              <td> {{ $user->email }} </td>
                              <td> {{ $user->code }} </td>
                              <td>
                                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                  <a href="{{ route('users.delete', $user->id) }}" id="delete" class="btn btn-danger">Delete</a>
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