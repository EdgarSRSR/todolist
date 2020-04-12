index user
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div>
      <a href="/users/create">новый ползователь</a>

    </div>
    <ul>
      @foreach($users as $user)

      <li>
        {{$user->name}}
        <a href="{{'/users/'.$user->id.'/edit'}}">редактировать</a>
      </li>
      @endforeach
    </ul>

  </body>
</html>
