<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['main'] = $route['default_controller'].'/index';
$route['solutions'] = $route['default_controller'].'/solutions';
$route['why-us'] = $route['default_controller'].'/why_us';
$route['careers'] = $route['default_controller'].'/careers';
$route['about-uspage'] = $route['default_controller'].'/about_us_page';
/*$route['lead-management'] = $route['default_controller'].'/lead_management';
$route['data-solution'] = $route['default_controller'].'/data_solution';
$route['sales-targets'] = $route['default_controller'].'/sales_targets';*/

$route['solutions-page'] = $route['default_controller'].'/solutions_page';
$route['condition-syndication'] = $route['default_controller'].'/condition_syndication';
$route['lead-nurturing'] = $route['default_controller'].'/lead_nurturing';
$route['account-based'] = $route['default_controller'].'/account_based';
$route['data-enrichment'] = $route['default_controller'].'/data_enrichment';
$route['contact-discovery'] = $route['default_controller'].'/contact_discovery';
$route['sales-targets-page'] = $route['default_controller'].'/sales_targets_page';
$route['smart-lead'] = $route['default_controller'].'/smart_lead';
$route['why-us-page'] = $route['default_controller'].'/why_us_page';
$route['contact-us'] = $route['default_controller'].'/contant_us';
$route['case-studies'] = $route['default_controller'].'/case_studies';
$route['case1-studies'] = $route['default_controller'].'/case1_studies';
$route['case2-studies'] = $route['default_controller'].'/case2_studies';
$route['case3-studies'] = $route['default_controller'].'/case3_studies';
$route['case4-studies'] = $route['default_controller'].'/case4_studies';
$route['case5-studies'] = $route['default_controller'].'/case5_studies';
$route['case6-studies'] = $route['default_controller'].'/case6_studies';
$route['case7-studies'] = $route['default_controller'].'/case7_studies';
$route['case8-studies'] = $route['default_controller'].'/case8_studies';
$route['case9-studies'] = $route['default_controller'].'/case9_studies';
$route['case10-studies'] = $route['default_controller'].'/case10_studies';
