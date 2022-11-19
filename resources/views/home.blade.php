
@extends('layouts/main')

@section('container')
  <h1>DATA MAHASISWA</h1> 
    <table class="table table-striped">
      <thead style="color: #2d4b9c;">
        <tr>
          <th> Nama </th>
          <th> NIM </th>
          <th> Email </th>
          <th> Alamat </th>
          <th colspan="2"> Action </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $dt)
        <tr>
          <td width="20%">{{$dt->nama}}</td>
          <td width="20%">{{$dt->NIM}}</td>
          <td width="20%" >{{$dt->alamat}}</td>
          <td width="20%">{{$dt->email}}</td>
          <td >
            <form action="/{{$dt->id}}/destroy" method="Post">
            @csrf
            @method('DELETE')
            
            <button style="border: 0;" class="btn bg-transparent "><img src="gambar/delete.png" alt="" width="30px"></button>
            </form>
          </td>
          <td>
            <a href="/{{$dt->id}}/edit">
              <button class="btn bg-transparent"><img src="gambar/edit.png" alt="" width="30px"></button>
            </a>
          </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

