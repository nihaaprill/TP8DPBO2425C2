<?php include "views/templates/header.php"; ?>

<div class="card p-4 mb-4">
    <h4 class="mb-3">Edit Department</h4>

    <form action="index.php?c=Department&a=update&id=<?= $row['id']; ?>" method="POST">

        <label class="form-label">Department Name</label>
        <input type="text" name="name" class="form-control mb-3"
               value="<?= $row['name']; ?>" required>

        <label class="form-label">Building</label>
        <input type="text" name="building" class="form-control mb-3"
               value="<?= $row['building']; ?>" required>

        <button class="btn btn-primary">Update</button>
        <a href="index.php?c=Department&a=index" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include "views/templates/footer.php"; ?>
