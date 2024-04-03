@extends("layouts.master")

@section("title","Category")

@section("master_content")
<h1>Hi</h1>
<table class="table table-bordered">
    <tr>
        <td>SL</td>
        <td>Name</td>
        <td>Action</td>
    </tr>

    @for ($i=1;$i<=10;$i++)
    <tr>
        <td>SL</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    @endfor
</table>
@stop


@push("css")
    <style>
        h1{
            background: red;
        }
    </style>
@endpush
