<?php
//Sprint 1, topic 3, level 1
echo "<h2> Sprint 1, topic 3, level 1 </h2>";

//Exercise 1
echo "<h3> EXERCISE 1 </h3>";
$integers = [0, 25, 50, 75, 100];
foreach ($integers as $integer) {
    echo $integer . "<br>";
}

//Exercise 2
echo "<h3> EXERCISE 2 </h3>";
$X = array (10, 20, 30, 40, 50,60);
echo "The array possess " . count($X) . " elements <br>";
unset($X[3]);
echo "Possition 4 before index reorganization: " . $X[4] . "<br>";
$X = array_values($X);
echo "Possition 4 after index reorganization: " . $X[4] . "<br>";
echo "The array now possess " . count($X) . " elements <br>";

//Exercise 3
echo "<h3> EXERCISE 3 </h3>";
function allWordsWChar($words, $character) {
    $allWordsWChar = false;
    $wordsWChar = 0;
    foreach ($words as $word) {
        $containsChar = false;
        for ($i = 0; $i < strlen($word) && !$containsChar ; $i++) {
            if (strcasecmp($word[$i], $character) == 0) {
                $containsChar = true;
                $wordsWChar += 1;
            }
        }
    }
    if ($wordsWChar == count($words)) {
        $allWordsWChar = true;
    }
    if ($allWordsWChar) {
        $message = "All words contains character '" . $character . "' <br>";
    } else {
        $message = "From " . count($words) . " words, " . $wordsWChar . " contains character '" . $character . "' <br>";
    }
    return $message;
}
$home = ["kitchen", "toilet", "garage", "bedroom"];
$street = ["cars", "trees", "buildings", "bikes"];
echo allWordsWChar($home, "e");
echo allWordsWChar($home, "a");
echo allWordsWChar($street, "s");
echo allWordsWChar($street, "a");

//Exercise 4
echo "<h3> EXERCISE 4 </h3>";
$personalInfo = [
    "Name" => "Simón Menendez Bravo",
    "Age" => 37,
    "email" => "menendezsimon@gmail.com",
    "Favourite food" => "Milanesas con papas fritas",
];
foreach ($personalInfo as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>