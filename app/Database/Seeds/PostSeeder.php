<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        //  membuat data
        $posts_data = [
            [
                'title'  => 'Cara mudah buat Hello World',
                'slug'   => 'codeigniter-starter',
                'content'=> 'Lorem ipsum dolor sit amet, consectetur
adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.'
            ],
            [
                'title'  => 'Pola spin terbaru 100% GACORRR!!!',
                'slug'   => 'papa-zeus',
                'content'=> 'Sed ut perspiciatis unde omnis iste natus error
sit voluptatem accusantium doloremque laudantium, totam rem aperiam.'
            ],
            [
                'title'  => 'Meetup komunitas Kelas Coding',
                'slug'   => 'meetup-kelas-coding',
                'content'=> 'At vero eos et accusamus et iusto odio
dignissimos ducimus qui blanditiis voluptatum deleniti atque corrupti quos.'
            ]
        ];

        foreach($posts_data as $data) {
            // insert semua data kedalam tabel
            $this->db->table('posts')->insert($data);
        }
    }
}
