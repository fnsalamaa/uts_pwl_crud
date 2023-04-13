@extends('layout.layoutdasar')
 <!-- START FORM -->
@section('konten')

    <form action='{{ url('penyimpanan/'.$data->kode_barang) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('penyimpanan') }}' class="btn btn-secondary"> << Go Back </a>
            <div class="mb-3 row">
                <label for="kodebarang" class="col-sm-2 col-form-label">Goods Code</label>
                <div class="col-sm-10">
                    {{ $data->kode_barang}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namabarang" class="col-sm-2 col-form-label">Goods Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='namabarang' value="{{ $data->nama_barang}}"
                    id="namabarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategoribarang" class="col-sm-2 col-form-label">Goods Category</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kategoribarang'
                    value="{{ $data->kategori_barang}}" id="kategoribarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hargabarang" class="col-sm-2 col-form-label">Goods Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='hargabarang' 
                    value="{{ $data->harga}}" id="hargabarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlahbarang" class="col-sm-2 col-form-label">Goods Quantity</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlahbarang'
                    value="{{ $data->qty}}" id="jumlahbarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlahbarang" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Save</button></div>
            </div>
          
        </div>

    </form>
        <!-- AKHIR FORM -->
@endsection

       