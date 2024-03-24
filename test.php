<?php

$data = array(
  "Data 1" => array(
      "Lumba-lumba" => array(96, 108, 89),
      "Koala" => array(88, 91, 110),
  ),
  "Data Bonus 1" => array(
      "Lumba-lumba" => array(97, 112, 101),
      "Koala" => array(109, 95, 123),
  ),
  "Data Bonus 2" => array(
      "Lumba-lumba" => array(97, 112, 101),
      "Koala" => array(109, 95, 106),
  ),
);//

function hitungskor($scores) {
    $a = round(array_sum($scores) / count($scores),2);
    $b = floatval($a);
    return $b;
}

function skormenang($scores1, $scores2, $minimumScore = 100) {
    $averageScore1 = hitungskor($scores1);
    $averageScore2 = hitungskor($scores2);
  
    if ($averageScore1 < $minimumScore && $averageScore2 < $minimumScore) {
      return "Tidak ada yang memenangkan tropi";
    }
  
    if ($averageScore1 >= $minimumScore && $averageScore2 < $minimumScore) {
      return "tim Lumba-lumba menang";
    }
  
    if ($averageScore1 < $minimumScore && $averageScore2 >= $minimumScore) {
      return "tim Koala menang";
    }
  
    if ($averageScore1 > $averageScore2) {
      return "tim Lumba-lumba menang";
    } elseif ($averageScore1 < $averageScore2) {
      return "tim Koala menang";
    } else {
      return "Seri";
    }
  }
foreach ($data as $dataSetName => $dataSet) {
  echo "<h2>$dataSetName</h2>";
  echo "<table>";

  foreach ($dataSet as $teamName => $scores) {
    $averageScore = hitungskor($scores);
    echo "<tr>";
    echo "<td>$teamName</td>";
    foreach ($scores as $score) {
      echo "<td>$score</td>";
    }
    echo "<td>$averageScore</td>";
    echo "</tr>";
  }
  
  $lumbaLumbaScores = $dataSet["Lumba-lumba"];
  $koalaScores = $dataSet["Koala"];
  $pemenang = skormenang($lumbaLumbaScores, $koalaScores);
  
  
  echo "<tr><td colspan='5'>hasil= $pemenang</td></tr>";
  echo "</table>";
}

?>
