@extends('layouts.master')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Detail Data Tanda Vital</h4>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <strong>ID Pemeriksaan Awal:</strong>
                        <p>{{ $vitalSign->assessment_id }}</p>
                    </div>
                    <div class="mb-4">
                        <strong>Nama Domba:</strong>
                        <p>{{ $vitalSign->assessment->sheep->sheep_name }}</p>
                    </div>
                    <div class="mb-4">
                        <strong>Suhu:</strong>
                        <p>{{ $vitalSign->temperature }} °C</p>
                    </div>
                    <div class="mb-4">
                        <strong>Denyut Jantung:</strong>
                        <p>{{ $vitalSign->heart_rate }} bpm</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <strong>Laju Pernapasan:</strong>
                        <p>{{ $vitalSign->respiratory_rate }} per menit</p>
                    </div>
                    <div class="mb-4">
                        <strong>Berat:</strong>
                        <p>{{ $vitalSign->weight }} kg</p>
                    </div>
                    <div class="mb-4">
                        <strong>Kondisi Status:</strong>
                        <p>{{ $vitalSign->status_condition }}</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center gap-3">
                        <a href="/vital-sign" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection