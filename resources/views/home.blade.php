@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Syarbini are logged in!') }}
                    <br>

                    <a href="{{ route('mahasiswa.index') }}">
                        <div class="btn btn-info">
                            <p> Ke Data Mahasiswa</p>
                        </div>
                        <div class="btn btn-primary">
                            data dosen
                        </div>
                    </a>
                    <div>
                        <p> text area</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
