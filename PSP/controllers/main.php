<?php
/**
#########################
Controller �ʴ���������Фӹǹ�Թ��͹��ҧ�ͧ employee
���Ѳ��: ��� �ѳ�Ե  ����ó���� 552535003
�Ѳ�������: 2014-05-02 14:39 AM
���㹻�Сͺ����
- function index() ����Ѻ�ʴ����˹���á
	�´�ҹ㹨��դ���觷����㹡���Ҥ�� Max, Min, Avg
#########################
**/
class Main extends CI_Controller 
{
	function __construct()
			{
				parent::__construct();
			
			}
	function index()
	{
		$this->load->view('home');
	}
}	
?>