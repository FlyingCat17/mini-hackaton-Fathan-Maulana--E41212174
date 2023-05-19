@extends('admin.layouts.bootstrap.app', ['title' => 'Post Category'])

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <div class="card w-100 bg-white">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Post Category</h5>
                        </div>
                    </div>

                    <x-bootstrap.alert />
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('post-category.create') }}" class="btn btn-success">Add New Category</a>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width: 10%">No</th>
                                <th scope="col" style="width: 70%">Category Name</th>
                                <th scope="col" style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category => $value)
                                <tr>
                                <th scope="row">{{ $categories->firstItem() + $category }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        <a href="{{ route('post-category.edit', $value->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('post-category.destroy', $value->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="d-flex"></div>
                    {{ $categories->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
