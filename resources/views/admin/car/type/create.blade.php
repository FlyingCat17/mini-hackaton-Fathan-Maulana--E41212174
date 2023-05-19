@extends('admin.layouts.bootstrap.app', ['title' => 'Car Types'])

    @section('content')<div class="row">
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <div class="card w-100 bg-white">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Add New Car Types</h5>
                        </div>
                    </div>
                    <form action="{{ route('car.type.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Types Name</label>  <small id="emailHelp" class="form-text text-muted">*max. 35 Charactes</small>
                            <input type="text" class="form-control mt-2" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="form-group mt-3">
                            <div class="d-flex justify-content-end align-items-center  gap-2">
                                <a href="{{ route('post-category.index') }}" class="btn btn-outline-danger">Cancel</a>
                                <button class="btn btn-primary" type="submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection