@extends('layouts.app')

@section('content')
<div class="container">

 <h3>Album</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>TEXT</th>
            <th>PHOTOS_ID</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->album_id}}</td>
            <td>{{ $row->album_nama }}</td>
            <td>{{ $row->text}}</td>
            <td>{{ $row->photos_id }}</td>

    <form action="{{ url('/album/' . $row->album_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            <button>DELETE</button>
    </form>
        
        </tr>
        @endforeach
    </table>
 </div>

@endsection