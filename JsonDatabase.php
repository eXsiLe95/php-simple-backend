<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 01-Apr-18
 * Time: 10:15
 */

class JsonDatabase
{
	var $fileUri = "data/file.json";

	public function getAll()
	{
		if (!file_exists($this->fileUri))
		{
			// File does not exist, nothing to return
			return null;
		}

		$file = fopen($this->fileUri, "r+");
		// Exclusive lock for file
		while (!flock($file, LOCK_EX)) ;
		// File lock is now active, only this instance can work with it
		$content = fread($file, filesize($this->fileUri));
		flock($file, LOCK_UN);
		// File is no longer locked
		fclose($file);
		$jsonFile = json_decode($content);

		return $jsonFile;

	}

	public function get($key, $value)
	{
		$entry = null;
		$file  = null;

		if (!file_exists($this->fileUri))
		{
			// File does not exist, nothing to return
			return null;
		}

		$file = fopen($this->fileUri, "r+");
		// Exclusive lock for file
		while (!flock($file, LOCK_EX)) ;
		// File lock is now active, only this instance can work with it
		$content = fread($file, filesize($this->fileUri));
		flock($file, LOCK_UN);
		// File is no longer locked
		fclose($file);
		$jsonFile = json_decode($content);


		foreach ($jsonFile as $record)
		{
			if (isset($record[$key]))
			{
				if ($record[$key] == $value)
				{
					return $record;
				}
			}
		}

		return $entry;
	}
}
