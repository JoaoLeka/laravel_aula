@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
      <h1>algum titulo</h1>
      @if(10 > 5)
      <p>A coondição é true</p>
      @endif

      <p>{{$nome}}</p>


      @if($nome=="pedro")
      <p>O nome é pedro</p>
      @else
      <p>o nome não é pedro e a idade dele é {{$idade}} </p>
      @endif


      @for($i = 0; $i < count($arr); $i++)
<p>{{$arr[$i]}}</p>
      @endfor


      @endsection

