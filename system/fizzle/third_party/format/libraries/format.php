<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Format Plugin
 *
 * Allows you to format text with:
 *
 * - Markdown
 * - Textile
 *
 * @package		Fizzle
 * @author		Adam Fairholm
 */
class Format extends Plugin {

	/**
	 * Markdown the content
	 */
	public function format()
	{
		$this->CI = get_instance();

		$method = $this->get_param('method', 'markdown');
		
		// Prep our content
		$content = trim($this->tag_content);
		
		switch($method):
		
			// Textile
			case 'textile':
				$this->CI->load->library('Textile');
				return $this->CI->textile->TextileThis($content);
				break;
		
			// Default is markdown
			default:
				include_once('markdown.php');
				return Markdown($content);
				break;
		
		endswitch;
			
	}
	
}

/* End of file format.php */