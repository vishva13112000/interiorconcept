@extends('layouts.admin.mainLayout')
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/vendors/css/pickers/miniColors/jquery.minicolors.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/vendors/css/pickers/spectrum/spectrum.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/css/plugins/pickers/colorpicker/colorpicker.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/css/plugins/forms/validation/form-validation.css">
@stop
@section('content')
<div class="app-content content">
    <div class="content-header row">
        <div class="content-header-light col-12">
            <div class="row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h3 class="content-header-title">Colors</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('pcolors.index') }}">Colors</a>
                                </li>
                                <li class="breadcrumb-item active">Add Color
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- <div class="content-header-right col-md-3 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item" href="component-progress.html"> Progress</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form-center">Add Color</h4>
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
                                <div class="card-body">

                                    <div class="card-text">
                                        <!-- <p>This example shows a way to center your form in the card. Here we have used <code>col-md-6 ml-auto</code> classes to center the form in a full width card. User can always change those classes according to width and offset requirements. This example also uses form action buttons in the center bottom position of the card.</p> -->
                                    </div>

                                    <form class="form" action="{{ route('pcolors.store') }}" method="post">
                                      {{ csrf_field() }}
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-6">
                                                <div class="form-body">
                                                  <div class="form-group @if ($errors->has('name')) error @endif">
                                                      <label for="eventRegInput1">Color</label>
                                                      <input type="text" id="hue-demo" class="form-control minicolors" data-control="hue" placeholder="select color" name="name" value="{{ old('name') }}">
                                                      <!-- <input type="text" id="eventRegInput1" class="form-control" placeholder="color" name="name" value="{{ old('name') }}"> -->
                                                      @if ($errors->has('name'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('name') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions text-center">
                                          <a href="{{ route('pcolors.index') }}" class="btn btn-warning mr-1">
                                              <i class="ft-x"></i> Cancel
                                          </a>
                                          <button type="submit" class="btn btn-primary">
                                              <i class="la la-check-square-o"></i> Save
                                          </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
  <script src="{{ asset('asset/admin') }}/app-assets/vendors/js/pickers/miniColors/jquery.minicolors.min.js"></script>
  <script src="{{ asset('asset/admin') }}/app-assets/vendors/js/pickers/spectrum/spectrum.js"></script>
  <script src="{{ asset('asset/admin') }}/app-assets/js/scripts/pickers/colorpicker/picker-color.js"></script>
@endsection
