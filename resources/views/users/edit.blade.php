


  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta charset="utf-8">
      <title>User</title>
    </head>
    <body>
      <div>
        <h1>редактировать</h1>
        <br>
        <h1>{{$user->name}}</h1>
        <x-alert/>
        <form action="{{route('user.update',$user->id)}}" method="post">
          @csrf
          @method('patch')
          <p>имя</p><input type="text" name="name" value="{{$user->name}}">
          <br>
          <p>пароль</p><input type="text" name="password" value="{{$user->password}}">
          <br>
          <input type="submit" value="редактировать">

        </form>
        <a href="/users">назад</a>
      </div>

    </body>
  </html>
