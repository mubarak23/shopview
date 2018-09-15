@extends('layouts.admin')

@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Admin</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body p-0">
                        <div class="p-3 pb-0">
                            <div class="float-right">
                                <i class="mdi mdi-book-open text-primary widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0"><b>WELCOME</b></h5>
                            <h5 class="mt-2">Admin Name</h5>
                            <!-- <h6 class="mt-2">Last Login: 20/10/2018 </h6> -->
                            <h5 class="mt-2"><a>Total Number of User</a> <font color="green"><b>₦</b></font></h5>
                            <!-- <h3 class="mt-2">Default Currency: <font color="green"><b>₦</b></font></h3> -->
                        </div>
                        <div id="sparkline1"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <!-- end col-->

            <div class="col-xl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body p-0">
                        <div class="p-3 pb-0">
                            <div class="float-right">
                                <i class="mdi mdi-information text-danger widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0"><b>CURRENT ACTIVE PLANS</b></h5>
                            <h3 class="mt-2">Number of Wallet</h3>
                            <!-- <h6 class="mt-2"><a href="#">VIEW BENEFICIARIES</a></h6> -->
                        </div>
                        <div id="sparkline4"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->
        @include("includes.response")
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ribbon-box">
                        <div class="ribbon ribbon-dark">Wallets</div>
                        <p class="mb-0">Recent Wallets</p>
                        <div class="table-responsive">
                            <table class="table mt-4 table-centered">
                                <thead>
                                <tr>
                                    <th>Wallet Ref</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Balance</th>
                                    <th>Created</th>
                                    <th class="text-right">Action</th>
                                </tr></thead>
                                <tbody>
                                
                                <tr>
                                    <td>#12</td>
                                    <td>business</td>
                                    <td>
                                        description
                                    </td>
                                    <td>
                                          Amount
                                        </td>
                                        
                                        <td>123
                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="" ><i class="mdi mdi-pencil mr-1 text-muted"></i>Generate Voucher</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                </tr>
            <div class="modal fade" id="generate_voucher" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myCenterModalLabel">Generate Voucher Code</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="voucher">
                                    <form method="POST" action="" aria-label="{{ __('Gnerate Voucher') }}">
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" class="form-control" value="">
                                            <input type="hidden" name="wallet_id" class="form-control" value ="">

                                            <input type="hidden" name="vendor_id" class="form-control" value="">
                                            <input type="hidden" name="lock_code" class="form-control" value ="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Amount</label>
                                            <input type="text" name="amount" class="form-control" placeholder="Amount to Credit">
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Generate Voucher Code</button>
                                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->
        </div>
        
        <!-- end row -->

        
    </div> <!-- end container -->
</div>



 
  @endsection()