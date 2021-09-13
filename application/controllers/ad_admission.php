<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ad_admission  extends CI_Controller {
	 
	function __construct() 
	{
		parent ::__construct();
		$this->load->library('upload');
		$this->load->model("Dbcommon","admin");
		$this->load->database();
		$this->load->library('session');
		Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
		Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
		Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed

	}	

	public function ad_admission()
	{
        $display['all_courses'] = $this->admin->view_all("cer_course_list");
		$display['all_branches'] = $this->admin->view_all("branch");
		$this->load->view('ad_admission_view',$display);
	}
    
    public function ad_admission_ad()
    {
		$this->load->view('ad_form');	
		    $data['depart']=$this->input->post('depart');
			$data['regno']=$this->input->post('regno');
			$data['sname']=$this->input->post('sname');
			$data['gr_id']=$this->input->post('gr_id');
			$data['con_no']=$this->input->post('con_no');
			$data['course']=$this->input->post('course');
			$data['branch']=$this->input->post('branch');
			$data['start_date']=$this->input->post('start_date');
			$data['duration']=$this->input->post('duration');
			$data['end_date']=$this->input->post('end_date');
			$data['issue_date']=$this->input->post('issue_date');
			$data['grade']=$this->input->post('grade');
			$data['status']=$this->input->post('status');
			$data['type']=$this->input->post('type');
			$result = $this->db->insert('cer_admission_list',$data);
			if($result)
    		{
				$this->session->set_flashdata('message', 'Successfully Added.');
    		}
    		else{    		
				$this->session->set_flashdata('message','Failed To inserted Record');
    		}
			redirect('ad_admission/ad_form');
    }

    public function basic_table()
	{
		$display['all_adms'] = $this->admin->view_all("cer_admission_list");
		$display['all_depart'] = $this->admin->view_all("department");
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$this->load->view('basic_table',$display);
	}

    public function ask_confirmation()
	{
		$display['all_adms'] = $this->admin->view_all_by_status("cer_admission_list");
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$this->load->view('ask_confirmation',$display);
	}

	public function updateStatus($id='')
	{
		// $query  = $this->admin->update_status($id);
		if($this->admin->update_status($id))
		{
			$this->session->set_flashdata('Successfully','Status is Successfully Updated');
		}
		else{    		
			   $this->session->set_flashdata('Successfully','Failed To update status ');
		}
		$display['all_adms'] = $this->admin->view_all("cer_admission_list");
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$display['all_adms'] = $this->admin->view_all_by_status_Aprroved("cer_admission_list");
		$this->load->view('basic_table',$display);
	}

	
	public function filter_by_status()
	{
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$display['all_adms'] = $this->admin->view_all_by_status_Aprroved("cer_admission_list");
		$this->load->view('basic_table',$display);
	}

	public function filter_by_status_panding()
	{
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$display['all_adms'] = $this->admin->view_all_by_status_panding("cer_admission_list");
		$this->load->view('basic_table',$display);
	}	

	public function count_aprooved()
	{
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$this->load->view('basic_table',$display);
	} 

	public function ad_form()
	{
        $display['all_courses'] = $this->admin->view_all("cer_course_list");
		$display['all_depart'] = $this->admin->view_all("department");
		$display['all_branches'] = $this->admin->view_all("branch");
		$display['years'] = range(1900, strftime("%Y", time()));
		$this->load->view('ad_form',$display);
	}

	public function Print($id='')
	{
		$display['all_adms_by_id'] = $this->admin->select_data("cer_admission_list","ad_id",$id);
		$this->load->view('print',$display);
	}
	public function Print_fd($id='')
	{
		$display['all_adms_by_id'] = $this->admin->select_data("cer_admission_list","ad_id",$id);
		$this->load->view('print-fd',$display);
	}
	public function Print_old($id='')
	{
		$display['all_adms_by_id'] = $this->admin->select_data("cer_admission_list","ad_id",$id);
		$this->load->view('print_old',$display);
	}

	public function create_regno()
	{
		$this->load->view('create_regno');
	}

	public function ad_complain_new()
	{	
		$display['all_place'] = $this->admin->view_all("place_type");
        $display['all_branches'] = $this->admin->view_all("branchs");
        $display['all_product_type'] = $this->admin->view_all("product_type");
        $display['all_product'] = $this->admin->view_all_desc("product", "product_id");
		$this->load->view('ad_complain_new',$display);
	}

	public function course_add()
	{	
		$display['all_courses'] = $this->admin->view_all_desc("cer_course_list","id");
		$this->load->view('course_add',$display);
	}


	public function branchWisePlace() {
		$select_place = $this->admin->select_data("place_type", "place_type_id", $this->input->post('place_type_id'));
		$select_product_type = $this->admin->select_data("product_type", "product_type_id", $this->input->post('product_type_id'));
		$select_product = $this->admin->select_data("product", "product_id", $this->input->post('list_property'));
        $id = $this->input->post('branch_id');
        $all_place = $this->admin->filter_data("place_type", "branch_id", $id);
        $all_branches = $this->admin->view_all("branchs");			
?>
    		 <select name="place_type_id" id="place_type_id" class="form-control" required>
                        <option value="">Select Place</option>
                        <?php foreach ($all_place as $val) { ?>
                            <option <?php if (@$select_place->place_type_id == $val->place_type_id) {
                echo "selected";
            } ?> value="<?php echo $val->place_type_id; ?>"><?php echo $val->place_name; ?> - <?php foreach ($all_branches as $row) {
                if ($row->branch_id == $val->branch_id) {
                    echo $row->branch_name;
                }
            } ?></option>
                        <?php
        } ?>
               </select>      
        <?php
    }
	public function productWise() {
        $id = $this->input->post('product_type_id');
        $branch_id = $this->input->post('branch_id');
        $place_id = $this->input->post('place_id');
        echo $list_property = $this->admin->get_list_of_property("product", $id, $branch_id, $place_id);
    }
	public function demo_data() {
        $id = $this->input->post('d_id');
        $data = $this->admin->select_data('product', 'product_id', $id);
        echo $data->product_decription;
    }
	public function ad_course()
	{
			$data = $this->input->post();		
			$reco = array('name	' => $data['name'] , 'duration' =>$data['duration']);
			if ($this->input->post('id'))
			{
			$id = $this->input->post('id');
			// print_r($this->input->post('id'));
			// die();
			$query = $this->admin->update_record('cer_course_list', $data, 'id', $id);
			// print_r($query);
			// die();
            if($query)
			{
				$recp["all_record"] = array('status' => 2, "msg" => "HI! This Record Successfully updated");
            echo json_encode($recp); 
			}else
			{
				$recp["all_record"] = array('status' => 3, "msg" => "Try again");
            echo json_encode($recp); 
			}
		} else {
			$query = $this->db->insert("cer_course_list", $reco);
			// print_r($query);
			// die();
            if($query)
			{
				$recp["all_record"] = array('status' => 1, "msg" => "HI! This Record Successfully inserted");
            echo json_encode($recp); 
			}else
			{
				$recp["all_record"] = array('status' =>3, "msg" => "Try again");
            	echo json_encode($recp); 
			}
		}

	}

	public function get_record_course()
    {
        $id = $this->input->post('id');
        $record['single_record'] = $this->admin->get_reco('cer_course_list', 'id', $id);
		// print_r($record);
		// die();
        echo json_encode($record);
    }

	public function delete_course() {
        $table = $this->input->post('table');
        $field = $this->input->post('field');
        $id = $this->input->post('id');
        $query = $this->admin->delete_record($table, $field, $id);
        if ($query) {
			$recp["all_record"] = array('status' => 1, "msg" => "Record is Deleted");
            	echo json_encode($recp);
        } else {
			$recp["all_record"] = array('status' => 2, "msg" => "Try again");
			echo json_encode($recp);
        }
    }

	public function Multiple_rowremove()
    {
        $data = $this->input->post();
              for ($i = 0; $i < sizeof($data['ids']); $i++) {
            $result = $this->admin->delete_record('cer_course_list', 'id', $data['ids'][$i]);

            if ($result) {
                $status_check = 1; 
            } else {
                $status_check = 0;
            }
        }
        if ($status_check == 1) {
            $record = array('status' => 1, "msg" => "These Records Deleted");
            $recp['all_record'] = $record;
            echo json_encode($recp);
        } else {
            $recp['all_record'] = array('status' => 2, "msg" => "Something Wrong");
            echo json_encode($recp);
        }
    }

	public function course_table()
	{	
		$display['all_courses'] = $this->admin->view_all_desc("cer_course_list","id");
		$this->load->view('course_table',$display);
	}
 
	public function all_deta()
	{
		$data = $this->input->post();
		$id = $this->input->post('gr_id');
		$display['single'] = $this->admin->get_reco("eduzilladata","gr_id",$id);
		echo json_encode($display);
	}
	public function all_co()
	{
		$data = $this->input->post();
		$name = $this->input->post('name');
		$display['all_courses'] = $this->admin->get_reco("cer_course_list","name" ,$name);
		echo json_encode($display);
	}

	public function getDep()
	{
		$data = $this->input->post();
		$department_name = $this->input->post('department_name');
		$display['	'] = $this->admin->get_reco("department","department_name" ,$department_name);
		echo json_encode($display);
	}


}
