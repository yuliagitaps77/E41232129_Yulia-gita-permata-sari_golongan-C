<?php  
// Mendefinisikan class bernama "person"
class person { 
    // Mendeklarasikan properti $name dengan visibilitas protected (hanya dapat diakses dari dalam class ini dan class turunan)
    protected $name;  
    
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

// Membuat objek baru bernama $person1 dari class person
$person1 = new Person(); 

// Mengatur nilai dari properti $name menggunakan method set_name
$person1->set_name('Lukman Hakim'); 

// Mengakses nilai dari properti $name menggunakan method get_name
echo $person1->get_name();  // Akan menampilkan: "Lukman Hakim"

// Mencoba mengakses properti protected $name secara langsung (ini akan menghasilkan error)
echo "Hai ".$person1->name = 'Taufiq Rizaldi';  // Akan menyebabkan error karena properti $name bersifat protected

// Mencetak garis horizontal sebagai pembatas
echo "<hr>"; 
?>
