<?php

class Vlang {

    public $text;
    
    public function normalize($teks) {
        return preg_replace('/v(a|i|u|e|o)|V(A|I|U|E|O)/', '', $teks);
    }
    
    public function to_vlang($teks) {  
        $lower = preg_replace('/a|i|u|e|o/', '$0v$0', $teks);
        $upper = preg_replace('/A|I|U|E|O/', '$0V$0', $lower);
        return $upper;
    }

}

?>