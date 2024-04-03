
<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield("title", "Admin")</title>

  {{-- @include("admin.includes.css") --}}
<x-admin.style/>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@yield("app_content")

</div>
<!-- REQUIRED SCRIPTS -->
@include("admin.includes.script")
</body>
</html>
