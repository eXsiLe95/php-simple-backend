<?php

// ROUTES #########################################################################################

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	// READ: Get request to fetch data from server
	echo "GET";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// CREATE: Post request to server to create new data
	echo "POST";
}

if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
	// UPDATE: Put request to update data on server
	echo "PUT";
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
	// DELETE: Delete request to delete data from server
	echo "DELETE";
}
