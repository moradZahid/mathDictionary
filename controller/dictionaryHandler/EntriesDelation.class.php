<?php
include_once(dirname(__FILE__).'/DictionaryService.class.php');

class EntriesDelation extends DictionaryService
{
	
	/**
	 * displayStoredEntriesList	: display all the entries of the dictionary table from $offset to
	 *							  $offset + $nbr in order to delete them 
	 *							
	 *							: param : $offset	: integer
	 *									: $nbr		: integer
	 */
	public function displayStoredEntriesList($offset,$nbr,$action='delete')
	{
		DictionaryService::displayStoredEntriesList($offset,$nbr,$action);
	}
	
	
	/**
	 * displayAvailableLetters	: display all the letters which are initials of a french expression
	 *							: according to the array $nbr_entries given in parametre
	 */
	 public function displayAvailableLetters($action='delete')
	 {
	 	 DictionaryService::displayAvailableLetters($action);
	 }
	 
	
	/**
	 * displayAvailablePages	: display all the page numbers for a letter given in parametre
	 *
	 *							: param : $letter	: string
	 */
	 public function displayAvailablePages($letter,$action='delete')
	 {
	 	 DictionaryService::displayAvailablePages($letter,$action);
	 }
}