@extends('layout')
@section('title','เกี่ยวกับเรา')

@section('content')
<div class = "container py-4">
    <h2>เกี่ยวกับเรา<h2>
        <hr>
        <p>ผู้พัฒนา : {{$name}}</p>
        <p>วันก่อตั้ง : {{$date}}</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor cumque adipisci perferendis velit
                possimus nesciunt vel iste nostrum deserunt? Dolore qui ipsum iusto recusandae velit laborum
                reiciendis modi corrupti ipsam?</p>
            <a href = '/about'>เกี่ยวกับเรา</a>
            <a href = '/blog'>บทความทั้งหมด</a>
</div>

@endsection