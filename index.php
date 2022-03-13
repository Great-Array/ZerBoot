<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attack Hub | Home</title>

    <!-- Using Bootstrap because I'll lose my mind if I even try to touch CSS on my own -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <br>
    <hr>
    <br>

    <div class="container" style="width: 20em;">
      <form action="attack/AttackOverview.php" method="get">
        <div class="mb-3">
          <label class="form-label">Server Address</label>
          <input type="text" class="form-control" name="address">
          <div class="form-text">mc.example.com</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Server Port</label>
          <input type="number" class="form-control" name="port">
          <div class="form-text">If you're using a domain set as 25565</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php require 'php/text/HomePageText.php'; ?>

    <!-- Bootstrap Js Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
