<?php

/*
*	✓ Define Process Config Class
*/
$processConfigClass = 'ProcessConfig';
require_once(__DIR__."/$processConfigClass.php");

/**
*	✓ Monitors the Queue(s) Start/Stop
*/
class ProcessMonitor
{	
	public function __construct()
	{
		$configObject = new ProcessConfig();
		$this->config = $configObject->config();
	}

	public function index()
	{	
		/*
		*	✓ Create array for storing Process(es) status
		*/
		$processStatusArray = [];

		/*
		*	✓ Process(es) to be checked
		*/
		$processStatusArray = $this->checkStatus();

		return $this->checkAndMail($processStatusArray);
	}

	public function checkStatus()
	{
		$processStatusArray = [];

		$configArray = $this->config;
		foreach ( $configArray['process'] as $process ) {
			
			$output = [];
			exec("ps -ef | grep queue=$process[name]", $output);

			if ( !empty($output) ) {

				$runCount = 0;
				foreach ( $output as $outputArray ) {

					if ( !empty($outputArray) && strpos($outputArray, "php artisan") !== false )
						$runCount++;
				}

				if ( $runCount < $process['count'] )
					$processStatusArray[] = "Process count not matching :: Process \"$process[name]\" :: Count ($runCount/$process[count]) ";
				elseif ( $runCount == $process['count'] )
					$a = 1; // ✓ Do nothing
					// $processStatusArray[] = "Process successfully working :: Process \"$process[name]\" :: Count ($runCount/$process[count]) ";
				else
					$processStatusArray[] = "Process overload :: Process \"$process[name]\" :: Count ($runCount/$process[count]) ";
			}
		}

		return $processStatusArray;
	}

	public function checkAndMail($array)
	{
		return $array;
	}
}