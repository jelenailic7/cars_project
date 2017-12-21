<!DOCTYPE html>
@extends('layouts.master')
@section('title')
All Cars
@endsection
@section('css')
@endsection
@section('content')


<div class="col-sm-3 blog-sidebar">
<h4>Cars</h4>
<ul>
@foreach($cars as $car)
        <li><a href="{{route('single-car',['id'=>$car->id])}}">{{$car->title}}</a></li>
        @endforeach
   </ul>
</div>
@endsection
