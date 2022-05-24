@extends('layouts.admin.mainLayout')
@section('content')
<div class="app-content content">
    <div class="content-header row">
        <div class="content-header-light col-12">
            <div class="row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h3 class="content-header-title">Basic Forms</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                                </li>
                                <li class="breadcrumb-item active">Basic Forms
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
                                <h4 class="card-title" id="basic-layout-form-center">Event Registration</h4>
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
                                        <p>This example shows a way to center your form in the card. Here we have used <code>col-md-6 ml-auto</code> classes to center the form in a full width card. User can always change those classes according to width and offset requirements. This example also uses form action buttons in the center bottom position of the card.</p>
                                    </div>

                                    <form class="form">
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-6">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label for="eventInput1">Full Name</label>
                                                        <input type="text" id="eventInput1" class="form-control" placeholder="name" name="fullname">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="eventInput2">Title</label>
                                                        <input type="text" id="eventInput2" class="form-control" placeholder="title" name="title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="eventInput3">Company</label>
                                                        <input type="text" id="eventInput3" class="form-control" placeholder="company" name="company">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="eventInput4">Email</label>
                                                        <input type="email" id="eventInput4" class="form-control" placeholder="email" name="email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="eventInput5">Contact Number</label>
                                                        <input type="tel" id="eventInput5" class="form-control" name="contact" placeholder="contact number">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Existing Customer</label>
                                                        <div class="input-group">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="yes">
                                                                <label class="custom-control-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="no">
                                                                <label class="custom-control-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions text-center">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
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
