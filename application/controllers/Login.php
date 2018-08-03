<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 02/08/2018
 * Time: 04:31 PM
 */
class Login extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function LoginUser() {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->form_validation->set_error_delimiters('<div class="error-msg">','</div>');

        if ($this->form_validation->run() == false) {

            $this->load->view('login');

        } else {

            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));

            $options = array("cost" => 4);
            $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

            $checkEmail = $this->User_model->checkDuplicate($email);

            if ($checkEmail == 1) {

                $getUserDetails = $this->User_model->userExist($email);

                if (password_verify($password, $getUserDetails['password'])) {

                    unset($getUserDetails['password']);
                    unset($getUserDetails['created']);

                    $this->session->set_userdata($getUserDetails);

                    redirect('login/LoginThankYou', 'refresh');
                } else {

                    $data['errorMsg'] = "Wrong email or password";
                    $this->load->view('login', $data);
                }
            } else {

                $data['errorMsg'] = "User not exist";
                $this->load->view('login', $data);
            }
        }
    }

    function LoginThankYou() {
        if (!isset($this->session->email)) {
            redirect('login', 'refresh');
        }

        $this->load->view('login-thankyou');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}