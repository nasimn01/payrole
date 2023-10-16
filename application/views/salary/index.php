
<div class="container">
    <div class="card shadow mt-2 px-3 py-2">
      <h4>Salary Table</h4>
      <div class="table-responsive text-nowrap">
        <a href="<?= base_url() ?>salary/add" class="btn btn-primary float-end m-2">Add New</a>
          <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          } ?>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Employee_id</th>
                  <th>Basic</th>
                  <th>PF</th>
                  <th>HR</th>
                  <th>Deduction </th>
                  <th>Payment</th>
                  <th>Month</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if($salary){
                    foreach($salary as $i=>$s){
                ?>
                  <tr>
                      <td><?= ++$i ?></td>
                      <td><?= $s->name ?></td>
                      <td><?= $s->salary ?></td>
                      <td><?= $s->pf ?></td>
                      <td><?= $s->hr ?></td>
                      <td><?= $s->deduction ?></td>
                      <td><?= $s->payment ?></td>
                      <td><?= $s->year."/".$s->month ?></td>
                      <td>
                          <a href="<?= base_url() ?>salary/edit/<?= $s->id ?>" class="btn btn-info">Edit</a>
                          <a onclick="return confirm('Are you sure to delete this data?')" href="<?= base_url() ?>salary/delete/<?= $s->id ?>" class="btn btn-danger">Delete</a>
                      </td>
                  </tr>
                <?php } } ?>
              </tbody>
          </table>
      </div>
    </div>
</div>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>