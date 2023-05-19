@extends('admin.layouts.bootstrap.app', ['title' => 'Add New Car'])

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <div class="card w-100 bg-white">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Add New Car</h5>
                        </div>
                    </div>
                    <form action="{{ route('car.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Type</label>
                            <select class="form-control" name="car_type_id">
                                <option value="null">Choose Type</option>
                                @foreach ($carTypes as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Car Name</label> <small id="emailHelp"
                                class="form-text text-muted">*max. 100 Charactes</small>
                            <input type="text" class="form-control mt-2" name="name" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Brand</label> <small id="emailHelp"
                                class="form-text text-muted">*max. 100 Charactes</small>
                            <input type="text" class="form-control mt-2" name="brand" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('brand') }}">
                            @error('brand')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">License Plate</label> <small id="emailHelp"
                                class="form-text text-muted">*max. 30 Charactes</small>
                            <input type="text" class="form-control mt-2" name="license" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('license') }}">
                            @error('license')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Color</label> <small id="emailHelp"
                                class="form-text text-muted">*max. 30 Charactes</small>
                            <input type="text" class="form-control mt-2" name="color" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('color') }}">
                            @error('color')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control mt-2" name="price" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('price') }}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Car Photo</label> <small id="emailHelp"
                                class="form-text text-muted">*max. 30 Charactes</small>
                            <input type="file" class="form-control mt-2" name="photo" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('photo') }}">
                            @error('photo')
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
