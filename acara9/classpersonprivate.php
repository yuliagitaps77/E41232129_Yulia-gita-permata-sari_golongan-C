<?php  
// Mendefinisikan class bernama "person"
class person { 
    // Mendeklarasikan properti $name dengan visibilitas private (hanya bisa diakses dari dalam class)
    private $name;  
    
    // Method set_name digunakan untuk mengatur nilai properti $name
    function set_name($new_name) {  
        // Menggunakan $this untuk merujuk ke instance yang sedang diakses dan menetapkan nilai $new_name ke properti $name
        $this->name = $new_name;       
    } 
    
    // Method get_name untuk mengambil nilai properti $name dan mengembalikannya
    function get_name() { 
        return $this->name; 
    } 
}  
?>
<?php 
// Membuat objek baru bernama $person1 dari class person
$person1 = new Person(); 

// Mencoba mengakses properti private $name secara langsung dari luar class (ini akan menghasilkan error)
echo "Hai ".$person1->name;  // Akan menyebabkan error karena properti $name bersifat private

echo "<hr>"; 

// Memanggil method get_name() untuk mencetak nilai $name yang di-set
echo $person1->get_name();  // Ini akan bekerja jika sebelumnya set_name() dipanggil untuk mengatur nilai $name
?>
