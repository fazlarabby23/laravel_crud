@extends('backend.includes.master')

@section('show-product')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Product</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->

<!--Table-->
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Product Name</th>
                        <th>Descrtiption</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody >

                    <?php $index = 1; ?>
                    <?php foreach ($products as $data) : ?>
                        <tr>
                            <td>{{$index++}}  </td>
                            <td>{{$data->name}}  </td>
                            <td>{{$data->description}}  </td>
                            <td>{{$data->price }} </td>
                            <td>{{$data->quantity}}  </td>
                            <td>{{$data->status}}  </td>
                            <td>
        <a href="" class="btn btn-info btn-sm">Edit</a>
        <a href="{{ route('deleteproduct', $data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (empty($products)) : ?>
                        <tr>
                            <td colspan="7">No products found.</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Sl No.</th>
                        <th>Product Name</th>
                        <th>Descrtiption</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>


            </table>
        </div>
    </div>
</div>
@endsection
