@extends('backend.layouts.app')

@section('page-title')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            {{-- <li class="breadcrumb-item active">nama halaman aktif</li> --}}
        </ol>
    </nav>
</div>
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">
    {{-- <h1>Dashboard</h1> --}}
    </div>
</section>
@endsection
