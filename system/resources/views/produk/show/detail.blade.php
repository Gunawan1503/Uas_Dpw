<p>
	{{$produk->harga}}  |
	Stok : {{$produk->stok}} Unit  |
	Berat : {{$produk->berat}} Kg  |
	Seller : {{$produk->seller->username}} |
	Diproduksi Sejak : {{$produk->created_at->diffForHumans()}}
</p>