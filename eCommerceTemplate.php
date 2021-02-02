<?php
$products = array(
  "Electronics" => array(
    "Television" => array(
      array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
      ),
      array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
      ),
      array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
      )
    ),
    "Mobile" => array(
      array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
      ),
      array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
      ),
      array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
      )
    )
  ),
  "Jewelry" => array(
    "Earrings" => array(
      array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
      ),
      array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
      ),
      array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
      )
    ),
    "Necklaces" => array(
      array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
      ),
      array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
      ),
      array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
      )
    )
  )
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="ecommerce.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />

  <title>Our product</title>
</head>

<body>
  <div class="header">
    <div class="head1">
      <h1><i class="fab fa-opencart" style="font-size:2rem;color: black;font-weight: bold;"></i>&nbsp;Shoping<sub style="color: red;">Hub</sub></h1>
    </div>
    <div class="head2">
      <a href="#">Home</a>
      <a href="#">Product</a>
      <a href="#">Contact</a>
    </div>
  </div>

  <div class="electronics">
    <h2>Electronics</h2>
  </div>
  <div class="Television">
    <h2>Television</h2>
  </div>
  <?php



  echo ("<div class='products1'>");
  foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
      foreach ($subcat_val as $subcat3  => $subcat3_val) {
        if ($subcat == "Television") {
          echo ("<div class='p1'>");
          echo ("<div class='img1'></div>");
          echo ("<h3>" . $subcat3_val['id'] . "</h3>");
          echo ("<h3>" . $subcat3_val['name'] . "</h3>");
          echo ("<h3>" . $subcat3_val['brand'] . "</h3>");
          echo ("<p>" . '$134.00' . "</p>");
          echo ("</div>");
        }
      }
    }
  }
  echo ("</div>");

  echo ("<div class='mobile'>");
  echo ("<h3>Mobile</h3>");
  echo ("<div>");
  echo ("<div class='products2'>");

  foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
      foreach ($subcat_val as $subcat3  => $subcat3_val) {
        if ($subcat == "Mobile") {
          echo ("<div class='p2'>");
          echo ("<div class='img11'></div>");
          echo ("<h3>" . $subcat3_val['id'] . "</h3>");
          echo ("<h3>" . $subcat3_val['name'] . "</h3>");
          echo ("<h3>" . $subcat3_val['brand'] . "</h3>");
          echo ("<p>" . '$164.00' . "</p>");
          echo ("</div>");
        }
      }
    }
  }
  echo ("</div>");


  echo ("<div class='Jewelry'>");
  echo ("<h2>Jewelry</h2>");
  echo ("<div>");
  echo ("<div class='Earings'>");
  echo ("<h2>Earings</h2>");
  echo ("</div>");
  echo ("<div class='products3'>");
  foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
      foreach ($subcat_val as $subcat3  => $subcat3_val) {
        if ($subcat == "Earrings") {
          echo ("<div class='p3'>");
          echo ("<div class='img111'></div>");
          echo ("<h3>" . $subcat3_val['id'] . "</h3>");
          echo ("<h3>" . $subcat3_val['name'] . "</h3>");
          echo ("<h3>" . $subcat3_val['brand'] . "</h3>");
          echo ("<p>" . '$104.00' . "</p>");
          echo ("</div>");
        }
      }
    }
  }
  echo ("</div>");



  echo ("<div class='Neklaces'>");
  echo ("<h2>Neklaces</h2>");
  echo ("</div>");
  echo ("<div class='products4'>");
  foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
      foreach ($subcat_val as $subcat3  => $subcat3_val) {
        if ($subcat == "Necklaces") {
          echo ("<div class='p3'>");
          echo ("<div class='img1111'></div>");
          echo ("<h3>" . $subcat3_val['id'] . "</h3>");
          echo ("<h3>" . $subcat3_val['name'] . "</h3>");
          echo ("<h3>" . $subcat3_val['brand'] . "</h3>");
          echo ("<p>" . '$184.00' . "</p>");
          echo ("</div>");
        }
      }
    }
  }
  echo ("</div>");

  ?>
</body>

</html>