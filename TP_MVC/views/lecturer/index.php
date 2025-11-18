<?php include "views/templates/header.php"; ?>

<div class="card p-4 mb-4">
    <h4 class="mb-3">Tambah Lecturer</h4>

    <form action="index.php?c=Lecturer&a=create" method="POST">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control mb-3" required>

        <label class="form-label">NIDN</label>
        <input type="text" name="nidn" class="form-control mb-3" required>

        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control mb-3" required>

        <label class="form-label">Department</label>
        <select name="department_id" class="form-select mb-3">
            <option value="">-- No Department --</option>

            <?php foreach($departments as $d): ?>
                <option value="<?= $d['id']; ?>"><?= $d['name']; ?></option>
            <?php endforeach; ?>
        </select>

        <button class="btn btn-primary">Add</button>
    </form>
</div>


<div class="card p-3">
    <h4 class="mb-3">Tabel Lecturers</h4>

    <table class="table table-striped">
        <thead class="table-info">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>NIDN</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php $no=1; while($row = $data->fetch_assoc()): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['nidn']; ?></td>
                <td><?= $row['phone']; ?></td>
                <td><?= $row['dept_name'] ?: "-"; ?></td>

                <td>
                    <a class="btn btn-warning btn-sm me-2"
                       href="index.php?c=Lecturer&a=edit&id=<?= $row['id']; ?>">Edit</a>

                    <a class="btn btn-danger btn-sm"
                       href="index.php?c=Lecturer&a=delete&id=<?= $row['id']; ?>"
                       onclick="return confirm('Yakin?');">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include "views/templates/footer.php"; ?>
