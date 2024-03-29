@extends('layout.main')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Employee Position Data</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Employee Position Data</h6>
        </nav>
      </div>
</nav>
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Employee Position Data!</h1>
            <p class="text-lead text-white">Please enter the employee's position data</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="mb-10 mx-auto">
          <div class="card z-index-0">
            <div class="row px-xl-5 px-sm-4 px-3">
              <div class="col-3 px-1">         
              </div>
              
            </div>
            <div class="card-body">
              <form role="form">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" class="form-control" id="jabatan" name="jabatan" required>
                                <option value="">Choose a position</option>
                                <option value="Chief Executif Officer">Chief Executif Officer</option>
                                <option value="Chief Information Officer">Manager</option>
                                <option value="Chief Marketing Officer">Programer</option>
                                <option value="Chief Financial Officer">Executive</option>
                            </select>
                        </div>
                <div class="text-center">
                  <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Confirm</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection