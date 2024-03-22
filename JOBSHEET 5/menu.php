<?php

    $menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
        [
            "nama" => "Wisata",
            "subMenu" => [
                [
                "nama" => "Pantai"
                ],
                [
                "nama" => "Gunung"
                ]
            ]
        ],
        [
            "nama" => "Kuliner"
        ],
        [
            "nama" => "Hiburan"
        ]
    ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu, $indent = 0) {
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}</li>";

        if (isset($item['subMenu'])) {
            echo "<ul>";
            tampilkanMenuBertingkat($item['subMenu'], $indent + 1);
            echo "</ul>";
        }
    }
}

echo "<ul>";
tampilkanMenuBertingkat($menu);
echo "</ul>";

?>