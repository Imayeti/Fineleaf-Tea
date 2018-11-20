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
      $tea->img_src = "/images/blacktea/Golden-Monkey-Black.jpg";
      $tea->price = 15.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak. This tea is ORIGINAL Tong Mu smoked Lapsang, made with top quality leaves and smoked with skill. The wood used is a fruit wood (Longan) which adds a sweet and fruity note to the tea and the smoke is warming, comforting and enticing rather than harsh, acrid and overpowering';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "/images/blacktea/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Keemun';
      $tea->type = 'blacktea';
      $tea->full_description = 'This is the finest grade of Keemun. It is made from the Xiao (small) pickings of 50-year-old trees grown in Qimen and hand-rolled before drying. This creates a much more complex taste and smoother texture than the standard Keemun Maofeng which is not hand-rolled.';
      $tea->short_description = 'Top shelf, hand-rolled Keemun Black ';
      $tea->img_src = "/images/blacktea/keemun.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Jin Jun Mei';
      $tea->type = 'blacktea';
      $tea->full_description = 'Highest grade Wuyi tea picked only a few days per year. Turkish delight notes of rose and cocoa, lychee fruitiness and roasted prune. Ultra soft and juicy. This is a very special tea. It is one of the most expensive teas in China and almost impossible to find outside the most discerning tea circles.';
      $tea->short_description = 'High grade authentic Jin Jun Mei';
      $tea->img_src = "/images/blacktea/jinjunmei.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "/images/blacktea/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "/images/blacktea/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "/images/blacktea/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak.';
      $tea->short_description = 'Unsmoked Lapsang ';
      $tea->img_src = "/images/blacktea/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();

      //green teas------------------------------------------------------------------------

      $tea = new \App\product;
      $tea->name = 'Long Jing';
      $tea->type = 'greentea';
      $tea->full_description = "This is China's most famous Green tea, absolutely revered for its rich yet refreshing flavour and the fragrance of lush spring grass. This tea was picked on March 19th 2018 making it a very early Pre Qing Ming tea.
      Authentic Long Jing tea (otherwise known as Dragonwell) must be grown in Zhejiang province. If it is grown anywhere else then it is considered a fake (much like champagne). Every year we taste many samples of Long Jing to find our batch for the year. For the past couple of years, we have selected a tea from outside the West Lake area because we feel that it has a much higher quality compared with the West Lake tea.";
      $tea->short_description = 'Pre Qing Ming harvest of one of China’s most famous teas';
      $tea->img_src = "/images/greentea/imperialgreen.jpg";
      $tea->price = 22.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Gyukuro';
      $tea->type = 'greentea';
      $tea->full_description = 'Get ready for an intense Umami (rich and savoury) taste and super thick mouthfeel. Gyokuro is made from heavily shaded green tea. In the same way as growing Tencha (to make Matcha), the shading stops the leaves from converting Theanine to Catechins and increases the amount of Chlorophyll. The resulting high Theanine content in the tea means that you get a huge mouthful of mood enhancing umami in your cup!';
      $tea->short_description = 'Top shelf, hand picked Gyokuro.';
      $tea->img_src = "/images/greentea/gyukuro.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Matcha';
      $tea->type = 'greentea';
      $tea->full_description = 'This is a 30g tin of 100% Uji Hikari variety ceremonial grade matcha made from hand-picked tencha which has been shaded for about a month before picking. The shading on these leaves has gone up to 90% by using three covers to almost entirely block out the sun just before harvesting. The leaves are stone ground using granite mills in a small family run factory in Uji which has been making award-winning matcha for generations.';
      $tea->short_description = 'Ultra small batch Uji Matcha';
      $tea->img_src = "/images/greentea/matcha.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Taiping Hou Kui';
      $tea->type = 'greentea';
      $tea->full_description = 'Taiping Hou Kui is a deceptive tea because it has such large leaves but the flavour is so fragrant and delicate. Consistently voted one of China\'s top ten teas, Hou Kui is a special tea made in Tai Ping county from the larger and pointy Shi Da cultivar. This tea is different from other Green teas in that the larger the leaf, the better the tea is considered to be.';
      $tea->short_description = 'A special fully handmade batch of Taiping Hou Kui Green tea';
      $tea->img_src = "/images/greentea/houkui.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Jade Sword';
      $tea->type = 'greentea';
      $tea->full_description = "This tea is made from the milky, green buds and young leaves from the Bai Ye or 'White' tea varietal. The Song Dynasty Emperor Huizong was a great tea lover and proclaimed (in his 900 year old book 'Da Guan Cha Lun') that his favourite tea was from the 'White' tea varietal that sprouts pale white jade coloured leaves. In the 1980's, old tea trees matching this description were discovered in Anji County and some people believe that these were the tea trees to which the Emperor was referring.";
      $tea->short_description = 'Pre Qing Ming picked Anji Green';
      $tea->img_src = "/images/greentea/jadesword.jpg";
      $tea->price = 15.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Dragon Pearl Jasmine';
      $tea->type = 'greentea';
      $tea->full_description = "Dragon Pearl Jasmine is one of those teas that is being sold in every self-respecting tea shop and is often a best seller due to its aroma and appearance. It is made from scenting Fujian Green tea and then hand rolling into balls in order to retain the fragrance of the Jasmine. As usual, there are a wide variety of grades for Dragon Pearl Jasmine (also known as Phoenix pearl).";
      $tea->short_description = "Hand rolled five times infused jasmine Green tea.";
      $tea->img_src = "/images/greentea/dragonpearljasmine.jpg";
      $tea->price = 12.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Houjicha';
      $tea->type = 'greentea';
      $tea->full_description = "This is a traditionally roasted Green tea and takes a fair amount of skill to prevent the leaves from burning or smoking. The depth of flavour comes from the deep roast of the Nibancha (second flush) but the addition of the more expensive Ichibancha (first flush) adds a luxuriant and brighter aroma. The result is a very smooth Green tea full of caramel and sweet soya umami. It should be brewed with hotter water than other Japanese Green tea (about 95 degrees or 205 Fahrenheit) to extract the richness of flavour and don't be afraid to use a little more leaf by volume then you would for other Green teas as the Houjicha leaves are bigger and lighter.";
      $tea->short_description = 'A roasted blend of three pickings of Bancha Green tea';
      $tea->img_src = "/images/greentea/houjicha.jpg";
      $tea->price = 16.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Green Coil';
      $tea->type = 'greentea';
      $tea->full_description = 'This is a vibrant and rich tea whilst maintaining a bright and light demeanour. The buds and leaves are so delicate and fine from perfect firing and hand rolling in small batches. There is a whisper of hot wok underpinning a lush taste of spring vegetables, minerals and elderflower.';
      $tea->short_description = '';
      $tea->img_src = "/images/greentea/greencoil.jpg";
      $tea->price = 13.00;
      $tea->save();



    }
}
