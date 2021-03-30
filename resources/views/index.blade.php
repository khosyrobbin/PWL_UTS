<html>
<head>
	<title>Barang UTS</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	
	<h3>Data Barang</h3>
 
        <p>Cari Kategori :</p>
    <form action="/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari kategori .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>

	<table border="1">
		<tr>
			<th>Id Barang</th>
            <th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Harga</th>
            <th>QTY</th>
		</tr>
		@foreach($barangs as $p)
		<tr>
			<td>{{ $p->id_barang }}</td>
			<td>{{ $p->kode_barang }}</td>
			<td>{{ $p->nama_barang }}</td>
			<td>{{ $p->kategori_barang }}</td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->qty }}</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
	Halaman : {{ $barangs->currentPage() }} <br/>
	Jumlah Data : {{ $barangs->total() }} <br/>
	Data Per Halaman : {{ $barangs->perPage() }} <br/>
 
 
	{{ $barangs->links() }}
 
 
</body>
</html>