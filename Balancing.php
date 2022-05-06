<!DOCTYPE html>
<html>
<title>Balancing Act</title>

<style>
</style>

<body>

  <div class="navbar">
    <a href="index.php">Home</a>
  </div>


   <h1>Balancing Act</h1>


   <h2>TC1</h2>
   <form method="post">
        <input type="submit" name="biasReturnButton"
                class="button" value="Check Biases" />

        <input type="submit" name="biasEditButton"
                class="button" value="Edit Biases" />
    </form>




  <form action="/Balancing.php" method="post">
    <p><label for="Balancing">Hot (CH205-CH210) Cold (CH225-CH229)</label></p>
    <textarea id="TC1_Hot1" name="TC1_Hot1" rows="8" cols="20" placeholder="Paste CH205 values here" ></textarea>
    <textarea id="TC1_Cold1" name="TC1_Cold1" rows="8" cols="20" placeholder="Paste CH225 values here"></textarea>
    <br>
    <textarea id="TC1_Hot2" name="TC1_Hot2" rows="8" cols="20" placeholder="Paste CH210 values here" ></textarea>
    <textarea id="TC1_Cold2" name="TC1_Cold2" rows="8" cols="20" placeholder="Paste CH229 values here"></textarea>
    <br>
    <input type="submit" name="analyzeButton"
            class="button" value="Analyze!">
  </form>

<?php


$TC1_Hot_Bias = array(1, 2, 3, 4, 5, 6);
$TC1_Cold_Bias = array(1, 2, 3, 4, 5);

  if(array_key_exists('biasReturnButton', $_POST)) {
    biasReturnButtonFunction($TC1_Hot_Bias, $TC1_Cold_Bias);
  }

  if(array_key_exists('biasEditButton', $_POST)) {
    biasEditButtonFunction($TC1_Hot_Bias, $TC1_Cold_Bias);
  }

  if(array_key_exists('analyzeButton', $_POST)) {
    analyzeButtonFunction(TC1_Hot1, TC1_Hot2, TC1_Cold1, TC1_Cold2, TC1_Hot_Bias, TC1_Cold1);
  }

  function biasReturnButtonFunction($hotArray, $coldArray) {
    echo "The hot-side biases are:";
    echo "<br>";
    foreach ($hotArray as $bias) {
      echo $bias;
      echo "<br>";
    }
    echo "The cold-side biases are:";
    echo "<br>";
    foreach ($coldArray as $bias) {
      echo $bias;
      echo "<br>";
    }
  }

  analyzeButtonFunction($hotbias, $coldbias) {
      $hot1=$_POST['TC1_Hot1'];
      $hot2=$_POST['TC1_Hot2'];
      $cold1=$_POST['TC1_Cold1'];
      $cold2=$_POST['TC1_Cold2'];

      $hotArray1 = explode("<br>", $_POST['TC1_Hot1']);
      $hotArray2 = explode("<br>", $_POST['TC1_Hot2']);
      $coldArray1 = explode("<br>", $_POST['TC1_Cold1']);
      $coldArray2 = explode("<br>", $_POST['TC1_Cold2']);

      print_r(hotArray1);




  }




?>




</body>
</html>
