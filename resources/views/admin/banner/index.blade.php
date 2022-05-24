@extends('layouts.admin.mainLayout')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/vendors/css/extensions/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/vendors/css/tables/datatable/datatables.min.css">
@stop
@section('content')
<div class="app-content content">
    <div class="content-header row">
        <div class="content-header-light col-12">
            <div class="row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h3 class="content-header-title">Banners</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">List Banners
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-3 col-12">
                  <div class="btn-group float-md-right">
                    <a href="{{ route('banners.create') }}" class="btn btn-float btn-primary btn-sm waves-effect waves-light" type="button">
                        <i class="material-icons">add</i>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Banners</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    @if ($message = Session::get('success'))
                                       <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Well done!</strong> {{ $message }}.
                                        </div>
                                    @endif
                                    <!-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                  <th>No</th>
                                                  <th>Image</th>
                                                  <th>Products</th>
                                                  <!-- <th>Status</th> -->
                                                  <th>Created At</th>
                                                  <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @php
                                                $nCount = 1;
                                               @endphp
                                              @foreach ($banners as $banner)
                                                <tr>
                                                  <td>{{ $nCount }}</td>
{{--                                                  <td><img src="../uploads/banner/{{ $banner->image }}" height="100px" width="100px" /></td>--}}
                                                  <td><img src="{{url('/uploads/banner/'.$banner->image)}}" height="100px" width="100px" /></td>
                                                  <td>{{ $banner->product }}</td>
                                                  <!-- <td>{{ ($banner->status == 1) ? 'Active' : 'Inactive' }}</td> -->
                                                  <td>{{ $banner->created_at }}</td>
                                                  <td>
                                                      <a href="{{ route('banners.show', ['id' => $banner->id]) }}" class="{{ ($banner->status == 1) ? 'success' : 'danger' }} edit mr-1"><span class="material-icons icons-small">{{ ($banner->status == 1) ? 'visibility' : 'visibility_off' }}</span></a>
                                                      <a href="{{ route('banners.edit', ['id' => $banner->id]) }}" class="primary edit mr-1"><span class="material-icons icons-small">edit</span></a>
                                                      <a data-url="{{ route('banner_delete', ['id' => $banner->id]) }}" class="danger delete mr-1 confirm-color" href="javascript:void(0);"><span class="material-icons icons-small">delete_forever</span></a>

                                                      <!-- <a href="{{ route('banners.show', ['id' => $banner->id]) }}" class="{{ ($banner->status == 1) ? 'success' : 'danger' }} edit mr-1"><i class="la {{ ($banner->status == 1) ? 'la-eye' : 'la-eye-slash' }}"></i></a>
                                                      <a href="{{ route('banners.edit', ['id' => $banner->id]) }}" class="primary edit mr-1"><i class="la la-pencil"></i></a>
                                                      <a data-url="{{ route('banner_delete', ['id' => $banner->id]) }}" class="danger delete mr-1 confirm-color" href="javascript:void(0);"><i class="la la-trash-o"></i></a> -->
                                                      <!-- <span class="dropdown">
                                                          <a id="btnSearchDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i class="la la-ellipsis-v"></i></a>
                                                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                              <a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
                                                                  Edit</a>
                                                              <a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
                                                              <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                                              <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                                              <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                                              <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                                          </span>
                                                      </span> -->
                                                  </td>
                                                    @php
                                                    $nCount++;
                                                   @endphp
                                                </tr>
                                              @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                  <th>No</th>
                                                  <th>Image</th>
                                                  <th>Products</th>
                                                  <!-- <th>Status</th> -->
                                                  <th>Created At</th>
                                                  <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
  <script src="{{ asset('asset/admin') }}/app-assets/vendors/js/extensions/sweetalert.min.js"></script>
  <script src="{{ asset('asset/admin') }}/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
  <script src="{{ asset('asset/admin') }}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
  <script src="{{ asset('asset/admin') }}/app-assets/js/scripts/tables/datatables/datatable-basic.js"></script>
@endsection
