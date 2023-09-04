@extends('layouts.pages')
@section('pagetitle') Employees page @endsection
@section('content')
    <div class="main-content">
        <main>
            <div class="modal fade" id="filteroptions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Filter options</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="row g-3">
                                <div class="form-floating mb-3 col-12">
                                    <input type="date" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Filter by hire date</label>
                                </div>
                                <div class="form-floating mb-3 col-12">
                                    <select name="" id="floatingPassword" class="form-control">
                                        @foreach($positions = \App\Models\Employee::select('eposition')->distinct()->get() as $position)
                                            <option value="{{$position['eposition']}}">{{$position['eposition']}}</option>@endforeach
                                    </select>
                                    <label for="floatingInput">Filter by position</label>
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
                        <form action="/addemployee" method="POST" class="row g-3">
                            <div class="form-floating mb-3 col-6">
                                <input type="text" name="Employeename" class="form-control @error('Employeename') is-invalid @enderror" id="floatingInput " placeholder="Employee Name">
                                <label for="floatingInput">Employee name</label>
                                @error('Employeename')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input name="Employeeposition" type="text" class="form-control @error('Employeeposition') is-invalid @enderror" id="floatingPassword" placeholder="Employeeposition">
                                <label for="floatingPassword">Employees position</label>
                                @error('Employeeposition')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3 col-6">
                                <input type="tel" name="Phonenumber" class="form-control @error('Phonenumber') is-invalid @enderror" id="floatingPassword" placeholder="Phonenumber">
                                <label for="floatingPassword">Phone number</label>
                                @error('Phonenumber')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="email" name="Email" class="form-control @error('Email') is-invalid @enderror" id="floatingPassword" placeholder="Email">
                                <label for="floatingPassword">E-mail</label>
                                @error('Email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="date" name="Hiredate" class="form-control @error('Hiredate') is-invalid @enderror" id="floatingPassword" placeholder="Hiredate">
                                <label for="floatingPassword">Hire date</label>
                                @error('Hiredate')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <input type="email" name="Salary" class="form-control @error('Salary') is-invalid @enderror" id="floatingPassword" placeholder="Salary">
                                <label for="floatingPassword">Salary</label>
                                @error('Salary')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add Employee</button>
                            </div>
                            @csrf
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
                        <button type="button" data-bs-toggle="modal" data-bs-target="#filteroptions" class="btn btn-light mx-2" title="Filter"><div style="display: flex;align-items: center"><span class="las la-filter"></span></div></button>
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
                                @foreach($employees as $employee)
                                    <tr>
                                        <td><div><span class="indicator"></span></div></td>
                                        <td><div>{{$employee['ename']}}</div></td>
                                        <td><div>{{$employee['eemail']}}</div></td>
                                        <td><div>+{{$employee['ephone']}}</div></td>
                                        <td><div>{{$employee['eposition']}}</div></td>
                                        <td><div>{{$employee['hdate']}}</div></td>
                                        <td><div>{{$employee['salary']}}</div></td>
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
                        <div class="table-desc my-2">{{\App\Models\Employee::all()->count()}} entries</div>
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
                    </div></div>
            </div>
        </main>
    </div>
@endsection
