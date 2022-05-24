@extends('layouts.admin.mainLayout')
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/vendors/css/forms/selects/select2.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin') }}/app-assets/css/plugins/forms/validation/form-validation.css">
@stop
@section('content')
<div class="app-content content">
    <div class="content-header row">
        <div class="content-header-light col-12">
            <div class="row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h3 class="content-header-title">Products</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a>
                                </li>
                                <li class="breadcrumb-item active">Add Product
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
            <section id="basic-form-layouts" >
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form-center">Add Product</h4>
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

                                    <form class="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-6">
                                                <div class="form-body">
                                                    <div class="form-group @if ($errors->has('image')) error @endif">
                                                        <label>Images</label>
                                                        <label id="projectinput7" class="file center-block">
                                                            <input type="file" id="file" name="image[]" multiple>
                                                            <span class="file-custom"></span>
                                                        </label>
                                                        @if ($errors->has('image'))
                                                            <div class="help-block">
                                                                <ul role="alert">
                                                                    <li>{{ $errors->first('image') }}</li>
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>
                                                  <div class="form-group @if ($errors->has('category_id')) error @endif">
                                                      <label for="eventRegInput1">Category</label>
                                                      <select name="category_id[]" class="select2 form-control" multiple="multiple">
                                                        <optgroup label="select categories">
                                                           @foreach ($categories as $category)
                                                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                           @endforeach
                                                         </optgroup>
                                                      </select>
                                                      @if ($errors->has('category_id'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('category_id') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>
                                                  <div class="form-group @if ($errors->has('name')) error @endif">
                                                      <label for="eventRegInput1">Title</label>
                                                      <input type="text" id="uploadImageFileName" class="form-control" placeholder="title" name="name" value="{{ old('name') }}">
                                                      @if ($errors->has('name'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('name') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>
                                                  <div class="form-group @if ($errors->has('description')) error @endif">
                                                      <label for="eventRegInput1">Description</label>
                                                      <textarea id="eventInput3" rows="3" class="form-control" name="description" placeholder="description">{{ old('description') }}</textarea>
                                                      @if ($errors->has('description'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('description') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>
                                                  <div class="form-group @if ($errors->has('size')) error @endif">
                                                      <label for="eventRegInput1">Size</label>
                                                      <input type="text" id="eventRegInput1" class="form-control" placeholder="size" name="size" value="{{ old('size') }}">
                                                      @if ($errors->has('size'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('size') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>
                                                  <div class="form-group @if ($errors->has('color_id')) error @endif">
                                                      <fieldset class="form-group">
                                                        <label for="eventRegInput1">Select All</label> 
                                                        <label>
                                                        <input type="checkbox" value="0" class="form-control" id="select_all">  
                                                        </label>                                                        
                                                      </fieldset>
                                                      <label for="eventRegInput1">Color</label>
                                                      <fieldset class="form-group">
                                                        @foreach ($pcolors as $color)
                                                          <label>
                                                              <input type="checkbox" value="{{ $color->id }}" class="form-control" name="color_id[]">
                                                              <p style="background-color:{{ $color->name }}" class="img-thumbnail"></p>
                                                          </label>
                                                        @endforeach
                                                      </fieldset>
                                                      @if ($errors->has('color_id'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('color_id') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>
                                                  <div class="form-group @if ($errors->has('price')) error @endif">
                                                      <label for="eventRegInput1">Price</label>
                                                      <input type="number" id="eventRegInput1" class="form-control" placeholder="price" name="price" value="{{ old('price') }}">
                                                      @if ($errors->has('price'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('price') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>
                                                  <div class="form-group @if ($errors->has('tag_id')) error @endif">
                                                      <label for="eventRegInput1">Tag</label>
                                                      <select name="tag_id[]" class="select2 form-control" multiple="multiple">
                                                        <optgroup label="select tags">
                                                          @foreach ($tags as $tag)
                                                              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                          @endforeach
                                                        </optgroup>
                                                      </select>
                                                      @if ($errors->has('tag_id'))
                                                          <div class="help-block">
                                                              <ul role="alert">
                                                                  <li>{{ $errors->first('tag_id') }}</li>
                                                              </ul>
                                                          </div>
                                                      @endif
                                                  </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions text-center">
                                          <a href="{{ route('products.index') }}" class="btn btn-warning mr-1">
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="{{ asset('asset/admin') }}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
  <script src="{{ asset('asset/admin') }}/app-assets/js/scripts/forms/select/form-select2.js"></script>
  <script>
      $(document).ready(function(){
           $('#file').change(function(e){
              var fileName = e.target.files[0].name;
              $('#uploadImageFileName').val(fileName.split('.').slice(0, -1).join('.'));
           });
       });

      $(document).ready(function() {
        $('#select_all').click(function() {
          $('input[type="checkbox"]').prop('checked', this.checked);
        })
      });
  </script>
@endsection
