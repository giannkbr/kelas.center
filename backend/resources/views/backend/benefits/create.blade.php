@extends('backend.layouts.app')
@section('content')
<section class="section">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Benefits</h5>

                <form action="{{ route('benefits.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="input" class="col-sm-2 col-form-label">Category ID</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputSelect" name="category_id">
                                @foreach($categoryBenefits as $categoryBenefit)
                                <option value="{{ $categoryBenefit->id }}">{{ $categoryBenefit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input" class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="url">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input" class="col-sm-2 col-form-label">Benefits</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" cols="30" rows="10" name="benefits"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
