<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View!</title>
  @{bootstrap}
</head>
<body>
  <div class="container">
    <h1 class="page-title">PHP-MVC</h1>
    @{menu}
    <br>
    <div class="row">
      <div class="col-md-12">
        <p>Test for templating:</p>
        <pre>{{test}}</pre>
      </div>
    </div>
  </div>
</body>
</html>