@extends('main.main')


@section('main-section')
                <!-- Begin Page Content -->
                <div class="container-fluid ">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-white">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Current Day)(Today) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 bg-dark-mode">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Today)</div>
                                            <div class="h5 mb-0 font-weight-bold text-white">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Weekly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2  bg-dark-mode">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Weekly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-white">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2 bg-dark-mode">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-white">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12 shadow h-100 py-2">
                            <div class="card shadow mb-4 bg-dark-mode">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-dark-mode">
                                    <h6 class="m-0 font-weight-bold text-primary">Make Sale</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="col">
                                                <select class="form-control bg-dark-mode">
                                                    <option>Select User</option>
                                                    <option value="1">[1] Ali</option>
                                                    <option value="2">[2] Murtaza</option>
                                                    <option value="3">[3] Mushtaq</option>
                                                    <option value="4">[4] Baber</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-control bg-dark-mode">
                                                    <option>Select Service</option>
                                                    <option value="1">[1] Cutting</option>
                                                    <option value="2">[2] Shave</option>
                                                    <option value="3">[3] Face Massage</option>
                                                    <option value="4">[4] Facial</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control bg-dark-mode" placeholder="Enter Amount">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col">
                                                <input type="text" class="form-control bg-dark-mode" placeholder="Enter Client Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <input type="text" class="form-control bg-dark-mode" placeholder="Enter Client Mobile Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <input type="submit" class="btn btn-primary float-right" value="Save">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->



@endsection
