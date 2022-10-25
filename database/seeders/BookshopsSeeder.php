<?php

namespace Database\Seeders;

use App\Models\Bookshop;
Use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // empties bookshops table
        // resets autoincrement to 1
        DB::table('bookshops')->truncate();

        $bookshops = [
            'Prague' => [
                'Knihy Dobrovský',
                'Kosmas',
                'Neoluxor'
            ],
            'London' => [
                'Blackwell\'s',
                'Daunt Books',
                'Foyles',
                'John Smith & Son',
                'W H Smith',
                'Waterstones',
                'The Works'
            ],
            'New York' => [
                'Amazon Books',
                'Anderson\'s Bookshops',
                'Barnes & Noble',
                'Bookmans',
                'Books-A-Million',
                'Books, Inc.',
                'Deseret Book, also operates Seagull Book',
                'Follett\'s',
                'Half Price Books',
                'Hudson News',
                'Joseph-Beth Booksellers',
                'Kinokuniya',
                'Mardel Christian Stores',
                'Powell\'s Books',
                'Schuler Books & Music',
                'Tattered Cover'
            ]
        ];

        foreach ($bookshops as $city_name =>$city_bookshops) {
            foreach ($city_bookshops as $bookshop_name) {
                //creates new object
                $bookshop = new Bookshop;
                //fills with data
                $bookshop->city = $city_name;
                $bookshop->name = $bookshop_name;
                //saves object
                $bookshop->save();
            }
        }
    }
}
