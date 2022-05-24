@extends('layouts.admin.mainLayout')
@section('styles')

@stop
@section('content')
<div class="app-content content">
    <div class="content-header row">
        <div class="content-header-light col-12">
            <div class="row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h3 class="content-header-title">API</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">List API
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-3 col-12">
                  <div class="btn-group float-md-right">
                    <!-- <a href="#" class="btn btn-float btn-primary btn-sm waves-effect waves-light" type="button">
                        <i class="material-icons">add</i>
                    </a> -->
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="content-body">
          <!-- CSS Classes -->
          <section id="css-classes" class="card">
              <div class="card-header">
                  <h4 class="card-title">List API</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="card-text">
                          <p>This table contains all classes related to the light layout. This is a custom layout classes for
                              light layout page requirements.</p>
                          <p>All these options can be set via following classes:</p>
                          <div class="table-responsive">
                              <table class="table table-hover">
                                      <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <th scope="row">Get Categories</th>
                                          <td>{url}/api/category</td>
                                      </tr>
                                      <tr>
                                          <th scope="row">Get Products With Pagination</th>
                                          <td>{url}/api/products/{id} <code>here, {id} = categoryId pass in url</code><code>Ex. {url}/api/products/1?page=1</code></td>
                                      </tr>
                                      <tr>
                                          <th scope="row">Get Product details</th>
                                          <td>{url}/api/product/detail/{id} <code>here, {id} = productId pass in url</code></td>
                                      </tr>
                                      <tr>
                                          <th scope="row">Get Banners With Pagination</th>
                                          <td>{url}/api/banners<code>Ex. {url}/api/banners?page=2</code></td>
                                      </tr>
                                      <tr>
                                          <th scope="row">Get Banner details</th>
                                          <td>{url}/api/banner/detail/{id} <code>here, {id} = bannerId pass in url</code></td>
                                      </tr>
                                      <tr>
                                          <th scope="row">Search</th>
                                          <td>{url}/api/search?q=product <code>here, {q} = pass search value in q param</code></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--/ CSS Classes -->
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
