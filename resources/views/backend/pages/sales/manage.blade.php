@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
                <!-- Form inputs start -->
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">All Sales Ads Product</h4>
                            <div class="data-tables">
                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>#</th>
                                            <th>Type</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Product</td>
                                            <td>Mobile</td>
                                            <td>img</td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form inputs end -->
               
    </div>
</div>
@endsection