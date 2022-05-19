@extends('layouts.admin')

@section('container')
<form action="{{ route('logout') }}" method="POST">
    @csrf
    
</form>
@endsection
