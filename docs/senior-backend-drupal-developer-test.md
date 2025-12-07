Senior Backend Drupal Developer Test Overview 

● Create a custom Drupal 11 module that calls Salesforce to populate options for a list field. 

● Write a unit test that mimics the calling of Salesforce. 

Goals 

● Use Drupal 11 

● Create a custom module 

● Integrate with a 3rd party API 

● Write unit testing 

Instructions 

Part 1 

● Create a new Drupal 11 site with Gin as the admin theme and install the Salesforce module: https://www.drupal.org/project/salesforce 

● Create a new module called "oyw\_salesforce" 

● Create a new "client" service 

○ The service should extend the Salesforce RestClient 

○ Add a new method called "getPicklistValues" that calls the RestClient apiCall method like so: 

$this-\>apiCall("ui-api/object-info/$name/picklist-values/$record\_t ype/$field\_name"); 

○ The variables should be arguments to the method 

● Create a new class called "SalesforceFieldValues" that is run by the "options\_allowed\_values" hook, which populates the values for the "field\_gender" field 

○ The class should call the "getPicklistValues" client method like so: 

$client-\>getPicklistValues('field\_gender', "\['Contact', 'Gender\_\_c'\]") 

● See Salesforce data below for an example response 

● The values of the response should be returned as options to the 

"options\_allowed\_values" hook  
Part 2 

● Add unit testing (PHPUnit or Pest) for, firstly, the oyw\_salesforce client, and, secondly, the SalesforceFieldValues class 

Bonus points 

● Run the tests automatically on git commit 

Delivery 

● Commit your solution to a Git repository and share the link with us (digital@oneyoungworld.com) 

Salesforce data 

JSON representation of a PHP array 

{ 

"values": \[ 

{ 

"attributes": null, 

"label": "Male", 

"validFor": \[\], 

"value": "Male" 

}, 

{ 

"attributes": null, 

"label": "Female", 

"validFor": \[\], 

"value": "Female" 

}, 

{ 

"attributes": null, 

"label": "Other", 

"validFor": \[\], 

"value": "Other" 

} 

\] 

}