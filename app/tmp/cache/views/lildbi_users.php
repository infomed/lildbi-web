<!--cachetime:1362399815--><?php
			App::uses('UsersController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjg6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToidXNlcnMiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJwYWdpbmciO2E6MTp7czo0OiJVc2VyIjthOjEwOntzOjQ6InBhZ2UiO2k6MTtzOjc6ImN1cnJlbnQiO2k6NTtzOjU6ImNvdW50IjtpOjU7czo4OiJwcmV2UGFnZSI7YjowO3M6ODoibmV4dFBhZ2UiO2I6MDtzOjk6InBhZ2VDb3VudCI7aToxO3M6NToib3JkZXIiO047czo1OiJsaW1pdCI7aTo1O3M6Nzoib3B0aW9ucyI7YToxOntzOjEwOiJjb25kaXRpb25zIjthOjA6e319czo5OiJwYXJhbVR5cGUiO3M6NToibmFtZWQiO319czo2OiJtb2RlbHMiO2E6Mjp7czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjM6IlJvbCI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJSb2wiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6NToidXNlcnMiO3M6NDoiYmFzZSI7czo3OiIvbGlsZGJpIjtzOjc6IndlYnJvb3QiO3M6ODoiL2xpbGRiaS8iO3M6NDoiaGVyZSI7czoxMzoiL2xpbGRiaS91c2VycyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new UsersController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MzA6IlR3aXR0ZXJCb290c3RyYXAuQm9vdHN0cmFwSHRtbCI7fXM6NDoiRm9ybSI7YToxOntzOjk6ImNsYXNzTmFtZSI7czozMDoiVHdpdHRlckJvb3RzdHJhcC5Cb290c3RyYXBGb3JtIjt9czo5OiJQYWdpbmF0b3IiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MzU6IlR3aXR0ZXJCb290c3RyYXAuQm9vdHN0cmFwUGFnaW5hdG9yIjt9czo1OiJDYWNoZSI7Tjt9'));
				$controller->layout = $this->layout = 'admin_layout';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo2OntzOjU6InVzZXJzIjthOjU6e2k6MDthOjE6e3M6NDoiVXNlciI7YTo5OntzOjI6ImlkIjtzOjE6IjYiO3M6NDoibmFtZSI7czo1OiJGaWRlbCI7czo4OiJ1c2VybmFtZSI7czo4OiJmc2FudGFuYSI7czo4OiJpbml0aWFscyI7czozOiJGU00iO3M6MTE6ImNlbnRlcl9jb2RlIjtzOjQ6IkNVLjEiO3M6NToiZW1haWwiO3M6MjM6ImZzYW50YW5hQGluZm9tZWQuc2xkLmN1IjtzOjg6InBhc3N3b3JkIjtzOjQwOiJjNzMwNDg4MjU1NTcyZjFjNjUzZWQ4ZDZhMWFkYmY3ODNjYzNhNGVhIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDItMDkgMjA6MTc6MDMiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDMtMDIgMjM6MTE6MzMiO319aToxO2E6MTp7czo0OiJVc2VyIjthOjk6e3M6MjoiaWQiO3M6MjoiMTciO3M6NDoibmFtZSI7czo1OiJMdWlzQSI7czo4OiJ1c2VybmFtZSI7czoxMToibHVpc2FsYmVydG8iO3M6ODoiaW5pdGlhbHMiO3M6MjoiTEEiO3M6MTE6ImNlbnRlcl9jb2RlIjtzOjQ6IkNVLjIiO3M6NToiZW1haWwiO3M6MTQ6Imx1aXNAZ21haWwuY29tIjtzOjg6InBhc3N3b3JkIjtzOjQwOiJjNzMwNDg4MjU1NTcyZjFjNjUzZWQ4ZDZhMWFkYmY3ODNjYzNhNGVhIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDItMTEgMDM6NDc6MTciO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDItMTEgMDQ6MDA6NTUiO319aToyO2E6MTp7czo0OiJVc2VyIjthOjk6e3M6MjoiaWQiO3M6MjoiMTgiO3M6NDoibmFtZSI7czo2OiJDYXJsb3MiO3M6ODoidXNlcm5hbWUiO3M6MTI6ImNhcmxvZXJuZXN0byI7czo4OiJpbml0aWFscyI7czoyOiJDRSI7czoxMToiY2VudGVyX2NvZGUiO3M6NjoiQ1UuNTQyIjtzOjU6ImVtYWlsIjtzOjIzOiJjYXJsb3Nlcm5lc3RvQGdtYWlsLmNvbSI7czo4OiJwYXNzd29yZCI7czo0MDoiNmMxZmExYTQ3MzJlZDZhZmZlM2UyNmI4YTUwOTI5MDg5MjBjZTJlZCI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTAyLTExIDAzOjU5OjI4IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTAzLTAyIDIyOjQ1OjAyIjt9fWk6MzthOjE6e3M6NDoiVXNlciI7YTo5OntzOjI6ImlkIjtzOjI6IjIyIjtzOjQ6Im5hbWUiO3M6NjoiQ2FtaWxvIjtzOjg6InVzZXJuYW1lIjtzOjY6ImNhbWlsbyI7czo4OiJpbml0aWFscyI7czoyOiJDQSI7czoxMToiY2VudGVyX2NvZGUiO3M6NDoiQ1UuNiI7czo1OiJlbWFpbCI7czoyMToiY2FtaWxvQGluZm9tZWQuc2xkLmN1IjtzOjg6InBhc3N3b3JkIjtzOjQwOiI2YzFmYTFhNDczMmVkNmFmZmUzZTI2YjhhNTA5MjkwODkyMGNlMmVkIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDMtMDIgMjI6MjM6MzMiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDMtMDIgMjI6NDI6MDIiO319aTo0O2E6MTp7czo0OiJVc2VyIjthOjk6e3M6MjoiaWQiO3M6MjoiMjMiO3M6NDoibmFtZSI7czo0OiJnc2ZnIjtzOjg6InVzZXJuYW1lIjtzOjEwOiJkZmdhc2Rmc2RmIjtzOjg6ImluaXRpYWxzIjtzOjg6ImFzZGZhc2RmIjtzOjExOiJjZW50ZXJfY29kZSI7czoxMDoiYXNkZmFzZGZhZCI7czo1OiJlbWFpbCI7czoxOToiYWFrYWxhbGFAdnNkZmFzLmNvbSI7czo4OiJwYXNzd29yZCI7czo0MDoiNjQ0NGIzMGY4MjcwZDRjOWU3ZjFiZTI2NWE2MWRmOTAxMmZkYjk3OSI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTAzLTA0IDAwOjAzOjM1IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTAzLTA0IDAwOjAzOjM1Ijt9fX1zOjEyOiJjdXJyZW50X3VzZXIiO2E6ODp7czoyOiJpZCI7czoxOiI2IjtzOjQ6Im5hbWUiO3M6NToiRmlkZWwiO3M6ODoidXNlcm5hbWUiO3M6ODoiZnNhbnRhbmEiO3M6ODoiaW5pdGlhbHMiO3M6MzoiRlNNIjtzOjExOiJjZW50ZXJfY29kZSI7czo0OiJDVS4xIjtzOjU6ImVtYWlsIjtzOjIzOiJmc2FudGFuYUBpbmZvbWVkLnNsZC5jdSI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTAyLTA5IDIwOjE3OjAzIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTAzLTAyIDIzOjExOjMzIjt9czo5OiJsb2dnZWRfaW4iO2I6MTtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NTY5NzoiPHVsIGNsYXNzPSJicmVhZGNydW1iIj48bGk+PGEgaHJlZj0iL2xpbGRiaS9hZG1pbiI+SG9tZTwvYT4mbmJzcDs8c3BhbiBjbGFzcz0iZGl2aWRlciI+Lzwvc3Bhbj48L2xpPgo8bGkgY2xhc3M9ImFjdGl2ZSI+VXN1YXJpb3M8L2xpPjwvdWw+PGRpdiBpZD0ic2VwYXJhdG9yIiBzdHlsZT0ibWFyZ2luLXRvcDogNDBweDsiPjwvZGl2Pg0KPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+Cgk8YSBjbGFzcz0iY2xvc2UiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIGhyZWY9IiMiPsOXPC9hPgoJVGhlIHVzZXIgaGFzIGJlZW4gc2F2ZWQ8L2Rpdj48ZGl2IGNsYXNzPSJjb250YWluZXItZG9jdW1lbnQiPg0KCTxkaXYgY2xhc3M9InJvdy1mbHVpZCI+DQoJCTxkaXYgY2xhc3M9InNwYW4yIj4NCgkJCTxkaXYgY2xhc3M9ImFjdGlvbnMiPg0KCQkJCTxoMz4NCgkJCQkJQWN0aW9ucwkJCQk8L2gzPg0KCQkJCTx1bD4NCgkJCQkJPGxpPjxhIGhyZWY9Ii9saWxkYmkvdXNlcnMvYWRkIj5OZXcgVXNlcjwvYT4JCQkJCTwvbGk+DQoJCQkJCTxsaT48YSBocmVmPSIvbGlsZGJpL3JvbHMiPkxpc3QgUm9sczwvYT4JCQkJCTwvbGk+DQoJCQkJCTxsaT48YSBocmVmPSIvbGlsZGJpL3JvbHMvYWRkIj5OZXcgUm9sPC9hPgkJCQkJPC9saT4NCgkJCQk8L3VsPg0KCQkJPC9kaXY+DQoJCTwvZGl2Pg0KDQoJCTxkaXYgY2xhc3M9InNwYW4xMCI+DQoJCQk8ZGl2IGNsYXNzPSJ1c2VycyBpbmRleCI+DQoJCQkJPGgyPg0KCQkJCQlVc2VycwkJCQk8L2gyPg0KCQkJCTx0YWJsZSBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiDQoJCQkJCWNsYXNzPSJ0YWJsZSB0YWJsZS1zdHJpcGVkIHRhYmxlLWJvcmRlcmVkIj4NCgkJCQkJPHRyPg0KCQkJCQkJPHRoPjxhIGhyZWY9Ii9saWxkYmkvdXNlcnMvaW5kZXgvc29ydDppZC9kaXJlY3Rpb246YXNjIj5JZDwvYT48L3RoPg0KCQkJCQkJPHRoPjxhIGhyZWY9Ii9saWxkYmkvdXNlcnMvaW5kZXgvc29ydDpuYW1lL2RpcmVjdGlvbjphc2MiPk5hbWU8L2E+PC90aD4NCgkJCQkJCTx0aD48YSBocmVmPSIvbGlsZGJpL3VzZXJzL2luZGV4L3NvcnQ6dXNlcm5hbWUvZGlyZWN0aW9uOmFzYyI+VXNlcm5hbWU8L2E+PC90aD4NCgkJCQkJCTx0aD48YSBocmVmPSIvbGlsZGJpL3VzZXJzL2luZGV4L3NvcnQ6aW5pdGlhbHMvZGlyZWN0aW9uOmFzYyI+SW5pdGlhbHM8L2E+PC90aD4NCgkJCQkJCTx0aD48YSBocmVmPSIvbGlsZGJpL3VzZXJzL2luZGV4L3NvcnQ6Y2VudGVyX2NvZGUvZGlyZWN0aW9uOmFzYyI+Q2VudGVyIENvZGU8L2E+PC90aD4NCgkJCQkJCTx0aD48YSBocmVmPSIvbGlsZGJpL3VzZXJzL2luZGV4L3NvcnQ6ZW1haWwvZGlyZWN0aW9uOmFzYyI+RW1haWw8L2E+PC90aD4NCgkJCQkJCTx0aD48YSBocmVmPSIvbGlsZGJpL3VzZXJzL2luZGV4L3NvcnQ6Y3JlYXRlZC9kaXJlY3Rpb246YXNjIj5DcmVhdGVkPC9hPjwvdGg+DQoJCQkJCQk8dGg+PGEgaHJlZj0iL2xpbGRiaS91c2Vycy9pbmRleC9zb3J0Om1vZGlmaWVkL2RpcmVjdGlvbjphc2MiPk1vZGlmaWVkPC9hPjwvdGg+DQoJCQkJCQk8dGggY2xhc3M9ImFjdGlvbnMiPkFjdGlvbnM8L3RoPg0KCQkJCQk8L3RyPg0KCQkJCQkJCQkJCTx0cj4NCgkJCQkJCTx0ZD42Jm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5GaWRlbCZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+ZnNhbnRhbmEmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPkZTTSZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+Q1UuMSZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+ZnNhbnRhbmFAaW5mb21lZC5zbGQuY3UmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPjIwMTMtMDItMDkgMjA6MTc6MDMmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPjIwMTMtMDMtMDIgMjM6MTE6MzMmbmJzcDs8L3RkPg0KCQkJCQkJPHRkIGNsYXNzPSJhY3Rpb25zIj48YSBocmVmPSIvbGlsZGJpL3VzZXJzL3ZpZXcvNiI+VmlldzwvYT4JCQkJCQkJPGEgaHJlZj0iL2xpbGRiaS91c2Vycy9lZGl0LzYiPkVkaXQ8L2E+CQkJCQkJCTxmb3JtIGFjdGlvbj0iL2xpbGRiaS91c2Vycy9kZWxldGUvNiIgbmFtZT0icG9zdF81MTMzZDZjN2M2Y2ZmIiBpZD0icG9zdF81MTMzZDZjN2M2Y2ZmIiBzdHlsZT0iZGlzcGxheTpub25lOyIgbWV0aG9kPSJwb3N0Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+PC9mb3JtPjxhIGhyZWY9IiMiIG9uY2xpY2s9ImlmIChjb25maXJtKCYjMDM5O0FyZSB5b3Ugc3VyZSB5b3Ugd2FudCB0byBkZWxldGUgIyA2PyYjMDM5OykpIHsgZG9jdW1lbnQucG9zdF81MTMzZDZjN2M2Y2ZmLnN1Ym1pdCgpOyB9IGV2ZW50LnJldHVyblZhbHVlID0gZmFsc2U7IHJldHVybiBmYWxzZTsiPkRlbGV0ZTwvYT4JCQkJCQk8L3RkPg0KCQkJCQk8L3RyPg0KCQkJCQkJCQkJCTx0cj4NCgkJCQkJCTx0ZD4xNyZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+THVpc0EmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPmx1aXNhbGJlcnRvJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5MQSZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+Q1UuMiZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+bHVpc0BnbWFpbC5jb20mbmJzcDs8L3RkPg0KCQkJCQkJPHRkPjIwMTMtMDItMTEgMDM6NDc6MTcmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPjIwMTMtMDItMTEgMDQ6MDA6NTUmbmJzcDs8L3RkPg0KCQkJCQkJPHRkIGNsYXNzPSJhY3Rpb25zIj48YSBocmVmPSIvbGlsZGJpL3VzZXJzL3ZpZXcvMTciPlZpZXc8L2E+CQkJCQkJCTxhIGhyZWY9Ii9saWxkYmkvdXNlcnMvZWRpdC8xNyI+RWRpdDwvYT4JCQkJCQkJPGZvcm0gYWN0aW9uPSIvbGlsZGJpL3VzZXJzL2RlbGV0ZS8xNyIgbmFtZT0icG9zdF81MTMzZDZjN2M4OGE2IiBpZD0icG9zdF81MTMzZDZjN2M4OGE2IiBzdHlsZT0iZGlzcGxheTpub25lOyIgbWV0aG9kPSJwb3N0Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+PC9mb3JtPjxhIGhyZWY9IiMiIG9uY2xpY2s9ImlmIChjb25maXJtKCYjMDM5O0FyZSB5b3Ugc3VyZSB5b3Ugd2FudCB0byBkZWxldGUgIyAxNz8mIzAzOTspKSB7IGRvY3VtZW50LnBvc3RfNTEzM2Q2YzdjODhhNi5zdWJtaXQoKTsgfSBldmVudC5yZXR1cm5WYWx1ZSA9IGZhbHNlOyByZXR1cm4gZmFsc2U7Ij5EZWxldGU8L2E+CQkJCQkJPC90ZD4NCgkJCQkJPC90cj4NCgkJCQkJCQkJCQk8dHI+DQoJCQkJCQk8dGQ+MTgmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPkNhcmxvcyZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+Y2FybG9lcm5lc3RvJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5DRSZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+Q1UuNTQyJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5jYXJsb3Nlcm5lc3RvQGdtYWlsLmNvbSZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+MjAxMy0wMi0xMSAwMzo1OToyOCZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+MjAxMy0wMy0wMiAyMjo0NTowMiZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQgY2xhc3M9ImFjdGlvbnMiPjxhIGhyZWY9Ii9saWxkYmkvdXNlcnMvdmlldy8xOCI+VmlldzwvYT4JCQkJCQkJPGEgaHJlZj0iL2xpbGRiaS91c2Vycy9lZGl0LzE4Ij5FZGl0PC9hPgkJCQkJCQk8Zm9ybSBhY3Rpb249Ii9saWxkYmkvdXNlcnMvZGVsZXRlLzE4IiBuYW1lPSJwb3N0XzUxMzNkNmM3Y2ExY2UiIGlkPSJwb3N0XzUxMzNkNmM3Y2ExY2UiIHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBtZXRob2Q9InBvc3QiPjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Il9tZXRob2QiIHZhbHVlPSJQT1NUIj48L2Zvcm0+PGEgaHJlZj0iIyIgb25jbGljaz0iaWYgKGNvbmZpcm0oJiMwMzk7QXJlIHlvdSBzdXJlIHlvdSB3YW50IHRvIGRlbGV0ZSAjIDE4PyYjMDM5OykpIHsgZG9jdW1lbnQucG9zdF81MTMzZDZjN2NhMWNlLnN1Ym1pdCgpOyB9IGV2ZW50LnJldHVyblZhbHVlID0gZmFsc2U7IHJldHVybiBmYWxzZTsiPkRlbGV0ZTwvYT4JCQkJCQk8L3RkPg0KCQkJCQk8L3RyPg0KCQkJCQkJCQkJCTx0cj4NCgkJCQkJCTx0ZD4yMiZuYnNwOzwvdGQ+DQoJCQkJCQk8dGQ+Q2FtaWxvJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5jYW1pbG8mbmJzcDs8L3RkPg0KCQkJCQkJPHRkPkNBJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5DVS42Jm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5jYW1pbG9AaW5mb21lZC5zbGQuY3UmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPjIwMTMtMDMtMDIgMjI6MjM6MzMmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPjIwMTMtMDMtMDIgMjI6NDI6MDImbmJzcDs8L3RkPg0KCQkJCQkJPHRkIGNsYXNzPSJhY3Rpb25zIj48YSBocmVmPSIvbGlsZGJpL3VzZXJzL3ZpZXcvMjIiPlZpZXc8L2E+CQkJCQkJCTxhIGhyZWY9Ii9saWxkYmkvdXNlcnMvZWRpdC8yMiI+RWRpdDwvYT4JCQkJCQkJPGZvcm0gYWN0aW9uPSIvbGlsZGJpL3VzZXJzL2RlbGV0ZS8yMiIgbmFtZT0icG9zdF81MTMzZDZjN2NiYzJmIiBpZD0icG9zdF81MTMzZDZjN2NiYzJmIiBzdHlsZT0iZGlzcGxheTpub25lOyIgbWV0aG9kPSJwb3N0Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCI+PC9mb3JtPjxhIGhyZWY9IiMiIG9uY2xpY2s9ImlmIChjb25maXJtKCYjMDM5O0FyZSB5b3Ugc3VyZSB5b3Ugd2FudCB0byBkZWxldGUgIyAyMj8mIzAzOTspKSB7IGRvY3VtZW50LnBvc3RfNTEzM2Q2YzdjYmMyZi5zdWJtaXQoKTsgfSBldmVudC5yZXR1cm5WYWx1ZSA9IGZhbHNlOyByZXR1cm4gZmFsc2U7Ij5EZWxldGU8L2E+CQkJCQkJPC90ZD4NCgkJCQkJPC90cj4NCgkJCQkJCQkJCQk8dHI+DQoJCQkJCQk8dGQ+MjMmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPmdzZmcmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPmRmZ2FzZGZzZGYmbmJzcDs8L3RkPg0KCQkJCQkJPHRkPmFzZGZhc2RmJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5hc2RmYXNkZmFkJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD5hYWthbGFsYUB2c2RmYXMuY29tJm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD4yMDEzLTAzLTA0IDAwOjAzOjM1Jm5ic3A7PC90ZD4NCgkJCQkJCTx0ZD4yMDEzLTAzLTA0IDAwOjAzOjM1Jm5ic3A7PC90ZD4NCgkJCQkJCTx0ZCBjbGFzcz0iYWN0aW9ucyI+PGEgaHJlZj0iL2xpbGRiaS91c2Vycy92aWV3LzIzIj5WaWV3PC9hPgkJCQkJCQk8YSBocmVmPSIvbGlsZGJpL3VzZXJzL2VkaXQvMjMiPkVkaXQ8L2E+CQkJCQkJCTxmb3JtIGFjdGlvbj0iL2xpbGRiaS91c2Vycy9kZWxldGUvMjMiIG5hbWU9InBvc3RfNTEzM2Q2YzdjZDVmMiIgaWQ9InBvc3RfNTEzM2Q2YzdjZDVmMiIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIG1ldGhvZD0icG9zdCI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPjwvZm9ybT48YSBocmVmPSIjIiBvbmNsaWNrPSJpZiAoY29uZmlybSgmIzAzOTtBcmUgeW91IHN1cmUgeW91IHdhbnQgdG8gZGVsZXRlICMgMjM/JiMwMzk7KSkgeyBkb2N1bWVudC5wb3N0XzUxMzNkNmM3Y2Q1ZjIuc3VibWl0KCk7IH0gZXZlbnQucmV0dXJuVmFsdWUgPSBmYWxzZTsgcmV0dXJuIGZhbHNlOyI+RGVsZXRlPC9hPgkJCQkJCTwvdGQ+DQoJCQkJCTwvdHI+DQoJCQkJCQkJCQk8L3RhYmxlPg0KCQkJCTxwPg0KCQkJCQlQYWdlIDEgb2YgMSwgc2hvd2luZyA1IHJlY29yZHMgb3V0IG9mIDUgdG90YWwsIHN0YXJ0aW5nIG9uIHJlY29yZCAxLCBlbmRpbmcgb24gNQkJCQk8L3A+DQoNCgkJCQkJCQk8L2Rpdj4NCgkJPC9kaXY+DQoJPC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjU6IlVzZXJzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"><title>LILDBI WEB</title>
