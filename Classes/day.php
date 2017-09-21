<?php
	/**
	* 
	*/
	namespace Classes;
	class Day {
		public $date;
		public $times;
		public $jobs;
		private $query;

		function __construct() {
			$start  = "8:00";

			$end    = "18:00";

			$tStart = strtotime($start);

			$tEnd   = strtotime($end);

			$now = $tStart;

			$times = array();

			while ($now <= $tEnd) {

				$times[] = date("h:i a", $now);

				$now = strtotime("+30 minutes", $now);
			}

			$this->times = $times;

			$this->date = date('Y:m:d');

			$this->query = ("SELECT * FROM jobs WHERE date = $this->date");
		}

		public function show() {
			$content = "<table>".

					   		$this->rows().

					   "</table>";

			return $content;
		}

		private function rows() {
			foreach ($this->times as $value) {

				// This will need job info, address, etc
				// 
				$content.=

					 "<tr>".

						"<td>".$value."</td>".

						"<td>My name is Dave</td>".

					 "</tr>";
			}
			
			return $content;
		}

		private function getJobs() {
		
		}

	}
	date_default_timezone_set('America/New_York');

	$day = new Day();
	echo $day->show();