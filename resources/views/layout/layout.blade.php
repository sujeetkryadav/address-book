

{{--- Comment : This Part Extends From Layout Blade Start  --}}

@extends('layout.master')

{{--- Comment : This Part Extends From Layout Blade End  --}}

{{--- This Section Belongs to Title Bar Start  --}}

@section('title')

@stop

@section('sidebar')
@if($page!='login'&&$page!='register')
@include('layout.sidebar')
@endif
@stop

{{--- This Section Belongs to Title Bar End  --}}

{{--- This Section Belongs to Page Middle Content Start  --}}

@section('content')
@include($page)
@stop

{{--- This Section Belongs to Page Middle Content End  --}}
