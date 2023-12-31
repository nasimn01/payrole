<div class="container mt-3">
  <div class="card border-0 py-2 px-3 shadow">
  <h4>Add New Employee</h4>
  <?php if($this->session->flashdata('msg')){
    echo $this->session->flashdata('msg');
  } ?>
  <?= form_open('employee/store') ?>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="name">Full Name:</label>
          <input type="text" value="<?= set_value('name'); ?>" class="form-control" id="name" name="name">
          <span class="text-danger"><?= form_error('name'); ?></span>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="designation">Designation:</label>
          <input type="text" value="<?= set_value('designation'); ?>" class="form-control" id="designation" name="designation">
          <span class="text-danger"><?= form_error('designation'); ?></span>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="contact">Contact Number:</label>
          <input type="text" value="<?= set_value('contact'); ?>" class="form-control" id="contact" name="contact">
          <span class="text-danger"><?= form_error('contact'); ?></span>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="email">Email:</label>
          <input type="email" value="<?= set_value('email'); ?>" class="form-control" id="email" name="email">
          <span class="text-danger"><?= form_error('email'); ?></span>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="nid">Nation ID:</label>
          <input type="text" value="<?= set_value('nid'); ?>" class="form-control" id="nid" name="nid">
          <span class="text-danger"><?= form_error('nid'); ?></span>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="salary">Salary:</label>
          <input type="text" value="<?= set_value('salary'); ?>" class="form-control" id="salary" name="salary">
          <span class="text-danger"><?= form_error('salary'); ?></span>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="pf">Provident Fund:</label>
          <input type="text" value="<?= set_value('pf'); ?>" class="form-control" id="pf" name="pf">
          <span class="text-danger"><?= form_error('pf'); ?></span>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <label for="hr">House Rant:</label>
          <input type="text" value="<?= set_value('hr'); ?>" class="form-control" id="hr" name="hr">
          <span class="text-danger"><?= form_error('hr'); ?></span>
      </div>
      <div class="col-12 mb-2">
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>
