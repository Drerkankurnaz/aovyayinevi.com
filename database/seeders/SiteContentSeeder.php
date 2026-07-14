<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SiteContentSeeder extends Seeder
{
    protected function images($folder)
    {
        $path = storage_path("app/public/$folder");
        if (!is_dir($path)) {
            return [];
        }
        $result = [];
        foreach (File::allFiles($path) as $f) {
            if (in_array(strtolower($f->getExtension()), ['jpg', 'jpeg', 'png', 'webp'])) {
                $result[] = $folder . '/' . str_replace('\\', '/', substr($f->getPathname(), strlen($path) + 1));
            }
        }
        return $result;
    }

    public function run()
    {
        $now = now();

        if (DB::table('books')->count() === 0) {
            $imgs = $this->images('books');
            $n = max(count($imgs), 6);
            for ($i = 1; $i <= $n; $i++) {
                DB::table('books')->insert([
                    'title' => "Kitap $i",
                    'content' => "<p>Kitap $i açıklaması yakında eklenecektir.</p>",
                    'photo' => $imgs ? $imgs[($i - 1) % count($imgs)] : null,
                    'price' => '0',
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('writers')->count() === 0) {
            $imgs = $this->images('writers');
            $n = max(count($imgs), 4);
            for ($i = 1; $i <= $n; $i++) {
                DB::table('writers')->insert([
                    'title' => "Yazar $i",
                    'photo' => $imgs ? $imgs[($i - 1) % count($imgs)] : null,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }
    }
}
