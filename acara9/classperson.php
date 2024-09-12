<?php  
// Mendefinisikan class bernama "person"
class person { 
    // Mendeklarasikan properti "name" dengan visibilitas public, artinya dapat diakses langsung dari luar class
    public $name;  
    
    // Mendeklarasikan method "set_name" yang digunakan untuk mengatur nilai properti "name"
    function set_name($new_name) {  
        // Menggunakan $this untuk merujuk ke instance yang sedang diakses, dan menetapkan nilai $new_name ke properti $name
        $this->name = $new_name;   
    } 
    
    // Mendeklarasikan method "get_name" untuk mengambil dan mengembalikan nilai properti "name"
    function get_name() { 
        // Mengembalikan nilai properti $name dari objek
        return $this->name; 
    } 
}  
?> 

<?php 
// Membuat objek baru bernama $person1 dari class person
$person1 = new Person(); 

// Properti $name diakses secara langsung dari luar class dan nilainya diubah menjadi 'Taufiq Rizaldi'
// Juga mencetak teks "Hai" diikuti dengan nama yang baru di-set
echo "Hai " . $person1->name = 'Taufiq Rizaldi'; 

// Menampilkan garis horizontal sebagai pembatas
echo "<hr>"; 

// Memanggil method get_name() untuk mengambil dan mencetak nilai properti $name yang sebelumnya diubah
echo $person1->get_name(); 
?>  
