@extends('layouts.master')
@section('name')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Rekomendasi wisata</h1>
                        <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="untree_co-section">
    <div class="container">
        @if ($destinations->isEmpty())
            <p class="text-center">Tidak Ada Rekomendasi Wisata</p>
        @else
            <div class="row justify-content-center">
                @foreach ($destinations as $des)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex m-4">
                        <div class="media-1 text-center">
                            <a href="#" class="d-block mb-3">
                                <img src="{{ asset('master/images/hero-slider-1.jpg') }}" alt="Image" class="img-fluid">
                            </a>
                            <span class="d-flex align-items-center loc mb-2">
                                <span class="icon-room mr-3"></span>
                                <span>{{ $des->nama }}</span>
                            </span>
                            <div class="d-flex align-items-center justify-content-center">
                                <div>
                                    <h3><a href="#">{{ $des->aktivitas }}</a></h3>
                                    <div class="price ml-auto">
                                        <span>Rp.{{ number_format($des->harga) }}.-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
