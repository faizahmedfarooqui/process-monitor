<?php

/*
*	
*	✓ Return the Process(es) Name, Program Name & Count
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
					'name'		=> 'external-video-downloader,external-audio-downloader,video-post-process,audio-post-process',
					'program'	=> 'ffmpeg',
					'count'		=> 4
				],
				[	
					'name'		=> 'default,monthly-cost-deduction,notify-low-credit,web-site-update',
					'program'	=> 'default',
					'count'		=> 2
				],
				[
					'name'		=> 'generate-article,inject-content-article,post-blog-pbn',
					'program'	=> 'articlebuilder',
					'count'		=> 2	
				],
				[
					'name'		=> 'promotion-status',
					'program'	=> 'promotionstatus',
					'count'		=> 1
				],
				[
					'name'		=> 'cs-pbn-create,cs-traffic-create,cs-immediate-browse,cs-campaign-activity',
					'program'	=> 'crowdsearch',
					'count'		=> 2
				],
				[
					'name'		=> 'pbn-site-update,traffic-activity-update,traffic-maintenance',
					'program'	=> 'traffic',
					'count'		=> 3
				],
				[
					'name'		=> 'generate-web-article,inject-web-content-article,cs-web-create,post-blog-web',
					'program'	=> 'web',
					'count'		=> 2
				],
				[
					'name'		=> 'css-promotion-status,css-traffic-create',
					'program'	=> 'css',
					'count'		=> 2
				],
				[
					'name'		=> 'casper-start-stream-preview,casper-stop-stream-preview,casper-start-stop-stream-preview',
					'program'	=> 'vnc',
					'count'		=> 6
				],
				[
					'name'		=> 'generic-post-blog',
					'program'	=> 'vnc',
					'count'		=> 3
				],
				[
					'name'		=> 'casper-create-video-event,casper-delete-video-event',
					'program'	=> 'vnc',
					'count'		=> 1
				],
				[
					'name'		=> 'casper-validate-youtube-account,casper-validate-youtube-channel',
					'program'	=> 'vnc',
					'count'		=> 4
				],
				[
					'name'		=> 'post-blog-web',
					'program'	=> 'vnc',
					'count'		=> 3
				]
			]
		];
	}
}