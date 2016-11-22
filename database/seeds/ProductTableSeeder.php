<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        		'imagePath' => 'http://prodimage.images-bn.com/pimages/9780545139700_p0_v4_s1200x630.jpg',
        		'title'		=> 'Harry Poter and the Deathly Hallows',
        		'description'=> 'Harry Potter and the Deathly Hallows book 1.',
        		'price'		=> 17
        ]);
        $product->save();

        $product = new \App\Product([
        		'imagePath' => 'http://www.thealmightyguru.com/Reviews/HarryPotter/Images/Cover-ChamberOfSecrets.jpg',
        		'title'		=> 'Harry Poter and the Chamber of secrets',
        		'description'=> 'Harry Poter and the Chamber of secrets book 2.',
        		'price'		=> 16
        ]);
        $product->save();

        $product = new \App\Product([
        		'imagePath' => 'https://03fcd67fd51850d3ba6b-6cb392df11a341bce8c76b1898d0c030.ssl.cf3.rackcdn.com/large/9781/4088/9781408855690.jpg',
        		'title'		=> 'Harry Poter and the order of Phoenix',
        		'description'=> 'Harry Poter and the order of Phoenix book 3',
        		'price'		=> 15
        ]);
        $product->save();

        $product = new \App\Product([
        		'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/b/b4/Harry_Potter_and_the_Prisoner_of_Azkaban_(US_cover).jpg',
        		'title'		=> 'Harry Poter and the prisoner of Azkaban',
        		'description'=> 'Harry Poter and the prisoner of Azkaban book 4',
        		'price'		=> 14
        ]);
        $product->save();

        $product = new \App\Product([
        		'imagePath' => 'https://03fcd67fd51850d3ba6b-6cb392df11a341bce8c76b1898d0c030.ssl.cf3.rackcdn.com/large/9781/4088/9781408855706.jpg',
        		'title'		=> 'Harry Poter and the half-blood Prince',
        		'description'=> 'Harry Poter and the half-blood Prince book 5',
        		'price'		=> 13
        ]);
        $product->save();
    }
}
