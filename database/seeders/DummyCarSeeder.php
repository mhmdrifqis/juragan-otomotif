<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DummyCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Prepare Storage Directory
        $storageDir = 'cars';
        if (!Storage::disk('public')->exists($storageDir)) {
            Storage::disk('public')->makeDirectory($storageDir);
        }

        // 2. Sample Unsplash Car Images to download (using specific car source URLs)
        $sampleUrls = [
            'https://images.unsplash.com/photo-1502877338535-766e1452684a?q=80&w=1000&auto=format&fit=crop', // Civic
            'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?q=80&w=1000&auto=format&fit=crop', // Porsche
            'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=80&w=1000&auto=format&fit=crop', // BMW
            'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1000&auto=format&fit=crop', // SUV
            'https://images.unsplash.com/photo-1544829099-b9a0c07fad1a?q=80&w=1000&auto=format&fit=crop', // Sport
            'https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?q=80&w=1000&auto=format&fit=crop'  // Mercedes
        ];

        $downloadedImageNames = [];
        $this->command->info('Downloading sample images from Unsplash (this may take a few seconds)...');

        foreach ($sampleUrls as $index => $url) {
            try {
                $contents = file_get_contents($url);
                $filename = 'sample_car_' . $index . '_' . time() . '.jpg';
                $path = $storageDir . '/' . $filename;
                Storage::disk('public')->put($path, $contents);
                $downloadedImageNames[] = $path;
            } catch (\Exception $e) {
                $this->command->warn('Failed to download an image, using placeholder.');
            }
        }

        // 3. Clear existing basic data
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Brand::truncate();
        Category::truncate();
        Car::truncate();
        CarImage::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 4. Create Brands
        $brands = [
            'Toyota', 'Honda', 'BMW', 'Mercedes-Benz', 'Porsche', 'Audi', 'Lexus'
        ];
        
        $brandIds = [];
        foreach ($brands as $brandName) {
            $brand = Brand::create(['name' => $brandName, 'slug' => Str::slug($brandName)]);
            $brandIds[] = $brand->id;
        }

        // 5. Create Categories
        $categories = [
            'SUV', 'Sedan', 'Sport', 'MPV', 'Hatchback'
        ];
        
        $categoryIds = [];
        foreach ($categories as $catName) {
            $category = Category::create(['name' => $catName, 'slug' => Str::slug($catName)]);
            $categoryIds[] = $category->id;
        }

        // 6. Generate Cars
        $transmissions = ['Automatic', 'Manual', 'CVT', 'DCT'];
        $fuelTypes = ['Bensin', 'Diesel', 'Hybrid', 'Listrik'];
        $colors = ['Hitam', 'Putih', 'Silver', 'Merah', 'Biru', 'Abu-abu'];
        $carNames = ['Civic Type R', 'X5 M', '911 Carrera', 'C-Class', 'CR-V RS', 'Aventador', 'Land Cruiser', 'Camry', 'A4', 'RX 350', 'Alphard', 'HR-V', 'Fortuner', 'Pajero Sport', 'M3 Competition'];

        $this->command->info('Producing cars...');

        for ($i = 1; $i <= 30; $i++) {
            $randomName = $carNames[array_rand($carNames)] . ' Ext ' . $i;
            $price = rand(250, 4500) * 1000000; // Between 250jt and 4.5M

            $car = Car::create([
                'brand_id' => $brandIds[array_rand($brandIds)],
                'category_id' => $categoryIds[array_rand($categoryIds)],
                'name' => $randomName,
                'slug' => Str::slug($randomName) . '-' . time(),
                'price' => $price,
                'year' => rand(2015, 2024),
                'transmission' => $transmissions[array_rand($transmissions)],
                'fuel_type' => $fuelTypes[array_rand($fuelTypes)],
                'engine_capacity' => rand(12, 50) * 100, // 1200 - 5000 CC
                'mileage' => rand(500, 120000),
                'color' => $colors[array_rand($colors)],
                'status' => 'available',
                'is_featured' => rand(1, 10) > 8, // 20% chance to be featured
                'description' => "Ini adalah mobil mewah dengan performa luar biasa. Dilengkapi dengan interior premium dan fitur keselamatan canggih. Mobil ini baru saja mendapatkan perawatan menyeluruh sehingga dalam kondisi prima. Segera booking sebelum kehabisan stok langkah kami!",
            ]);

            // 7. Attach Images
            if (!empty($downloadedImageNames)) {
                // Attach 1 to 3 random images to the car
                $numImages = rand(1, 3);
                $imagesToAttach = (array) array_rand(array_flip($downloadedImageNames), $numImages);
                
                foreach ($imagesToAttach as $imgPath) {
                    CarImage::create([
                        'car_id' => $car->id,
                        'image_path' => $imgPath,
                        'is_primary' => true
                    ]);
                }
            }
        }

        $this->command->info('Seeding completed! 30 Cars added.');
    }
}
