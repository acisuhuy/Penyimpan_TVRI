<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>Laporan Buku</title>
    <style>
        .text-center{
            text-align: center;
        }
        .container{
           
        }
        .text-right{
            text-align: right;
        }
        .mb{
            margin-bottom: 10px;
        }
        .page-break{
            page-break-after: always;
        }
        
        .pagenum:before{
                content: counter(page);
        }
    
    </style>
</head>
<body>
    <h4 class="text-center">Laporan Buku</h4>
    <div class="text-right mb">
        
        <span>Tanggal : {{ date('d-M-Y') }}</span>/
        <span>Jam : {{ date('H:i') }}</span><br>
        Halaman: <span class="pagenum"></span>

    </div>
   
    <div class="container">
        <table border="1" cellspacing="0" cellpadding="15">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Buku</th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($transaksi as $item) 
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->anggota->nama }}</td>
                    <td>{{ $item->anggota->nim }}</td>
                    <td>{{ $item->buku->judul }}</td>
                    <td>{{ $item->kode_transaksi }}</td>
                    <td>{{ $item->tgl_pinjam }}</td>
                    <td>{{ $item->tgl_kembali }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p>Petugas: {{ Auth::user()->level }}</p>
        <span></span>
    </div>
 
</body>
</html>