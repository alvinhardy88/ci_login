<?php
/**
 *
 */
class Auth extends Ci_Controller
{

  public function login()
  {
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');
    if ($this->form_validation->run() == TRUE) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $this->db->select('*');
      $this->db->from('user');
      $this->db->where(array('username' => $username, 'password' => $password));
      $query = $this->db->get();

      $user = $query->row();

      if ($user->username) {
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success text-center">
        <p>Anda berhasil login</p>
        </div>');

        $_SESSION['user_logged'] = TRUE;
        $_SESSION['username'] = $user->username;
        redirect("user/home", "refresh");
      }else {
        $this->session->set_flashdata('msg',
        '<div class="alert alert-danger text-center">
        <p>Anda gagal login</p>
        </div>');
        refirect("auth/login", "refresh");
      }
    }
    $this->load->view('index');
  }

  public function logout()
  {
    $this->session->set_userdata('username', FALSE);
    $this->session->sess_destroy();
    redirect('auth/login');
  }
}

 ?>
