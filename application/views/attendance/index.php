
<div class="content mt-3 mx-4">
  <div class="card border-0 px-3 py-2">
    <div class="table-responsive text-nowrap p-2">
      <a href="<?= base_url() ?>attendance/add" class="btn btn-primary float-end">Add New</a>
      <div class="container mt-3">
          <h2>Attendance List</h2>
          <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          } ?>
        <div class="row">
          <div class="col-4">
            <div class="mb-3 mt-3">
              <label for="att_date">Date:</label>
              <input type="date" value="<?= date('Y-m-d') ?>" class="form-control" id="att_date">
            </div>
          </div>
          <div class="col-4">
            <div class="mt-4 pt-3">
              <button type="button" class="btn btn-primary" onclick="emplist()">Get Employees</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12" id="emp_data"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function emplist(){
    let att_date=$('#att_date').val();
    $.ajax({
      dataType: "json",
      url: '<?= base_url("attendance/get_empdata_list") ?>',
      data: {att_date:att_date},
      success: function(d){
        $('#emp_data').html(d);
      }
    });
  }
  
</script>