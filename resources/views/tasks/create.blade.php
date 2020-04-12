<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task</title>
  </head>
  <body>
    <div>
      <h1>добавьте задачу</h1>
      <x-alert/>
      <form action="/tasks/create" method="post">
        @csrf
        <input type="text" name="nametask">
        <input type="submit" value="Create">

      </form>

    </div>

  </body>
</html>
