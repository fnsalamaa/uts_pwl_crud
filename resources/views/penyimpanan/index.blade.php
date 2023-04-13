@extends('layout.layoutdasar')
<!-- START DATA -->
@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('penyimpanan') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" 
                value="{{ Request::get('katakunci') }}" placeholder="Enter Keywords" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>
                
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ url('penyimpanan/create') }}' class="btn btn-primary">+ Add Data</a>
        </div>
          
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Goods Code</th>
                    <th class="col-md-4">Goods Name</th>
                    <th class="col-md-2">Goods Category</th>
                    <th class="col-md-2">Goods Price</th>
                    <th class="col-md-2">Goods Quantity</th>
                    <th class="col-md-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem() ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->kategori_barang }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>
                        
                        <a href='{{ url('penyimpanan/'.$item->kode_barang.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Do you want to delete data?')" class='d-inline' action="{{ url('penyimpanan/'.$item->kode_barang) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                            
                        </form>                       
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach 
            </tbody>
        </table>
        {{ $data->links() }} 
    </div>
<!-- AKHIR DATA -->
@endsection


        