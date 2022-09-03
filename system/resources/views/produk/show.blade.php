@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5"></div>
        </div>
        <div class="card">
            <div class="card-header">
                Detail Data Produk
            </div>
            <div class="card-body">
                <h3>{{ $produk->nama }}</h3>
                <hr>
                <p>
                    @include('produk.show.detail')
                </p>
                <p>
                    {!! nl2br($produk->deskripsi) !!}
                </p>

                <p>
                    <img src="{{ url('public', $produk->foto) }}" alt="">
                </p>
            </div>
        </div>
    </div>
@endsection
