@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h3 class="text-center mb-4">Dashboard</h3>
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Test Dashboard</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area d-flex justify-content-center">
                            <canvas id="myChart" style="height: 300px; width:80%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection