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
      $tea->name = 'Superior Keemun';
      $tea->type = 'blacktea';
      $tea->full_description = "This is the finest grade of Keemun. It is made from the 'Xiao' (small) pickings of 50-year-old trees grown in Qimen and hand-rolled before drying. This creates a much more complex taste and smoother texture than the standard 'Keemun Maofeng' which is not hand-rolled.";
      $tea->short_description = 'Top shelf, hand-rolled Keemun Black tea';
      $tea->img_src = "/images/blacktea/superiorkeemun.jpg";
      $tea->price = 15.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Little Tong Mu';
      $tea->type = 'blacktea';
      $tea->full_description = 'Unsmoked Lapsang from the famed Tong Mu village. Floral and fruity with muscatel grapes, lychees, rose, lilac and fresh cut wet oak. This tea is ORIGINAL Tong Mu smoked Lapsang, made with top quality leaves and smoked with skill. The wood used is a fruit wood (Longan) which adds a sweet and fruity note to the tea and the smoke is warming, comforting and enticing rather than harsh, acrid and overpowering';
      $tea->short_description = 'Unsmoked Lapsang black tea';
      $tea->img_src = "/images/blacktea/littletongmu.jpg";
      $tea->price = 18.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Keemun';
      $tea->type = 'blacktea';
      $tea->full_description = 'This is the finest grade of Keemun. It is made from the Xiao (small) pickings of 50-year-old trees grown in Qimen and hand-rolled before drying. This creates a much more complex taste and smoother texture than the standard Keemun Maofeng which is not hand-rolled.';
      $tea->short_description = 'Top shelf, hand-rolled Keemun black tea';
      $tea->img_src = "/images/blacktea/keemun.jpg";
      $tea->price = 21.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Jin Jun Mei';
      $tea->type = 'blacktea';
      $tea->full_description = 'Highest grade Wuyi tea picked only a few days per year. Turkish delight notes of rose and cocoa, lychee fruitiness and roasted prune. Ultra soft and juicy. This is a very special tea. It is one of the most expensive teas in China and almost impossible to find outside the most discerning tea circles.';
      $tea->short_description = 'High grade authentic Jin Jun Mei black tea';
      $tea->img_src = "/images/blacktea/jinjunmei.jpg";
      $tea->price = 25.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Souchong Liquor';
      $tea->type = 'blacktea';
      $tea->full_description = "Zhengshan Xiaozhong means 'Small Leaf Tea from Zhengshan Mountain' and represents a type of black tea made from a small leaf cultivar grown in this area of Fujian. It is commonly converted to the english phonetics of Lapsang Souchong. But wait! This does not mean it is a smoked tea. Many people think that Lapsangs are all pine wood smoked but this method is falling out of favou. For the past ten years, high quality Lapsang is being produced unroasted while smoked tea is usually made from lower quality leaves for the foreign markets";
      $tea->short_description = 'An unsmoked Lapsang that shows the true depth of flavour of this famous tea';
      $tea->img_src = "/images/blacktea/souchong.jpg";
      $tea->price = 14.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Bulang Black';
      $tea->type = 'blacktea';
      $tea->full_description = "This tea is a journey for the senses. The aroma of the brew is predominantly sweet and fruity with gooseberry and jujube. The liquor is soft with cream, malt and sweet hay but transforms to reveal a dry and quenching finish with a tantalisingly subtle burnt raisin bitterness. The sweetness returns in the aftertaste. Sniff the empty cup to really enjoy the interplay of honey and figs – it’s quite an addictive aroma!";
      $tea->short_description = 'Sun-dried black tea made by the PuErh producing people of Bulang in Yunnan.';
      $tea->img_src = "/images/blacktea/bulang.jpg";
      $tea->price = 19.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Dianhong';
      $tea->type = 'blacktea';
      $tea->full_description = "Dianhong is a type of black tea made predominantly with the buds of the Assamica tea varieties in Yunnan province. They produce, light, malty and smooth black teas with warm and sweet aromas. This Dianhong comes from Fengqing which I think produces some of the best quality Dianhong in Yunnan province. This tea is soft and velvety with fabulous warm, malty baked notes and a cooling menthol finish. ";
      $tea->short_description = 'Fengqing Black tea made with a predominance of buds for a lighter tea.';
      $tea->img_src = "/images/blacktea/goldenbud.jpg";
      $tea->price = 16.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = ' Yunnan Black';
      $tea->type = 'blacktea';
      $tea->full_description = "Yunnan Province is home of  some of the finest Black teas in the world (actually some of the finest of many types of tea). It is the spiritual mother province of tea and is one of our favourite partsof the world for tea hunting. This tea is a great introduction to one of the more bold Chinese Black teas made from the Assamica variety (as opposed to the more delicate Sinensis Black teas from Fujian).";
      $tea->short_description = 'Rich Black tea made from the Yunnan Da Ye Zhong cultivar. ';
      $tea->img_src = "/images/blacktea/yunnanblack.jpg";
      $tea->price = 13.00;
      $tea->save();

      //green teas------------------------------------------------------------------------

      $tea = new \App\product;
      $tea->name = 'Long Jing';
      $tea->type = 'greentea';
      $tea->full_description = "This is China's most famous Green tea, absolutely revered for its rich yet refreshing flavour and the fragrance of lush spring grass. This tea was picked on March 19th 2018 making it a very early Pre Qing Ming tea.
      Authentic Long Jing tea (otherwise known as Dragonwell) must be grown in Zhejiang province. If it is grown anywhere else then it is considered a fake (much like champagne). Every year we taste many samples of Long Jing to find our batch for the year. For the past couple of years, we have selected a tea from outside the West Lake area because we feel that it has a much higher quality compared with the West Lake tea.";
      $tea->short_description = 'Pre Qing Ming harvest of one of China’s most famous green teas';
      $tea->img_src = "/images/greentea/imperialgreen.jpg";
      $tea->price = 22.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Gyukuro';
      $tea->type = 'greentea';
      $tea->full_description = 'Get ready for an intense Umami (rich and savoury) taste and super thick mouthfeel. Gyokuro is made from heavily shaded green tea. In the same way as growing Tencha (to make Matcha), the shading stops the leaves from converting Theanine to Catechins and increases the amount of Chlorophyll. The resulting high Theanine content in the tea means that you get a huge mouthful of mood enhancing umami in your cup!';
      $tea->short_description = 'Top shelf, hand picked Gyokuro green tea.';
      $tea->img_src = "/images/greentea/gyukuro.jpg";
      $tea->price = 21.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Matcha';
      $tea->type = 'greentea';
      $tea->full_description = 'This is a 30g tin of 100% Uji Hikari variety ceremonial grade matcha made from hand-picked tencha which has been shaded for about a month before picking. The shading on these leaves has gone up to 90% by using three covers to almost entirely block out the sun just before harvesting. The leaves are stone ground using granite mills in a small family run factory in Uji which has been making award-winning matcha for generations.';
      $tea->short_description = 'Ultra small batch Uji Matcha green tea';
      $tea->img_src = "/images/greentea/matcha.jpg";
      $tea->price = 18.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Taiping Hou Kui';
      $tea->type = 'greentea';
      $tea->full_description = 'Taiping Hou Kui is a deceptive tea because it has such large leaves but the flavour is so fragrant and delicate. Consistently voted one of China\'s top ten teas, Hou Kui is a special tea made in Tai Ping county from the larger and pointy Shi Da cultivar. This tea is different from other Green teas in that the larger the leaf, the better the tea is considered to be.';
      $tea->short_description = 'A special fully handmade batch of Taiping Hou Kui Green tea';
      $tea->img_src = "/images/greentea/houkui.jpg";
      $tea->price = 25.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Jade Sword';
      $tea->type = 'greentea';
      $tea->full_description = "This tea is made from the milky, green buds and young leaves from the Bai Ye or 'White' tea varietal. The Song Dynasty Emperor Huizong was a great tea lover and proclaimed (in his 900 year old book 'Da Guan Cha Lun') that his favourite tea was from the 'White' tea varietal that sprouts pale white jade coloured leaves. In the 1980's, old tea trees matching this description were discovered in Anji County and some people believe that these were the tea trees to which the Emperor was referring.";
      $tea->short_description = 'Pre Qing Ming picked Anji Green tea';
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
      $tea->img_src = "/images/greentea/houjichatwo.jpg";
      $tea->price = 16.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Green Coil';
      $tea->type = 'greentea';
      $tea->full_description = 'This is a vibrant and rich tea whilst maintaining a bright and light demeanour. The buds and leaves are so delicate and fine from perfect firing and hand rolling in small batches. There is a whisper of hot wok underpinning a lush taste of spring vegetables, minerals and elderflower.';
      $tea->short_description = 'a whisper of hot wok underpinning a lush taste of spring vegetables in this green tea';
      $tea->img_src = "/images/greentea/greencoil.jpg";
      $tea->price = 13.00;
      $tea->save();

      // puerh teas

      $tea = new \App\product;
      $tea->name = 'Bing Dao';
      $tea->type = 'puerhtea';
      $tea->full_description = "The most complex blend of 2018, involving a wide range of high end material from several regions. The unique character of this tea is heavy with strength. Bing Dao evolves from steep to steep in a gongfu brewing session, displaying a wide array of characteristics and a unique experience. The tea has a powerful aggressive character in earlier steeps, with a lasting huigan and depth of returning flavor. The later steeps trail off into smooth sweetness and can be resteeped many times. Drink now or age if you can keep your hands off this puppy.";
      $tea->short_description = "500-800 Year Old Gushu Raw PuErh";
      $tea->img_src = "/images/puerhtea/bingdao.jpg";
      $tea->price = 50.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Jing Mai ';
      $tea->type = 'puerhtea';
      $tea->full_description = "This 2018 Jing Mai has a formidable thickness and full bodied mouthfeel.  The tea is sweet and boasts an intense huigan [the lingering sweetness in the mouth after drinking a tea]. Drink this tea young if you don’t mind a touch of aggression in your tea, otherwise age for a bit to smooth out the edges.

      Each cake is 200 grams.";
      $tea->short_description = "Young and powerful sheng puerh";
      $tea->img_src = "/images/puerhtea/hype.jpg";
      $tea->price = 35.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Yueguangbai';
      $tea->type = 'puerhtea';
      $tea->full_description = "Yueguangbai is a bud heavy, high grade production of moonlight white style tea, commissioned from large leaf varietal material usually destined for raw Puer tea. The tea has a heavy, creamy mouth feel with an airy sweetness and aroma. An enduring puerh with distinct character.";
      $tea->short_description = "An enduring puerh with distinct character.";
      $tea->img_src = "/images/puerhtea/nightlife.jpg";
      $tea->price = 38.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Zhang Xiang Bu Lang';
      $tea->type = 'puerhtea';
      $tea->full_description = "Our Zhang Xiang Bu Lang cake has a heavy and layered aroma that is potent and ever-present within the soup of the tea. An extremely smooth young tea with complex top notes and sweetness that will eventually age into a honey like body. A very comfortable tea to drink young or age.

      Each cake is 200 grams.";
      $tea->short_description = "Smooth and complex Raw Puerh Tea Cake";
      $tea->img_src = "/images/puerhtea/zhang.jpg";
      $tea->price = 45.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Hai Long Hao';
      $tea->type = 'puerhtea';
      $tea->full_description = "'Ming Xiang Ya Yuan' is the name of Hai Lang's tea shop and was the first brand that Hai Lang produced.  This was pressed from first flush of spring 'Xi Bang' area tea from Lincang.

