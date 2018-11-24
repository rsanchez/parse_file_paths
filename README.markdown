# Parse File Paths #

Parses {filedir_X} variables. Works great with query module and activerecord plugin, and any other add-on that outputs raw channel data.

## Installation

* Copy the /system/user/addons/parse_file_paths/ folder to your /system/expressionengine/third_party/ folder

## Usage
	{exp:query sql="SELECT field_id_1 AS file FROM exp_channel_data"}
	{exp:parse_file_paths}
		{file}
	{/exp:parse_file_paths}
	{/exp:query}
