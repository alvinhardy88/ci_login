<?php
/**
 *
 */
class User extends Ci_Controller
{

  public function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['user_logged'])) {
      $this->session->set_flashdata('msg',
      '<div class="alert alert-danger text-center">
      <p>Login terlebih dahulu sebelum ke halaman ini</p>
      </div>');
      refirect("auth/login");
    }
  }

  public function home()
  {
    $this->load->view('home.php');
  }
}

 ?>
