@extends('layout.master')


@section('content')
  <!-- Add your dashboard content here -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card card-stats" style="height: 200px; width: 250px;">
            <a href="/submit-paper">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                  <i class="fas fa-file-alt"></i>
                </div>
                <p class="card-category"  style="font-size: 26px;">Submit Paper</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-stats" style="height: 200px; width: 250px;">
            <a href="/user">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="fas fa-users"></i>
                </div>
                <p class="card-category" style="font-size: 26px;">User Management</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-stats" style="height: 200px; width: 250px;">
            <a href="/user-profile">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="fas fa-user"></i>
                </div>
                <p class="card-category" style="font-size: 26px;">User Profile</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-stats" style="height: 200px; width: 250px;">
            <a href="/roles">
              <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                  <i class="fas fa-user-lock"></i>
                </div>
                <p class="card-category" style="font-size: 26px;">Roles</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <img src="{{Asset("image/landscapeimg1.jpg")}}" alt="Landscape Image" style="width: 100%; height: 50%;"> -->
@endsection

@section('scripts')


@endsection





