@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Daftar Poktan</h1>
    </div>   <!--End Page Header -->
</div>  
<div class="row">
    <div class="col-lg-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-success">
            <div class="panel-heading">
                Tabel Poktan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr >
                                <th class="text-center">No</th>
                                <th class="text-center">ID Poktan</th>
                                <th class="text-center">Nama Poktan</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center" colspan="2">Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Poktan as $in=>$val)
                            <tr>
                                <td class="text-center">{{$in+1}}</td>
                                <td class="text-center">{{$val->id_poktan}}</td>
                                <td class="text-center">{{$val->nama_poktan}}</td>
                                <td class="text-center">{{$val->alamat}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$Poktan->links()}}
                </div>
            </div>
            <div class="panel-footer"></div>
        </div>
        <!-- End  Kitchen Sink -->
    </div>           
</div>

@endsection
           