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
                            <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                            
                        </ol>
                    </div>
                    <h4 class="page-title">Welcome Admin {{ Auth::user()->username }}</h4>
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
                            <h5 class="mt-2">{{ Auth::user()->username }}</h5>
                            <!-- <h6 class="mt-2">Last Login: 20/10/2018 </h6> -->
                            <h5 class="mt-2"><a>Total Number of Business</a>
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
            <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body ribbon-box">
                        <div class="ribbon ribbon-dark">All Business</div>
                        <p class="mb-0">Recent Business</p>
                        <div class="table-responsive">
                            <table class="table mt-4 table-centered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Business Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Created</th>
                                    <th class="text-right">Action</th>
                                </tr></thead>
                                <tbody>
                                @forelse($all_businesses as $all_business)
                                <tr>
                                    <td>#{{ $all_business->id }}</td>
                                    <td>{{ $all_business->business_name }}</td>
                                    <td>
                                        {{ $all_business->business_address }}
                                    </td>
                                    <td>
                                        {{ $all_business->email }}
                                    </td>                                   
                                        <td>
                                            {{ $all_business->created_at->format('d-m-Y') }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <div>
                                                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#all_business_{{$all_business->id}}" ><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Business</a>
                                                </div>

                                                <div>
                                                    <a href="{{ url('/admin/delete_business', $all_business->id)}}" class="btn btn-success"><i class="mdi mdi-pencil mr-1 text-muted"></i>Delete</a>
                                                </div>
                                                
                                                
                                            </div>
                                        </td>
                                </tr>
            <div class="modal fade" id="all_business_{{$all_business->id}}" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myCenterModalLabel">Edit Business</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="edit_business">
                                    <form method="post" action="{{ url('/admin/edit_business', $all_business->id) }}"" aria-label="{{ __('edit_business') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" class="form-control" value="{{$all_business->user_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Business Name</label>
                                             <input type="text" name="business_name" class="form-control" value="{{$all_business->business_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Business Address</label>
                                            <input type="text" name="business_address" class="form-control" value ="{{ $all_business->business_address}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" name="email" value="{{ $all_business->email }}" class="form-control" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="text" name="phone_number" value="{{ $all_business->phone_number }}" class="form-control" placeholder="email">
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Edit Business</button>
                                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <p class="mb-0">Recent Users</p>
                        <div class="table-responsive">
                            <table class="table mt-4 table-centered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr></thead>
                                <tbody>
                                @forelse($all_users as $user)
                                <tr>
                                    <td>#{{ $user->id }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                                                       
                                        <td>
                                            {{ $user->created_at->format('d-m-Y') }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <div>
                                                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#all_user_{{$user->id}}" ><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit User</a>
                                                </div>

                                                <div>
                                                    <a href="{{ url('/admin/delete_user', $user->id)}}" class="btn btn-success"><i class="mdi mdi-pencil mr-1 text-muted"></i>Delete</a>
                                                </div>
                                                
                                                
                                            </div>
                                        </td>
                                </tr>
            <div class="modal fade" id="all_user_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myCenterModalLabel">Edit User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="edit_user">
                                    <form method="post" action="{{ url('/admin/edit_user', $user->id) }}"" aria-label="{{ __('edit_user') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" class="form-control" value="{{$user->user_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Username</label>
                                             <input type="text" name="username" class="form-control" value="{{$user->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Address</label>
                                            <input type="text" name="business_address" class="form-control" value ="{{ $user->email}}">
                                        </div>
                                        <div>
                                        <label for="exampleInputEmail1">User Role </label>
                                        <select name="start_day" class="form-control">
                                        <option value="3">{{ $user->user_role }}</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                         </select>
                                        </div>
                                        
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Edit Business</button>
                                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                @empty
                                @endforelse
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



@include('includes.admin_footer') 
@endsection