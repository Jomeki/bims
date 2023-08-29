
@extends('layouts.pages')
@section('pagetitle') Analytics Dashboard @endsection
@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="main-content">
    <main>
        <div class="page-header">
            <div>
                <h1>Analytics Dashboard</h1>
                <small>Monitor key metrics</small>
            </div>

            <div class="header-actions">
                <button>
                    <span class="las la-file-export"></span>
                    Export
                </button>
                <button>
                    <span class="las la-tools"></span>
                    More Options
                </button>
            </div>
        </div>
        <!-- Cards -->
        <div class="cards">
            <div class="card-single">
                <div class="card-flex">
                    <div class="card-info">
                        <div class="card-head">
                            <span>Purchases</span>
                            <small>Total number of direct purchases</small>
                        </div>

                        <h2>10,000</h2><small>2% Less Purchaces</small>
                    </div>
                    <div class="card-chart danger"><span class="las la-money-bill"></span></div>
                </div>
            </div>

            <div class="card-single">
                <div class="card-flex">
                    <div class="card-info">
                        <div class="card-head">
                            <span>Orders</span>
                            <small>Number of orders</small>
                        </div>

                        <h2>10,000</h2><small>2% Less Orders</small>
                    </div>
                    <div class="card-chart success"><span class="las la-shopping-cart"></span></div>
                </div>
            </div>


            <div class="card-single">
                <div class="card-flex">
                    <div class="card-info">
                        <div class="card-head">
                            <span>Products</span>
                            <small>Number of products in stock</small>
                        </div>

                        <h2>46,239</h2><small>2% Less Products</small>
                    </div>
                    <div class="card-chart yellow"><span class="las la-warehouse"></span></div>
                </div>
            </div>
        </div>

        <div class="jobs-grid">
            <div class="analytics-card">
                <div class="analytics-head">
                    <h3>Purchase analytics</h3>
                    <span class="las la-ellipsis-h"></span>
                </div>

                <div class="analytics-chart">
                    <div class="chart-circle">
                        <h1>+74%</h1>
                    </div>

                    <div class="analytics-note">
                        <small>Note: Purchase rate increase</small>
                    </div>
                </div>

                <div class="analytics-btn">
                    <button>Generate Report</button>
                </div>
            </div>
            <div class="analytics-card">
                <div class="analytics-head">
                    <h3>Customer Demographics analytics</h3>
                    <span class="las la-ellipsis-h"></span>
                </div>

                <div class="analytics-chart">
                    <div class="world">
                        <img src="{{asset('assets/img/world.png')}}" alt="worldmap" srcset="" width="80%">
                    </div>
                </div>
            </div>
            <div class="analytics-card">
                <div class="analytics-head">
                    <h3>Actions Needed</h3>
                    <span class="las la-ellipsis-h"></span>
                </div>

                <div class="analytics-chart">
                    <div class="chart-circle">
                        <h1>74%</h1>
                    </div>

                    <div class="analytics-note">
                        <small>Note: Current sprint requires stakeholders</small>
                    </div>
                </div>

                <div class="analytics-btn">
                    <button>Generate Report</button>
                </div>
            </div>

            <div class="jobs">
                <div class="job-title">
                    <h2>Orders</h2>
                    <div class="job-more">
                        <a href="{{route('orders')}}">
                            <small>See all orders</small>
                            <span class="las la-arrow-right"></span>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                            <table class="" style="width: 100%;">
                                <tbody>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>Iphone 14</div></td>
                                    <td><div>100</div></td>
                                    <td><div>Arusha, Tanzania</div></td>
                                    <td><div>10/02/23</div></td>
                                    <td><div class="order-status complete"><button>Complete</button></div></td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>Samsung S20</div></td>
                                    <td><div>Electronics</div></td>
                                    <td><div>Moshi, Tanzania</div></td>
                                    <td><div>30/07/23</div></td>
                                    <td><div class="order-status pending"><button>Pending</button></div></td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>Iphone 6</div></td>
                                    <td><div>Electronics</div></td>
                                    <td><div>Kigoma, Tanzania</div></td>
                                    <td><div>12/02/23</div></td>
                                    <td><div class="order-status complete"><button>Complete</button></div></td>
                                </tr>
                                <tr>
                                    <td><div><span class="indicator"></span></div></td>
                                    <td><div>John Doe</div></td>
                                    <td><div>HP Omen</div></td>
                                    <td><div>Electronics</div></td>
                                    <td><div>Mbeya, Tanzania</div></td>
                                    <td><div>21/02/23</div></td>
                                    <td><div class="order-status complete"><button>Complete</button></div></td>
                                </tr>
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
