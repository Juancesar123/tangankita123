<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('tangankita');
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	

	}
public function index(){
	$this->load->view("home");
}
public function artikel(){
$this->load->view("artikel");
}
public function viewartikel(){
$q = $this->db->get('artikel');
echo json_encode($q->result_array());
}
public function insertartikel(){
$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambarartikel/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('foto');
		
			$extendtion = explode(".", $_FILES['foto']['name']);
			$foto_path = "gambarartikel/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
   $name = $_FILES['foto']['name'];
   $val=array(
   "judul" => $this->input->post("judul"),
   "artikel" => $this->input->post("artikel"),
   "gambar" => $foto_path
   );
   $this->db->insert("artikel",$val);
}
public function hapusartikel(){
$data = (array)json_decode(file_get_contents('php://input'));
for($i=0;$i<count($data["id"]->artikelku);$i++){
$this->db->where("id",$data["id"]->artikelku[$i]);
$this->db->delete("artikel");
}
}
public function editartikel(){
$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambarartikel/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('foto');
		
			$extendtion = explode(".", $_FILES['foto']['name']);
			$foto_path = "gambarartikel/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
   $name = $_FILES['foto']['name'];
   $val=array(
   "judul" => $this->input->post("judul"),
   "artikel" => $this->input->post("artikel"),
   "gambar" => $foto_path
   );
   $this->db->where("id",$this->input->post("id"));
   $this->db->update("artikel",$val);

}
public function event(){
$this->load->view("event");
}
public function lihatevent(){
$q = $this->db->get('event');
echo json_encode($q->result_array());
}
public function insertevent(){
	$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambarevent/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('foto');
		
			$extendtion = explode(".", $_FILES['foto']['name']);
			$foto_path = "gambarevent/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
   $name = $_FILES['foto']['name'];
   $val=array(
   "judul" => $this->input->post("judul"),
   "event" => $this->input->post("event"),
   "gambar" => $foto_path
   );
   $this->db->insert("event",$val);
}
public function editevent(){
	$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'gambarevent/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('foto');
		
			$extendtion = explode(".", $_FILES['foto']['name']);
			$foto_path = "gambarevent/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
   $name = $_FILES['foto']['name'];
   $val=array(
   "judul" => $this->input->post("judul"),
   "event" => $this->input->post("event"),
   "gambar" => $foto_path
   );
   $this->db->where("id",$this->input->post("id"));
   $this->db->update("event",$val);
}
public function hapusevent(){
	$data = (array)json_decode(file_get_contents('php://input'));
for($i=0;$i<count($data["id"]->eventku);$i++){
$this->db->where("id",$data["id"]->eventku[$i]);
$this->db->delete("event");
}
}
public function aboutus(){
	$this->load->view("editor");
	
}
public function ambiledit(){
$q = $this->db->get('edit');
echo json_encode($q->result_array());
}
public function ambileditor(){
$q = $this->tangankita->lihat_editor();
echo json_encode($q);	
}
public function inserteditor(){
	$data = (array)json_decode(file_get_contents('php://input'));
	$val = array(
	"id_edit"=>$data["type"],
	"editor"=>$data["editor"]
	);
	$this->db->insert("editor",$val);
}
public function editeditor(){
	$data = (array)json_decode(file_get_contents('php://input'));
	$val = array(
	"id_edit"=>$data["type"],
	"editor"=>$data["editor"]
	);
	$this->db->where("id",$data["id"]);
	$this->db->update("editor",$val);
}
public function hapuseditor(){
	$data = (array)json_decode(file_get_contents('php://input'));
	print_r($data["id"]->aboutus[0]);
for($i=0;$i<count($data["id"]->aboutus);$i++){
$this->db->where("id",$data["id"]->aboutus[$i]);
$this->db->delete("editor");
}	
}
public function lihatuser(){
	$q=$this->tangankita->lihat_user();
	echo json_encode($q);
	
}
public function managementuser(){
	$this->load->view("managementuser");
}
public function insertuser(){
	$data = (array)json_decode(file_get_contents('php://input'));
	 $email = $data["email"];
	 $password = $data["password"];
	 $username = $data["firstname"];
	 $additional_data = array(
                'first_name' =>$data["firstname"],
                'last_name'  => $data["lastname"]
				
            );
				$group = array('1');
				$this->ion_auth->register( $username,$password,$email,$additional_data,$group);
}
public function hapususer(){
	$data = (array)json_decode(file_get_contents('php://input'));
	for($i=0;$i<count($data["id"]->manageuser);$i++){
$this->db->where("id",$data["id"]->manageuser[$i]);
$this->db->delete("users");
}
}
public function slider(){
	$this->load->view("slider");
}
public function lihatslider(){
	$q = $this->tangankita->lihat_slider();
	echo json_encode($q);
}
public function insertslider(){
	$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'slider/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('foto');
		
			$extendtion = explode(".", $_FILES['foto']['name']);
			$foto_path = "slider/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
   $name = $_FILES['foto']['name'];
   $val=array(
   "alt" => $this->input->post("judul"),
   "gambar" => $foto_path
   );
   $this->db->insert("slider",$val);
}
public function editslider(){
	$this->load->helper('date');
		$date = date('Y-m-d H:i:s');
		$time = date('YmdHis');
		$config['upload_path']          = 'slider/';
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
		$config['file_name'] 			= "F".$time;
		
		$this->load->library('upload', $config);
		 $this->upload->do_upload('foto');
		
			$extendtion = explode(".", $_FILES['foto']['name']);
			$foto_path = "slider/F".$time.".".$extendtion[count($extendtion)-1];
                				//Simpan data ke mysql
   $name = $_FILES['foto']['name'];
   $val=array(
   "alt" => $this->input->post("judul"),
   "gambar" => $foto_path
   );
   $this->db->where("id",$this->input->post("id"));
   $this->db->update("slider",$val);
}
public function hapusslider(){
$data = (array)json_decode(file_get_contents('php://input'));
	for($i=0;$i<count($data["id"]->sliderku);$i++){
		unlink($data["id"]->sliderku[$i]->gambar);
$this->db->where("id",$data["id"]->sliderku[$i]->id);
$this->db->delete("slider");
}	
}
public function navbar(){
	$this->load->view("navbar");
}
public function halamanmuka(){
	 
    
	$data["event"] = $this->tangankita->lihat_event();
	$data["raw_data"]= $this->tangankita->lihat_slider();
	$this->load->view("web/index",$data);
}
};

?>