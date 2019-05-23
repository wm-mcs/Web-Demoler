@extends('layouts.creative.layout_creative')

@section('titulo') {{$Empresa->name}} @stop

@section('descripcion') {{$Empresa->descripcion_empresa}} @stop

@section('robot') index, follow @stop

@section('palabras_claves') {{$Empresa->palabras_claves_empresa}} @stop



@section('nav') @include('paginas.home.home_nav') @stop

@section('slider')  @include('paginas.home.slider') @stop

@section('contenido')
      @include('paginas.home.home_about')       
        
      <img data-src="{{url()}}/imagenes/Home/1.jpg" class="get_width_100">  
      @include('paginas.home.home_service')   
      <img data-src="{{url()}}/imagenes/Home/2.jpg" class="get_width_100">   
@stop      