<script src="/lildbi/js/jquery.js"></script><script src="/lildbi/js/bootstrap.js"></script><link href="/lildbi/favicon.ico" type="image/x-icon" rel="icon" ><link href="/lildbi/favicon.ico" type="image/x-icon" rel="shortcut icon" ><link rel="stylesheet" href="/lildbi/css/bootstrap.css"><link rel="stylesheet" href="/lildbi/css/custom-styles.css"></head>
<body>
	<div id="container" class="container" style="margin-top: 20px;">
		<div id="header">

			<div class="row-fluid">
				<div class="span12"">
					<div class="navbar navbar-inverse navbar-fixed-top">
						<div class="navbar-inner">
							<div class="container">
								<button type="button" class="btn btn-navbar"
									data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar"></span> <span class="icon-bar"></span> <span
										class="icon-bar"></span>
								</button>
								<a href="/lildbi/" class="brand">LiLDBI Web</a>								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<li class="dropdown"><a data-toggle="dropdown"
											class="dropdown-toggle" href="#">Sistema <b class="caret"></b>
										</a>
											<ul class="dropdown-menu">
												<li><a href="#">Disponibilidad</a></li>
												<li><a href="#">Aviso a los Usuarios</a></li>
											</ul>
										</li>
										<li><a href="/lildbi/users">Usuarios</a>										</li>
										<li class="dropdown"><a data-toggle="dropdown"
											class="dropdown-toggle" href="#">Base de Datos <b
												class="caret"></b>
										</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu"><a tabindex="-1" href="#">Definiciones</a>
													<ul class="dropdown-menu">
														<li><a href="#">Definiciones Generales</a></li>
														<li><a href="#">Tipos de Registros</a></li>
														<li><a href="#">Complementos</a></li>
														<li><a href="#">Campos</a></li>
														<li><a href="#">FST</a></li>
														<li><a href="#">Mensajes</a></li>
													</ul>
												</li>
												<li><a href="#">Generar Invertido</a></li>
												<li><a href="/lildbi/Codifiers/generate">Importar Codificadores</a>												</li>
												<li><a href="#">Desbloquear</a></li>
												<li><a href="#">Reiniciar Base</a></li>
											</ul>
										</li>
										<li><a href="#">Configuraci&oacute;n</a></li>
										<li><a href="#">Cambiar Perfil</a></li>
										<li><a href="/lildbi/users/logout">Salir</a>										</li>
										<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
										<li class="divider-vertical"></li>
									</ul>
									<div class="navbar-form pull-right" style="margin-top: 10px;">
										<div class="span20">
											<p style="color: #ffffff;">
												Administrador:
												fsantana											</p>
										</div>

									</div>
								</div>
								<!-- /.nav-collapse -->
							</div>
						</div>
						<!-- /navbar-inner -->
					</div>
				</div>
			</div>

		</div>
		<div id="content">
									<ul class="breadcrumb"><li><a href="/lildbi/admin">Home</a>&nbsp;<span class="divider">/</span></li>
