<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>XML projekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<?php $xml = simplexml_load_file("pirati.xml"); ?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!--
<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"></div>
    <div class="col-sm-2"></div>
  </div>
</div>
-->

<?php

  if(isset($_POST["submit"])){


    $pirat = $_POST["pirat"];

    foreach($xml -> user as $momak){
      $id = $momak -> id;
      $ime = $momak -> ime;
      if ($ime == $pirat){
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-sm-2"></div>';
        echo '<div class="col-sm-8"><p>Odabrana je osoba koja je '. $id .' u tablici</p></div>';
        echo '<div class="col-sm-2"></div>';
        echo '</div>';
        echo '</div>';
      }
    }
  }

?>
<div class="container">
  <div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8"><p>Unesi ime (bez prezimena)</p></div>
<div class="col-sm-2"></div>
</div>
</div>

<form method="post" action="glavna.php">

<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
            <input type="submit" class="input-group-text" name="submit"></input>
        </div>
        <input type="text" class="form-control" name="pirat">
      </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>
</form>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
            <div class="container-fluid">
                <div class="row">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Name</th>
                      <th scope="col">Surname</th>
                      <th scope="col">Description</th>
                      <th scope="col">First appearance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($xml->user as $user): ?>
                    <tr>
                      <th scope="row"><?php echo $user->id; ?></th>
                      <td><?php echo $user->ime; ?></td>
                      <td><?php echo $user->prezime; ?></td>
                      <td><?php echo $user->opis; ?></td>
                      <td><?php echo $user->pojava; ?></td>
                    </tr>
                  </tbody>
                    <?php endforeach; ?>
                </table>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
<br/>
<br/>






</body>
</html>