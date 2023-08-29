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
                                <option value="">Option 1</option>
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
                        <form action="" class="row g-3">
                            <div class="form-floating mb-3 col-6">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Product Name">
                                <label for="floatingInput">Product name</label>
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Products category</label>
                            </div>

                            <div class=" mb-3 col-12">
                                <textarea class="form-control" id="productdesc" rows="4" placeholder="Product description"></textarea>
                            </div>

                            <div class="form-floating mb-3 col-6">
                                <input type="number" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Quantity</label>
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="number" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Price</label>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
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
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>Iphone 14</div></td>
                                    <td><div>Electronics</div></td>
                                    <td><div>100</div></td>
                                    <td><div>1,400,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>Iphone 14</div></td>
                                    <td><div>Electronics</div></td>
                                    <td><div>100</div></td>
                                    <td><div>1,400,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>Iphone 14</div></td>
                                    <td><div>Electronics</div></td>
                                    <td><div>100</div></td>
                                    <td><div>1,400,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>Iphone 14</div></td>
                                    <td><div>Electronics</div></td>
                                    <td><div>100</div></td>
                                    <td><div>1,400,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="table-desc my-2">10 entries</div>
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
                    </div>
                </div>
            </div>


        </main>
    </div>
@endsection
