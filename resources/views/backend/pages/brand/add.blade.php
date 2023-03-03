@extends('backend.includes.master')

@section('product-add')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Product</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">ADD Product</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->

<!--Form-->
<div class="row">
    <div class="col-xl-9 mx-auto">

        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">ADD New Product</h5>
                    </div>
                    <hr/>
            <form action="{{route('insertproduct')}}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="Name" class="col-sm-3 col-form-label">Enter Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your product Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Price" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                        <input type="price" class="form-control" id="price" name="price" placeholder="Enter the Price">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Quantity" class="col-sm-3 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                        <input type="quantity" class="form-control" id="Quantity" name="quantity" placeholder="Enter Quantity">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-3 col-form-label">status</label>
                    <div class="col-sm-9">
                        <select name="status" id="status" class="form-control">
                        <option value="">--Select An Option</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-info px-5">ADD New</button>
                    </div>
                </div>

            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


