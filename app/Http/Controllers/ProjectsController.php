<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\dModelContent;
use App\Models\PartnerContent;

class ProjectsController extends Controller
{
    public function index()
    {
        $carouselProjectItems = HomeContent::all()->toArray();

        $carouselPartnerItems = PartnerContent::all()->toArray();
        
        // $carouselEventItems = [
        //     [
        //         'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utara',
        //         'place' => 'Kementrian PUPR',
        //         'date' => 'Maret 2024',
        //         'image' => asset('img/event/peresmianinpres-min.jpg')
        //     ],
        //     [
        //         'title' => 'Ground Breaking Underpass Gatot Subroto Medan',
        //         'place' => 'Kementrian PUPR',
        //         'date' => 'Oktober 2023',
        //         'image' => asset('img/event/GroundBreakingUnderpass-min.jpg')
        //     ],
        //     [
        //         'title' => 'AL-AMJAD 8TH ANNIVERSARY',
        //         'place' => 'AL-AMJAD Islamic School',
        //         'date' => 'Mei 2024',
        //         'image' => asset('img/event/alamjadanniv-min.jpg')
        //     ],
        //     [
        //         'title' => 'Wisuda Program Sarjana, Magister, & Doktor Periode I Tahun 2024',
        //         'place' => 'Universitas Medan Area',
        //         'date' => 'Juni 2024',
        //         'image' => asset('img/event/umawisuda-min.jpg')
        //     ],
        //     [
        //         'title' => 'Gala Dinner',
        //         'place' => 'PT Anglo-Eastern Plantations',
        //         'date' => 'Juni 2024',
        //         'image' => asset('img/event/galadinneraep-min.jpg')
        //     ],
        //     [
        //         'title' => 'Pelantikan Badan Otonom',
        //         'place' => 'BPD HIPMI SUMUT',
        //         'date' => 'Agustus 2023',
        //         'image' => asset('img/event/pelantikanbanom-min.jpg')
        //     ],
        //     [
        //         'title' => 'HUT BANI Ke-46',
        //         'place' => 'Badan Arbitrase Nasional Indonesia',
        //         'date' => 'Desember 2023',
        //         'image' => asset('img/event/hutbani46-min.jpg')
        //     ],
        //     [
        //         'title' => 'HIPMI Gold Club Indonesia Sumatera Utara Tournament 2023',
        //         'place' => 'BPD HIPMI Sumatera Utara',
        //         'date' => 'Agustus 2023',
        //         'image' => asset('img/event/hipmigolf-min.jpg')
        //     ],
        //     [
        //         'title' => 'Welcoming Dinner',
        //         'place' => 'PT Anglo-Eastern Plantations',
        //         'date' => 'Juni 2024',
        //         'image' => asset('img/event/welcomingdinneraep-min.jpg')
        //     ],
        //     [
        //         'title' => 'Al-Amjad Peduli Palestina Donasi Untuk Palestina',
        //         'place' => 'AL-AMJAD Islamic School',
        //         'date' => 'Januari 2024',
        //         'image' => asset('img/event/donasipalestine-min.jpg')
        //     ],
        //     [
        //         'title' => 'Pendidikan & Pelatihan Wilayah Khusus',
        //         'place' => 'Jaringan Pengusaha Nasional Pengurus Wilayah Provinsi Sumatera Utara',
        //         'date' => 'Januari 2024',
        //         'image' => asset('img/event/diklatwilsujapnas-min.jpg')
        //     ],
        //     [
        //         'title' => 'Family Gathering',
        //         'place' => 'PT Anglo-Eastern Plantations',
        //         'date' => 'Juni 2024',
        //         'image' => asset('img/event/familygatheringaep-min.jpg')
        //     ],
        // ];

        $carouselWeddingItems = [
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaaa',
                'date' => 'Maret 2024',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 2023',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 2022',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaa',
                'date' => 'Maret 2021',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaaa',
                'date' => 'Maret 20241',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 20231',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 20221',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaa',
                'date' => 'Maret 20211',
                'image' => asset('img/cover.png')
            ]
        ];

        $carouselGraphicItems = [
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaaa',
                'date' => 'Maret 2024',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 2023',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 2022',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaa',
                'date' => 'Maret 2021',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaaa',
                'date' => 'Maret 20241',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 20231',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaa',
                'date' => 'Maret 20221',
                'image' => asset('img/cover.png')
            ],
            [
                'title' => 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utaraaaa',
                'date' => 'Maret 20211',
                'image' => asset('img/cover.png')
            ]
        ];

        $carouselModellingItems = dModelContent::all()->toArray();

        // $carouselPartnerItems = [
        //     [
        //         'image' => asset('img/icon/Asset1.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset2.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset3.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset4.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset5.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset6.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset7.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset8.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset9.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset10Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset11Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset12Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset13Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset14Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset15Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset16Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset17Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset18Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset19Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset20Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset21Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset22Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset23Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset24Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset25Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset26Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset27Logo.png')
        //     ],
        //     [
        //         'image' => asset('img/icon/Asset28Logo.png')
        //     ],
        // ];

        return view('projects', compact('carouselProjectItems','carouselWeddingItems','carouselGraphicItems','carouselModellingItems','carouselPartnerItems'));
    }
}
