<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['type' => 'product', 'name' => 'Essentials Package Combi Box', 'description' => 'With the Essentials Package you get all the Irish Saorview channels, plus all the best UK terrestrial and satellite TV channels. Free High Definition channels.', 'tax_rate_id' => 1, 'unit_price' => 329.99]);

        Product::create(['type' => 'product', 'name' => 'Essentials Package Combi Smart TV', 'description' => 'With the Essentials Package Combi TV, you get all the Irish Saorview channels, plus all the best UK terrestrial and satellite TV channels. Smart TV with Integrated Satellite and Saorview.', 'tax_rate_id' => 2, 'unit_price' => 439.99]);

        Product::create(['type' => 'product', 'name' => 'With the Standard Package Combi Box you get all the Irish Saorview channels, plus all the best UK terrestrial and satellite TV channels.', 'tax_rate_id' => 1, 'unit_price' => 389.99]);

        Product::create(['type' => 'product', 'name' => 'Premium Package Combi Box', 'description' => 'With the Premium Package Combi Box,  you get all the Irish Saorview channels, plus all the best UK terrestrial and satellite TV channels. Neatly organised channel tabs (see screenshots) Irish channels, UK channels, News, Kids, Documentaries, Religion, Music etc.', 'tax_rate_id' => 2, 'unit_price' => 499.99]);

        Product::create(['type' => 'product', 'name' => 'SD-RP1002-G Mobile Phone Repeater', 'description' => 'All mobile networks covered, All areas covered, Improve your mobile phone GSM voice coverage, Three year warranty, Nationwide installation service available, Advice & support for DIY installation, Fully EU compliant', 'tax_rate_id' => 1, 'unit_price' => 469.99]);

        Product::create(['type' => 'product', 'name' => 'GSM Vehicle Mobile Signal Booster/Repeater', 'description' => 'All mobile networks covered, All areas covered, Improve your mobile phone GSM voice coverage, Three year warranty, Nationwide installation service available, Advice & support for DIY installation, Fully EU compliant', 'tax_rate_id' => 1, 'unit_price' => 359.99]);

        Product::create(['type' => 'product', 'name' => 'Stella Office-G Kit Repeater | GSM Office repeater', 'description' => 'All mobile networks covered, All areas covered, Improve your mobile phone GSM voice coverage, Three year warranty, Nationwide installation service available, Advice & support for DIY installation, Fully EU compliant', 'tax_rate_id' => 1, 'unit_price' => 889.99]);

        Product::create(['type' => 'product', 'name' => 'Sonos CONNECT:AMP', 'description' => 'A powerful Class-D digital amplifier powers large or small speakers with 55W per channel.', 'tax_rate_id' => 1, 'unit_price' => 579.99]);

        Product::create(['type' => 'product', 'name' => 'Sonos PLAY:1', 'description' => 'Two custom-designed drivers with dedicated amplifiers', 'tax_rate_id' => 1, 'unit_price' => 229.99]);

        Product::create(['type' => 'product', 'name' => 'Sonos PLAY:3', 'description' => 'Three custom-designed drivers with dedicated amplifiers', 'tax_rate_id' => 1, 'unit_price' => 349.00]);

        Product::create(['type' => 'product', 'name' => 'Sonos PLAY:5', 'description' => 'Six custom-designed drivers with dedicated amplifiers.', 'tax_rate_id' => 1, 'unit_price' => 579.00]);

        Product::create(['type' => 'product', 'name' => 'Sonos PLAY:5', 'description' => 'Complements HD television screens with highly detailed, richly textured sound. Uses your WiFi, easy to set up and expand your system over time. Requires just two cords: one power cord, one optical cord (both included).', 'tax_rate_id' => 1, 'unit_price' => 799.00]);

        Product::create(['type' => 'service', 'name' => 'Building A New Home', 'description' => 'Cabling for newly build homes.', 'tax_rate_id' => 1, 'unit_price' => 199.99]);

        Product::create(['type' => 'service', 'name' => 'Service Call', 'description' => 'Sometimes our phone lines are busy. Sometimes your service issue will arise outside normal working hours. Book online at your convenience.', 'tax_rate_id' => 2, 'unit_price' => 79.99]);

        Product::create(['type' => 'service', 'name' => 'Service Call Commercial', 'description' => 'High Definition TV Distribution, Digital Television Distribution Systems, TV Channel Control Solutions for Public Areas, Guest Information Screens, Hotel Information TV Channels, Public Address & Music Systems, Terrestrial & Satellite TV', 'tax_rate_id' => 1, 'unit_price' => 99.99]);

        Product::create(['type' => 'service', 'name' => 'Video Service Call', 'description' => 'Book your one to one phone service call online. Speak to an experienced technician. Choose a date and time that suits you. We will call you using WhatsApp video.', 'tax_rate_id' => 2, 'unit_price' => 19.99]);

        Product::create(['type' => 'service', 'name' => 'Home Survey', 'description' => 'Daltontv.ie will sit down and discuss your home entertainment requirements. We plan for TV cabling, Multi Room sound systems, Wi-Fi and internet distribution throughout your home.', 'tax_rate_id' => 2, 'unit_price' => 99.99]);
    }
}
