<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<p>{{$user->name}}</p>
<p>{{$user->job_work}}</p>
dfsdf

    <form method="POST" action="{{ route('web.profile.update',$user->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" id="name">
        <input type="text" name="job_work" value="{{ $user->job_work }}" id="job_work">
        <button type="submit">
            submit
        </button>
    </form>

</body>
</html>
