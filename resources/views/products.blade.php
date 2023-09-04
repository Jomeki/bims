@extends('layouts.pages')
@section('pagetitle') Products page @endsection
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
                                @foreach($categories as $category)
                                    <option value="{{$category['id']}}">{{$category['cname']}}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Filter by Category</label>
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
                    <h1>Products</h1>
                    <small>Manage and Monitor Business products</small>
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

            <div class="products-form my-5">
                <div class="card">
                    <div class="card-header">Add new Products</div>
                    <div class="card-body">
                        <form action="/addproducts" method="POST" class="row g-3">
                            <div class="form-floating mb-3 col-6">
                                <input type="text" name="Productname" class="form-control @error('Productname') is-invalid @enderror" id="floatingInput" placeholder="Product Name">
                                <label for="floatingInput">Product name</label>
                                @error('Productname')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <select name="ProductCategory" id="floatingPassword" class="form-control @error('ProductCategory') is-invalid @enderror">
                                    @foreach($categories as $category)
                                    <option value="{{$category['id']}}">{{$category['cname']}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingPassword">Products category</label>
                                @error('ProductCategory')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class=" mb-3 col-12">
                                <textarea class="form-control @error('ProductDescription') is-invalid @enderror" name="ProductDescription" id="productdesc" rows="4" placeholder="Product description"></textarea>
                                @error('ProductDescription')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col-12">
                                <input type="number" name="ProductQuantity" class="form-control @error('ProductQuantity') is-invalid @enderror" id="floatingPassword" placeholder="Quantity">
                                <label for="floatingPassword">Quantity</label>

                                @error('ProductQuantity')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="number" name="BuyingPrice" class="form-control @error('BuyingPrice') is-invalid @enderror" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Buying Price</label>
                                @error('BuyingPrice')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="number" name="SellingPrice" class="form-control @error('SellingPrice') is-invalid @enderror" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Selling Price</label>
                                @error('SellingPrice')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header mylist">
                    <div>Products list</div>

                    <div class="searchbar">
                        <form class="d-flex form-floating-mb3">
                            <input class="form-control me-2"  type="search" placeholder="Search products" aria-label="Search">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </form>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#filteroptions" class="btn btn-light mx-2" title="Filter"><div style="display: flex;align-items: center"><span class="las la-filter"></span></div></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="jobs mytable">
                        <div class="table-responsive">
                            <table class="table" style="width: 100%;">
                                <thead>
                                <td>S/O</td>
                                <td>Product name</td>
                                <td>Product Category</td>
                                <td>Product quantity</td>
                                <td>Product Price</td>
                                <td>Actions</td>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td><div><span class="indicator"></span></div></td>
                                        <td><div>{{$product['pname']}}</div></td>
                                        <td><div>{{\App\Models\Category::select('cname')->where('id',$product['pcid'])->value('cname')}}</div></td>
                                        <td><div>{{$product['pquantity']}}</div></td>
                                        <td><div>{{$product['psprice']}}</div></td>
                                        <td>
                                            <div class="action-btn">
                                                <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                                <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="table-desc my-2">{{\App\Models\Product::all()->count()}} entries</div>
                        <nav>
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

                    </div>

                </div>
            </div>


        </main>
    </div>
@endsection
