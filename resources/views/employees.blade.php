@extends('layouts.pages')
@section('pagetitle') Employees page @endsection
@section('content')
    <div class="main-content">
        <main>
            <div class="page-header">
                <div>
                    <h1>Employees</h1>
                    <small>Manage and Monitor Employees</small>
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

            <div class="employees-form my-5">
                <div class="card">
                    <div class="card-header">Add new Employee</div>
                    <div class="card-body">
                        <form action="" class="row g-3">
                            <div class="form-floating mb-3 col-6">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Employee Name">
                                <label for="floatingInput">Employee name</label>
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Employees position</label>
                            </div>

                            <div class="form-floating mb-3 col-6">
                                <input type="tel" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Phone number</label>
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="email" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">E-mail</label>
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="date" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Hire date</label>
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="email" class="form-control" id="floatingPassword" placeholder="Category">
                                <label for="floatingPassword">Salary</label>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add Employee</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header mylist">
                    <div>Employees list</div>

                    <div class="searchbar">
                        <form class="d-flex form-floating-mb3">
                            <input class="form-control me-2"  type="search" placeholder="Search employees" aria-label="Search">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </form>
                        <button type="button" class="btn btn-light mx-2" title="Filter"><div style="display: flex;align-items: center"><span class="las la-filter"></span></div></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="jobs mytable">
                        <div class="table-responsive">
                            <table class="table" style="width: 100%;">
                                <thead>
                                <td>S/O</td>
                                <td>Employee name</td>
                                <td>E-mail</td>
                                <td>Phone number</td>
                                <td>Position</td>
                                <td>Hire Date</td>
                                <td>Salary</td>
                                <td>Actions</td>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
                                    <td>
                                        <div class="action-btn">
                                            <a class="link-success" title="Edit"><span class="las la-edit"></span></a>
                                            <a class="link-danger" title="Delete"><span class="las la-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>john@gmail.com</div></td>
                                    <td><div>+255700000000</div></td>
                                    <td><div>Janitor</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div>2,000,000</div></td>
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
                    </div></div>
            </div>
        </main>
    </div>
@endsection
