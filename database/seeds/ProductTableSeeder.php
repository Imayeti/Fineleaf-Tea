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
      $tea = new \App\product;
      $tea->name = 'Golden Monkey';
      $tea->full_description = 'Sun-dried black tea made by the PuErh producing people of Bulang in Yunnan. Figs, dried jujube, hay, wet rocks and a herbal, honeyed sweetness.';
      $tea->short_description = 'Sun-dried black tea';
      $tea->img_src = "images/Golden-Monkey-Black.jpg";
      $tea->price = 15.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

    }
}
