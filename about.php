<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Կոնտակտային ձև</title>
</head>

<body>
    <?php
    include "./blocks/header.php"
    ?>

<div class="container mt-5 card card-outline-secondary">
              <div class="card-header">
                <h3 class="mb-0">Կոնտակտային ձև</h3>
              </div>
              <div class="card-body">
                <form action="check.php" method="post">
                  <fieldset>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <input class="form-control" name="email"  type="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <textarea class="form-control"  name="message" placeholder="Գրեք հաղորդագրություն" rows="6"></textarea>
                      </div>
                    </div>
                    <button class="btn btn-secondary btn-lg float-right" type="submit" name="send">ՈՒղարկել</button>
                  </fieldset>
                </form>
              </div>
            </div>



    <?php
    include "./blocks/footer.php"
    ?>


</body>

</html>