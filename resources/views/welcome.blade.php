<!DOCTYPE html>
@extends('layouts.master')
@section('title')
All Cars
@endsection
@section('css')
@endsection
@section('content')
    <h4>Car project</h4>
      <h5>Welcome {{$name}}<h5>
    <p>You are {{$age}} years old<p>
    <a href="{{route('about')}}">About us</a>
@endsection


