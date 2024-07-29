@extends('backend.layouts.app')

@section('page-title')
<div class="pagetitle">
    <h1>Category Benefits</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('benefits.index') }}">Category Benefits</a></li>
            {{-- <li class="breadcrumb-item active">nama halaman aktif</li> --}}
        </ol>
    </nav>
</div>
@endsection

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title">Category</h5> --}}

                    <div class="mb-3 mt-3">
                        <a href="{{ route('benefits.create') }}" class="btn btn-primary">Add Category</a>
                    </div>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>URL</th>
                                <th>Description</th>
                                <th>Benefits</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($benefits as $benefit)
                        <tr>
                            <td>{{ $benefit->title }}</td>
                            <td>{{ $benefit->category->name }}</td>
                            <td>{{ $benefit->url }}</td>
                            <td>{{ $benefit->description }}</td>
                            <td>{{ $benefit->benefits }}</td>
                            <td>
                                <a href="{{ route('benefits.edit', $benefit->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('benefits.destroy', $benefit->id) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
