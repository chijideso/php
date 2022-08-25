<?php

require_once("profileC.php");

$profile = new Profile();
//$rows = $profile->fetchById("1");

if($rows)
{  //echo $rows['id']; ?>

<table>
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </thead>
    <tbody>
        <?php //for($i=0; $i<count($rows); $i++){ ?>
    <td><?php //echo $rows[$i];  ?></td>
    <td><?php //echo $rows[$i];  ?></td>
    <td><?php //echo $rows[$i];  ?></td>
<?php //} ?>
    </tbody>
</table>
<?php }?>


    