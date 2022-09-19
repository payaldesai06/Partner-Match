@extends('layouts.app')

@section('title')
@if(@Auth::user()->role_id == 1) Users @else Suggestions @endif
@endsection

@section('css_before')
@endsection

@section('css_after')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endsection

@section('js_after')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="{{ asset('js/pages/user.js') }}"></script>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                {{-- <div class="page-pretitle">
                    Manage
                </div> --}}
                <h2 class="page-title">
                    @if(@Auth::user()->role_id == 1) Users @else Suggestions @endif
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body" id="UserTableList">
    <div class="container-fluid">
        @include('errors.formerror')
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div @if(@Auth::user()->role_id == 1) id="users" @else id="suggestions" @endif>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
