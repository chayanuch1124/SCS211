<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
$people = $people_obj["people"];
?>

<?php foreach ($people as $row) { ?>
    <div><?= $row["name"] ?> | <?= $row["education"] ?>| <?= $row["role"] ?>| <?= $row["email"] ?>| <?= $row["phone"] ?></div>
    <div>
        <img src="<?= $row["image"] ?>" style="width:300px;height:228px; border-radius: 25px;">

    </div>
<?php } ?>