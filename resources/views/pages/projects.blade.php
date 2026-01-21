<?php
@extends('layouts.master')

@section('content')
    <h2>Các dự án đã thực hiện</h2>
    @foreach($projects as $project)
        <div class="card">
            <h3>{{ $project['title'] }}</h3>
            <p>{{ $project['desc'] }}</p>
        </div>
    @endforeach
@endsection