<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<div class="container">

<div class="row">

<h1>Create Record</h1>


<div class="col-4">
    <div>
        <a class="btn btn-primary mr-0 btn-sm" href="/"> back </a>
    </div>
    
    <form action="<?php echo base_url()?>/home/save" method="post">
        
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="Name">
        </div>

        <div class="mb-3">
            <label for="Designation" class="form-label">Designation</label>
            <input type="text" name="designation" class="form-control" id="Designation">
        </div>

        <div class="mb-3">
            <label for="Age" class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="Age">
        </div>

        <div class="mb-3">
            <label for="Location" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" id="Location">
        </div>

        <div class="mb-3">
            <label for="Joining_Date" class="form-label">Joining Date</label>
            <input type="date" name="joining_date" class="form-control" id="Joining_Date">
        </div>

        <div class="mb-3">
            <label for="Roles" class="form-label">Roles</label> <br>
            <select class="selectpicker" name="roles" multiple id="edit-roles">

                <option value="admin" >admin</option>

                <option value="sales" >sales</option>

                <option value="reporting" >reporting</option>

                <option value="development">development</option>

            </select>
        </div>

        <input type="hidden" name="roles" id="roles">
        <input type="submit" name="create" class="btn btn-primary btn-md pull-right" value="Update">

    </form>
</div>
</div>



</div>

<?=  $this->endSection() ?>