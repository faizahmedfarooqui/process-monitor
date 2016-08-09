<?php

/*
*	
*	✓ Return the Process(es) Name, Program Name & Count (# of Processes)
*
*/
class ProcessConfig
{
	public function __construct()
	{
		//
	}

	public function config()
	{
		return [
			
			'process' => [
				[
					'name'		=> 'process-name-1,process-name-2',
					'program'	=> 'program-name-1',
					'count'		=> 4
				],
				[	
					'name'		=> 'process-name-3',
					'program'	=> 'program-name-2',
					'count'		=> 2
				]
			]
		];
	}
}