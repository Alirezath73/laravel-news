@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Show User</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>mobile</th>
                        <th>Email</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->first_name}}</td>
                            <td>{{$admin->last_name}}</td>
                            <td>{{$admin->mobile}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->created_at}}</td>
                            <td>{{$admin->updated_at}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary"
                                   href="{{route('admin.edit',$admin->id)}}">Update</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('admin.destroy',$admin->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('are you sure?')">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
    </div>
@endsection
