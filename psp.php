<?php
/*#####################################################################
*
* By :: Tanapat Limsombat 552535002
* Responsibility :: Model
* Create Date :: 29/04/2557
*
* Function :: 1.getFile() - read txt file and send array to controller
*			  2.browse() - find txt file read & convert to array
*
*
*
######################################################################*/

class Psp extends CI_Model {  //B

	function __construct() //B
		{
			parent::__construct(); //B
		}

	function getFile()   //method //B         //���¡��ҹ���   txt �ҡ����������������
	{
	$fp = file("Lab0-testcase.php"); //B       //��ҹ��� Lab0-testcase.php ���¡��
	return $fp;  //B  //�觤�ҡ��
	}

	function browse($filename)  //method //M
	{
	$data['filedata'] = fopen($filename,'r');  //M  //��˹���������������ٻẺ�ͧ array ��������� fopen 㹡����ҹ����͡���
	return($data);   //M  //�觤�� array ��Ѻ
	}

	function readFiles($filePath)		//method		//A
		{
			$text = file($filePath);			//A
			return $text;						//A
		}
}
?>
