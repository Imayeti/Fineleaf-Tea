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

      //8 black teas
      $tea = new \App\product;
      $tea->name = 'Golden Monkey';
      $tea->type = 'blacktea';
      $tea->full_description = 'Sun-dried black tea made by the PuErh producing people of Bulang in Yunnan. Figs, dried jujube, hay, wet rocks and a herbal, honeyed sweetness.';
      $tea->short_description = 'Sun-dried black tea';
      $tea->img_src = "images/Golden-Monkey-Black.jpg";
      $tea->price = 15.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak. This tea is ORIGINAL Tong Mu smoked Lapsang, made with top quality leaves and smoked with skill. The wood used is a fruit wood (Longan) which adds a sweet and fruity note to the tea and the smoke is warming, comforting and enticing rather than harsh, acrid and overpowering';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Keemun';
      $tea->type = 'blacktea';
      $tea->full_description = 'This is the finest grade of Keemun. It is made from the Xiao (small) pickings of 50-year-old trees grown in Qimen and hand-rolled before drying. This creates a much more complex taste and smoother texture than the standard Keemun Maofeng which is not hand-rolled.';
      $tea->short_description = 'Top shelf, hand-rolled Keemun Black ';
      $tea->img_src = "images/keemun.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Jin Jun Mei';
      $tea->type = 'blacktea';
      $tea->full_description = 'Highest grade Wuyi tea picked only a few days per year. Turkish delight notes of rose and cocoa, lychee fruitiness and roasted prune. Ultra soft and juicy. This is a very special tea. It is one of the most expensive teas in China and almost impossible to find outside the most discerning tea circles.';
      $tea->short_description = 'High grade authentic Jin Jun Mei';
      $tea->img_src = "images/jinjunmei.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      //green teas

      $tea = new \App\product;
      $tea->name = 'Long Jing';
      $tea->type = 'greentea';
      $tea->full_description = 'Long jing';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "images/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

    }
}
