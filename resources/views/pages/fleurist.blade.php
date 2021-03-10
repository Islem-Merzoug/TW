<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

  <form method="post" action="add">
    <div class="form-group">
      <label for="exampleInputEmail1">Nom de fleur</label>
      <input type="text" class="form-control" id="exampleInputNom_fleur" aria-describedby="emailHelp" placeholder="nom de fleur">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Image de fleur</label>
      <input type="text" class="form-control" id="exampleInputImage_fleur" placeholder="image de fleur">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Le prix unitaire</label>
      <input type="text" class="form-control" id="exampleInputPrix_unitaire" placeholder="le prix unitaire">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
    
</body>
</html>