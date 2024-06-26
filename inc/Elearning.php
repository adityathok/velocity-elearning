<?php
/**
 * class Elearning
 *
 * @package velocity-elearning
*/

namespace VelocityElearning;

class Elearning
{ 
    public function prodi(){
        $prodi = get_option( 'vdel_prodi' );
        return $prodi?array_combine($prodi, $prodi):[];
    }

    public function jenis_kelamin(){
        $jk = ['Laki-Laki','Perempuan'];
        return $jk?array_combine($jk, $jk):[];
    }
}