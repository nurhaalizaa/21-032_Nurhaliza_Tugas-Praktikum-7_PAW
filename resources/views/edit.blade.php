
@extends('layouts/main')

@section('container')
  <h1>Detail Data Mahasiswa</h1> 
    <form action="/{{$mahasiswa->id}}" method="post">
        @csrf 
        @method('put')
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td></td>
                <td>Alamat Email</td>
            </tr>
            <tr>
                <td><input type="text" name="nama" size="50%" value="{{$mahasiswa->nama}}"></td>
                <td></td>
                <td><input type="text" name="email" size="50%" value="{{$mahasiswa->email}}"></td>
            </tr>
            <tr>
                <td><br></td>
                <td><br></td>
                <td><br></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td></td>
                <td>Alamat Rumah</td>
            </tr>
            <tr>
                <td><input type="text" name="NIM" size="50%" value="{{$mahasiswa->NIM}}"></td>
                <td></td>
                <td><input type="text" name="alamat" size="50%" value="{{$mahasiswa->alamat}}"></td>
            </tr>
            <tr>
                <td><br></td>
                <td><br></td>
                <td><br></td>
            </tr>
            <tr>
                <td><input type="submit" float="right" class="btn btn-primary"></td>
            </tr>
            
        </table>
    </form>
    @endsection