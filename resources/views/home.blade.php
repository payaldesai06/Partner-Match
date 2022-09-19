@extends('layouts.app')

@section('title')
Home
@endsection

@section('css_before')
@endsection

@section('css_after')
@endsection

@section('js_after')
{{-- <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script> --}}
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Dashboard
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
            </div>
        </div>
    </div>
</div>
{{-- <div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Records</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="h1 mb-3">75%</div>
                <div class="d-flex mb-2">
                  <div>Rate</div>
                  <div class="ms-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                      7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                    </span>
                  </div>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <span class="visually-hidden">75% Complete</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Revenue</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-baseline">
                  <div class="h1 mb-0 me-2">$4,300</div>
                  <div class="me-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                      8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                    </span>
                  </div>
                </div>
              </div>
              <div id="chart-revenue-bg" class="chart-sm"></div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">New clients</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-baseline">
                  <div class="h1 mb-3 me-2">6,782</div>
                  <div class="me-auto">
                    <span class="text-yellow d-inline-flex align-items-center lh-1">
                      0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    </span>
                  </div>
                </div>
                <div id="chart-new-clients" class="chart-sm"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Active users</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-baseline">
                  <div class="h1 mb-3 me-2">2,986</div>
                  <div class="me-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                      4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                    </span>
                  </div>
                </div>
                <div id="chart-active-users" class="chart-sm"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">New clients</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-baseline">
                  <div class="h1 mb-3 me-2">6,782</div>
                  <div class="me-auto">
                    <span class="text-yellow d-inline-flex align-items-center lh-1">
                      0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    </span>
                  </div>
                </div>
                <div id="chart-new-clients" class="chart-sm"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Active users</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-baseline">
                  <div class="h1 mb-3 me-2">2,986</div>
                  <div class="me-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                      4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                    </span>
                  </div>
                </div>
                <div id="chart-active-users" class="chart-sm"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">New clients</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-baseline">
                  <div class="h1 mb-3 me-2">6,782</div>
                  <div class="me-auto">
                    <span class="text-yellow d-inline-flex align-items-center lh-1">
                      0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    </span>
                  </div>
                </div>
                <div id="chart-new-clients" class="chart-sm"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Active users</div>
                  <div class="ms-auto lh-1">
                    <div class="dropdown">
                      <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-baseline">
                  <div class="h1 mb-3 me-2">2,986</div>
                  <div class="me-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                      4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                    </span>
                  </div>
                </div>
                <div id="chart-active-users" class="chart-sm"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div> --}}
@endsection