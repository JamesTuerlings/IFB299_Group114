
	<?php
	//validate email with regex
		function validateEmail(&$errors, $field_list, $field_name)		{
			$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
			if (!preg_match($pattern, $field_list[$field_name]))
			$errors[$field_name] = 'invalid Email address';
		}

		//validate name with regex
		function validateName(&$errors, $field_list, $field_name)		{
			$pattern = '/^[a-zA-Z ]*$/';
			if (!preg_match($pattern, $field_list[$field_name]))
			$errors[$field_name] = 'must only contain Alphabets';
		}

		//check that passwords are the same
		function validatePass(&$errors, $field_list, $field_name)		{
			if ($field_list['password'] != $field_list['confirmPassword'])
			$errors[$field_name] = 'Dont match';
		}

		//validate phone 
		function validateNumber(&$errors, $field_list, $field_name)		{
			$number = $field_list[ $field_name];
			if(!is_numeric($field_list[ $field_name])|| $number < 1)
				$errors[$field_name] = 'needs to be only positive numbers';
		}

	?>
