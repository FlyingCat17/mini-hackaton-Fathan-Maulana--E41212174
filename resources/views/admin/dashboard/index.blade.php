@extends('admin.layouts.bootstrap.app', ['title' => 'Dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <div class="card w-100 bg-white">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Hello, {{ Auth::user()->name }}</h5>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection