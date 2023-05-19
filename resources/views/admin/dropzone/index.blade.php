@extends('admin.layouts.bootstrap.app', ['title' => 'Dropzone'])

@section('link_href')
    {{-- @vite(['node_modules/dropzone/dist/dropzone.min.css', 'node_modules/dropzone/dist/dropzone.min.js']) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <div class="card w-100 bg-white">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Dropzone</h5>
                        </div>
                    </div>
                    <form action="{{ route('dropzone.store') }}" method="post" name="file" files="true" enctype="multipart/form-data" class="dropzone" id="image-upload">
                        @csrf
                        <div>
                            <h3 class="text-center">
                                Upload Multiple image By Click On Box
                            </h3>
                        </div>
                    </form>
                    <button type="button" id="button" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/dropzone/main.js')
@endsection