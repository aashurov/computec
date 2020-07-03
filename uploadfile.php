<html>  
      <head>  
           <title>Import Product Data</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
      </head>  
      <body>  
        <div class="container box">
          <h3 align="center">Import Product Data</h3><br />
          <?php
          $connect = mysqli_connect("localhost", "root", "root", "computec"); 

          if ($connect->connect_error) {
            die("Connection failed: <br>" . $connect->connect_error);
         }

           echo "Connected successfully <br>";
          $filename = "products_16_june_2020_15_41.json";
          $data = file_get_contents($filename); 
          $array = json_decode($data, true); 
          $arraycount = count($array);
          $today = date("Y-m-d H:i:s");
          
          foreach($array as $value) {
            $model = $value["model"]; 
            $quantity = $value["quantity"];
            $priceold = $value["price"];
            $price = $priceold/10000;
            $image = $value["image"];
            $description = $value["description"];
            $name = $value["class"];
            $category_id = $value["category_id"];

            $query1 = "INSERT INTO `oc_product` (`product_id`, `model`, `sku`, `upc`, `ean`, `jan`, `isbn`, `mpn`, `location`, `quantity`, `stock_status_id`, `image`, `manufacturer_id`, `shipping`, `price`, `points`, `tax_class_id`, `date_available`, `weight`, `weight_class_id`, `length`, `width`, `height`, `length_class_id`, `subtract`, `minimum`, `sort_order`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (NULL, '$model', '', '0', '0', '0', '0', '0', '0', '$quantity', '7', '$image', '2', '1', '$price', '3', '3', '$today', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '0', '$today', '$today');";   
            mysqli_multi_query($connect, $query1) or die (mysqli_error($connect));

            $clientId = mysqli_insert_id($connect);

            $query2 = "INSERT INTO `oc_product_description` (`product_id`, `language_id`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`) VALUES ('$clientId', '2', '$model', '$description', '$name', '$name', '$name', '$name');";
            mysqli_multi_query($connect, $query2) or die (mysqli_error($connect));
            
            $query3 = "INSERT INTO `oc_product_to_category` (`product_id`, `category_id`) VALUES ('$clientId', '$category_id');";
            mysqli_multi_query($connect, $query3) or die (mysqli_error($connect)); 

            $query4 = "INSERT INTO `oc_product_to_store` (`product_id`, `store_id`) VALUES ('$clientId', '0');";
            mysqli_multi_query($connect, $query4) or die (mysqli_error($connect)); 

          }
          
          ?>
     <br />
         </div>  
      </body>  
 </html>  