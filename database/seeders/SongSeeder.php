<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $songs = [
            [
                'name' => 'Machista',
                'artists' => 'M3LOON',
                'album' => 'sepalavergaxd',
                'duration' => '3:20'
            ],
            [
                'name' => 'Himno De La Grasa',
                'artists' => 'MR. GRASO',
                'album' => ':v',
                'duration' => '3:53'
            ],
            [
                'name' => 'Bad Guy',
                'artists' => 'Billie Eilish',
                'album' => 'When We All Fall Asleep, Where Do We Go?',
                'duration' => '3:14'
            ],
            [
                'name' => '¿Por que te volteaste?',
                'artists' => 'Grupo Marrano',
                'album' => 'Episodio 4',
                'duration' => '3:23'
            ],
            [
                'name' => 'Bohemian Rhapsody',
                'artists' => 'Queen',
                'album' => 'A Night at the Opera',
                'duration' => '5:55'
            ],
            [
                'name' => 'Smells Like Teen Spirit',
                'artists' => 'Nirvana',
                'album' => 'Nevermind',
                'duration' => '5:01'
            ],
            [
                'name' => 'HUMBLE.',
                'artists' => 'Kendrick Lamar',
                'album' => 'DAMN.',
                'duration' => '2:57'
            ],
            [
                'name' => 'Someone Like You',
                'artists' => 'Adele',
                'album' => '21',
                'duration' => '4:45'
            ],
            [
                'name' => 'Uptown Funk',
                'artists' => 'Mark Ronson ft. Bruno Mars',
                'album' => 'Uptown Special',
                'duration' => '4:30'
            ],
            [
                'name' => 'Lose Yourself',
                'artists' => 'Eminem',
                'album' => 'Curtain Call',
                'duration' => '5:26'
            ],
            [
                'name' => 'Viva La Vida',
                'artists' => 'Coldplay',
                'album' => 'Viva La Vida or Death and All His Friends',
                'duration' => '4:02'
            ],
            [
                'name' => 'Rolling in the Deep',
                'artists' => 'Adele',
                'album' => '21',
                'duration' => '3:48'
            ],
            [
                'name' => 'Stressed Out',
                'artists' => 'Twenty One Pilots',
                'album' => 'Blurryface',
                'duration' => '3:22'
            ],
            [
                'name' => 'Believer',
                'artists' => 'Imagine Dragons',
                'album' => 'Evolve',
                'duration' => '3:24'
            ],
            [
                'name' => 'Counting Stars',
                'artists' => 'OneRepublic',
                'album' => 'Native',
                'duration' => '4:17'
            ],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}