@extends('layouts.master')
@section('title')
    Data Kritik & Saran
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Feedback
        @endslot
        @slot('li_2')
            Data Kritik & Saran
        @endslot
        @slot('title')
            Data Kritik & Saran
        @endslot
    @endcomponent

    <section class="content">
        <div class="box box-success">

            <div class="box-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <form action="{{ route('feedback.index') }}">
                            <div class="input-group input-group-sm hidden-xs" style="width: 200px;">
                                <input type="text" name="search" class="form-control pull-right"
                                    placeholder="Cari ulasan..." value="{{ request('search') }}">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('feedback.printAll') }}" target="_blank"
                            class="btn btn-social btn-sm btn-primary">
                            <i class="fa fa-print"></i> Cetak Daftar
                        </a>
                    </div>


                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 40px;">No.</th>
                            <th>Customer</th>
                            <th>Produk</th>
                            <th>Tipe</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                            <th class="text-center" style="width: 80px">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($feedback as $item)
                            <tr>
                                <td class="text-center">{{ $feedback->firstItem() + $loop->index }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->produk->nama_produk }}</td>
                                <td><span class="badge bg-gray">{{ ucfirst($item->tipe) }}</span></td>
                                <td>{{ Str::limit($item->pesan, 40) }}</td>
                                <td>{{ $item->created_at->locale('id')->diffForHumans() }}</td>

                                <td class="text-center">
                                    <a href="{{ route('feedback.show', $item->id) }}"
                                        class="btn btn-default btn-sm text-blue">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    Belum ada data kritik & saran.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
            <!-- /.box-body -->

            <div class="box-footer clearfix">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Menampilkan
                        {{ $feedback->firstItem() }}
                        hingga
                        {{ $feedback->lastItem() }}
                        dari
                        {{ $feedback->total() }} entri
                    </div>

                    <div class="col-md-6">
                        <div class="pull-right">
                            {{ $feedback->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