This is a pure Kunming storage tea and the brewed tea soup color and still green leaves reflects this dry storage condition.  The tea is potent with strong mouthfeel, long lasting hui gan and cooling effect inthe mouth and throat.  The aged taste is there but overall the tea has retained alot of it's regional character. ";
      $tea->short_description = "2003 Hai Lang Hao 'Xi Bang' Raw Puerh Tea Cake";
      $tea->img_src = "/images/puerhtea/hailonghao.jpg";
      $tea->price = 60.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'Mengku';
      $tea->type = 'puerhtea';
      $tea->full_description = "This is a 2004 pressing by the Wan Shun Hao brand, a small Mengku area producer.  It's spring harvest tea from the Big Snow Mountain area of Mengku, and although the characters on the wrapper proclaim it as 'Millenial Old Tree' (千年老树), it's most likely just tea from bushes or trees (not super old trees).  The brewed tea leaves are large and burly, with big meaty stems, so it's most definitely a quality production.";
      $tea->short_description = "2004 Mengku Raw Puerh";
      $tea->img_src = "/images/puerhtea/mengku.jpg";
      $tea->price = 70.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = '2005 Yi Wu Cha Yuan';
      $tea->type = 'puerhtea';
      $tea->full_description = "A small production from a family producer in Yi Wu town.  This has been aged for 10 years in tropical Jinghong town of Xishuangbanna Prefecture (Yunnan).  The tea cake is produced entirely from Spring 2005 harvested Yi Wu area tea and then stone-pressed in the traditional way. The storage condition has given this tea a red tea soup and sweet camphor and mushroom taste and feel.  The tea is still characteristically Yi Wu.  Smooth with a robust cha qi this is a perfect cake for those seeking something aged with complexity while still retaining the needed character/quality for further aging and improvement.";
      $tea->short_description = "2005 Yi Wu Cha Yuan Big Green Tree Raw Puerh tea cake";
      $tea->img_src = "/images/puerhtea/yiwu.jpg";
      $tea->price = 57.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = '2007 Feng Qing';
      $tea->type = 'puerhtea';
      $tea->full_description = "This is a spring 2007 pressing done in a small Feng Qing area tea factory and then aged in a dry storage condition in Guangzhou until August 2018 when it was purchased by us. This is a very nicely aged raw pu-erh tea that displays just how nicely raw pu-erh made from Feng Qing (a county in Lincang) material can do well if stored corsectly. Sweet and viscous with a spicy aged feeling.  Nice golden orange tea soup and still a decent amount of bitter and astringent.  An excellent every day drinking semi-aged sheng that could also be aged further.  ";
      $tea->short_description = "2007 Feng Qing Zao Chun Yin Hao Raw Puerh Tea Cake";
      $tea->img_src = "/images/puerhtea/fengqing.jpg";
      $tea->price = 40.00;
      $tea->save();

      //white teas

      $tea = new \App\product;
      $tea->name = 'Silver Needle';
      $tea->type = 'whitetea';
      $tea->full_description = "Very early spring picked silver beige buds producing a luscious, thick and soft liquor. Summer meadow flowers and dry grass with sweet, ripe cantaloupe. The process to make the tea sounds incredibly simple - pluck the buds and lay them out until dry. But this simplicity means that there is no place for the farmers to hide and the tiniest factors can reduce the quality of the tea.";
      $tea->short_description = "luscious, thick and soft white tea";
      $tea->img_src = "/images/whitetea/silverneedle.jpg";
      $tea->price = 19.00;
      $tea->save();

      $tea = new \App\product;
      $tea->name = 'White Peony';
      $tea->type = 'whitetea';
      $tea->full_description = "White Peony (Bai Mu Dan) is often classed as the second highest grade white tea below Silver Needle and we think that this is nonsense. These are two very different tasting teas and both should be rightly hailed as immaculate. White Peony is made combining the Silver Needle buds with larger leaves. The tea is then withered and dried allowing for some natural oxidation which turns the leaves dark and brittle.";
      $tea->short_description = "Gold, soft, thick and syrupy white tea";
      $tea->img_src = "/images/whitetea/whitepeony.jpg";
      $tea->price = 16.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Moonlight White';
      $tea->type = 'whitetea';
      $tea->full_description = "A fascinating White tea made from Old tea trees in Jinggu Yunnan. The tea trees are around 100 years old and are probably Camellia Taliensis which makes it a very unique tea since 99.9% of tea is made from Camellia Sinensis varieties. This tea has been picked during the day and then dried indoors with hot air. Withering fresh leaves and drying in this way does take longer time than drying in the sun but that gives the tea that extra level of oxidation and sweetness.";
      $tea->short_description = "Syrupy with sweet white tea with a minty coolness.";
      $tea->img_src = "/images/whitetea/moonlightwhite.jpg";
      $tea->price = 20.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Fuding Silver Needle';
      $tea->type = 'whitetea';
      $tea->full_description = "Anybody who is remotely interested in White tea will know that Fuding in Fujian is revered for producing arguably the best White teas in the world and is highly collected by tea lovers. This is a next level Fuding Silver Needle aged since 2016. Starfruit and honeydew melon move to hay, marzipan and orange blossom cream.";
      $tea->short_description = "Silver Needle white tea aged since 2016";
      $tea->img_src = "/images/whitetea/fudingsilverneedle.jpg";
      $tea->price = 25.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'White Jasmine';
      $tea->type = 'whitetea';
      $tea->full_description = " Buds of the Da Bai tea cultivar are carefully handpicked in spring and allowed to dry in the sun. The tea is then covered in freshly picked jasmine and allowed to infuse overnight. The dried jasmine flowers are removed and the process is repeated up to seven times to create an intense floral aroma. The flavour of this White tea continues to express itself and the result is a powerfully aromatic tea with the soft and velvety texture of a good Silver Needle.";
      $tea->short_description = "White tea buds scented with fresh Jasmine flowers. ";
      $tea->img_src = "/images/whitetea/whitejasmine.jpg";
      $tea->price = 26.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = '2004 Fuding Bai Mu Dan';
      $tea->type = 'whitetea';
      $tea->full_description = " Aged since 2004 in relatively airtight containers, the tea has been allowed to very slowly ferment into an ambrosial nectar. It has those honey and plummy notes that you would expect from an aged White (like many others), however, it is the bright, fresh and juicy notes which impressed us as well as its long taste and textured mouthfeel.";
      $tea->short_description = "Sticky and syrupy 2004 aged White tea blend from Fuding";
      $tea->img_src = "/images/whitetea/baimudancake.jpg";
      $tea->price = 17.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Chrysanthemum White';
      $tea->type = 'whitetea';
      $tea->full_description = "Fragrant combination of Jasmine Silver Needle and Chrysanthemum. Flavor notes akin to wild strawberries, sweet flowers and river pebbles.";
      $tea->short_description = "Jasmine Silver Needle and Chrysanthemum white tea";
      $tea->img_src = "/images/whitetea/whiteblossom.jpg";
      $tea->price = 16.00;
      $tea->save();


      $tea = new \App\product;
      $tea->name = 'Ya Bao';
      $tea->type = 'whitetea';
      $tea->full_description = "Ya Bao is a special bud tea made from the ancillary buds of wild tea trees growing in the Western border of Yunnan. These tea trees (Assamica Dehongensis) can be used to make Yunnan Black and PuErh tea but in late Winter some of the ancillary buds are picked in small quantities. The ancillary or lateral buds are the first shoots of the year which will become stems. This is different to the terminal buds used in most tea production (which will become leaves). These ancillary buds have a unique cone layered appearance and have to be picked sparingly otherwise the tea trees will not grow enough branches.";
      $tea->short_description = "Wihite tea from the buds of wild PuErh trees picked in late winter";
      $tea->img_src = "/images/whitetea/elderwhite.jpg";
      $tea->price = 23.00;
      $tea->save();


      //teaware -------------------------------------------------------------------------------------------
      $teaware = new \App\product;
      $teaware->name = 'Zhang Chaozhou Clay';
      $teaware->type = 'teaware';
      $teaware->full_description = "This 120ml pot is fully handmade from authentic Chaozhou red clay by the Zhang studio in the timeless Xi Shi shape. No moulds were used but instead, this is designed by eye and crafted using hands and manual tools for the ultimate level of detail. Each pot has been made individually for the pinnacle of clay pot brewing. They will all have their own unique character.zhang";
      $teaware->short_description = "Fully handmade 120ml Chaozhou Clay teapot ";
      $teaware->img_src = "/images/teaware/zhangclayteapot.jpg";
      $teaware->price = 90.00;
      $teaware->save();

      $teaware = new \App\product;
      $teaware->name = 'Blue Gaiwan';
      $teaware->type = 'teaware';
      $teaware->full_description = "This gaiwan has a beautiful light blue colour which shows off tea and matt brown edging for visual appeal and grip. The colours are sleek (none of the traditional Chinese designs) and modern and it is simply a beautiful piece of teaware to add to your collection. This Gaiwan is 150ml which is the perfect sessioning size for 2-4 people while being an excellent partner for solo brewing (use a little less leaf and don't fill water to the top). We think that this is the most versatile size to have in your home and then you can add 70-100ml teaware for solo brewing or horizontal tastings.";
      $teaware->short_description = " De Hua porcelain Gaiwan";
      $teaware->img_src = "/images/teaware/bluegaiwan.jpg";
      $teaware->price = 30.00;
      $teaware->save();

      $teaware = new \App\product;
      $teaware->name = 'Blue Gong Dao Bei';
      $teaware->type = 'teaware';
      $teaware->full_description = "A perfect matching Gong Dao Bei (fairness cup) for the Blue Gaiwan and Blue Cups although it will mix and match with most other Pots and Gaiwans.

