<?php

// Data for Mark
$markHeight = 1.69;
$markWeight = 78;

// Data for John
$johnHeight = 1.95;
$johnWeight = 92;

// Calculate BMI for Mark and John
$markBMI = round($markWeight / ($markHeight * $markHeight),2);
$johnBMI = round($johnWeight / ($johnHeight * $johnHeight),2);

// Determine who has the higher BMI
$datacheck = $markBMI > $johnBMI;
$isMarkHigherBMI = $datacheck ? 'True' : 'False';

// Print the results
echo "Data 1 <br>";
echo "Mark: <br>";
echo "  Tinggi: $markHeight kg<br>";
echo "  Berat: $markWeight m<br>";
echo "John:<br>";
echo "  Tinggi: $johnHeight kg<br>";
echo "  Berat: $johnWeight m<br>";
echo "Hasil BMI<br>";
echo "  Mark: $markBMI<br>";
echo "  John: $johnBMI<br>";
echo "Mark memiliki BMI lebih tinggi dari John: $isMarkHigherBMI<br><br>";


// Data for Mark (Data 2)
$markHeight = 1.88;
$markWeight = 95;

// Data for John (Data 2)
$johnHeight = 1.76;
$johnWeight = 85;

// Calculate BMI for Mark and John (Data 2)
$markBMI = round($markWeight / ($markHeight * $markHeight),2);
$johnBMI = round($johnWeight / ($johnHeight * $johnHeight),2);

// Determine who has the higher BMI (Data 2)
$datacheck = $markBMI > $johnBMI;
$isMarkHigherBMI = $datacheck ? 'True' : 'False';

// Print the results (Data 2)
echo "Data 2<br>";
echo "Mark:<br>";
echo "  Tinggi: $markHeight kg<br>";
echo "  Berat: $markWeight m<br>";
echo "John:<br>";
echo "  Tinggi: $johnHeight kg<br>";
echo "  Berat: $johnWeight m<br>";
echo "Hasil BMI<br>";
echo "  Mark: $markBMI<br>";
echo "  John: $johnBMI<br>";
echo "Mark memiliki BMI lebih tinggi dari John: $isMarkHigherBMI<br>";

?>
