<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Detail Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .card {
            border: 1px solid #555;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        h2,
        h3 {
            text-align: center;
            margin: 0;
        }

        .label {
            font-weight: bold;
            margin-top: 10px;
        }

        .value {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <h2>DETAIL SARAN & KRITIK</h2>
    <h3>{{ $feedback->produk->nama_produk }}</h3>
    <p style="text-align:center;">Dicetak pada {{ now()->locale('id')->translatedFormat('d F Y H:i') }}</p>

    <div class="card">
        <p class="label">Customer:</p>
        <p class="value">{{ $feedback->user->name }} ({{ $feedback->user->email }})</p>

        <p class="label">Produk:</p>
        <p class="value">{{ $feedback->produk->nama_produk }}</p>

        <p class="label">Kategori:</p>
        <p class="value">{{ $feedback->produk->kategori->name }}</p>

        <p class="label">Tipe Feedback:</p>
        <p class="value">{{ ucfirst($feedback->tipe) }}</p>

        <p class="label">Pesan:</p>
        <p class="value">{{ $feedback->pesan }}</p>

        <p class="label">Waktu:</p>
        <p class="value">{{ $feedback->created_at->locale('id')->translatedFormat('d F Y H:i') }}</p>
    </div>

    <script>
        window.onload = function() {
            const beforePrint = () => {};
            const afterPrint = () => {
                window.close(); // Tutup tab setelah selesai (jika cetak atau batal)
            };

            if (window.matchMedia) {
                const mediaQueryList = window.matchMedia('print');

                mediaQueryList.addListener(function(mql) {
                    if (!mql.matches) {
                        afterPrint();
                    }
                });
            }

            window.onafterprint = afterPrint;
            window.print();
        };
    </script>

</body>

</html>
