<?php

          $filename = "products-example.json";
          $data = file_get_contents($filename); 
          $array = json_decode($data, true); 
          $arraycount = count($array);
          
          foreach($array as $value) {
            $model = $value["category_id"]; 
            $quantity = $value["quantity"];
            $price = $value["price"];
            $image = $value["image"];
            $description = $value["description"];
            $name = $value["class"];
            $query1 = "INSERT INTO `oc_product` (`product_id`, `model`, `sku`, `upc`, `ean`, `jan`, `isbn`, `mpn`, `location`, `quantity`, `stock_status_id`, `image`, `manufacturer_id`, `shipping`, `price`, `points`, `tax_class_id`, `date_available`, `weight`, `weight_class_id`, `length`, `width`, `height`, `length_class_id`, `subtract`, `minimum`, `sort_order`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (NULL, '$model', '$model', '0', '0', '0', '0', '0', '0', '$quantity', '2', '$image', '2', '1', '$price', '3', '3', '$today', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '0', '$today', '$today');";   
            mysqli_multi_query($connect, $query1) or die (mysqli_error($connect));

            $clientId = mysqli_insert_id($connect);
            $query2 = "INSERT INTO `oc_product_description` (`product_id`, `language_id`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`) VALUES ('$clientId', '2', '$name', '$description', '$name', '$name', '$name', '$name');";
            mysqli_multi_query($connect, $query2) or die (mysqli_error($connect));

          }
          
          ?>