    <?php
    class Buah{
        private $warna;

        public function makan(){
            // Kunyah
            // nyam..nyam..nyam
        }

        public function setWarna($warna){
            $this->warna = $warna;
        }
    }

    class Apel extends Buah {
        public function makan(){
            // kunyah
            // sampai bagian tengah
        }
    }

    class Jeruk extends Buah {
        public function makan(){
            // kupas
            // kunyah
        }
    }

    abstract class Buah {
        private $warna;

        abstract public function makan();

        public function setWarna($warna){
            $this->warna = $warna;
        }
    }
    ?>
