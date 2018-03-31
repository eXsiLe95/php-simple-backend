<?php

// ROUTES #########################################################################################

switch ($_SERVER['REQUEST_METHOD'])
{
	case "GET":
		requestGet();
		break;
	case "POST":
		requestPost();
		break;
	case "PUT":
		requestPut();
		break;
	case "DELETE":
		requestDelete();
		break;
	default:
		echo "Unsupported request method.\r\n";
		break;
}

function requestGet()
{
	// READ: Get request to fetch data from server
	foreach ($_GET as $key => $value)
	{
		echo $key . ": " . $value . "\r\n";
	}
	// ToDo: These key value pairs can later be translated to fetch any data or to fetch one specific data entry
}

function requestPost()
{
	// CREATE: Post request to create new data on server
	foreach ($_POST as $key => $value)
	{
		echo $key . ": " . $value . "\r\n";
	}
	// ToDo: These key value pairs can later be translated to create new data on server
}

function requestPut()
{
	// UPDATE: Put request to update data on server
	// ToDo: Implement database service
	// ToDo: Read PUT data using fopen("php://input", "r");
	// ToDo: Don't forget to close the data stream!
}

function requestDelete() {
	// DELETE: Delete request to delete data on server
	// ToDo: Parse URI to fetch which data to delete
	echo $_SERVER['REQUEST_URI'];
}
