<?php

use function PHPSTORM_META\type;

print("Hello Anand \n");

// get CSV file
// Parse the CSV 
// Header as index
// Content
// save to outfile
// Print

$longopts  = array(
    "file:",     // Required value
    "unique-combinations::"    // Optional value
);
$options = getopt("", $longopts);
var_dump($options["file"]);
var_dump($options["unique-combinations"]);

echo getcwd();

$inputfile = $options["file"];
$path = getcwd();
$filepath = join([$path, '/' , $inputfile]);
echo $filepath;


print("\n\n\n\n");

$handle = fopen($filepath, "r");
$lineNumber = 1;
$categories = [];
$filename_split = explode(".", $inputfile);
$extension = $filename_split[1];


$tempfile = fopen("temp.json", "w")  or die("Unable to open file!");




while (($raw_string = fgets($handle)) !== false) {

    $row = str_getcsv($raw_string);
    if($lineNumber == 1){
        // var_dump($row);
        $categories = $row;
        var_dump($categories);
    } else{
        fwrite($tempfile, "{");
        foreach($row as $index => $r){
            
                // "brand_name","model_name","condition_name","grade_name","gb_spec_name","colour_name","network_name"
                $category_name = $categories[$index];


                switch($category_name){
                    case $category_name == "brand_name":
                        print("make"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    case $category_name == "model_name":
                        print("model"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    case $category_name == "colour_name":
                        print("colour"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    case $category_name == "brand_name":
                        print("make"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    case $category_name == "gb_spec_name":
                        print("capacity"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    case $category_name == "network_name":
                        print("network"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    case $category_name == "grade_name":
                        print("grade"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    case $category_name == "condition_name":
                        print("condition"." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                        $txt = '"'.$category_name. '": "'.$r .'",';
                        fwrite($tempfile, $txt);
                        break;
                    default:
                        print($category_name." : '".$r. "' (". gettype($category_name).") - ". str_replace("_", " ", ucfirst($category_name))."\n");
                }
                // print($categoryname. " : ". $r ."\n");
            };
            fwrite($tempfile, "}, \n");
            print("\n-------------\n");

        
    }
    $lineNumber++;
}


fclose($handle);




?>