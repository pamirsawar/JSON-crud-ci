<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<div class="container">

    <h1>ALL USERS</h1>

    <a href="/create" class="btn btn-primary mb-2 pull-right"> Create </a>

    <table id="myTable" class="mt-3">

        <thead>
            <tr>
                <td>Name</td>
                <td>Designation</td>
                <td>Age</td>
                <td>Location</td>
                <td>Joining Date</td>
                <td>Roles</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>

            <?php  foreach($user as $data){ ?>
                <tr>
                    

                    <td><?= $data["name"] ?></td>
                    <td><?= $data['designation']  ?></td>
                    <td><?= $data['age']  ?></td>
                    <td><?= $data['location']  ?></td>
                    <td><?= $data['joining_date']  ?></td>

                    <td>
                        <select class="selectpicker" multiple name="" id="" title="Roles">

                            <?php
                            foreach ($data['roles'] as $role) {

                                echo  " <option selected  disabled> $role </option>";
                            }
                            ?>
                        </select>
                    </td>

                    <td>
                        <select data-id="<?= $data['id'] ?>" class="selectpicker action" title="Choose Action">
                            <option value="edit">Edit</option>
                            <option value="delete">Delete</option>
                        </select>
                    </td>

                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>

</div>

<?= $this->endSection() ?>