<li class="active">Usuarios</li></ul><div id="separator" style="margin-top: 40px;"></div>
<div class="alert alert-success">
	<a class="close" data-dismiss="alert" href="#">×</a>
	The user has been saved</div><div class="container-document">
	<div class="row-fluid">
		<div class="span2">
			<div class="actions">
				<h3>
					Actions				</h3>
				<ul>
					<li><a href="/lildbi/users/add">New User</a>					</li>
					<li><a href="/lildbi/rols">List Rols</a>					</li>
					<li><a href="/lildbi/rols/add">New Rol</a>					</li>
				</ul>
			</div>
		</div>

		<div class="span10">
			<div class="users index">
				<h2>
					Users				</h2>
				<table cellpadding="0" cellspacing="0"
					class="table table-striped table-bordered">
					<tr>
						<th><a href="/lildbi/users/index/sort:id/direction:asc">Id</a></th>
						<th><a href="/lildbi/users/index/sort:name/direction:asc">Name</a></th>
						<th><a href="/lildbi/users/index/sort:username/direction:asc">Username</a></th>
						<th><a href="/lildbi/users/index/sort:initials/direction:asc">Initials</a></th>
						<th><a href="/lildbi/users/index/sort:center_code/direction:asc">Center Code</a></th>
						<th><a href="/lildbi/users/index/sort:email/direction:asc">Email</a></th>
						<th><a href="/lildbi/users/index/sort:created/direction:asc">Created</a></th>
						<th><a href="/lildbi/users/index/sort:modified/direction:asc">Modified</a></th>
						<th class="actions">Actions</th>
					</tr>
										<tr>
						<td>6&nbsp;</td>
						<td>Fidel&nbsp;</td>
						<td>fsantana&nbsp;</td>
						<td>FSM&nbsp;</td>
						<td>CU.1&nbsp;</td>
						<td>fsantana@infomed.sld.cu&nbsp;</td>
						<td>2013-02-09 20:17:03&nbsp;</td>
						<td>2013-03-02 23:11:33&nbsp;</td>
						<td class="actions"><a href="/lildbi/users/view/6">View</a>							<a href="/lildbi/users/edit/6">Edit</a>							<form action="/lildbi/users/delete/6" name="post_5133d6c7c6cff" id="post_5133d6c7c6cff" style="display:none;" method="post"><input type="hidden" name="_method" value="POST"></form><a href="#" onclick="if (confirm(&#039;Are you sure you want to delete # 6?&#039;)) { document.post_5133d6c7c6cff.submit(); } event.returnValue = false; return false;">Delete</a>						</td>
					</tr>
										<tr>
						<td>17&nbsp;</td>
						<td>LuisA&nbsp;</td>
						<td>luisalberto&nbsp;</td>
						<td>LA&nbsp;</td>
						<td>CU.2&nbsp;</td>
						<td>luis@gmail.com&nbsp;</td>
						<td>2013-02-11 03:47:17&nbsp;</td>
						<td>2013-02-11 04:00:55&nbsp;</td>
						<td class="actions"><a href="/lildbi/users/view/17">View</a>							<a href="/lildbi/users/edit/17">Edit</a>							<form action="/lildbi/users/delete/17" name="post_5133d6c7c88a6" id="post_5133d6c7c88a6" style="display:none;" method="post"><input type="hidden" name="_method" value="POST"></form><a href="#" onclick="if (confirm(&#039;Are you sure you want to delete # 17?&#039;)) { document.post_5133d6c7c88a6.submit(); } event.returnValue = false; return false;">Delete</a>						</td>
					</tr>
										<tr>
						<td>18&nbsp;</td>
						<td>Carlos&nbsp;</td>
						<td>carloernesto&nbsp;</td>
						<td>CE&nbsp;</td>
						<td>CU.542&nbsp;</td>
						<td>carlosernesto@gmail.com&nbsp;</td>
						<td>2013-02-11 03:59:28&nbsp;</td>
						<td>2013-03-02 22:45:02&nbsp;</td>
						<td class="actions"><a href="/lildbi/users/view/18">View</a>							<a href="/lildbi/users/edit/18">Edit</a>							<form action="/lildbi/users/delete/18" name="post_5133d6c7ca1ce" id="post_5133d6c7ca1ce" style="display:none;" method="post"><input type="hidden" name="_method" value="POST"></form><a href="#" onclick="if (confirm(&#039;Are you sure you want to delete # 18?&#039;)) { document.post_5133d6c7ca1ce.submit(); } event.returnValue = false; return false;">Delete</a>						</td>
					</tr>
										<tr>
						<td>22&nbsp;</td>
						<td>Camilo&nbsp;</td>
						<td>camilo&nbsp;</td>
						<td>CA&nbsp;</td>
						<td>CU.6&nbsp;</td>
						<td>camilo@infomed.sld.cu&nbsp;</td>
						<td>2013-03-02 22:23:33&nbsp;</td>
						<td>2013-03-02 22:42:02&nbsp;</td>
						<td class="actions"><a href="/lildbi/users/view/22">View</a>							<a href="/lildbi/users/edit/22">Edit</a>							<form action="/lildbi/users/delete/22" name="post_5133d6c7cbc2f" id="post_5133d6c7cbc2f" style="display:none;" method="post"><input type="hidden" name="_method" value="POST"></form><a href="#" onclick="if (confirm(&#039;Are you sure you want to delete # 22?&#039;)) { document.post_5133d6c7cbc2f.submit(); } event.returnValue = false; return false;">Delete</a>						</td>
					</tr>
										<tr>
						<td>23&nbsp;</td>
						<td>gsfg&nbsp;</td>
						<td>dfgasdfsdf&nbsp;</td>
						<td>asdfasdf&nbsp;</td>
						<td>asdfasdfad&nbsp;</td>
						<td>aakalala@vsdfas.com&nbsp;</td>
						<td>2013-03-04 00:03:35&nbsp;</td>
						<td>2013-03-04 00:03:35&nbsp;</td>
						<td class="actions"><a href="/lildbi/users/view/23">View</a>							<a href="/lildbi/users/edit/23">Edit</a>							<form action="/lildbi/users/delete/23" name="post_5133d6c7cd5f2" id="post_5133d6c7cd5f2" style="display:none;" method="post"><input type="hidden" name="_method" value="POST"></form><a href="#" onclick="if (confirm(&#039;Are you sure you want to delete # 23?&#039;)) { document.post_5133d6c7cd5f2.submit(); } event.returnValue = false; return false;">Delete</a>						</td>
					</tr>
									</table>
				<p>
					Page 1 of 1, showing 5 records out of 5 total, starting on record 1, ending on 5				</p>

							</div>
		</div>
	</div>
</div>



		</div>
		<div id="footer">
			<footer>
			<hr>
				<p height="5" align="center">
					<font face="Verdana" size="1">BIREME/OPS/OMS - Centro
						Latinoamericano y del Caribe de Informaci&oacute;n en Ciencias de
						la Salud</font><br> <font face="Verdana" size="1">LILDBI-Web
							Versi&oacute;n 1.8 - 2013 </font>
				
				</p>
			
			</footer>
		</div>
	</div>
</body>
</html>
