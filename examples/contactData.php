<?php

// include the Eloqua REST client and models
include_once(__DIR__.'/../vendor/autoload.php');


$pw = "pass";
$user = 'user';
$company = 'companyName';
// instantiate a new instance of the Client
$client = new Eloqua\EloquaRequest($company, $user, $pw, 2);

// invoke a GET request to List all contacts
$contacts = $client->get('data/contacts?search=*&count=10&page=1');
print_r($contacts);
/*
// instantiate a new instance of the Contact class  
$contact = new Contact();  
$contact->firstName = 'Sample';  
$contact->lastName = 'Last';  
$contact->emailAddress = 'sample@test.com';

// invoke a POST request to create the contact  
$response = $client->post('/data/contact', $contact); 

// retrieve the ID of the new contact  
$contactId = $response->id;  

// change the contact's first name  
$contact->id = $contactId;   
$contact->firstName = 'updated';  
 
// invoke a PUT request to update the contact         
$response = $client->put('/data/contact/' . $contactId, $contact); 

// delete the contact
$client->delete('/data/contact/' . $contactId);  
*/
