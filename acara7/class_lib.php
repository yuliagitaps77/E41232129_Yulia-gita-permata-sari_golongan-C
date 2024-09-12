<?php  
// Mendefinisikan class bernama "person"
class person { 
    // Deklarasi variabel (property) $name dengan visibilitas default (public)
    var $name;  
    
    // Fungsi (method) untuk mengatur nilai variabel $name
    function set_name($new_name) {  
        // Menggunakan $this untuk merujuk ke instance saat ini dari class, dan mengatur nilai $name
        $this->name = $new_name;   
    } 
    
    // Fungsi (method) untuk mengambil nilai dari variabel $name
    function get_name() { 
        // Mengembalikan nilai $name dari instance yang sedang berjalan
        return $this->name; 
    } 
}  
?>
