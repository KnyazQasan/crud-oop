<?php
include 'model.php';

$model = new Model();

$rows = $model->fetch();
?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Bashliq</th>
            <th>təsviri</th>
            <th>Seçimlər</th>
        </tr>
    </thead>
    <tbody>
        <?php

$i = 1;
        if (!empty($rows)) {
            foreach ($rows as $row) { ?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                        <a href="" id="read" class="badge badge-info" value="<?php echo $row['id'] ?> " data-toggle="modal" data-target="#exampleModal">Bax</a>
                        <a href="" id="del" class="badge badge-danger" value="<?php echo $row['id'] ?>">Delete</a>
                        <a href="" id="edit" class="badge badge-warning" value="<?php echo $row['id'] ?>" data-toggle="modal" data-target="#exampleModal1">Yenile</a>
                    </td>
                </tr>

        <?php
            }
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       Melumat Yoxdur
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>';
        }
        ?>
    </tbody>
</table>