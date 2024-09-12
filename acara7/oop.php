<?php include("class_lib.php"); ?> 

<?php  
// Membuat objek baru bernama $stefan dari class person
$stefan = new person(); 
// Membuat objek baru bernama $jimmy dari class person
$jimmy = new person; 
  
// Mengatur nama untuk objek $stefan menggunakan method set_name
$stefan->set_name("Stefan Mischook"); 
// Mengatur nama untuk objek $jimmy menggunakan method set_name
$jimmy->set_name("Nick Waddles"); 
  
// Menampilkan nama yang telah diatur untuk objek $stefan menggunakan method get_name
echo "Stefan's full name: " . $stefan->get_name(); 
// Menampilkan nama yang telah diatur untuk objek $jimmy menggunakan method get_name
echo "Nick's full name: " . $jimmy->get_name();  
?>
