<?php
/**
 * class Guru
 *
 * @package velocity-elearning
*/

namespace VelocityElearning;

class Guru extends Elearning
{
    public function initialize(){
        // add role
        add_role(
            'guru',
            __('Guru'),
            array(
                'read'              => true, // Allows a user to read
                'create_posts'      => false, // Allows user to create new posts
                'edit_posts'        => false, // Allows user to edit their own posts
                'edit_others_posts' => false, // Allows user to edit others posts too
                'publish_posts'     => false, // Allows the user to publish posts
                'manage_categories' => true, // Allows user to manage post categories
                'upload_files' 		=> true, // Allows user to upload files
            )
        );
        add_action( 'cmb2_init', array($this, 'register_cmb2') );
    }
    
    public function register_cmb2() {
        $cmb = new_cmb2_box( array(
            'id'           => 'userguru_meta',
            'title'        => 'Test Metabox',
            'object_types' => array( 'user' ),
        ) );

        $cmb->add_field( array(
            'name' => 'Role',
            'desc' => '',
            'id'   => 'role',
            'type' => 'hidden',
            'default' => 'guru',
        ) );
        $cmb->add_field( array(
            'name' => 'NIDN',
            'desc' => 'Ini akan dipakai untuk login username.',
            'id'   => 'user_login',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Password',
            'desc' => 'Password untuk login.',
            'id'   => 'user_pass',
            'type' => 'text_medium',
        ) );
        $cmb->add_field( array(
            'name' => 'Nama Lengkap',
            'desc' => '',
            'id'   => 'first_name',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Tempat Lahir',
            'desc' => '',
            'id'   => 'tempat_lahir',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Tanggal Lahir',
            'desc' => '',
            'id'   => 'tanggal_lahir',
            'type' => 'text_date',
            'date_format' => 'd-m-Y'
        ) );
        $cmb->add_field( array(
            'name' => 'Jenis Kelamin',
            'desc' => '',
            'id'   => 'jenis_kelamin',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Agama',
            'desc' => '',
            'id'   => 'agama',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Telepon',
            'desc' => '',
            'id'   => 'telepon',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Alamat',
            'desc' => '',
            'id'   => 'alamat',
            'type' => 'textarea_small',
        ) );
        $cmb->add_field( array(
            'name' => 'Program Studi',
            'desc' => '',
            'id'   => 'prodi',
            'type' => 'select',
            'options' => $this->prodi(),
        ) );
    }

}

// Inisialisasi class ItemGame
$Guru = new Guru();
$Guru->initialize();