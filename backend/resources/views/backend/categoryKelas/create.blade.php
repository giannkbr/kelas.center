@extends('backend.layouts.app')
@section('content')
<section class="section">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Category</h5>

                <form action="{{ route('categoryKelas.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="name">
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
