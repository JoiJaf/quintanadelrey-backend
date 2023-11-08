<?php  

require_once '../database.php';
//https://simplehtmldom.sourceforge.io/docs/1.9/
include('simple_html_dom.php');

$link = "https://www.allrecipes.com/recipes/79/desserts/";


$filenames = [];
$names = [];
$descriptions = [];
$images = [];
$platillos = 15;
$get = file_get_html($link);



foreach ($get->find('.card--no-image') as $gets) {
    $name = $gets->find('.card__title-text');
    $details = file_get_html($gets->href);
    $description = $details->find('.article-subheading');
    $image = $details->find('.primary-image__image');

    if (count($image) > 0) {
        $images[] = $image[0]->src;
    }
    else {
        $find_img = $gets->find('.universal-image__image');
        if (count($find_img) > 0) {
            $images[] = $find_img[0]->{'data-src'};
        }
    }
   
        if (count($description) > 0) {
            if ($platillos == 0) break;
            $names[] = trim($name[0]->plaintext);
            $descriptions[] = $description[0]->plaintext;

            $filename = strtolower(trim($name[0]->plaintext));
            $filename = str_replace(' ', '-', $filename);
            $filenames[] = $filename;

            $platillos--;
        }
    

}
//   foreach ($filenames as $index => $image) {
//       file_put_contents("../img/desserts-" .$image. ".jpg", file_get_contents($images[$index]));
//   }

//  for($i=0; $i<16; $i++){
//      $database->insert("tb_info_platillo", [
//          "platillo_nombre" => $names[$i],
//          "platillo_img" =>  "desserts-".$filenames[$i].".jpg",
//          "platillo_catego" =>  "Desserts",
//          "platillo_descrip" => $descriptions[$i],
//          "platillo_precio" => rand(1*10, 70*10)/10,
//          "platillo_cant_per_porci" => 1,
//          "destacado" => rand(0, 1)
//      ]);
//  }

//  $database->insert("tb_categorias", [
//     "categ_descrip" => "Whether you crave sweet, savory, decadent or healthy, we have hundreds of top-rated dessert recipes to satisfy your taste buds.",
//     "categ_nombre" =>  "Desserts"
// ]);

?>