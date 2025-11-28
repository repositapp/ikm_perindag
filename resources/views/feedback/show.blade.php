@extends('layouts.master')

@section('title')
    Detail Saran & Kritik
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Feedback
        @endslot
        @slot('li_2')
            Detail Feedback
        @endslot
        @slot('title')
            Detail Feedback
        @endslot
    @endcomponent

    <style>
        .feedback-card {
            background: #ffffff;
            border-radius: 8px;
            padding: 25px;
            border: 1px solid #e6e6e6;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05);
        }

        .avatar-circle {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #00a65a;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 22px;
        }

        .info-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 4px;
        }

        .info-box {
            padding: 12px 18px;
            border-radius: 6px;
            background: #fafafa;
            border: 1px solid #f0f0f0;
        }

        .badge-type {
            padding: 6px 10px;
            font-size: 12px;
            border-radius: 4px;
        }

        .badge-saran {
            background: #00a65a;
            color: white;
        }

        .badge-kritik {
            background: #dd4b39;
            color: white;
        }
    </style>

    <section class="content">

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Detail Saran & Kritik</h3>
                <div class="box-tools pull-right">
                    <a href="{{ route('feedback.index') }}" class="btn btn-sm btn-default">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>

                    <a href="{{ route('feedback.printDetail', $feedback->id) }}" target="_blank"
                        class="btn btn-sm btn-primary">
                        <i class="fa fa-print"></i> Cetak
                    </a>
                </div>
            </div>

            <div class="box-body">

                <div class="feedback-card">

                    {{-- Header User --}}
                    <div class="media mb-4" style="margin-bottom: 20px;">
                        <div class="media-left">
                            <div class="avatar-circle">
                                {{ strtoupper(substr($feedback->user->name, 0, 1)) }}
                            </div>
                        </div>
                        <div class="media-body" style="padding-left: 15px;">
                            <h4 class="mt-0" style="margin-top: 5px; margin-bottom: 2px;">
                                {{ $feedback->user->name }}
                            </h4>
                            <small class="text-muted">{{ $feedback->user->email }}</small>
                            <br>
                            <small class="text-muted">
                                {{ $feedback->created_at->locale('id')->translatedFormat('d F Y, H:i') }}
                                — <i>{{ $feedback->created_at->locale('id')->diffForHumans() }}</i>
                            </small>
                        </div>
                    </div>

                    <hr>

                    <div class="row">

                        {{-- Produk --}}
                        <div class="col-md-6">
                            <p class="info-label">Produk</p>
                            <div class="info-box">
                                <strong>{{ $feedback->produk->nama_produk }}</strong>
                                <br>
                                <small class="text-muted">
                                    Kategori: {{ $feedback->produk->kategori->name }}
                                </small>
                            </div>
                        </div>

                        {{-- Tipe --}}
                        <div class="col-md-6">
                            <p class="info-label">Tipe Feedback</p>
                            <div class="info-box">
                                @if ($feedback->tipe == 'saran')
                                    <span class="badge-type badge-saran">Saran</span>
                                @else
                                    <span class="badge-type badge-kritik">Kritik</span>
                                @endif
                            </div>
                        </div>

                    </div>

                    {{-- Isi Pesan --}}
                    <div style="margin-top: 25px;">
                        <p class="info-label">Isi Feedback</p>
                        <div class="info-box" style="line-height: 1.7;">
                            {{ $feedback->pesan }}
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
