@extends('admin.main')

@section('title','Form Akun')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Akun</h1></div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li class="breadcrumb-item active">List Akun</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Form Akun</h3>
                </div>
            <div class="card-body">
                    <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control " name="nama" style="width:50%;" value="" maxlength="25">
                            
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control " name="username" style="width:50%;" value="" maxlength="25">
                            
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control " name="email" style="width:50%;" value="" maxlength="25">
                            
                            </div>
                    
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" class="form-control " name="telepon" style="width:50%;" value="" maxlength="15">
                            
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select name="level" id="level"
                                    class="form-control" style="width:20%;">
                                    <option value="a" >
                                        Admin</option>
                                    <option value="k" >
                                        Kasir</option>
                                    <option value="m">
                                        Manajer</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
                        </form> 
            </div>
            </div>
           
           </section>
    </div> 
    
@endsection