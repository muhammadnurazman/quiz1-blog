@extends('layouts.app')

@section('content')
<div class="container">

 <h3>Category</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>TEXT</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->cat_id}}</td>
            <td>{{ $row->cat_nama }}</td>
            <td>{{ $row->text}}</td>

    <form action="{{ url('/category/' . $row->cat_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            <button>DELETE</button>
    </form>
        </tr>
        @endforeach
    </table>
 </div>

@endsection