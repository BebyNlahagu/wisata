@extends('layouts.master')
@section('name')
<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="intro-wrap">
                    <h1 class="mb-5"><span class="d-block">Let's Enjoy Your</span> Trip In <span class="typed-words"></span></h1>
                    <div class="row">
                        <div class="col-12">
                            <form class="form" method="GET" action="{{ route('wisata.cari') }}">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                        <label for="aktivitas">Destinasi</label>
                                        <select name="aktivitas" id="aktivitas" class="form-control custom-select">
                                            <option value="">Destination</option>
                                            <option value="laut">Laut</option>
                                            <option value="gunung">Gunung</option>
                                            <option value="pantai">Pantai</option>
                                            <option value="kota">Kota</option>
                                            <option value="hutan">Hutan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                                        <label for="">Budget</label>
                                        <select name="budget" id="budget" class="form-control custom-select">
                                            <option value="">-pilih Budget-</option>
                                            <option value="<500">Under 500k</option>
                                            <option value="500-1jt">500k - 1jt</option>
                                            <option value="1jt>">Above 1jt</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                                        <label for="">Durasi Hari</label>
                                        <input type="number" name="durasi" class="form-control" id="durasi" min="1" max="10">
                                    </div>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                        <button type="submit" class="btn btn-primary btn-block">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="slides">
                    <img src="{{ asset('master/images/hero-slider-1.jpg')}}" alt="Image" class="img-fluid active">
                    <img src="{{ asset('master/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('master/images/hero-slider-3.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('master/images/hero-slider-4.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('master/images/hero-slider-5.jpg')}}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

