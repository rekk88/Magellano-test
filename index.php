<?php
//function to read user input 
function readline($question)
{
    $fh = fopen('php://stdin', 'r');
    echo $question;
    $userInput = trim(fgets($fh));
    fclose($fh);

    return $userInput;
}

function stringReplace($string){
  return str_replace([' ','\\','|'], '/' , $string);
}



class Path
{

  function __construct($p){
    $this->currentPath = $p;
  }

  function get_currentPath(){
    return $this->currentPath;
  }

  function cd($newDir){
    if (substr($newDir,0,3) === "../") {
      $newDir = stringReplace($newDir); //replace all separators inside newDir with / 
      //remove '../' from the string to be added to currentPath
      $new = substr($newDir,2);
      $new = $this->currentPath . $new;
      $this->currentPath = $new;
    }
    else{
      echo "input for cd function must start with '../' \n";
    }
  }
}



//run
$input = readline("write path name : ");

//check string to start with / and not containing numbers
if (substr($input,0,1) === "/" && preg_match('~[0-9]~', $input) !== 1) {
  $input = stringReplace($input);
  //create new object of Path type
  $path1 = new Path($input);

  //output the created object
  var_dump($path1);

  //call the Path class function to change directory 

  $path1->cd("../Z");

  //output the new directory
  var_dump($path1);
}
else{
  echo "path name must start with '/' and not have numbers";
}
