@extends('layouts.app')

@section('content')
<div class="container">

 <h3>Post</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>TANGGAL</th>
            <th>SLUG</th>
            <th>TITLE</th>
            <th>TEXT</th>
            <th>CAT_ID</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->post_id}}</td>
            <td>{{ $row->tanggal}}</td>
            <td>{{ $row->slug}}</td>
            <td>{{ $row->title}}</td>
            <td>{{ $row->text}}</td>
            <td>{{ $row->cat_id }}</td>

    <form action="{{ url('/post/' . $row->post_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            <button>DELETE</button>
    </form>
        </tr>
        @endforeach
    </table>
 </div>

@endsection