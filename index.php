<?php include("./includes/header.php") ?>
<?php include("db.php") ?>

<div class="container p-4">
<<<<<<< HEAD
=======

>>>>>>> ff951836028b2b71b94c29b4d6549cae92a62c71
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">

                    <?= $_SESSION['message'] ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>

            <?php session_unset();
            } ?>

<<<<<<< HEAD
            <div class="card card-body">

                <form action="save_task.php" method="POST">

                    <div class="form-grup mb-2">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>

=======
        <div class="col-md-4">

            <?php if (isset($_SESSION[''])) { ?>


                

            <?php } ?>

            <div class="card card-body">

                <form action="save_task.php" method="POST">

                    <div class="form-grup mb-2">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>

>>>>>>> ff951836028b2b71b94c29b4d6549cae92a62c71
                    <div class="form-grup">

                        <textarea name="description" rows="2" class="form-control mb-2" placeholder="Task Description"></textarea>

                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>

            </div>

        </div>

        <div class="col-md-8">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Descriptio</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM task";
                    $result_task = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_task)) { ?>

                        <tr>
                            <td> <?php echo $row['title']; ?> </td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a>
                            
                            <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>


                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php include("./includes/footer.php") ?>
