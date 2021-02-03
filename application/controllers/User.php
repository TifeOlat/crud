<?php
    class User extends CI_controller{

        function index(){
            $this->load->model('User_model');
            $users = $this->User_model->all();
            $data = array();
            $data['users'] = $users;
            $this->load->view('list', $data);
        }


        function create(){
            $this->load->model('User_model');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
             // $this->form_validation->set_rules('gender','Gender','required');
            // $this->form_validation->set_rules('dob','Date_of_Birth','');
            $this->form_validation->set_rules('nationalty','Nationalty','required');
            $this->form_validation->set_rules('phone_no','Phone_Number','required');
            $this->form_validation->set_rules('home_adress','Home_Address','required');
            $this->form_validation->set_rules('next_of_kin','Next_of_Kin','required');
            $this->form_validation->set_rules('phone_num','Phone_Number_of_Next_of_Kin','required');
            $this->form_validation->set_rules('address_next_of_kin','Address_of Next_of_Kin','required');

            if($this->form_validation->run() == false) {
                $this->load->view('create');
            }else{
                $formArray = array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('email');
                $formArray['gender'] = $this->input->post('gender');
                $formArray['dob'] = $this->input->post('dob');
                $formArray['nationalty'] = $this->input->post('nationalty');
                $formArray['phone_no'] = $this->input->post('phone_no');
                $formArray['home_adress'] = $this->input->post('home_adress');
                $formArray['next_of_kin'] = $this->input->post('next_of_kin');
                $formArray['phone_num'] = $this->input->post('phone_num');
                $formArray['address_next_of_kin'] = $this->input->post('address_next_of_kin');
                $formArray['created_at'] = date('Y-m-d');
                $this->User_model->create($formArray);
                $this->session->set_flashdata('success', 'Record added successfully!');
                redirect(base_url().'index.php/user/index');

            }
        }
        function edit($userId) {
            $this->load->model('User_model');
            $user = $this->User_model->getUser($userId);
            $data = array();
            $data['user'] = $user;

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
             // $this->form_validation->set_rules('gender','Gender','required');
            // $this->form_validation->set_rules('dob','Date_of_Birth','');
            $this->form_validation->set_rules('nationalty','Nationalty','required');
            $this->form_validation->set_rules('phone_no','Phone_Number','required');
            $this->form_validation->set_rules('home_adress','Home_Address','required');
            $this->form_validation->set_rules('next_of_kin','Next_of_Kin','required');
            $this->form_validation->set_rules('phone_num','Phone_Number_of_Next_of_Kin','required');
            $this->form_validation->set_rules('address_next_of_kin','Address_of Next_of_Kin','required');

            if($this->form_validation->run() == false) {
                $this->load->view('edit',$data);
            }else {
                $formArray = array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('email');
                $formArray['gender'] = $this->input->post('gender');
                $formArray['dob'] = $this->input->post('dob');
                $formArray['nationalty'] = $this->input->post('nationalty');
                $formArray['phone_no'] = $this->input->post('phone_no');
                $formArray['home_adress'] = $this->input->post('home_adress');
                $formArray['next_of_kin'] = $this->input->post('next_of_kin');
                $formArray['phone_num'] = $this->input->post('phone_num');
                $formArray['address_next_of_kin'] = $this->input->post('address_next_of_kin');
                $this->User_model->updateUser($userId,$formArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/user/index');

            }
        }
        function delete($userId) {
            $this->load->model('User_model');
            $user = $this->User_model->getUser($userId);
            if(empty($user)) {
                $this->session->set_flashdata('failure','Record not found in database');
                redirect(base_url().'index.php/user/index');
            }
            $this->User_model->deleteUser($userId);
            $this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/user/index');
        }

    }
?> 