<?php
/*--------------------------------------------------------------*\
    Description:    HTML template class.
    Author:         Brian Lozier (brian@massassi.net)
    License:        Please read the license.txt file.
    Last Updated:   11/27/2002
\*--------------------------------------------------------------*/
class bTemplate
{
    // Configuration variables
    public $base_path  = '';

    // Delimeters for regular tags
    public $ldelim = '<';
    public $rdelim = ' />';

    // Delimeters for beginnings of loops
    public $BAldelim = '<';
    public $BArdelim = '>';

    // Delimeters for ends of loops
    public $EAldelim = '</';
    public $EArdelim = '>';

	// Internal variables
	var $scalars = [];
	var $arrays  = [];
	var $carrays = [];
	var $ifs     = [];

    /*--------------------------------------------------------------*\
        Method: bTemplate()
        Simply sets the base path (if you don't set the default).
    \*--------------------------------------------------------------*/
    public function __construct($base_path = null, public $reset_vars = true)
    {
        if ($base_path) {
            $this->base_path = $base_path;
        }
    }

    /*--------------------------------------------------------------*\
        Method: set()
        Sets all types of variables (scalar, loop, hash).
    \*--------------------------------------------------------------*/
    public function set($tag, $var, $if = null)
    {
        if (is_array($var)) {
            $this->arrays[$tag] = $var;
            if ($if) {
                $result = $var ? true : false;
                $this->ifs[] = $tag;
                $this->scalars[$tag] = $result;
            }
        } else {
            $this->scalars[$tag] = $var;
            if ($if) {
                $this->ifs[] = $tag;
            }
        }
    }

    /*--------------------------------------------------------------*\
        Method: set_cloop()
        Sets a cloop (case loop).
    \*--------------------------------------------------------------*/
    public function set_cloop($tag, $array, $cases)
    {
        $this->carrays[$tag] = [
            'array' => $array,
            'cases' => $cases];
    }

    /*--------------------------------------------------------------*\
        Method: reset_vars()
        Resets the template variables.
    \*--------------------------------------------------------------*/
	function reset_vars($scalars, $arrays, $carrays, $ifs) {
		if ($scalars) {
            $this->scalars = [];
        }

		if ($arrays) {
            $this->arrays = [];
        }

		if ($carrays) {
            $this->carrays = [];
        }

		if ($ifs) {
            $this->ifs = [];
        }
	}

    /*--------------------------------------------------------------*\
        Method: get_tags()
        Formats the tags & returns a two-element array.
    \*--------------------------------------------------------------*/
    public function get_tags($tag, $directive)
    {
        $tags = [];
        $tags['b'] = $this->BAldelim . $directive . $tag . $this->BArdelim;
        $tags['e'] = $this->EAldelim . $directive . $tag . $this->EArdelim;
        return $tags;
    }

    /*--------------------------------------------------------------*\
        Method: get_tag()
        Formats a tag for a scalar.
    \*--------------------------------------------------------------*/
    public function get_tag($tag)
    {
        return $this->ldelim . 'tag:' . $tag . $this->rdelim;
    }

    /*--------------------------------------------------------------*\
        Method: get_statement()
        Extracts a portion of a template.
    \*--------------------------------------------------------------*/
   public function get_statement($t, &$contents)
{
   
    // Locate the statement
    
    $tag_length = strlen((string)$t['b']);
    if (!empty($t['b'])) {
    $fpos = strpos((string) $contents, (string)$t['b']) + $tag_length;
} else {
$t['b'] ='<div>';	
$fpos = strpos((string) $contents, (string)$t['b']) + $tag_length;	
}


if (!empty($t['e'])) {
    $lpos = strpos((string) $contents, (string)$t['e']);
} else {
$t['e'] ='<div>';
$lpos = strpos((string) $contents, (string)$t['e']);
}	
    $length = $lpos - $fpos;


    // Extract & return the statement
    return substr((string) $contents, $fpos, $length);

}

    /*--------------------------------------------------------------*\
        Method: parse()
        Parses all variables into the template.
    \*--------------------------------------------------------------*/
    public function parse($contents)
    {
        // Process the ifs
        if (!empty($this->ifs)) {
            foreach ($this->ifs as $value) {
                $contents = $this->parse_if($value, $contents);
            }
        }

        // Process the scalars
        foreach ($this->scalars as $key => $value) {
            $contents = str_replace($this->get_tag($key), $value, (string) $contents);
        }

        // Process the arrays
        foreach ($this->arrays as $key => $array) {
            $contents = $this->parse_loop($key, $array, $contents);
        }

        // Process the carrays
        foreach ($this->carrays as $key => $array) {
            $contents = $this->parse_cloop($key, $array, $contents);
        }

        // Reset the arrays
        if ($this->reset_vars) {
            $this->reset_vars(false, true, true, false);
        }

        // Return the contents
        return $contents;
    }

