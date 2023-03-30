@extends('layouts.index')
@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Schedules</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Schedules</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Home
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

    @include('layouts.partials.button-add-schedule-modal')

    {{-- Content START --}}
    <div class="row">
        <div class="col-md-5">
            <div class="card-style calendar-card mb-30">
                <div id="calendar-mini"></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card-style-3 mb-30">
                <div class="card-content">
                    <h2 class="mb-3">Schedules</h2>
                    <ul>
                        <li class="mb-3"><b>23 April 2023 : </b> Hari Ulang Tahun</li>
                        <li class="mb-3"><b>25 November 2023 : </b> Hari Raya Idul Adha</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Content END --}}
@endsection
