<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @section('title')
    Dashboard
    @endsection
    @include('layouts.head')
    @include('admin.stayle')
</head>
<body>
    


    @include('admin.nav')
  
    @include('admin.aside')
  
    @section('body')

    @endsection

    @include('admin.scripte')
</body>
</html>