    /*--------------------------------------------------------------*\
        Method: parse_if()
        Parses an if statement.  There is some weirdness here because
        the <else:tag> tag doesn't conform to convention, so some
        things have to be done manually.
    \*--------------------------------------------------------------*/
    public function parse_if($tag, $contents)
    {
        $tags = [];
        // Get the tags
        $t = $this->get_tags($tag, 'if:');
        
        // Get the entire statement
        $entire_statement = $this->get_statement($t, $contents);
        
        // Get the else tag
        $tags['b'] = null;
        $tags['e'] = $this->BAldelim . 'else:' . $tag . $this->BArdelim;
        
        // See if there's an else statement
        if (($else = strpos((string) $entire_statement, $tags['e']))) {
            // Get the if statement
            $if = $this->get_statement($tags, $entire_statement);
        
            // Get the else statement
            $else = substr((string) $entire_statement, $else + strlen($tags['e']));
        } else {
            $else = null;
            $if = $entire_statement;
        }
        
        // Process the if statement
        $this->scalars[$tag] ? $replace = $if : $replace = $else;

        // Parse & return the template
        return str_replace($t['b'] . $entire_statement . $t['e'], (string)$replace, (string) $contents);
    }

    /*--------------------------------------------------------------*\
        Method: parse_loop()
        Parses a loop (recursive function).
    \*--------------------------------------------------------------*/
    public function parse_loop($tag, $array, $contents)
    {
        // Get the tags & loop
        $t = $this->get_tags($tag, 'loop:');
        $loop = $this->get_statement($t, $contents);
        $parsed = null;

        // Process the loop
        foreach ($array as $key => $value) {
            if (is_numeric($key) && is_array($value)) {
                $i = $loop;
                foreach ($value as $key2 => $value2) {
                    if (!is_array($value2)) {
                        // Replace associative array tags
                        $i = str_replace($this->get_tag($tag . '[].' . $key2), $value2, (string) $i);
                    } else {
                        // Check to see if it's a nested loop
                        $i = $this->parse_loop($tag . '[].' . $key2, $value2, $i);
                    }
                }
            } elseif (is_string($key) && !is_array($value)) {
                $contents = str_replace($this->get_tag($tag . '.' . $key), $value, (string) $contents);
            } elseif (!is_array($value)) {
                $i = str_replace($this->get_tag($tag . '[]'), $value, (string) $loop);
            }

            // Add the parsed iteration
            if (isset($i)) {
                $parsed .= rtrim((string) $i);
            }
        }

        // Parse & return the final loop
        return str_replace($t['b'] . $loop . $t['e'], (string) $parsed, (string) $contents);
    }

    /*--------------------------------------------------------------*\
        Method: parse_cloop()
        Parses a cloop (case loop) (recursive function).
    \*--------------------------------------------------------------*/
    public function parse_cloop($tag, $array, $contents)
    {
        // Get the tags & loop
        $t = $this->get_tags($tag, 'cloop:');
        $loop = $this->get_statement($t, $contents);

        // Set up the cases
        $array['cases'][] = 'default';
        $case_content = [];
        $parsed = null;

        // Get the case strings
        foreach ($array['cases'] as $case) {
            $ctags[$case] = $this->get_tags($case, 'case:');
            $case_content[$case] = $this->get_statement($ctags[$case], $loop);
        }

        // Process the loop
        foreach ($array['array'] as $key => $value) {
            if (is_numeric($key) && is_array($value)) {
                // Set up the cases
                if (isset($value['case'])) {
                    $current_case = $value['case'];
                } else {
                    $current_case = 'default';
                }
                unset($value['case']);
                $i = $case_content[$current_case];

                // Loop through each value
                foreach ($value as $key2 => $value2) {
                    $i = str_replace($this->get_tag($tag . '[].' . $key2), $value2, (string) $i);
                }
            }

            // Add the parsed iteration
            $parsed .= rtrim((string) $i);
        }

        // Parse & return the final loop
        return str_replace($t['b'] . $loop . $t['e'], (string) $parsed, (string) $contents);
    }

    /*--------------------------------------------------------------*\
        Method: fetch()
        Returns the parsed contents of the specified template.
    \*--------------------------------------------------------------*/
    public function fetch($file_name)
    {
        // Prepare the path
        $file = $this->base_path . $file_name;

        // Open the file
        $fp = fopen($file, 'rb');
        if (!$fp) {
            return false;
        }
        
        // Read the file
        $contents = fread($fp, filesize($file));

        // Close the file
        fclose($fp);

        // Parse and return the contents
        return $this->parse($contents);
    }
}
?>
