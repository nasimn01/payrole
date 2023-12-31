<div class="container">
  <div class="card border-0 mt-2 py-2 px-3">
    <h4>Employee List</h4>
    <div class="table-responsive text-nowrap">
        <a href="<?= base_url() ?>employee/add" class="btn btn-primary float-end">Add New</a>
        <div class="ps-3">
          <?php if($this->session->flashdata('msg')){
          echo $this->session->flashdata('msg');
          } ?>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Title</th>
              <th>Contact</th>
              <th>Email</th>
              <th>National ID</th>
              <th>Salary</th>
              <th>PF</th>
              <th>HR</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if($employee){
                foreach($employee as $i=>$e){
            ?>
            <tr>
                <td><?= ++$i ?></td>
                <td><?= $e->name ?></td>
                <td><?= $e->designation ?></td>
                <td><?= $e->contact ?></td>
                <td><?= $e->email ?></td>
                <td><?= $e->nid ?></td>
                <td><?= $e->salary ?></td>
                <td><?= $e->pf ?></td>
                <td><?= $e->hr ?></td>
                <td>
                    <a href="<?= base_url() ?>employee/edit/<?= $e->id ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Are you sure?')" href="<?= base_url() ?>employee/delete/<?= $e->id ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } } ?>
          </tbody>
        </table>
    </div>
  </div>
</div>
<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>