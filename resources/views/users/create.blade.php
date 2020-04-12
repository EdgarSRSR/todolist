
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User</title>
  </head>
  <body>
    <div>
      <h1>добавьте пользоватедь</h1>
      <x-alert/>
      <form action="/users/create" method="post">
        @csrf
        @method('patch')
        <p>имя</p><input type="text" name="name">
        <br>
        <p>пароль</p><input type="text" name="password">
        <br>
        <input type="submit" value="создать">

      </form>
      <a href="/users">назад</a>
    </div>

  </body>
</html>
