<?php 
  include "./classes/Classes.php";
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class=" border-start border-3 ps-3 rounded-1 fw-bold" id="H2_page_login">Signup</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_login">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password">
            </div>
            <div class="mb-3">
                <label for="Password_verify" class="form-label">Password verify</label>
                <input type="password" class="form-control" id="Password_verify">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" id="btn_close" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn" id="btn_signup">Sign up</button>
      </div>
    </div>
  </div>
</div>