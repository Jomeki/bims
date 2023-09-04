@extends('layouts.pages')
@section('pagetitle') Orders Page @endsection
@section('content')
    <div class="modal fade" id="filteroptions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Filter options</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="row g-3">
                        <div class="form-floating mb-3 col-6">
                            <input type="date" class="form-control" id="floatingInput">
                            <label for="floatingInput">From</label>
                        </div>
                        <div class="form-floating mb-3 col-6">
                            <input type="date" class="form-control" id="floatingInput">
                            <label for="floatingInput">To</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="categories" class="form-control" id="floatingInput">
                                @foreach($employees = \App\Models\Employee::all() as $employee)
                                    <option value="{{$employee['id']}}">{{$employee['ename']}}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Filter by Employee</label>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Apply filter</button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <main>
            <div class="page-header">
                <div>
                    <h1>Orders</h1>
                    <small>Manage and Monitor Business orders</small>
                </div>

{{--                <div class="header-actions">--}}
{{--                    <button>--}}
{{--                        <span class="las la-file-export"></span>--}}
{{--                        Export--}}
{{--                    </button>--}}
{{--                    <button>--}}
{{--                        <span class="las la-tools"></span>--}}
{{--                        More Options--}}
{{--                    </button>--}}
{{--                </div>--}}
            </div>

            <div class="orders-form my-5">
                <div class="card">
                    <div class="card-header">Add new Order</div>
                    <div class="card-body">
                        <form action="/addorder" method="POST" class="row g-3">
                            <div class="form-floating mb-3 col-6">
                                <input autocomplete="off" type="text" name="Customername" class="form-control @error('Customername') is-invalid @enderror" id="floatingInput" placeholder="Customer Name">
                                <label for="floatingInput">Customer name</label>
                                @error('Customername')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input autocomplete="off" type="tel" name="Phonenumber" class="form-control @error('Phonenumber') is-invalid @enderror" id="floatingInput" placeholder="Customer Name">
                                <label for="floatingInput">Phone number</label>
                                @error('Phonenumber')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col-6">
                                <select name="Deliveryloc" id="floatingPassword" class="form-control">
                                    @foreach($regions as $region)
                                        <option value="{{$region['id']}}">{{$region['name']}},{{$region['country']}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingInput">Delivery location</label>
                                @error('Deliveryloc')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col-6">
{{--                                <input type="text" class="form-control" id="floatingPassword" placeholder="Category">--}}
                                <select name="Productname" id="floatingPassword" class="form-control @error('Productname') is-invalid @enderror">
                                   @foreach($products as $product)
                                        <option value="{{$product['id']}}">{{$product['pname']}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingPassword">Product name</label>
                                @error('Productname')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col-6">
                                <input name="Productquantity" type="number" class="form-control @error('Productquantity') is-invalid @enderror" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Product Quantity</label>
                                @error('Productquantity')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input name="Productprice" type="number" class="form-control @error('Productprice') is-invalid @enderror" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Product Price</label>
                                @error('Productprice')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col-6">
                                <input type="date" name="Deliverydate" class="form-control @error('Deliverydate') is-invalid @enderror" id="floatingPassword" placeholder="">
                                <label for="floatingPassword">Expected delivery date</label>
                                @error('Deliverydate')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add order</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header mylist">
                    <div>Order list</div>
                    <div class="searchbar">
                        <form class="d-flex form-floating-mb3">
                            <input class="form-control me-2 "  type="search" placeholder="Search orders" aria-label="Search">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </form>
                        <button type="button" class="btn btn-light mx-2" title="Filter" data-bs-toggle="modal" data-bs-target="#filteroptions"><div style="display: flex;align-items: center"><span class="las la-filter"></span></div></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="jobs mytable">
                        <div class="table-responsive">
                            <table class="table" style="width: 100%;">
                                <thead>
                                <td>S/O</td>
                                <td>Customer name</td>
                                <td>Product name</td>
                                <td>Product Quantity</td>
                                <td>Delivery Location</td>
                                <td>Order Date</td>
                                <td>Order status</td>
                                <td>Actions</td>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td><div><span class="indicator"></span></div></td>
                                        <td><div>{{$order['customername']}}</div></td>
                                        <td><div>{{\App\Models\Product::select('pname')->where('id',$order['pname'])->value('pname')}}</div></td>
                                        <td><div>{{$order['pquantity']}}</div></td>
                                        <td><div>{{\App\Models\Region::select('name','country')->where('id',$order['deliverylocation'])->value('name','country')}}</div></td>
                                        <td><div>{{$order['edeliverydate']}}</div></td>
                                        <td><div class="order-status @if($order['orderstat']==0) pending @elseif($order['orderstat']==1) complete @endif"><button>@if($order['orderstat']==0) Pending @elseif($order['orderstat']==1) Complete @endif</button></div></td>
                                        <td>
                                            <div class="action-btn">
                                                <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                                <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                                <a class="link-primary" title="Print record"><span class="las la-print"></span></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="table-desc my-2">{{\App\Models\Order::all()->count()}} entries</div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div></div>
            </div>
        </main>
    </div>
@endsection
