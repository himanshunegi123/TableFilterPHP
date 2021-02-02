<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }

        h1 {
            color: red;
        }

        th {
            font-size: 2rem;
            border: 2px solid;

        }

        td {
            border: 1px solid;
        }
    </style>

</head>

<body>

</body>

</html>




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

echo ("<h1>1. List all products</h1>");
echo ("<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>");

// echo count($products);
foreach ($products as $p => $p_value) {

    foreach ($p_value as $cat1 => $cat1_value) {

        foreach ($cat1_value as $subcat => $subcat_value) {
            echo ("<tr>");
            echo ("<td>$p</td><td>$cat1</td>");

            echo ("<td>" . $subcat_value['id'] .  "</td>");
            echo ("<td>" . $subcat_value['name'] . "</td>");
            echo ("<td>" . $subcat_value['brand'] . "</td>");
            echo ("</tr>");

            // echo("$subcat <br>");
        }
        // echo ("$cat1<br>");
    }
    // echo ("$p");
    // echo $p;
}
echo ("</table>");







echo ("<h1>2. List all products in Mobile subcategory</h1>");
echo ("<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>");

foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
        foreach ($subcat_val as $subcat3  => $subcat3_val) {
            if ($subcat == "Mobile") {
                // echo($subcat3_val['id']);
                echo ("<tr>");
                echo ("<td>$cat</td><td>$subcat</td>");
                echo ("<td>" . $subcat3_val['id'] .  "</td>");
                echo ("<td>" . $subcat3_val['name'] . "</td>");
                echo ("<td>" . $subcat3_val['brand'] . "</td>");
                echo ("</tr>");
            }
        }
    }
}
echo ("</table>");


echo ("<h1>3. List all products with brand name Samsung</h1>");
echo ("<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>");


foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
        foreach ($subcat_val as $subcat3  => $subcat3_val) {
            if ($subcat3_val['brand'] == "Samsung") {
                echo ("<tr>");
                echo ("<td>$cat</td><td>$subcat</td>");
                echo ("<td>" . $subcat3_val['id'] .  "</td>");
                echo ("<td>" . $subcat3_val['name'] . "</td>");
                echo ("<td>" . $subcat3_val['brand'] . "</td>");
                echo ("</tr>");
            }
        }
    }
}
echo ("</table>");


echo ("<h1>4. Delete product with id = PR003</h1>");
echo ("<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>");


foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
        foreach ($subcat_val as $subcat3  => $subcat3_val) {
            if ($subcat3_val['id'] == "PR003") {
                unset($products[$cat][$subcat][$subcat3]);

                // echo ($subcat3_val['id']);
            }
        }
    }
}
foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
        foreach ($subcat_val as $subcat3  => $subcat3_val) {
            echo ("<tr>");
            echo ("<td>$cat</td><td>$subcat</td>");
            echo ("<td>" . $subcat3_val['id'] .  "</td>");
            echo ("<td>" . $subcat3_val['name'] . "</td>");
            echo ("<td>" . $subcat3_val['brand'] . "</td>");
            echo ("</tr>");
        }
    }
}

echo ("</table>");


echo ("<h1>5. Update product name = BIG-555 with id = PR002</h1>");
echo ("<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>");



foreach ($products as $cat => $cat_val) {
    foreach ($cat_val as $subcat => $subcat_val) {
        foreach ($subcat_val as $subcat3  => $subcat3_val) {
            if ($subcat3_val['id'] == "PR002") {
                $subcat3_val['name'] = "BIG-555";
            }
            echo ("<tr>");
            echo ("<td>$cat</td><td>$subcat</td>");
            echo ("<td>" . $subcat3_val['id'] .  "</td>");
            echo ("<td>" . $subcat3_val['name'] . "</td>");
            echo ("<td>" . $subcat3_val['brand'] . "</td>");
            echo ("</tr>");
            // echo ($subcat3_val['name']);
        }
    }
}
echo ("</table>");
