<?php
$date1 = new DateTime($_POST["date1"] . " " . $_POST["time1"]);
$date2 = new DateTime($_POST["date2"] . " " . $_POST["time2"]);

$intervall = $date1->diff($date2);

$years = $intervall->y;
$months = $intervall->m;
$days = $intervall->d;
$hours = $intervall->h;
$minutes = $intervall->i;
$seconds = $intervall->s;
?>

<div class="card text-center rounded-3" style="width: 50%; height: 17rem; margin: auto;">
    <div class="card-body">
        <h3 class="card-title battambang-black text-decoration-underline">ពេលវេលាខុសគ្នា</h3>
        <div class="card-body bayon-regular text-primary mt-5" style="font-size: 3rem;">
            <?php
            if ($years > 0) {
                echo $years . " ឆ្នាំ " . $months . " ខែ " . $days . " ថ្ងៃ " . $hours . " ម៉ោង " . $minutes . " នាទី";
            } elseif ($months > 0) {
                echo $months . " ខែ " . $days . " ថ្ងៃ " . $hours . " ម៉ោង " . $minutes . " នាទី";
            } elseif ($days > 0) {
                echo $days . " ថ្ងៃ " . $hours . " ម៉ោង " . $minutes . " នាទី";
            } elseif ($hours > 0) {
                echo $hours . " ម៉ោង " . $minutes . " នាទី";
            } else {
                echo $minutes . " នាទី";
            }
            ?>
        </div>
    </div>
</div>
