@extends('layout.layoutdasar')
 <!-- START FORM -->
@section('konten')

    <form action='{{ url('penyimpanan') }}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('penyimpanan') }}' class="btn btn-secondary"> << Go back </a>
            <div class="mb-3 row">
                <label for="kodebarang" class="col-sm-2 col-form-label">Goods Code</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kodebarang' id="kodebarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namabarang" class="col-sm-2 col-form-label">Goods Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='namabarang' id="namabarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategoribarang" class="col-sm-2 col-form-label">Goods Category</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kategoribarang' id="kategoribarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hargabarang" class="col-sm-2 col-form-label">Goods Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='hargabarang' id="hargabarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlahbarang" class="col-sm-2 col-form-label">Goods Quantity</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlahbarang' id="jumlahbarang">
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

       