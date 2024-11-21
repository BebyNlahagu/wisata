@extends('layouts.master')
@section('name')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Rating</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-items-center mb-5 mb-lg-0">
                    <form class="contact-form" data-aos="fade-up" data-aos-delay="200"
                        action="{{ route('submit.rating') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lname">Nama</label>
                                    <input type="text" name="nama"
                                        class="form-control" id="lname">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="fname">Destinasi</label>
                                    <select type="text" class="form-control" name="destinasi_id">
                                        <option value=""></option>
                                        @foreach ($destinasi as $d)
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lname">Rating</label>
                                    <input type="number" name="rating" min="1" max="5" required
                                        class="form-control" id="lname">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Beri Rating</button>
                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nama Destinasi</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rating as $d)
                                <tr>
                                    <td>{{ $d->nama }}</td>
                                    <td>{{ $d->destinasi->nama }}</td>
                                    <td>{{ $d->rating }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
