@extends('layouts.index')
@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Tasks</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Tasks</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Active
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    @include('layouts.partials.button-add-task-modal')


    <div class="row">
        <div class="col-md-4">
            <div class="card-style-3 mb-30">
                <div class="card-content">
                    <h4><a href="#0">Card Title here </a></h4>
                    <p>
                        With supporting text below as a natural lead-in to
                        additional content. consectetur adipiscing elit. Integer
                        posuere erat a ante. With supporting text below as a
                        natural lead-in to additional content. consectetur
                        adipiscing elit. Integer posuere erat a ante.
                    </p>
                    <a href="#0" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
