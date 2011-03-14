<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'Parse File Paths',
	'pi_version' => '1.0.0',
	'pi_author' => 'Rob Sanchez',
	'pi_author_url' => 'http://github.com/rsanchez',
	'pi_description' => 'Parses {filedir_X} variables.',
	'pi_usage' => Parse_file_paths::usage()
);

class Parse_file_paths
{
	public $return_data = '';

	public function Parse_file_paths()
	{
		$this->EE = get_instance();
		
		$this->EE->load->library('typography');
		
		$this->EE->typography->parse_images = TRUE;
		
		$this->return_data = $this->EE->typography->parse_file_paths($this->EE->TMPL->tagdata);
	}
	
	public static function usage()
	{
		ob_start(); 
?>
{exp:query sql="SELECT field_id_1 AS file FROM exp_channel_data"}
{exp:parse_file_paths}
	{file}
{/exp:parse_file_paths}
{/exp:query}
<?php
		$buffer = ob_get_contents();
		      
		ob_end_clean(); 
	      
		return $buffer;
	}
}
/* End of file pi.parse_file_paths.php */ 
/* Location: ./system/expressionengine/third_party/parse_file_paths/pi.parse_file_paths.php */ 