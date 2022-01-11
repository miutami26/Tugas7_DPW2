@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h4>{{$produk->Nama_produk}}</h4><hr>
						<p>Rp. {{number_format($produk->Harga)}} |
							Stok : {{$produk->Stok}} |
							Berat : {{$produk->Berat}} gr |
							Warna : {{$produk->warna}} |
							Seller : {{$produk->seller->nama}}
						</p>
						{!! nl2br($produk->deskripsi) !!}
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection