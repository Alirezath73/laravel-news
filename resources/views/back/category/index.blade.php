@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Show Category</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Parent</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                @if($category->parent_id == null)
                                    Parent
                                @elseif($category->parent_id !=null)
                                    @php
                                        $id=$category->parent_id;
                                        $categories=\App\Category::all();
                                        $nameParentCat=$categories->where('id',$id)->pluck('name')->first();
                                    @endphp
                                    {{$nameParentCat}}
                                @endif
                            </td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary"
                                   href="{{route('category.edit',$category->id)}}">Update</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('category.destroy',$category->id)}}">
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
