<?php 

    $hewan = (object) [
        'jenis' => 'brahman',
        'tipe' => [
            'postur' => [
                'bentuk' => 'body-B',
                'ukuran' => 'jumbo'
            ],
            'warna' => 'coklat'
        ],
        'harga'=> [
            'usia' => [
                '1 tahun' => '10 juta',
                '2 tahun' => '20 juta'
            ],
            'berat' => [
                'jantan' => [
                    '800 kg' => '56 juta' ,
                    '1000 kg' => '70 juta'
                ],
                'betina' => [
                    '500 kg' => '35 juta',
                    '700 kg' => '49 juta'
                ]
            ]
        ]
                ];

    $hewan = (array)$hewan;

    echo "<pre>";
    print_r($hewan);
    echo "<pre>";
?>