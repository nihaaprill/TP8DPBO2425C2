<?php include "views/templates/header.php"; ?>

<div class="card p-4 mb-4">
    <h4 class="mb-3">Tambah Department</h4>

    <form action="index.php?c=Department&a=create" method="POST">
        <label class="form-label">Department Name</label>
        <input type="text" name="name" class="form-control mb-3" required>

        <label class="form-label">Building</label>
        <input type="text" name="building" class="form-control mb-3" required>

        <button class="btn btn-primary">Tambah</button>
    </form>
</div>

<div class="card p-3">
    <h4 class="mb-3">Tabel Departments</h4>

    <table class="table table-striped">
        <thead class="table-info">
            <tr>
                <th>No</th>
                <th>Department</th>
                <th>Building</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no=1; while($row = $data->fetch_assoc()): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['name']; ?></td> <td><?= $row['building']; ?></td>

                <td>
                    <a href="index.php?c=Department&a=edit&id=<?= $row['id']; ?>"
                       class="btn btn-warning btn-sm me-2">Edit</a>

                    <a href="index.php?c=Department&a=delete&id=<?= $row['id']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus?');">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include "views/templates/footer.php"; ?>