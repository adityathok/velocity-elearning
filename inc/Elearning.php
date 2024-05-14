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

}