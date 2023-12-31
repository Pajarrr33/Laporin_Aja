<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $register = [
        'username' => 'alpha_numeric|is_unique[masyarakat.username]',
        'email' => 'required|valid_email',
        'password' => 'min_length[8]|alpha_numeric_punct',
        'password2' => 'matches[password]'
        ];
        
   public $register_errors = [
       'username' => [
           'alpha_numeric' => 'Username hanya boleh mengandung huruf dan angka',
           'is_unique' => 'Username sudah dipakai'
           ],
        'password' => [
            'min_length' => 'Password harus terdiri dari 8 kata',
            'alpha_numeric_punct' => 'Password hanya boleh mengandung angka, huruf, dan karakter yang valid'
            ],
       'password2' => [
           'matches' => 'Konfirmasi password tidak cocok'
           ]
       ];

    public $tambah_petugas = [
        'nama_petugas' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Username Harus diisi',
            ]
        ],
        'username' => [
            'rules' => 'alpha_numeric|is_unique[petugas.username]',
            'errors' => [
                'alpha_numeric' => 'Username hanya boleh mengandung huruf dan angka',
                'is_unique' => 'Username sudah dipakai'
            ]
        ],
        'email' => [
            'rules' => 'is_unique[petugas.email]',
            'errors' => [
                'is_unique' => 'Email sudah dipakai'
            ]
        ],
        'password' => [
            'rules' => 'min_length[8]|alpha_numeric_punct',
            'errors' => [
                'min_length' => 'Password harus terdiri dari 8 kata',
                'alpha_numeric_punct' => 'Password hanya boleh mengandung angka, huruf, dan karakter yang valid'
            ]
        ],
        'confirm' => [
            'rules' => 'matches[password]',
            'errors'=> [
                'matches' => 'Konfirmasi password tidak cocok'
            ]
        ],
        'telepon' => [
            'rules' => 'numeric|min_length[8]|max_length[13]',
            'errors' => [
                'numeric' => 'Nomor telepon hanya boleh mengandung angka',
                'min_length' => 'Nomor telepon minimal 8 angka',
                'max_length' => 'Nomor telepon maksimal 13 angka'
            ]
        ]
    ];

    public $update_petugas = [
        'nama_petugas' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Username Harus diisi',
            ]
        ],
        'username' => [
            'rules' => 'alpha_numeric|is_unique[petugas.username]',
            'errors' => [
                'alpha_numeric' => 'Username hanya boleh mengandung huruf dan angka',
                'is_unique' => 'Username sudah dipakai'
            ]
        ],
        'email' => [
            'rules' => 'is_unique[petugas.email]',
            'errors' => [
                'is_unique' => 'Email sudah dipakai'
            ]
        ],
        'telepon' => [
            'rules' => 'numeric|min_length[8]|max_length[13]',
            'errors' => [
                'numeric' => 'Nomor telepon hanya boleh mengandung angka',
                'min_length' => 'Nomor telepon minimal 8 angka',
                'max_length' => 'Nomor telepon maksimal 13 angka'
            ]
        ]
    ];

}
