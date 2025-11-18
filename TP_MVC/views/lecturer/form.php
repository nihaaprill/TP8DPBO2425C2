<?php include "views/templates/header.php"; ?>

<?php
   
    $action_url = isset($lec) 
        ? "index.php?c=Lecturer&a=update" 
        : "index.php?c=Lecturer&a=create";
?>

<div class="card shadow">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">
            <?= isset($lec) ? "Edit Lecturer: " . ($lec['name'] ?? 'N/A') : "Add New Lecturer" ?>
        </h4>
    </div>

    <div class="card-body">

        <form action="<?= $action_url ?>" method="POST">
            
            <?php if (isset($lec)): ?>
                <input type="hidden" name="id" value="<?= $lec['id'] ?>">
            <?php endif; ?>

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" 
                        value="<?= $lec['name'] ?? '' ?>" required> 
            </div>
            
            <div class="mb-3">
                <label>NIDN</label>
                <input type="text" name="nidn" class="form-control" 
                        value="<?= $lec['nidn'] ?? '' ?>" required>
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" 
                        value="<?= $lec['phone'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label>Join Date</label>
                <input type="date" name="join_date" class="form-control" 
                        value="<?= $lec['join_date'] ?? '' ?>">
            </div>
            
            <div class="mb-3">
                <label>Department</label>
                <select name="department_id" class="form-control">
                    <option value="">-- No Department --</option>
                    <?php 
                
                    while ($d = $departments->fetch_assoc()): 
                    ?>
                        <option value="<?= $d['id'] ?>"
                            <?= (isset($lec) && $lec['department_id'] == $d['id']) ? 'selected' : '' ?>>
                            <?= $d['name'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <button id="saveBtn" class="btn btn-primary">Save</button>
            <a href="index.php?c=Lecturer" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
</div>

<?php include "views/templates/footer.php"; ?>