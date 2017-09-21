<?php
/**
* 
*/
namespace Classes;
class Job
{
	public $id;
	public $title;
	public $description;
	public $address;
	public $customer;
	public $employee;
	public $author;
	public $date;
	public $complete;
	public $action;
	public $time;
	
	function __construct()
	{
		require_once 'database.php';
		database::connect->query('SELECT')	
	}
}
