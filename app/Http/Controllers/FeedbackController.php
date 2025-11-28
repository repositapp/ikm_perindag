<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProdukFeedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = ProdukFeedback::with(['user', 'produk']);

        $search = request('search');

        if ($search) {
            $feedback->when($search, function ($query, $search) {
                $query->where('pesan', 'like', '%' . $search . '%')
                    ->orWhere('tipe', 'like', '%' . $search . '%')

                    // Relasi ke user
                    ->orWhereHas('user', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%')
                            ->orWhere('email', 'like', '%' . $search . '%');
                    })

                    // Relasi ke produk
                    ->orWhereHas('produk', function ($q) use ($search) {
                        $q->where('nama_produk', 'like', '%' . $search . '%')
                            ->orWhere('brand', 'like', '%' . $search . '%')
                            ->orWhere('kode_produk', 'like', '%' . $search . '%');
                    });
            });
        }

        $feedback = $feedback->latest()->paginate(10)->appends(['search' => $search]);

        return view('feedback.index', compact('feedback', 'search'));
    }

    public function show($id)
    {
        $feedback = ProdukFeedback::with(['user', 'produk'])
            ->findOrFail($id);

        return view('feedback.show', compact('feedback'));
    }

    public function printAll()
    {
        $feedback = ProdukFeedback::with(['user', 'produk'])->latest()->get();

        return view('feedback.print-all', compact('feedback'));
    }

    public function printDetail($id)
    {
        $feedback = ProdukFeedback::with(['user', 'produk'])->findOrFail($id);

        return view('feedback.print-detail', compact('feedback'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|integer',
            'pesan' => 'required|min:5',
            'tipe' => 'nullable|string'
        ]);

        ProdukFeedback::create([
            'user_id' => auth()->id(),
            'produk_id' => $request->produk_id,
            'pesan' => $request->pesan,
            'tipe' => $request->tipe ?? 'saran'
        ]);

        return back()->with('success', 'Saran & kritik berhasil dikirim.');
    }
}
