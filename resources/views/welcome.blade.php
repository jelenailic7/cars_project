<!DOCTYPE html>
@extends('layouts.master')
@section('title')
All Cars
@endsection
@section('css')
@endsection
@section('content')
    <h1>Car project</h1>
      <h1>Welcome {{$name}}<h1>
    <p>You are {{$age}} years old<p>
    <a href="{{route('about')}}">About us</a>
@endsection


