@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Show Author</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>{{$author->first_name}}</td>
                            <td>{{$author->last_name}}</td>
                            <td>{{$author->age}}</td>
                            <td>{{$author->created_at}}</td>
                            <td>{{$author->updated_at}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{route('author.edit',$author->last_name)}}">Update</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('author.destroy',$author->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
