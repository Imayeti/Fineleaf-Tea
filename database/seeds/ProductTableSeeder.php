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
      $goldenmonkey = new \App\product;
      $goldenmonkey->name = 'Golden Monkey';
      $goldenmonkey->full_description = 'Sun-dried black tea made by the PuErh producing people of Bulang in Yunnan. Figs, dried jujube, hay, wet rocks and a herbal, honeyed sweetness.';
      $goldenmonkey->short_description = 'Sun-dried black tea';
      $goldenmonkey->img_src = "/images/Golden-Monkey-Black.jpg";
      $goldenmonkey->price = 15.00;
      $goldenmonkey->save();

      $goldenmonkey = new \App\product;
      $goldenmonkey->name = 'Little Tong Mu';
      $goldenmonkey->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $goldenmonkey->short_description = 'Unsmoked Lapsang ';
      $goldenmonkey->img_src = "/images/littletongmu.jpg";
      $goldenmonkey->price = 18.00;
      $goldenmonkey->save();
    }
}