Made from De Hua porcelain which is luxurious and relatively thin to give your tea sessions the aesthetics worthy of your tea.

The opening fits all Chinese strainers and, even though it has subtle, short spout, it has a great drip free pour.";
      $teaware->short_description = "A perfect blue Gong Dao Bei (fairness cup)";
      $teaware->img_src = "/images/teaware/bluegongdaobei.jpg";
      $teaware->price = 16.00;
      $teaware->save();

      $teaware = new \App\product;
      $teaware->name = 'Blue Cups';
      $teaware->type = 'teaware';
      $teaware->full_description = "Thin porcelain is timeless and pure class when drinking tea. The thinness gives a look and feel of elegance whilst allowing the tea to cool quickly for the perfect tasting temperature. This tulip shaped cup provides the perfect balance. Easy to drink, stable and rich in aromatics especially if you do not fill too high up the cup.";
      $teaware->short_description = "tulip shaped porcelain cups";
      $teaware->img_src = "/images/teaware/bluecups.jpg";
      $teaware->price = 20.00;
      $teaware->save();

      $teaware = new \App\product;
      $teaware->name = 'Tea Pick';
      $teaware->type = 'teaware';
      $teaware->full_description = "While our Sandalwood Tea Pick is a great tool for breaking into most cakes, there are many cakes which are tightly pressed and therefore require a smaller tool. A sharper and tinner tea cake pick will reduce the amount of leaf breakage and make your sessions easier.

