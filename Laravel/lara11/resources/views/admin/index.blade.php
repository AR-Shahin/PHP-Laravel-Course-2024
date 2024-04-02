<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .bg-info{
            background: #000;
        }
    </style>
</head>
<body>
    @include("admin.nav",["data" => "hi"])
<h1>{!! $html !!}</h1>

@php
 dd($key)
@endphp
{{ $site }}

@if (false)
    worked
    @else
    not
@endif

@for ($i=1;$i<=5;$i++)
    {{ $i }}
@endfor

{{-- @foreach ($users as $user)
    {{ $user["name"] }}
@endforeach --}}

<h1 @class([
    "bg-info" => false,
    "defla"
])>Hi</h1>
@forelse ($users as $user)
    {{ $user["name"] }}
    @empty
    nai
@endforelse
</body>
</html>
