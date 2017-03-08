<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Books List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table">
      <thead>
        <tr>
          <th>Book Title</th>
          <th>Author's First Name</th>
          <th>Author's Last Name</th>
          <th>Publisher's Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
          <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->first_name }}</td>
            <td>{{ $book->author->last_name }}</td>
            <td>{{ $book->publisher->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
