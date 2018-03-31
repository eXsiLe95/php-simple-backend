<?php

$answer = "";

// ROUTES #########################################################################################

if (!$_SERVER['REQUEST_METHOD'])
{
	// ToDo: Error handling
}

switch ($_SERVER['REQUEST_METHOD'])
{
	case "GET":
		$answer = requestGet();
		break;
	case "POST":
		$answer = requestPost();
		break;
	case "PUT":
		$answer = requestPut();
		break;
	case "DELETE":
		$answer = requestDelete();
		break;
	default:
		$answer = "Unsupported request method.\r\n";
		break;
}
echo $answer;

function requestGet()
{
	// READ: Get request to fetch data from server
	foreach ($_GET as $key => $value)
	{
		echo $key . ": " . $value . "\r\n";
	}
	// ToDo: These key value pairs can later be translated to fetch any data or to fetch one specific data entry
	http_response_code(200);

	return "OK";
}

function requestPost()
{
	// CREATE: Post request to create new data on server
	foreach ($_POST as $key => $value)
	{
		echo $key . ": " . $value . "\r\n";
	}
	// ToDo: These key value pairs can later be translated to create new data on server
	http_response_code(201);

	return "Created";
}

function requestPut()
{
	// UPDATE: Put request to update data on server
	// ToDo: Implement database service
	// ToDo: Read PUT data using fopen("php://input", "r");
	// ToDo: Don't forget to close the data stream!
	http_response_code(204);

	return "No response";
}

function requestDelete()
{
	// DELETE: Delete request to delete data on server
	// ToDo: Parse URI to fetch which data to delete
	http_response_code(202);

	return "Accepted";
}
