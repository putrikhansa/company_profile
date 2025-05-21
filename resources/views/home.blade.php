@extends('layouts.admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-11">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner mt--4">
                <div class="row mt--4">
                    <div class="col-md-8">
                        <div class="card full-height">
                            <div class="card-body">
                                <div
                                    class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                    <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                        Selamat datang
                                        <div class="">
                                            <span
                                                class="text-primary fw-medium text-nowrap">{{ Auth::user()->name }}</span>.
                                        </div>
                                    </h3>
                                    <p class="mb-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nesciunt aut
                                        commodi laborum quasi beatae iste accusamus eligendi ipsa veritatis consectetur
                                        dolores officiis reiciendis ex, mollitia enim iure perferendis ea!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
