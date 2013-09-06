<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function list_trainee() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->gradesheet();
			$data['records'] = $query;
	
			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;

			$this->load->view('reports/list_trainee_view', $data);
		}
		else {

    		$this->load->view('login_view');
		}	
	  
	}

	function trainee_attendance() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->gradesheet();
			$data['records'] = $query;
	
			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;

			
			$this->load->view('reports/trainee_attendance_view', $data);
		}
		else {
  
    		$this->load->view('login_view' );
		}	
	
	}

	function template() {

		$this->load->library('Pdf');

		// create new PDF document
		$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor($this->session->userdata("first_name"). " ".$this->session->userdata("last_name"));
		$pdf->SetTitle('Gradesheet');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Title".' 001', $this->session->userdata("first_name"). " ". $this->session->userdata("last_name") , array(0,64,255), array(0,64,128));
		$pdf->setFooterData(array(0,64,0), array(0,64,128));

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
		    require_once(dirname(__FILE__).'/lang/eng.php');
		    $pdf->setLanguageArray($l);
		}

		// ---------------------------------------------------------

		// set default font subsetting mode
		$pdf->setFontSubsetting(true);

		// Set font
		// dejavusans is a UTF-8 Unicode font, if you only need to
		// print standard ASCII chars, you can use core fonts like
		// helvetica or times to reduce file size.
		$pdf->SetFont('dejavusans', '', 14, '', true);

		// Add a page
		// This method has several options, check the source code documentation for more information.
		$pdf->AddPage();

		// set text shadow effect
		$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

		// Set some content to print
		$a = "aw";
		$html = '<h1 style="color:#555;text-align:center;font-weight:bold;font-size:60pt;">'.$a.'</h1>';

		// Print text using writeHTMLCell()
		//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// ---------------------------------------------------------
		// NON-BREAKING ROWS (nobr="true")

		$output_string = "<h1 class=''>Gradesheet : </h1>";
	    $output_string .= "  <table  style=\"font-size:8pt;\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\"> 
	                        <thead>
	                        <tr>
	                            <th class='center'>
	                                Training ID
	                            </th>
	                            <th class='center'> Name
	                            </th>
	                            <th class='center'>
	                                Scores
	                            </th>
	                            <th  class='center'>
	                                Status
	                            </th>
	                        </tr> 
	                        </thead>
	                        
	                     ";
	    $output_string .= "<tbody>";

		$this->load->model('report_model');
		$query = $this->report_model->gradesheet();
		$data['records'] = $query;

	     foreach ($data['records'] as $row){ 
	     //   if(isset($records)) : foreach($records as $row) :
	     $output_string .=  "<tr> 
	                            <td width='200px' height='10px'> $row->trainee_id</td>
	                            <td width='450px' height=''> $row->last_name, $row->first_name $row->middle_name</td>
	                            <td width='50px' class='center'> $row->scores/$row->over</td>
	                            <td width='30px' class='center'> $row->status</td>
	                        </tr>";
	                      
	    //$output_string .= "Record $row->last_name";
		 }   
	    $output_string .= "</tbody></table>";       
		$pdf->writeHTML( $output_string, true, false, false, false, '');
		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.
		$pdf->Output('files/printables/example_001.pdf', 'FI');

		//============================================================+
		// END OF FILE
		//============================================================+
	}
	function template2() {

		$this->load->library('Pdf');

		// create new PDF document
		$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor($this->session->userdata("first_name"). " ".$this->session->userdata("last_name"));
		$pdf->SetTitle('Deployment');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Title".' 001', $this->session->userdata("first_name"). " ". $this->session->userdata("last_name") , array(0,64,255), array(0,64,128));
		$pdf->setFooterData(array(0,64,0), array(0,64,128));

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
		    require_once(dirname(__FILE__).'/lang/eng.php');
		    $pdf->setLanguageArray($l);
		}

		// ---------------------------------------------------------

		// set default font subsetting mode
		$pdf->setFontSubsetting(true);

		// Set font
		// dejavusans is a UTF-8 Unicode font, if you only need to
		// print standard ASCII chars, you can use core fonts like
		// helvetica or times to reduce file size.
		$pdf->SetFont('dejavusans', '', 14, '', true);

		// Add a page
		// This method has several options, check the source code documentation for more information.
		$pdf->AddPage('L');

		// set text shadow effect
		$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

		// Set some content to print
		$a = "aw";
		$html = '<h1 style="color:#555;text-align:center;font-weight:bold;font-size:60pt;">'.$a.'</h1>';

		// Print text using writeHTMLCell()
		//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// ---------------------------------------------------------
		// NON-BREAKING ROWS (nobr="true")

		 $output_string = "<h1 class=''>List of Trainee for Deployment:</h1>";
            $output_string .= "  <table style=\"font-size:8pt;\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\">  
                                <thead>
								<tr>
									
									<th class=\"center\">
										Training ID
									</th>
									<th class=\"center\">
										 Name
									</th>
									<th class=\"center\">
										Birthdate
									</th>
									<th class=\"center\">													
										Address 
									</th>
									<th class=\"center\">
										City
									</th>
									<th class=\"center\">
										Province
									</th>
									<th class=\"center\">
										Gender
									</th>
									<th class=\"center\">
										Phone
									</th>
									<th class=\"center\">
										Email
									</th>
									
								</tr>
								</thead>
                                
                             ";
            $output_string .= "<tbody>";

		$this->load->model('report_model');
		$query = $this->report_model->list_trainee();
		$data['records'] = $query;

	    foreach ($data['records'] as $row){ 
	     //   if(isset($records)) : foreach($records as $row) :
	  	$output_string .="<tr> 
                        <td> $row->trainee_id</td>
						<td> $row->last_name, $row->first_name $row->middle_name</td>
						<td> $row->birthdate</td>
						<td> $row->present_address</td>
						<td> $row->present_city</td>		
						<td> $row->present_province</td>												
						<td> $row->gender</td>
						<td> $row->mobile_no</td>
						<td> $row->email</td>	
                        </tr>  
                       ";
	           
	            		}
        $output_string .= " </tbody></table>";    
		$pdf->writeHTML( $output_string, true, false, false, false, '');
		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.
		$pdf->Output('example_001.pdf', 'I');

		//============================================================+
		// END OF FILE
		//============================================================+
	}
	function template3() {

	$this->load->library('Pdf');

	// create new PDF document
	$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor($this->session->userdata("first_name"). " ".$this->session->userdata("last_name"));
	$pdf->SetTitle('Attendance records');
	$pdf->SetSubject('TCPDF Tutorial');
	$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

	// set default header data
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Title".' 001', $this->session->userdata("first_name"). " ". $this->session->userdata("last_name") , array(0,64,255), array(0,64,128));
	$pdf->setFooterData(array(0,64,0), array(0,64,128));

	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set some language-dependent strings (optional)
	if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	    require_once(dirname(__FILE__).'/lang/eng.php');
	    $pdf->setLanguageArray($l);
	}

	// ---------------------------------------------------------

	// set default font subsetting mode
	$pdf->setFontSubsetting(true);

	// Set font
	// dejavusans is a UTF-8 Unicode font, if you only need to
	// print standard ASCII chars, you can use core fonts like
	// helvetica or times to reduce file size.
	$pdf->SetFont('dejavusans', '', 14, '', true);

	// Add a page
	// This method has several options, check the source code documentation for more information.
	$pdf->AddPage();

	// set text shadow effect
	$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

	// Set some content to print
	$a = "aw";
	$html = '<h1 style="color:#555;text-align:center;font-weight:bold;font-size:60pt;">'.$a.'</h1>';

	// Print text using writeHTMLCell()
	//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

	// ---------------------------------------------------------
	// NON-BREAKING ROWS (nobr="true")

	 $output_string = "<h1 class=''>Attendance :</h1>";
        $output_string .= "  <table style=\"font-size:8pt;\"  border=\"1\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\">  
                            <thead>
								<tr>							
									<th>
										Training ID
									</th>
									<th>
										Batch ID
									</th>
									<th >
										Name
									</th>
									<th >							
										No. of Training days 
									</th>
									<th >
										No. of days attended
									</th>	
								</tr>
								</thead>
                            
                         ";
        $output_string .= "<tbody>";

	$this->load->model('report_model');
	$query = $this->report_model->trainee_attendance();
	$data['records'] = $query;

     foreach ($data['records'] as $row){ 
     //   if(isset($records)) : foreach($records as $row) :
     $output_string .=  "<tr>
						<td>$row->trainee_id</td>
					 
						<td>$row->batch_control_no</td>
							<td>$row->last_name, $row->first_name $row->middle_name</td>
						<td class=\"center\">$row->training_days</td>
						<td class=\"center\">$row->present_days</td>

						</tr>";
                      
    //$output_string .= "Record $row->last_name";
		 }   
    $output_string .= "<tbody></table>";
			
             
	$pdf->writeHTML( $output_string, true, false, false, false, '');
	// Close and output PDF document
	// This method has several options, check the source code documentation for more information.
	$pdf->Output('example_001.pdf', 'I');

	//============================================================+
	// END OF FILE
	//============================================================+
	}


	function gradesheet() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->gradesheet();
			$data['records'] = $query;
	
			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;

			$this->load->view('reports/gradesheet_view', $data);



		}
		else {
  
    		$this->load->view('login_view');
		}
	
	}
	public function gradesheetByBatch(){

        $batch=$this->input->post('batch');

       // $batch = "TS13-ASB-001";
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("last_name", "asc"); 
        $query = $this->db->get();
        if($query->num_rows > 0){
            $header = false;    
            //$output_string = "<div class=\"box-content\">";
              
          
                $output_string = "<h1 class=''>Gradesheet : $batch</h1>";
                $output_string .= "  <table class='table table-striped table-bordered'> 
                                    <thead>
                                    <tr>
                                        <th class='center'>
                                            Training ID
                                        </th>
                                        <th class='center'> Name
                                        </th>
                                        <th class='center'>
                                            Scores
                                        </th>
                                        <th  class='center'>
                                            Status
                                        </th>
                                    </tr> 
                                    </thead>
                                    
                                 ";
                $output_string .= " 
                                    <tbody>";
                 foreach ($query->result() as $row){ 
                      
                 $output_string .=  "<tr> 
                                        <td width='200px' height='10px'> $row->trainee_id</td>
                                        <td width='450px' height=''> $row->last_name, $row->first_name $row->middle_name</td>
                                        <td width='50px' class='center'> $row->scores/$row->over</td>
                                        <td width='30px' class='center'> $row->status</td>
                                    </tr>";
                                  
                //$output_string .= "Record $row->last_name";
           		 }   
                $output_string .= "</tbody></table>";                 

       
          
        }
        else{
            $output_string = '"There are no results"';
            if($batch == null)
            {
                $output_string .="<br>NULL  BATCH";
            }
        } 
         
        echo json_encode($output_string);
    }

    public function traineeByBatch(){

        $batch=$this->input->post('batch');

       	$this->db->select('*');    
        $this->db->from('hris');
        $this->db->where('hris.batch_control_no',$batch);
        $query = $this->db->get();
        //return $query->result();
        if($query->num_rows > 0){
              
        	
            $output_string = "<h1 class=''>List of Trainee: $batch</h1>";
            $output_string .= "  <table class='table table-striped table-bordered'> 
                                <thead>
								<tr>
									
									<th class=\"center\">
										Training ID
									</th>
									<th class=\"center\">
										 Name
									</th>
									<th class=\"center\">
										Birthdate
									</th>
									<th class=\"center\">													
										Address 
									</th>
									<th class=\"center\">
										City
									</th>
									<th class=\"center\">
										Province
									</th>
									<th class=\"center\">
										Gender
									</th>
									<th class=\"center\">
										Phone
									</th>
									<th class=\"center\">
										Email
									</th>
									
								</tr>
								</thead>
                                
                             ";
            $output_string .= "<tbody>";
			
            foreach ($query->result() as $row){
	            $output_string .="<tr> 
                                    <td width=\"150px\" height=\"10px\"> $row->trainee_id</td>
									<td width=\"200px\" height=\"10px\"> $row->last_name, $row->first_name $row->middle_name</td>
									<td width=\"100px\" height=\"10px\"> $row->birthdate</td>
									<td> $row->present_address</td>
									<td> $row->present_city</td>		
									<td> $row->present_province</td>												
									<td width=\"50px\" height=\"1px\"> $row->gender</td>
									<td> $row->mobile_no</td>
									<td> $row->email</td>	
	                                </tr>  
	                               ";
	           
	            		}
	            $output_string .= " </tbody></table>";
     
        }
        else{
            $output_string = '"There are no results"';
            if($batch == null)
            {
                $output_string .="<br>NULL  BATCH";
            }
        } 
         
        echo json_encode($output_string);
    }

     public function traineeAttendanceByBatch(){
     	$batch=$this->input->post('batch');

       	$this->db->select('*');
        $this->db->from('hris');
        $this->db->join('trainee_attendance', 'hris.trainee_id = trainee_attendance.training_id', 'left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();

        if($query->num_rows > 0){

            $output_string = "<h1 class=''>List of Trainee: $batch</h1>";
            $output_string .= "  <table class='table table-striped table-bordered'> 
                                <thead>
								<tr>							
									<th>
										Training ID
									</th>
									<th>
										Batch ID
									</th>
									<th >
										Name
									</th>
									<th >							
										No. of Training days 
									</th>
									<th >
										No. of days attended
									</th>	
								</tr>
								</thead>
                                
                             ";
            foreach ($query->result() as $row){ 
                  
             $output_string .=  "<tr>
								<td>$row->trainee_id</td>
							 
								<td>$row->batch_control_no</td>
									<td>$row->last_name, $row->first_name $row->middle_name</td>
								<td class=\"center\">$row->training_days</td>
								<td class=\"center\">$row->present_days</td>

								</tr>";
                              
            //$output_string .= "Record $row->last_name";
       		 }   
            $output_string .= "<tbody></table>";
			
          
     
        }
        else{
            $output_string = '"There are no results"';
            if($batch == null)
            {
                $output_string .="<br>NULL  BATCH";
            }
        } 
         
        echo json_encode($output_string);
    }
	
	
	
}

/* End of file reports.php */
/* Location: ./application/controllers/reports.php */