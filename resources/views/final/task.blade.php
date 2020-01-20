@extends('layouts.base')

@section('content')
    <h1>Numero task: {{ $tasks -> count() }}</h1>  
    
    <ul>    
        @foreach ($tasks as $task)      
        <li>
            {{ $task -> name }}: 
            {{ $task -> employee -> name }}
        </li>    
        @endforeach  
    </ul>
    
@endsection