@extends('backend.includes.master')

@section('category-add')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">ADD Category</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->

<!--Table-->
<div class="card">
    <div class="card-body">

        <div class="col">
            <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                <div class="font-22 text-primary">	<i class="lni lni-circle-plus"></i>
                </div>
                <div class="ms-2">	<span>circle-plus</span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Category Name</th>
                        <th>Descrtiption</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody >
                    <?php $sl=1 ;?>
                    @foreach($categories as $category)



                    <tr>
                        <td>{{$sl++}}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->price }}</td>
                        <td>{{ $category->quantity }}</td>
                        <td>
                            @if($category->status == 1)
                                <a href="{{ route('activeproduct',$category->id) }}" class="btn btn-success btn-sm">Active</a>
                            @else
                                <a href="{{ route('inactiveproduct',$category->id) }}" class="btn btn-info btn-sm">InActive</a>
                            @endif

                        </td>
                        <td>
    <a href="{{route('editproduct',$category->id)}}" class="btn btn-warning btn-sm">Edit</a>
    <button data-bs-toggle="modal" data-bs-target="#delete{{$category->id}}" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>

                    <!--modal-->
                <div class="modal fade" id="delete{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Are you sure want to Delete?</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<a href="{{ route('deleteproduct',$category->id) }}" type="button" class="btn btn-primary">Delete</a>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    @endforeach


                </tbody>
                <tfoot>
                    <tr>
                        <th>Sl No.</th>
                        <th>Category Name</th>
                        <th>Descrtiption</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>


            </table>
        </div>
    </div>
</div>





@endsection
