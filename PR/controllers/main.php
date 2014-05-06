<?php
class main extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
		$this->load->model('Employee');
		$this->load->model('Payroll');
		$this->load->model('Worktime');
	}

	 function index()
	{
		$this->load->view('welcome');
	}
###### �پ�ѡ�ҹ������ ######
	function doEmp()
	{
		$data['employees'] = $this->Employee->getListEmployee();
		$data['salaryTypes'] = $this->Employee->getTypes();
		$data['worktimes'] = $this->Worktime->getListWorktime();
		$this->load->view('list', $data);
	}
/*
###### �پ�ѡ�ҹ����ٻẺ��è����Թ ######
	function doSearchKeyword()
    {
		$keyword = $this->input->post('keyword');
		$data['employees'] = $this->Employee->searchKeyword($keyword);
		$data['salaryTypes'] = $this->Employee->getTypes();
		$this->load->view('list',$data);
    }
###### ���͡��ǧ���ҷ��ӹ��Ҥӹǹ�Թ��͹ ######
	function selectDay()
    {
		$this->load->view('workday');
    }
*/
###### �ӹǹ�Թ��͹ ######
	function paySalary($empId)
    {
		//echo $empId;
		$this->Payroll->calWorkDay($empId);
		//echo $workDay;

		
	}
	
}
?>