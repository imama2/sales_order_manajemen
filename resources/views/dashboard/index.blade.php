<h1>Dashboard</h1>

<h3>Total Penjualan: {{ $total_penjualan }}</h3>

<h3>Total Pembelian: {{ $total_pembelian }}</h3>

<h3>Total Pendapatan: {{ $total_pendapatan }}</h3>

<h3>Total Pengeluaran: {{ $total_pengeluaran }}</h3>

<h3>Laba/Rugi: {{ $laba_rugi }}</h3>

{{-- <table>
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $barang)
        <tr>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->harga_jual }}</td>
            <td>{{ $barang->harga_beli }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
