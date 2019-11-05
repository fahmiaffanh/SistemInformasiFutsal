@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Penjualan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Penjualan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>List Penjualan</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">12 November 2019</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">Panca</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">01</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">10.05 Wib</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                    </div>
                </div>
                    
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>@</th>
                            <th>Diskon</th>
                            <th>Jumlah</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lapangan A</td>
                            <td>120.000</td>
                            <td>1</td>
                            <td>0.00</td>
                            <td>120.000</td>
                        <td><a href="" class="btn btn-danger btn-block">X</a></td>
                        </tr>                  
                        <tr>
                            <td>Gatorite</td>
                            <td>10.000</td>
                            <td>12</td>
                            <td>0.00</td>
                            <td>120.000</td>
                        <td><a href="" class="btn btn-danger btn-block">X</a></td>
                        </tr>                  
                                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2">Total</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2">240.000</td>
                        </tr>
                    </tfoot>
                    
                </table>
                <a href="{{route("jual.bayar")}}" class="btn btn-success">Bayar</a>
            </div>
        </div>
    </section>
</div>

@endsection
