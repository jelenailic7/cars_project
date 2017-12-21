<!DOCTYPE html>
@extends('layouts.master')
@section('title')
All Cars
@endsection
@section('css')
@endsection
@section('content')

<h1>Cars</h1>
<div class="list-group">
<ul>
@foreach($cars as $car)
        <li><a href="{{route('single-car',['id'=>$car->id])}}">{{$car->title}}</a></li>
        @endforeach
   </ul>
</div>
@endsection
