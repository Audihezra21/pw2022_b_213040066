<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM content 
        WHERE
        nama LIKE '%$keyword%' OR
        fungsi LIKE '%$keyword%' OR
        bentukid LIKE '%$keyword%' OR
        deskripsi LIKE '%$keyword%' OR
        gambar LIKE '%$keyword%'
       ";

$content = query($query);
?>

<table class="table fs-8">
        <thead>
            <tr class="fs-5">
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Function</th>
            <th scope="col">Format</th>
            <th scope="col">Description</th>
            <th scope="col">Edit/Delete</th>

            </tr>
        </thead>
        <tbody>

        <?php $no = 1; foreach($content as $con)  { ?>
            <tr class="align-middle">
            <th scope="row"><?= $no++;?></th>
            <td>
            <img src= img/<?=$con["gambar"]; ?> width="150px"  class="img-thumbnail fs-5">
            </td>
            <td><?php echo $con["nama"]?></td>
            <td><?php echo $con["fungsi"] ?></td>
            <td><?php echo $con["bentukid"]?></td>
            <td><?php echo $con["deskripsi"]?></td>           
            <td>
                <a href="ubah.php?id=<?= $con["id"]?>" class="btn badge bg-warning">Change</a>
                <a href="hapus.php?id=<?= $con["id"]?>" class="btn badge bg-danger" onclick="return confirm('Are You Sure want to Delete?');">Delete</a>
            </td>
            </tr> 
        <?php } ?>
            <tr class="align-middle">
           
            </tr>
        </tbody>
        </table>