This tea pick has a lovely thin blade with a flat point to slide into the most stubborn tea cakes. The stainless steel has a contour pattern for added aesthetics.";
      $teaware->short_description = "Sandlwood stainless steel tea pick";
      $teaware->img_src = "/images/teaware/teapick.jpg";
      $teaware->price = 35.00;
      $teaware->save();

      $teaware = new \App\product;
      $teaware->name = 'Glass Gaiwan';
      $teaware->type = 'teaware';
      $teaware->full_description = "This is the perfect Gaiwan to start Gaiwan brewing especially for Green tea. Because it is made out of glass it allows you watch the tea brew and the leaves soften and open.

Please be aware that this Gaiwan is suited to Green, White and small leaf Black tea because it is meant to be for brewing teas that require a lower water temperature. The glass releases heat fairly quickly ensuring that the teas do not extract too strongly. This Gaiwan is not for boiling water brewing as it becomes too hot to hold safely.";
      $teaware->short_description = "Glass Gaiwan suitable for Green and other light teas.";
      $teaware->img_src = "/images/teaware/glassgaiwan.jpg";
      $teaware->price = 18.00;
      $teaware->save();

      $teaware = new \App\product;
      $teaware->name = 'Kyusu';
      $teaware->type = 'teaware';
      $teaware->full_description = "A beautiful, sleek, minimal and tactile kyusu handmade in Tokoname from a speckled cream stone.

This 300ml kyusu is the perfect Japanese or Gong Fu brewing companion. It is the perfect size for brewing solo or up to 4 people and looks great in any setup.

This stoneware has a smooth yet textured feel in the hands. It is a joy to brew with a nicely angled spout for a convenient right handed pouring action.";
      $teaware->short_description = "A beautiful, sleek, minimal and tactile kyusu";
      $teaware->img_src = "/images/teaware/kyusu.jpg";
      $teaware->price = 35.00;
      $teaware->save();

      $teaware = new \App\product;
      $teaware->name = 'Glass Gong Dao Bei';
      $teaware->type = 'teaware';
      $teaware->full_description = "When you want to show off your tea to its full potential, this is a fabulous Gong Dao Bei (fairness cup). Made from thick, high quality glass, this Gong Dao Bei has a solid luxury feel and a clean pouring with no dribbles! The hammered glass diffracts the light beautifully, allowing you to inspect the colour of the tea liquor but with an abstract texture.";
      $teaware->short_description = "Stylish and thick hammered glass Gong Dao Bei";
      $teaware->img_src = "/images/teaware/glassgongdaobei.jpg";
      $teaware->price = 20.00;
      $teaware->save();


    }
}
