@extends('backend.layouts.app')
@section('content')
<section class="section">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Benefits</h5>

                <form action="{{ route('benefits.update', $benefit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="category_id">Category ID:</label>
                        <input type="text" class="form-control" name="category_id" value="{{ $benefit->category_id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" value="{{ $benefit->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="url">URL:</label>
                        <input type="text" class="form-control" name="url" value="{{ $benefit->url }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" required>{{ $benefit->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="benefits">Benefits:</label>
                        <textarea class="form-control" name="benefits" required>{{ $benefit->benefits }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
