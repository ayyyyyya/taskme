@extends('layouts.index')
@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Master Brainybot</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Master Brainybot</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Chat
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

    {{-- <div class="card-style mb-30">
        <p class="mb-5">
            {{ $response == '' ? 'Hello, Selamat datang di Brainybot' : $response }}
        </p>
        <form action="" method="POST" style="margin-bottom: -25px">
            @csrf
            <div class="input-style-2">
                <textarea name="chat" placeholder="Enter your question..." rows="5"></textarea>
                <span class="icon"> <button type="submit" class="btn btn-primary mt-2"><i
                            class="lni lni-pointer"></i></button></span>
            </div>

        </form>
    </div> --}}

    <div class="card-style mb-30">
        <p class="mb-5">
            {{ session('response') ?: 'Halo, Selamat datang di Brainybot' }}
        </p>
        <form action="/chat" method="POST" style="margin-bottom: -25px">
            @csrf
            <div class="input-style-2">
                <textarea name="input" placeholder="Enter your question..." rows="5"></textarea>
                <span class="icon"> <button type="submit" class="btn btn-primary mt-2"><i
                            class="lni lni-pointer"></i></button></span>
            </div>
        </form>
    </div>
    <!-- end card -->
@endsection
