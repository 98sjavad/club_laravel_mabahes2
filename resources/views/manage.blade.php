@extends('layouts.master')
@section('title','mange')

@section('main')
    <div class="container" style="direction:rtl">
<br><h1 style="text-align: right">رزروهای کنونی</h1><br>
    <table class="table table-sm table-dark">
        <thead>
        <tr>
            <th scope="col">محل</th>
            <th scope="col">تاریخ</th>
            <th scope="col">سانس</th>
            <th scope="col">کنسل کردن</th>

        </tr>
        </thead>
        <tbody>
        @foreach($reserve as $r)
        <tr>
            <td>{{$r->pid}}</td>
            <td>{{$r->date}}</td>
            <td>{{$r->section}}</td>
            <form action="/reserve/cancel/{{$r->id}}" method="POST">
                @csrf
            <td><button type="submit" class="btn btn-danger">کنسل</button></td>
            </form>


        </tr>
        @endforeach
        </tbody>
    </table>
        <br><h1 style="text-align: right">رزروهای کنسل شده</h1><br>
        <table class="table table-sm table-dark">
            <thead>
            <tr>
                <th scope="col">شناسه کنسلی</th>
                <th scope="col"> کنسل کننده</th>
                <th scope="col">زمان</th>
                <th scope="col">مکان</th>


            </tr>
            </thead>
            <tbody>
            @foreach($cancel as $c)
            <tr>
                <td>{{$c->rid}}</td>
                <td>{{$c->cuid}}</td>
                <td>{{$c->date}}</td>
                <td>{{$c->pid}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
