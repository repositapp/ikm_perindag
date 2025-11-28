<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Daftar Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #555;
            padding: 8px;
            font-size: 13px;
        }

        th {
            background: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-bottom: 0;
        }

        .subtitle {
            text-align: center;
            margin-top: 0;
        }
    </style>
</head>

<body>

    <h2>LAPORAN SARAN & KRITIK</h2>
    <p class="subtitle">Dicetak pada: {{ now()->locale('id')->translatedFormat('d F Y H:i') }}</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Produk</th>
                <th>Tipe</th>
                <th>Pesan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedback as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->produk->nama_produk }}</td>
                    <td>{{ ucfirst($item->tipe) }}</td>
                    <td>{{ $item->pesan }}</td>
                    <td>{{ $item->created_at->locale('id')->translatedFormat('d F Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
