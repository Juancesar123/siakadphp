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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Auth/login';
$route['logout']='Auth/logout';
$route['dashboard'] = 'home';
//rute untuk murid
$route['murid'] = 'murid';
$route['lihat_murid'] = 'murid/lihatmurid';
$route['insert_murid'] = 'murid/insertmurid';
$route['edit_data_murid'] = 'murid/editmurid';
$route['hapus_murid']='murid/hapusmurid';
//route absensi murid
$route["absensimurid"]="absensimurid";
$route["lihat_absensimurid"]="absensimurid/lihatabsensimurid";
$route["insert_absensimurid"]="absensimurid/insertabsensimurid";
$route["ubah_absensimurid"]="absensimurid/ubahabsensimurid";
$route["hapus_absensimurid"]="absensimurid/hapusabsensimurid";
//route guru
$route["guru"]="guru";
$route["lihat_guru"]="guru/lihatguru";
$route["insert_guru"]="guru/insertguru";
$route["ubah_guru"]="guru/ubahguru";
$route["hapus_guru"]="guru/hapusguru";
//route untuk absensi guru
$route["absensiguru"] = "absensiguru";
$route["insert_absensiguru"] = "absensiguru/insertabsensiguru";
$route["lihat_absensiguru"] = "absensiguru/lihatabsensiguru";
$route["ubah_absensiguru"] = "absensiguru/ubahabsensiguru";
$route["hapus_absensiguru"] = "absensiguru/hapusabsensiguru";
//route module
$route["modul"] = "modul";
$route["lihat_modul"]="modul/lihatmodul";
$route["insert_modul"]="modul/insertmodul";
$route["ubah_modul"]="modul/ubahmodul";
$route["hapus_modul"]="modul/hapusmodul";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
