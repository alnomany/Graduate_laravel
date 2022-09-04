@extends('layouts.app')

@section('content')
<div class="container">
    {{--
    <div class="row justify-content-center">
        --}}
        <section id="dashboard-ecommerce">
            <div class="row match-height">
                <!-- Medal Card -->
                <div class="col-xl-8 col-md-8 col-8">
                    <div class="card card-congratulation-medal">
                        <div class="card-body">
                            <h5>welcome 🎉
                            </h5>
                            <p class="card-text font-small-3">chose one</p>
                            <a href="{{ route('create') }}">
                            <button type="button" class="btn btn-primary">Fixed</button>
                            </a>
                            <img src="../../../app-assets/images/illustration/badge.sv" class="congratulation-medal" alt="" />

                            <button type="button" class="btn btn-primary">Removable</button>
                            <img src="../../../app-assets/images/illustration/badge.sv" class="congratulation-medal" alt="" />
                            <a href="{{ route('fill') }}">
                            <button type="button" class="btn btn-primary">Fill Form</button>
                            </a>
                            <img src="../../../app-assets/images/illustration/badge.sv" class="congratulation-medal" alt="" />
                            <img src="../../../app-assets/images/illustration/badge.sv" class="congratulation-medal" alt="" />
                            <a href="{{ route('fill.export') }}">

                            <button type="button" class="btn btn-primary">Report</button>
                            <img src="../../../app-assets/images/illustration/badge.sv" class="congratulation-medal" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!--/ Medal Card -->


            </div>
        </section>
        {{--
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    --}}
    </div>
{{--  </div>--}}
@endsection
