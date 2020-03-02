@extends('layouts.app')
@section('content')
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
              <a style='margin-right:5px' class='pull-right btn btn-primary btn-sm' href="">
                    Add User
                </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                         <td>{{$item->name}}</td>
                         <td>{{$item->email}}</td>
                         <td>
                            @if($item->roles->name == 'Admin')<span class="label label-primary">Admin</span>@endif
                            @if($item->roles->name == 'Driver')<span class="label label-success">Driver</span>@endif
                         </td>
                         <td class="text-center">
                        <a href="" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit_modal{{$item->id}}"> <i class="fa fa-edit"></i> Edit</a>
					 <a href="" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_modal{{$item->id}}"><i class="fa fa-trash"></i> Delete</a>
						</td>
                    </tr>
                @endforeach
               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
     </section>
@endsection