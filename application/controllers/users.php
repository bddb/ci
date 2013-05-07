<?php 
class Users extends CI_Controller {
	public function index($id = null){
		$this->load->model('user_model' , 'user');
		if ($id == null) {
			$data['users'] = $this->user->all();
		}else{
			$data['users'] = $this->user->get_user($id) ;
		}

		$data['id'] = $id ;
		$this->data["content"] = $this->load->view("users/list", $data, true);
		$this->load->view("layout/index", $this->data);
	}

	public function add(){
		$this->data["content"] = $this->load->view("users/add" , null, true);
		$this->load->view("layout/index", $this->data);
	}

	public function created(){
		$data = $this->input->post();
		$this->load->model('User_model', 'user');
		$res = $this->user->create($data);
		if ($res){
			redirect("users/index");
		}
	}
	
	public function edit(){
		$this->data["content"] = $this->load->view("users/edit" , null, true);
		$this->load->view("layout/index", $this->data);
	}
	
	public function first(){
		$this->data["content"] = $this->load->view("users/index" , null, true);
		$this->load->view("layout/index", $this->data);
	}
	
	public function update(){
		$this->load->model('User_model', 'user');
		$res = $this->user->update($_POST['id'], $_POST);
		if ($res){
			redirect("users/index");
		}
	}
	
	public function delete(){
		$this->data["content"] = $this->load->view("users/delete" , null, true);
		$this->load->view("layout/index", $this->data);

	}
	public function deleted(){
		$data = $this->input->post();
		$id = $data['deleteid'];
		$this->load->model('User_model', 'user');
		$res = $this->user->delete($id);
		if ($res){
			redirect("users/index");
		}
	}
}