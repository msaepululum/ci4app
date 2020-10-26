<?php

namespace App\Controllers;

use App\Models\Komikmodel;
use CodeIgniter\HTTP\Request;

class Komik extends BaseController
{
    protected $komikmodel;

    public function __construct()
    {
        $this->komikmodel = new Komikmodel();
    }
    public function index()
    {

        $data = [
            'title' => 'komik',
            'komik' => $this->komikmodel->getKomik()
        ];

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        // $komik = $this->komikmodel->getKomik($slug);
        $data = [
            'title' => 'Detail komik',
            'komik' => $this->komikmodel->getKomik($slug)
        ];

        //jika komik tidak ada di tabel

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik ' . $slug . 'Tidak ditemuka');
        }

        return view('komik/detail', $data);
    }

    public function create()
    {


        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('komik/create', $data);
    }

    public function save()
    {
        //validasi

        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field}  Harus di isi',
                    'is_unique' => '{field}  sudah ada'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukurang gambar terlalu besar',
                    'is_image' => ' yang ada pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/Komik/create')->withInput();
        }
        // dd('berhasil');
        // ambil gambar
        $file_sampul = $this->request->getFile('sampul');
        if ($file_sampul->getError() == 4) {
            $namasampul = 'default.jpg';
        } else {
            $namasampul = $file_sampul->getRandomName();
            $file_sampul->move('img', $namasampul);
        }
        // generate nama sampul random


        //pindahkan file ke folder img



        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikmodel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namasampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambah');

        return redirect()->to('/komik');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id

        $komik = $this->komikmodel->find($id);
        //hapus gambar

        if ($komik['sampul'] != 'default.jpg') {

            unlink('img/' . $komik['sampul']);
        }

        $this->komikmodel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {

        $data = [
            'title' => 'Form Ubah  Data',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikmodel->getKomik($slug)
        ];

        return view('komik/edit', $data);
    }

    public function Update($id)
    {
        // cek judul
        $komiklama = $this->komikmodel->getKomik($this->request->getVar('slug'));

        if ($komiklama['judul'] == $this->request->getVar('judul')) {
            $rulejudul = 'required';
        } else {
            $rulejudul = 'required|is_unique[komik.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rulejudul,
                'errors' => [
                    'required' => '{field}  Harus di isi',
                    'is_unique' => '{field}  sudah ada'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpeg,image/png,image/jpg]',
                'errors' => [
                    'max_size' => 'ukurang gambar terlalu besar',
                    'is_image' => ' yang ada pilih bukan gambar'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Komik/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput();
        }
        // dd($this->request->getVar('sampulLama'));
        $filesampul = $this->request->getFile('sampul');

        // //cek gambar, apakah tetap gambar lama

        if ($filesampul->getError() == 4) {
            $namasampul = $this->request->getVar('sampulLama');
        } else {
            $namasampul = $filesampul->getRandomName();

            $filesampul->move('img', $namasampul);

            // unlink('img/' . $this->request->getVar('sampulLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikmodel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namasampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di rubah');

        return redirect()->to('/komik');
    }

    //--------------------------------------------------------------------

}
