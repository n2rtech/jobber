<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CustomerNote;

class CustomerNoteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerNote::create([
            'id' => 63,
            'customer_id' => 11,
            'user_id' => 1,
            'note' => 'Spoke to Olive, quoted 250 for combi stb installed, couldnt agree terms if no signal, call cancelled',
            'created_at' => '2012-07-04 19:39:48'
        ]);

        CustomerNote::create([
            'id' => 5,
            'customer_id' => 2,
            'user_id' => 1,
            'note' => 'Test note KD 18.06.12 -19.19PM',
            'created_at' => '2012-06-18 18:19:14'
        ]);

        CustomerNote::create([
            'id' => 6,
            'customer_id' => 2,
            'user_id' => 1,
            'note' => '		\r\n						second note test, edits to second note test, second edit to same note kk',
            'created_at' => '2012-06-22 07:53:40'
        ]);

        CustomerNote::create([
            'id' => 7,
            'customer_id' => 3,
            'user_id' => 1,
            'note' => '
            test note for this customer
             ',
            'created_at' => '2012-06-19 17:58:05'
        ]);


        CustomerNote::create([
            'id' => 9,
            'customer_id' => 4,
            'user_id' => 1,
            'note' => 'Surveyed job at Waterford Rd. Jim wants existing Sky+ STB fitted in one room and RC extender to second room. Two other rooms with FTAC rx. All internal cabling already in place. Dish and ant on gable end of bungalow, over garage flat roof, cables through gable end wall to attic.',
            'created_at' => '2012-06-21 19:17:21'
        ]);

        CustomerNote::create([
            'id' => 62,
            'customer_id' => 16504,
            'user_id' => 1,
            'note' => 'fitted Triax TSC114 combi stb, dish and antenna, removed old dish',
            'created_at' => '2012-07-04 19:38:02'
        ]);

        CustomerNote::create([
            'id' => 61,
            'customer_id' => 13966,
            'user_id' => 1,
            'note' => 'Call to Joe next week to price CCTV cam for milking parlor and Saorview',
            'created_at' => '2012-07-04 12:03:02'
        ]);

        CustomerNote::create([
            'id' => 14,
            'customer_id' => 3,
            'user_id' => 1,
            'note' => 'Game ball',
            'created_at' => '2012-06-22 09:14:31'
        ]);

        CustomerNote::create([
            'id' => 15,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Spoke to Fr Buckley, booked for Saturday 23/06\r\n',
            'created_at' => '2012-06-22 09:31:40'
        ]);

        CustomerNote::create([
            'id' => 16,
            'customer_id' => 6,
            'user_id' => 1,
            'note' => 'SV antenna, not Mon-Tues- there Wudnesday',
            'created_at' => '2012-06-22 15:51:43'
        ]);

        CustomerNote::create([
            'id' => 17,
            'customer_id' => 7,
            'user_id' => 1,
            'note' => 'cust has SV Tv in kitchen, connect using existing cable to SV antenna already in sitting room',
            'created_at' => '2012-06-22 17:32:07'
        ]);

        CustomerNote::create([
            'id' => 18,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Fitted digital head end, Kenny, Ian, 8 Saorview + 8 FTA sats\r\n',
            'created_at' => '2012-06-23 09:50:54'
        ]);

        CustomerNote::create([
            'id' => 19,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Fitted Johannson digital head end. Mast head amp on DTT antenna. Checked levels on 20# tvs, all perfect with average levels around 70dB. Two muxes ch45 & ch46. Channel line up,\r\n\r\nEight Saorview off air, BBC1, BBC2, UTV, CH4, EWTN, Film4, Gospel Channel, ITV3',
            'created_at' => '2012-06-24 10:41:35'
        ]);

        CustomerNote::create([
            'id' => 20,
            'customer_id' => 8,
            'user_id' => 1,
            'note' => '2 x Triax SD HD 537, no pis, no power, ex DTV. Called Saturday, not home.',
            'created_at' => '2012-06-26 18:24:02'
        ]);

        CustomerNote::create([
            'id' => 21,
            'customer_id' => 6,
            'user_id' => 1,
            'note' => 'Friday better, ring on Friday',
            'created_at' => '2012-06-27 10:12:30'
        ]);

        CustomerNote::create([
            'id' => 65,
            'customer_id' => 16621,
            'user_id' => 1,
            'note' => 'called, pics ok at present, possible fault with headend system, neighbour also complaining of freezing pics',
            'created_at' => '2012-07-04 19:44:53'
        ]);

        CustomerNote::create([
            'id' => 23,
            'customer_id' => 11,
            'user_id' => 1,
            'note' => '		Fit Triax combi STB to existing dish and RTE ant. Pref Saturday or late evening',
            'created_at' => '2012-06-27 12:54:59'
        ]);

        CustomerNote::create([
            'id' => 24,
            'customer_id' => 11,
            'user_id' => 1,
            'note' => 'Might want to conform price before going out',
            'created_at' => '2012-06-27 12:55:51'
        ]);

        CustomerNote::create([
            'id' => 25,
            'customer_id' => 12,
            'user_id' => 1,
            'note' => 'Fitted 2 x Triax TSC 114. Fitted MHA and PSU to existing aerial. Connected both STBs to existing dish. Current set up, Sky plus and 2 combi STBs connected to one dish. Quoted ?650 plus possible extra for cabling. ',
            'created_at' => '2012-06-27 18:16:18'
        ]);

        CustomerNote::create([
            'id' => 26,
            'customer_id' => 9,
            'user_id' => 1,
            'note' => 'test note',
            'created_at' => '2012-06-27 17:34:13'
        ]);

        CustomerNote::create([
            'id' => 28,
            'customer_id' => 13,
            'user_id' => 1,
            'note' => 'Noel has Zoro 8530 STB ex DTV, needs to be retuned, ',
            'created_at' => '2012-06-27 21:41:11'
        ]);

        CustomerNote::create([
            'id' => 29,
            'customer_id' => 14,
            'user_id' => 1,
            'note' => '		Survey for Saorview antenna to multiple tvs, not keen on cables or aerials. Saturdays pref ',
            'created_at' => '2012-06-28 13:50:29'
        ]);

        CustomerNote::create([
            'id' => 30,
            'customer_id' => 15,
            'user_id' => 1,
            'note' => 'Needs Saorview antenna ',
            'created_at' => '2012-06-28 19:16:46'
        ]);

        CustomerNote::create([
            'id' => 31,
            'customer_id' => 6,
            'user_id' => 1,
            'note' => 'Fitted DTT ant to attic and split 2 ways to stb and sv tv. 54dB at both. ',
            'created_at' => '2012-06-30 10:58:41'
        ]);

        CustomerNote::create([
            'id' => 32,
            'customer_id' => 16504,
            'user_id' => 1,
            'note' => 'Fit Triax combi STB, dish and aerial to one tv. remove old dish, use existing cable. ',
            'created_at' => '2012-06-30 12:26:17'
        ]);

        CustomerNote::create([
            'id' => 33,
            'customer_id' => 16611,
            'user_id' => 1,
            'note' => '		Supply & fit tv wall bracket, timber frame wall, 90 degree bracket\r\n',
            'created_at' => '2012-08-17 08:37:53'
        ]);

        CustomerNote::create([
            'id' => 34,
            'customer_id' => 10570,
            'user_id' => 1,
            'note' => 'Call to Paul re upgrade to head end',
            'created_at' => '2012-06-30 12:43:28'
        ]);

        CustomerNote::create([
            'id' => 35,
            'customer_id' => 3016,
            'user_id' => 1,
            'note' => '13/06/12-15:58:27-KD Fiona has 2 or 3 tvs that need SV. Had somone look at it but couldnt get signal. Advised Fiona about Saorsat options etc.',
            'created_at' => '2012-06-30 12:45:48'
        ]);

        CustomerNote::create([
            'id' => 36,
            'customer_id' => 16612,
            'user_id' => 1,
            'note' => '		Met Mark on site, needs four extra points connected, connect cctv cam with cat5 cable already run, one stb not working. Discussed digital headend with Mark. To follow up with quote. Current channels being used are group a and mount lenister will be changing to ch 23 & 26 post ASO',
            'created_at' => '2012-10-05 10:20:53'
        ]);

        CustomerNote::create([
            'id' => 37,
            'customer_id' => 16574,
            'user_id' => 1,
            'note' => '22/05/12-16:35:06-KD Just back from hols, will call us 08/05/12-19:05:57-KD Sold FTAC ?399 maybe 60 more for tidy bracket at rear of house, have K type wall bkt in stock 01/05/12-12:58:37-KD FTAC sales enquiry, call to survey, around lunchtime, ',
            'created_at' => '2012-06-30 12:54:59'
        ]);

        CustomerNote::create([
            'id' => 38,
            'customer_id' => 16574,
            'user_id' => 1,
            'note' => 'worth a follow up call ',
            'created_at' => '2012-06-30 12:55:28'
        ]);

        CustomerNote::create([
            'id' => 39,
            'customer_id' => 1708,
            'user_id' => 1,
            'note' => 'problems with sky+ stb. replaced box for new HD. callount 49 + 279 for stb',
            'created_at' => '2012-06-30 12:57:05'
        ]);

        CustomerNote::create([
            'id' => 40,
            'customer_id' => 16613,
            'user_id' => 1,
            'note' => '		poor SV signal, possible ex DTV, ',
            'created_at' => '2012-08-17 10:57:20'
        ]);

        CustomerNote::create([
            'id' => 41,
            'customer_id' => 16614,
            'user_id' => 1,
            'note' => 'SV signal problem, check on SV website first',
            'created_at' => '2012-06-30 13:06:36'
        ]);

        CustomerNote::create([
            'id' => 42,
            'customer_id' => 16614,
            'user_id' => 1,
            'note' => 'SITE INFORMATION\r\nSite:Suir ValleySite \r\nOn-Air:Yes\r\nChannel:52\r\nAERIAL INFORMATION\r\nPolarization:V\r\nDirection to:point (degrees)South (202',
            'created_at' => '2012-06-30 13:07:43'
        ]);

        CustomerNote::create([
            'id' => 43,
            'customer_id' => 16615,
            'user_id' => 1,
            'note' => 'problem with trees in front of dish, raised previously ex DTV',
            'created_at' => '2012-06-30 13:13:50'
        ]);

        CustomerNote::create([
            'id' => 44,
            'customer_id' => 16616,
            'user_id' => 1,
            'note' => 're fit customers fta, maybe fit sv ant',
            'created_at' => '2012-06-30 13:16:24'
        ]);

        CustomerNote::create([
            'id' => 45,
            'customer_id' => 1690,
            'user_id' => 1,
            'note' => 'requires sv stb and poss antenna',
            'created_at' => '2012-06-30 13:27:17'
        ]);

        CustomerNote::create([
            'id' => 46,
            'customer_id' => 16617,
            'user_id' => 1,
            'note' => 'Fit sky+ stb to communial system, found multi switch in basement, cannot locate internal cabling in appartment',
            'created_at' => '2012-06-30 13:33:44'
        ]);

        CustomerNote::create([
            'id' => 47,
            'customer_id' => 1144,
            'user_id' => 1,
            'note' => 'Go ahead and fit 2 CCTV cameras. Invoice as per fresh books ',
            'created_at' => '2012-06-30 15:37:52'
        ]);

        CustomerNote::create([
            'id' => 48,
            'customer_id' => 1743,
            'user_id' => 1,
            'note' => 'Fitted new SV ant mha and psu and Triax TSC114 Combi. Connected combi to existing dish,four outputs being now used. A lot of trees.',
            'created_at' => '2012-06-30 19:36:07'
        ]);

        CustomerNote::create([
            'id' => 49,
            'customer_id' => 1743,
            'user_id' => 1,
            'note' => 'Fit customers existing SV STB originally removed from master bed. Checked signal in realm where box is required, 60dB. Quoted 49.00 to fit box. KD called last Friday but Mary could not find box. She has found it now. ',
            'created_at' => '2012-06-30 19:38:02'
        ]);

        CustomerNote::create([
            'id' => 50,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => '				Search and search navigation buttons need to be bigger. Difficult to use from iPad.LL',
            'created_at' => '2012-07-11 14:13:13'
        ]);

        CustomerNote::create([
            'id' => 110,
            'customer_id' => 12223,
            'user_id' => 1,
            'note' => '		FTAC two weeks from now. ',
            'created_at' => '2012-08-17 11:17:28'
        ]);

        CustomerNote::create([
            'id' => 111,
            'customer_id' => 1144,
            'user_id' => 1,
            'note' => 'fitted stereo and speakers, ran cables for cctv, cablec terminated at back of vdm, in ceiling at cam locations. 10.30- 3.00pm, cable 50m + 50m + bnc conn, psu and dome cams ordered',
            'created_at' => '2012-07-12 08:48:00'
        ]);

        CustomerNote::create([
            'id' => 52,
            'customer_id' => 16618,
            'user_id' => 1,
            'note' => 'Lookig for someone to call to and a few questions on FTAC and record option, quoted 399 plus 89 for HDD, call to discuss with Sinead pm Monday',
            'created_at' => '2012-07-02 09:58:31'
        ]);

        CustomerNote::create([
            'id' => 53,
            'customer_id' => 16618,
            'user_id' => 1,
            'note' => 'Rang Sinead 18.32 Monday',
            'created_at' => '2012-07-02 17:32:12'
        ]);

        CustomerNote::create([
            'id' => 54,
            'customer_id' => 16619,
            'user_id' => 1,
            'note' => 'Has SV tv wants ext SV antenna, quoted from ?150',
            'created_at' => '2012-07-02 17:48:09'
        ]);

        CustomerNote::create([
            'id' => 55,
            'customer_id' => 16620,
            'user_id' => 1,
            'note' => 'Problem with FTA sat and possible Saorview required.',
            'created_at' => '2012-07-02 17:52:08'
        ]);

        CustomerNote::create([
            'id' => 56,
            'customer_id' => 236,
            'user_id' => 1,
            'note' => '						Ger called today, will be deciding on quantity of sets at meeting next Monday',
            'created_at' => '2012-08-17 11:30:36'
        ]);

        CustomerNote::create([
            'id' => 57,
            'customer_id' => 16621,
            'user_id' => 1,
            'note' => 'Intermittent pics of sats and Saorview, NB, system not upgraded for  Saorview yet.',
            'created_at' => '2012-07-02 17:58:28'
        ]);

        CustomerNote::create([
            'id' => 58,
            'customer_id' => 7,
            'user_id' => 1,
            'note' => 'Done, connected, tuned STB also, paid 58.00',
            'created_at' => '2012-07-02 18:00:25'
        ]);

        CustomerNote::create([
            'id' => 59,
            'customer_id' => 16619,
            'user_id' => 1,
            'note' => 'Fitted dtt  ant to existing pole and ran cable externally, paid 150.00',
            'created_at' => '2012-07-02 18:05:10'
        ]);

        CustomerNote::create([
            'id' => 60,
            'customer_id' => 16618,
            'user_id' => 1,
            'note' => 'Sinead rang back, went thru FTAC, may go for double combi system with record on one. Quoted 399 for first plus 89 for HDD and 249 for second box, promised some discount for using existing dish',
            'created_at' => '2012-07-02 18:29:14'
        ]);

        CustomerNote::create([
            'id' => 64,
            'customer_id' => 1743,
            'user_id' => 1,
            'note' => 'fitted customers existing saorview stb, collected 49.00',
            'created_at' => '2012-07-04 19:41:49'
        ]);

        CustomerNote::create([
            'id' => 66,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Called to Fr Buckley, fitted one dtt STB in his room, select HDMI channel on existing remote. Wants four other STBs and price on providing sky news on network',
            'created_at' => '2012-07-05 12:49:28'
        ]);

        CustomerNote::create([
            'id' => 67,
            'customer_id' => 14,
            'user_id' => 1,
            'note' => 'Called Marie, not suitable for survey today, call next week, book in advance!\r\n\r\n',
            'created_at' => '2012-07-05 13:08:54'
        ]);

        CustomerNote::create([
            'id' => 68,
            'customer_id' => 16622,
            'user_id' => 1,
            'note' => 'No sat signal, checked levels at tv, low, replaced dish LNB and cabling, levels ok now, paid 100.00 , balance of 108.00  due Saturday, Patrick to call KD to call.',
            'created_at' => '2012-07-05 17:51:32'
        ]);

        CustomerNote::create([
            'id' => 69,
            'customer_id' => 3176,
            'user_id' => 1,
            'note' => 'Saorview STB no power. Plugged in and out PSU ok. Replaced box with strong STB. Check all signals ok. Liam',
            'created_at' => '2012-07-05 17:56:13'
        ]);

        CustomerNote::create([
            'id' => 70,
            'customer_id' => 16621,
            'user_id' => 1,
            'note' => 'Spoke to Catherine, KD waiting on Bill Madigan , management committee to revert. ',
            'created_at' => '2012-07-05 18:02:51'
        ]);

        CustomerNote::create([
            'id' => 71,
            'customer_id' => 10341,
            'user_id' => 1,
            'note' => 'Spoke to Bill  086 8572971  ref. Repair work to cabling at app no 81. ',
            'created_at' => '2012-07-05 18:04:30'
        ]);

        CustomerNote::create([
            'id' => 72,
            'customer_id' => 16623,
            'user_id' => 1,
            'note' => 'Saorview antenna and poss STB ',
            'created_at' => '2012-07-05 18:08:19'
        ]);

        CustomerNote::create([
            'id' => 73,
            'customer_id' => 16624,
            'user_id' => 1,
            'note' => 'Fitted FTAC Triax TSC114 system. End of June 2012',
            'created_at' => '2012-07-05 18:13:38'
        ]);

        CustomerNote::create([
            'id' => 74,
            'customer_id' => 16624,
            'user_id' => 1,
            'note' => 'Celine having trouble with satellite channels, going to leave box on Friday morning to see if pics go.',
            'created_at' => '2012-07-05 18:14:30'
        ]);

        CustomerNote::create([
            'id' => 75,
            'customer_id' => 14949,
            'user_id' => 1,
            'note' => 'Tony in trouble with Saorview signal. Has 10 ft pole and MHA. May require higher pole....... Or higher gain antenna.',
            'created_at' => '2012-07-05 18:30:24'
        ]);

        CustomerNote::create([
            'id' => 76,
            'customer_id' => 16625,
            'user_id' => 1,
            'note' => 'Priced digital head end for Presentation KK. See Freshbooks',
            'created_at' => '2012-07-05 19:16:01'
        ]);

        CustomerNote::create([
            'id' => 77,
            'customer_id' => 16625,
            'user_id' => 1,
            'note' => 'The system will output eight Saorview off air digital channels\r\n\r\n4 satellite transponders will be required for channel choice as per your specification. The system is capable of outputting a further three satellite channels at no extra cost. These are three of the following channels.',
            'created_at' => '2012-07-05 19:25:47'
        ]);

        CustomerNote::create([
            'id' => 78,
            'customer_id' => 13,
            'user_id' => 1,
            'note' => 'Noel rang, tried to explain the DTV warranty issue. Nut job could not understand.',
            'created_at' => '2012-07-06 09:44:46'
        ]);

        CustomerNote::create([
            'id' => 79,
            'customer_id' => 14949,
            'user_id' => 1,
            'note' => 'Priced aerial upgrade at 100-150. Priced change to Saorsat at 649. ',
            'created_at' => '2012-07-06 12:25:27'
        ]);

        CustomerNote::create([
            'id' => 80,
            'customer_id' => 16624,
            'user_id' => 1,
            'note' => 'No sats, replaced STB, ok now , warranty \r\n',
            'created_at' => '2012-07-06 22:55:29'
        ]);

        CustomerNote::create([
            'id' => 81,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Fitted remaining STBs , job complete, may require Sky news, quote on FB,\r\n',
            'created_at' => '2012-07-06 22:57:52'
        ]);

        CustomerNote::create([
            'id' => 82,
            'customer_id' => 14949,
            'user_id' => 1,
            'note' => 'Tony ok for now, will see how frequency change in Oct will affect signal. May require new group A antenna.\r\n',
            'created_at' => '2012-07-06 23:00:39'
        ]);

        CustomerNote::create([
            'id' => 83,
            'customer_id' => 16617,
            'user_id' => 1,
            'note' => 'Called Sue, 13.35 left message',
            'created_at' => '2012-07-07 12:36:12'
        ]);

        CustomerNote::create([
            'id' => 84,
            'customer_id' => 16622,
            'user_id' => 1,
            'note' => 'Patrick rang, we called and collected balance of bill due 108.00',
            'created_at' => '2012-07-07 12:37:20'
        ]);

        CustomerNote::create([
            'id' => 85,
            'customer_id' => 10189,
            'user_id' => 1,
            'note' => 'Michelle called, wants survey for Saorview and new tv, and Saorview next door for mother in law.',
            'created_at' => '2012-07-07 13:39:49'
        ]);

        CustomerNote::create([
            'id' => 86,
            'customer_id' => 16626,
            'user_id' => 1,
            'note' => 'no sat signal, will pay Wednesday.',
            'created_at' => '2012-07-07 14:36:07'
        ]);

        CustomerNote::create([
            'id' => 87,
            'customer_id' => 15943,
            'user_id' => 1,
            'note' => 'box stuck in standby, advised callout chg',
            'created_at' => '2012-07-09 11:19:23'
        ]);

        CustomerNote::create([
            'id' => 88,
            'customer_id' => 15943,
            'user_id' => 1,
            'note' => '16-9-11 mk 31279 paid 75 installed HDx 15-9-11 pb - booked for midday. Nigel 087 2118101 15-9-11 pb pb - spoek to Aideens Dad 087 6712008, advised JD will be late 14/09/11 CMF - Could not complete. To do tomorrow at 10. JD say a 10ft pole is needed. Charge in full for all work carried-out including the difficulty in getting asignal. 13-9-11 pb - called to book no ans. Aideen confirmed after 4 ok. Date 12/09/11 Time 10:31:23 Enter operator ID = mk-customer drop card in for activation 2-9-11 pb - SUP HDx NP to pay ?30 and cost of pole and brackets. 1-9-11 jd 31242 called to refit system customer had cancelled with SKy as they couldnt do job and hjas signed up with us. 31-8-11 pb - Aideen wants to go off the dish thats there already. book for thurs/fri 30-8-11 MK 31196 paid cash 25 gave position of new dish or if they got permission they could use neighbours dish. TALK TO MK regarding using old dish. ?25 to come off price of installation. 30/08/11 CMF - Looking at SUP to SKY. PB agreed ? 25 survey charge . Give her notice of 30 mins. To get to her today',
            'created_at' => '2012-07-09 11:19:55'
        ]);

        CustomerNote::create([
            'id' => 89,
            'customer_id' => 10,
            'user_id' => 1,
            'note' => 'Quoted 450 + 70 for MHA for FTAC long cable run + connect second tv to SV ant.',
            'created_at' => '2012-07-09 17:45:45'
        ]);

        CustomerNote::create([
            'id' => 90,
            'customer_id' => 10189,
            'user_id' => 1,
            'note' => 'Quoted 1,600 / 1,700 for \r\n\r\n2 FTAC STBs , conn second tv in mother in laws with mod and conn to SV ant. Fit 40 Samsung LED over fire place and chase wall to hide cables. Connect tv up stairs to SV antenna. Fit SV antenna and connect to three tvs in total.',
            'created_at' => '2012-07-09 17:49:32'
        ]);

        CustomerNote::create([
            'id' => 91,
            'customer_id' => 16623,
            'user_id' => 1,
            'note' => 'Fitted Triax TSC114 plus Zoro SV STB, ?500',
            'created_at' => '2012-07-09 17:54:34'
        ]);

        CustomerNote::create([
            'id' => 92,
            'customer_id' => 16626,
            'user_id' => 1,
            'note' => 'Theresa cancelled call, pics ok. now, Dish will need to be moved KD',
            'created_at' => '2012-07-09 17:56:36'
        ]);

        CustomerNote::create([
            'id' => 93,
            'customer_id' => 3293,
            'user_id' => 1,
            'note' => 'Fit FTAC to farm house ?399',
            'created_at' => '2012-07-10 07:41:03'
        ]);

        CustomerNote::create([
            'id' => 94,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'Called Colin Gordon re account. He said Doherty Arch will pay invoice. I informed Colin that Dalton tv were hired by his PA Nicola and not by Doherty Arch. He attempted to dispute this. I stood firm and explained that even though Mr Doherty offered to pay for remedial works to be carried out that it was Colin Gordon that hired Daltontv.ie in the first instance. He said he would put in a call to Mr Doherty',
            'created_at' => '2012-07-10 09:46:01'
        ]);

        CustomerNote::create([
            'id' => 95,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => '				Mary Ryan, phoned, needs callout ref. tv. Called, no apparent problem with tvs. Mount Lenister up and running again. ',
            'created_at' => '2012-10-10 08:59:44'
        ]);

        CustomerNote::create([
            'id' => 96,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => 'spoke to Geraldine, will pay account',
            'created_at' => '2012-07-10 09:59:25'
        ]);

        CustomerNote::create([
            'id' => 97,
            'customer_id' => 16473,
            'user_id' => 1,
            'note' => 'Spoke to Hugh, will have a look at cheque! 051 595280 accounts',
            'created_at' => '2012-07-10 10:29:02'
        ]);

        CustomerNote::create([
            'id' => 98,
            'customer_id' => 16627,
            'user_id' => 1,
            'note' => 'Kevin ordered 2 x Triax TSC114 combi , quote 650.00, go ahead Thurs-Fri tjis week.',
            'created_at' => '2012-07-10 10:33:51'
        ]);

        CustomerNote::create([
            'id' => 99,
            'customer_id' => 14525,
            'user_id' => 1,
            'note' => 'Fit FTAC has dish ?349 Tues-Wed',
            'created_at' => '2012-07-10 10:54:13'
        ]);

        CustomerNote::create([
            'id' => 100,
            'customer_id' => 1690,
            'user_id' => 1,
            'note' => 'spoke to Ann, asked me to call John Kavanagh 086 8138297 to discuss. Discussed bill, all ok.KD to post bill',
            'created_at' => '2012-07-10 11:43:10'
        ]);

        CustomerNote::create([
            'id' => 105,
            'customer_id' => 15943,
            'user_id' => 1,
            'note' => 'Aideen rang to cancel, sky going to sort problem',
            'created_at' => '2012-07-10 20:02:56'
        ]);

        CustomerNote::create([
            'id' => 103,
            'customer_id' => 16630,
            'user_id' => 1,
            'note' => 'test 3',
            'created_at' => '2012-07-10 15:49:41'
        ]);

        CustomerNote::create([
            'id' => 104,
            'customer_id' => 16630,
            'user_id' => 1,
            'note' => 'testing return',
            'created_at' => '2012-07-10 15:53:38'
        ]);

        CustomerNote::create([
            'id' => 106,
            'customer_id' => 16631,
            'user_id' => 1,
            'note' => 'FTAC booked Saturday July 21st',
            'created_at' => '2012-07-10 20:27:16'
        ]);

        CustomerNote::create([
            'id' => 107,
            'customer_id' => 16632,
            'user_id' => 1,
            'note' => 'FTAC pref Wed or Thurs',
            'created_at' => '2012-07-10 20:33:51'
        ]);

        CustomerNote::create([
            'id' => 108,
            'customer_id' => 16634,
            'user_id' => 1,
            'note' => 'Move sky box, quick job inside, quoted 49.00',
            'created_at' => '2012-07-10 20:43:27'
        ]);

        CustomerNote::create([
            'id' => 109,
            'customer_id' => 13966,
            'user_id' => 1,
            'note' => 'Rang Joe, cancelled, got another man.',
            'created_at' => '2012-07-11 12:56:23'
        ]);

        CustomerNote::create([
            'id' => 112,
            'customer_id' => 14,
            'user_id' => 1,
            'note' => 'quoted 399 + 149+149 for combi and 2 x SV stbs ',
            'created_at' => '2012-07-12 08:49:13'
        ]);

        CustomerNote::create([
            'id' => 113,
            'customer_id' => 1221,
            'user_id' => 1,
            'note' => 'Fit FTAC, has dish 349.00 + 49.00 for memory. Look at connecting second tv to dish only and conect sky+ stb to same',
            'created_at' => '2012-07-12 08:53:55'
        ]);

        CustomerNote::create([
            'id' => 114,
            'customer_id' => 10570,
            'user_id' => 1,
            'note' => 'Sent quote from FB for digital HE',
            'created_at' => '2012-07-12 09:11:51'
        ]);

        CustomerNote::create([
            'id' => 115,
            'customer_id' => 15687,
            'user_id' => 1,
            'note' => 'SV STB not getting signal, may require aerial',
            'created_at' => '2012-07-12 09:18:16'
        ]);

        CustomerNote::create([
            'id' => 116,
            'customer_id' => 1221,
            'user_id' => 1,
            'note' => 'Job done paid balance 300.00 ',
            'created_at' => '2012-07-12 11:44:11'
        ]);

        CustomerNote::create([
            'id' => 117,
            'customer_id' => 16633,
            'user_id' => 1,
            'note' => 'Cancelled by Stephen, landlord got sky since order!',
            'created_at' => '2012-07-12 11:50:37'
        ]);

        CustomerNote::create([
            'id' => 118,
            'customer_id' => 16620,
            'user_id' => 1,
            'note' => 'Priced one combi sys, 2nd combi STB,MHA, connect Samsung tv, 800.00 all in. Good lead',
            'created_at' => '2012-07-12 12:37:03'
        ]);

        CustomerNote::create([
            'id' => 119,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'check lounge tv, FTA STB plugged out, no Saorview signal present, Got FTA going, advised leVe tv on. Saorview needs to be reconnected when signal is back.\r\n\r\nChecked other tvs, same Saorview problem.\r\n\r\nChecked patients tv, faulty combi STB ex DTV \r\n',
            'created_at' => '2012-07-12 13:39:28'
        ]);

        CustomerNote::create([
            'id' => 120,
            'customer_id' => 16615,
            'user_id' => 1,
            'note' => '		Advised, KD to look at tree problem',
            'created_at' => '2012-08-17 11:18:18'
        ]);

        CustomerNote::create([
            'id' => 121,
            'customer_id' => 16635,
            'user_id' => 1,
            'note' => '		has sv tv, needs sv antenna, quoted 150-175, soon as we can',
            'created_at' => '2012-07-12 15:28:06'
        ]);

        CustomerNote::create([
            'id' => 122,
            'customer_id' => 16309,
            'user_id' => 1,
            'note' => 'Test note, earlier note gone missing',
            'created_at' => '2012-07-12 18:51:25'
        ]);

        CustomerNote::create([
            'id' => 692,
            'customer_id' => 13173,
            'user_id' => 1,
            'note' => '						Fit 2 X FTAC STB & SV ant. Kippure.CH-54 Horizantal €625.99 Fit 42 inch LG LCD €599.00',
            'created_at' => '2012-10-03 09:21:36'
        ]);

        CustomerNote::create([
            'id' => 693,
            'customer_id' => 16740,
            'user_id' => 1,
            'note' => 'Cancelled',
            'created_at' => '2012-09-05 09:03:32'
        ]);

        CustomerNote::create([
            'id' => 628,
            'customer_id' => 16738,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-09-03 09:50:32'
        ]);

        CustomerNote::create([
            'id' => 124,
            'customer_id' => 12156,
            'user_id' => 1,
            'note' => 'no sat signal, had builders in recently,may be cause',
            'created_at' => '2012-07-13 08:29:17'
        ]);

        CustomerNote::create([
            'id' => 125,
            'customer_id' => 16309,
            'user_id' => 1,
            'note' => 'pics ok, cancelled by Helen',
            'created_at' => '2012-07-13 08:38:06'
        ]);

        CustomerNote::create([
            'id' => 620,
            'customer_id' => 3234,
            'user_id' => 1,
            'note' => 'Repaired F-conn at back of stb, 49.00 due for callout',
            'created_at' => '2012-09-03 07:33:21'
        ]);

        CustomerNote::create([
            'id' => 621,
            'customer_id' => 3234,
            'user_id' => 1,
            'note' => 'Fit SV ant here, collect 49.00 from previous call and 150.00- 175.00',
            'created_at' => '2012-09-03 07:34:01'
        ]);

        CustomerNote::create([
            'id' => 473,
            'customer_id' => 16707,
            'user_id' => 1,
            'note' => 'Fit 4 x FTAC Triax , fit new dish and ant, fit octo lnb to new dish to enable 4 stbs snd existing sky+ to work from one dish. €1,215.00 ',
            'created_at' => '2012-08-14 13:41:56'
        ]);

        CustomerNote::create([
            'id' => 129,
            'customer_id' => 16635,
            'user_id' => 1,
            'note' => 'not before dinner on Monday, ok after dinner, may want 2nd set connected',
            'created_at' => '2012-07-13 09:06:57'
        ]);

        CustomerNote::create([
            'id' => 629,
            'customer_id' => 12776,
            'user_id' => 1,
            'note' => 'Booked 8.45am Tuesday ',
            'created_at' => '2012-09-03 10:21:11'
        ]);

        CustomerNote::create([
            'id' => 622,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => 'called , customer not home, sat not suitable either',
            'created_at' => '2012-09-03 07:43:54'
        ]);

        CustomerNote::create([
            'id' => 696,
            'customer_id' => 16746,
            'user_id' => 1,
            'note' => 'Fit Sky+, cables run. Box in store. Paid ',
            'created_at' => '2012-09-05 11:39:11'
        ]);

        CustomerNote::create([
            'id' => 697,
            'customer_id' => 16737,
            'user_id' => 1,
            'note' => 'booking confirmed for midday ',
            'created_at' => '2012-09-05 15:31:01'
        ]);

        CustomerNote::create([
            'id' => 612,
            'customer_id' => 16727,
            'user_id' => 1,
            'note' => 'job done paid 649.00 cash, HDMI 1 on one tv, auto scart on second tv, faulty remote',
            'created_at' => '2012-09-03 07:22:32'
        ]);

        CustomerNote::create([
            'id' => 613,
            'customer_id' => 16730,
            'user_id' => 1,
            'note' => 'Fit FTAC, paid cheque, HDMI1, ',
            'created_at' => '2012-09-03 07:24:52'
        ]);

        CustomerNote::create([
            'id' => 614,
            'customer_id' => 16731,
            'user_id' => 1,
            'note' => 'Fitted replacement dish',
            'created_at' => '2012-09-03 07:25:38'
        ]);

        CustomerNote::create([
            'id' => 694,
            'customer_id' => 16724,
            'user_id' => 1,
            'note' => 'booking confirmed',
            'created_at' => '2012-09-05 09:13:46'
        ]);

        CustomerNote::create([
            'id' => 695,
            'customer_id' => 15500,
            'user_id' => 1,
            'note' => 'Helen, advised TV ST compatible or STB required. Signal should be ok. €49.00 or €149.00 ',
            'created_at' => '2012-09-05 11:10:34'
        ]);

        CustomerNote::create([
            'id' => 133,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'Rang BKD Michael is away on hols but returning Thursday next',
            'created_at' => '2012-07-13 09:25:54'
        ]);

        CustomerNote::create([
            'id' => 134,
            'customer_id' => 16635,
            'user_id' => 1,
            'note' => 'cancelled, will chance signal as is',
            'created_at' => '2012-07-13 09:56:14'
        ]);

        CustomerNote::create([
            'id' => 135,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Coex.ie collected 2 x Triax TSC114 STB',
            'created_at' => '2012-07-13 09:57:33'
        ]);

        CustomerNote::create([
            'id' => 136,
            'customer_id' => 3293,
            'user_id' => 1,
            'note' => 'connect bed room to existing sky box also',
            'created_at' => '2012-07-13 10:10:39'
        ]);

        CustomerNote::create([
            'id' => 619,
            'customer_id' => 16732,
            'user_id' => 1,
            'note' => 'Connected Sky RC ext to sky stb, paid 175.00',
            'created_at' => '2012-09-03 07:31:43'
        ]);

        CustomerNote::create([
            'id' => 138,
            'customer_id' => 1708,
            'user_id' => 1,
            'note' => 'Paid cheque 328.00',
            'created_at' => '2012-07-13 10:30:32'
        ]);

        CustomerNote::create([
            'id' => 139,
            'customer_id' => 16637,
            'user_id' => 1,
            'note' => 'New tv needs setting up.\r\n',
            'created_at' => '2012-07-13 11:39:50'
        ]);

        CustomerNote::create([
            'id' => 140,
            'customer_id' => 12156,
            'user_id' => 1,
            'note' => 'Fitted new dish and quad LNB, paid 156.00 cheque',
            'created_at' => '2012-07-14 10:59:20'
        ]);

        CustomerNote::create([
            'id' => 141,
            'customer_id' => 16627,
            'user_id' => 1,
            'note' => 'Fitted 2 Triax TSC114 STBs to new dish and aerial.',
            'created_at' => '2012-07-14 12:19:24'
        ]);

        CustomerNote::create([
            'id' => 142,
            'customer_id' => 16629,
            'user_id' => 1,
            'note' => 'Fitted saorat with new 80&60 dish',
            'created_at' => '2012-07-14 12:22:26'
        ]);

        CustomerNote::create([
            'id' => 143,
            'customer_id' => 16632,
            'user_id' => 1,
            'note' => 'On hold for now, tv never turned up from Dublin, on hols for a while, will come back to us',
            'created_at' => '2012-07-14 12:23:58'
        ]);

        CustomerNote::create([
            'id' => 144,
            'customer_id' => 14525,
            'user_id' => 1,
            'note' => 'Cancelled for now, had a change of mind',
            'created_at' => '2012-07-14 12:25:15'
        ]);

        CustomerNote::create([
            'id' => 145,
            'customer_id' => 15687,
            'user_id' => 1,
            'note' => 'Fitted Triax TSC114 STB and new dish, customers existing dtt and. Paid 350.00',
            'created_at' => '2012-07-14 16:23:22'
        ]);

        CustomerNote::create([
            'id' => 146,
            'customer_id' => 16628,
            'user_id' => 1,
            'note' => 'Fitted 2no.FTAC Triax TSC114 STBs , new dish and antenna.paid 650.00',
            'created_at' => '2012-07-14 16:25:02'
        ]);

        CustomerNote::create([
            'id' => 147,
            'customer_id' => 16638,
            'user_id' => 1,
            'note' => 'These notes will go into the original notes area, but also in as a new note. They should appear in the calls / notes listing.',
            'created_at' => '2012-07-16 07:32:22'
        ]);

        CustomerNote::create([
            'id' => 618,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => 'Fitted FTAC, HDD, connect second room, fitted RC ext',
            'created_at' => '2012-09-03 07:30:39'
        ]);

        CustomerNote::create([
            'id' => 669,
            'customer_id' => 3016,
            'user_id' => 1,
            'note' => 'No reply to mobile number',
            'created_at' => '2012-09-04 08:40:51'
        ]);

        CustomerNote::create([
            'id' => 670,
            'customer_id' => 12776,
            'user_id' => 1,
            'note' => 'quoted 650.00 for FTAC and connect second tv to ant and third tv to ant and STB, Ians docket book',
            'created_at' => '2012-09-04 08:42:09'
        ]);

        CustomerNote::create([
            'id' => 149,
            'customer_id' => 16638,
            'user_id' => 1,
            'note' => 'no pics on sky in bed room',
            'created_at' => '2012-07-16 08:43:54'
        ]);

        CustomerNote::create([
            'id' => 150,
            'customer_id' => 16638,
            'user_id' => 1,
            'note' => 'job done',
            'created_at' => '2012-07-16 08:50:29'
        ]);

        CustomerNote::create([
            'id' => 151,
            'customer_id' => 16638,
            'user_id' => 1,
            'note' => 'job done',
            'created_at' => '2012-07-16 08:50:58'
        ]);

        CustomerNote::create([
            'id' => 152,
            'customer_id' => 13208,
            'user_id' => 1,
            'note' => '		Priced two combos, 649.00. Go ahead in three weeks or will ring if sooner',
            'created_at' => '2012-08-17 08:53:36'
        ]);

        CustomerNote::create([
            'id' => 153,
            'customer_id' => 3293,
            'user_id' => 1,
            'note' => '		Fitted Triax TSC114 system to farm house',
            'created_at' => '2012-08-09 08:25:46'
        ]);

        CustomerNote::create([
            'id' => 154,
            'customer_id' => 3176,
            'user_id' => 1,
            'note' => 'call to collect cheque',
            'created_at' => '2012-07-16 20:40:13'
        ]);

        CustomerNote::create([
            'id' => 155,
            'customer_id' => 16639,
            'user_id' => 1,
            'note' => 'Call to survey for FTAC',
            'created_at' => '2012-07-17 09:15:34'
        ]);

        CustomerNote::create([
            'id' => 156,
            'customer_id' => 16639,
            'user_id' => 1,
            'note' => 'Quoted 399 for one and 249 for each sub stb, will come back to us',
            'created_at' => '2012-07-17 10:07:57'
        ]);

        CustomerNote::create([
            'id' => 573,
            'customer_id' => 16676,
            'user_id' => 1,
            'note' => 'Booked confirmed early pm',
            'created_at' => '2012-08-27 11:24:54'
        ]);

        CustomerNote::create([
            'id' => 567,
            'customer_id' => 16474,
            'user_id' => 1,
            'note' => 'Roof: Fit 80cm Saorsat dish to roof, connect 2 cables on KA LNB.\r\n\r\nFit DTT for Mt Lenister & Kilduff. 2 seperate cables\r\n\r\nFit Quattro 80cm dish, connect 4 cables from LNB\r\n\r\nFit Quad 60cm dish, connect 4 cables from LNB',
            'created_at' => '2012-08-24 11:27:21'
        ]);

        CustomerNote::create([
            'id' => 568,
            'customer_id' => 16692,
            'user_id' => 1,
            'note' => 'Brendan rang, cancelled call, was expecting work to be done last week! KD',
            'created_at' => '2012-08-24 16:44:01'
        ]);

        CustomerNote::create([
            'id' => 162,
            'customer_id' => 16474,
            'user_id' => 1,
            'note' => 'Make satellite dish service check list.',
            'created_at' => '2012-07-17 10:16:45'
        ]);

        CustomerNote::create([
            'id' => 2071,
            'customer_id' => 16937,
            'user_id' => 1,
            'note' => 'not today, busy',
            'created_at' => '2013-01-09 14:02:41'
        ]);

        CustomerNote::create([
            'id' => 569,
            'customer_id' => 16728,
            'user_id' => 1,
            'note' => '				Fit SV antenna and split to four tvs. May require 2 x SV STBs @ 79.00 plus fitting',
            'created_at' => '2012-08-28 10:04:35'
        ]);

        CustomerNote::create([
            'id' => 570,
            'customer_id' => 16697,
            'user_id' => 1,
            'note' => 'job done , KD & ID Paid',
            'created_at' => '2012-08-27 08:21:23'
        ]);

        CustomerNote::create([
            'id' => 166,
            'customer_id' => 16474,
            'user_id' => 1,
            'note' => 'Make new file for both Triax STBs',
            'created_at' => '2012-07-17 10:21:58'
        ]);

        CustomerNote::create([
            'id' => 168,
            'customer_id' => 16640,
            'user_id' => 1,
            'note' => 'Fit FTAC to one TV, €399 from 17th Aug onwards',
            'created_at' => '2012-07-17 10:28:44'
        ]);

        CustomerNote::create([
            'id' => 170,
            'customer_id' => 16543,
            'user_id' => 1,
            'note' => 'Pics ok at sitting room, prog line up not good on kitchen stb, favourites gone, new file uploaded recently',
            'created_at' => '2012-07-17 10:58:37'
        ]);

        CustomerNote::create([
            'id' => 2072,
            'customer_id' => 4789,
            'user_id' => 1,
            'note' => 'replaced one psu, and farted around a bit, paid cheque 240.00',
            'created_at' => '2013-01-10 12:36:19'
        ]);

        CustomerNote::create([
            'id' => 2073,
            'customer_id' => 16875,
            'user_id' => 1,
            'note' => 'message on screen when channel changing',
            'created_at' => '2013-01-10 14:40:57'
        ]);

        CustomerNote::create([
            'id' => 174,
            'customer_id' => 16575,
            'user_id' => 1,
            'note' => 'go ahead with FTAC system & connect 2nd tv to SV, and bring in extra cable from dish to attic for future sat ?425.00',
            'created_at' => '2012-07-17 11:20:42'
        ]);

        CustomerNote::create([
            'id' => 2074,
            'customer_id' => 16936,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2013-01-10 15:43:19'
        ]);

        CustomerNote::create([
            'id' => 176,
            'customer_id' => 16641,
            'user_id' => 1,
            'note' => 'Fit FTAC €399, maybe two boxes €649',
            'created_at' => '2012-07-17 13:46:49'
        ]);

        CustomerNote::create([
            'id' => 177,
            'customer_id' => 16642,
            'user_id' => 1,
            'note' => '',
            'created_at' => '2012-07-17 13:51:01'
        ]);

        CustomerNote::create([
            'id' => 178,
            'customer_id' => 3176,
            'user_id' => 1,
            'note' => 'Spoke to Aoife, will post cheque',
            'created_at' => '2012-07-17 14:49:44'
        ]);

        CustomerNote::create([
            'id' => 179,
            'customer_id' => 1622,
            'user_id' => 1,
            'note' => 'Enquiry re FTAC, one maybe two boxes',
            'created_at' => '2012-07-17 15:29:46'
        ]);

        CustomerNote::create([
            'id' => 180,
            'customer_id' => 14544,
            'user_id' => 1,
            'note' => '		Go ahead and run cable ref. Kay 087 2195855 KK',
            'created_at' => '2012-07-19 16:10:31'
        ]);

        CustomerNote::create([
            'id' => 181,
            'customer_id' => 3365,
            'user_id' => 1,
            'note' => '		Pics freezing, mother in no 39 Maryville pics ok, possibly on different transmitters ',
            'created_at' => '2012-08-17 11:31:45'
        ]);

        CustomerNote::create([
            'id' => 182,
            'customer_id' => 16637,
            'user_id' => 1,
            'note' => 'son got all working , ok now',
            'created_at' => '2012-07-18 08:44:43'
        ]);

        CustomerNote::create([
            'id' => 183,
            'customer_id' => 16643,
            'user_id' => 1,
            'note' => 'Possible 3 tvs for Saorview. Mount projector screen. Fit LCD to wall.',
            'created_at' => '2012-07-18 09:29:36'
        ]);

        CustomerNote::create([
            'id' => 200,
            'customer_id' => 13068,
            'user_id' => 1,
            'note' => '		Had clown from Satcat and all messed up. Wants new tv in sitting room and same in kitchen both wall mounted. also new or existing tv required in master bed. ',
            'created_at' => '2012-07-19 14:16:33'
        ]);

        CustomerNote::create([
            'id' => 571,
            'customer_id' => 16729,
            'user_id' => 1,
            'note' => 'Fit FTAC , has had problem with signal in area, check FTA signal first.',
            'created_at' => '2012-08-27 10:42:28'
        ]);

        CustomerNote::create([
            'id' => 572,
            'customer_id' => 16729,
            'user_id' => 1,
            'note' => '				confirmed booking , and €49.00 for signal test, husband had Lidil dish already set up, only wants FTA stb, has Saorview, quoted €279.00 std install, but install here is likely to be non std',
            'created_at' => '2012-08-27 10:53:15'
        ]);

        CustomerNote::create([
            'id' => 193,
            'customer_id' => 16645,
            'user_id' => 1,
            'note' => 'Fit FTAC to one TV €399',
            'created_at' => '2012-07-18 10:52:04'
        ]);

        CustomerNote::create([
            'id' => 194,
            'customer_id' => 16646,
            'user_id' => 1,
            'note' => 'Survey for FTAC and install		',
            'created_at' => '2012-07-18 11:32:25'
        ]);

        CustomerNote::create([
            'id' => 195,
            'customer_id' => 16647,
            'user_id' => 1,
            'note' => 'FTAC survey',
            'created_at' => '2012-07-18 12:55:02'
        ]);

        CustomerNote::create([
            'id' => 196,
            'customer_id' => 1457,
            'user_id' => 1,
            'note' => 'Fit FTAC ?399',
            'created_at' => '2012-07-19 09:08:55'
        ]);

        CustomerNote::create([
            'id' => 197,
            'customer_id' => 1457,
            'user_id' => 1,
            'note' => 'Paid ?100.00 Deposit',
            'created_at' => '2012-07-19 09:12:00'
        ]);

        CustomerNote::create([
            'id' => 198,
            'customer_id' => 1144,
            'user_id' => 1,
            'note' => 'Fitted two dome cams to front of shop, connected to dvr and checked to include cams in record, invoiced on FB',
            'created_at' => '2012-07-19 10:47:11'
        ]);

        CustomerNote::create([
            'id' => 201,
            'customer_id' => 16645,
            'user_id' => 1,
            'note' => 'ID Fitted Triax TSC114 system. Paid 399.00 ',
            'created_at' => '2012-07-19 18:40:46'
        ]);

        CustomerNote::create([
            'id' => 202,
            'customer_id' => 13068,
            'user_id' => 1,
            'note' => 'Quoted for 42 LG and 26 LG, both wall mounted. FTAC to existing dish and ant in master bed with 320GB record. 1,650- 1,700',
            'created_at' => '2012-07-19 20:51:53'
        ]);

        CustomerNote::create([
            'id' => 203,
            'customer_id' => 16649,
            'user_id' => 1,
            'note' => 'test',
            'created_at' => '2012-07-20 07:50:03'
        ]);

        CustomerNote::create([
            'id' => 204,
            'customer_id' => 16650,
            'user_id' => 1,
            'note' => 'sky not working, may need new stb, Eileen, needs for 2.30 today, brother on tv',
            'created_at' => '2012-07-20 08:49:25'
        ]);

        CustomerNote::create([
            'id' => 205,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'left message with reception for michael, he will call me back in a few min',
            'created_at' => '2012-07-20 09:02:35'
        ]);

        CustomerNote::create([
            'id' => 258,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'Left message for Michael',
            'created_at' => '2012-07-25 08:58:25'
        ]);

        CustomerNote::create([
            'id' => 259,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'Spoke to Colin, he is going to call Michael Doherty',
            'created_at' => '2012-07-25 08:59:55'
        ]);

        CustomerNote::create([
            'id' => 207,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => 'rang Geraldine, will drop in Monday morning',
            'created_at' => '2012-07-20 09:10:38'
        ]);

        CustomerNote::create([
            'id' => 208,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Sent to accounts\r\n\r\nAppit Ltd. T/A Daltontv.ie\r\nBank of Ireland\r\nParliament St\r\nKilkenny\r\nSort code 90.60.64\r\nAccount no. 75132892',
            'created_at' => '2012-07-20 09:16:23'
        ]);

        CustomerNote::create([
            'id' => 209,
            'customer_id' => 16435,
            'user_id' => 1,
            'note' => 'Text sent\r\n\r\nInvoice #2514\r\nPaula Cody\r\n\r\nDomestic Service Callout Charge\r\nPaid: ?0.00 EUR\r\nOutstanding: ?39.00 EUR ',
            'created_at' => '2012-07-20 09:33:41'
        ]);

        CustomerNote::create([
            'id' => 210,
            'customer_id' => 16596,
            'user_id' => 1,
            'note' => 'Invoice #2532\r\n\r\n\r\nJohn O Brien\r\n\r\nDomestic Service Callout Charge\r\nPaid: ?0.00 EUR\r\nOutstanding: ?49.00 EUR',
            'created_at' => '2012-07-20 09:39:27'
        ]);

        CustomerNote::create([
            'id' => 211,
            'customer_id' => 16652,
            'user_id' => 1,
            'note' => 'connect existing sky stb to dish already installed at new app',
            'created_at' => '2012-07-20 15:56:59'
        ]);

        CustomerNote::create([
            'id' => 212,
            'customer_id' => 16651,
            'user_id' => 1,
            'note' => 'run new cable from satellite head end to customers app thru underground car park.',
            'created_at' => '2012-07-20 15:59:33'
        ]);

        CustomerNote::create([
            'id' => 213,
            'customer_id' => 16651,
            'user_id' => 1,
            'note' => 'Go ahead and run cable ref. Kay 087 2195855 KK',
            'created_at' => '2012-07-20 16:00:33'
        ]);

        CustomerNote::create([
            'id' => 214,
            'customer_id' => 1457,
            'user_id' => 1,
            'note' => 'job done, paid balance ?299 Triax TSC114 complete system ID',
            'created_at' => '2012-07-20 16:02:43'
        ]);

        CustomerNote::create([
            'id' => 215,
            'customer_id' => 1690,
            'user_id' => 1,
            'note' => 'Paid cheque, ?535.00',
            'created_at' => '2012-07-23 08:41:06'
        ]);

        CustomerNote::create([
            'id' => 216,
            'customer_id' => 16631,
            'user_id' => 1,
            'note' => 'Fitted Triax TSC114 system, ant in attic. Paid ?399',
            'created_at' => '2012-07-23 08:42:19'
        ]);

        CustomerNote::create([
            'id' => 217,
            'customer_id' => 16651,
            'user_id' => 1,
            'note' => '		Fitted new cable from head end. Also fitted Sky+ STB, only dish cable only, no record function. Paid ?89.00',
            'created_at' => '2012-07-23 08:50:23'
        ]);

        CustomerNote::create([
            'id' => 218,
            'customer_id' => 16621,
            'user_id' => 1,
            'note' => 'Paul Bateman #74 Ardilea problem with Sky+ record.',
            'created_at' => '2012-07-23 08:46:10'
        ]);

        CustomerNote::create([
            'id' => 219,
            'customer_id' => 16617,
            'user_id' => 1,
            'note' => 'Duplicate record, do not add any more in for here.KD',
            'created_at' => '2012-07-23 08:51:37'
        ]);

        CustomerNote::create([
            'id' => 220,
            'customer_id' => 14544,
            'user_id' => 1,
            'note' => 'Invoice for Kay (landlord) 2 Aislinn House, college Rd. tenant Sue Smith.\r\n\r\nRun new cable from head end to app #2.\r\nCable ?20.00, 2 men for two hours. 2 x ?55.00 plus vat. Total ?269.70',
            'created_at' => '2012-07-23 08:58:07'
        ]);

        CustomerNote::create([
            'id' => 221,
            'customer_id' => 16653,
            'user_id' => 1,
            'note' => 'moving in on thurs, run new conn to bed room & kitchen, with re ext',
            'created_at' => '2012-07-23 09:03:30'
        ]);

        CustomerNote::create([
            'id' => 222,
            'customer_id' => 16653,
            'user_id' => 1,
            'note' => '		prov booking for THURSDAY, call to firm up time',
            'created_at' => '2012-07-23 12:56:09'
        ]);

        CustomerNote::create([
            'id' => 223,
            'customer_id' => 16646,
            'user_id' => 1,
            'note' => 'Brid cancelled, no reason',
            'created_at' => '2012-07-23 09:40:09'
        ]);

        CustomerNote::create([
            'id' => 224,
            'customer_id' => 16643,
            'user_id' => 1,
            'note' => 'Service Technical	Service Technical	55.00	15	825.00\r\nService Technical	Service Technical	45.00	5	225.00\r\nItem	 Description	 Unit Cost (?)	 Quantity	 Price (?)\r\nSV-FTA-Box	Saorview/Free to Air Set Top Box	175.33	2	350.66\r\nMISC	Home Cinema SS/ 5 Ch	404.22	1	404.22\r\nSV-STB	Saorview STB	87.23	1	87.23\r\nMISC	Projector ceiling mount	50.00	1	50.00\r\nDish - 60cm	60cm Dish	30.79	1	30.79\r\nLNB - Quad	Quad LNB	33.48	1	33.48\r\nYAGI-B	Group B Yagi Saorview 10 Element	34.95	1	34.95\r\nCoaxial Cable	Coaxial Cable	0.44	80	35.20\r\nMISC	Miscellaneous Item/s - Connectors etc	30.00	1	30.00\r\nPole - 6ft.	6 feet FT Pole	14.10	1	14.10\r\nLashing Kit - 12 inch	12 inch Lashing Kit	30.84	1	30.84\r\nSplitter-4 way	F Type Splitter - 4 way	13.17	1	13.17\r\nUHF Dip	UHF Diplexer	12.00	6	72.00\r\nMISC	Trunking	35.26	1	35.26\r\nSubtotal:	2,271.90\r\nVAT 13.5	 - 13.5%:	164.96\r\nEstimate Total:	?2,436.86\r\n',
            'created_at' => '2012-07-23 10:01:42'
        ]);

        CustomerNote::create([
            'id' => 225,
            'customer_id' => 3323,
            'user_id' => 1,
            'note' => 'fit FTAC ?399',
            'created_at' => '2012-07-23 10:10:27'
        ]);

        CustomerNote::create([
            'id' => 226,
            'customer_id' => 13068,
            'user_id' => 1,
            'note' => 'too expensive at the moment',
            'created_at' => '2012-07-23 10:17:06'
        ]);

        CustomerNote::create([
            'id' => 227,
            'customer_id' => 16647,
            'user_id' => 1,
            'note' => 'fit two sky remote extrs to existing sky, may require sky 4 way link amp, fit combi stb, dish and sv ant, connect sv signal and sky rf to all 4 tvs, combi to only one tv, quoted 450.00/525.00 , spoke to Pat go ahead',
            'created_at' => '2012-07-23 10:33:03'
        ]);

        CustomerNote::create([
            'id' => 228,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'got new SV tv recently, problem with signal, needs antenna ',
            'created_at' => '2012-07-23 11:40:05'
        ]);

        CustomerNote::create([
            'id' => 229,
            'customer_id' => 16479,
            'user_id' => 1,
            'note' => 'Fitted remote amp and remote eye',
            'created_at' => '2012-07-23 12:20:39'
        ]);

        CustomerNote::create([
            'id' => 230,
            'customer_id' => 12156,
            'user_id' => 1,
            'note' => 'Posted FTAC enquiry letter',
            'created_at' => '2012-07-23 12:22:32'
        ]);

        CustomerNote::create([
            'id' => 231,
            'customer_id' => 16635,
            'user_id' => 1,
            'note' => 'Posted FTAC enquiry letter ',
            'created_at' => '2012-07-23 12:30:25'
        ]);

        CustomerNote::create([
            'id' => 232,
            'customer_id' => 16655,
            'user_id' => 1,
            'note' => 'Fitted two combi receivers, new dish and aerial, new sky+stb.',
            'created_at' => '2012-07-23 12:38:41'
        ]);

        CustomerNote::create([
            'id' => 233,
            'customer_id' => 15,
            'user_id' => 1,
            'note' => 'also looking for tv mounted on wall bracket',
            'created_at' => '2012-07-23 12:38:56'
        ]);

        CustomerNote::create([
            'id' => 234,
            'customer_id' => 3378,
            'user_id' => 1,
            'note' => 'POSTED FTAC ENQUIRY LETTER',
            'created_at' => '2012-07-23 12:54:02'
        ]);

        CustomerNote::create([
            'id' => 235,
            'customer_id' => 5580,
            'user_id' => 1,
            'note' => 'CONNECT CABLE TO SKY PLUS BOX EX DTV',
            'created_at' => '2012-07-23 13:04:20'
        ]);

        CustomerNote::create([
            'id' => 236,
            'customer_id' => 13426,
            'user_id' => 1,
            'note' => 'NO SATELLITE SIGNAL ',
            'created_at' => '2012-07-23 13:07:21'
        ]);

        CustomerNote::create([
            'id' => 237,
            'customer_id' => 14544,
            'user_id' => 1,
            'note' => 'Will call to office Wed to pay KD',
            'created_at' => '2012-07-23 13:26:06'
        ]);

        CustomerNote::create([
            'id' => 238,
            'customer_id' => 16656,
            'user_id' => 1,
            'note' => 'fitted ftac some time back, dates etc on dockets',
            'created_at' => '2012-07-23 13:29:35'
        ]);

        CustomerNote::create([
            'id' => 239,
            'customer_id' => 16656,
            'user_id' => 1,
            'note' => 'bad signal on sv channels, signal blocked by church, problem with tv also. wants 37-42 led plus mast head amp',
            'created_at' => '2012-07-23 13:30:26'
        ]);

        CustomerNote::create([
            'id' => 240,
            'customer_id' => 16656,
            'user_id' => 1,
            'note' => 'go ahead with 37 LG LED ?699 + ?70 for MHA & PSU',
            'created_at' => '2012-07-23 13:38:02'
        ]);

        CustomerNote::create([
            'id' => 241,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => 'Call to Tony re Saorview',
            'created_at' => '2012-07-23 13:44:13'
        ]);

        CustomerNote::create([
            'id' => 242,
            'customer_id' => 16656,
            'user_id' => 1,
            'note' => 'ring michael, won feett have tv until next week',
            'created_at' => '2012-07-23 14:36:26'
        ]);

        CustomerNote::create([
            'id' => 243,
            'customer_id' => 12715,
            'user_id' => 1,
            'note' => 'left message on mibile 087 6205291 balance o/s ?141.00 from Jan 2012',
            'created_at' => '2012-07-23 15:00:34'
        ]);

        CustomerNote::create([
            'id' => 244,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => 'ex dtv, will call to showroom to talk about ftac and new tv',
            'created_at' => '2012-07-23 15:15:28'
        ]);

        CustomerNote::create([
            'id' => 245,
            'customer_id' => 13560,
            'user_id' => 1,
            'note' => 'Fitted two triax combi stb, new dish and aerial',
            'created_at' => '2012-07-23 15:25:09'
        ]);

        CustomerNote::create([
            'id' => 246,
            'customer_id' => 11421,
            'user_id' => 1,
            'note' => 'installed six triax st hd 537 stbs, two with record, new dish and antenna in attc.',
            'created_at' => '2012-07-23 15:50:41'
        ]);

        CustomerNote::create([
            'id' => 247,
            'customer_id' => 16658,
            'user_id' => 1,
            'note' => 'Fitted triax combi stb, kilduff,mha.',
            'created_at' => '2012-07-23 15:56:12'
        ]);

        CustomerNote::create([
            'id' => 248,
            'customer_id' => 16659,
            'user_id' => 1,
            'note' => 'Installed FTAC + second box in bedroom',
            'created_at' => '2012-07-23 16:04:52'
        ]);

        CustomerNote::create([
            'id' => 249,
            'customer_id' => 16661,
            'user_id' => 1,
            'note' => '		move, re route existing sky cable, ',
            'created_at' => '2012-08-17 11:19:45'
        ]);

        CustomerNote::create([
            'id' => 250,
            'customer_id' => 16641,
            'user_id' => 1,
            'note' => 'fitted triax tsc114 new dish and aerial in attic, hdmi on tv, paid ?399',
            'created_at' => '2012-07-24 11:58:14'
        ]);

        CustomerNote::create([
            'id' => 251,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => '				Fit 2 Triax Tsc114 STBs ?649.00. Next Mon or Tues',
            'created_at' => '2012-07-24 14:00:48'
        ]);

        CustomerNote::create([
            'id' => 252,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => 'Booked prov Monday',
            'created_at' => '2012-07-24 14:32:28'
        ]);

        CustomerNote::create([
            'id' => 253,
            'customer_id' => 16656,
            'user_id' => 1,
            'note' => 'Booked prov for Wed, fit mha and psu',
            'created_at' => '2012-07-24 14:36:08'
        ]);

        CustomerNote::create([
            'id' => 254,
            'customer_id' => 16652,
            'user_id' => 1,
            'note' => 'Fitted new dish and quad lnb, also ran two new cables to dish. quoted 150.00 + 20.00 extra for cabling',
            'created_at' => '2012-07-25 08:31:18'
        ]);

        CustomerNote::create([
            'id' => 255,
            'customer_id' => 474,
            'user_id' => 1,
            'note' => 'Received cheque with no signature, returned.',
            'created_at' => '2012-07-25 08:40:58'
        ]);

        CustomerNote::create([
            'id' => 256,
            'customer_id' => 12366,
            'user_id' => 1,
            'note' => 'Fit or check for SV ant, ',
            'created_at' => '2012-07-25 08:45:50'
        ]);

        CustomerNote::create([
            'id' => 257,
            'customer_id' => 12366,
            'user_id' => 1,
            'note' => 'Prov booking for Wed morning',
            'created_at' => '2012-07-25 08:47:59'
        ]);

        CustomerNote::create([
            'id' => 260,
            'customer_id' => 13426,
            'user_id' => 1,
            'note' => 'Replaced dish, lnb and wall bkt, invoiced on FB',
            'created_at' => '2012-07-25 09:10:02'
        ]);

        CustomerNote::create([
            'id' => 261,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'Call to survey new digital head end',
            'created_at' => '2012-07-25 11:00:11'
        ]);

        CustomerNote::create([
            'id' => 262,
            'customer_id' => 16664,
            'user_id' => 1,
            'note' => 'Site survey for Saorview, install there and then if possible, or contact office to agree install date.',
            'created_at' => '2012-07-25 11:14:34'
        ]);

        CustomerNote::create([
            'id' => 263,
            'customer_id' => 16652,
            'user_id' => 1,
            'note' => 'Paid cash ?170.00',
            'created_at' => '2012-07-25 12:32:04'
        ]);

        CustomerNote::create([
            'id' => 264,
            'customer_id' => 16665,
            'user_id' => 1,
            'note' => 'Sky + problem, some missing channels, Irish missing, BBC missing, no satellite signal, gone thru with Sky',
            'created_at' => '2012-07-25 13:06:22'
        ]);

        CustomerNote::create([
            'id' => 265,
            'customer_id' => 16664,
            'user_id' => 1,
            'note' => '		SOLD 2 combi systsm ?649.00 Prov booked for Tuesday first thing.',
            'created_at' => '2012-07-25 13:49:24'
        ]);

        CustomerNote::create([
            'id' => 266,
            'customer_id' => 3176,
            'user_id' => 1,
            'note' => 'KD to call to meet Sean 5.30pm today',
            'created_at' => '2012-07-25 13:47:03'
        ]);

        CustomerNote::create([
            'id' => 267,
            'customer_id' => 16664,
            'user_id' => 1,
            'note' => 'Did we collect booking deposit here?',
            'created_at' => '2012-07-25 13:49:41'
        ]);

        CustomerNote::create([
            'id' => 268,
            'customer_id' => 16473,
            'user_id' => 1,
            'note' => '20/07/2012 Paid  ?350.00',
            'created_at' => '2012-07-25 14:09:54'
        ]);

        CustomerNote::create([
            'id' => 269,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => 'Rang house number and mobile. Geraldine not there.',
            'created_at' => '2012-07-25 14:12:14'
        ]);

        CustomerNote::create([
            'id' => 270,
            'customer_id' => 16575,
            'user_id' => 1,
            'note' => 'Paid ?450.00',
            'created_at' => '2012-07-25 14:31:15'
        ]);

        CustomerNote::create([
            'id' => 271,
            'customer_id' => 16575,
            'user_id' => 1,
            'note' => 'Fit 32 LG LED tv and wall bracket. FTAC ?425, TV ?449 bracket ?40. Total ?914, ?450 paid , collect balance ?464',
            'created_at' => '2012-07-25 15:13:56'
        ]);

        CustomerNote::create([
            'id' => 272,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => 'on hold for moment, jim will call to office',
            'created_at' => '2012-07-25 15:18:55'
        ]);

        CustomerNote::create([
            'id' => 2075,
            'customer_id' => 13673,
            'user_id' => 1,
            'note' => 'will call tomorrow',
            'created_at' => '2013-01-10 16:41:51'
        ]);

        CustomerNote::create([
            'id' => 275,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Spoke to Mary, wants simple tv option. agreed to remove fta and dvd from existing tv in lounge and leave saorview only on that tv, tidy cables also',
            'created_at' => '2012-07-26 09:12:45'
        ]);

        CustomerNote::create([
            'id' => 276,
            'customer_id' => 16666,
            'user_id' => 1,
            'note' => 'Fit 2 maybe 3 SV STBs, possibly SV antenna, poss MHA',
            'created_at' => '2012-07-26 09:53:55'
        ]);

        CustomerNote::create([
            'id' => 277,
            'customer_id' => 16667,
            'user_id' => 1,
            'note' => 'Reconnect Sky at new house, has STB and there is dish at new house. Qouted ?49.00 + 20 or 30',
            'created_at' => '2012-07-26 12:14:25'
        ]);

        CustomerNote::create([
            'id' => 278,
            'customer_id' => 16668,
            'user_id' => 1,
            'note' => 'Fit FTAC ?399.00',
            'created_at' => '2012-07-26 13:43:45'
        ]);

        CustomerNote::create([
            'id' => 279,
            'customer_id' => 1128,
            'user_id' => 1,
            'note' => 'Sent FTAC letter',
            'created_at' => '2012-07-26 13:57:16'
        ]);

        CustomerNote::create([
            'id' => 280,
            'customer_id' => 12366,
            'user_id' => 1,
            'note' => 'Confirmed for 9.00-9.30 Wednesday',
            'created_at' => '2012-07-26 14:28:59'
        ]);

        CustomerNote::create([
            'id' => 566,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => 'Fitted 42 LED, Paid €1,141.00',
            'created_at' => '2012-08-24 11:13:56'
        ]);

        CustomerNote::create([
            'id' => 469,
            'customer_id' => 16697,
            'user_id' => 1,
            'note' => '		friday or sat 24th go ahead ',
            'created_at' => '2012-08-14 11:00:23'
        ]);

        CustomerNote::create([
            'id' => 470,
            'customer_id' => 16706,
            'user_id' => 1,
            'note' => 'Fit FTAC €399.00 Paid',
            'created_at' => '2012-08-14 11:25:52'
        ]);

        CustomerNote::create([
            'id' => 471,
            'customer_id' => 16706,
            'user_id' => 1,
            'note' => 'Contact Ben 086 3675007',
            'created_at' => '2012-08-14 11:28:54'
        ]);

        CustomerNote::create([
            'id' => 631,
            'customer_id' => 16734,
            'user_id' => 1,
            'note' => 'No reply, voicemail KD, ',
            'created_at' => '2012-09-03 10:27:41'
        ]);

        CustomerNote::create([
            'id' => 289,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => 'Add time and user ID to notes added.\r\n\r\n
             PENDING: Time added and corrected to GMT (adding 8 hours to note time), ID to follow after next database upload.',
            'created_at' => '2012-08-01 08:59:02'
        ]);

        CustomerNote::create([
            'id' => 290,
            'customer_id' => 6530,
            'user_id' => 1,
            'note' => '				pics freezing on free sat stb, saorview pics breaking up, dish 2003 ish. price HD freesat stb, away until late in the week, call to make booking',
            'created_at' => '2012-07-26 16:33:05'
        ]);

        CustomerNote::create([
            'id' => 291,
            'customer_id' => 16656,
            'user_id' => 1,
            'note' => 'Fitted 37 inch LG LED and MHA & PSU levels at tv 53dB, paid 699 + 70.00 ID',
            'created_at' => '2012-07-26 20:31:12'
        ]);

        CustomerNote::create([
            'id' => 292,
            'customer_id' => 16575,
            'user_id' => 1,
            'note' => 'Job done, tv fitted to wall in kitchen, TSC114 system to other tv.',
            'created_at' => '2012-07-26 20:36:46'
        ]);

        CustomerNote::create([
            'id' => 293,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Removed FTA from tv in lounge, also connect DVD to lounge tv and tune Saorview, may require replacement combi box for resident, KD to call Mary Friday',
            'created_at' => '2012-07-26 20:39:12'
        ]);

        CustomerNote::create([
            'id' => 295,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => '		Agnes Maher rang, fit new combi STB for Marie O Regan ?249.00',
            'created_at' => '2012-07-27 13:56:38'
        ]);

        CustomerNote::create([
            'id' => 296,
            'customer_id' => 16670,
            'user_id' => 1,
            'note' => 'fit SV antenna and possible STB',
            'created_at' => '2012-07-27 11:06:38'
        ]);

        CustomerNote::create([
            'id' => 297,
            'customer_id' => 16670,
            'user_id' => 1,
            'note' => '		Wants existing SV ant connected to second tv and stb fitted. close to parents house. John Boland rang, also bring scart cable for both STBs',
            'created_at' => '2012-07-27 11:09:47'
        ]);

        CustomerNote::create([
            'id' => 298,
            'customer_id' => 228,
            'user_id' => 1,
            'note' => '		Fitted FTAC ........30/11/2011',
            'created_at' => '2012-08-03 14:08:18'
        ]);

        CustomerNote::create([
            'id' => 299,
            'customer_id' => 228,
            'user_id' => 1,
            'note' => 'Triax remote not working',
            'created_at' => '2012-07-27 12:40:05'
        ]);

        CustomerNote::create([
            'id' => 300,
            'customer_id' => 16664,
            'user_id' => 1,
            'note' => 'Cancelled, son is installing system',
            'created_at' => '2012-07-27 13:27:20'
        ]);

        CustomerNote::create([
            'id' => 301,
            'customer_id' => 4451,
            'user_id' => 1,
            'note' => '		Fit FTAC combi set top box and moduator to second tv.',
            'created_at' => '2012-07-27 13:36:20'
        ]);

        CustomerNote::create([
            'id' => 302,
            'customer_id' => 16671,
            'user_id' => 1,
            'note' => 'Fit FTAC combi system',
            'created_at' => '2012-07-27 13:51:54'
        ]);

        CustomerNote::create([
            'id' => 303,
            'customer_id' => 16672,
            'user_id' => 1,
            'note' => 'Purchased Edison FTAC 2011',
            'created_at' => '2012-07-27 15:22:12'
        ]);

        CustomerNote::create([
            'id' => 304,
            'customer_id' => 16672,
            'user_id' => 1,
            'note' => 'Missing RTE and TV3 , contact Majella Mc Donald 087 2219509, chargable',
            'created_at' => '2012-07-27 15:22:53'
        ]);

        CustomerNote::create([
            'id' => 305,
            'customer_id' => 14074,
            'user_id' => 1,
            'note' => 'Fit 2 combi stb to & tidy aerials and cabling, not ',
            'created_at' => '2012-07-27 15:39:15'
        ]);

        CustomerNote::create([
            'id' => 306,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'Left voice mail, received offer of part payment from Michael Doherty',
            'created_at' => '2012-07-27 15:53:48'
        ]);

        CustomerNote::create([
            'id' => 307,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Fitted Triax TSC114 combi, connected with scart,',
            'created_at' => '2012-07-27 17:34:19'
        ]);

        CustomerNote::create([
            'id' => 309,
            'customer_id' => 10277,
            'user_id' => 1,
            'note' => 'had builders in, moved cables, pics not right since',
            'created_at' => '2012-07-30 08:40:57'
        ]);

        CustomerNote::create([
            'id' => 310,
            'customer_id' => 14,
            'user_id' => 1,
            'note' => 'Fitted two Triax combi rx,dish & ant,19 inch samsung TV, HDD, ?1034.00 paid cheque',
            'created_at' => '2012-07-30 08:48:16'
        ]);

        CustomerNote::create([
            'id' => 558,
            'customer_id' => 4372,
            'user_id' => 1,
            'note' => 'Cheque enclosed. Also still waiting on re-issue of invoice as outlined in previous note.',
            'created_at' => '2012-08-22 13:38:53'
        ]);

        CustomerNote::create([
            'id' => 312,
            'customer_id' => 4372,
            'user_id' => 1,
            'note' => 'invoice no. 001/13111071 posted to Osmosis for re-issue in Appit name & not DTV ?170.97',
            'created_at' => '2012-07-30 09:52:07'
        ]);

        CustomerNote::create([
            'id' => 313,
            'customer_id' => 14,
            'user_id' => 1,
            'note' => 'Fit HDD, paid ',
            'created_at' => '2012-07-30 13:10:15'
        ]);

        CustomerNote::create([
            'id' => 314,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => 'Rang house, Geraldine not home. Rand mobile no answer',
            'created_at' => '2012-07-30 13:44:04'
        ]);

        CustomerNote::create([
            'id' => 315,
            'customer_id' => 16673,
            'user_id' => 1,
            'note' => 'Fitted FTAC, connected to communal system',
            'created_at' => '2012-07-30 14:49:00'
        ]);

        CustomerNote::create([
            'id' => 316,
            'customer_id' => 16673,
            'user_id' => 1,
            'note' => '		Call to tune FTAC box. FOC',
            'created_at' => '2012-08-17 11:31:09'
        ]);

        CustomerNote::create([
            'id' => 317,
            'customer_id' => 16634,
            'user_id' => 1,
            'note' => 'extended sky+ cables ?49.00 ',
            'created_at' => '2012-07-30 15:43:05'
        ]);

        CustomerNote::create([
            'id' => 318,
            'customer_id' => 3323,
            'user_id' => 1,
            'note' => 'job done, fitted FTAC',
            'created_at' => '2012-07-30 15:43:54'
        ]);

        CustomerNote::create([
            'id' => 319,
            'customer_id' => 4451,
            'user_id' => 1,
            'note' => '		fitted FTAC and SV STB with new aerial ?600.00 ID',
            'created_at' => '2012-07-30 16:10:20'
        ]);

        CustomerNote::create([
            'id' => 559,
            'customer_id' => 16692,
            'user_id' => 1,
            'note' => 'Spoke to Rob from future homes, just fit dish and SV ant and connect to comms',
            'created_at' => '2012-08-22 14:36:10'
        ]);

        CustomerNote::create([
            'id' => 627,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'SRT6000 dead since install',
            'created_at' => '2012-09-03 09:13:50'
        ]);

        CustomerNote::create([
            'id' => 522,
            'customer_id' => 8639,
            'user_id' => 1,
            'note' => '		has FTA, upgrade to combi, contact 087 7745901 Fergal Kenny',
            'created_at' => '2012-08-21 11:13:12'
        ]);

        CustomerNote::create([
            'id' => 574,
            'customer_id' => 16730,
            'user_id' => 1,
            'note' => 'Fit FTAC',
            'created_at' => '2012-08-27 14:46:05'
        ]);

        CustomerNote::create([
            'id' => 320,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'Tested on roof for Mt Lenister and Kilduff, levels up and down. Recommended Saorsat',
            'created_at' => '2012-07-31 08:25:43'
        ]);

        CustomerNote::create([
            'id' => 321,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'Fit saorsat to one tv, ?399',
            'created_at' => '2012-07-31 08:26:40'
        ]);

        CustomerNote::create([
            'id' => 322,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => '		Geraldine not home at moment, might be back later today or tomorrow,also tried mobile',
            'created_at' => '2012-07-31 10:03:13'
        ]);

        CustomerNote::create([
            'id' => 323,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => 'Fit Saorview combi to master bed, fit Saorview STB to kitchen, fit 42 inch LG LED to Ian feets bedroom, fit Saorview ant to attic. ?349+?149+?579',
            'created_at' => '2012-07-31 08:50:36'
        ]);

        CustomerNote::create([
            'id' => 324,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => 'Fit SV ant to attic. Run new cable into attic from dish. Split SV ant 3 ways. Diplex one SV cable with new sat cable in attic and run to master bed. Run next SV cable to Ian feets bed room. Diplex third SV cable with existing sat cable that runs to sitting room. Diplex out again in sitting roomand connect to sky box. SV signal should end up on kitchen tv which is already connected to sky box.',
            'created_at' => '2012-07-31 08:59:42'
        ]);

        CustomerNote::create([
            'id' => 325,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => 'Rang Tony ?1,141.00 all in. will go ahead next week. Dish cables run externally. change to previous notes.',
            'created_at' => '2012-07-31 09:19:16'
        ]);

        CustomerNote::create([
            'id' => 326,
            'customer_id' => 14,
            'user_id' => 1,
            'note' => 'HDD fitted ID',
            'created_at' => '2012-07-31 10:04:18'
        ]);

        CustomerNote::create([
            'id' => 327,
            'customer_id' => 16671,
            'user_id' => 1,
            'note' => 'Fitted Triax TSC, dish and aerial on chimney, TV on HDMI1, Samsung, cheque ?399.00',
            'created_at' => '2012-07-31 12:17:50'
        ]);

        CustomerNote::create([
            'id' => 328,
            'customer_id' => 6443,
            'user_id' => 1,
            'note' => 'Ni pics on mothers tv',
            'created_at' => '2012-07-31 12:55:34'
        ]);

        CustomerNote::create([
            'id' => 329,
            'customer_id' => 16667,
            'user_id' => 1,
            'note' => 'connected sky box, paid ?49.00',
            'created_at' => '2012-07-31 13:03:42'
        ]);

        CustomerNote::create([
            'id' => 330,
            'customer_id' => 3176,
            'user_id' => 1,
            'note' => 'called to GC, cheque in post',
            'created_at' => '2012-07-31 13:04:18'
        ]);

        CustomerNote::create([
            'id' => 331,
            'customer_id' => 1172,
            'user_id' => 1,
            'note' => '		Fit SV stb to tv in kitchen. Nothing at kitchen tv right now. �99.00 Look at aerials here. ',
            'created_at' => '2012-08-17 11:19:17'
        ]);

        CustomerNote::create([
            'id' => 332,
            'customer_id' => 16087,
            'user_id' => 1,
            'note' => 'Insurance driving etc',
            'created_at' => '2012-07-31 13:29:34'
        ]);

        CustomerNote::create([
            'id' => 333,
            'customer_id' => 173,
            'user_id' => 1,
            'note' => 'Call to BOI Brid',
            'created_at' => '2012-07-31 13:34:41'
        ]);

        CustomerNote::create([
            'id' => 334,
            'customer_id' => 5580,
            'user_id' => 1,
            'note' => '		had to pull out here, will talk to Ian regarding solution, two hours labour to be billed out if solution can be found',
            'created_at' => '2012-07-31 15:47:13'
        ]);

        CustomerNote::create([
            'id' => 335,
            'customer_id' => 16674,
            'user_id' => 1,
            'note' => '				Fit SV ant to one TV, have SV tv, advised poor signal, may need SV dish, has FTA already',
            'created_at' => '2012-08-17 11:16:20'
        ]);

        CustomerNote::create([
            'id' => 336,
            'customer_id' => 16653,
            'user_id' => 1,
            'note' => 'connect sky plus at main tv, needs dish, replace dish, run new cable, run two extenders (not kitchen), 5 hrs  plus 2 hrs from first day. ',
            'created_at' => '2012-08-01 15:23:41'
        ]);

        CustomerNote::create([
            'id' => 337,
            'customer_id' => 16018,
            'user_id' => 1,
            'note' => 'Dale rang, call to look at Saorview upgrade',
            'created_at' => '2012-08-01 15:51:59'
        ]);

        CustomerNote::create([
            'id' => 338,
            'customer_id' => 12377,
            'user_id' => 1,
            'note' => '				needs a SV antenna, has new Philips SV tv with poor pic, may require second tv conn to new antenna, bed room tv may ',
            'created_at' => '2012-08-17 11:18:47'
        ]);

        CustomerNote::create([
            'id' => 339,
            'customer_id' => 16632,
            'user_id' => 1,
            'note' => 'prov for wed pm, ',
            'created_at' => '2012-08-01 16:00:30'
        ]);

        CustomerNote::create([
            'id' => 340,
            'customer_id' => 16653,
            'user_id' => 1,
            'note' => 'quoted 450-500 for work in previous note',
            'created_at' => '2012-08-01 16:17:14'
        ]);

        CustomerNote::create([
            'id' => 341,
            'customer_id' => 2689,
            'user_id' => 1,
            'note' => 'Fit SV STB to tv in conservatory, workiing with analogue right now, may just require SV STB',
            'created_at' => '2012-08-01 16:25:31'
        ]);

        CustomerNote::create([
            'id' => 342,
            'customer_id' => 2689,
            'user_id' => 1,
            'note' => 'quoted 149 fitted, on hold for now',
            'created_at' => '2012-08-01 16:26:34'
        ]);

        CustomerNote::create([
            'id' => 343,
            'customer_id' => 16647,
            'user_id' => 1,
            'note' => 'confirmed for Tuesday after 11.45',
            'created_at' => '2012-08-01 16:36:30'
        ]);

        CustomerNote::create([
            'id' => 344,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => 'fit dish and DTT ant, maybe STB also, key in Freshco close by. KD',
            'created_at' => '2012-08-01 16:41:13'
        ]);

        CustomerNote::create([
            'id' => 345,
            'customer_id' => 16670,
            'user_id' => 1,
            'note' => 'prov for thurs pm,left message on Johns mobile.',
            'created_at' => '2012-08-01 16:48:11'
        ]);

        CustomerNote::create([
            'id' => 346,
            'customer_id' => 6443,
            'user_id' => 1,
            'note' => 're prog mothers stb, all ok , priced 42 LG LED 599.00',
            'created_at' => '2012-08-01 16:51:21'
        ]);

        CustomerNote::create([
            'id' => 347,
            'customer_id' => 12366,
            'user_id' => 1,
            'note' => 'fitted new mha to existing antenna, removed old vhf analogue signal, levels ok at main tv, may not be good enough to distribute to other tvs, customer will let us know.',
            'created_at' => '2012-08-01 16:53:47'
        ]);

        CustomerNote::create([
            'id' => 348,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'fitted Saorsat to kitchen tv, used customers 28.2 dish, paid 399.00',
            'created_at' => '2012-08-01 16:54:58'
        ]);

        CustomerNote::create([
            'id' => 349,
            'customer_id' => 16668,
            'user_id' => 1,
            'note' => 'fitted combi system, 399, paid cash',
            'created_at' => '2012-08-01 16:56:00'
        ]);

        CustomerNote::create([
            'id' => 350,
            'customer_id' => 111,
            'user_id' => 1,
            'note' => 'Fit FTAC 399.00 ',
            'created_at' => '2012-08-01 17:06:05'
        ]);

        CustomerNote::create([
            'id' => 351,
            'customer_id' => 10570,
            'user_id' => 1,
            'note' => 'Date 31/03/05 Time 11:59:14 Enter operator ID = lw - fitted rte & tv3 aerials also dish with quatro lnb cabled into attic fitted amp for quatro 12 way switcher to wall in atic & conn cables - strong boxes no feets - 155041021902 - 155041024627 - 155041021904 - 155041021903 - 155041021905 - 155041021906 - no - 19640mk Date 23/03/05 Time 10:02:35 Enter operator ID = ML- Install the following 8 x strong FTA receivers, 80cm dish - switcher - amps RTE TV3 and ancilliary equipment listed on quotation.',
            'created_at' => '2012-08-02 10:19:49'
        ]);

        CustomerNote::create([
            'id' => 352,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => '		=12Fitted FTAC and MHA and PSU & mains lead. Need TV remote to complete install. 399+70+12+50, insulation in attic, cables covered up',
            'created_at' => '2012-08-02 14:44:15'
        ]);

        CustomerNote::create([
            'id' => 353,
            'customer_id' => 16666,
            'user_id' => 1,
            'note' => '		Fitted 2 SV STBs, MHA and ant. ID ',
            'created_at' => '2012-08-03 09:19:54'
        ]);

        CustomerNote::create([
            'id' => 354,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => 'Spoke to suzanne preston 085 7702977, explained prob with tv missing remote, she will try source tv over weekend, if not we have old one in store, invoice sent to Pat Gannon and client updated.',
            'created_at' => '2012-08-02 15:02:57'
        ]);

        CustomerNote::create([
            'id' => 355,
            'customer_id' => 16670,
            'user_id' => 1,
            'note' => 'ant MHA and stb fitted at Mary feets house, paid. Same fitted at son Johns house, MHA to come. Collect ?330.00 on completion.',
            'created_at' => '2012-08-03 09:23:26'
        ]);

        CustomerNote::create([
            'id' => 356,
            'customer_id' => 16676,
            'user_id' => 1,
            'note' => '		Fit 32 inch Bluediamond on wall bracket, FTA rx, dish and ant also. 329.00 + 299.00 + bracket and fitting',
            'created_at' => '2012-08-03 09:45:49'
        ]);

        CustomerNote::create([
            'id' => 357,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => 'FTAC system 399 nd connect second tv to sv ant. 49',
            'created_at' => '2012-08-03 11:17:44'
        ]);

        CustomerNote::create([
            'id' => 358,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => '		away week 6th - 11th , back Monday 14th ',
            'created_at' => '2012-08-17 08:37:09'
        ]);

        CustomerNote::create([
            'id' => 359,
            'customer_id' => 14746,
            'user_id' => 1,
            'note' => '		Fit FTAC combi ?399.00 , ?349.oo with customers dish',
            'created_at' => '2012-08-03 11:57:28'
        ]);

        CustomerNote::create([
            'id' => 360,
            'customer_id' => 16678,
            'user_id' => 1,
            'note' => '2x SD HD 537',
            'created_at' => '2012-08-03 13:44:22'
        ]);

        CustomerNote::create([
            'id' => 361,
            'customer_id' => 16679,
            'user_id' => 1,
            'note' => 'Fitted two triax STHD 537',
            'created_at' => '2012-08-03 13:49:43'
        ]);

        CustomerNote::create([
            'id' => 362,
            'customer_id' => 16680,
            'user_id' => 1,
            'note' => 'Fitted 2x triax 537',
            'created_at' => '2012-08-03 13:54:06'
        ]);

        CustomerNote::create([
            'id' => 363,
            'customer_id' => 16678,
            'user_id' => 1,
            'note' => 'dont have install date here',
            'created_at' => '2012-08-03 14:10:46'
        ]);

        CustomerNote::create([
            'id' => 615,
            'customer_id' => 16699,
            'user_id' => 1,
            'note' => 'Fit SV ant, connect to one SV-TV',
            'created_at' => '2012-09-03 07:26:37'
        ]);

        CustomerNote::create([
            'id' => 616,
            'customer_id' => 16728,
            'user_id' => 1,
            'note' => 'Fit SV ant in attic to customers 8 way split, fitted 3 SV stbs. Levels low out of 8 way splitter, advised amp if problem arises',
            'created_at' => '2012-09-03 07:28:23'
        ]);

        CustomerNote::create([
            'id' => 617,
            'customer_id' => 16729,
            'user_id' => 1,
            'note' => 'Fit FTA Strong SRT6000',
            'created_at' => '2012-09-03 07:29:10'
        ]);

        CustomerNote::create([
            'id' => 364,
            'customer_id' => 16683,
            'user_id' => 1,
            'note' => 'Fitted two triax STHD 537',
            'created_at' => '2012-08-03 14:29:01'
        ]);

        CustomerNote::create([
            'id' => 365,
            'customer_id' => 16684,
            'user_id' => 1,
            'note' => 'Fitted triax SD HD 537',
            'created_at' => '2012-08-03 14:44:25'
        ]);

        CustomerNote::create([
            'id' => 366,
            'customer_id' => 9749,
            'user_id' => 1,
            'note' => 'KD to call to Sabrina re CCTV quote',
            'created_at' => '2012-08-03 14:48:36'
        ]);

        CustomerNote::create([
            'id' => 367,
            'customer_id' => 4084,
            'user_id' => 1,
            'note' => 'fitted triax ST HD 537',
            'created_at' => '2012-08-03 14:51:21'
        ]);

        CustomerNote::create([
            'id' => 368,
            'customer_id' => 4084,
            'user_id' => 1,
            'note' => 'fitted triax ST HD 537',
            'created_at' => '2012-08-03 14:52:20'
        ]);

        CustomerNote::create([
            'id' => 369,
            'customer_id' => 1921,
            'user_id' => 1,
            'note' => 'Sky + problems',
            'created_at' => '2012-08-03 14:53:55'
        ]);

        CustomerNote::create([
            'id' => 370,
            'customer_id' => 4897,
            'user_id' => 1,
            'note' => 'no sat signal ',
            'created_at' => '2012-08-03 14:54:50'
        ]);

        CustomerNote::create([
            'id' => 371,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'sky plus problem',
            'created_at' => '2012-08-03 14:56:23'
        ]);

        CustomerNote::create([
            'id' => 630,
            'customer_id' => 16739,
            'user_id' => 1,
            'note' => 'Fit FTAC €399.00 and 42 inch LG. €549.00',
            'created_at' => '2012-09-03 10:25:56'
        ]);

        CustomerNote::create([
            'id' => 372,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'no pics on two tvs',
            'created_at' => '2012-08-03 14:59:42'
        ]);

        CustomerNote::create([
            'id' => 632,
            'customer_id' => 16740,
            'user_id' => 1,
            'note' => 'Fit new dish, moved house. 150.00-175.00 Available 24/7',
            'created_at' => '2012-09-03 10:55:48'
        ]);

        CustomerNote::create([
            'id' => 633,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'KD to call with replacement STB late Tuesday evening. Not confirmed with customer yet. Awaiting AEL delivery.',
            'created_at' => '2012-09-03 11:04:55'
        ]);

        CustomerNote::create([
            'id' => 562,
            'customer_id' => 16725,
            'user_id' => 1,
            'note' => 'Fit FTAC, poor signal here, recommended Saorsat combi €429.00',
            'created_at' => '2012-08-24 09:27:13'
        ]);

        CustomerNote::create([
            'id' => 563,
            'customer_id' => 16726,
            'user_id' => 1,
            'note' => '			To be confirmed: 	Fit SV ant and 2 STBs, remove old aerials, 350.00/400.00',
            'created_at' => '2012-08-24 09:33:57'
        ]);

        CustomerNote::create([
            'id' => 374,
            'customer_id' => 14074,
            'user_id' => 1,
            'note' => 'Path to right of house, last pillar before gate, lift rock, key there.',
            'created_at' => '2012-08-07 09:17:38'
        ]);

        CustomerNote::create([
            'id' => 375,
            'customer_id' => 14074,
            'user_id' => 1,
            'note' => 'remove sky from sitting, and fit combi there and in kitchen',
            'created_at' => '2012-08-07 09:19:04'
        ]);

        CustomerNote::create([
            'id' => 376,
            'customer_id' => 16643,
            'user_id' => 1,
            'note' => 'works complete, need to find solution to connect STB to projector and or home cin',
            'created_at' => '2012-08-07 09:33:40'
        ]);

        CustomerNote::create([
            'id' => 377,
            'customer_id' => 1921,
            'user_id' => 1,
            'note' => 'no RTE now, still recording problem',
            'created_at' => '2012-08-07 11:21:42'
        ]);

        CustomerNote::create([
            'id' => 378,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => 'called mobile, left message re disconn',
            'created_at' => '2012-08-07 11:36:31'
        ]);

        CustomerNote::create([
            'id' => 379,
            'customer_id' => 16293,
            'user_id' => 1,
            'note' => 'Problem with signal, black screen from Triax STB',
            'created_at' => '2012-08-07 13:12:32'
        ]);

        CustomerNote::create([
            'id' => 380,
            'customer_id' => 16293,
            'user_id' => 1,
            'note' => 'prov for Friday',
            'created_at' => '2012-08-07 13:15:48'
        ]);

        CustomerNote::create([
            'id' => 381,
            'customer_id' => 14074,
            'user_id' => 1,
            'note' => '		combi 199,combi 199, MHA 70,aerial 24,dip17,cable25,scart7.5, Labour 220. TOTAL ?761.50 ',
            'created_at' => '2012-08-07 13:43:58'
        ]);

        CustomerNote::create([
            'id' => 382,
            'customer_id' => 4897,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-08-07 14:00:45'
        ]);

        CustomerNote::create([
            'id' => 383,
            'customer_id' => 16685,
            'user_id' => 1,
            'note' => '		Fit Saorview STB and aerial. Do whatever . ',
            'created_at' => '2012-08-08 09:49:23'
        ]);

        CustomerNote::create([
            'id' => 384,
            'customer_id' => 16686,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB €249.00',
            'created_at' => '2012-08-08 10:43:24'
        ]);

        CustomerNote::create([
            'id' => 385,
            'customer_id' => 16687,
            'user_id' => 1,
            'note' => 'FTAC €399',
            'created_at' => '2012-08-08 10:48:10'
        ]);

        CustomerNote::create([
            'id' => 386,
            'customer_id' => 16688,
            'user_id' => 1,
            'note' => '				has 2 tvs, wants to upgrade to SV, away week of Aug 7th-12th',
            'created_at' => '2012-08-17 08:38:27'
        ]);

        CustomerNote::create([
            'id' => 387,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Checked all tvs, tuned set in staff room. All others no problem, invoiced.\r\nKD \r\n',
            'created_at' => '2012-08-08 15:40:36'
        ]);

        CustomerNote::create([
            'id' => 388,
            'customer_id' => 16018,
            'user_id' => 1,
            'note' => '		Met with Dale, advised contact tv people for exercise machines to see if they can be upgraded to digital. If so digital head end can be installed. Otherwise new digital signal will have to be converted back to analogue signal.',
            'created_at' => '2014-01-14 20:46:15'
        ]);

        CustomerNote::create([
            'id' => 389,
            'customer_id' => 16647,
            'user_id' => 1,
            'note' => 'Job done ID Paid.',
            'created_at' => '2012-08-08 15:44:53'
        ]);

        CustomerNote::create([
            'id' => 390,
            'customer_id' => 16689,
            'user_id' => 1,
            'note' => '		Install Triax combi or Saorsat combi €399',
            'created_at' => '2012-08-17 10:59:39'
        ]);

        CustomerNote::create([
            'id' => 391,
            'customer_id' => 16690,
            'user_id' => 1,
            'note' => 'Frank bought SV STB from us. Cant get working. Wants SV ant installed. Quoted €150.00',
            'created_at' => '2012-08-09 08:29:50'
        ]);

        CustomerNote::create([
            'id' => 392,
            'customer_id' => 16691,
            'user_id' => 1,
            'note' => 'fitted triax sdhd537 2011',
            'created_at' => '2012-08-09 09:10:41'
        ]);

        CustomerNote::create([
            'id' => 393,
            'customer_id' => 16691,
            'user_id' => 1,
            'note' => 'triax 537 suffering from black screen',
            'created_at' => '2012-08-09 09:11:12'
        ]);

        CustomerNote::create([
            'id' => 394,
            'customer_id' => 16692,
            'user_id' => 1,
            'note' => 'fit dish and SV antenna, estimate €200.00 ',
            'created_at' => '2012-08-09 09:59:00'
        ]);

        CustomerNote::create([
            'id' => 395,
            'customer_id' => 3293,
            'user_id' => 1,
            'note' => '		Connect SV ant to sky box, connect bed room to existing sky, new cable run. Fit remote extrs to kitchen and bedroom. Fit rc amp to run extrs. Sky+ HD box. ',
            'created_at' => '2012-08-09 10:43:19'
        ]);

        CustomerNote::create([
            'id' => 396,
            'customer_id' => 16693,
            'user_id' => 1,
            'note' => 'Ordered Sky, has viewing card',
            'created_at' => '2012-08-09 11:01:23'
        ]);

        CustomerNote::create([
            'id' => 397,
            'customer_id' => 16694,
            'user_id' => 1,
            'note' => 'Mount 42 inch LED on wall and connect to FTAC.',
            'created_at' => '2012-08-09 11:04:27'
        ]);

        CustomerNote::create([
            'id' => 398,
            'customer_id' => 16695,
            'user_id' => 1,
            'note' => 'Sky+HD no satellite signal, just went over night',
            'created_at' => '2012-08-09 13:16:02'
        ]);

        CustomerNote::create([
            'id' => 399,
            'customer_id' => 3016,
            'user_id' => 1,
            'note' => '		not available for Friday 10th Aug',
            'created_at' => '2012-08-14 09:16:19'
        ]);

        CustomerNote::create([
            'id' => 400,
            'customer_id' => 14746,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-08-09 13:34:25'
        ]);

        CustomerNote::create([
            'id' => 401,
            'customer_id' => 16685,
            'user_id' => 1,
            'note' => 'confirmed friday 12.00',
            'created_at' => '2012-08-09 13:37:40'
        ]);

        CustomerNote::create([
            'id' => 402,
            'customer_id' => 16670,
            'user_id' => 1,
            'note' => 'confirmed friday 3.00pm',
            'created_at' => '2012-08-09 13:40:47'
        ]);

        CustomerNote::create([
            'id' => 403,
            'customer_id' => 16670,
            'user_id' => 1,
            'note' => '		red brick hse, remove sv stb and re fit dish and connect combi box, 330.00 plus 100.00 more for combi',
            'created_at' => '2012-08-09 13:59:06'
        ]);

        CustomerNote::create([
            'id' => 404,
            'customer_id' => 1921,
            'user_id' => 1,
            'note' => 'fitted replacement sky stb, 300.00',
            'created_at' => '2012-08-09 14:44:27'
        ]);

        CustomerNote::create([
            'id' => 405,
            'customer_id' => 16696,
            'user_id' => 1,
            'note' => 'Anne Mcauley 7764121 (daughter), Fit FTAC ',
            'created_at' => '2012-08-09 15:28:00'
        ]);

        CustomerNote::create([
            'id' => 406,
            'customer_id' => 16696,
            'user_id' => 1,
            'note' => 'Paid ?399.00',
            'created_at' => '2012-08-09 15:28:49'
        ]);

        CustomerNote::create([
            'id' => 407,
            'customer_id' => 16106,
            'user_id' => 1,
            'note' => '				pics coming and going FTAC box  when cable at box is moved, or when someone walks past STB. Customer maintains this is just a loose connection in a cable. Advised ?49.00 call out. Anything more contact KD.',
            'created_at' => '2012-08-10 09:51:54'
        ]);

        CustomerNote::create([
            'id' => 408,
            'customer_id' => 16698,
            'user_id' => 1,
            'note' => 'Moved hes',
            'created_at' => '2012-08-10 10:00:04'
        ]);

        CustomerNote::create([
            'id' => 409,
            'customer_id' => 14746,
            'user_id' => 1,
            'note' => 'fitted 114 combi and ant in attic, Sanyo TV, AV2, scart lead. ?349.00 cheque. TV/AV button top lhs of remote',
            'created_at' => '2012-08-10 10:03:55'
        ]);

        CustomerNote::create([
            'id' => 410,
            'customer_id' => 10277,
            'user_id' => 1,
            'note' => 'remade f conns in attic. 4 sky signal cables there, connected to two coaxial to sitting room, will require other two sky cables connected to kitchen point on another day, two cables in kitchen, should be in attic also, paid 70.00 bill only 65.00, 5.00 credit due on next invoice',
            'created_at' => '2012-08-10 11:02:06'
        ]);

        CustomerNote::create([
            'id' => 411,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => '		all work done, tv to come next week',
            'created_at' => '2012-08-17 08:39:34'
        ]);

        CustomerNote::create([
            'id' => 412,
            'customer_id' => 3293,
            'user_id' => 1,
            'note' => 'work done ID',
            'created_at' => '2012-08-10 11:04:42'
        ]);

        CustomerNote::create([
            'id' => 413,
            'customer_id' => 16293,
            'user_id' => 1,
            'note' => 'pics ok now, prob was RTE black screen prob',
            'created_at' => '2012-08-10 11:13:42'
        ]);

        CustomerNote::create([
            'id' => 414,
            'customer_id' => 16685,
            'user_id' => 1,
            'note' => '		fitted SV ant and STB, ?250 paid, connected with scart, Philips tv, prog minus to get AV. ',
            'created_at' => '2012-08-10 11:39:51'
        ]);

        CustomerNote::create([
            'id' => 415,
            'customer_id' => 16699,
            'user_id' => 1,
            'note' => '				fit SV antenna to aittc if possible & connect to SV tv. no figures discussed here',
            'created_at' => '2012-08-17 10:56:52'
        ]);

        CustomerNote::create([
            'id' => 416,
            'customer_id' => 16543,
            'user_id' => 1,
            'note' => 'retuned stb in kitchen. will drop in with ?49.00 ID',
            'created_at' => '2012-08-10 13:04:01'
        ]);

        CustomerNote::create([
            'id' => 417,
            'customer_id' => 16690,
            'user_id' => 1,
            'note' => 'confirmed sat pm',
            'created_at' => '2012-08-10 13:06:46'
        ]);

        CustomerNote::create([
            'id' => 418,
            'customer_id' => 16692,
            'user_id' => 1,
            'note' => 'prov booking for Saturday, price quoted assumes SV ant is in attic and dish install is straight fwd and both signals go to same point on one cable, make sure to quote before going ahead if more involved',
            'created_at' => '2012-08-10 13:20:39'
        ]);

        CustomerNote::create([
            'id' => 419,
            'customer_id' => 16670,
            'user_id' => 1,
            'note' => 'fitted back dish and swapped SV box for combi. ?430.00 auto scart to Dawoo tv.',
            'created_at' => '2012-08-10 14:29:45'
        ]);

        CustomerNote::create([
            'id' => 420,
            'customer_id' => 16700,
            'user_id' => 1,
            'note' => 'sky plus signal problems, advised €49.00, no signal being received. ',
            'created_at' => '2012-08-10 14:42:54'
        ]);

        CustomerNote::create([
            'id' => 421,
            'customer_id' => 16698,
            'user_id' => 1,
            'note' => 'Moved hse, has sky+ box, dish on house, connect box to dish. connect sky box to second sitting room. needs remote also.?49.00',
            'created_at' => '2012-08-10 15:40:28'
        ]);

        CustomerNote::create([
            'id' => 422,
            'customer_id' => 8807,
            'user_id' => 1,
            'note' => 'no sat signal on second sky stb, first box working ',
            'created_at' => '2012-08-13 08:15:33'
        ]);

        CustomerNote::create([
            'id' => 423,
            'customer_id' => 297,
            'user_id' => 1,
            'note' => 'prob with fta satellite',
            'created_at' => '2012-08-13 08:36:36'
        ]);

        CustomerNote::create([
            'id' => 424,
            'customer_id' => 297,
            'user_id' => 1,
            'note' => '		175.00 for aerials 2pm today or morning',
            'created_at' => '2012-08-13 10:08:55'
        ]);

        CustomerNote::create([
            'id' => 425,
            'customer_id' => 16700,
            'user_id' => 1,
            'note' => 'Faulty wall socket to dish, ?49.00 paid',
            'created_at' => '2012-08-13 10:31:31'
        ]);

        CustomerNote::create([
            'id' => 426,
            'customer_id' => 16690,
            'user_id' => 1,
            'note' => 'Fitted SV ant ?150.00 cna connected to SV STB, TV has SV, talk to Frank',
            'created_at' => '2012-08-13 10:33:12'
        ]);

        CustomerNote::create([
            'id' => 427,
            'customer_id' => 16698,
            'user_id' => 1,
            'note' => 'connected sky+ and sky RC ?83.95 paid ID',
            'created_at' => '2012-08-13 10:35:01'
        ]);

        CustomerNote::create([
            'id' => 428,
            'customer_id' => 16106,
            'user_id' => 1,
            'note' => 'cables wrong way around in diplexer ?49.00 paid',
            'created_at' => '2012-08-13 10:35:55'
        ]);

        CustomerNote::create([
            'id' => 429,
            'customer_id' => 16672,
            'user_id' => 1,
            'note' => 'retuned Edison STB, invoice ?49.00 ',
            'created_at' => '2012-08-13 10:38:18'
        ]);

        CustomerNote::create([
            'id' => 430,
            'customer_id' => 16697,
            'user_id' => 1,
            'note' => '		Quoted for 2x Triax combi ?649.00 + LG 42 LED ?599.00 + LG 32 ?449 Total ?1,697.00',
            'created_at' => '2012-08-13 10:54:27'
        ]);

        CustomerNote::create([
            'id' => 431,
            'customer_id' => 16694,
            'user_id' => 1,
            'note' => 'quote sent , see FB ',
            'created_at' => '2012-08-13 10:59:50'
        ]);

        CustomerNote::create([
            'id' => 432,
            'customer_id' => 16701,
            'user_id' => 1,
            'note' => 'FTAC €399',
            'created_at' => '2012-08-13 11:00:56'
        ]);

        CustomerNote::create([
            'id' => 433,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => '						confirmed for wed morning, ask for Sr. Loretto',
            'created_at' => '2012-08-17 12:43:35'
        ]);

        CustomerNote::create([
            'id' => 434,
            'customer_id' => 16701,
            'user_id' => 1,
            'note' => '		cancelled UPC, on hold till Sept, will call us',
            'created_at' => '2012-08-17 08:54:26'
        ]);

        CustomerNote::create([
            'id' => 435,
            'customer_id' => 16694,
            'user_id' => 1,
            'note' => 'left message with reception',
            'created_at' => '2012-08-13 11:28:09'
        ]);

        CustomerNote::create([
            'id' => 436,
            'customer_id' => 16695,
            'user_id' => 1,
            'note' => 're-made f conn, ?49.00 paid',
            'created_at' => '2012-08-13 11:31:24'
        ]);

        CustomerNote::create([
            'id' => 504,
            'customer_id' => 16692,
            'user_id' => 1,
            'note' => '		ID site visit: Fit ant and dish on gable end bracket to ensure good signal level. Connect 5 coaxial from dish and and to cables in garage. Fit Sky + STBs in comms room and connect RF to other TV points. Fit remote extenders to individual TV points. Antenna 25.00 dish & Lnb 60.00, brackets and pole 56.00, link amp 40.00, labour 220.00 , extenders 50.00 each inc labour. total 401.00 plus extenders.\r\n\r\nNOTE: no place to put sky boxes in comms, mains also needed. second link amp needed if both sky boxes need multi room access to RC function',
            'created_at' => '2012-08-16 18:41:30'
        ]);

        CustomerNote::create([
            'id' => 438,
            'customer_id' => 11421,
            'user_id' => 1,
            'note' => 'tune tv3 on one tv',
            'created_at' => '2012-08-13 12:06:06'
        ]);

        CustomerNote::create([
            'id' => 439,
            'customer_id' => 10341,
            'user_id' => 1,
            'note' => 'Spoke to Bill. ',
            'created_at' => '2012-08-13 12:42:30'
        ]);

        CustomerNote::create([
            'id' => 440,
            'customer_id' => 16702,
            'user_id' => 1,
            'note' => 'Moved to new hse, connected up existing dish cables,no sat sig, advised €49.00 plus work or new dish for 150.00/170 ',
            'created_at' => '2012-08-13 13:10:39'
        ]);

        CustomerNote::create([
            'id' => 441,
            'customer_id' => 16703,
            'user_id' => 1,
            'note' => '		279 for SV ant SV STB and second room ',
            'created_at' => '2012-08-17 14:16:10'
        ]);

        CustomerNote::create([
            'id' => 442,
            'customer_id' => 6620,
            'user_id' => 1,
            'note' => '		sky+ missing some channels, rattle at side of house, might be dish',
            'created_at' => '2012-08-17 11:16:59'
        ]);

        CustomerNote::create([
            'id' => 443,
            'customer_id' => 8807,
            'user_id' => 1,
            'note' => 'Remade two f conn at back of STB , 59.00 paid',
            'created_at' => '2012-08-13 18:44:11'
        ]);

        CustomerNote::create([
            'id' => 444,
            'customer_id' => 16665,
            'user_id' => 1,
            'note' => 'Adjust LNB at dish, bracket broken, advised customer temp job, ran extra cable from dish, 83.00 paid',
            'created_at' => '2012-08-13 18:46:47'
        ]);

        CustomerNote::create([
            'id' => 445,
            'customer_id' => 297,
            'user_id' => 1,
            'note' => 'Job done, paid 175.00',
            'created_at' => '2012-08-13 18:48:02'
        ]);

        CustomerNote::create([
            'id' => 446,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => '\r\nEdit | DeleteNote Added: August 3, 2012 3:08PM\r\nBooking. Land back on all booking screen when a booking is made or edited.\r\n\r\nDONE: This should now be returning to the  feetall bookings feet view.\r\n\r\nBut return to customer view when booking is deleted. And return to customer view when status is changed.',
            'created_at' => '2012-08-13 19:05:08'
        ]);

        CustomerNote::create([
            'id' => 447,
            'customer_id' => 16676,
            'user_id' => 1,
            'note' => 'Ian spent one hour on site running cables.Antenna now required also, and dish and ant site may require extra brackets. KD to confirm with Miller',
            'created_at' => '2012-08-13 19:08:53'
        ]);

        CustomerNote::create([
            'id' => 448,
            'customer_id' => 16686,
            'user_id' => 1,
            'note' => '		Call to confirm install pm today Tuesday',
            'created_at' => '2012-08-17 11:08:49'
        ]);

        CustomerNote::create([
            'id' => 506,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'Received part payment from MTJ. €391.59 balance o/s ',
            'created_at' => '2012-08-17 09:25:26'
        ]);

        CustomerNote::create([
            'id' => 507,
            'customer_id' => 16715,
            'user_id' => 1,
            'note' => 'Cancelled ',
            'created_at' => '2012-08-17 09:43:36'
        ]);

        CustomerNote::create([
            'id' => 508,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => '		Go ahead with dual Saorsat combi €649.00, might be reduction for use of customers dish. Two points',
            'created_at' => '2012-08-17 12:32:26'
        ]);

        CustomerNote::create([
            'id' => 509,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'No FTA channels from Saorsat install. Sky box connected to same dish is ok. Problem can only be with Disecque switch or STB programming. ',
            'created_at' => '2012-08-17 11:43:11'
        ]);

        CustomerNote::create([
            'id' => 505,
            'customer_id' => 13986,
            'user_id' => 1,
            'note' => 'No Saorview signal to bar, moved sky box in master bed',
            'created_at' => '2012-08-17 09:15:34'
        ]);

        CustomerNote::create([
            'id' => 2076,
            'customer_id' => 13673,
            'user_id' => 1,
            'note' => 'Not until end of month, estimated 434.00 for combi stb, bracket for stb, bracket for tv, connect to existing dish and antenna',
            'created_at' => '2013-01-11 10:04:30'
        ]);

        CustomerNote::create([
            'id' => 453,
            'customer_id' => 16704,
            'user_id' => 1,
            'note' => 'note here',
            'created_at' => '2012-08-14 08:56:38'
        ]);



        CustomerNote::create([
            'id' => 454,
            'customer_id' => 16704,
            'user_id' => 1,
            'note' => '		note 2 edit note\r\n',
            'created_at' => '2012-08-14 08:58:41'
        ]);



        CustomerNote::create([
            'id' => 455,
            'customer_id' => 16106,
            'user_id' => 1,
            'note' => 'Third test note',
            'created_at' => '2012-08-14 09:06:24'
        ]);



        CustomerNote::create([
            'id' => 514,
            'customer_id' => 16689,
            'user_id' => 1,
            'note' => 'Book to do on inistioge run',
            'created_at' => '2012-08-17 17:09:43'
        ]);



        CustomerNote::create([
            'id' => 564,
            'customer_id' => 16727,
            'user_id' => 1,
            'note' => 'Fit 2 FTAC €649.00',
            'created_at' => '2012-08-24 09:46:13'
        ]);



        CustomerNote::create([
            'id' => 458,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => 'Edit a booking and land on that booking date view (all booked customers on this date) when CREATED or UPDATED.',
            'created_at' => '2012-08-14 09:19:34'
        ]);



        CustomerNote::create([
            'id' => 459,
            'customer_id' => 173,
            'user_id' => 1,
            'note' => 'test note\r\n',
            'created_at' => '2012-08-14 09:20:35'
        ]);



        CustomerNote::create([
            'id' => 460,
            'customer_id' => 16705,
            'user_id' => 1,
            'note' => 'wrhwg',
            'created_at' => '2012-08-14 09:22:27'
        ]);



        CustomerNote::create([
            'id' => 520,
            'customer_id' => 6047,
            'user_id' => 1,
            'note' => '		Fit SV antenna and connect to 3 cables in attic, has one SV STB, other TVs are SV ready. Signal from 3 transmitters available here according to SV web site. West, East and South',
            'created_at' => '2012-08-21 10:25:03'
        ]);



        CustomerNote::create([
            'id' => 521,
            'customer_id' => 16720,
            'user_id' => 1,
            'note' => 'Fit existing Sky STB to dish at new house. Fit SV ant and connect to all rooms. May want Sky distributed also and possibly RC extenders.',
            'created_at' => '2012-08-21 11:01:48'
        ]);



        CustomerNote::create([
            'id' => 623,
            'customer_id' => 16216,
            'user_id' => 1,
            'note' => 'Job done, paid cheque 440.00',
            'created_at' => '2012-09-03 07:45:07'
        ]);



        CustomerNote::create([
            'id' => 624,
            'customer_id' => 16722,
            'user_id' => 1,
            'note' => 'Cancelled , moving house??',
            'created_at' => '2012-09-03 07:51:41'
        ]);



        CustomerNote::create([
            'id' => 510,
            'customer_id' => 7972,
            'user_id' => 1,
            'note' => 'No RTE 2',
            'created_at' => '2012-08-17 14:35:02'
        ]);



        CustomerNote::create([
            'id' => 511,
            'customer_id' => 1200,
            'user_id' => 1,
            'note' => 'Fit FTAC, Wed PM confirmed',
            'created_at' => '2012-08-17 15:01:32'
        ]);



        CustomerNote::create([
            'id' => 512,
            'customer_id' => 3176,
            'user_id' => 1,
            'note' => 'agreed discount on totla bill for service call sat am, paid balance',
            'created_at' => '2012-08-17 15:20:00'
        ]);



        CustomerNote::create([
            'id' => 565,
            'customer_id' => 11444,
            'user_id' => 1,
            'note' => '				Fit Combi STB €199.00 existing FTA customer. Available Thurs Fri next week. Knows ant may be required @ 150.00',
            'created_at' => '2012-08-24 10:00:21'
        ]);



        CustomerNote::create([
            'id' => 513,
            'customer_id' => 13986,
            'user_id' => 1,
            'note' => 'Spokemto junior, booked for Tuesday midday.\r\n',
            'created_at' => '2012-08-17 17:00:24'
        ]);



        CustomerNote::create([
            'id' => 474,
            'customer_id' => 16676,
            'user_id' => 1,
            'note' => '		Wants combi now instead,advised of non standard install',
            'created_at' => '2012-08-14 13:51:14'
        ]);



        CustomerNote::create([
            'id' => 475,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => '2 x SV STB @ 250.00 fitted. Signal should be at tvs but may require aerial work.',
            'created_at' => '2012-08-14 14:10:03'
        ]);



        CustomerNote::create([
            'id' => 476,
            'customer_id' => 16693,
            'user_id' => 1,
            'note' => 'Fitted sky+ STB. One sat cable only available. 375563392\r\n4F31D5\r\n0376038167',
            'created_at' => '2012-08-14 18:55:03'
        ]);



        CustomerNote::create([
            'id' => 477,
            'customer_id' => 16702,
            'user_id' => 1,
            'note' => 'Fitted new dish and quad LNB, two cables to sky plus bob. Paid 165.00 ID',
            'created_at' => '2012-08-14 19:39:18'
        ]);



        CustomerNote::create([
            'id' => 478,
            'customer_id' => 3016,
            'user_id' => 1,
            'note' => 'Fitted SV and MHA and PSU to four tv points. 350.00. Fitted 3 SV STBs 99.00 each + 100.00 extra labour.',
            'created_at' => '2012-08-14 19:41:44'
        ]);



        CustomerNote::create([
            'id' => 479,
            'customer_id' => 7044,
            'user_id' => 1,
            'note' => 'Quoted ?649.00 for dual combi system. Go ahead next week, not Mon or Tues. Call today to confirm day.',
            'created_at' => '2012-08-15 11:59:57'
        ]);



        CustomerNote::create([
            'id' => 480,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => '				booking confirmed for monday pm',
            'created_at' => '2012-08-17 11:35:02'
        ]);



        CustomerNote::create([
            'id' => 481,
            'customer_id' => 7044,
            'user_id' => 1,
            'note' => 'confirmed wed first thing',
            'created_at' => '2012-08-15 15:15:15'
        ]);



        CustomerNote::create([
            'id' => 482,
            'customer_id' => 16640,
            'user_id' => 1,
            'note' => 'confirmed tuesday morning',
            'created_at' => '2012-08-15 15:19:15'
        ]);



        CustomerNote::create([
            'id' => 483,
            'customer_id' => 16687,
            'user_id' => 1,
            'note' => 'booking confirmed tuesday pm',
            'created_at' => '2012-08-15 15:24:54'
        ]);



        CustomerNote::create([
            'id' => 484,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'tuesday lunchtime TBC, left message',
            'created_at' => '2012-08-15 15:33:13'
        ]);



        CustomerNote::create([
            'id' => 485,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'confirmed, moved tv press, sky+ not working since, may be interested in combi to replace existing second sky box',
            'created_at' => '2012-08-15 16:01:18'
        ]);



        CustomerNote::create([
            'id' => 486,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => '		2 faulty STBs returned from AEL\r\n',
            'created_at' => '2012-08-15 21:07:19'
        ]);



        CustomerNote::create([
            'id' => 487,
            'customer_id' => 16696,
            'user_id' => 1,
            'note' => 'job done paid',
            'created_at' => '2012-08-16 08:51:23'
        ]);



        CustomerNote::create([
            'id' => 488,
            'customer_id' => 16707,
            'user_id' => 1,
            'note' => 'KD to survey Thurs 6-7pm',
            'created_at' => '2012-08-16 09:10:14'
        ]);



        CustomerNote::create([
            'id' => 489,
            'customer_id' => 16694,
            'user_id' => 1,
            'note' => 'spoke to Morgan, will come back to me, thought quote was high',
            'created_at' => '2012-08-16 09:37:29'
        ]);



        CustomerNote::create([
            'id' => 490,
            'customer_id' => 16692,
            'user_id' => 1,
            'note' => 'Sparks Harry on site 086 8237710, 6 coaxial at s-storey garage, connected to office, office to rooms. Cables in meter cabinet inside garage. ',
            'created_at' => '2012-08-16 11:37:39'
        ]);



        CustomerNote::create([
            'id' => 491,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => '		quoted 349.00 for combi stb, Marian to confirm ',
            'created_at' => '2012-08-17 11:35:42'
        ]);



        CustomerNote::create([
            'id' => 492,
            'customer_id' => 16692,
            'user_id' => 1,
            'note' => 'Fit dish and connect to 2 Sky+ STBs.Connect SV ant to ....... Rita to come back to me. Someone else installing tvs?',
            'created_at' => '2012-08-16 11:47:51'
        ]);



        CustomerNote::create([
            'id' => 493,
            'customer_id' => 16715,
            'user_id' => 1,
            'note' => 'Fit FTAC to two tvs €649.00',
            'created_at' => '2012-08-16 13:27:03'
        ]);



        CustomerNote::create([
            'id' => 494,
            'customer_id' => 16715,
            'user_id' => 1,
            'note' => 'to be confirmed',
            'created_at' => '2012-08-16 13:28:52'
        ]);



        CustomerNote::create([
            'id' => 495,
            'customer_id' => 661,
            'user_id' => 1,
            'note' => 'Move 42 and sky box to s room on rhs. Move ftac & tv m-bed. Conn sky box to kitchen.',
            'created_at' => '2012-08-16 14:00:19'
        ]);



        CustomerNote::create([
            'id' => 503,
            'customer_id' => 16716,
            'user_id' => 1,
            'note' => '				connected f-conn @ mini pillar for hse number 11, connected cables from street to comms cabinet, connected cables from comms to living room tv point, connceted sky plus stb, paid 130.00',
            'created_at' => '2012-08-16 18:22:17'
        ]);



        CustomerNote::create([
            'id' => 497,
            'customer_id' => 16716,
            'user_id' => 1,
            'note' => 'Fit existing sky+ STB. ',
            'created_at' => '2012-08-16 14:28:40'
        ]);



        CustomerNote::create([
            'id' => 498,
            'customer_id' => 16706,
            'user_id' => 1,
            'note' => 'fitted new dish and sv ant in attic. Black Diamond TV on AV channel, prepaid  ID',
            'created_at' => '2012-08-16 14:31:03'
        ]);



        CustomerNote::create([
            'id' => 499,
            'customer_id' => 16717,
            'user_id' => 1,
            'note' => '		FTAC combi to kitchen ?399.00 + apm ?70.00',
            'created_at' => '2012-08-16 15:13:39'
        ]);



        CustomerNote::create([
            'id' => 500,
            'customer_id' => 16718,
            'user_id' => 1,
            'note' => '				has two tvs, Saorview and more maybe',
            'created_at' => '2012-08-17 15:13:03'
        ]);



        CustomerNote::create([
            'id' => 626,
            'customer_id' => 16737,
            'user_id' => 1,
            'note' => '		Fit FTAC box upstairs, connect to existing dish, may require combi box downstairs also. Pref Thurs or Fri',
            'created_at' => '2012-09-03 09:08:10'
        ]);



        CustomerNote::create([
            'id' => 515,
            'customer_id' => 16707,
            'user_id' => 1,
            'note' => 'Job done, Paid €1215.00 ',
            'created_at' => '2012-08-20 08:08:51'
        ]);



        CustomerNote::create([
            'id' => 516,
            'customer_id' => 16703,
            'user_id' => 1,
            'note' => 'job done ~ID paid 320.00',
            'created_at' => '2012-08-20 08:26:00'
        ]);



        CustomerNote::create([
            'id' => 517,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'on hold for one month, ready around forst or second week of Sept',
            'created_at' => '2012-08-20 08:33:38'
        ]);



        CustomerNote::create([
            'id' => 518,
            'customer_id' => 13492,
            'user_id' => 1,
            'note' => 'Sky plus box stuck in standby, old box, problems recording ',
            'created_at' => '2012-08-20 08:38:00'
        ]);



        CustomerNote::create([
            'id' => 519,
            'customer_id' => 13492,
            'user_id' => 1,
            'note' => 'Call cancelled, customer got box working again',
            'created_at' => '2012-08-21 07:46:31'
        ]);



        CustomerNote::create([
            'id' => 625,
            'customer_id' => 16725,
            'user_id' => 1,
            'note' => '		Fit 32 inch TV €350.00 ',
            'created_at' => '2012-09-03 10:39:09'
        ]);



        CustomerNote::create([
            'id' => 523,
            'customer_id' => 16719,
            'user_id' => 1,
            'note' => 'sounds like aerial needs to be fitted properly on roof, had a couple of clowns out put aerial on wall. may be labour only here. has set top box',
            'created_at' => '2012-08-21 11:19:41'
        ]);



        CustomerNote::create([
            'id' => 524,
            'customer_id' => 1200,
            'user_id' => 1,
            'note' => 'cancelled, sky box back working now',
            'created_at' => '2012-08-21 11:31:21'
        ]);



        CustomerNote::create([
            'id' => 525,
            'customer_id' => 16686,
            'user_id' => 1,
            'note' => 'prov for monday 27th Aug first thing ',
            'created_at' => '2012-08-21 11:48:11'
        ]);



        CustomerNote::create([
            'id' => 526,
            'customer_id' => 16686,
            'user_id' => 1,
            'note' => 'confirmed wed 9.00am',
            'created_at' => '2012-08-21 11:51:49'
        ]);



        CustomerNote::create([
            'id' => 527,
            'customer_id' => 16719,
            'user_id' => 1,
            'note' => 'spoke to Alec Young, sounds like a big house,with access only from the street, this is a 2 man job',
            'created_at' => '2012-08-21 12:42:34'
        ]);



        CustomerNote::create([
            'id' => 528,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => 'on hols, back monday 27th aug',
            'created_at' => '2012-08-21 12:46:45'
        ]);



        CustomerNote::create([
            'id' => 529,
            'customer_id' => 13208,
            'user_id' => 1,
            'note' => 'call in two weeks',
            'created_at' => '2012-08-21 12:50:28'
        ]);



        CustomerNote::create([
            'id' => 530,
            'customer_id' => 16717,
            'user_id' => 1,
            'note' => 'confirmed wed pm, ann will be there from 1.00pm',
            'created_at' => '2012-08-21 13:03:29'
        ]);



        CustomerNote::create([
            'id' => 575,
            'customer_id' => 16730,
            'user_id' => 1,
            'note' => 'Booked Thursday, call one hour before',
            'created_at' => '2012-08-27 14:47:30'
        ]);



        CustomerNote::create([
            'id' => 532,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => 'Track note issues from August 17 2012',
            'created_at' => '2012-08-21 13:13:52'
        ]);



        CustomerNote::create([
            'id' => 533,
            'customer_id' => 16721,
            'user_id' => 1,
            'note' => '				Fit parents FTAC also. Fit FTAC 399.00, fit modulator to FTA box and send to all tvs. set up RC extrs to sky box, may require RC link amp. check signal at 2 of the 7 points. Suir valley, signal should be ok vertical 52 east',
            'created_at' => '2012-08-21 15:09:38'
        ]);



        CustomerNote::create([
            'id' => 534,
            'customer_id' => 16722,
            'user_id' => 1,
            'note' => 'Fit FTAC and SV to 2 other TVs , early to mid Sept',
            'created_at' => '2012-08-21 15:03:28'
        ]);



        CustomerNote::create([
            'id' => 535,
            'customer_id' => 16640,
            'user_id' => 1,
            'note' => 'pan tv, hdmi1, channel comes on from start up.',
            'created_at' => '2012-08-21 16:27:56'
        ]);



        CustomerNote::create([
            'id' => 536,
            'customer_id' => 16687,
            'user_id' => 1,
            'note' => 'samsung tv , hdmi 1 , ',
            'created_at' => '2012-08-21 16:29:06'
        ]);



        CustomerNote::create([
            'id' => 537,
            'customer_id' => 8639,
            'user_id' => 1,
            'note' => 'Done ID , used customers dish, paid cheque',
            'created_at' => '2012-08-21 19:47:08'
        ]);



        CustomerNote::create([
            'id' => 538,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => 'Prov Friday am',
            'created_at' => '2012-08-21 19:54:31'
        ]);



        CustomerNote::create([
            'id' => 539,
            'customer_id' => 16723,
            'user_id' => 1,
            'note' => 'Fit SV ant and connect to 2# tvs. One point in attic and other down thru kitchen ceiling. Both tvs should be SV ready. Quote 175.00',
            'created_at' => '2012-08-22 08:28:30'
        ]);



        CustomerNote::create([
            'id' => 540,
            'customer_id' => 7972,
            'user_id' => 1,
            'note' => 'restarted RTE SV STB, pics back. Prob caused by RTE signal inturruptions recently',
            'created_at' => '2012-08-22 08:31:09'
        ]);



        CustomerNote::create([
            'id' => 541,
            'customer_id' => 7972,
            'user_id' => 1,
            'note' => 'KD to talk to Sr Sarah re. digital HE',
            'created_at' => '2012-08-22 09:05:23'
        ]);



        CustomerNote::create([
            'id' => 542,
            'customer_id' => 16689,
            'user_id' => 1,
            'note' => 'Left message',
            'created_at' => '2012-08-22 09:09:56'
        ]);



        CustomerNote::create([
            'id' => 543,
            'customer_id' => 16676,
            'user_id' => 1,
            'note' => 'prov for tuesday pm',
            'created_at' => '2012-08-22 09:12:28'
        ]);



        CustomerNote::create([
            'id' => 544,
            'customer_id' => 16688,
            'user_id' => 1,
            'note' => 'not wed',
            'created_at' => '2012-08-22 09:15:47'
        ]);



        CustomerNote::create([
            'id' => 545,
            'customer_id' => 16699,
            'user_id' => 1,
            'note' => 'wed not good',
            'created_at' => '2012-08-22 09:18:31'
        ]);



        CustomerNote::create([
            'id' => 546,
            'customer_id' => 16699,
            'user_id' => 1,
            'note' => 'thurs prov',
            'created_at' => '2012-08-22 09:19:49'
        ]);



        CustomerNote::create([
            'id' => 547,
            'customer_id' => 16688,
            'user_id' => 1,
            'note' => 'prov thurs mid morn',
            'created_at' => '2012-08-22 09:21:12'
        ]);



        CustomerNote::create([
            'id' => 548,
            'customer_id' => 12377,
            'user_id' => 1,
            'note' => 'prov for Thurs midday to early pm',
            'created_at' => '2012-08-22 09:23:17'
        ]);



        CustomerNote::create([
            'id' => 549,
            'customer_id' => 16689,
            'user_id' => 1,
            'note' => 'rang john, load of bullshit about how he joined a cable and everything is ok  now? cancelled FTAC install',
            'created_at' => '2012-08-22 09:27:46'
        ]);



        CustomerNote::create([
            'id' => 550,
            'customer_id' => 16216,
            'user_id' => 1,
            'note' => '		Has sky+ HD down stairs. Connect old sky+ box to existing dish. Connect both boxes to phone line. Connect bed room to old + box with remote eye. Also run another extender from HD box to kitchen or fit SV ant and STB in kitchen.\r\n\r\nPhone point at old sky+ box. Fit phone extr to HD box. ',
            'created_at' => '2012-08-22 10:04:40'
        ]);



        CustomerNote::create([
            'id' => 551,
            'customer_id' => 16216,
            'user_id' => 1,
            'note' => 'waiting on home plug for telephone ext here',
            'created_at' => '2012-08-22 10:15:06'
        ]);



        CustomerNote::create([
            'id' => 552,
            'customer_id' => 16216,
            'user_id' => 1,
            'note' => 'prov for friday 31st am',
            'created_at' => '2012-08-22 10:15:53'
        ]);



        CustomerNote::create([
            'id' => 553,
            'customer_id' => 7044,
            'user_id' => 1,
            'note' => 'ID, two tvs on scart, both auto select av, paid 649.00 cheque',
            'created_at' => '2012-08-22 10:49:54'
        ]);



        CustomerNote::create([
            'id' => 554,
            'customer_id' => 16688,
            'user_id' => 1,
            'note' => 'confirmed wed am',
            'created_at' => '2012-08-22 10:56:11'
        ]);



        CustomerNote::create([
            'id' => 555,
            'customer_id' => 16697,
            'user_id' => 1,
            'note' => 'Confirmed for Friday pm. KD & ID',
            'created_at' => '2012-08-22 11:47:15'
        ]);



        CustomerNote::create([
            'id' => 556,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => 'Booked for Friday first, or maybe Thurs pm after Convent Callan',
            'created_at' => '2012-08-22 11:59:50'
        ]);



        CustomerNote::create([
            'id' => 557,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'Awaiting TV delivery Thursday morning. Fit 42 inch and 26 DVD Combi. Possibly change HD unit also in transit.',
            'created_at' => '2012-08-22 12:02:09'
        ]);



        CustomerNote::create([
            'id' => 560,
            'customer_id' => 16717,
            'user_id' => 1,
            'note' => 'fit ftac and mha and psu. Hanspree HDMI1, 479.00 cash paid.',
            'created_at' => '2012-08-22 15:13:08'
        ]);



        CustomerNote::create([
            'id' => 561,
            'customer_id' => 16724,
            'user_id' => 1,
            'note' => 'Sean Mc Mullen rang: fit SV ant and Astra dish to two tv points, include quad lnb. estimate €250-€275. Replace TV point. ',
            'created_at' => '2012-08-22 15:48:44'
        ]);



        CustomerNote::create([
            'id' => 576,
            'customer_id' => 16731,
            'user_id' => 1,
            'note' => 'no sat signal, advised €49.00 callout. ',
            'created_at' => '2012-08-27 14:52:27'
        ]);



        CustomerNote::create([
            'id' => 577,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => 'cable at back of box keeps coming out, cant record as a result, €49.00',
            'created_at' => '2012-08-27 15:44:40'
        ]);



        CustomerNote::create([
            'id' => 578,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => '				Cable loose at back of set top box. Customer maintains that box was not installed properly.Installed April2010. I told customer the DTV Daltontv.ie story and also explained that anyway we couldnt entertain a warranty call after 2.5 years. Advised €49.00. Customer agreed to pay. Agree payment terms BEFORE carrying out any work.',
            'created_at' => '2012-08-27 15:59:31'
        ]);



        CustomerNote::create([
            'id' => 579,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => 'Add record module 89.00',
            'created_at' => '2012-08-28 08:52:42'
        ]);



        CustomerNote::create([
            'id' => 580,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => 'confirmed booking for Friday PM (home all day) total quoted €537.00',
            'created_at' => '2012-08-28 08:55:53'
        ]);



        CustomerNote::create([
            'id' => 581,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => 'confirmed booking for Friday PM (home all day) total quoted €537.00',
            'created_at' => '2012-08-28 08:55:54'
        ]);



        CustomerNote::create([
            'id' => 582,
            'customer_id' => 16216,
            'user_id' => 1,
            'note' => 'confirmed for first thing Friday morning',
            'created_at' => '2012-08-28 09:00:40'
        ]);



        CustomerNote::create([
            'id' => 583,
            'customer_id' => 16721,
            'user_id' => 1,
            'note' => 'Job done Paid €1,150.00 Two Swapout customers here',
            'created_at' => '2012-08-28 09:01:49'
        ]);



        CustomerNote::create([
            'id' => 584,
            'customer_id' => 16732,
            'user_id' => 1,
            'note' => '		Connect upstairs Sky STB with RC extr to play room, no figures discussed here',
            'created_at' => '2012-08-28 09:06:53'
        ]);



        CustomerNote::create([
            'id' => 585,
            'customer_id' => 16699,
            'user_id' => 1,
            'note' => 'Booking confirmed for Thursday mid morning, call from first job to firm up on time.',
            'created_at' => '2012-08-28 09:17:34'
        ]);



        CustomerNote::create([
            'id' => 586,
            'customer_id' => 12377,
            'user_id' => 1,
            'note' => 'Confirmed for Wed pm. after 2.00pm ',
            'created_at' => '2012-08-28 09:22:35'
        ]);



        CustomerNote::create([
            'id' => 587,
            'customer_id' => 16676,
            'user_id' => 1,
            'note' => 'Collect 2 cheques, 50/50, one post dated for Monday.',
            'created_at' => '2012-08-28 09:44:51'
        ]);



        CustomerNote::create([
            'id' => 704,
            'customer_id' => 1743,
            'user_id' => 1,
            'note' => 'No SV signal in master bed combi  or second bed SV STB.Not sure about sats.Recently connected by KD. Sounds like man made fault. MHA and PSU connected here, to 3 way F split in attic. Unless PSU is plugged out.',
            'created_at' => '2012-09-06 08:21:00'
        ]);



        CustomerNote::create([
            'id' => 589,
            'customer_id' => 16727,
            'user_id' => 1,
            'note' => 'Booked Sat first thing',
            'created_at' => '2012-08-28 10:00:42'
        ]);



        CustomerNote::create([
            'id' => 590,
            'customer_id' => 16728,
            'user_id' => 1,
            'note' => '		Call to survey parents house nearby. ',
            'created_at' => '2012-08-28 10:07:24'
        ]);



        CustomerNote::create([
            'id' => 591,
            'customer_id' => 16733,
            'user_id' => 1,
            'note' => '		Fit Saorsat',
            'created_at' => '2012-08-28 15:09:52'
        ]);



        CustomerNote::create([
            'id' => 592,
            'customer_id' => 16734,
            'user_id' => 1,
            'note' => 'Fit FTAC €399.00',
            'created_at' => '2012-08-28 15:40:55'
        ]);



        CustomerNote::create([
            'id' => 593,
            'customer_id' => 16734,
            'user_id' => 1,
            'note' => 'Deposit paid €49.00, €350.00 balance',
            'created_at' => '2012-08-28 15:44:41'
        ]);



        CustomerNote::create([
            'id' => 594,
            'customer_id' => 16735,
            'user_id' => 1,
            'note' => 'Fit 2 x Combi Saorview, Deposit €50.00 paid, balance 599.00 ',
            'created_at' => '2012-08-28 15:51:13'
        ]);



        CustomerNote::create([
            'id' => 595,
            'customer_id' => 3234,
            'user_id' => 1,
            'note' => '		Mary rang, no satellite signal on Sky, also wants Saorview tv connected to SV aerial. ',
            'created_at' => '2012-08-28 15:59:26'
        ]);



        CustomerNote::create([
            'id' => 596,
            'customer_id' => 3234,
            'user_id' => 1,
            'note' => 'Kicker NOT BOOKED',
            'created_at' => '2012-08-28 15:56:59'
        ]);



        CustomerNote::create([
            'id' => 597,
            'customer_id' => 16734,
            'user_id' => 1,
            'note' => 'Booking confirmed for Friday first thing',
            'created_at' => '2012-08-28 16:04:59'
        ]);



        CustomerNote::create([
            'id' => 598,
            'customer_id' => 16735,
            'user_id' => 1,
            'note' => 'Prov booked for Friday pm, TBC with customer',
            'created_at' => '2012-08-28 16:05:35'
        ]);



        CustomerNote::create([
            'id' => 599,
            'customer_id' => 15236,
            'user_id' => 1,
            'note' => 'showed Jim how to use again. FOC',
            'created_at' => '2012-08-28 16:30:48'
        ]);



        CustomerNote::create([
            'id' => 600,
            'customer_id' => 6530,
            'user_id' => 1,
            'note' => 'Prov booking, call to survey work, quick service call',
            'created_at' => '2012-08-28 20:33:17'
        ]);



        CustomerNote::create([
            'id' => 601,
            'customer_id' => 16686,
            'user_id' => 1,
            'note' => 'Customer & husband do not want cables or holes in wall. ID pulled out. ',
            'created_at' => '2012-08-29 08:40:06'
        ]);



        CustomerNote::create([
            'id' => 602,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => '2 SRT6000 Saorsat system. Both tvs on auto scart. Paid  €649.00',
            'created_at' => '2012-08-29 10:06:59'
        ]);



        CustomerNote::create([
            'id' => 603,
            'customer_id' => 16676,
            'user_id' => 1,
            'note' => 'Job done, Paid €1,150.00 ',
            'created_at' => '2012-08-29 10:08:47'
        ]);



        CustomerNote::create([
            'id' => 604,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => '		Has two FTA already. Wants two combi box and SV aerial. €199+199+175 for ant. €550.00 agreed. Paid €550.00',
            'created_at' => '2012-08-29 10:32:55'
        ]);



        CustomerNote::create([
            'id' => 605,
            'customer_id' => 16688,
            'user_id' => 1,
            'note' => 'Fitted SV ant, pole and lashing. €250.00',
            'created_at' => '2012-08-29 11:51:09'
        ]);



        CustomerNote::create([
            'id' => 606,
            'customer_id' => 12776,
            'user_id' => 1,
            'note' => 'Prov- booking for KD to call. TBC with customer',
            'created_at' => '2012-08-29 13:16:10'
        ]);



        CustomerNote::create([
            'id' => 607,
            'customer_id' => 16736,
            'user_id' => 1,
            'note' => '				Ordered Sky viewing card. Wants Sky RC ext to one other room. Sky conn €79.00 + 89.00 for ext fitted.',
            'created_at' => '2012-10-15 11:36:27'
        ]);



        CustomerNote::create([
            'id' => 608,
            'customer_id' => 1172,
            'user_id' => 1,
            'note' => '		Fitted SV ant and SV STB, auto scart. Aerial outside, 70 dB. Paid €250.00',
            'created_at' => '2012-08-29 14:28:17'
        ]);



        CustomerNote::create([
            'id' => 609,
            'customer_id' => 12377,
            'user_id' => 1,
            'note' => 'Job done, levels low, amp required if gives any trouble or if customer wants to connect second tv or fit combi box, diplexer from Mc Grath will be required,as SV is running down FTA cable Paid 165.00',
            'created_at' => '2012-08-29 18:48:12'
        ]);



        CustomerNote::create([
            'id' => 610,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'Loose conn at dish f conn for 28 Astra , remade f clan and also turned on 22 kh tone in set up menu',
            'created_at' => '2012-08-30 06:43:06'
        ]);



        CustomerNote::create([
            'id' => 634,
            'customer_id' => 7972,
            'user_id' => 1,
            'note' => 'App booked for 10.15am Tuesday monring',
            'created_at' => '2012-09-03 11:05:58'
        ]);



        CustomerNote::create([
            'id' => 635,
            'customer_id' => 16734,
            'user_id' => 1,
            'note' => 'Booking confirmed for Tuesday first thing',
            'created_at' => '2012-09-03 11:06:57'
        ]);



        CustomerNote::create([
            'id' => 637,
            'customer_id' => 16737,
            'user_id' => 1,
            'note' => 'Not confirmed with customer',
            'created_at' => '2012-09-03 11:09:44'
        ]);



        CustomerNote::create([
            'id' => 638,
            'customer_id' => 16734,
            'user_id' => 1,
            'note' => '		Connect xtra cable fron SV ant to other TV. Not quoted.',
            'created_at' => '2012-09-03 11:14:08'
        ]);



        CustomerNote::create([
            'id' => 639,
            'customer_id' => 16741,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:16:54'
        ]);



        CustomerNote::create([
            'id' => 640,
            'customer_id' => 16733,
            'user_id' => 1,
            'note' => 'Not confirmed ',
            'created_at' => '2012-09-03 11:29:27'
        ]);



        CustomerNote::create([
            'id' => 641,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:31:46'
        ]);



        CustomerNote::create([
            'id' => 642,
            'customer_id' => 11444,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:33:19'
        ]);



        CustomerNote::create([
            'id' => 643,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:45:25'
        ]);



        CustomerNote::create([
            'id' => 644,
            'customer_id' => 16674,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:47:48'
        ]);



        CustomerNote::create([
            'id' => 645,
            'customer_id' => 16740,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:48:33'
        ]);



        CustomerNote::create([
            'id' => 646,
            'customer_id' => 661,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:52:27'
        ]);



        CustomerNote::create([
            'id' => 647,
            'customer_id' => 16723,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:53:44'
        ]);



        CustomerNote::create([
            'id' => 648,
            'customer_id' => 16720,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:55:16'
        ]);



        CustomerNote::create([
            'id' => 649,
            'customer_id' => 15,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 11:55:40'
        ]);



        CustomerNote::create([
            'id' => 650,
            'customer_id' => 10188,
            'user_id' => 1,
            'note' => 'Fit FTAC €399.00 and connect second tv to dish and antenna and fit customers SV STB. also connect SV and  ant to room 3 & 4 . 4 rooms for SV and FTA signal. ',
            'created_at' => '2012-09-03 12:04:41'
        ]);



        CustomerNote::create([
            'id' => 651,
            'customer_id' => 10188,
            'user_id' => 1,
            'note' => 'Prov- Sat would suit customer',
            'created_at' => '2012-09-03 12:08:48'
        ]);



        CustomerNote::create([
            'id' => 652,
            'customer_id' => 16742,
            'user_id' => 1,
            'note' => '		has sky dish, has been raised before, needs to be moved again, home after 3.30pm daily',
            'created_at' => '2012-09-03 13:03:37'
        ]);



        CustomerNote::create([
            'id' => 653,
            'customer_id' => 16741,
            'user_id' => 1,
            'note' => 'cancelled, going with chorus',
            'created_at' => '2012-09-03 13:06:29'
        ]);



        CustomerNote::create([
            'id' => 654,
            'customer_id' => 1881,
            'user_id' => 1,
            'note' => '		Neighbour kicked ball at dish, missing channels since. any weekday after 4.30 except this thurs',
            'created_at' => '2012-09-03 13:28:08'
        ]);



        CustomerNote::create([
            'id' => 655,
            'customer_id' => 16743,
            'user_id' => 1,
            'note' => 'KK4584',
            'created_at' => '2012-09-03 13:31:28'
        ]);



        CustomerNote::create([
            'id' => 656,
            'customer_id' => 4372,
            'user_id' => 1,
            'note' => 'invoice received',
            'created_at' => '2012-09-03 14:46:58'
        ]);



        CustomerNote::create([
            'id' => 657,
            'customer_id' => 16473,
            'user_id' => 1,
            'note' => 'Cheque in post today.',
            'created_at' => '2012-09-03 14:51:49'
        ]);



        CustomerNote::create([
            'id' => 658,
            'customer_id' => 1881,
            'user_id' => 1,
            'note' => 'not confirmed',
            'created_at' => '2012-09-03 15:02:35'
        ]);



        CustomerNote::create([
            'id' => 659,
            'customer_id' => 16363,
            'user_id' => 1,
            'note' => 'left voicemail',
            'created_at' => '2012-09-03 15:32:51'
        ]);



        CustomerNote::create([
            'id' => 660,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => 'Geraldine answered mobile, will be in tomorrow with cheque, forgot all about us.',
            'created_at' => '2012-09-03 15:37:29'
        ]);



        CustomerNote::create([
            'id' => 758,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => 'Marie normally pays invoices, out sick at present, should return Thursday',
            'created_at' => '2012-09-11 13:38:35'
        ]);



        CustomerNote::create([
            'id' => 698,
            'customer_id' => 16733,
            'user_id' => 1,
            'note' => 'voicemail ',
            'created_at' => '2012-09-05 15:34:22'
        ]);



        CustomerNote::create([
            'id' => 699,
            'customer_id' => 16733,
            'user_id' => 1,
            'note' => 'Monday first thing confirmed',
            'created_at' => '2012-09-05 15:35:29'
        ]);



        CustomerNote::create([
            'id' => 700,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => 'confirmed Monday PM',
            'created_at' => '2012-09-05 15:37:48'
        ]);



        CustomerNote::create([
            'id' => 663,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => '		Invoicing\r\n\r\nFormat needs to tidied up considerably.\r\nWhere are other invoice functions for statements etc. \r\nQuick view after saving invoice needs to be formatted also.\r\n\r\nThere is some work needed here, pay invoice, print invoice, email invoice.\r\n\r\nThere is a complete work over required here with regard to formattiing. ',
            'created_at' => '2012-09-03 18:05:18'
        ]);



        CustomerNote::create([
            'id' => 750,
            'customer_id' => 16635,
            'user_id' => 1,
            'note' => 'Fit outdoor SV antenna and connect to 2 tvs. Might need SV box upstairs.',
            'created_at' => '2012-09-11 09:12:42'
        ]);



        CustomerNote::create([
            'id' => 751,
            'customer_id' => 16720,
            'user_id' => 1,
            'note' => 'booking confirmed for Thursday mid morn',
            'created_at' => '2012-09-11 09:23:31'
        ]);



        CustomerNote::create([
            'id' => 752,
            'customer_id' => 16742,
            'user_id' => 1,
            'note' => '		confirmed, maybe today',
            'created_at' => '2012-09-11 09:37:16'
        ]);



        CustomerNote::create([
            'id' => 753,
            'customer_id' => 2383,
            'user_id' => 1,
            'note' => 'Fit FTAC (has dish) connect to second room via Triax modulator. €434.00 Going on hols Sept 26th',
            'created_at' => '2012-09-11 11:25:47'
        ]);



        CustomerNote::create([
            'id' => 754,
            'customer_id' => 16751,
            'user_id' => 1,
            'note' => 'Requires SV ant connected to 2 tvs. MHA required here, quoted €250.00',
            'created_at' => '2012-09-11 11:28:24'
        ]);



        CustomerNote::create([
            'id' => 755,
            'customer_id' => 15877,
            'user_id' => 1,
            'note' => 'Requires second STB and new dish. Customer will arrange lift to access roof.',
            'created_at' => '2012-09-11 11:57:34'
        ]);



        CustomerNote::create([
            'id' => 756,
            'customer_id' => 15877,
            'user_id' => 1,
            'note' => 'Requires second STB and new dish. Customer will arrange lift to access roof.',
            'created_at' => '2012-09-11 11:57:36'
        ]);



        CustomerNote::create([
            'id' => 757,
            'customer_id' => 16677,
            'user_id' => 1,
            'note' => 'Format HDD to FAT in media. Set type of prog to record and then set duration to length of prog. End time will show in menu. Also can set daily or weekly in menu.',
            'created_at' => '2012-09-11 13:03:48'
        ]);



        CustomerNote::create([
            'id' => 666,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => '				Swapouts need to be broken out into individual years and print, email and text options to available to groups from here.\r\n\r\nWe also need to show paid up Swapouts to appear as renewals in similar format. ie . print group renewal letters.\r\n\r\n

                UPDATE: Lets review this Tuesday AM and will update across Tuesday and Wednesday.',
            'created_at' => '2012-09-03 20:36:52'
        ]);



        CustomerNote::create([
            'id' => 667,
            'customer_id' => 1,
            'user_id' => 1,
            'note' => '		euro symbol showing incorrect on all views, notes etc.\r\n\r\n

                UPDATE: Noticed this afternoon; will amend a htmlsafe fix for Euro symbols.',
            'created_at' => '2012-09-03 20:08:40'
        ]);



        CustomerNote::create([
            'id' => 675,
            'customer_id' => 10277,
            'user_id' => 1,
            'note' => 'Connect sky+ box down stairs. Signal in attic. ',
            'created_at' => '2012-09-04 13:28:03'
        ]);



        CustomerNote::create([
            'id' => 676,
            'customer_id' => 646,
            'user_id' => 1,
            'note' => 'prob with cctv at gate after power cut',
            'created_at' => '2012-09-04 13:44:49'
        ]);



        CustomerNote::create([
            'id' => 677,
            'customer_id' => 8678,
            'user_id' => 1,
            'note' => 'quoted 250.00 for sv ant and stb',
            'created_at' => '2012-09-04 14:00:22'
        ]);



        CustomerNote::create([
            'id' => 678,
            'customer_id' => 13208,
            'user_id' => 1,
            'note' => '		Fit 2 SV stbs and ant, or check ant in attic',
            'created_at' => '2012-09-04 14:30:23'
        ]);



        CustomerNote::create([
            'id' => 749,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => 'Called Pat, at meeting, will come back to me.',
            'created_at' => '2012-09-11 08:40:36'
        ]);



        CustomerNote::create([
            'id' => 672,
            'customer_id' => 173,
            'user_id' => 1,
            'note' => 'Wants a big tv',
            'created_at' => '2012-09-04 11:10:27'
        ]);



        CustomerNote::create([
            'id' => 673,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'Tvs delivered and fitted.',
            'created_at' => '2012-09-04 13:17:41'
        ]);






        CustomerNote::create([
            'id' => 759,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => '		Triax TSC114 returned. Unit stuck in standby after firmware update. Checked update procedure with Michael AEL. E-mailed Seamus for collection.',
            'created_at' => '2012-09-11 14:58:24'
        ]);



        CustomerNote::create([
            'id' => 760,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => '		Strong SRT7000 returned. Unit dead on install.  E-mailed Seamus for collection.',
            'created_at' => '2012-09-11 14:58:45'
        ]);



        CustomerNote::create([
            'id' => 761,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-09-11 15:07:28'
        ]);



        CustomerNote::create([
            'id' => 762,
            'customer_id' => 16753,
            'user_id' => 1,
            'note' => '		Connect extra set top box from existing dish to bedroom. Customer has STB. Check signal at dish, missing Sky HD channels. Remove old broadband dish may be obstructing sky dish.',
            'created_at' => '2012-09-12 13:12:31'
        ]);



        CustomerNote::create([
            'id' => 679,
            'customer_id' => 13208,
            'user_id' => 1,
            'note' => '		confirmed with cust',
            'created_at' => '2012-09-04 14:27:27'
        ]);



        CustomerNote::create([
            'id' => 680,
            'customer_id' => 3016,
            'user_id' => 1,
            'note' => 'plugged stbs in and out, ok now',
            'created_at' => '2012-09-04 14:35:04'
        ]);



        CustomerNote::create([
            'id' => 681,
            'customer_id' => 16734,
            'user_id' => 1,
            'note' => 'Fitted FTAC and conn second TV. HDMI1 .Paid  €349.00 + 50.00 Cash',
            'created_at' => '2012-09-04 15:02:59'
        ]);



        CustomerNote::create([
            'id' => 682,
            'customer_id' => 6047,
            'user_id' => 1,
            'note' => 'Job done as below. 49dB at sets. €230.00 cheque',
            'created_at' => '2012-09-04 15:05:31'
        ]);



        CustomerNote::create([
            'id' => 748,
            'customer_id' => 16746,
            'user_id' => 1,
            'note' => 'Fitted new dish and Sky+ HD box. FB 2574 .',
            'created_at' => '2012-09-11 08:38:49'
        ]);



        CustomerNote::create([
            'id' => 684,
            'customer_id' => 10608,
            'user_id' => 1,
            'note' => 'Paid €160.00',
            'created_at' => '2012-09-04 16:10:12'
        ]);



        CustomerNote::create([
            'id' => 685,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'Margaret, fit SV STB to master bed and maybe to sitting room, tune sky in on sitting room tv.',
            'created_at' => '2012-09-04 16:20:30'
        ]);



        CustomerNote::create([
            'id' => 686,
            'customer_id' => 10277,
            'user_id' => 1,
            'note' => 'job done as below. 104.00 less 5.00 credit due. ID',
            'created_at' => '2012-09-04 16:41:50'
        ]);



        CustomerNote::create([
            'id' => 687,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'Spoke to Carmel, will tune box and hopefully deliver tomorrow (Wed) evening.',
            'created_at' => '2012-09-04 16:52:54'
        ]);



        CustomerNote::create([
            'id' => 688,
            'customer_id' => 16726,
            'user_id' => 1,
            'note' => 'Fitted SV ant Kilduff & 2 x Strong FTA STBs. Paid €440.00 Cash',
            'created_at' => '2012-09-05 08:15:15'
        ]);



        CustomerNote::create([
            'id' => 689,
            'customer_id' => 16738,
            'user_id' => 1,
            'note' => 'Fitted TSC114 Paid 399.00 cash',
            'created_at' => '2012-09-05 08:16:09'
        ]);



        CustomerNote::create([
            'id' => 690,
            'customer_id' => 3234,
            'user_id' => 1,
            'note' => 'Fitted SV ant to SV TV, 150.00 + 49.00 svc call from previous',
            'created_at' => '2012-09-05 08:17:12'
        ]);



        CustomerNote::create([
            'id' => 691,
            'customer_id' => 1881,
            'user_id' => 1,
            'note' => 'Realign dish, paid 49.00 cheque',
            'created_at' => '2012-09-05 08:17:49'
        ]);



        CustomerNote::create([
            'id' => 701,
            'customer_id' => 3353,
            'user_id' => 1,
            'note' => 'Olive: Fit FTAC €349.00 has dish',
            'created_at' => '2012-09-05 15:43:57'
        ]);



        CustomerNote::create([
            'id' => 702,
            'customer_id' => 3353,
            'user_id' => 1,
            'note' => 'Paid €50.00 deposit',
            'created_at' => '2012-09-05 15:50:28'
        ]);



        CustomerNote::create([
            'id' => 703,
            'customer_id' => 1144,
            'user_id' => 1,
            'note' => 'Paid cheque see FB',
            'created_at' => '2012-09-05 18:38:09'
        ]);



        CustomerNote::create([
            'id' => 705,
            'customer_id' => 15877,
            'user_id' => 1,
            'note' => 'Pics freezing, check signal. May require replacement combi. Fit SV STB to second TV. ',
            'created_at' => '2012-09-06 08:39:20'
        ]);



        CustomerNote::create([
            'id' => 706,
            'customer_id' => 16739,
            'user_id' => 1,
            'note' => 'Job done as below. Paid cheque 948.00',
            'created_at' => '2012-09-06 08:46:33'
        ]);



        CustomerNote::create([
            'id' => 707,
            'customer_id' => 16725,
            'user_id' => 1,
            'note' => 'Fitted 32 BD LCD, Saorsat combi x 2.',
            'created_at' => '2012-09-06 08:47:39'
        ]);



        CustomerNote::create([
            'id' => 708,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => 'Cancelled for Monday, try following week, Mary shop',
            'created_at' => '2012-09-06 10:18:19'
        ]);



        CustomerNote::create([
            'id' => 709,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'Key under flower pot on LHS of hall door in courtyard thru black gate',
            'created_at' => '2012-09-06 11:17:49'
        ]);



        CustomerNote::create([
            'id' => 710,
            'customer_id' => 16724,
            'user_id' => 1,
            'note' => 'Job done as below, paid 365.00 cash ID',
            'created_at' => '2012-09-06 12:10:57'
        ]);



        CustomerNote::create([
            'id' => 712,
            'customer_id' => 173,
            'user_id' => 1,
            'note' => 'Pension\r\nBarry Symes\r\nPersonal PAYE liability\r\nOlive Dreeling Stamps\r\nVAT Refund\r\n',
            'created_at' => '2012-09-09 09:31:42'
        ]);



        CustomerNote::create([
            'id' => 713,
            'customer_id' => 16737,
            'user_id' => 1,
            'note' => 'Fitted 2 Triax TSC114 system €649.00 cheque',
            'created_at' => '2012-09-10 08:38:53'
        ]);



        CustomerNote::create([
            'id' => 714,
            'customer_id' => 15877,
            'user_id' => 1,
            'note' => 'Fitted TSC114 stb and antenna',
            'created_at' => '2012-09-10 08:40:05'
        ]);



        CustomerNote::create([
            'id' => 715,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'Saorsat stb, replaced both boxes. FOC',
            'created_at' => '2012-09-10 08:40:57'
        ]);



        CustomerNote::create([
            'id' => 716,
            'customer_id' => 3453,
            'user_id' => 1,
            'note' => 'Fit 2 x FTAC, one at Martins and one mothers house',
            'created_at' => '2012-09-10 09:45:32'
        ]);



        CustomerNote::create([
            'id' => 717,
            'customer_id' => 10277,
            'user_id' => 1,
            'note' => 'Reconnect f-conn at STB in kitchen',
            'created_at' => '2012-09-10 10:37:51'
        ]);



        CustomerNote::create([
            'id' => 718,
            'customer_id' => 2890,
            'user_id' => 1,
            'note' => 'Has 2 sky boxes at present, wants to connect one of these to three other rooms, maybe RC extrs. Poss fit SV ant and dist to all rooms ',
            'created_at' => '2012-09-10 10:43:09'
        ]);



        CustomerNote::create([
            'id' => 719,
            'customer_id' => 2890,
            'user_id' => 1,
            'note' => 'Fridays suit best',
            'created_at' => '2012-09-10 10:43:29'
        ]);



        CustomerNote::create([
            'id' => 720,
            'customer_id' => 16546,
            'user_id' => 1,
            'note' => 'Call to survey for FTAC',
            'created_at' => '2012-09-10 10:49:29'
        ]);



        CustomerNote::create([
            'id' => 721,
            'customer_id' => 16747,
            'user_id' => 1,
            'note' => 'Fitted FTAC 12/04/12',
            'created_at' => '2012-09-10 10:56:23'
        ]);



        CustomerNote::create([
            'id' => 722,
            'customer_id' => 10636,
            'user_id' => 1,
            'note' => 'Sky box, no pics, no signal. ',
            'created_at' => '2012-09-10 11:05:38'
        ]);



        CustomerNote::create([
            'id' => 723,
            'customer_id' => 11444,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-09-10 11:37:18'
        ]);



        CustomerNote::create([
            'id' => 724,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'FTAC on hold till Jan. ',
            'created_at' => '2012-09-10 11:39:06'
        ]);



        CustomerNote::create([
            'id' => 725,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => '				Prob with Sky+ since new TV fitted,',
            'created_at' => '2012-09-10 14:08:31'
        ]);



        CustomerNote::create([
            'id' => 726,
            'customer_id' => 16674,
            'user_id' => 1,
            'note' => 'Booked,give one hours notice',
            'created_at' => '2012-09-10 11:51:37'
        ]);



        CustomerNote::create([
            'id' => 727,
            'customer_id' => 661,
            'user_id' => 1,
            'note' => 'Changed mind, cancell',
            'created_at' => '2012-09-10 11:55:40'
        ]);



        CustomerNote::create([
            'id' => 728,
            'customer_id' => 16733,
            'user_id' => 1,
            'note' => 'Fitted Saorsat, HDMI , Sony $429.00 cheque',
            'created_at' => '2012-09-10 12:06:11'
        ]);



        CustomerNote::create([
            'id' => 729,
            'customer_id' => 11444,
            'user_id' => 1,
            'note' => 'Michael to confirm later today',
            'created_at' => '2012-09-10 12:32:45'
        ]);



        CustomerNote::create([
            'id' => 730,
            'customer_id' => 16735,
            'user_id' => 1,
            'note' => 'spoke to Kathleen,not sure what day would suit,will call us',
            'created_at' => '2012-09-10 12:35:15'
        ]);



        CustomerNote::create([
            'id' => 731,
            'customer_id' => 8678,
            'user_id' => 1,
            'note' => 'on hold, has to go into hospital',
            'created_at' => '2012-09-10 12:45:17'
        ]);



        CustomerNote::create([
            'id' => 732,
            'customer_id' => 16611,
            'user_id' => 1,
            'note' => 'In Austrialia at the moment.',
            'created_at' => '2012-09-10 12:47:29'
        ]);



        CustomerNote::create([
            'id' => 733,
            'customer_id' => 12223,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-09-10 12:48:33'
        ]);



        CustomerNote::create([
            'id' => 734,
            'customer_id' => 16701,
            'user_id' => 1,
            'note' => 'No reply ',
            'created_at' => '2012-09-10 12:50:14'
        ]);



        CustomerNote::create([
            'id' => 742,
            'customer_id' => 1743,
            'user_id' => 1,
            'note' => 'PSU in attic unplugged, advised cust replace mains ext in attic',
            'created_at' => '2012-09-10 14:59:29'
        ]);



        CustomerNote::create([
            'id' => 741,
            'customer_id' => 16674,
            'user_id' => 1,
            'note' => 'confirmed for Tuesday ',
            'created_at' => '2012-09-10 14:25:22'
        ]);



        CustomerNote::create([
            'id' => 737,
            'customer_id' => 15500,
            'user_id' => 1,
            'note' => 'prov for Wed',
            'created_at' => '2012-09-10 13:12:14'
        ]);



        CustomerNote::create([
            'id' => 738,
            'customer_id' => 16748,
            'user_id' => 1,
            'note' => 'Fit FTAC',
            'created_at' => '2012-09-10 13:47:16'
        ]);



        CustomerNote::create([
            'id' => 739,
            'customer_id' => 10636,
            'user_id' => 1,
            'note' => '		Fitted replacement FTA box 178.00 cheque',
            'created_at' => '2012-09-10 13:58:18'
        ]);



        CustomerNote::create([
            'id' => 740,
            'customer_id' => 11444,
            'user_id' => 1,
            'note' => 'not today',
            'created_at' => '2012-09-10 13:57:20'
        ]);



        CustomerNote::create([
            'id' => 743,
            'customer_id' => 16748,
            'user_id' => 1,
            'note' => 'On hold for now. ',
            'created_at' => '2012-09-10 15:31:28'
        ]);



        CustomerNote::create([
            'id' => 744,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => 'Spoke to Geraldine,booked for Monday late pm',
            'created_at' => '2012-09-10 16:46:07'
        ]);



        CustomerNote::create([
            'id' => 745,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => 'Subject:	SMS via DaltonTV.ie\r\nDate:	September 10, 2012 4:09PM\r\nMessage:	A service technican is on the way to your address and should arrive within 30 min. Daltontv.ie 056 7770099\r\n',
            'created_at' => '2012-09-10 16:46:39'
        ]);



        CustomerNote::create([
            'id' => 746,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => 'ID called to house, no reply to landline, mobile or door bell. Invoiced FB, call closed.',
            'created_at' => '2012-09-10 16:47:21'
        ]);



        CustomerNote::create([
            'id' => 747,
            'customer_id' => 16546,
            'user_id' => 1,
            'note' => 'Fit FTAC, remove UPC antenna, remove old RTE ant, connect SV ant to existing RF distribution to two other tvs. Ensure CCTV is working before and after work is carried out.',
            'created_at' => '2012-09-10 20:00:31'
        ]);



        CustomerNote::create([
            'id' => 763,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-09-12 14:19:37'
        ]);



        CustomerNote::create([
            'id' => 764,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'Booking confirmed',
            'created_at' => '2012-09-12 14:21:35'
        ]);



        CustomerNote::create([
            'id' => 765,
            'customer_id' => 16720,
            'user_id' => 1,
            'note' => 'confirmed for first thing thurs',
            'created_at' => '2012-09-12 15:08:44'
        ]);



        CustomerNote::create([
            'id' => 766,
            'customer_id' => 16723,
            'user_id' => 1,
            'note' => '		 confirmed for 1.00am thurs',
            'created_at' => '2012-09-12 15:20:07'
        ]);



        CustomerNote::create([
            'id' => 767,
            'customer_id' => 15,
            'user_id' => 1,
            'note' => 'confirmed late pm',
            'created_at' => '2012-09-12 15:19:12'
        ]);



        CustomerNote::create([
            'id' => 768,
            'customer_id' => 16674,
            'user_id' => 1,
            'note' => 'Fitted combi box ans SV stb and ant. Paid cheque 490.00',
            'created_at' => '2012-09-12 15:31:22'
        ]);



        CustomerNote::create([
            'id' => 769,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'checked pics, ok',
            'created_at' => '2012-09-12 15:32:13'
        ]);



        CustomerNote::create([
            'id' => 770,
            'customer_id' => 16719,
            'user_id' => 1,
            'note' => 'Fitted ant using customers mha and psu. Paid 230.00',
            'created_at' => '2012-09-12 15:33:21'
        ]);



        CustomerNote::create([
            'id' => 771,
            'customer_id' => 13208,
            'user_id' => 1,
            'note' => 'Fitted SV ant in attic. paid cash 150.00',
            'created_at' => '2012-09-12 15:35:14'
        ]);



        CustomerNote::create([
            'id' => 772,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => '		Fitted FTAC and MHA & PSU Paid 479.00 cheque. Combi with scart.',
            'created_at' => '2012-09-17 15:22:39'
        ]);



        CustomerNote::create([
            'id' => 773,
            'customer_id' => 16754,
            'user_id' => 1,
            'note' => 'Fit SV ant',
            'created_at' => '2012-09-12 15:42:48'
        ]);



        CustomerNote::create([
            'id' => 774,
            'customer_id' => 16755,
            'user_id' => 1,
            'note' => 'FitSaorsat & 32 BD €778.00 Surveyed by ID',
            'created_at' => '2012-09-12 15:49:26'
        ]);



        CustomerNote::create([
            'id' => 775,
            'customer_id' => 16756,
            'user_id' => 1,
            'note' => '		Price SV STB with MHA & PSU €329 & SV TV €219. has 19.5 wide',
            'created_at' => '2012-09-12 15:55:28'
        ]);



        CustomerNote::create([
            'id' => 776,
            'customer_id' => 10188,
            'user_id' => 1,
            'note' => 'Try for 7.45am or 1.00pm for meet with Peter',
            'created_at' => '2012-09-13 08:28:30'
        ]);



        CustomerNote::create([
            'id' => 777,
            'customer_id' => 16409,
            'user_id' => 1,
            'note' => 'Fit existing combi STB to exiting dish at new house aand fit new SV ant',
            'created_at' => '2012-09-13 09:22:06'
        ]);



        CustomerNote::create([
            'id' => 778,
            'customer_id' => 16409,
            'user_id' => 1,
            'note' => '19 the paddocks , kells rd',
            'created_at' => '2012-09-13 09:22:28'
        ]);



        CustomerNote::create([
            'id' => 779,
            'customer_id' => 4546,
            'user_id' => 1,
            'note' => 'customer moved sky to another room, missing channels since',
            'created_at' => '2012-09-13 09:28:26'
        ]);



        CustomerNote::create([
            'id' => 780,
            'customer_id' => 10188,
            'user_id' => 1,
            'note' => 'go with 1.00pm slot, peter to confirm',
            'created_at' => '2012-09-13 09:57:19'
        ]);



        CustomerNote::create([
            'id' => 781,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'Move combi to TV in parlour room, fit SV box to master. check cows in master bed.',
            'created_at' => '2012-09-24 17:07:48'
        ]);



        CustomerNote::create([
            'id' => 782,
            'customer_id' => 16757,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB',
            'created_at' => '2012-09-13 10:32:23'
        ]);



        CustomerNote::create([
            'id' => 783,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Collected by NPX see below',
            'created_at' => '2012-09-13 11:24:05'
        ]);



        CustomerNote::create([
            'id' => 784,
            'customer_id' => 2890,
            'user_id' => 1,
            'note' => 'Seems to have been quiet a few problems here going back a long time with RC extrs. Be careful.',
            'created_at' => '2012-09-13 15:44:49'
        ]);



        CustomerNote::create([
            'id' => 785,
            'customer_id' => 14341,
            'user_id' => 1,
            'note' => 'problem with sky freezing ',
            'created_at' => '2012-09-14 08:11:20'
        ]);



        CustomerNote::create([
            'id' => 786,
            'customer_id' => 1679,
            'user_id' => 1,
            'note' => '		Deirdre (086 3868733) rang, no pics on aunts Sky. ',
            'created_at' => '2012-09-14 09:55:10'
        ]);



        CustomerNote::create([
            'id' => 787,
            'customer_id' => 1679,
            'user_id' => 1,
            'note' => 'confirmed first\r\n',
            'created_at' => '2012-09-14 10:16:41'
        ]);



        CustomerNote::create([
            'id' => 788,
            'customer_id' => 3353,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-09-14 10:18:14'
        ]);



        CustomerNote::create([
            'id' => 789,
            'customer_id' => 16758,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-09-14 13:35:01'
        ]);



        CustomerNote::create([
            'id' => 790,
            'customer_id' => 16758,
            'user_id' => 1,
            'note' => '		Paid €100.00, balance €299.00',
            'created_at' => '2012-09-14 13:39:21'
        ]);



        CustomerNote::create([
            'id' => 791,
            'customer_id' => 16759,
            'user_id' => 1,
            'note' => 'Sky, no signal, chacked box at HBP, ok.',
            'created_at' => '2012-09-14 15:01:37'
        ]);



        CustomerNote::create([
            'id' => 792,
            'customer_id' => 16742,
            'user_id' => 1,
            'note' => 'Fitted new dish and lnb to ESB pole at site boundary to avoid high trees. cabled into house. Customer to duct cables. 430.00 paid cheque',
            'created_at' => '2012-09-17 07:57:48'
        ]);



        CustomerNote::create([
            'id' => 793,
            'customer_id' => 15,
            'user_id' => 1,
            'note' => 'fitted SV ant and TV wall bkt. Paid 230.00',
            'created_at' => '2012-09-17 07:58:30'
        ]);



        CustomerNote::create([
            'id' => 794,
            'customer_id' => 16720,
            'user_id' => 1,
            'note' => 'Fitted new dish and SV ant. connected thru sky STB to link amp to 4-6 tvs. Paid 501.00 cheque',
            'created_at' => '2012-09-17 08:00:32'
        ]);



        CustomerNote::create([
            'id' => 795,
            'customer_id' => 16723,
            'user_id' => 1,
            'note' => '		Fitted SV ant and split to 6 tvs,i SV STB. Paid 340.00',
            'created_at' => '2012-09-17 08:01:30'
        ]);



        CustomerNote::create([
            'id' => 796,
            'customer_id' => 2890,
            'user_id' => 1,
            'note' => 'Fitted SV ant outside on customers pole.Run thru digibox to 4 way splitter. Paid 225.00',
            'created_at' => '2012-09-17 08:02:48'
        ]);



        CustomerNote::create([
            'id' => 797,
            'customer_id' => 10188,
            'user_id' => 1,
            'note' => 'Fit FTAC, and connect existing FTA and  SV STB to dish and ant. Paid 565.00',
            'created_at' => '2012-09-17 08:04:33'
        ]);



        CustomerNote::create([
            'id' => 798,
            'customer_id' => 16760,
            'user_id' => 1,
            'note' => '										Booking confirmed: Deirdre mobile. FTAC + Toshiba 22LCD €269.00, Paid deposit €50.00, balance €618.00',
            'created_at' => '2012-09-17 11:03:40'
        ]);



        CustomerNote::create([
            'id' => 799,
            'customer_id' => 16578,
            'user_id' => 1,
            'note' => 'No DTT signal, new install, view of Mt Lenister, KD installed. ',
            'created_at' => '2012-09-17 10:50:15'
        ]);



        CustomerNote::create([
            'id' => 800,
            'customer_id' => 16578,
            'user_id' => 1,
            'note' => 'loose conn, customer got going',
            'created_at' => '2012-09-17 11:02:36'
        ]);



        CustomerNote::create([
            'id' => 801,
            'customer_id' => 14341,
            'user_id' => 1,
            'note' => 'call cnacelled, pics ok  now',
            'created_at' => '2012-09-17 11:14:38'
        ]);



        CustomerNote::create([
            'id' => 802,
            'customer_id' => 1679,
            'user_id' => 1,
            'note' => 'trees in way of dish,tested with dish, €76.00',
            'created_at' => '2012-09-17 11:15:46'
        ]);



        CustomerNote::create([
            'id' => 803,
            'customer_id' => 3353,
            'user_id' => 1,
            'note' => 'Fitted FTAC paid 299.00 cash ',
            'created_at' => '2012-09-17 11:17:06'
        ]);



        CustomerNote::create([
            'id' => 804,
            'customer_id' => 16761,
            'user_id' => 1,
            'note' => 'Has 2 sky STBs, no sat sig on both',
            'created_at' => '2012-09-17 11:38:19'
        ]);



        CustomerNote::create([
            'id' => 805,
            'customer_id' => 16761,
            'user_id' => 1,
            'note' => 'Got someone to look at, working now, cancelled',
            'created_at' => '2012-09-17 11:39:24'
        ]);



        CustomerNote::create([
            'id' => 806,
            'customer_id' => 16701,
            'user_id' => 1,
            'note' => 'cancelled, UPC made better offer',
            'created_at' => '2012-09-17 11:41:46'
        ]);



        CustomerNote::create([
            'id' => 807,
            'customer_id' => 16735,
            'user_id' => 1,
            'note' => 'confirmed for 2.30pm today monday',
            'created_at' => '2012-09-17 11:46:51'
        ]);



        CustomerNote::create([
            'id' => 808,
            'customer_id' => 16751,
            'user_id' => 1,
            'note' => 'waiting on tvs to connect to aerial',
            'created_at' => '2012-09-17 11:49:52'
        ]);



        CustomerNote::create([
            'id' => 809,
            'customer_id' => 16546,
            'user_id' => 1,
            'note' => 'prov thursady',
            'created_at' => '2012-09-17 11:51:37'
        ]);



        CustomerNote::create([
            'id' => 810,
            'customer_id' => 16762,
            'user_id' => 1,
            'note' => '		Fit Saorsat',
            'created_at' => '2012-09-20 09:20:30'
        ]);



        CustomerNote::create([
            'id' => 811,
            'customer_id' => 16759,
            'user_id' => 1,
            'note' => 'Fitted new dish and LNB, paid €180.00 cash',
            'created_at' => '2012-09-17 12:51:46'
        ]);



        CustomerNote::create([
            'id' => 812,
            'customer_id' => 10749,
            'user_id' => 1,
            'note' => 'Spoke to Cathy Mc Sorley, video gone on some cams',
            'created_at' => '2012-09-17 13:22:43'
        ]);



        CustomerNote::create([
            'id' => 813,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => 'confirmed for thursday pm',
            'created_at' => '2012-09-17 14:08:11'
        ]);



        CustomerNote::create([
            'id' => 814,
            'customer_id' => 16765,
            'user_id' => 1,
            'note' => '		FTAC & 2 SV STB, 399.00 + 79.00 + 79.00, €600 for the lot',
            'created_at' => '2012-09-19 15:10:49'
        ]);



        CustomerNote::create([
            'id' => 815,
            'customer_id' => 14586,
            'user_id' => 1,
            'note' => '		Fit FTAC plus one or more SV STB & connect SV TV to antenna. ',
            'created_at' => '2012-09-17 15:03:02'
        ]);



        CustomerNote::create([
            'id' => 816,
            'customer_id' => 14586,
            'user_id' => 1,
            'note' => '		Prov for Saturday',
            'created_at' => '2012-09-17 15:05:59'
        ]);



        CustomerNote::create([
            'id' => 817,
            'customer_id' => 16766,
            'user_id' => 1,
            'note' => '				Fit SV STB',
            'created_at' => '2012-09-17 15:17:42'
        ]);



        CustomerNote::create([
            'id' => 818,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'no reply landline',
            'created_at' => '2012-09-17 15:27:59'
        ]);



        CustomerNote::create([
            'id' => 819,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'no reply mobile',
            'created_at' => '2012-09-17 15:28:48'
        ]);



        CustomerNote::create([
            'id' => 820,
            'customer_id' => 16756,
            'user_id' => 1,
            'note' => 'followed up, quoted for SV ant MHA 329.00 + 219.00 for 19 inch SV TV. 548.00 total ',
            'created_at' => '2012-09-17 15:34:45'
        ]);



        CustomerNote::create([
            'id' => 821,
            'customer_id' => 16465,
            'user_id' => 1,
            'note' => 'Fit 2 SRT 7002 Saorsat STBs. Replace existing SRT 700 0 with new SRT 7002 FOC. ',
            'created_at' => '2012-09-17 16:58:36'
        ]);



        CustomerNote::create([
            'id' => 822,
            'customer_id' => 3453,
            'user_id' => 1,
            'note' => 'Fitted 2 FTAC for Martin and mother paid, 798.00 cheque',
            'created_at' => '2012-09-18 13:22:16'
        ]);



        CustomerNote::create([
            'id' => 823,
            'customer_id' => 16409,
            'user_id' => 1,
            'note' => 'booked for thursday pm',
            'created_at' => '2012-09-18 14:48:35'
        ]);



        CustomerNote::create([
            'id' => 824,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-09-19 08:50:02'
        ]);



        CustomerNote::create([
            'id' => 825,
            'customer_id' => 16769,
            'user_id' => 1,
            'note' => 'Existing DTV customer. Wants SV STB and maybe SV antenna.',
            'created_at' => '2012-09-19 09:31:00'
        ]);



        CustomerNote::create([
            'id' => 826,
            'customer_id' => 4512,
            'user_id' => 1,
            'note' => 'Dish currently on chimney. Was burned before when fire was lighting. Neighbours tree that may have been causing problem is now removed. See if dish can be moved somewhere else.',
            'created_at' => '2012-09-19 11:36:10'
        ]);



        CustomerNote::create([
            'id' => 827,
            'customer_id' => 1408,
            'user_id' => 1,
            'note' => 'Fit FTAC x 2 plus SV STB x 2 + USB memory stick. 399 + 249+79+79+35+ 3 & 4 SV conn. est 100.00',
            'created_at' => '2012-09-19 13:23:07'
        ]);



        CustomerNote::create([
            'id' => 828,
            'customer_id' => 1408,
            'user_id' => 1,
            'note' => 'will call to office monday tuesday to pay and book date for install',
            'created_at' => '2012-09-19 13:31:28'
        ]);



        CustomerNote::create([
            'id' => 829,
            'customer_id' => 16770,
            'user_id' => 1,
            'note' => 'Has UPC on main TV, wants SV on two other TVs. ',
            'created_at' => '2012-09-19 13:38:41'
        ]);



        CustomerNote::create([
            'id' => 830,
            'customer_id' => 12760,
            'user_id' => 1,
            'note' => 'KD spoke to Ger Alley, had someone from Ennis working on TV system recently. RTE2 bad thru entire hotel. Four bed rooms no signal at all. ',
            'created_at' => '2012-09-19 13:43:58'
        ]);



        CustomerNote::create([
            'id' => 831,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => '2 houses, both need SV ant and one or two STBs each. May require 22 tosh LED @269  or 26 tosh LED @379',
            'created_at' => '2012-09-19 13:49:04'
        ]);



        CustomerNote::create([
            'id' => 832,
            'customer_id' => 16195,
            'user_id' => 1,
            'note' => 'problems with DTT signal, Sat Cat have upgraded SV ant, but customer still has no DTT signal in her app.',
            'created_at' => '2012-09-19 13:53:02'
        ]);



        CustomerNote::create([
            'id' => 833,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'customer dropped in Sky+ HD box, no sat signal, checked in workshop,returned to AEL',
            'created_at' => '2012-09-19 13:55:35'
        ]);



        CustomerNote::create([
            'id' => 834,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'E-mailed Seamus re pick up for Sky+ HD STB,no sat sig, under warrenty.',
            'created_at' => '2012-09-19 13:58:51'
        ]);



        CustomerNote::create([
            'id' => 835,
            'customer_id' => 16765,
            'user_id' => 1,
            'note' => 'Paid 300.00 cheque, collect balance 300.00 cash on Saturday',
            'created_at' => '2012-09-19 15:11:43'
        ]);



        CustomerNote::create([
            'id' => 836,
            'customer_id' => 16765,
            'user_id' => 1,
            'note' => 'to confirm time, customer available form 12.00',
            'created_at' => '2012-09-19 15:16:30'
        ]);



        CustomerNote::create([
            'id' => 837,
            'customer_id' => 16735,
            'user_id' => 1,
            'note' => 'Fitted 2 FTAC both on scart, down stairs auto scart, up stairs, press prog down to get to AV, Philips TV. Paid Cheque 599.00',
            'created_at' => '2012-09-20 08:58:07'
        ]);



        CustomerNote::create([
            'id' => 838,
            'customer_id' => 16772,
            'user_id' => 1,
            'note' => 'Fit FTAC and SV STB , quoted €500.00',
            'created_at' => '2012-09-20 09:06:21'
        ]);



        CustomerNote::create([
            'id' => 842,
            'customer_id' => 16773,
            'user_id' => 1,
            'note' => 'Fit 2 x FTAC @ 649 or 2 x SV STB and antenna @ 425.00',
            'created_at' => '2012-09-20 09:18:48'
        ]);



        CustomerNote::create([
            'id' => 840,
            'customer_id' => 11567,
            'user_id' => 1,
            'note' => 'Date 07/10/05 Time 10:31:40 Enter operator ID = ML -Did a quick survey on way home - absolutely no hope due to large trees. \r\n\r\nDate 06/10/05 Time 09:59:09 Enter operator ID = ML - I surveyed this house for Analogue sat 10 yrs ago and it was totally surrounded by trees - phoned Nell and she said a tree had been cut in recent years to allow the sun to get through. Advs that we may be unable to get signals. \r\n\r\nDate 05/10/05 Time 17:10:31 Enter operator ID = lw - booked for tomorrow midday \r\n\r\nDate 04/10/05 Time 09:50:37 Enter operator ID = lw - nell rang to say she wants call on thurs at latest \r\n\r\nDate 27/09/05 Time 15:57:24 Enter operator ID = pb called left message on mach next tues Date 26/09/05 Time 15:33:55 Enter operator ID = pb told will call back. Date 15/09/05 Time 14:09:38 Enter operator ID = lw - card rec - phone pt at tv Date 12/09/05 Time 10:39:52 Enter operator ID = sb EMAILED TO SKY TO ORDER CARD LROI2MFS - SKY WORLD Date 09/09/05 Time 09:50:57 Enter operator ID = lw - signed up for sky full package - lroi2mfs - card to be ordered - paid €5 weee auth code 056596 Date 05/09/05 Time 18:10:09 Enter operator ID = sb sent out info on sky',
            'created_at' => '2012-09-20 09:10:56'
        ]);



        CustomerNote::create([
            'id' => 841,
            'customer_id' => 11567,
            'user_id' => 1,
            'note' => 'Trees cut down here, check for satellite signal. See below also. Callout refundable if signal is ok and install goes ahead.',
            'created_at' => '2012-09-20 09:11:58'
        ]);



        CustomerNote::create([
            'id' => 843,
            'customer_id' => 16773,
            'user_id' => 1,
            'note' => 'Tuesday first thing, confirmed with customer',
            'created_at' => '2012-09-20 09:19:27'
        ]);



        CustomerNote::create([
            'id' => 844,
            'customer_id' => 16774,
            'user_id' => 1,
            'note' => 'Customer to confirm. FTAC + £ SV STB, installed 675.00',
            'created_at' => '2012-09-20 09:37:04'
        ]);



        CustomerNote::create([
            'id' => 845,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-09-20 10:38:04'
        ]);





        CustomerNote::create([
            'id' => 848,
            'customer_id' => 6808,
            'user_id' => 1,
            'note' => 'Fit 2 x FTAC. May require existing Sky+ connected via RC extr to other room. ',
            'created_at' => '2012-09-20 13:33:38'
        ]);



        CustomerNote::create([
            'id' => 849,
            'customer_id' => 2383,
            'user_id' => 1,
            'note' => 'Confirmed for Thursday 9.00am ',
            'created_at' => '2012-09-20 13:50:44'
        ]);



        CustomerNote::create([
            'id' => 850,
            'customer_id' => 16775,
            'user_id' => 1,
            'note' => 'Toshiba 26 inch LED 379.00. Wants to try indoor ant, may require Sv ant, quoted 150.00 . knows Olive from way back, make sure and tell him you are her brother!!',
            'created_at' => '2012-09-20 14:05:12'
        ]);



        CustomerNote::create([
            'id' => 851,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'height 23 in 40 wide . try 26 screen',
            'created_at' => '2012-09-20 16:02:01'
        ]);



        CustomerNote::create([
            'id' => 852,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => 'Looking for 2 x SV STB. Wants to use existing set top antenna. Quoted 79+79+ fitting. May require SV antenna.',
            'created_at' => '2012-09-20 16:31:45'
        ]);



        CustomerNote::create([
            'id' => 853,
            'customer_id' => 16635,
            'user_id' => 1,
            'note' => 'Fitted SV ant to two TVs. MTL, 250.00 paid\r\n',
            'created_at' => '2012-09-21 07:59:20'
        ]);



        CustomerNote::create([
            'id' => 854,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => 'Fitted 2 TSC114 combi and SV ant. Used customers dish. Per paid 550.00',
            'created_at' => '2012-09-21 08:02:10'
        ]);



        CustomerNote::create([
            'id' => 855,
            'customer_id' => 16409,
            'user_id' => 1,
            'note' => 'Fitted SV ant on bracket outside. Re fitted Sky STB. Paid 175.00',
            'created_at' => '2012-09-21 08:05:15'
        ]);



        CustomerNote::create([
            'id' => 856,
            'customer_id' => 10570,
            'user_id' => 1,
            'note' => 'Service call, no RTE on TV in meeting room',
            'created_at' => '2012-09-21 08:42:24'
        ]);



        CustomerNote::create([
            'id' => 857,
            'customer_id' => 12760,
            'user_id' => 1,
            'note' => 'Sent quote for HE and replacement TVs',
            'created_at' => '2012-09-21 08:43:40'
        ]);



        CustomerNote::create([
            'id' => 858,
            'customer_id' => 14586,
            'user_id' => 1,
            'note' => 'Cant do Sat 29th. May be working following Sat',
            'created_at' => '2012-09-21 09:01:11'
        ]);



        CustomerNote::create([
            'id' => 859,
            'customer_id' => 16777,
            'user_id' => 1,
            'note' => 'Fit FTAC and customers existing 37 LCD to wall bkt. PM daily',
            'created_at' => '2012-09-21 09:03:19'
        ]);



        CustomerNote::create([
            'id' => 860,
            'customer_id' => 11444,
            'user_id' => 1,
            'note' => 'cancelled, got somewhere else, maintained he could not wait for us, even though we made several attempts to install',
            'created_at' => '2012-09-21 09:10:44'
        ]);



        CustomerNote::create([
            'id' => 861,
            'customer_id' => 16770,
            'user_id' => 1,
            'note' => 'booking prov TBC with cust',
            'created_at' => '2012-09-21 09:14:42'
        ]);



        CustomerNote::create([
            'id' => 862,
            'customer_id' => 16755,
            'user_id' => 1,
            'note' => 'prov booking, TBC with customer',
            'created_at' => '2012-09-21 09:23:01'
        ]);



        CustomerNote::create([
            'id' => 863,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'E-mailed Seamus re pick up for Sky+ HD STB,no sat sig, under warrenty. Collected by NPX',
            'created_at' => '2012-09-21 09:36:43'
        ]);



        CustomerNote::create([
            'id' => 864,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => '26 Tosh LED on backorder',
            'created_at' => '2012-09-21 10:13:36'
        ]);



        CustomerNote::create([
            'id' => 865,
            'customer_id' => 16775,
            'user_id' => 1,
            'note' => '26 Tosh LED on backorder',
            'created_at' => '2012-09-21 10:14:23'
        ]);



        CustomerNote::create([
            'id' => 866,
            'customer_id' => 10188,
            'user_id' => 1,
            'note' => '		looking for replacement remote for Strong ... to call with model no. SRT6155',
            'created_at' => '2012-09-21 15:34:15'
        ]);



        CustomerNote::create([
            'id' => 867,
            'customer_id' => 16543,
            'user_id' => 1,
            'note' => 'paid 49.00 cash for call out',
            'created_at' => '2012-09-21 10:33:19'
        ]);



        CustomerNote::create([
            'id' => 868,
            'customer_id' => 16778,
            'user_id' => 1,
            'note' => 'Fit FTAC + SV STB. 470.00',
            'created_at' => '2012-09-21 10:58:17'
        ]);



        CustomerNote::create([
            'id' => 869,
            'customer_id' => 3456,
            'user_id' => 1,
            'note' => 'no sat sig',
            'created_at' => '2012-09-21 14:07:30'
        ]);



        CustomerNote::create([
            'id' => 870,
            'customer_id' => 16779,
            'user_id' => 1,
            'note' => '		FTAC + 32 Toshiba LCD. 748.00',
            'created_at' => '2012-09-28 15:19:32'
        ]);



        CustomerNote::create([
            'id' => 871,
            'customer_id' => 16529,
            'user_id' => 1,
            'note' => 'no signal on combi',
            'created_at' => '2012-09-21 16:13:49'
        ]);



        CustomerNote::create([
            'id' => 872,
            'customer_id' => 16758,
            'user_id' => 1,
            'note' => 'Job completed paid balance 299.00',
            'created_at' => '2012-09-21 18:34:05'
        ]);



        CustomerNote::create([
            'id' => 873,
            'customer_id' => 16778,
            'user_id' => 1,
            'note' => 'Completed paid 470.00',
            'created_at' => '2012-09-21 18:35:41'
        ]);



        CustomerNote::create([
            'id' => 882,
            'customer_id' => 15500,
            'user_id' => 1,
            'note' => 'tuned tv',
            'created_at' => '2012-09-24 17:33:00'
        ]);



        CustomerNote::create([
            'id' => 874,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'Home house: FTAC x 2 649.00. Cottage check out.',
            'created_at' => '2012-09-24 10:04:44'
        ]);



        CustomerNote::create([
            'id' => 875,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'Home house: FTAC x 2 649.00. Cottage check out.',
            'created_at' => '2012-09-24 10:04:45'
        ]);



        CustomerNote::create([
            'id' => 876,
            'customer_id' => 16760,
            'user_id' => 1,
            'note' => 'Fitted FTAC and new Tosh 22 inch. Auto HD. Paid balance 618.00 cheque. ',
            'created_at' => '2012-09-24 10:47:23'
        ]);



        CustomerNote::create([
            'id' => 877,
            'customer_id' => 16780,
            'user_id' => 1,
            'note' => 'Tosh 26 inch LED 379.00 ',
            'created_at' => '2012-09-24 11:52:29'
        ]);



        CustomerNote::create([
            'id' => 878,
            'customer_id' => 16780,
            'user_id' => 1,
            'note' => '		Has ant in attic. Test first, if not fit on roof, not on front of house. Tosh 26 LED also.',
            'created_at' => '2012-09-25 07:53:04'
        ]);



        CustomerNote::create([
            'id' => 879,
            'customer_id' => 12940,
            'user_id' => 1,
            'note' => 'Call re combi or SV STB. Has old FTA.',
            'created_at' => '2012-09-24 14:18:46'
        ]);



        CustomerNote::create([
            'id' => 880,
            'customer_id' => 16770,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-09-24 14:23:14'
        ]);



        CustomerNote::create([
            'id' => 881,
            'customer_id' => 16770,
            'user_id' => 1,
            'note' => 'confimred, but call when leaving first job',
            'created_at' => '2012-09-24 14:24:55'
        ]);



        CustomerNote::create([
            'id' => 883,
            'customer_id' => 16781,
            'user_id' => 1,
            'note' => 'Has SV TV, pics bad, fit SV ant. Estimated 150.00',
            'created_at' => '2012-09-24 17:41:39'
        ]);



        CustomerNote::create([
            'id' => 884,
            'customer_id' => 2122,
            'user_id' => 1,
            'note' => 'Credit card number',
            'created_at' => '2012-09-24 19:03:01'
        ]);



        CustomerNote::create([
            'id' => 885,
            'customer_id' => 523,
            'user_id' => 1,
            'note' => 'Spoke to Jenifer, will return faulty Sky box on Thursday. ',
            'created_at' => '2012-09-24 19:07:56'
        ]);



        CustomerNote::create([
            'id' => 886,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'confirmed, moved tv press, sky+ not working since, may be interested in combi to replace existing second sky box',
            'created_at' => '2012-09-25 08:33:04'
        ]);



        CustomerNote::create([
            'id' => 887,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'Liam 087 2861458',
            'created_at' => '2012-09-25 08:35:28'
        ]);



        CustomerNote::create([
            'id' => 888,
            'customer_id' => 6482,
            'user_id' => 1,
            'note' => 'V260W NEC, €859.00 installed',
            'created_at' => '2012-09-25 09:03:12'
        ]);



        CustomerNote::create([
            'id' => 889,
            'customer_id' => 1743,
            'user_id' => 1,
            'note' => 'Master bed. AV is symbol with arrow. rhs, second row from bottom, on EXT4',
            'created_at' => '2012-09-25 09:53:24'
        ]);



        CustomerNote::create([
            'id' => 890,
            'customer_id' => 16779,
            'user_id' => 1,
            'note' => 'Confirmed',
            'created_at' => '2012-09-25 10:27:20'
        ]);



        CustomerNote::create([
            'id' => 891,
            'customer_id' => 16782,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB, and also connect existing SV STB. estimated 250.00',
            'created_at' => '2012-09-25 10:30:57'
        ]);



        CustomerNote::create([
            'id' => 892,
            'customer_id' => 16782,
            'user_id' => 1,
            'note' => 'Confirmed',
            'created_at' => '2012-09-25 10:32:18'
        ]);



        CustomerNote::create([
            'id' => 893,
            'customer_id' => 16783,
            'user_id' => 1,
            'note' => 'FTAC 399.00 maybe two boxes',
            'created_at' => '2012-09-25 10:37:17'
        ]);



        CustomerNote::create([
            'id' => 894,
            'customer_id' => 16783,
            'user_id' => 1,
            'note' => '		Booked, will take two boxes',
            'created_at' => '2012-10-08 10:51:27'
        ]);



        CustomerNote::create([
            'id' => 895,
            'customer_id' => 16295,
            'user_id' => 1,
            'note' => 'Fit 3 RC extrs to existing Sky, estimated 250.00 ',
            'created_at' => '2012-09-25 10:56:09'
        ]);



        CustomerNote::create([
            'id' => 896,
            'customer_id' => 2492,
            'user_id' => 1,
            'note' => 'FTAC maybe more',
            'created_at' => '2012-09-25 11:01:22'
        ]);



        CustomerNote::create([
            'id' => 897,
            'customer_id' => 13091,
            'user_id' => 1,
            'note' => 'Quoted FTAC 399, tosh 32 inch 379, conn 50. ',
            'created_at' => '2012-09-25 11:16:06'
        ]);



        CustomerNote::create([
            'id' => 898,
            'customer_id' => 16236,
            'user_id' => 1,
            'note' => 'Desiree, STB does not stay on pic for very long.',
            'created_at' => '2012-09-25 12:55:58'
        ]);



        CustomerNote::create([
            'id' => 899,
            'customer_id' => 1408,
            'user_id' => 1,
            'note' => 'Paid 900.00 cash',
            'created_at' => '2012-09-25 13:38:51'
        ]);



        CustomerNote::create([
            'id' => 900,
            'customer_id' => 1408,
            'user_id' => 1,
            'note' => 'booking confirmed',
            'created_at' => '2012-09-25 13:49:06'
        ]);



        CustomerNote::create([
            'id' => 901,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'New Sky+ HD STB box, faulty out of box. Wont come out of standby. Emailed Seamus re collection.',
            'created_at' => '2012-09-25 14:53:07'
        ]);



        CustomerNote::create([
            'id' => 902,
            'customer_id' => 523,
            'user_id' => 1,
            'note' => 'Box returned',
            'created_at' => '2012-09-25 15:18:13'
        ]);



        CustomerNote::create([
            'id' => 903,
            'customer_id' => 6808,
            'user_id' => 1,
            'note' => 'Fit 2 x FTAC, RC extr and sky RC 649.00 + 25 +35.',
            'created_at' => '2012-09-26 07:53:53'
        ]);



        CustomerNote::create([
            'id' => 904,
            'customer_id' => 16546,
            'user_id' => 1,
            'note' => 'Fitted FTAC, and conn SV ant to other tvs, Auto Scart',
            'created_at' => '2012-09-26 07:54:36'
        ]);



        CustomerNote::create([
            'id' => 905,
            'customer_id' => 16765,
            'user_id' => 1,
            'note' => 'Fitted FTAC and 2 X SV STB. 600.00 ',
            'created_at' => '2012-09-26 07:55:33'
        ]);



        CustomerNote::create([
            'id' => 906,
            'customer_id' => 16766,
            'user_id' => 1,
            'note' => 'Fitted SV ant and STB. 290.00',
            'created_at' => '2012-09-26 07:56:34'
        ]);



        CustomerNote::create([
            'id' => 907,
            'customer_id' => 16754,
            'user_id' => 1,
            'note' => 'Fitted SV ant in attic. 150.00',
            'created_at' => '2012-09-26 07:57:09'
        ]);



        CustomerNote::create([
            'id' => 908,
            'customer_id' => 16773,
            'user_id' => 1,
            'note' => 'Fitted 2 x FTAC. 649.00',
            'created_at' => '2012-09-26 07:58:05'
        ]);



        CustomerNote::create([
            'id' => 909,
            'customer_id' => 11806,
            'user_id' => 1,
            'note' => 'Re make F conn at back of STB. 49.00',
            'created_at' => '2012-09-26 07:59:01'
        ]);



        CustomerNote::create([
            'id' => 910,
            'customer_id' => 1669,
            'user_id' => 1,
            'note' => 'Fit new dish & quad, run new cables & fit new Sky+ STB. 279+170, ',
            'created_at' => '2012-09-26 10:44:47'
        ]);



        CustomerNote::create([
            'id' => 911,
            'customer_id' => 14949,
            'user_id' => 1,
            'note' => 'no terr in living room',
            'created_at' => '2012-09-26 12:57:11'
        ]);



        CustomerNote::create([
            'id' => 912,
            'customer_id' => 16785,
            'user_id' => 1,
            'note' => 'FTAC ',
            'created_at' => '2012-09-26 13:23:52'
        ]);



        CustomerNote::create([
            'id' => 913,
            'customer_id' => 16772,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-09-26 14:43:04'
        ]);



        CustomerNote::create([
            'id' => 914,
            'customer_id' => 15220,
            'user_id' => 1,
            'note' => 'Lisa-Fit SV STB x 2 and ant if required and mha if required. quoted 350.00 plus mha',
            'created_at' => '2012-09-26 15:21:49'
        ]);



        CustomerNote::create([
            'id' => 915,
            'customer_id' => 14044,
            'user_id' => 1,
            'note' => 'wants three set top boxes tuned, ferguson ariva',
            'created_at' => '2012-09-26 15:42:55'
        ]);



        CustomerNote::create([
            'id' => 916,
            'customer_id' => 14949,
            'user_id' => 1,
            'note' => 'Replace combi set top box, no terr FOC \r\n',
            'created_at' => '2012-09-27 07:53:58'
        ]);



        CustomerNote::create([
            'id' => 917,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Included 2 x Triax TCSC114 for collection with Sky+ HD box.',
            'created_at' => '2012-09-27 08:26:42'
        ]);



        CustomerNote::create([
            'id' => 918,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Returns: Sky+ HD box stuck in standby from new.\r\nTriax TSC114 no terrestrial signal\r\nTriax TSC114 video output problem on scart from new',
            'created_at' => '2012-09-27 08:29:28'
        ]);



        CustomerNote::create([
            'id' => 919,
            'customer_id' => 16786,
            'user_id' => 1,
            'note' => 'Contact Eamon Mahon 087 2464223',
            'created_at' => '2012-09-27 12:09:22'
        ]);



        CustomerNote::create([
            'id' => 920,
            'customer_id' => 6482,
            'user_id' => 1,
            'note' => 'Alan Simpson 086 0605170',
            'created_at' => '2012-09-27 13:05:14'
        ]);



        CustomerNote::create([
            'id' => 921,
            'customer_id' => 1669,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-09-27 15:02:40'
        ]);



        CustomerNote::create([
            'id' => 922,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Sky + HD box returned together with SRT7002 and TSC114. Still 2 x Tsc114 and Sky+HD box for pickup',
            'created_at' => '2012-09-27 15:27:38'
        ]);



        CustomerNote::create([
            'id' => 923,
            'customer_id' => 13057,
            'user_id' => 1,
            'note' => '				FTAC €399.00 away 18th of Oct',
            'created_at' => '2012-09-28 09:52:46'
        ]);



        CustomerNote::create([
            'id' => 924,
            'customer_id' => 13057,
            'user_id' => 1,
            'note' => 'Deposit paid €50.00 , balance €349.00',
            'created_at' => '2012-09-28 09:53:29'
        ]);



        CustomerNote::create([
            'id' => 925,
            'customer_id' => 16757,
            'user_id' => 1,
            'note' => 'Confirmed',
            'created_at' => '2012-09-28 09:56:21'
        ]);



        CustomerNote::create([
            'id' => 926,
            'customer_id' => 10570,
            'user_id' => 1,
            'note' => 'Problem with room 300 sorted. Coaxial goes thru two tv points in room before it gets to tv mounted on wall. Cabled incorrectly by electrician. Job complete.',
            'created_at' => '2012-09-28 10:18:21'
        ]);



        CustomerNote::create([
            'id' => 927,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'FTAC customers dish. 349.00',
            'created_at' => '2012-09-28 10:19:02'
        ]);



        CustomerNote::create([
            'id' => 928,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'checked levels, all within exp at STB, no problem at time of call',
            'created_at' => '2012-09-28 10:20:02'
        ]);



        CustomerNote::create([
            'id' => 929,
            'customer_id' => 14586,
            'user_id' => 1,
            'note' => 'prov for Sat, TBC',
            'created_at' => '2012-09-28 11:03:15'
        ]);



        CustomerNote::create([
            'id' => 930,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'talked customer thru disconnecting other tvs from back of combi stb, customer will monitor reception and report back tomorrow',
            'created_at' => '2012-09-28 11:28:19'
        ]);



        CustomerNote::create([
            'id' => 931,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'Fit FTAC and connect old fta stb to new dish and aerial. quoted 470.00 max. signal here from suir valley, kilduff, mt lenister and clonmel.',
            'created_at' => '2012-09-28 11:49:18'
        ]);



        CustomerNote::create([
            'id' => 932,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'paid deposit 50.00, balance 420.00',
            'created_at' => '2012-09-28 11:49:42'
        ]);



        CustomerNote::create([
            'id' => 933,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'monday or friday is good',
            'created_at' => '2012-09-28 11:52:05'
        ]);



        CustomerNote::create([
            'id' => 934,
            'customer_id' => 16787,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-09-28 14:23:02'
        ]);



        CustomerNote::create([
            'id' => 935,
            'customer_id' => 16748,
            'user_id' => 1,
            'note' => 'Fit FTAc and connect 3 other TVs to SV ant. May require MHA and PSU. €569.00 ',
            'created_at' => '2012-09-28 14:30:54'
        ]);



        CustomerNote::create([
            'id' => 936,
            'customer_id' => 16529,
            'user_id' => 1,
            'note' => 'plugged STB out and back in again. OK now',
            'created_at' => '2012-09-28 15:15:22'
        ]);



        CustomerNote::create([
            'id' => 937,
            'customer_id' => 16788,
            'user_id' => 1,
            'note' => 'SV ant to 2 TVs',
            'created_at' => '2012-09-28 15:36:20'
        ]);



        CustomerNote::create([
            'id' => 938,
            'customer_id' => 16769,
            'user_id' => 1,
            'note' => 'Booking confirmed.',
            'created_at' => '2012-09-28 15:43:12'
        ]);



        CustomerNote::create([
            'id' => 939,
            'customer_id' => 16789,
            'user_id' => 1,
            'note' => '		FTAC & discussed Saorsat if poor signal. Called to book for Monday. Has other TVs and may want SV ant connected to them and more STBs. Told lady you would price when you know more. Watch out for cow CCTV.',
            'created_at' => '2012-10-12 08:50:28'
        ]);



        CustomerNote::create([
            'id' => 940,
            'customer_id' => 6482,
            'user_id' => 1,
            'note' => 'fitted projector and dropped off HDMI lead. Paid cheque 903.00',
            'created_at' => '2012-10-01 07:56:40'
        ]);



        CustomerNote::create([
            'id' => 941,
            'customer_id' => 16782,
            'user_id' => 1,
            'note' => 'cancelled, son connected box',
            'created_at' => '2012-10-01 09:06:53'
        ]);



        CustomerNote::create([
            'id' => 942,
            'customer_id' => 16770,
            'user_id' => 1,
            'note' => 'Fitted 2 SV STB, both on scart',
            'created_at' => '2012-10-01 09:12:24'
        ]);



        CustomerNote::create([
            'id' => 943,
            'customer_id' => 16790,
            'user_id' => 1,
            'note' => 'No sat sig, may be dish',
            'created_at' => '2012-10-01 11:19:26'
        ]);



        CustomerNote::create([
            'id' => 944,
            'customer_id' => 16791,
            'user_id' => 1,
            'note' => 'Fit 26 inch LCD 299 and sort out existing FTA at same TV',
            'created_at' => '2012-10-01 11:48:32'
        ]);



        CustomerNote::create([
            'id' => 945,
            'customer_id' => 16791,
            'user_id' => 1,
            'note' => 'Paid deposit €50.00',
            'created_at' => '2012-10-01 11:50:32'
        ]);



        CustomerNote::create([
            'id' => 946,
            'customer_id' => 3818,
            'user_id' => 1,
            'note' => 'Fit FTAC 399.00',
            'created_at' => '2012-10-01 14:29:44'
        ]);



        CustomerNote::create([
            'id' => 947,
            'customer_id' => 3818,
            'user_id' => 1,
            'note' => 'Deposit €100.00',
            'created_at' => '2012-10-01 14:30:33'
        ]);



        CustomerNote::create([
            'id' => 948,
            'customer_id' => 3818,
            'user_id' => 1,
            'note' => '		Fit at Clara, Co Kilkenny 371 Clohogue Clifden, past Fox & Goose on LHS , Mary and Edward Whearty',
            'created_at' => '2012-10-01 14:35:44'
        ]);



        CustomerNote::create([
            'id' => 949,
            'customer_id' => 16792,
            'user_id' => 1,
            'note' => 'See Roderick Whearty',
            'created_at' => '2012-10-01 14:38:10'
        ]);



        CustomerNote::create([
            'id' => 950,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => 'Wants Sky connected to all rooms inc. bar. Make existing remote eyes work. May require SV STB.',
            'created_at' => '2012-10-01 15:09:39'
        ]);



        CustomerNote::create([
            'id' => 951,
            'customer_id' => 16456,
            'user_id' => 1,
            'note' => 'Fit FTAC in garage and connect modulator to existing remote eyes. distribute SV signal and STB signal to existing 8 way amp.',
            'created_at' => '2012-10-01 15:27:03'
        ]);



        CustomerNote::create([
            'id' => 952,
            'customer_id' => 16794,
            'user_id' => 1,
            'note' => 'Problem with old FTA system',
            'created_at' => '2012-10-01 15:59:07'
        ]);



        CustomerNote::create([
            'id' => 953,
            'customer_id' => 10917,
            'user_id' => 1,
            'note' => '		Fix existing Saorview signal to existing tv. Bring orig Sky remote. Fix sat sign to existing FTA sky stb.',
            'created_at' => '2012-10-01 16:24:13'
        ]);



        CustomerNote::create([
            'id' => 954,
            'customer_id' => 16784,
            'user_id' => 1,
            'note' => 'Fit 2 x FTAC + 32 Tosh LED, conn 2 other tvs. Paid 1100.00',
            'created_at' => '2012-10-02 08:13:06'
        ]);



        CustomerNote::create([
            'id' => 955,
            'customer_id' => 16755,
            'user_id' => 1,
            'note' => 'Fited Saorsat & 32 BD €778.00  ID',
            'created_at' => '2012-10-02 08:13:50'
        ]);



        CustomerNote::create([
            'id' => 956,
            'customer_id' => 16772,
            'user_id' => 1,
            'note' => '		Fit FTAC  ,  €440.00 paid',
            'created_at' => '2012-10-02 08:15:07'
        ]);



        CustomerNote::create([
            'id' => 957,
            'customer_id' => 1669,
            'user_id' => 1,
            'note' => 'Fit new dish & quad, run new cables & fit new Sky+ STB. Paid 524.00',
            'created_at' => '2012-10-02 08:16:06'
        ]);



        CustomerNote::create([
            'id' => 958,
            'customer_id' => 3456,
            'user_id' => 1,
            'note' => 'Fitted SV STb and cut trees down to allow sat sig . paid 202.00',
            'created_at' => '2012-10-02 08:16:52'
        ]);



        CustomerNote::create([
            'id' => 959,
            'customer_id' => 16779,
            'user_id' => 1,
            'note' => 'FTAC + 32 Toshiba LCD.Paid 748.00',
            'created_at' => '2012-10-02 08:17:36'
        ]);



        CustomerNote::create([
            'id' => 960,
            'customer_id' => 1408,
            'user_id' => 1,
            'note' => 'Fit FTAC x 2 plus SV STB x 2 + USB memory stick. 399 + 249+79+79+35+ 3 & 4 SV conn. est 100.00\r\n',
            'created_at' => '2012-10-02 08:18:23'
        ]);



        CustomerNote::create([
            'id' => 961,
            'customer_id' => 1822,
            'user_id' => 1,
            'note' => 'Fit SV ant for Kilduff, signal should be ok according to SV web site. May require MHA. €150-180',
            'created_at' => '2012-10-02 09:38:29'
        ]);



        CustomerNote::create([
            'id' => 962,
            'customer_id' => 3336,
            'user_id' => 1,
            'note' => 'Needs SV ant and 3 SV STB',
            'created_at' => '2012-10-02 11:34:50'
        ]);



        CustomerNote::create([
            'id' => 963,
            'customer_id' => 8678,
            'user_id' => 1,
            'note' => 'cancelled, got someone else',
            'created_at' => '2012-10-02 11:46:27'
        ]);



        CustomerNote::create([
            'id' => 964,
            'customer_id' => 12033,
            'user_id' => 1,
            'note' => 'Sky +, no sat signal, was not recording before this, was viewing ok. ',
            'created_at' => '2012-10-02 13:04:22'
        ]);



        CustomerNote::create([
            'id' => 965,
            'customer_id' => 16775,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-02 13:11:07'
        ]);



        CustomerNote::create([
            'id' => 966,
            'customer_id' => 16790,
            'user_id' => 1,
            'note' => 'fit replacement dish and lnb , paid 160.00',
            'created_at' => '2012-10-02 13:15:21'
        ]);



        CustomerNote::create([
            'id' => 967,
            'customer_id' => 16795,
            'user_id' => 1,
            'note' => 'FTAC ',
            'created_at' => '2012-10-02 13:19:18'
        ]);



        CustomerNote::create([
            'id' => 968,
            'customer_id' => 16465,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-10-02 13:26:52'
        ]);



        CustomerNote::create([
            'id' => 969,
            'customer_id' => 16781,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-02 13:43:27'
        ]);



        CustomerNote::create([
            'id' => 970,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => 'no ans',
            'created_at' => '2012-10-02 13:44:18'
        ]);



        CustomerNote::create([
            'id' => 971,
            'customer_id' => 12940,
            'user_id' => 1,
            'note' => 'no ans',
            'created_at' => '2012-10-02 13:45:07'
        ]);



        CustomerNote::create([
            'id' => 972,
            'customer_id' => 13173,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-02 14:04:55'
        ]);



        CustomerNote::create([
            'id' => 973,
            'customer_id' => 15996,
            'user_id' => 1,
            'note' => 'has Walker SV STB, no signal, may need socond box for second tv',
            'created_at' => '2012-10-02 15:47:55'
        ]);



        CustomerNote::create([
            'id' => 974,
            'customer_id' => 10749,
            'user_id' => 1,
            'note' => 'Re fitted CCTV cam and new PSU',
            'created_at' => '2012-10-02 15:56:38'
        ]);



        CustomerNote::create([
            'id' => 975,
            'customer_id' => 16757,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB. Paid 270.00',
            'created_at' => '2012-10-02 15:57:18'
        ]);



        CustomerNote::create([
            'id' => 976,
            'customer_id' => 16769,
            'user_id' => 1,
            'note' => 'Tuned Tvs for SV, removed diplexer fro ant. Paid 109.00',
            'created_at' => '2012-10-02 15:58:15'
        ]);



        CustomerNote::create([
            'id' => 977,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'Fit Grannys combi up stairs in master bed(check cows are ok). Fit 42 inch LCD on wall bracket in parlour. Fit Nickys Sky HD box in front sitting room. Tidy cables at window. Plug in grannys tv to existing SV and cable.',
            'created_at' => '2012-10-03 10:52:03'
        ]);



        CustomerNote::create([
            'id' => 978,
            'customer_id' => 16796,
            'user_id' => 1,
            'note' => 'Fit FTAC and possibly MHA and PSU',
            'created_at' => '2012-10-03 08:11:16'
        ]);



        CustomerNote::create([
            'id' => 979,
            'customer_id' => 16796,
            'user_id' => 1,
            'note' => 'Do you sell tvs too?  At some point we might want to add a 19 inch in the master bedroom.  \r\n \r\n',
            'created_at' => '2012-10-03 08:11:44'
        ]);



        CustomerNote::create([
            'id' => 980,
            'customer_id' => 11567,
            'user_id' => 1,
            'note' => 'Cancelled',
            'created_at' => '2012-10-03 09:04:17'
        ]);



        CustomerNote::create([
            'id' => 981,
            'customer_id' => 12940,
            'user_id' => 1,
            'note' => 'john to ring back',
            'created_at' => '2012-10-03 09:12:10'
        ]);



        CustomerNote::create([
            'id' => 982,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'Fit 2 FTAC, 26 inch LED Tosh, and connect existing SV STB up stairs. Total €1,028.00',
            'created_at' => '2012-10-03 09:38:33'
        ]);



        CustomerNote::create([
            'id' => 983,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'Friday 9.00am confirmed',
            'created_at' => '2012-10-03 09:41:30'
        ]);



        CustomerNote::create([
            'id' => 984,
            'customer_id' => 16786,
            'user_id' => 1,
            'note' => '		confirmed Tursday am, paid in advance',
            'created_at' => '2012-10-03 10:22:09'
        ]);



        CustomerNote::create([
            'id' => 985,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => 'no ans',
            'created_at' => '2012-10-03 10:23:30'
        ]);



        CustomerNote::create([
            'id' => 986,
            'customer_id' => 4512,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-03 10:23:53'
        ]);



        CustomerNote::create([
            'id' => 987,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'confirmed firday pm',
            'created_at' => '2012-10-03 10:30:45'
        ]);



        CustomerNote::create([
            'id' => 988,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'still sig problems in evenings? try sat line amp,',
            'created_at' => '2012-10-03 10:48:51'
        ]);



        CustomerNote::create([
            'id' => 989,
            'customer_id' => 16797,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-10-03 10:57:14'
        ]);



        CustomerNote::create([
            'id' => 990,
            'customer_id' => 16798,
            'user_id' => 1,
            'note' => '				Fit SV ant and SV STB, may want to run cables for future sets or boxes',
            'created_at' => '2012-10-03 11:41:31'
        ]);



        CustomerNote::create([
            'id' => 991,
            'customer_id' => 16799,
            'user_id' => 1,
            'note' => 'Fit SV ant',
            'created_at' => '2012-10-03 14:13:19'
        ]);



        CustomerNote::create([
            'id' => 992,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => 'confirmed Thurs pm',
            'created_at' => '2012-10-03 15:07:40'
        ]);



        CustomerNote::create([
            'id' => 993,
            'customer_id' => 16800,
            'user_id' => 1,
            'note' => '26 LCD €269.00 + ant at 180.00, remove old BIG aerial on price',
            'created_at' => '2012-10-03 15:21:28'
        ]);



        CustomerNote::create([
            'id' => 994,
            'customer_id' => 16748,
            'user_id' => 1,
            'note' => 'Fitted dish and SV ant with MHA and connected one combi stb and 3 SV to three tvs. Problem tuning two tvs, could not get into menu. KD not happy with cable runs or cabling within dwelling.',
            'created_at' => '2012-10-04 07:54:34'
        ]);



        CustomerNote::create([
            'id' => 995,
            'customer_id' => 12033,
            'user_id' => 1,
            'note' => 'Remake f conn at back of STB, extended cables.65.00',
            'created_at' => '2012-10-04 07:55:33'
        ]);



        CustomerNote::create([
            'id' => 996,
            'customer_id' => 16798,
            'user_id' => 1,
            'note' => 'Cancelled, friend electrician is doing job',
            'created_at' => '2012-10-04 08:38:35'
        ]);



        CustomerNote::create([
            'id' => 997,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'All returns collected by NPX, one box',
            'created_at' => '2012-10-04 09:22:35'
        ]);



        CustomerNote::create([
            'id' => 998,
            'customer_id' => 13866,
            'user_id' => 1,
            'note' => 'Fit combi stb and rc extr 284.00 plus fitting',
            'created_at' => '2012-10-04 13:22:57'
        ]);



        CustomerNote::create([
            'id' => 999,
            'customer_id' => 13866,
            'user_id' => 1,
            'note' => 'Paid deposit €150.00 ',
            'created_at' => '2012-10-04 13:24:37'
        ]);



        CustomerNote::create([
            'id' => 1000,
            'customer_id' => 16780,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-04 14:42:54'
        ]);



        CustomerNote::create([
            'id' => 1001,
            'customer_id' => 16801,
            'user_id' => 1,
            'note' => '		Fit FTAC and connect FTA-SV signal to 3 other TVS. Estimate 700.00 plus Humax STB at 399.00',
            'created_at' => '2012-10-05 09:54:55'
        ]);



        CustomerNote::create([
            'id' => 1002,
            'customer_id' => 15813,
            'user_id' => 1,
            'note' => 'Bought SV TV and STB, needs ant and fitting.',
            'created_at' => '2012-10-04 15:56:40'
        ]);



        CustomerNote::create([
            'id' => 1003,
            'customer_id' => 16802,
            'user_id' => 1,
            'note' => 'Fit 32 Tosh LCD €369.00',
            'created_at' => '2012-10-05 07:50:56'
        ]);



        CustomerNote::create([
            'id' => 1004,
            'customer_id' => 16803,
            'user_id' => 1,
            'note' => 'FTAC + 2 SV STBs & maybe SV TV.Estimate 800.00',
            'created_at' => '2012-10-05 09:44:37'
        ]);



        CustomerNote::create([
            'id' => 1005,
            'customer_id' => 16804,
            'user_id' => 1,
            'note' => 'FTAC Pre ASO',
            'created_at' => '2012-10-05 09:52:09'
        ]);



        CustomerNote::create([
            'id' => 1006,
            'customer_id' => 16801,
            'user_id' => 1,
            'note' => '				Booking confirmed',
            'created_at' => '2012-10-05 10:00:33'
        ]);



        CustomerNote::create([
            'id' => 1007,
            'customer_id' => 12576,
            'user_id' => 1,
            'note' => 'Call to Colette, looking for FTAC and possibly more. May want to get rid of Sky. ',
            'created_at' => '2012-10-05 10:01:58'
        ]);



        CustomerNote::create([
            'id' => 1008,
            'customer_id' => 16805,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB, maybe more, estimated 250.00',
            'created_at' => '2012-10-05 10:12:21'
        ]);



        CustomerNote::create([
            'id' => 1009,
            'customer_id' => 10341,
            'user_id' => 1,
            'note' => 'Update antenna to SV',
            'created_at' => '2012-10-05 10:19:42'
        ]);



        CustomerNote::create([
            'id' => 1010,
            'customer_id' => 16781,
            'user_id' => 1,
            'note' => 'Done paid 150.00',
            'created_at' => '2012-10-05 10:25:45'
        ]);



        CustomerNote::create([
            'id' => 1011,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => '		Fitted STBs, needs SV ant and 3 point dist',
            'created_at' => '2012-10-08 08:49:05'
        ]);



        CustomerNote::create([
            'id' => 1012,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => 'Connect SV ant to 2 or 3 tvs. One of tvs is SV. Will need 2 STBs.',
            'created_at' => '2012-10-05 10:58:57'
        ]);



        CustomerNote::create([
            'id' => 1013,
            'customer_id' => 16637,
            'user_id' => 1,
            'note' => 'Fit Technistar STB, tune wit disecq switch for Astra 28 & 19. ',
            'created_at' => '2012-10-05 11:28:38'
        ]);



        CustomerNote::create([
            'id' => 1014,
            'customer_id' => 16637,
            'user_id' => 1,
            'note' => 'Paid deposit 20.00',
            'created_at' => '2012-10-05 11:29:02'
        ]);



        CustomerNote::create([
            'id' => 1015,
            'customer_id' => 4512,
            'user_id' => 1,
            'note' => 'checked dish, Pat going to chance fire, will be swithing to FTA soon anyway.',
            'created_at' => '2012-10-05 11:34:37'
        ]);



        CustomerNote::create([
            'id' => 1016,
            'customer_id' => 16796,
            'user_id' => 1,
            'note' => 'Fitted SVant MHA and PSU. conn master bed also. No satellite signal her due to trees.',
            'created_at' => '2012-10-05 11:35:30'
        ]);



        CustomerNote::create([
            'id' => 1017,
            'customer_id' => 12307,
            'user_id' => 1,
            'note' => '		FTAC and run cable to existing SV TV and to 3rd TV point with existing SV STB.',
            'created_at' => '2012-10-05 12:22:07'
        ]);



        CustomerNote::create([
            'id' => 1018,
            'customer_id' => 12307,
            'user_id' => 1,
            'note' => 'Paid deposit €50.00',
            'created_at' => '2012-10-05 12:24:59'
        ]);



        CustomerNote::create([
            'id' => 1019,
            'customer_id' => 15996,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-05 14:05:23'
        ]);



        CustomerNote::create([
            'id' => 1020,
            'customer_id' => 16807,
            'user_id' => 1,
            'note' => 'FTAC 399.00, connect existing SV TV to SV ant, and also connect third point. ',
            'created_at' => '2012-10-05 14:55:40'
        ]);



        CustomerNote::create([
            'id' => 1021,
            'customer_id' => 16804,
            'user_id' => 1,
            'note' => 'Cancelled',
            'created_at' => '2012-10-08 08:25:11'
        ]);



        CustomerNote::create([
            'id' => 1022,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'Liam wants 32 Tosh LED, 469.00',
            'created_at' => '2012-10-08 08:45:33'
        ]);



        CustomerNote::create([
            'id' => 1023,
            'customer_id' => 16775,
            'user_id' => 1,
            'note' => 'job done, paid 529.00',
            'created_at' => '2012-10-08 08:49:51'
        ]);



        CustomerNote::create([
            'id' => 1024,
            'customer_id' => 14586,
            'user_id' => 1,
            'note' => 'done paid 440.00',
            'created_at' => '2012-10-08 08:50:40'
        ]);



        CustomerNote::create([
            'id' => 1025,
            'customer_id' => 15996,
            'user_id' => 1,
            'note' => 'done paid 270.00',
            'created_at' => '2012-10-08 08:51:23'
        ]);



        CustomerNote::create([
            'id' => 1026,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'done paid 420.00',
            'created_at' => '2012-10-08 08:52:01'
        ]);



        CustomerNote::create([
            'id' => 1027,
            'customer_id' => 16802,
            'user_id' => 1,
            'note' => 'done paid 369.00',
            'created_at' => '2012-10-08 08:53:22'
        ]);



        CustomerNote::create([
            'id' => 1028,
            'customer_id' => 15994,
            'user_id' => 1,
            'note' => '		Ian was out with this customer Joan & Michael Doyle, maintains cust needs 2 x combi STB system. KD spoke to cust, not sure what she wants. 056 4441389',
            'created_at' => '2012-10-08 09:13:27'
        ]);



        CustomerNote::create([
            'id' => 1029,
            'customer_id' => 16808,
            'user_id' => 1,
            'note' => 'Wants 19 inch LCD and SV ant. Have 22 inch BD for 199.00 + 150.00 for ant',
            'created_at' => '2012-10-08 09:18:47'
        ]);



        CustomerNote::create([
            'id' => 1030,
            'customer_id' => 16809,
            'user_id' => 1,
            'note' => 'SV ant and STB 250.00',
            'created_at' => '2012-10-08 09:21:54'
        ]);



        CustomerNote::create([
            'id' => 1031,
            'customer_id' => 16810,
            'user_id' => 1,
            'note' => 'SV enquiry, big house',
            'created_at' => '2012-10-08 09:29:52'
        ]);



        CustomerNote::create([
            'id' => 1032,
            'customer_id' => 16810,
            'user_id' => 1,
            'note' => 'Fit one SV STB and antenna if required.',
            'created_at' => '2012-10-08 09:35:18'
        ]);



        CustomerNote::create([
            'id' => 1033,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => '		Fit 32 LED Tosh and fit aerial at other property. Bill here was 1028.00 now 1128.00 excluding ant at other house',
            'created_at' => '2012-10-08 09:53:24'
        ]);



        CustomerNote::create([
            'id' => 1034,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Channels missing in boss room. Retune TV.',
            'created_at' => '2012-10-08 09:54:41'
        ]);



        CustomerNote::create([
            'id' => 1035,
            'customer_id' => 6382,
            'user_id' => 1,
            'note' => 'faulty sky + STB',
            'created_at' => '2012-10-08 10:30:29'
        ]);



        CustomerNote::create([
            'id' => 1036,
            'customer_id' => 8054,
            'user_id' => 1,
            'note' => '				FTAC Triac TSC114 399.00, will try do pre ASO',
            'created_at' => '2012-10-08 12:10:07'
        ]);



        CustomerNote::create([
            'id' => 1037,
            'customer_id' => 13173,
            'user_id' => 1,
            'note' => 'Fitted 42 inch LG, 2 x FTAC, stand off bkt 58.00 , MHA & PSU 70.00 + 1224.00 Total €1352.00',
            'created_at' => '2012-10-08 13:23:01'
        ]);



        CustomerNote::create([
            'id' => 1038,
            'customer_id' => 1822,
            'user_id' => 1,
            'note' => 'Cancalled son got Sky',
            'created_at' => '2012-10-08 14:12:06'
        ]);



        CustomerNote::create([
            'id' => 1039,
            'customer_id' => 6382,
            'user_id' => 1,
            'note' => 'cancel sky call out',
            'created_at' => '2012-10-08 14:23:33'
        ]);



        CustomerNote::create([
            'id' => 1040,
            'customer_id' => 6382,
            'user_id' => 1,
            'note' => 'Fit FTAC, has dish €349.00 in kitchen',
            'created_at' => '2012-10-08 14:23:58'
        ]);



        CustomerNote::create([
            'id' => 1041,
            'customer_id' => 13173,
            'user_id' => 1,
            'note' => 'Paid 1,200.00 , 150.00 balance due, will drop in two weeks',
            'created_at' => '2012-10-08 14:43:28'
        ]);



        CustomerNote::create([
            'id' => 1042,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Paid cheque, €102.36',
            'created_at' => '2012-10-08 15:05:47'
        ]);



        CustomerNote::create([
            'id' => 1043,
            'customer_id' => 14860,
            'user_id' => 1,
            'note' => '23x20 for new TV and SV ant.',
            'created_at' => '2012-10-08 15:46:04'
        ]);



        CustomerNote::create([
            'id' => 1044,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => 'Fitted 2 x SV STB and antenna, and connected to three tvs. Cabled all 3 points. Two visits. 45 min day one, 2.15 day two. Paid 440.00',
            'created_at' => '2012-10-08 16:04:32'
        ]);



        CustomerNote::create([
            'id' => 1045,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => 'Customer questioned bill. First call we installed 2 x SV STB @ €99.00 each. Record Triax box. Callout €49.00 plus 2 boxes. €247.00, Boxes did not work on indoor ant, second call , fit aerial and connect to three tv points €193.00',
            'created_at' => '2012-10-08 16:12:30'
        ]);



        CustomerNote::create([
            'id' => 1046,
            'customer_id' => 16812,
            'user_id' => 1,
            'note' => 'Fit FTAC + on SV STB and look at connecting three other SV points. Est €550.00',
            'created_at' => '2012-10-08 16:26:17'
        ]);

        CustomerNote::create([
            'id' => 1047,
            'customer_id' => 16812,
            'user_id' => 1,
            'note' => 'Paid €100.00',
            'created_at' => '2012-10-08 16:30:18'
        ]);

        CustomerNote::create([
            'id' => 1048,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => 'Go ahead with job, mentioned cow cam.',
            'created_at' => '2012-10-08 16:40:16'
        ]);

        CustomerNote::create([
            'id' => 1049,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'Dish slightly off line, weak on one polarity, missing channels now present .',
            'created_at' => '2012-10-08 19:47:01'
        ]);

        CustomerNote::create([
            'id' => 1050,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Room #1 #6 #7',
            'created_at' => '2012-10-09 07:52:21'
        ]);

        CustomerNote::create([
            'id' => 1051,
            'customer_id' => 1985,
            'user_id' => 1,
            'note' => 'FTAC 349.00 has dish, may be difficult install',
            'created_at' => '2012-10-09 08:28:16'
        ]);

        CustomerNote::create([
            'id' => 1052,
            'customer_id' => 16783,
            'user_id' => 1,
            'note' => 'no answer',
            'created_at' => '2012-10-09 08:44:18'
        ]);

        CustomerNote::create([
            'id' => 1053,
            'customer_id' => 16753,
            'user_id' => 1,
            'note' => 'confirmed for midday',
            'created_at' => '2012-10-09 08:49:39'
        ]);

        CustomerNote::create([
            'id' => 1054,
            'customer_id' => 2492,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-10-09 08:51:52'
        ]);

        CustomerNote::create([
            'id' => 1055,
            'customer_id' => 16295,
            'user_id' => 1,
            'note' => 'text sent',
            'created_at' => '2012-10-09 08:53:45'
        ]);

        CustomerNote::create([
            'id' => 1056,
            'customer_id' => 16787,
            'user_id' => 1,
            'note' => 'voicemail, text',
            'created_at' => '2012-10-09 08:56:06'
        ]);

        CustomerNote::create([
            'id' => 1057,
            'customer_id' => 16777,
            'user_id' => 1,
            'note' => 'text',
            'created_at' => '2012-10-09 08:59:42'
        ]);

        CustomerNote::create([
            'id' => 1058,
            'customer_id' => 16776,
            'user_id' => 1,
            'note' => 'posted 40.00 difference if cost of one set top box over another, quoted 79.00, 99.00 box installed',
            'created_at' => '2012-10-09 09:04:28'
        ]);

        CustomerNote::create([
            'id' => 1059,
            'customer_id' => 2492,
            'user_id' => 1,
            'note' => 'pref tuesday or thursday',
            'created_at' => '2012-10-09 09:11:45'
        ]);

        CustomerNote::create([
            'id' => 1060,
            'customer_id' => 16783,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-09 09:21:07'
        ]);

        CustomerNote::create([
            'id' => 1061,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => 'FTAC 399.00',
            'created_at' => '2012-10-09 10:19:14'
        ]);

        CustomerNote::create([
            'id' => 1062,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => 'Close to Helen Murphy Tulamain, Callan',
            'created_at' => '2012-10-09 10:20:34'
        ]);

        CustomerNote::create([
            'id' => 1063,
            'customer_id' => 2122,
            'user_id' => 1,
            'note' => 'Customer has no tv picture',
            'created_at' => '2012-10-09 11:15:58'
        ]);

        CustomerNote::create([
            'id' => 1064,
            'customer_id' => 2122,
            'user_id' => 1,
            'note' => 'Customer will be next door, call for keys',
            'created_at' => '2012-10-09 11:18:03'
        ]);

        CustomerNote::create([
            'id' => 1065,
            'customer_id' => 2122,
            'user_id' => 1,
            'note' => 'job complete 150.00 paid',
            'created_at' => '2012-10-09 11:22:45'
        ]);

        CustomerNote::create([
            'id' => 1066,
            'customer_id' => 12366,
            'user_id' => 1,
            'note' => 'replacement reomte : SRT6130 x 2 remotes',
            'created_at' => '2012-10-09 11:58:13'
        ]);

        CustomerNote::create([
            'id' => 1067,
            'customer_id' => 16803,
            'user_id' => 1,
            'note' => 'cancelled, son in law did job instead!',
            'created_at' => '2012-10-09 12:33:04'
        ]);

        CustomerNote::create([
            'id' => 1068,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'Pics and sound bad especially in evenings',
            'created_at' => '2012-10-09 13:16:46'
        ]);

        CustomerNote::create([
            'id' => 1069,
            'customer_id' => 7839,
            'user_id' => 1,
            'note' => 'Fit FTAC dish and box only. Has aerial, connect other boxes and TVs to new dish. Estimate 450.00',
            'created_at' => '2012-10-09 13:35:14'
        ]);

        CustomerNote::create([
            'id' => 1070,
            'customer_id' => 7839,
            'user_id' => 1,
            'note' => 'Deposit €100.00',
            'created_at' => '2012-10-09 13:36:06'
        ]);

        CustomerNote::create([
            'id' => 1071,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => '		Spoke to Ann Dunleevy, problem with tvs again. Explained we have been out on numerous ocaissions where there was no problem found. Lady explained that our invoices may be disputed. Will contact Mary in charge for advice.We did not refuse to call, but we did, as we have done on ocaission advise to check problem again.',
            'created_at' => '2012-10-10 09:55:45'
        ]);

        CustomerNote::create([
            'id' => 1072,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => '		Fitted 42 inch LCD - Tosh - wall bracket - 60cm dish & LNB - Cable 50m - 6 hrs labour - Conn- 4 way F- Fit Granny feets combi up stairs in master bed(check cows are ok). Fit 42 inch LCD on wall bracket in parlour. Fit Nicky feets Sky HD box in front sitting room. Tidy cables at window. Plug in grannys tv to existing SV and cable.',
            'created_at' => '2012-10-10 09:27:39'
        ]);

        CustomerNote::create([
            'id' => 1073,
            'customer_id' => 16814,
            'user_id' => 1,
            'note' => 'Moving house, has Sky box, needs new dish',
            'created_at' => '2012-10-10 09:45:27'
        ]);

        CustomerNote::create([
            'id' => 1074,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Ann Dun, checked tv with no sound with another staff member when I asked her to double check and sound is present. All ok now, call cancelled.',
            'created_at' => '2012-10-10 09:56:47'
        ]);

        CustomerNote::create([
            'id' => 1075,
            'customer_id' => 16815,
            'user_id' => 1,
            'note' => 'Fitted multi FTAC 25.11.2011',
            'created_at' => '2012-10-10 10:13:24'
        ]);

        CustomerNote::create([
            'id' => 1076,
            'customer_id' => 8534,
            'user_id' => 1,
            'note' => 'Fit combi STB, has existing FTA estimate STb only €249.00 thinks comunial antenna in building.',
            'created_at' => '2012-10-10 10:20:45'
        ]);

        CustomerNote::create([
            'id' => 1077,
            'customer_id' => 8534,
            'user_id' => 1,
            'note' => 'Away until 24th Oct ',
            'created_at' => '2012-10-10 10:23:46'
        ]);

        CustomerNote::create([
            'id' => 1078,
            'customer_id' => 16816,
            'user_id' => 1,
            'note' => '		Fit SV STB and ant if required. Contact son James 087 9221676',
            'created_at' => '2012-10-10 10:34:13'
        ]);

        CustomerNote::create([
            'id' => 1079,
            'customer_id' => 13030,
            'user_id' => 1,
            'note' => 'Fitted FTAC KD',
            'created_at' => '2012-10-10 10:51:38'
        ]);

        CustomerNote::create([
            'id' => 1080,
            'customer_id' => 16819,
            'user_id' => 1,
            'note' => 'Fitted combi + 10.01.2012',
            'created_at' => '2012-10-10 11:03:58'
        ]);

        CustomerNote::create([
            'id' => 1081,
            'customer_id' => 16820,
            'user_id' => 1,
            'note' => 'Fitted FTAC 24.01.2012',
            'created_at' => '2012-10-10 11:07:34'
        ]);

        CustomerNote::create([
            'id' => 1082,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'Awaiting 2 x 22 inch LCD',
            'created_at' => '2012-10-10 11:15:49'
        ]);

        CustomerNote::create([
            'id' => 1083,
            'customer_id' => 16821,
            'user_id' => 1,
            'note' => 'Fitted FTAC + 02.02.2012',
            'created_at' => '2012-10-10 11:17:44'
        ]);

        CustomerNote::create([
            'id' => 1084,
            'customer_id' => 16822,
            'user_id' => 1,
            'note' => 'FTAC ',
            'created_at' => '2012-10-10 11:30:27'
        ]);

        CustomerNote::create([
            'id' => 1085,
            'customer_id' => 15819,
            'user_id' => 1,
            'note' => 'FTAC x 2 €648.00',
            'created_at' => '2012-10-10 11:42:42'
        ]);

        CustomerNote::create([
            'id' => 1086,
            'customer_id' => 16787,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-10-10 13:35:05'
        ]);

        CustomerNote::create([
            'id' => 1087,
            'customer_id' => 16800,
            'user_id' => 1,
            'note' => '26LCD, SV STB (check TV) SV ant, remove old antenna. €568.00 ',
            'created_at' => '2012-10-10 13:52:38'
        ]);

        CustomerNote::create([
            'id' => 1088,
            'customer_id' => 16800,
            'user_id' => 1,
            'note' => 'Deposit paid €100.00',
            'created_at' => '2012-10-10 13:54:23'
        ]);

        CustomerNote::create([
            'id' => 1089,
            'customer_id' => 15220,
            'user_id' => 1,
            'note' => 'confirmed friday 2.00pm',
            'created_at' => '2012-10-10 14:03:39'
        ]);

        CustomerNote::create([
            'id' => 1090,
            'customer_id' => 16777,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-10 14:14:58'
        ]);

        CustomerNote::create([
            'id' => 1091,
            'customer_id' => 16823,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-10-10 14:24:36'
        ]);

        CustomerNote::create([
            'id' => 1092,
            'customer_id' => 16812,
            'user_id' => 1,
            'note' => 'confirmed midday thurs\r\n',
            'created_at' => '2012-10-10 15:07:02'
        ]);

        CustomerNote::create([
            'id' => 1093,
            'customer_id' => 11003,
            'user_id' => 1,
            'note' => 'Fit combi at existing FTA box. Fit SV box to other TV, May have SV signal. If not aerial.',
            'created_at' => '2012-10-10 15:13:54'
        ]);

        CustomerNote::create([
            'id' => 1094,
            'customer_id' => 11003,
            'user_id' => 1,
            'note' => 'confirmed wed first thing estimated 450.00',
            'created_at' => '2012-10-10 15:18:37'
        ]);

        CustomerNote::create([
            'id' => 1095,
            'customer_id' => 16824,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB if requiired',
            'created_at' => '2012-10-10 15:24:16'
        ]);

        CustomerNote::create([
            'id' => 1096,
            'customer_id' => 16797,
            'user_id' => 1,
            'note' => 'no ans',
            'created_at' => '2012-10-10 15:45:06'
        ]);

        CustomerNote::create([
            'id' => 1097,
            'customer_id' => 16751,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-10 15:46:44'
        ]);

        CustomerNote::create([
            'id' => 1098,
            'customer_id' => 16780,
            'user_id' => 1,
            'note' => 'done, paid 529.00',
            'created_at' => '2012-10-10 15:55:01'
        ]);

        CustomerNote::create([
            'id' => 1099,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'doen both jobs, paid 1250.00 all in',
            'created_at' => '2012-10-10 15:55:49'
        ]);

        CustomerNote::create([
            'id' => 1100,
            'customer_id' => 5,
            'user_id' => 1,
            'note' => 'Checked all thee TVs, two working, changed settings on third TV. All OK.',
            'created_at' => '2012-10-10 15:57:00'
        ]);

        CustomerNote::create([
            'id' => 4843,
            'customer_id' => 16825,
            'user_id' => 1,
            'note' => 'Fit roof bars and pole storage boxes.',
            'created_at' => '2015-04-19 10:34:23'
        ]);

        CustomerNote::create([
            'id' => 1105,
            'customer_id' => 16826,
            'user_id' => 1,
            'note' => 'Connect to IF sys.',
            'created_at' => '2012-10-10 16:35:30'
        ]);

        CustomerNote::create([
            'id' => 1106,
            'customer_id' => 16787,
            'user_id' => 1,
            'note' => 'Cancelled, nut case',
            'created_at' => '2012-10-11 07:56:50'
        ]);

        CustomerNote::create([
            'id' => 1107,
            'customer_id' => 16827,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-10-11 09:08:44'
        ]);

        CustomerNote::create([
            'id' => 1108,
            'customer_id' => 16828,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-10-11 09:10:26'
        ]);

        CustomerNote::create([
            'id' => 1109,
            'customer_id' => 12584,
            'user_id' => 1,
            'note' => 'FTAC 22.10.2012 #0610',
            'created_at' => '2012-10-11 09:12:49'
        ]);

        CustomerNote::create([
            'id' => 1110,
            'customer_id' => 16829,
            'user_id' => 1,
            'note' => 'FTAC 27.10.2012',
            'created_at' => '2012-10-11 09:15:02'
        ]);

        CustomerNote::create([
            'id' => 1111,
            'customer_id' => 16830,
            'user_id' => 1,
            'note' => 'FTAC 27.10.2012',
            'created_at' => '2012-10-11 09:18:15'
        ]);

        CustomerNote::create([
            'id' => 1112,
            'customer_id' => 16831,
            'user_id' => 1,
            'note' => 'FTAC 29.10.2012 # 0620',
            'created_at' => '2012-10-11 09:21:10'
        ]);

        CustomerNote::create([
            'id' => 1113,
            'customer_id' => 16832,
            'user_id' => 1,
            'note' => 'FTAC 02.11.2012 #0621',
            'created_at' => '2012-10-11 09:38:58'
        ]);

        CustomerNote::create([
            'id' => 1114,
            'customer_id' => 16833,
            'user_id' => 1,
            'note' => 'Fit existing FTA box to existing dish.',
            'created_at' => '2012-10-11 09:50:35'
        ]);

        CustomerNote::create([
            'id' => 1115,
            'customer_id' => 16834,
            'user_id' => 1,
            'note' => 'FTAC #0630',
            'created_at' => '2012-10-11 09:59:23'
        ]);

        CustomerNote::create([
            'id' => 1116,
            'customer_id' => 16835,
            'user_id' => 1,
            'note' => 'FTAC #0635',
            'created_at' => '2012-10-11 10:01:48'
        ]);

        CustomerNote::create([
            'id' => 1117,
            'customer_id' => 16836,
            'user_id' => 1,
            'note' => '#0649 FTAC',
            'created_at' => '2012-10-11 10:09:11'
        ]);

        CustomerNote::create([
            'id' => 1118,
            'customer_id' => 16837,
            'user_id' => 1,
            'note' => 'FTAC # 0656',
            'created_at' => '2012-10-11 10:25:27'
        ]);

        CustomerNote::create([
            'id' => 1119,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Maeve called, TV in non smoking sitting room has no sound at night.',
            'created_at' => '2012-10-11 10:30:37'
        ]);

        CustomerNote::create([
            'id' => 1120,
            'customer_id' => 16838,
            'user_id' => 1,
            'note' => 'FTAC + 35.00 USB',
            'created_at' => '2012-10-11 10:54:55'
        ]);

        CustomerNote::create([
            'id' => 1121,
            'customer_id' => 16838,
            'user_id' => 1,
            'note' => 'Paid deposit €50.00',
            'created_at' => '2012-10-11 10:55:20'
        ]);

        CustomerNote::create([
            'id' => 1122,
            'customer_id' => 16814,
            'user_id' => 1,
            'note' => 'on hold for now',
            'created_at' => '2012-10-11 11:03:01'
        ]);

        CustomerNote::create([
            'id' => 1123,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'FTAC 399.00',
            'created_at' => '2012-10-11 11:07:12'
        ]);

        CustomerNote::create([
            'id' => 1124,
            'customer_id' => 16840,
            'user_id' => 1,
            'note' => '				Has SV STB, wants SV ant and second STB and may require MHA. est 569.00 for 26 Tosh LED SV ant and MHA',
            'created_at' => '2012-10-11 11:25:36'
        ]);

        CustomerNote::create([
            'id' => 1125,
            'customer_id' => 15220,
            'user_id' => 1,
            'note' => 'Mon Tue Fri Sat next week. Lisa',
            'created_at' => '2012-10-11 11:14:40'
        ]);

        CustomerNote::create([
            'id' => 1126,
            'customer_id' => 16814,
            'user_id' => 1,
            'note' => 'Fit new dish at new house. €150-175.00',
            'created_at' => '2012-10-11 11:16:29'
        ]);

        CustomerNote::create([
            'id' => 1127,
            'customer_id' => 16841,
            'user_id' => 1,
            'note' => '							Confirmed	Fit SV ant  and connect to 2 existing SV TVs. Advised might need MHA €70.00, estimate 280-290 inc mha',
            'created_at' => '2012-10-31 12:00:35'
        ]);

        CustomerNote::create([
            'id' => 1128,
            'customer_id' => 16841,
            'user_id' => 1,
            'note' => 'Paid deposit €50.00',
            'created_at' => '2012-10-11 11:52:43'
        ]);

        CustomerNote::create([
            'id' => 1129,
            'customer_id' => 16842,
            'user_id' => 1,
            'note' => 'SV STB and Ant',
            'created_at' => '2012-10-11 13:32:45'
        ]);

        CustomerNote::create([
            'id' => 1130,
            'customer_id' => 16797,
            'user_id' => 1,
            'note' => 'no ans',
            'created_at' => '2012-10-11 13:46:36'
        ]);

        CustomerNote::create([
            'id' => 1131,
            'customer_id' => 16823,
            'user_id' => 1,
            'note' => 'text ',
            'created_at' => '2012-10-11 13:49:42'
        ]);

        CustomerNote::create([
            'id' => 1132,
            'customer_id' => 16823,
            'user_id' => 1,
            'note' => '		Confirmed, ring on way',
            'created_at' => '2012-10-11 14:18:02'
        ]);

        CustomerNote::create([
            'id' => 1133,
            'customer_id' => 12307,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-11 14:19:13'
        ]);

        CustomerNote::create([
            'id' => 1134,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'text for sat pm',
            'created_at' => '2012-10-11 14:21:52'
        ]);

        CustomerNote::create([
            'id' => 1135,
            'customer_id' => 16801,
            'user_id' => 1,
            'note' => 'Paid cheque deposit €300.00',
            'created_at' => '2012-10-11 16:14:01'
        ]);

        CustomerNote::create([
            'id' => 1136,
            'customer_id' => 16789,
            'user_id' => 1,
            'note' => 'Monday am confirmed',
            'created_at' => '2012-10-12 08:50:38'
        ]);

        CustomerNote::create([
            'id' => 1137,
            'customer_id' => 16762,
            'user_id' => 1,
            'note' => '		Confirmed for Monday, keys in parents. Will leave cash or cheque with parents. €399.00',
            'created_at' => '2012-10-12 08:54:36'
        ]);

        CustomerNote::create([
            'id' => 1138,
            'customer_id' => 16783,
            'user_id' => 1,
            'note' => 'done paid',
            'created_at' => '2012-10-12 08:56:04'
        ]);

        CustomerNote::create([
            'id' => 1139,
            'customer_id' => 16753,
            'user_id' => 1,
            'note' => 'all done, prob still with customers STB',
            'created_at' => '2012-10-12 08:56:42'
        ]);

        CustomerNote::create([
            'id' => 1140,
            'customer_id' => 16295,
            'user_id' => 1,
            'note' => 'work done, paid',
            'created_at' => '2012-10-12 08:57:28'
        ]);

        CustomerNote::create([
            'id' => 1141,
            'customer_id' => 2492,
            'user_id' => 1,
            'note' => 'Called, no work wanted here.',
            'created_at' => '2012-10-12 08:59:46'
        ]);

        CustomerNote::create([
            'id' => 1142,
            'customer_id' => 2383,
            'user_id' => 1,
            'note' => 'Done, paid, 22.00 due for USB stick',
            'created_at' => '2012-10-12 09:00:23'
        ]);

        CustomerNote::create([
            'id' => 1143,
            'customer_id' => 16812,
            'user_id' => 1,
            'note' => 'done paid',
            'created_at' => '2012-10-12 09:00:57'
        ]);

        CustomerNote::create([
            'id' => 1144,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'text',
            'created_at' => '2012-10-12 09:02:21'
        ]);

        CustomerNote::create([
            'id' => 1145,
            'customer_id' => 13964,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-12 09:13:03'
        ]);

        CustomerNote::create([
            'id' => 1146,
            'customer_id' => 13964,
            'user_id' => 1,
            'note' => 'Fit SV ant & STB',
            'created_at' => '2012-10-12 09:14:14'
        ]);

        CustomerNote::create([
            'id' => 1147,
            'customer_id' => 13964,
            'user_id' => 1,
            'note' => 'Confiremd',
            'created_at' => '2012-10-12 09:16:34'
        ]);

        CustomerNote::create([
            'id' => 1148,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-12 09:20:18'
        ]);

        CustomerNote::create([
            'id' => 4844,
            'customer_id' => 16825,
            'user_id' => 1,
            'note' => 'Buy ladders at Chadwicks',
            'created_at' => '2015-04-19 10:34:55'
        ]);

        CustomerNote::create([
            'id' => 4845,
            'customer_id' => 16825,
            'user_id' => 1,
            'note' => 'Switch Eircom router and set up for Suresignal',
            'created_at' => '2015-04-19 10:35:23'
        ]);

        CustomerNote::create([
            'id' => 1151,
            'customer_id' => 13057,
            'user_id' => 1,
            'note' => 'Confirmed',
            'created_at' => '2012-10-12 10:01:38'
        ]);

        CustomerNote::create([
            'id' => 1152,
            'customer_id' => 16814,
            'user_id' => 1,
            'note' => 'Trish, 087 1314158',
            'created_at' => '2012-10-12 10:48:50'
        ]);

        CustomerNote::create([
            'id' => 1153,
            'customer_id' => 15770,
            'user_id' => 1,
            'note' => '		Connect two other rooms to existing sky box with RC eye. 50.00 for eyes + 45 for amp + callout and labour',
            'created_at' => '2012-10-12 14:46:57'
        ]);

        CustomerNote::create([
            'id' => 1154,
            'customer_id' => 15770,
            'user_id' => 1,
            'note' => 'may want 2 x SV STB and SV ant instead quoted 350.00',
            'created_at' => '2012-10-12 14:49:10'
        ]);

        CustomerNote::create([
            'id' => 1155,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'no pics on new TV, not home Saturday, prov booked for Tuesday. ',
            'created_at' => '2012-10-12 15:32:19'
        ]);

        CustomerNote::create([
            'id' => 1156,
            'customer_id' => 16843,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-10-15 08:45:39'
        ]);

        CustomerNote::create([
            'id' => 1157,
            'customer_id' => 13007,
            'user_id' => 1,
            'note' => '		Quoted Fit SV STB, 79.00 + 49.00, cust will think about it.',
            'created_at' => '2012-10-15 08:52:57'
        ]);

        CustomerNote::create([
            'id' => 1158,
            'customer_id' => 16844,
            'user_id' => 1,
            'note' => 'Fit SV ant to one point, has SV STB, has new unit, wants cable to run thru unit',
            'created_at' => '2012-10-15 09:00:58'
        ]);

        CustomerNote::create([
            'id' => 1159,
            'customer_id' => 16739,
            'user_id' => 1,
            'note' => 'Missing BBC 3 and 4 ',
            'created_at' => '2012-10-15 10:12:32'
        ]);

        CustomerNote::create([
            'id' => 1160,
            'customer_id' => 3448,
            'user_id' => 1,
            'note' => 'Prob recording with sky+, tried second box, same prob, sounds like dish or signal problem. Connect second box to another room as FTA box, wont record without viewing card, but run 2 cables just in case.',
            'created_at' => '2012-10-15 10:31:03'
        ]);

        CustomerNote::create([
            'id' => 1161,
            'customer_id' => 13046,
            'user_id' => 1,
            'note' => '		Fit aerial and saorview box.  087 9720999',
            'created_at' => '2012-10-15 11:13:33'
        ]);

        CustomerNote::create([
            'id' => 1162,
            'customer_id' => 10917,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-15 11:31:04'
        ]);

        CustomerNote::create([
            'id' => 1163,
            'customer_id' => 12307,
            'user_id' => 1,
            'note' => 'fitted 2 x FTAC sys ',
            'created_at' => '2012-10-15 13:04:31'
        ]);

        CustomerNote::create([
            'id' => 1164,
            'customer_id' => 12307,
            'user_id' => 1,
            'note' => 'paid 599.00 balance ',
            'created_at' => '2012-10-15 13:06:59'
        ]);

        CustomerNote::create([
            'id' => 1165,
            'customer_id' => 12307,
            'user_id' => 1,
            'note' => 'Wants new TV, KD to discount',
            'created_at' => '2012-10-15 13:08:30'
        ]);

        CustomerNote::create([
            'id' => 1166,
            'customer_id' => 16838,
            'user_id' => 1,
            'note' => 'Kd to deliver memory stick. Bal o/s €384.00',
            'created_at' => '2012-10-15 13:32:40'
        ]);

        CustomerNote::create([
            'id' => 1167,
            'customer_id' => 1144,
            'user_id' => 1,
            'note' => 'Call to house re SV ant.',
            'created_at' => '2012-10-15 13:33:54'
        ]);

        CustomerNote::create([
            'id' => 1168,
            'customer_id' => 15819,
            'user_id' => 1,
            'note' => 'Done paid ',
            'created_at' => '2012-10-15 14:28:39'
        ]);

        CustomerNote::create([
            'id' => 1169,
            'customer_id' => 16845,
            'user_id' => 1,
            'note' => 'Fit temp CCTV cam',
            'created_at' => '2012-10-15 14:44:45'
        ]);

        CustomerNote::create([
            'id' => 1170,
            'customer_id' => 13760,
            'user_id' => 1,
            'note' => '		Quoted 650.00 for 3 combi STBs. Satellite signal present at three points, SV may also be there too. 320 GB HDD 99.00',
            'created_at' => '2012-10-15 15:20:35'
        ]);

        CustomerNote::create([
            'id' => 1171,
            'customer_id' => 14085,
            'user_id' => 1,
            'note' => 'Re fit existing Sky boxes on two Tvs, currently has 2 FTA boxes. 60.00- 70.00',
            'created_at' => '2012-10-15 15:26:52'
        ]);

        CustomerNote::create([
            'id' => 1172,
            'customer_id' => 14262,
            'user_id' => 1,
            'note' => 'FTAC, connect kitchen to SV signal also',
            'created_at' => '2012-10-15 15:51:23'
        ]);

        CustomerNote::create([
            'id' => 1173,
            'customer_id' => 14262,
            'user_id' => 1,
            'note' => 'Confirmed 9.00am tuesday Oct 30th',
            'created_at' => '2012-10-15 15:53:13'
        ]);

        CustomerNote::create([
            'id' => 1174,
            'customer_id' => 14262,
            'user_id' => 1,
            'note' => 'Paid €100.00 deposit',
            'created_at' => '2012-10-15 15:53:54'
        ]);

        CustomerNote::create([
            'id' => 1175,
            'customer_id' => 14262,
            'user_id' => 1,
            'note' => 'Confirmed 9.00am tuesday Oct 30th',
            'created_at' => '2012-10-15 15:54:17'
        ]);

        CustomerNote::create([
            'id' => 1176,
            'customer_id' => 6767,
            'user_id' => 1,
            'note' => 'Fit SV ant and fit 2 SV STBs and connect 2 SV TVs to new ant. Estimate 400.00',
            'created_at' => '2012-10-15 16:19:27'
        ]);

        CustomerNote::create([
            'id' => 1177,
            'customer_id' => 6767,
            'user_id' => 1,
            'note' => 'Deposit 50.00 paid',
            'created_at' => '2012-10-15 16:19:41'
        ]);

        CustomerNote::create([
            'id' => 1178,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'problem only with BBC FTAs. ',
            'created_at' => '2012-10-15 16:23:27'
        ]);

        CustomerNote::create([
            'id' => 1179,
            'customer_id' => 16736,
            'user_id' => 1,
            'note' => 'Stand off bracket required for Sky install.',
            'created_at' => '2012-10-16 08:04:52'
        ]);

        CustomerNote::create([
            'id' => 1180,
            'customer_id' => 15220,
            'user_id' => 1,
            'note' => 'prov for early nnext week, home mon tues, send text',
            'created_at' => '2012-10-16 08:14:34'
        ]);

        CustomerNote::create([
            'id' => 1181,
            'customer_id' => 16843,
            'user_id' => 1,
            'note' => 'Cancelled',
            'created_at' => '2012-10-16 08:24:30'
        ]);

        CustomerNote::create([
            'id' => 1325,
            'customer_id' => 16736,
            'user_id' => 1,
            'note' => 'ring beforehand',
            'created_at' => '2012-10-24 13:10:16'
        ]);

        CustomerNote::create([
            'id' => 1183,
            'customer_id' => 14989,
            'user_id' => 1,
            'note' => 'Sky no pics',
            'created_at' => '2012-10-16 08:49:26'
        ]);

        CustomerNote::create([
            'id' => 1184,
            'customer_id' => 14989,
            'user_id' => 1,
            'note' => 'Work 056 7797000',
            'created_at' => '2012-10-16 08:50:11'
        ]);

        CustomerNote::create([
            'id' => 1185,
            'customer_id' => 16792,
            'user_id' => 1,
            'note' => 'FTAC and wants SV or maybe FTAC in kitchen',
            'created_at' => '2012-10-16 09:18:45'
        ]);

        CustomerNote::create([
            'id' => 1186,
            'customer_id' => 8054,
            'user_id' => 1,
            'note' => 'Fitted FTAD HDMI 1 , Samsung paid 399.00 cheque',
            'created_at' => '2012-10-16 10:11:39'
        ]);

        CustomerNote::create([
            'id' => 1187,
            'customer_id' => 16791,
            'user_id' => 1,
            'note' => 'OK with 26 LED instead of LCD, 329.00, also sort FTA at same TV, poss SV ant also.',
            'created_at' => '2012-10-16 10:19:31'
        ]);

        CustomerNote::create([
            'id' => 1188,
            'customer_id' => 16777,
            'user_id' => 1,
            'note' => 'done paid',
            'created_at' => '2012-10-16 10:28:22'
        ]);

        CustomerNote::create([
            'id' => 1189,
            'customer_id' => 16838,
            'user_id' => 1,
            'note' => 'done below',
            'created_at' => '2012-10-16 10:28:55'
        ]);

        CustomerNote::create([
            'id' => 1190,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'no reply',
            'created_at' => '2012-10-16 10:30:37'
        ]);

        CustomerNote::create([
            'id' => 1191,
            'customer_id' => 16846,
            'user_id' => 1,
            'note' => 'Survey',
            'created_at' => '2012-10-16 10:44:49'
        ]);

        CustomerNote::create([
            'id' => 1192,
            'customer_id' => 15062,
            'user_id' => 1,
            'note' => 'box returned and paid',
            'created_at' => '2012-10-16 10:53:39'
        ]);

        CustomerNote::create([
            'id' => 1193,
            'customer_id' => 16675,
            'user_id' => 1,
            'note' => 'paid cheque',
            'created_at' => '2012-10-16 10:54:12'
        ]);

        CustomerNote::create([
            'id' => 1194,
            'customer_id' => 16792,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-16 11:03:33'
        ]);

        CustomerNote::create([
            'id' => 1195,
            'customer_id' => 1144,
            'user_id' => 1,
            'note' => 'Fit 3 x SV STB, may need diplexer on roof disconn',
            'created_at' => '2012-10-16 11:05:21'
        ]);

        CustomerNote::create([
            'id' => 1196,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'all done here, paid',
            'created_at' => '2012-10-16 11:06:59'
        ]);

        CustomerNote::create([
            'id' => 1197,
            'customer_id' => 16847,
            'user_id' => 1,
            'note' => 'Fit SV ant',
            'created_at' => '2012-10-16 11:46:29'
        ]);

        CustomerNote::create([
            'id' => 1198,
            'customer_id' => 16661,
            'user_id' => 1,
            'note' => 'Dorethy Murray  7 Lodge Court, 059 9773288- 087 2623281 Fit Sv antenna to existing TV',
            'created_at' => '2012-10-16 12:08:54'
        ]);

        CustomerNote::create([
            'id' => 1199,
            'customer_id' => 16844,
            'user_id' => 1,
            'note' => '		Key in reception drawer. ',
            'created_at' => '2012-10-16 12:11:18'
        ]);

        CustomerNote::create([
            'id' => 1200,
            'customer_id' => 16844,
            'user_id' => 1,
            'note' => 'Paid 50.00 deposit',
            'created_at' => '2012-10-16 12:11:01'
        ]);

        CustomerNote::create([
            'id' => 1201,
            'customer_id' => 16848,
            'user_id' => 1,
            'note' => 'Fit customers dish and connect to 2 Saorview combi boxes. fit SV ant also. ',
            'created_at' => '2012-10-16 14:10:51'
        ]);

        CustomerNote::create([
            'id' => 1202,
            'customer_id' => 1844,
            'user_id' => 1,
            'note' => 'Fit SV ant and connect to three TVs. Cabling already there. 180.00. TVs may be SV ready, stick box in where required. 99.00 per STB',
            'created_at' => '2012-10-16 15:29:17'
        ]);

        CustomerNote::create([
            'id' => 1203,
            'customer_id' => 1408,
            'user_id' => 1,
            'note' => 'no SV sig on bed room STB, advised may be chargable ',
            'created_at' => '2012-10-16 15:40:06'
        ]);

        CustomerNote::create([
            'id' => 1204,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => 'no ans to mobile and landline',
            'created_at' => '2012-10-16 15:59:45'
        ]);

        CustomerNote::create([
            'id' => 1205,
            'customer_id' => 15385,
            'user_id' => 1,
            'note' => 'SMS account overdue',
            'created_at' => '2012-10-16 15:59:59'
        ]);

        CustomerNote::create([
            'id' => 1206,
            'customer_id' => 14085,
            'user_id' => 1,
            'note' => 'Job done KD 60.00 paid',
            'created_at' => '2012-10-16 18:08:43'
        ]);

        CustomerNote::create([
            'id' => 1207,
            'customer_id' => 16762,
            'user_id' => 1,
            'note' => 'Saorsat done ID Paid 400.00',
            'created_at' => '2012-10-16 18:11:12'
        ]);

        CustomerNote::create([
            'id' => 1208,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'Hoping to do Sat morning with ID',
            'created_at' => '2012-10-16 18:14:19'
        ]);

        CustomerNote::create([
            'id' => 1245,
            'customer_id' => 16823,
            'user_id' => 1,
            'note' => 'done paid auto sacrt',
            'created_at' => '2012-10-18 16:31:22'
        ]);

        CustomerNote::create([
            'id' => 1246,
            'customer_id' => 16751,
            'user_id' => 1,
            'note' => 'done paid kilduff mha and psu',
            'created_at' => '2012-10-18 16:32:10'
        ]);

        CustomerNote::create([
            'id' => 1213,
            'customer_id' => 16849,
            'user_id' => 1,
            'note' => 'Has 2 SVs, not working. may require SV antenna. ',
            'created_at' => '2012-10-17 09:06:13'
        ]);

        CustomerNote::create([
            'id' => 1214,
            'customer_id' => 16846,
            'user_id' => 1,
            'note' => 'To supply and fit:\r\n\r\n1	Combination STB for Den                                     €189.00\r\n2	Combination SEB for Sitting Room                    €189.00\r\n3	32” LED TV for dining room                                  €469.00\r\n4	Wall bracket                                                               €069.00\r\n5	Saorview antenna                                                   €025.00\r\n6	Diplexers & splitters                                               €042.00\r\n7	Labour                                                                          €440.00\r\n8	Combination STB, dish & antenna                     €399.00\r\n\r\nTotal                                                                              €1,822.00\r\n\r\nFit 32” TV to wall bracket in dining room. \r\nChase wall in Den for HDMI, mains and aerial cables to TV.\r\nFit combination set top box to sitting room and den.\r\nFit Saorview antenna and connect to existing dish. (check dish)\r\nFit combination STB system at 7 Hollypark Lawn\r\n',
            'created_at' => '2012-10-17 09:31:05'
        ]);

        CustomerNote::create([
            'id' => 1215,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => 'Call ASAP for install',
            'created_at' => '2012-10-17 09:42:40'
        ]);

        CustomerNote::create([
            'id' => 1216,
            'customer_id' => 16352,
            'user_id' => 1,
            'note' => 'Fit Combi STB 169.00 after six today',
            'created_at' => '2012-10-17 09:57:18'
        ]);

        CustomerNote::create([
            'id' => 1217,
            'customer_id' => 16845,
            'user_id' => 1,
            'note' => 'Call to price 4 cam CCTV system',
            'created_at' => '2012-10-17 10:53:56'
        ]);

        CustomerNote::create([
            'id' => 1218,
            'customer_id' => 15810,
            'user_id' => 1,
            'note' => 'No sat sig, Saorsat install, 3 boxes',
            'created_at' => '2012-10-17 10:59:29'
        ]);

        CustomerNote::create([
            'id' => 1219,
            'customer_id' => 16637,
            'user_id' => 1,
            'note' => 'KD late pm, needs to be confirmed with customer',
            'created_at' => '2012-10-17 11:11:18'
        ]);

        CustomerNote::create([
            'id' => 1220,
            'customer_id' => 16789,
            'user_id' => 1,
            'note' => 'BBC 1 pics breaking up. Will monitor and come back to  us.',
            'created_at' => '2012-10-17 13:08:35'
        ]);

        CustomerNote::create([
            'id' => 1221,
            'customer_id' => 14026,
            'user_id' => 1,
            'note' => 'Fit 2 SV STBs to 2 rooms, may require aerial and cabling. Has no other source of TV only RTE',
            'created_at' => '2012-10-17 13:24:02'
        ]);

        CustomerNote::create([
            'id' => 1222,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => 'new contact # 087 2163984',
            'created_at' => '2012-10-17 13:37:00'
        ]);

        CustomerNote::create([
            'id' => 1223,
            'customer_id' => 16032,
            'user_id' => 1,
            'note' => '		FTAC + 2 SV STB. 600.00 ish',
            'created_at' => '2012-10-17 14:55:28'
        ]);

        CustomerNote::create([
            'id' => 1224,
            'customer_id' => 16850,
            'user_id' => 1,
            'note' => '		Fit 2 SV STBs and antenna. May be signal prob here. Might also be interested in Saorsat BMW525',
            'created_at' => '2012-10-17 15:28:03'
        ]);

        CustomerNote::create([
            'id' => 1225,
            'customer_id' => 16657,
            'user_id' => 1,
            'note' => '		2 x FTAC Triax 537 previous, missing channels now. advised new file available post mount leinster',
            'created_at' => '2012-10-17 15:51:42'
        ]);

        CustomerNote::create([
            'id' => 1226,
            'customer_id' => 16352,
            'user_id' => 1,
            'note' => 'Fitted box for customer, HDMI lead also, 184.00 paid cheque, no SV connected to STB, connected to customers TV instead.',
            'created_at' => '2012-10-17 18:24:17'
        ]);

        CustomerNote::create([
            'id' => 1227,
            'customer_id' => 16846,
            'user_id' => 1,
            'note' => 'Go ahead for Saturday',
            'created_at' => '2012-10-18 09:21:15'
        ]);

        CustomerNote::create([
            'id' => 1228,
            'customer_id' => 16032,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-18 09:30:28'
        ]);

        CustomerNote::create([
            'id' => 1229,
            'customer_id' => 10341,
            'user_id' => 1,
            'note' => 'Gate code 1412\r\nApp code 1234\r\n',
            'created_at' => '2012-10-18 09:38:47'
        ]);

        CustomerNote::create([
            'id' => 1230,
            'customer_id' => 16800,
            'user_id' => 1,
            'note' => 'Confirmed. ',
            'created_at' => '2012-10-18 09:54:20'
        ]);

        CustomerNote::create([
            'id' => 1231,
            'customer_id' => 16814,
            'user_id' => 1,
            'note' => 'Call to house for key if going to be after 12.00 on previous job',
            'created_at' => '2012-10-18 11:30:58'
        ]);

        CustomerNote::create([
            'id' => 1232,
            'customer_id' => 6382,
            'user_id' => 1,
            'note' => 'Confimerd',
            'created_at' => '2012-10-18 11:51:40'
        ]);

        CustomerNote::create([
            'id' => 1233,
            'customer_id' => 15819,
            'user_id' => 1,
            'note' => 'Kitchen scart, sitting HDMI 1.\r\n',
            'created_at' => '2012-10-18 12:36:56'
        ]);

        CustomerNote::create([
            'id' => 1234,
            'customer_id' => 13964,
            'user_id' => 1,
            'note' => 'Double combi, scart front room, HDMI dining paid ',
            'created_at' => '2012-10-18 12:40:03'
        ]);

        CustomerNote::create([
            'id' => 1235,
            'customer_id' => 13013,
            'user_id' => 1,
            'note' => 'connect upstairs to to SV ant and retune to ch23',
            'created_at' => '2012-10-18 14:19:26'
        ]);

        CustomerNote::create([
            'id' => 1236,
            'customer_id' => 3336,
            'user_id' => 1,
            'note' => 'Confirmed',
            'created_at' => '2012-10-18 14:23:18'
        ]);

        CustomerNote::create([
            'id' => 1237,
            'customer_id' => 16851,
            'user_id' => 1,
            'note' => 'Fit SV STB, has antenna and good pic already.',
            'created_at' => '2012-10-18 14:33:15'
        ]);

        CustomerNote::create([
            'id' => 1238,
            'customer_id' => 16852,
            'user_id' => 1,
            'note' => '3 x SV STB, 1 conn to other TV, ! x SV ant. Estimate €500.00',
            'created_at' => '2012-10-18 15:49:59'
        ]);

        CustomerNote::create([
            'id' => 1239,
            'customer_id' => 16853,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-10-18 15:52:51'
        ]);

        CustomerNote::create([
            'id' => 1240,
            'customer_id' => 16854,
            'user_id' => 1,
            'note' => 'SV STB and ant',
            'created_at' => '2012-10-18 16:09:23'
        ]);

        CustomerNote::create([
            'id' => 1241,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'high signal loss on customers internal cable, left cable for customer to run',
            'created_at' => '2012-10-18 16:10:25'
        ]);

        CustomerNote::create([
            'id' => 1242,
            'customer_id' => 16792,
            'user_id' => 1,
            'note' => 'FTAC + SV STB 500.00 paid',
            'created_at' => '2012-10-18 16:11:23'
        ]);

        CustomerNote::create([
            'id' => 1243,
            'customer_id' => 11003,
            'user_id' => 1,
            'note' => 'Done paid 475.00',
            'created_at' => '2012-10-18 16:11:57'
        ]);

        CustomerNote::create([
            'id' => 1244,
            'customer_id' => 6382,
            'user_id' => 1,
            'note' => 'done 375.00 ',
            'created_at' => '2012-10-18 16:12:33'
        ]);

        CustomerNote::create([
            'id' => 1247,
            'customer_id' => 16789,
            'user_id' => 1,
            'note' => 'FTAC done 399 paid',
            'created_at' => '2012-10-18 16:32:45'
        ]);

        CustomerNote::create([
            'id' => 1248,
            'customer_id' => 10917,
            'user_id' => 1,
            'note' => 'FTAC own dish 349.00 paid ',
            'created_at' => '2012-10-18 16:33:30'
        ]);

        CustomerNote::create([
            'id' => 1249,
            'customer_id' => 13057,
            'user_id' => 1,
            'note' => 'Done fTAC paid auto scart 359.00 plus deposit',
            'created_at' => '2012-10-18 16:34:16'
        ]);

        CustomerNote::create([
            'id' => 1250,
            'customer_id' => 16797,
            'user_id' => 1,
            'note' => 'Done will drop to HBP to pay',
            'created_at' => '2012-10-18 16:34:55'
        ]);

        CustomerNote::create([
            'id' => 1251,
            'customer_id' => 16797,
            'user_id' => 1,
            'note' => 'Paid cheque KD',
            'created_at' => '2012-10-19 08:45:38'
        ]);

        CustomerNote::create([
            'id' => 1252,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => '						FTAC has dish 349.00 any  Thurs or Fri, bring modulator also may want existing receiver fitted in other room',
            'created_at' => '2012-10-19 08:52:30'
        ]);

        CustomerNote::create([
            'id' => 1253,
            'customer_id' => 16814,
            'user_id' => 1,
            'note' => 'Paid €165.00 cash',
            'created_at' => '2012-10-19 09:06:48'
        ]);

        CustomerNote::create([
            'id' => 1254,
            'customer_id' => 16855,
            'user_id' => 1,
            'note' => '		Fit FTAC, may want something for second set',
            'created_at' => '2012-10-19 10:49:47'
        ]);

        CustomerNote::create([
            'id' => 1255,
            'customer_id' => 16856,
            'user_id' => 1,
            'note' => 'Fit SV ant and one SV STB',
            'created_at' => '2012-10-19 11:13:00'
        ]);

        CustomerNote::create([
            'id' => 1256,
            'customer_id' => 16456,
            'user_id' => 1,
            'note' => 'Go ahead',
            'created_at' => '2012-10-19 11:49:40'
        ]);

        CustomerNote::create([
            'id' => 1257,
            'customer_id' => 16857,
            'user_id' => 1,
            'note' => 'Sky plus wont record, bring replacement',
            'created_at' => '2012-10-19 13:41:40'
        ]);

        CustomerNote::create([
            'id' => 1258,
            'customer_id' => 16795,
            'user_id' => 1,
            'note' => 'Confirmed Monday',
            'created_at' => '2012-10-19 14:04:27'
        ]);

        CustomerNote::create([
            'id' => 1259,
            'customer_id' => 16851,
            'user_id' => 1,
            'note' => 'Confirmed KD ',
            'created_at' => '2012-10-19 14:05:20'
        ]);

        CustomerNote::create([
            'id' => 1260,
            'customer_id' => 16858,
            'user_id' => 1,
            'note' => '		Fit SV STB and connect new TV to aerial. Has aerial. This might be an aerial from electro or someone, tell him to take it back, we are not installing someone else feets aerial \r\n.',
            'created_at' => '2012-10-30 20:05:19'
        ]);

        CustomerNote::create([
            'id' => 1261,
            'customer_id' => 16859,
            'user_id' => 1,
            'note' => 'Loose conn at back of Sky box.',
            'created_at' => '2012-10-19 14:52:35'
        ]);

        CustomerNote::create([
            'id' => 1262,
            'customer_id' => 9646,
            'user_id' => 1,
            'note' => 'Moved Sky box, needs cable run from dish to new room',
            'created_at' => '2012-10-19 15:02:38'
        ]);

        CustomerNote::create([
            'id' => 1263,
            'customer_id' => 9646,
            'user_id' => 1,
            'note' => 'couldnt wait three weeks, wanted name of our compeditors!!!!!!!',
            'created_at' => '2012-10-19 15:04:44'
        ]);

        CustomerNote::create([
            'id' => 1264,
            'customer_id' => 13964,
            'user_id' => 1,
            'note' => 'no RTE on one combi',
            'created_at' => '2012-10-19 15:45:46'
        ]);

        CustomerNote::create([
            'id' => 1265,
            'customer_id' => 14026,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-10-19 16:05:59'
        ]);

        CustomerNote::create([
            'id' => 1266,
            'customer_id' => 16824,
            'user_id' => 1,
            'note' => 'Comfirmed for tuesday Customer home from four thirty ',
            'created_at' => '2012-10-20 12:45:15'
        ]);

        CustomerNote::create([
            'id' => 1267,
            'customer_id' => 16474,
            'user_id' => 1,
            'note' => 'Bank of Ireland\r\nParliament St.\r\nKilkenny\r\n\r\nSort Code: 90.60.64\r\nAccount no: 75132892',
            'created_at' => '2012-10-22 08:38:59'
        ]);

        CustomerNote::create([
            'id' => 1268,
            'customer_id' => 16846,
            'user_id' => 1,
            'note' => 'Fitted mains ext lead 25.00 + HDMI lead',
            'created_at' => '2012-10-22 08:42:38'
        ]);

        CustomerNote::create([
            'id' => 1269,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'Customer has cable run, call to reconnect',
            'created_at' => '2012-10-22 09:05:58'
        ]);

        CustomerNote::create([
            'id' => 1270,
            'customer_id' => 15996,
            'user_id' => 1,
            'note' => 'faulty Technistar PSU',
            'created_at' => '2012-10-22 09:19:19'
        ]);

        CustomerNote::create([
            'id' => 1271,
            'customer_id' => 16791,
            'user_id' => 1,
            'note' => 'Cancelled ',
            'created_at' => '2012-10-22 11:30:54'
        ]);

        CustomerNote::create([
            'id' => 1272,
            'customer_id' => 14860,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-10-22 11:51:14'
        ]);

        CustomerNote::create([
            'id' => 1273,
            'customer_id' => 16807,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-22 12:00:59'
        ]);

        CustomerNote::create([
            'id' => 1274,
            'customer_id' => 16805,
            'user_id' => 1,
            'note' => '		confirmed, call to shop',
            'created_at' => '2012-10-22 12:02:37'
        ]);

        CustomerNote::create([
            'id' => 1275,
            'customer_id' => 1844,
            'user_id' => 1,
            'note' => 'confirmed, call when on way',
            'created_at' => '2012-10-22 12:09:05'
        ]);

        CustomerNote::create([
            'id' => 1276,
            'customer_id' => 13866,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-22 12:11:51'
        ]);

        CustomerNote::create([
            'id' => 1277,
            'customer_id' => 16844,
            'user_id' => 1,
            'note' => 'Not confirmed Text',
            'created_at' => '2012-10-22 12:12:21'
        ]);

        CustomerNote::create([
            'id' => 1278,
            'customer_id' => 13046,
            'user_id' => 1,
            'note' => 'Prov if have time',
            'created_at' => '2012-10-22 12:13:36'
        ]);

        CustomerNote::create([
            'id' => 1279,
            'customer_id' => 7839,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-22 12:26:31'
        ]);

        CustomerNote::create([
            'id' => 1280,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => '		Confirmed. Friday first thing. ',
            'created_at' => '2012-10-22 12:32:06'
        ]);

        CustomerNote::create([
            'id' => 1281,
            'customer_id' => 16842,
            'user_id' => 1,
            'note' => 'confirmed for midday',
            'created_at' => '2012-10-22 12:34:39'
        ]);

        CustomerNote::create([
            'id' => 1282,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => '		OK now',
            'created_at' => '2012-11-05 09:46:37'
        ]);

        CustomerNote::create([
            'id' => 1283,
            'customer_id' => 16852,
            'user_id' => 1,
            'note' => 'got new tvs instead',
            'created_at' => '2012-10-22 12:55:49'
        ]);

        CustomerNote::create([
            'id' => 1284,
            'customer_id' => 1408,
            'user_id' => 1,
            'note' => 'Ian called, sorted',
            'created_at' => '2012-10-22 12:56:58'
        ]);

        CustomerNote::create([
            'id' => 1285,
            'customer_id' => 16853,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-22 12:59:33'
        ]);

        CustomerNote::create([
            'id' => 1286,
            'customer_id' => 16860,
            'user_id' => 1,
            'note' => 'FTAC',
            'created_at' => '2012-10-22 13:16:15'
        ]);

        CustomerNote::create([
            'id' => 1287,
            'customer_id' => 16860,
            'user_id' => 1,
            'note' => 'will drop to office deposit',
            'created_at' => '2012-10-22 13:18:08'
        ]);

        CustomerNote::create([
            'id' => 1288,
            'customer_id' => 13964,
            'user_id' => 1,
            'note' => 'replaced 2 psu, ok now',
            'created_at' => '2012-10-22 13:28:57'
        ]);

        CustomerNote::create([
            'id' => 1289,
            'customer_id' => 15996,
            'user_id' => 1,
            'note' => '		replaced PSU at shop, customer to return faulty PSU',
            'created_at' => '2012-10-24 10:54:15'
        ]);

        CustomerNote::create([
            'id' => 1290,
            'customer_id' => 16861,
            'user_id' => 1,
            'note' => '		FTAC & SV ant',
            'created_at' => '2012-10-22 14:28:46'
        ]);

        CustomerNote::create([
            'id' => 1291,
            'customer_id' => 16032,
            'user_id' => 1,
            'note' => 'cant get combi on tv',
            'created_at' => '2012-10-22 15:24:25'
        ]);

        CustomerNote::create([
            'id' => 1292,
            'customer_id' => 16837,
            'user_id' => 1,
            'note' => 'cables in for two more sv connections',
            'created_at' => '2012-10-22 16:08:55'
        ]);

        CustomerNote::create([
            'id' => 1293,
            'customer_id' => 16851,
            'user_id' => 1,
            'note' => 'Fitted connected HDMI 1 Philips TV, used customers ant here. ',
            'created_at' => '2012-10-22 18:29:34'
        ]);

        CustomerNote::create([
            'id' => 1294,
            'customer_id' => 16846,
            'user_id' => 1,
            'note' => 'Job done, paid bank transfer',
            'created_at' => '2012-10-23 07:57:33'
        ]);

        CustomerNote::create([
            'id' => 1295,
            'customer_id' => 3336,
            'user_id' => 1,
            'note' => 'Fitted SV ant in attic and conn to 4 points. Fit one SV STB, 363.00 paid',
            'created_at' => '2012-10-23 07:58:59'
        ]);

        CustomerNote::create([
            'id' => 1296,
            'customer_id' => 16800,
            'user_id' => 1,
            'note' => 'done paid ',
            'created_at' => '2012-10-23 07:59:21'
        ]);

        CustomerNote::create([
            'id' => 1297,
            'customer_id' => 16814,
            'user_id' => 1,
            'note' => 'fitted rc ext instead of new dish',
            'created_at' => '2012-10-23 07:59:55'
        ]);

        CustomerNote::create([
            'id' => 1298,
            'customer_id' => 16795,
            'user_id' => 1,
            'note' => 'fitted combi paid',
            'created_at' => '2012-10-23 08:00:28'
        ]);

        CustomerNote::create([
            'id' => 1299,
            'customer_id' => 16862,
            'user_id' => 1,
            'note' => 'Fit FTAC',
            'created_at' => '2012-10-23 08:40:52'
        ]);

        CustomerNote::create([
            'id' => 1300,
            'customer_id' => 16860,
            'user_id' => 1,
            'note' => 'confirmed, paid 399.00',
            'created_at' => '2012-10-23 08:53:16'
        ]);

        CustomerNote::create([
            'id' => 1301,
            'customer_id' => 16841,
            'user_id' => 1,
            'note' => '		prov for thursday Nov 1st',
            'created_at' => '2012-10-30 20:07:37'
        ]);

        CustomerNote::create([
            'id' => 1302,
            'customer_id' => 16456,
            'user_id' => 1,
            'note' => 'prov thursday nov 1st',
            'created_at' => '2012-10-23 09:03:08'
        ]);

        CustomerNote::create([
            'id' => 1733,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => '		Problem with FTA channels, customer to check if on both boxes and call back',
            'created_at' => '2012-11-26 11:24:59'
        ]);

        CustomerNote::create([
            'id' => 1304,
            'customer_id' => 16857,
            'user_id' => 1,
            'note' => 'prov for friday 26th',
            'created_at' => '2012-10-23 09:09:44'
        ]);

        CustomerNote::create([
            'id' => 1305,
            'customer_id' => 6443,
            'user_id' => 1,
            'note' => 'Retune Triax SD HD 537 x 4. 49.00 + 10.00 + 10.00 + 10.00',
            'created_at' => '2012-10-23 09:15:53'
        ]);

        CustomerNote::create([
            'id' => 1306,
            'customer_id' => 13912,
            'user_id' => 1,
            'note' => 'Combi 2012 date not available',
            'created_at' => '2012-10-23 09:25:36'
        ]);

        CustomerNote::create([
            'id' => 1307,
            'customer_id' => 16810,
            'user_id' => 1,
            'note' => 'son will call for SV STB to self install, prov for saturday if cant work',
            'created_at' => '2012-10-23 09:36:28'
        ]);

        CustomerNote::create([
            'id' => 1308,
            'customer_id' => 16792,
            'user_id' => 1,
            'note' => 'ONE OF THEIR BOXES HAS NO SIGNAL. told customer ian will call this evening.',
            'created_at' => '2012-10-23 09:41:01'
        ]);

        CustomerNote::create([
            'id' => 1309,
            'customer_id' => 16848,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-10-23 11:02:02'
        ]);

        CustomerNote::create([
            'id' => 1310,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-23 12:03:58'
        ]);

        CustomerNote::create([
            'id' => 1311,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => 'go thru everythign here and price BEFORE starting work',
            'created_at' => '2012-10-23 12:09:49'
        ]);

        CustomerNote::create([
            'id' => 1312,
            'customer_id' => 16551,
            'user_id' => 1,
            'note' => 'Install 2 Triax TSC114 rx. KD installed Combi during the summer here. $ way diplexer splitter to three points in total. 199+199+48dip + labour , switch auto off timer',
            'created_at' => '2012-10-23 13:22:09'
        ]);

        CustomerNote::create([
            'id' => 1313,
            'customer_id' => 16551,
            'user_id' => 1,
            'note' => 'Paid deposit 50.00 off 575.00 total',
            'created_at' => '2012-10-23 13:26:50'
        ]);

        CustomerNote::create([
            'id' => 1314,
            'customer_id' => 16816,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-23 13:38:22'
        ]);

        CustomerNote::create([
            'id' => 1315,
            'customer_id' => 16855,
            'user_id' => 1,
            'note' => 'fitted combi 399.00 paid',
            'created_at' => '2012-10-23 15:47:49'
        ]);

        CustomerNote::create([
            'id' => 1316,
            'customer_id' => 3448,
            'user_id' => 1,
            'note' => '273.00',
            'created_at' => '2012-10-24 07:57:36'
        ]);

        CustomerNote::create([
            'id' => 1317,
            'customer_id' => 16736,
            'user_id' => 1,
            'note' => 'Has viewing card. ',
            'created_at' => '2012-10-24 09:08:12'
        ]);

        CustomerNote::create([
            'id' => 1318,
            'customer_id' => 12249,
            'user_id' => 1,
            'note' => '		needs saorview antenna at 2 tvs, also problem with existing FTA',
            'created_at' => '2012-10-24 09:30:26'
        ]);

        CustomerNote::create([
            'id' => 1319,
            'customer_id' => 16063,
            'user_id' => 1,
            'note' => 'Fit SV box on small tv. ',
            'created_at' => '2012-10-24 09:50:40'
        ]);

        CustomerNote::create([
            'id' => 1320,
            'customer_id' => 2227,
            'user_id' => 1,
            'note' => 'Fit 1 SV STB and connect kitchen to SV antenna. Fit combi box to one bed room. ',
            'created_at' => '2012-10-24 10:12:42'
        ]);

        CustomerNote::create([
            'id' => 1321,
            'customer_id' => 16853,
            'user_id' => 1,
            'note' => 'CANCELLED',
            'created_at' => '2012-10-24 11:25:33'
        ]);

        CustomerNote::create([
            'id' => 1322,
            'customer_id' => 16807,
            'user_id' => 1,
            'note' => 'Fitted FTac an conn SV tv 460.00 paid ',
            'created_at' => '2012-10-24 12:23:43'
        ]);

        CustomerNote::create([
            'id' => 1323,
            'customer_id' => 13046,
            'user_id' => 1,
            'note' => 'Wants SV stb and aerial, conn second tv, 250/280',
            'created_at' => '2012-10-24 12:26:28'
        ]);

        CustomerNote::create([
            'id' => 1324,
            'customer_id' => 16725,
            'user_id' => 1,
            'note' => '		fit third saorsat stb 250.00 056 7769161',
            'created_at' => '2012-11-19 16:34:01'
        ]);

        CustomerNote::create([
            'id' => 1326,
            'customer_id' => 11168,
            'user_id' => 1,
            'note' => 'Fit SV STB and connect to existing ant estimate 150.00',
            'created_at' => '2012-10-24 13:31:24'
        ]);

        CustomerNote::create([
            'id' => 1346,
            'customer_id' => 14080,
            'user_id' => 1,
            'note' => '		Fit SV STB at TV downstairs, fit ant if required. 3 three storey building. 2-3 weeks',
            'created_at' => '2012-10-27 09:37:44'
        ]);

        CustomerNote::create([
            'id' => 1328,
            'customer_id' => 3323,
            'user_id' => 1,
            'note' => 'sats intermittent',
            'created_at' => '2012-10-25 09:35:12'
        ]);

        CustomerNote::create([
            'id' => 1329,
            'customer_id' => 16863,
            'user_id' => 1,
            'note' => 'Fit one SV ant and SV STB',
            'created_at' => '2012-10-25 10:13:39'
        ]);

        CustomerNote::create([
            'id' => 1330,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'Call to survey.',
            'created_at' => '2012-10-25 10:15:25'
        ]);

        CustomerNote::create([
            'id' => 1331,
            'customer_id' => 15855,
            'user_id' => 1,
            'note' => 'no pics from Edison combi box',
            'created_at' => '2012-10-25 10:54:54'
        ]);

        CustomerNote::create([
            'id' => 1332,
            'customer_id' => 16864,
            'user_id' => 1,
            'note' => 'No RTE, has old FTA box.',
            'created_at' => '2012-10-25 11:12:37'
        ]);

        CustomerNote::create([
            'id' => 1333,
            'customer_id' => 16865,
            'user_id' => 1,
            'note' => 'FTAC + 32 Tosh LCD €750.00. Deposit paid €100.00',
            'created_at' => '2012-10-25 11:36:36'
        ]);

        CustomerNote::create([
            'id' => 1334,
            'customer_id' => 2227,
            'user_id' => 1,
            'note' => 'cust will call back to confirm',
            'created_at' => '2012-10-25 13:30:42'
        ]);

        CustomerNote::create([
            'id' => 1335,
            'customer_id' => 16866,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB, 260.00',
            'created_at' => '2012-10-25 14:23:01'
        ]);

        CustomerNote::create([
            'id' => 1336,
            'customer_id' => 16866,
            'user_id' => 1,
            'note' => 'Paid deposit €100.00',
            'created_at' => '2012-10-25 14:23:21'
        ]);

        CustomerNote::create([
            'id' => 1337,
            'customer_id' => 14378,
            'user_id' => 1,
            'note' => 'FTA connected to three rooms via RC extr, no signal on new TV in extension. Also has to plug in and out RF to Tv in kitchen.',
            'created_at' => '2012-10-25 14:42:13'
        ]);

        CustomerNote::create([
            'id' => 1338,
            'customer_id' => 15996,
            'user_id' => 1,
            'note' => 'customer having difficulty working one STB',
            'created_at' => '2012-10-25 16:51:36'
        ]);

        CustomerNote::create([
            'id' => 1339,
            'customer_id' => 16810,
            'user_id' => 1,
            'note' => '		087-7711713',
            'created_at' => '2012-10-26 08:38:17'
        ]);

        CustomerNote::create([
            'id' => 1340,
            'customer_id' => 16867,
            'user_id' => 1,
            'note' => 'Fit FTAC has dish, under mountain. may be signal prob here. Fit Technistar even if no SV sig, can call back to fit Saorsat dish',
            'created_at' => '2012-10-26 08:48:25'
        ]);

        CustomerNote::create([
            'id' => 1341,
            'customer_id' => 5580,
            'user_id' => 1,
            'note' => 'explained all DTV history to Joe, will call next week',
            'created_at' => '2012-10-26 09:18:38'
        ]);

        CustomerNote::create([
            'id' => 1342,
            'customer_id' => 16632,
            'user_id' => 1,
            'note' => 'No channels. ',
            'created_at' => '2012-10-26 11:20:05'
        ]);

        CustomerNote::create([
            'id' => 1343,
            'customer_id' => 16868,
            'user_id' => 1,
            'note' => 'Fit FTAC plus maybe more with other tvs',
            'created_at' => '2012-10-26 11:49:21'
        ]);

        CustomerNote::create([
            'id' => 1344,
            'customer_id' => 16868,
            'user_id' => 1,
            'note' => 'Paid deposit €40.00',
            'created_at' => '2012-10-26 11:49:39'
        ]);

        CustomerNote::create([
            'id' => 1345,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'Terr seem to be intermittent, may require MHA, what is signal at present',
            'created_at' => '2012-10-26 14:35:41'
        ]);

        CustomerNote::create([
            'id' => 1347,
            'customer_id' => 13866,
            'user_id' => 1,
            'note' => 'Fitted combi and tri link kit. €284.00 + €150 deposit',
            'created_at' => '2012-10-30 08:55:46'
        ]);

        CustomerNote::create([
            'id' => 1348,
            'customer_id' => 16844,
            'user_id' => 1,
            'note' => 'complete, key returned, paid 180.00 in total',
            'created_at' => '2012-10-30 08:57:52'
        ]);

        CustomerNote::create([
            'id' => 1349,
            'customer_id' => 3448,
            'user_id' => 1,
            'note' => 'Replaced dish and lnb, ran new cable from dish to old fta,paid 250.00, + 30 for sky rc. ',
            'created_at' => '2012-10-30 08:59:04'
        ]);

        CustomerNote::create([
            'id' => 1350,
            'customer_id' => 16824,
            'user_id' => 1,
            'note' => 'one sv ant and stb outside,kilduff levels at set 42db, advised customer mha and psu',
            'created_at' => '2012-10-30 09:03:07'
        ]);

        CustomerNote::create([
            'id' => 1351,
            'customer_id' => 16792,
            'user_id' => 1,
            'note' => 'done, nothing wrong, tv on wrong channel',
            'created_at' => '2012-10-30 09:03:45'
        ]);

        CustomerNote::create([
            'id' => 1352,
            'customer_id' => 1844,
            'user_id' => 1,
            'note' => 'Fitted Sv ant, conn to 2 tvs and 2 sv stbs. 398.00, paid',
            'created_at' => '2012-10-30 09:04:45'
        ]);

        CustomerNote::create([
            'id' => 1353,
            'customer_id' => 16805,
            'user_id' => 1,
            'note' => 'fitted combi stb 349.00, paid ',
            'created_at' => '2012-10-30 09:05:43'
        ]);

        CustomerNote::create([
            'id' => 1354,
            'customer_id' => 2383,
            'user_id' => 1,
            'note' => 'fitted new triax combi, removed triax mod, refund due for mod,',
            'created_at' => '2012-10-30 09:06:32'
        ]);

        CustomerNote::create([
            'id' => 1355,
            'customer_id' => 7839,
            'user_id' => 1,
            'note' => 'fitted ftac with customers dish, ran other cables from dish to existing fta stbs, paid 350.00 plus deposit of 100.00',
            'created_at' => '2012-10-30 09:08:27'
        ]);

        CustomerNote::create([
            'id' => 1356,
            'customer_id' => 15855,
            'user_id' => 1,
            'note' => 'fir combi stb, 249 installed',
            'created_at' => '2012-10-30 09:09:02'
        ]);

        CustomerNote::create([
            'id' => 1357,
            'customer_id' => 16864,
            'user_id' => 1,
            'note' => 'fitted combi sys 399.00',
            'created_at' => '2012-10-30 09:09:46'
        ]);

        CustomerNote::create([
            'id' => 1358,
            'customer_id' => 16860,
            'user_id' => 1,
            'note' => 'fitted ftac, paid',
            'created_at' => '2012-10-30 09:10:17'
        ]);

        CustomerNote::create([
            'id' => 1359,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => 'fitted ftac, paid',
            'created_at' => '2012-10-30 09:10:49'
        ]);

        CustomerNote::create([
            'id' => 1360,
            'customer_id' => 16857,
            'user_id' => 1,
            'note' => 'lose conn at dish, 100.00 paid',
            'created_at' => '2012-10-30 09:12:18'
        ]);

        CustomerNote::create([
            'id' => 1361,
            'customer_id' => 16771,
            'user_id' => 1,
            'note' => 'connected new cables',
            'created_at' => '2012-10-30 09:12:44'
        ]);

        CustomerNote::create([
            'id' => 1362,
            'customer_id' => 16842,
            'user_id' => 1,
            'note' => 'fitted one sv ant and one sv stb, piad 220.00',
            'created_at' => '2012-10-30 09:13:21'
        ]);

        CustomerNote::create([
            'id' => 1363,
            'customer_id' => 16816,
            'user_id' => 1,
            'note' => 'fit sv ant and conn to sv tv, 175.00 paid',
            'created_at' => '2012-10-30 09:14:09'
        ]);

        CustomerNote::create([
            'id' => 1364,
            'customer_id' => 16810,
            'user_id' => 1,
            'note' => 'fitted one sv stb, re-tuned box to kilduff',
            'created_at' => '2012-10-30 09:15:11'
        ]);

        CustomerNote::create([
            'id' => 1365,
            'customer_id' => 15220,
            'user_id' => 1,
            'note' => 'fitted 2 sv stb, 270.00',
            'created_at' => '2012-10-30 09:16:19'
        ]);

        CustomerNote::create([
            'id' => 1366,
            'customer_id' => 15996,
            'user_id' => 1,
            'note' => 'tv on wrong channel',
            'created_at' => '2012-10-30 09:16:47'
        ]);

        CustomerNote::create([
            'id' => 1367,
            'customer_id' => 2227,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-10-30 10:11:34'
        ]);

        CustomerNote::create([
            'id' => 1368,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => 'confirmed, has aerial in attic ',
            'created_at' => '2012-10-30 10:52:12'
        ]);

        CustomerNote::create([
            'id' => 1369,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => 'Fit SV stb to main tv, should be sv signal there. 130 or 250 with ant.',
            'created_at' => '2012-10-30 11:00:18'
        ]);

        CustomerNote::create([
            'id' => 1370,
            'customer_id' => 16456,
            'user_id' => 1,
            'note' => 'prov for Monday TBC',
            'created_at' => '2012-10-30 11:32:38'
        ]);

        CustomerNote::create([
            'id' => 1371,
            'customer_id' => 16837,
            'user_id' => 1,
            'note' => 're con stb cables pulled out by accident',
            'created_at' => '2012-10-30 11:38:27'
        ]);

        CustomerNote::create([
            'id' => 1372,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Fit 22 inch LED on wall bracket, in Sion Rd. Peig O Briens room. Tune other tvs ',
            'created_at' => '2012-10-30 12:05:19'
        ]);

        CustomerNote::create([
            'id' => 1373,
            'customer_id' => 3576,
            'user_id' => 1,
            'note' => 'Fit 32 Tosh LCD €369.00 and SV ant if required. 150.00',
            'created_at' => '2012-10-30 12:41:50'
        ]);

        CustomerNote::create([
            'id' => 1374,
            'customer_id' => 15813,
            'user_id' => 1,
            'note' => 'bought ant and installed himself',
            'created_at' => '2012-10-30 13:02:05'
        ]);

        CustomerNote::create([
            'id' => 1375,
            'customer_id' => 16736,
            'user_id' => 1,
            'note' => 'set up tv an dvd also',
            'created_at' => '2012-10-30 14:09:12'
        ]);

        CustomerNote::create([
            'id' => 1376,
            'customer_id' => 10341,
            'user_id' => 1,
            'note' => 'Bill cancelled aerial upgrade at Ardilea.He said, himself and paul walked around and everyone is OK. I had received go ahead from Bill and told him we had ordered aerials for job.',
            'created_at' => '2012-10-30 14:14:33'
        ]);

        CustomerNote::create([
            'id' => 1377,
            'customer_id' => 16551,
            'user_id' => 1,
            'note' => 'paid balance 525.00',
            'created_at' => '2012-10-30 14:37:04'
        ]);

        CustomerNote::create([
            'id' => 1378,
            'customer_id' => 16551,
            'user_id' => 1,
            'note' => 'confirmed, retune existing box also',
            'created_at' => '2012-10-30 14:38:10'
        ]);

        CustomerNote::create([
            'id' => 1379,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => '		confirmed',
            'created_at' => '2012-10-30 19:55:38'
        ]);

        CustomerNote::create([
            'id' => 1380,
            'customer_id' => 16406,
            'user_id' => 1,
            'note' => '				Missing RTE 1?? one one TV. No pic at all on sceond TV. Advised DTV story.',
            'created_at' => '2012-10-30 15:04:12'
        ]);

        CustomerNote::create([
            'id' => 1381,
            'customer_id' => 4299,
            'user_id' => 1,
            'note' => 'Fit SV ant and connect to two TVs.',
            'created_at' => '2012-10-30 16:07:41'
        ]);

        CustomerNote::create([
            'id' => 1382,
            'customer_id' => 16868,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-10-30 16:09:51'
        ]);

        CustomerNote::create([
            'id' => 1383,
            'customer_id' => 16296,
            'user_id' => 1,
            'note' => '		537 ex dtv, retune for mtl23',
            'created_at' => '2012-10-30 16:58:21'
        ]);

        CustomerNote::create([
            'id' => 1384,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'retune stb and sv tv, check levels and fit mha if required',
            'created_at' => '2012-10-30 17:14:20'
        ]);

        CustomerNote::create([
            'id' => 1385,
            'customer_id' => 8765,
            'user_id' => 1,
            'note' => '		537 , retune',
            'created_at' => '2012-11-05 10:56:37'
        ]);

        CustomerNote::create([
            'id' => 1386,
            'customer_id' => 14262,
            'user_id' => 1,
            'note' => 'job done paid 440.00',
            'created_at' => '2012-10-30 18:16:57'
        ]);

        CustomerNote::create([
            'id' => 1387,
            'customer_id' => 16858,
            'user_id' => 1,
            'note' => '		7721920 Work',
            'created_at' => '2012-10-31 10:55:29'
        ]);

        CustomerNote::create([
            'id' => 1388,
            'customer_id' => 16869,
            'user_id' => 1,
            'note' => 'Fit SV ant to 2 tvs, estimate 185.00',
            'created_at' => '2012-10-31 11:02:47'
        ]);

        CustomerNote::create([
            'id' => 1389,
            'customer_id' => 16806,
            'user_id' => 1,
            'note' => 'fitted combi, 248 cheque, scart',
            'created_at' => '2012-10-31 11:24:47'
        ]);

        CustomerNote::create([
            'id' => 1390,
            'customer_id' => 16858,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-10-31 11:53:24'
        ]);

        CustomerNote::create([
            'id' => 1391,
            'customer_id' => 16841,
            'user_id' => 1,
            'note' => '		confirmed\r\n',
            'created_at' => '2012-10-31 11:58:30'
        ]);

        CustomerNote::create([
            'id' => 1392,
            'customer_id' => 16870,
            'user_id' => 1,
            'note' => 'Cant work existing fta on new tv, advised 49.00 callout',
            'created_at' => '2012-10-31 12:17:52'
        ]);

        CustomerNote::create([
            'id' => 1393,
            'customer_id' => 16736,
            'user_id' => 1,
            'note' => 'fit conduit etc',
            'created_at' => '2012-10-31 12:19:44'
        ]);

        CustomerNote::create([
            'id' => 1394,
            'customer_id' => 13046,
            'user_id' => 1,
            'note' => 'ian reccomend double combi, has fta and no sv, tv has only one scart, ',
            'created_at' => '2012-10-31 12:22:10'
        ]);

        CustomerNote::create([
            'id' => 1395,
            'customer_id' => 16847,
            'user_id' => 1,
            'note' => 'maybe next week ',
            'created_at' => '2012-10-31 12:31:48'
        ]);

        CustomerNote::create([
            'id' => 1396,
            'customer_id' => 13046,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-31 12:32:08'
        ]);

        CustomerNote::create([
            'id' => 1397,
            'customer_id' => 3576,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-10-31 12:32:30'
        ]);

        CustomerNote::create([
            'id' => 1398,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => 'Fit FTAC advised mha',
            'created_at' => '2012-10-31 15:02:02'
        ]);

        CustomerNote::create([
            'id' => 1399,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => '		Fit FTAc and mha if required at Ballyragget, contact Niamh 086 8718206',
            'created_at' => '2012-10-31 15:05:37'
        ]);

        CustomerNote::create([
            'id' => 1400,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => '		Fit FTAC at 12 Thomas feets Square, Kilkenny. Contact Michael . PM Tuesday 2.00',
            'created_at' => '2012-10-31 15:06:38'
        ]);

        CustomerNote::create([
            'id' => 1401,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => '				Agreed €850.00 Paid €200.00 deposit. Balance €650.00',
            'created_at' => '2012-10-31 15:13:05'
        ]);

        CustomerNote::create([
            'id' => 1402,
            'customer_id' => 16872,
            'user_id' => 1,
            'note' => 'Fit combi see Michael Gannon, 62 Glenvale',
            'created_at' => '2012-10-31 15:16:29'
        ]);

        CustomerNote::create([
            'id' => 1403,
            'customer_id' => 16865,
            'user_id' => 1,
            'note' => 'confirmed, ring when comming',
            'created_at' => '2012-10-31 15:19:06'
        ]);

        CustomerNote::create([
            'id' => 1404,
            'customer_id' => 15961,
            'user_id' => 1,
            'note' => 'ex dtv, edison box',
            'created_at' => '2012-10-31 15:22:09'
        ]);

        CustomerNote::create([
            'id' => 1405,
            'customer_id' => 16551,
            'user_id' => 1,
            'note' => 'Fitted two new Triax combis, both hdmi ',
            'created_at' => '2012-10-31 15:28:17'
        ]);

        CustomerNote::create([
            'id' => 1406,
            'customer_id' => 16784,
            'user_id' => 1,
            'note' => 'no terr on one stb',
            'created_at' => '2012-10-31 15:31:42'
        ]);

        CustomerNote::create([
            'id' => 1407,
            'customer_id' => 16784,
            'user_id' => 1,
            'note' => 're tune both boxes',
            'created_at' => '2012-10-31 15:32:56'
        ]);

        CustomerNote::create([
            'id' => 1408,
            'customer_id' => 16870,
            'user_id' => 1,
            'note' => 'done, paid 49.00',
            'created_at' => '2012-10-31 15:46:15'
        ]);

        CustomerNote::create([
            'id' => 1409,
            'customer_id' => 16837,
            'user_id' => 1,
            'note' => 'done paid 49.00',
            'created_at' => '2012-10-31 15:46:38'
        ]);

        CustomerNote::create([
            'id' => 1410,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => '				Mark rang , Advised, €100.00 extra (087 4180049)',
            'created_at' => '2012-10-31 15:59:34'
        ]);

        CustomerNote::create([
            'id' => 1411,
            'customer_id' => 6443,
            'user_id' => 1,
            'note' => 'Retuned to ch 23 and update firmware, paid 79.00',
            'created_at' => '2012-11-01 08:39:29'
        ]);

        CustomerNote::create([
            'id' => 1412,
            'customer_id' => 16736,
            'user_id' => 1,
            'note' => 'fitted sky on stand off bracket and connected master bed to sky rf out and fitted rc extr. Fitted customers new tv and dvd. 356.40 ',
            'created_at' => '2012-11-01 08:47:55'
        ]);

        CustomerNote::create([
            'id' => 1413,
            'customer_id' => 13046,
            'user_id' => 1,
            'note' => 'SV ant to 2 TVs, fit one box combi  to one leg.',
            'created_at' => '2012-11-01 09:11:28'
        ]);

        CustomerNote::create([
            'id' => 1415,
            'customer_id' => 16841,
            'user_id' => 1,
            'note' => 'fitted sv ant to attic and conn to 2 tvs, 53 at set, paid 170.00 + 50.00 ',
            'created_at' => '2012-11-01 10:38:44'
        ]);

        CustomerNote::create([
            'id' => 1416,
            'customer_id' => 16808,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-11-01 14:07:48'
        ]);

        CustomerNote::create([
            'id' => 1417,
            'customer_id' => 3453,
            'user_id' => 1,
            'note' => 'Tune both Triax TSC114 boxes for €49 + €15',
            'created_at' => '2012-11-01 14:46:58'
        ]);

        CustomerNote::create([
            'id' => 1418,
            'customer_id' => 16293,
            'user_id' => 1,
            'note' => 'retune Triax STB',
            'created_at' => '2012-11-01 15:12:57'
        ]);

        CustomerNote::create([
            'id' => 1419,
            'customer_id' => 15107,
            'user_id' => 1,
            'note' => 'Booked for 9.00am sharp Sat AM',
            'created_at' => '2012-11-01 15:24:46'
        ]);

        CustomerNote::create([
            'id' => 1420,
            'customer_id' => 15107,
            'user_id' => 1,
            'note' => 'has 4 tvs , may want combis on two and sv ant to third and forth.',
            'created_at' => '2012-11-01 15:25:39'
        ]);

        CustomerNote::create([
            'id' => 1421,
            'customer_id' => 16746,
            'user_id' => 1,
            'note' => 'Replaced faulty Sky+ HD box with DTV stock. \r\n\r\n4F3106\r\n0362646841\r\n375660719\r\n\r\nJohn Morris\r\n',
            'created_at' => '2012-11-02 09:09:02'
        ]);

        CustomerNote::create([
            'id' => 1422,
            'customer_id' => 13046,
            'user_id' => 1,
            'note' => 'Fitted 2 FTAC paid cheque 649.00',
            'created_at' => '2012-11-02 09:22:11'
        ]);

        CustomerNote::create([
            'id' => 1423,
            'customer_id' => 3576,
            'user_id' => 1,
            'note' => 'Fitted 32 Tosh and SV ant. Paid 519.00',
            'created_at' => '2012-11-02 09:23:33'
        ]);

        CustomerNote::create([
            'id' => 1424,
            'customer_id' => 13866,
            'user_id' => 1,
            'note' => 'Technistar, PSU dead',
            'created_at' => '2012-11-02 10:00:02'
        ]);

        CustomerNote::create([
            'id' => 1425,
            'customer_id' => 16867,
            'user_id' => 1,
            'note' => 'cancalled',
            'created_at' => '2012-11-02 10:14:08'
        ]);

        CustomerNote::create([
            'id' => 1426,
            'customer_id' => 12523,
            'user_id' => 1,
            'note' => 'got new tv, needs fta conn to new tv.',
            'created_at' => '2012-11-02 12:05:55'
        ]);

        CustomerNote::create([
            'id' => 1427,
            'customer_id' => 1221,
            'user_id' => 1,
            'note' => 'Changed Triax TSC114 for Technistar. Tuned for now MT aslo and set up USB recording formating. ',
            'created_at' => '2012-11-02 12:53:47'
        ]);

        CustomerNote::create([
            'id' => 1428,
            'customer_id' => 16874,
            'user_id' => 1,
            'note' => 'Fit RC extr to master bed, estimate 150.00 . Prog remote for Samsung TV',
            'created_at' => '2012-11-02 14:21:26'
        ]);

        CustomerNote::create([
            'id' => 1429,
            'customer_id' => 16875,
            'user_id' => 1,
            'note' => 'Fitted FTAC x 3 ',
            'created_at' => '2012-11-02 16:35:53'
        ]);

        CustomerNote::create([
            'id' => 1430,
            'customer_id' => 16875,
            'user_id' => 1,
            'note' => 'Tune 3 x TSC114',
            'created_at' => '2012-11-02 16:36:35'
        ]);

        CustomerNote::create([
            'id' => 1431,
            'customer_id' => 117,
            'user_id' => 1,
            'note' => 'Retune 4 stbs',
            'created_at' => '2012-11-02 16:49:41'
        ]);

        CustomerNote::create([
            'id' => 1432,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => 'Saorview test, Ref: Mary Drea',
            'created_at' => '2012-11-02 17:18:56'
        ]);

        CustomerNote::create([
            'id' => 1433,
            'customer_id' => 3453,
            'user_id' => 1,
            'note' => 'Tuned two TSC114 box to new MTL23. Paid 60.00',
            'created_at' => '2012-11-05 09:39:12'
        ]);

        CustomerNote::create([
            'id' => 1434,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Fitted 22 LG LCD for Peig O Brien 269 + 45 fitting to existing bkt and Teresa Rochford 269 + 90 for wall bkt and fitting + 60 for coax to antenna. Tune 3 no. TVs in common rooms 25.00 and tune Maire STB 25.00, all for MLT 23 ',
            'created_at' => '2012-11-05 09:44:10'
        ]);

        CustomerNote::create([
            'id' => 1435,
            'customer_id' => 12343,
            'user_id' => 1,
            'note' => 'Fit new wall bkt to existing 22 LG LCD for Teresa Rochford. Run new cable to ant for SV signal. KD tried set top ant, no signal.',
            'created_at' => '2012-11-05 09:45:42'
        ]);

        CustomerNote::create([
            'id' => 1436,
            'customer_id' => 3576,
            'user_id' => 1,
            'note' => 'All done, paid',
            'created_at' => '2012-11-05 09:48:21'
        ]);

        CustomerNote::create([
            'id' => 1437,
            'customer_id' => 16801,
            'user_id' => 1,
            'note' => 'all done, paid 1,200 ',
            'created_at' => '2012-11-05 09:49:36'
        ]);

        CustomerNote::create([
            'id' => 1438,
            'customer_id' => 3323,
            'user_id' => 1,
            'note' => 'cust mixed up with favs list here, no problem FOC, also tuned for MTL23',
            'created_at' => '2012-11-05 09:50:31'
        ]);

        CustomerNote::create([
            'id' => 1439,
            'customer_id' => 15107,
            'user_id' => 1,
            'note' => '		Fitted 2 X combi system 649.00 plus six way split to replace existing dist amp, 22.00 + 50.00. Total €721.00',
            'created_at' => '2012-11-05 09:58:10'
        ]);

        CustomerNote::create([
            'id' => 1440,
            'customer_id' => 16296,
            'user_id' => 1,
            'note' => 'updated firmware and new channel list for MT23. Paid 49.00',
            'created_at' => '2012-11-05 10:08:06'
        ]);

        CustomerNote::create([
            'id' => 1441,
            'customer_id' => 16875,
            'user_id' => 1,
            'note' => 'Tuned 3 STB for MT23. Paid 79.00',
            'created_at' => '2012-11-05 10:09:00'
        ]);

        CustomerNote::create([
            'id' => 1442,
            'customer_id' => 15961,
            'user_id' => 1,
            'note' => 'retuned MT23 on Edison box',
            'created_at' => '2012-11-05 10:09:39'
        ]);

        CustomerNote::create([
            'id' => 1443,
            'customer_id' => 15813,
            'user_id' => 1,
            'note' => 'Customer bought (from us) and fitted SV ant DIY. No pics now.',
            'created_at' => '2012-11-05 10:48:37'
        ]);

        CustomerNote::create([
            'id' => 1444,
            'customer_id' => 8765,
            'user_id' => 1,
            'note' => 'updated firmware and new channel list for MTL23',
            'created_at' => '2012-11-05 10:56:56'
        ]);

        CustomerNote::create([
            'id' => 1445,
            'customer_id' => 13866,
            'user_id' => 1,
            'note' => 'replaced psu with Triax, retuned for MTL23',
            'created_at' => '2012-11-05 10:58:31'
        ]);

        CustomerNote::create([
            'id' => 1446,
            'customer_id' => 16032,
            'user_id' => 1,
            'note' => 'fitted scart lead instead of HDMI cable, sold 32GB USU for recording on Technistar',
            'created_at' => '2012-11-05 10:59:43'
        ]);

        CustomerNote::create([
            'id' => 1447,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'Fit new combi system  and distribute to pub using existing RC extrs. May need to remove existing FTA. Also connect living room to pub Sky. ',
            'created_at' => '2012-11-05 11:02:11'
        ]);

        CustomerNote::create([
            'id' => 1448,
            'customer_id' => 16293,
            'user_id' => 1,
            'note' => 'updated firmwaer and new channel MTL23, paid 49.00',
            'created_at' => '2012-11-05 11:08:14'
        ]);

        CustomerNote::create([
            'id' => 1449,
            'customer_id' => 117,
            'user_id' => 1,
            'note' => 'Fitted 2 537 combis and 2 SV STBs and ant and dish Dec 2011',
            'created_at' => '2012-11-05 11:10:17'
        ]);

        CustomerNote::create([
            'id' => 1450,
            'customer_id' => 117,
            'user_id' => 1,
            'note' => 'retuned all boxes for MT23,paid 94.00',
            'created_at' => '2012-11-05 11:10:49'
        ]);

        CustomerNote::create([
            'id' => 1451,
            'customer_id' => 16854,
            'user_id' => 1,
            'note' => 'will try this week',
            'created_at' => '2012-11-05 11:20:54'
        ]);

        CustomerNote::create([
            'id' => 1452,
            'customer_id' => 197,
            'user_id' => 1,
            'note' => 'Fit 2 x day and night dome cam + MXD + monitor.',
            'created_at' => '2012-11-05 11:53:37'
        ]);

        CustomerNote::create([
            'id' => 1453,
            'customer_id' => 197,
            'user_id' => 1,
            'note' => 'Paid €500.00 deposit cash ',
            'created_at' => '2012-11-05 11:55:15'
        ]);

        CustomerNote::create([
            'id' => 1454,
            'customer_id' => 12503,
            'user_id' => 1,
            'note' => 'Retune Ferguson combi ex DTV. €49.00',
            'created_at' => '2012-11-05 12:05:28'
        ]);

        CustomerNote::create([
            'id' => 1455,
            'customer_id' => 13986,
            'user_id' => 1,
            'note' => 'KD spoke to Richard in shop, prov for Fri - Sat',
            'created_at' => '2012-11-05 12:10:12'
        ]);

        CustomerNote::create([
            'id' => 1456,
            'customer_id' => 16873,
            'user_id' => 1,
            'note' => 'contact Mary Doyle 087 4121983 , cheque in post',
            'created_at' => '2012-11-05 12:31:56'
        ]);

        CustomerNote::create([
            'id' => 1457,
            'customer_id' => 2882,
            'user_id' => 1,
            'note' => 'No sat sig on sky, advised 49.00',
            'created_at' => '2012-11-05 13:34:34'
        ]);

        CustomerNote::create([
            'id' => 1458,
            'customer_id' => 16862,
            'user_id' => 1,
            'note' => 'Done auto scart, paid cheque',
            'created_at' => '2012-11-05 13:35:33'
        ]);

        CustomerNote::create([
            'id' => 1459,
            'customer_id' => 16876,
            'user_id' => 1,
            'note' => 'Connect new cable run to existing dish.',
            'created_at' => '2012-11-05 14:00:00'
        ]);

        CustomerNote::create([
            'id' => 1460,
            'customer_id' => 12503,
            'user_id' => 1,
            'note' => 'cancelled ',
            'created_at' => '2012-11-05 14:17:31'
        ]);

        CustomerNote::create([
            'id' => 1461,
            'customer_id' => 16780,
            'user_id' => 1,
            'note' => 'refunded 379 for 26 Tosh LED returned with subtitle problem',
            'created_at' => '2012-11-05 15:29:41'
        ]);

        CustomerNote::create([
            'id' => 1462,
            'customer_id' => 16647,
            'user_id' => 1,
            'note' => '		retune TSC114, 49.00, prove for Wed, wife home all day. ',
            'created_at' => '2012-11-05 15:42:49'
        ]);

        CustomerNote::create([
            'id' => 1463,
            'customer_id' => 16877,
            'user_id' => 1,
            'note' => 'Ex DTV, Ferguson STB- 49.00 to tune MTL23 only. Look at connecting other room and price.',
            'created_at' => '2012-11-06 11:56:14'
        ]);

        CustomerNote::create([
            'id' => 1464,
            'customer_id' => 16808,
            'user_id' => 1,
            'note' => 'Fitted SV ant to two points. Paid 250.00 removed old TV',
            'created_at' => '2012-11-06 11:57:30'
        ]);

        CustomerNote::create([
            'id' => 1465,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => 'other customer near this man',
            'created_at' => '2012-11-06 12:34:49'
        ]);

        CustomerNote::create([
            'id' => 1466,
            'customer_id' => 1985,
            'user_id' => 1,
            'note' => 'KD needs to survey, did other hse here, difficult',
            'created_at' => '2012-11-06 12:40:27'
        ]);

        CustomerNote::create([
            'id' => 1467,
            'customer_id' => 16679,
            'user_id' => 1,
            'note' => 'Retune 2 Triax 537 STb and one TV €70.00',
            'created_at' => '2012-11-06 13:39:20'
        ]);

        CustomerNote::create([
            'id' => 1468,
            'customer_id' => 16645,
            'user_id' => 1,
            'note' => 'quoted 49.00 to retune, will get someone else',
            'created_at' => '2012-11-06 13:49:52'
        ]);

        CustomerNote::create([
            'id' => 1469,
            'customer_id' => 16856,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-06 13:58:44'
        ]);

        CustomerNote::create([
            'id' => 1470,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => 'Paid balance €650.00 cheque',
            'created_at' => '2012-11-06 14:03:23'
        ]);

        CustomerNote::create([
            'id' => 1471,
            'customer_id' => 2077,
            'user_id' => 1,
            'note' => 'Bought Technistar combi over counter with memory stick 199.00 tuned and formatted. KD',
            'created_at' => '2012-11-06 14:23:11'
        ]);

        CustomerNote::create([
            'id' => 1472,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'retuned to mtl23, paid 49.00',
            'created_at' => '2012-11-06 15:53:36'
        ]);

        CustomerNote::create([
            'id' => 1473,
            'customer_id' => 15994,
            'user_id' => 1,
            'note' => 'advised about DTV, price work BEFORE going ahead',
            'created_at' => '2012-11-06 16:12:24'
        ]);

        CustomerNote::create([
            'id' => 1474,
            'customer_id' => 16878,
            'user_id' => 1,
            'note' => 'FTAC, has dish and may have SV sig. 349.00 inc SV ant, or 229.00 for box only',
            'created_at' => '2012-11-06 16:49:11'
        ]);

        CustomerNote::create([
            'id' => 1475,
            'customer_id' => 16878,
            'user_id' => 1,
            'note' => 'Customer has DVD recorder, check how to record at present before removing old FTA, and connect new FTAC so scart can be recorded using DVD recorder.',
            'created_at' => '2012-11-06 16:51:14'
        ]);

        CustomerNote::create([
            'id' => 1476,
            'customer_id' => 16877,
            'user_id' => 1,
            'note' => 'retuned RTE23 on Ferg combi, psid 50.00',
            'created_at' => '2012-11-07 09:35:39'
        ]);

        CustomerNote::create([
            'id' => 1477,
            'customer_id' => 2882,
            'user_id' => 1,
            'note' => 'retuned both tvs to sky rf. poss sky software upgrade caused mod to default to 68. paid 50.00',
            'created_at' => '2012-11-07 09:42:06'
        ]);

        CustomerNote::create([
            'id' => 1478,
            'customer_id' => 13013,
            'user_id' => 1,
            'note' => 'retuned 537 and updated firmware',
            'created_at' => '2012-11-07 09:43:26'
        ]);

        CustomerNote::create([
            'id' => 1479,
            'customer_id' => 4876,
            'user_id' => 1,
            'note' => 'fitted combi stb, paid 200, customers dish and ant',
            'created_at' => '2012-11-07 09:43:59'
        ]);

        CustomerNote::create([
            'id' => 1480,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => '26 Tosh LED + 22 tosh LED + SV ant + labour 933.00 + 70.00 if MHA required',
            'created_at' => '2012-11-07 09:45:23'
        ]);

        CustomerNote::create([
            'id' => 1481,
            'customer_id' => 819,
            'user_id' => 1,
            'note' => '				has new SV tv, try tune in SV channels and fit SV ant if required Tom 086 2082404',
            'created_at' => '2012-11-07 10:10:31'
        ]);

        CustomerNote::create([
            'id' => 1482,
            'customer_id' => 16879,
            'user_id' => 1,
            'note' => 'Tune SV STB, home from 12.00',
            'created_at' => '2012-11-07 10:27:50'
        ]);

        CustomerNote::create([
            'id' => 1483,
            'customer_id' => 16880,
            'user_id' => 1,
            'note' => 'Fit 399.00 combi + 22  LED 229.00 Paid 300.00 deposit cash',
            'created_at' => '2012-11-07 10:39:25'
        ]);

        CustomerNote::create([
            'id' => 1484,
            'customer_id' => 16880,
            'user_id' => 1,
            'note' => 'confirmed contact Paddy Egan 085 1570219',
            'created_at' => '2012-11-07 10:40:23'
        ]);

        CustomerNote::create([
            'id' => 1485,
            'customer_id' => 12031,
            'user_id' => 1,
            'note' => 'We also have 4 Strong TV/satellite combi boxes and will need to change to the Shoreview combi boxes\r\nCan you give me a price ? \r\n',
            'created_at' => '2012-11-07 10:42:01'
        ]);

        CustomerNote::create([
            'id' => 1486,
            'customer_id' => 12031,
            'user_id' => 1,
            'note' => 'We are doing so more work on our major emergency room setup and I am looking for a price to extend the cable to the satellite phone receiver.\r\nIt is currently in the chamber and needs  to be moved on a further 25m or so.\r\nIt currently accesses the room through the attic .\r\n\r\nWould you be able to give me a costing for the extension and termination of the cable in its new location ?\r\n',
            'created_at' => '2012-11-07 10:42:40'
        ]);

        CustomerNote::create([
            'id' => 1487,
            'customer_id' => 14152,
            'user_id' => 1,
            'note' => 'Has Saorsat since early summer, bad pics on RTEs. Check both dishs for alignment. ',
            'created_at' => '2012-11-07 11:57:03'
        ]);

        CustomerNote::create([
            'id' => 1488,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'tried to explain why signal was not right on tvs that we did not connect, but couldn feett get thru to Mary',
            'created_at' => '2012-11-07 12:13:51'
        ]);

        CustomerNote::create([
            'id' => 1489,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'asked ID to call customer to try testing one tv first to see if signal is ok before we look at other points',
            'created_at' => '2012-11-07 12:14:39'
        ]);

        CustomerNote::create([
            'id' => 1490,
            'customer_id' => 16881,
            'user_id' => 1,
            'note' => 'Fitted TSC114 and MHA around May 2012',
            'created_at' => '2012-11-07 12:19:56'
        ]);

        CustomerNote::create([
            'id' => 1491,
            'customer_id' => 16881,
            'user_id' => 1,
            'note' => 'Retuned for ML23, paid 49.00',
            'created_at' => '2012-11-07 12:20:25'
        ]);

        CustomerNote::create([
            'id' => 1492,
            'customer_id' => 16529,
            'user_id' => 1,
            'note' => 'tuned 2 STBs to ML23, paid ID',
            'created_at' => '2012-11-07 12:21:44'
        ]);

        CustomerNote::create([
            'id' => 1493,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => '		prov for Tuesday morning',
            'created_at' => '2012-11-09 09:43:38'
        ]);

        CustomerNote::create([
            'id' => 1494,
            'customer_id' => 16779,
            'user_id' => 1,
            'note' => 'Call to retune combi box',
            'created_at' => '2012-11-07 13:57:42'
        ]);

        CustomerNote::create([
            'id' => 1495,
            'customer_id' => 3365,
            'user_id' => 1,
            'note' => 'retune both stbs ',
            'created_at' => '2012-11-07 14:04:45'
        ]);

        CustomerNote::create([
            'id' => 1496,
            'customer_id' => 16543,
            'user_id' => 1,
            'note' => '		retune, out between 3.30-4.30',
            'created_at' => '2012-11-07 14:17:59'
        ]);

        CustomerNote::create([
            'id' => 1497,
            'customer_id' => 16703,
            'user_id' => 1,
            'note' => 'tune rte ',
            'created_at' => '2012-11-07 14:22:26'
        ]);

        CustomerNote::create([
            'id' => 1498,
            'customer_id' => 16671,
            'user_id' => 1,
            'note' => 'no signal on satellite or saorview',
            'created_at' => '2012-11-07 14:27:41'
        ]);

        CustomerNote::create([
            'id' => 1499,
            'customer_id' => 16657,
            'user_id' => 1,
            'note' => 'retune 2 x 537 from 11.00 onwards',
            'created_at' => '2012-11-07 14:45:47'
        ]);

        CustomerNote::create([
            'id' => 1500,
            'customer_id' => 1898,
            'user_id' => 1,
            'note' => 'Angela called , retune three combi stbs',
            'created_at' => '2012-11-07 15:25:29'
        ]);

        CustomerNote::create([
            'id' => 1501,
            'customer_id' => 1898,
            'user_id' => 1,
            'note' => 'electrician retuned ok now',
            'created_at' => '2012-11-07 15:41:13'
        ]);

        CustomerNote::create([
            'id' => 1502,
            'customer_id' => 16679,
            'user_id' => 1,
            'note' => 'retuned boxes and tv, replaced one triax box after failed firmware update',
            'created_at' => '2012-11-07 15:43:10'
        ]);

        CustomerNote::create([
            'id' => 1503,
            'customer_id' => 16865,
            'user_id' => 1,
            'note' => 'all done paid balance',
            'created_at' => '2012-11-07 15:43:43'
        ]);

        CustomerNote::create([
            'id' => 1504,
            'customer_id' => 16765,
            'user_id' => 1,
            'note' => 'very abusive customer would not listen or accept any direction or instruction',
            'created_at' => '2012-11-07 16:05:16'
        ]);

        CustomerNote::create([
            'id' => 1505,
            'customer_id' => 16440,
            'user_id' => 1,
            'note' => 're tune tv ',
            'created_at' => '2012-11-07 16:26:38'
        ]);

        CustomerNote::create([
            'id' => 1506,
            'customer_id' => 16275,
            'user_id' => 1,
            'note' => 'turn 537 stb',
            'created_at' => '2012-11-07 16:38:40'
        ]);

        CustomerNote::create([
            'id' => 1507,
            'customer_id' => 16879,
            'user_id' => 1,
            'note' => 'done,paid 537',
            'created_at' => '2012-11-07 16:43:26'
        ]);

        CustomerNote::create([
            'id' => 1508,
            'customer_id' => 3365,
            'user_id' => 1,
            'note' => 'done, paid',
            'created_at' => '2012-11-07 16:44:29'
        ]);

        CustomerNote::create([
            'id' => 1509,
            'customer_id' => 16647,
            'user_id' => 1,
            'note' => 'done,paid',
            'created_at' => '2012-11-07 17:50:32'
        ]);

        CustomerNote::create([
            'id' => 1510,
            'customer_id' => 297,
            'user_id' => 1,
            'note' => 'Retune foe 23 ',
            'created_at' => '2012-11-08 10:06:01'
        ]);

        CustomerNote::create([
            'id' => 1511,
            'customer_id' => 16785,
            'user_id' => 1,
            'note' => 'cancelled will call us in new yr',
            'created_at' => '2012-11-08 12:43:41'
        ]);

        CustomerNote::create([
            'id' => 1512,
            'customer_id' => 8534,
            'user_id' => 1,
            'note' => 'Fitted combi, Samsung HDMI',
            'created_at' => '2012-11-09 09:25:59'
        ]);

        CustomerNote::create([
            'id' => 1513,
            'customer_id' => 8534,
            'user_id' => 1,
            'note' => 'Elanor called from work, cant get any pics, asked Elanor to call when home at TV',
            'created_at' => '2012-11-09 09:26:45'
        ]);

        CustomerNote::create([
            'id' => 1514,
            'customer_id' => 819,
            'user_id' => 1,
            'note' => 'Prov for Sat first thing, also prov for Tuesday pm',
            'created_at' => '2012-11-09 09:42:23'
        ]);

        CustomerNote::create([
            'id' => 1515,
            'customer_id' => 15768,
            'user_id' => 1,
            'note' => 'move sky box from one side of room to other',
            'created_at' => '2012-11-09 11:56:59'
        ]);

        CustomerNote::create([
            'id' => 1516,
            'customer_id' => 16882,
            'user_id' => 1,
            'note' => 'supply and fit new sky dish and connect to existing cables for sky hd box',
            'created_at' => '2012-11-09 12:05:12'
        ]);

        CustomerNote::create([
            'id' => 1517,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'checked signal , ok from kilduff, fitted 2 SV STBs on load , pics ok with DTV boxes. customer to ring with progress',
            'created_at' => '2012-11-09 12:37:19'
        ]);

        CustomerNote::create([
            'id' => 1518,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'rand landline to check, no ans',
            'created_at' => '2012-11-09 12:37:38'
        ]);

        CustomerNote::create([
            'id' => 1519,
            'customer_id' => 16883,
            'user_id' => 1,
            'note' => 'Ref Kieran Mc Mahon\r\n\r\n',
            'created_at' => '2012-11-09 16:25:46'
        ]);

        CustomerNote::create([
            'id' => 1520,
            'customer_id' => 16883,
            'user_id' => 1,
            'note' => 'Two sky + feeds\r\n4 FTA feeds\r\nRC ext to 3 rooms off each box.\r\nBox at TV for HD\r\nSAORVIEW signal to all points\r\n80cm dish on laundry room wall.\r\n',
            'created_at' => '2012-11-09 16:28:54'
        ]);

        CustomerNote::create([
            'id' => 1521,
            'customer_id' => 13760,
            'user_id' => 1,
            'note' => 'Cancelled ',
            'created_at' => '2012-11-10 13:05:32'
        ]);

        CustomerNote::create([
            'id' => 1522,
            'customer_id' => 16884,
            'user_id' => 1,
            'note' => 'fit free to air satellite',
            'created_at' => '2012-11-10 14:07:37'
        ]);

        CustomerNote::create([
            'id' => 1523,
            'customer_id' => 346,
            'user_id' => 1,
            'note' => 'bring tvs',
            'created_at' => '2012-11-10 14:55:05'
        ]);

        CustomerNote::create([
            'id' => 1524,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => '		no sats, has saorview, home all day Tuesday up to 2.00pm',
            'created_at' => '2012-11-12 09:33:01'
        ]);

        CustomerNote::create([
            'id' => 1525,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => 'Fit 10ft pole and gable end bkt to improve SV signal',
            'created_at' => '2012-11-12 11:15:02'
        ]);

        CustomerNote::create([
            'id' => 1526,
            'customer_id' => 16872,
            'user_id' => 1,
            'note' => 'no sats here, customer retuned box when sats were missing',
            'created_at' => '2012-11-12 11:16:47'
        ]);

        CustomerNote::create([
            'id' => 1527,
            'customer_id' => 8765,
            'user_id' => 1,
            'note' => 'done tuned paid',
            'created_at' => '2012-11-12 11:57:01'
        ]);

        CustomerNote::create([
            'id' => 1528,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'Tuned all TVs and STBs for MTL23, com-callout + 11.30 - 2.00 3hrs',
            'created_at' => '2012-11-12 12:02:14'
        ]);

        CustomerNote::create([
            'id' => 1529,
            'customer_id' => 16779,
            'user_id' => 1,
            'note' => 'done paid KD',
            'created_at' => '2012-11-12 12:05:51'
        ]);

        CustomerNote::create([
            'id' => 1530,
            'customer_id' => 16543,
            'user_id' => 1,
            'note' => 'replaced MHA for wide band, tune MTL',
            'created_at' => '2012-11-12 12:06:45'
        ]);

        CustomerNote::create([
            'id' => 1531,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'no ans KD',
            'created_at' => '2012-11-12 12:08:22'
        ]);

        CustomerNote::create([
            'id' => 1532,
            'customer_id' => 819,
            'user_id' => 1,
            'note' => 'fitted SV ant paid 180.00',
            'created_at' => '2012-11-12 12:09:37'
        ]);

        CustomerNote::create([
            'id' => 1533,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'customer maintains she didnt want FTAC but only wanted SV STB, tried to explain, would not pay for retuning',
            'created_at' => '2012-11-12 12:24:26'
        ]);

        CustomerNote::create([
            'id' => 1534,
            'customer_id' => 16637,
            'user_id' => 1,
            'note' => 'fitted FTA rx and conn to 19 and 28 . Tuned box and set disecq sw. Paid',
            'created_at' => '2012-11-12 12:28:45'
        ]);

        CustomerNote::create([
            'id' => 1535,
            'customer_id' => 16578,
            'user_id' => 1,
            'note' => 'tuned box himself',
            'created_at' => '2012-11-12 12:29:23'
        ]);

        CustomerNote::create([
            'id' => 1536,
            'customer_id' => 6914,
            'user_id' => 1,
            'note' => 'retuned Triax box, paid 49.00',
            'created_at' => '2012-11-12 12:30:00'
        ]);

        CustomerNote::create([
            'id' => 1537,
            'customer_id' => 16873,
            'user_id' => 1,
            'note' => 'fitted ant and MHA',
            'created_at' => '2012-11-12 12:31:09'
        ]);

        CustomerNote::create([
            'id' => 1538,
            'customer_id' => 16601,
            'user_id' => 1,
            'note' => 'retuned 4 x 537 STB',
            'created_at' => '2012-11-12 12:32:44'
        ]);

        CustomerNote::create([
            'id' => 1539,
            'customer_id' => 16601,
            'user_id' => 1,
            'note' => 'retuned 4 x 537 STB',
            'created_at' => '2012-11-12 12:33:20'
        ]);

        CustomerNote::create([
            'id' => 1540,
            'customer_id' => 4451,
            'user_id' => 1,
            'note' => 'retuned paid 49.00',
            'created_at' => '2012-11-12 12:35:06'
        ]);

        CustomerNote::create([
            'id' => 1541,
            'customer_id' => 16878,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-12 12:35:36'
        ]);

        CustomerNote::create([
            'id' => 1542,
            'customer_id' => 15241,
            'user_id' => 1,
            'note' => 'Retune FTAC',
            'created_at' => '2012-11-12 12:37:32'
        ]);

        CustomerNote::create([
            'id' => 1543,
            'customer_id' => 15241,
            'user_id' => 1,
            'note' => '		prov Wed first thing TBC',
            'created_at' => '2012-11-12 12:41:23'
        ]);

        CustomerNote::create([
            'id' => 1544,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => 'prov for Wed morning',
            'created_at' => '2012-11-12 12:40:54'
        ]);

        CustomerNote::create([
            'id' => 1545,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => '		confirmed for Tuesday first thing',
            'created_at' => '2012-11-12 12:42:26'
        ]);

        CustomerNote::create([
            'id' => 1546,
            'customer_id' => 16872,
            'user_id' => 1,
            'note' => 'confirmed for Thurs late PM',
            'created_at' => '2012-11-12 12:43:03'
        ]);

        CustomerNote::create([
            'id' => 1547,
            'customer_id' => 16546,
            'user_id' => 1,
            'note' => 'has SV channels,no sats on mothers combi, KD to look up USB file before going out, ',
            'created_at' => '2012-11-12 12:44:35'
        ]);

        CustomerNote::create([
            'id' => 1548,
            'customer_id' => 16754,
            'user_id' => 1,
            'note' => 'retune TV, advised 49.00',
            'created_at' => '2012-11-12 12:45:45'
        ]);

        CustomerNote::create([
            'id' => 1549,
            'customer_id' => 16866,
            'user_id' => 1,
            'note' => 'fitted SV ant paid balance',
            'created_at' => '2012-11-12 12:47:40'
        ]);

        CustomerNote::create([
            'id' => 1550,
            'customer_id' => 14052,
            'user_id' => 1,
            'note' => 'retune combi',
            'created_at' => '2012-11-12 12:49:40'
        ]);

        CustomerNote::create([
            'id' => 1551,
            'customer_id' => 16769,
            'user_id' => 1,
            'note' => 're-tune TVs, anytime up 4.00',
            'created_at' => '2012-11-12 12:57:52'
        ]);

        CustomerNote::create([
            'id' => 1552,
            'customer_id' => 16063,
            'user_id' => 1,
            'note' => 'prov for wed first',
            'created_at' => '2012-11-12 13:39:57'
        ]);

        CustomerNote::create([
            'id' => 1553,
            'customer_id' => 13013,
            'user_id' => 1,
            'note' => 'prov for wed am',
            'created_at' => '2012-11-12 13:40:27'
        ]);

        CustomerNote::create([
            'id' => 1554,
            'customer_id' => 28,
            'user_id' => 1,
            'note' => '		Fit FTAC ref Joe 086 6066666',
            'created_at' => '2012-11-12 13:43:34'
        ]);

        CustomerNote::create([
            'id' => 1555,
            'customer_id' => 12940,
            'user_id' => 1,
            'note' => 'left message',
            'created_at' => '2012-11-12 13:48:09'
        ]);

        CustomerNote::create([
            'id' => 1556,
            'customer_id' => 12576,
            'user_id' => 1,
            'note' => '		fit FTAC, maybe has dish',
            'created_at' => '2012-11-12 13:50:36'
        ]);

        CustomerNote::create([
            'id' => 1557,
            'customer_id' => 12940,
            'user_id' => 1,
            'note' => 'got sorted',
            'created_at' => '2012-11-12 13:53:10'
        ]);

        CustomerNote::create([
            'id' => 1558,
            'customer_id' => 13266,
            'user_id' => 1,
            'note' => 'tuned in SV channels on combi, call back to tune radios',
            'created_at' => '2012-11-12 13:58:08'
        ]);

        CustomerNote::create([
            'id' => 1559,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => 'Fit SV ant',
            'created_at' => '2012-11-12 14:14:22'
        ]);

        CustomerNote::create([
            'id' => 1560,
            'customer_id' => 12503,
            'user_id' => 1,
            'note' => 'no signal again on SV',
            'created_at' => '2012-11-12 14:16:26'
        ]);

        CustomerNote::create([
            'id' => 1561,
            'customer_id' => 2106,
            'user_id' => 1,
            'note' => 'KD called Ann, some bullshit about not working right since it was installed!!!!!!!!!!!!!!!!!!!!',
            'created_at' => '2012-11-12 14:24:43'
        ]);

        CustomerNote::create([
            'id' => 1562,
            'customer_id' => 15813,
            'user_id' => 1,
            'note' => 'confirmed 11.00 - 2.00',
            'created_at' => '2012-11-12 14:31:04'
        ]);

        CustomerNote::create([
            'id' => 1563,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'no reply',
            'created_at' => '2012-11-12 14:35:27'
        ]);

        CustomerNote::create([
            'id' => 1564,
            'customer_id' => 16880,
            'user_id' => 1,
            'note' => 'Fitted FTAC and 22 Sam LED. Auto HDMI, paid balance 328.00',
            'created_at' => '2012-11-12 14:36:32'
        ]);

        CustomerNote::create([
            'id' => 1565,
            'customer_id' => 16456,
            'user_id' => 1,
            'note' => 'Fitted existing 114 STB and new Tri link kit, + 2 remotes, paid 320.00',
            'created_at' => '2012-11-12 14:37:57'
        ]);

        CustomerNote::create([
            'id' => 1566,
            'customer_id' => 1593,
            'user_id' => 1,
            'note' => 'Fit 42 LG 599 and run new cable from living room to master bed',
            'created_at' => '2012-11-12 16:26:26'
        ]);

        CustomerNote::create([
            'id' => 1567,
            'customer_id' => 16769,
            'user_id' => 1,
            'note' => 'Done tuned 49.00',
            'created_at' => '2012-11-12 16:29:23'
        ]);

        CustomerNote::create([
            'id' => 1568,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => '		Confirmed with Niamh,someone home all day.\r\n',
            'created_at' => '2012-11-12 16:32:09'
        ]);

        CustomerNote::create([
            'id' => 1569,
            'customer_id' => 15241,
            'user_id' => 1,
            'note' => 'Confirmed before 3.30 pm',
            'created_at' => '2012-11-12 16:34:37'
        ]);

        CustomerNote::create([
            'id' => 1570,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'RTE no sig on combi box, OK on second TV. Check signal level at box and only replace box if levels are good. Otherwise sort signal problem.',
            'created_at' => '2012-11-12 17:31:18'
        ]);

        CustomerNote::create([
            'id' => 1571,
            'customer_id' => 16887,
            'user_id' => 1,
            'note' => 'Fit customers existing sky box, KD explained one satellite cable problem. Also explained 49.00 even if no sig present. 49.00 if straight forward install.\r\n',
            'created_at' => '2012-11-12 17:54:56'
        ]);

        CustomerNote::create([
            'id' => 1572,
            'customer_id' => 16754,
            'user_id' => 1,
            'note' => 'Set up as uk tv to get channel ident to work, this set is not SV approved. Paid 49.00',
            'created_at' => '2012-11-12 19:30:52'
        ]);

        CustomerNote::create([
            'id' => 1573,
            'customer_id' => 16887,
            'user_id' => 1,
            'note' => 'Fitted box,paid 49.00',
            'created_at' => '2012-11-12 20:40:33'
        ]);

        CustomerNote::create([
            'id' => 1574,
            'customer_id' => 16874,
            'user_id' => 1,
            'note' => 'Fitted RC extr , difficult job, paid 250.00',
            'created_at' => '2012-11-12 20:42:35'
        ]);

        CustomerNote::create([
            'id' => 1575,
            'customer_id' => 16799,
            'user_id' => 1,
            'note' => 'Cancelled',
            'created_at' => '2012-11-12 21:38:40'
        ]);

        CustomerNote::create([
            'id' => 1576,
            'customer_id' => 16512,
            'user_id' => 1,
            'note' => 'Tuned for mt23',
            'created_at' => '2012-11-12 21:39:47'
        ]);

        CustomerNote::create([
            'id' => 1577,
            'customer_id' => 16275,
            'user_id' => 1,
            'note' => 'Done paid',
            'created_at' => '2012-11-12 21:41:09'
        ]);

        CustomerNote::create([
            'id' => 1578,
            'customer_id' => 16660,
            'user_id' => 1,
            'note' => 'Cancelled ',
            'created_at' => '2012-11-12 21:42:47'
        ]);

        CustomerNote::create([
            'id' => 1579,
            'customer_id' => 16792,
            'user_id' => 1,
            'note' => 'Retuned mtl23',
            'created_at' => '2012-11-12 21:46:24'
        ]);

        CustomerNote::create([
            'id' => 1580,
            'customer_id' => 14949,
            'user_id' => 1,
            'note' => 'Tuned himself',
            'created_at' => '2012-11-12 21:48:13'
        ]);

        CustomerNote::create([
            'id' => 1581,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => '		No reply to landline or mobile! Left voicemail',
            'created_at' => '2012-11-13 09:32:39'
        ]);

        CustomerNote::create([
            'id' => 1582,
            'customer_id' => 16063,
            'user_id' => 1,
            'note' => 'no reply ',
            'created_at' => '2012-11-13 09:41:55'
        ]);

        CustomerNote::create([
            'id' => 1583,
            'customer_id' => 13013,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-11-13 09:44:29'
        ]);

        CustomerNote::create([
            'id' => 1584,
            'customer_id' => 28,
            'user_id' => 1,
            'note' => 'confirmed 10.30',
            'created_at' => '2012-11-13 09:46:32'
        ]);

        CustomerNote::create([
            'id' => 1585,
            'customer_id' => 12738,
            'user_id' => 1,
            'note' => 'tune stb',
            'created_at' => '2012-11-13 09:58:43'
        ]);

        CustomerNote::create([
            'id' => 1586,
            'customer_id' => 16128,
            'user_id' => 1,
            'note' => 'fit third combi box to existing installation, 250.00 ',
            'created_at' => '2012-11-13 10:09:26'
        ]);

        CustomerNote::create([
            'id' => 1587,
            'customer_id' => 13266,
            'user_id' => 1,
            'note' => 'home wed most of day, evening time',
            'created_at' => '2012-11-13 10:10:41'
        ]);

        CustomerNote::create([
            'id' => 1588,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => '				pics ok on three stbs, advised we will all and fit third box if required and collect',
            'created_at' => '2012-11-19 16:55:00'
        ]);

        CustomerNote::create([
            'id' => 1589,
            'customer_id' => 14052,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-13 10:32:19'
        ]);

        CustomerNote::create([
            'id' => 1590,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => 'all done, amp used, signal 60dB at set',
            'created_at' => '2012-11-13 11:38:21'
        ]);

        CustomerNote::create([
            'id' => 1591,
            'customer_id' => 15813,
            'user_id' => 1,
            'note' => 'tuned tv, levels low , advised mha and psu',
            'created_at' => '2012-11-13 12:08:23'
        ]);

        CustomerNote::create([
            'id' => 1592,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => '		installed gbl end bkts & 10ft pole, signal 35 before MHA, €89.00',
            'created_at' => '2012-11-13 14:50:47'
        ]);

        CustomerNote::create([
            'id' => 1593,
            'customer_id' => 15241,
            'user_id' => 1,
            'note' => 'tuned, paid 49.00',
            'created_at' => '2012-11-13 15:25:26'
        ]);

        CustomerNote::create([
            'id' => 1594,
            'customer_id' => 16758,
            'user_id' => 1,
            'note' => 'retuned paid 49.00',
            'created_at' => '2012-11-13 15:26:19'
        ]);

        CustomerNote::create([
            'id' => 1595,
            'customer_id' => 1985,
            'user_id' => 1,
            'note' => 'confirmed 9.00am ',
            'created_at' => '2012-11-13 18:00:08'
        ]);

        CustomerNote::create([
            'id' => 1596,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => 'prov booking, send sms to customer',
            'created_at' => '2012-11-13 18:02:37'
        ]);

        CustomerNote::create([
            'id' => 1597,
            'customer_id' => 12503,
            'user_id' => 1,
            'note' => 'cancelled ',
            'created_at' => '2012-11-13 18:05:04'
        ]);

        CustomerNote::create([
            'id' => 1598,
            'customer_id' => 14066,
            'user_id' => 1,
            'note' => 'tune tvs, no sign since last week, Una 087 2104268',
            'created_at' => '2012-11-13 18:07:31'
        ]);

        CustomerNote::create([
            'id' => 1599,
            'customer_id' => 1138,
            'user_id' => 1,
            'note' => '		check sky+ box and bring new unit also, ring to get in 056 7751989',
            'created_at' => '2012-11-14 14:29:10'
        ]);

        CustomerNote::create([
            'id' => 1600,
            'customer_id' => 12738,
            'user_id' => 1,
            'note' => 'Job done, paid ',
            'created_at' => '2012-11-14 20:37:36'
        ]);

        CustomerNote::create([
            'id' => 1601,
            'customer_id' => 1593,
            'user_id' => 1,
            'note' => ' Tv fitted , paid 599.00\r\n',
            'created_at' => '2012-11-14 20:40:23'
        ]);

        CustomerNote::create([
            'id' => 1602,
            'customer_id' => 1593,
            'user_id' => 1,
            'note' => 'Call to run cable',
            'created_at' => '2012-11-14 20:40:43'
        ]);

        CustomerNote::create([
            'id' => 1603,
            'customer_id' => 16136,
            'user_id' => 1,
            'note' => '		Aisling Brennan rang with signal problem. Advised low signal to begin with and group B antenna may be causing problem. ',
            'created_at' => '2012-11-15 09:44:29'
        ]);

        CustomerNote::create([
            'id' => 1604,
            'customer_id' => 16817,
            'user_id' => 1,
            'note' => '		retune 537 after 3.00pm 49.00, tune tv upstairs too, channels working here, but 800,801, KD installed this and thinks TV was like this originally and customer actually sorted order, don feett attempt to sort order if so.',
            'created_at' => '2012-11-15 10:01:19'
        ]);

        CustomerNote::create([
            'id' => 1605,
            'customer_id' => 16136,
            'user_id' => 1,
            'note' => 'quoted shane 180.00 max for new ant and mha and psu',
            'created_at' => '2012-11-15 10:05:46'
        ]);

        CustomerNote::create([
            'id' => 1606,
            'customer_id' => 14066,
            'user_id' => 1,
            'note' => 'tuned TV for 23, bought combi stb, paid 249.00. ',
            'created_at' => '2012-11-15 10:08:36'
        ]);

        CustomerNote::create([
            'id' => 1607,
            'customer_id' => 14066,
            'user_id' => 1,
            'note' => 'Fit combi to kids sitting room, sat and SV signal there, paid 249.00',
            'created_at' => '2012-11-15 10:09:33'
        ]);

        CustomerNote::create([
            'id' => 1608,
            'customer_id' => 16888,
            'user_id' => 1,
            'note' => 'Fit SV ant est 160.00',
            'created_at' => '2012-11-15 10:56:59'
        ]);

        CustomerNote::create([
            'id' => 1609,
            'customer_id' => 16440,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-15 11:07:25'
        ]);

        CustomerNote::create([
            'id' => 1610,
            'customer_id' => 1138,
            'user_id' => 1,
            'note' => 'fitted new sky+HD box and removed old box, docket #1354 €334.00',
            'created_at' => '2012-11-15 11:09:31'
        ]);

        CustomerNote::create([
            'id' => 1611,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => 'home thursday after 2.00pm',
            'created_at' => '2012-11-15 11:16:44'
        ]);

        CustomerNote::create([
            'id' => 1612,
            'customer_id' => 15946,
            'user_id' => 1,
            'note' => 'explained to customer that box was ex dtv, didnt want to know',
            'created_at' => '2012-11-15 11:26:53'
        ]);

        CustomerNote::create([
            'id' => 1613,
            'customer_id' => 14152,
            'user_id' => 1,
            'note' => 'confirmed both home after lunch',
            'created_at' => '2012-11-15 11:51:36'
        ]);

        CustomerNote::create([
            'id' => 1614,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'confirmed after 2.30pm ',
            'created_at' => '2012-11-15 11:53:51'
        ]);

        CustomerNote::create([
            'id' => 1615,
            'customer_id' => 16889,
            'user_id' => 1,
            'note' => 'Fit SV STB in kitchen',
            'created_at' => '2012-11-15 12:00:39'
        ]);

        CustomerNote::create([
            'id' => 1616,
            'customer_id' => 16889,
            'user_id' => 1,
            'note' => 'prov for monday morning',
            'created_at' => '2012-11-15 12:02:15'
        ]);

        CustomerNote::create([
            'id' => 1617,
            'customer_id' => 1985,
            'user_id' => 1,
            'note' => 'fitted SV STB and moved WEE to other room, paid €175.00 cheque',
            'created_at' => '2012-11-15 12:03:28'
        ]);

        CustomerNote::create([
            'id' => 1618,
            'customer_id' => 16888,
            'user_id' => 1,
            'note' => 'fitted sv ant in attic, levels at set 58dB, paid 160.00 cheque',
            'created_at' => '2012-11-15 12:04:20'
        ]);

        CustomerNote::create([
            'id' => 1619,
            'customer_id' => 16890,
            'user_id' => 1,
            'note' => 'FTA STB, poss SV ant',
            'created_at' => '2012-11-15 12:09:20'
        ]);

        CustomerNote::create([
            'id' => 1620,
            'customer_id' => 16840,
            'user_id' => 1,
            'note' => 'cancelled, not at moment, will call if she wants us',
            'created_at' => '2012-11-15 12:34:24'
        ]);

        CustomerNote::create([
            'id' => 1621,
            'customer_id' => 16809,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-15 12:36:48'
        ]);

        CustomerNote::create([
            'id' => 1622,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'no reply to landline, mobile incomplete',
            'created_at' => '2012-11-15 12:39:54'
        ]);

        CustomerNote::create([
            'id' => 1623,
            'customer_id' => 6767,
            'user_id' => 1,
            'note' => '		will call back on monday to make appointment, prov for thursday',
            'created_at' => '2012-11-15 15:34:41'
        ]);

        CustomerNote::create([
            'id' => 1624,
            'customer_id' => 16890,
            'user_id' => 1,
            'note' => 'tuned two tvs for SV, paid 64.00 cash',
            'created_at' => '2012-11-15 12:59:09'
        ]);

        CustomerNote::create([
            'id' => 1625,
            'customer_id' => 16890,
            'user_id' => 1,
            'note' => 'wants combi 349.00 inc dish , has aerial',
            'created_at' => '2012-11-15 12:59:53'
        ]);

        CustomerNote::create([
            'id' => 1626,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'Only Thurs & Fri',
            'created_at' => '2012-11-15 14:24:12'
        ]);

        CustomerNote::create([
            'id' => 1627,
            'customer_id' => 16500,
            'user_id' => 1,
            'note' => '				Connect WEEE to new TV, Wed or Fri only, DVD prob also, Marie 086 8218167',
            'created_at' => '2012-11-15 14:34:01'
        ]);

        CustomerNote::create([
            'id' => 1628,
            'customer_id' => 14152,
            'user_id' => 1,
            'note' => 'checked marg, both boxes ok and levels good, loose conn at Josephens house',
            'created_at' => '2012-11-15 15:15:29'
        ]);

        CustomerNote::create([
            'id' => 1629,
            'customer_id' => 16788,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-15 15:24:21'
        ]);

        CustomerNote::create([
            'id' => 1630,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => '				prov for monday pm',
            'created_at' => '2012-11-19 17:06:06'
        ]);

        CustomerNote::create([
            'id' => 1631,
            'customer_id' => 16850,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-15 15:42:53'
        ]);

        CustomerNote::create([
            'id' => 1632,
            'customer_id' => 13983,
            'user_id' => 1,
            'note' => '		Check FTA, and connect one or two other tvs. Had builders in, check dish also. est 200.00. Ref Paul',
            'created_at' => '2012-11-15 15:49:23'
        ]);

        CustomerNote::create([
            'id' => 1633,
            'customer_id' => 13983,
            'user_id' => 1,
            'note' => 'prov tuesday 9.00am',
            'created_at' => '2012-11-15 15:49:36'
        ]);

        CustomerNote::create([
            'id' => 1634,
            'customer_id' => 14080,
            'user_id' => 1,
            'note' => 'left message',
            'created_at' => '2012-11-15 15:52:07'
        ]);

        CustomerNote::create([
            'id' => 1635,
            'customer_id' => 16882,
            'user_id' => 1,
            'note' => 'cancelled, too expensive',
            'created_at' => '2012-11-15 15:55:10'
        ]);

        CustomerNote::create([
            'id' => 1636,
            'customer_id' => 11168,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-15 15:59:45'
        ]);

        CustomerNote::create([
            'id' => 1637,
            'customer_id' => 16826,
            'user_id' => 1,
            'note' => 'left voicemail',
            'created_at' => '2012-11-15 16:01:41'
        ]);

        CustomerNote::create([
            'id' => 1638,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => '				087 2835363',
            'created_at' => '2012-11-15 16:10:50'
        ]);

        CustomerNote::create([
            'id' => 1639,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => 'no reply to mobile',
            'created_at' => '2012-11-15 16:05:41'
        ]);

        CustomerNote::create([
            'id' => 1640,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => '		booked tuesday, before 12.00',
            'created_at' => '2012-11-15 16:16:38'
        ]);

        CustomerNote::create([
            'id' => 1641,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => 'prov for wed morning',
            'created_at' => '2012-11-15 16:18:47'
        ]);

        CustomerNote::create([
            'id' => 1642,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'confirmed for early wed morn',
            'created_at' => '2012-11-15 16:21:50'
        ]);

        CustomerNote::create([
            'id' => 1643,
            'customer_id' => 12249,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-15 16:30:48'
        ]);

        CustomerNote::create([
            'id' => 1644,
            'customer_id' => 14080,
            'user_id' => 1,
            'note' => 'gave estimate of 120 if no ant required or 250 + for STB and ant',
            'created_at' => '2012-11-15 16:39:44'
        ]);

        CustomerNote::create([
            'id' => 1645,
            'customer_id' => 16871,
            'user_id' => 1,
            'note' => 'Voicemail\r\n',
            'created_at' => '2012-11-15 17:24:27'
        ]);

        CustomerNote::create([
            'id' => 1946,
            'customer_id' => 16536,
            'user_id' => 1,
            'note' => '		Fit 2 x ftac, paid 450.00, estimated 575.00 total, two sat cables already in place',
            'created_at' => '2012-12-13 15:38:31'
        ]);



        CustomerNote::create([
            'id' => 1647,
            'customer_id' => 16459,
            'user_id' => 1,
            'note' => 'cant work FTAC box in kitchen',
            'created_at' => '2012-11-19 09:43:50'
        ]);



        CustomerNote::create([
            'id' => 1648,
            'customer_id' => 16459,
            'user_id' => 1,
            'note' => 'Marie got working',
            'created_at' => '2012-11-19 10:23:09'
        ]);



        CustomerNote::create([
            'id' => 1649,
            'customer_id' => 16891,
            'user_id' => 1,
            'note' => 'Fit SV ant and MHA, try to keep low down.',
            'created_at' => '2012-11-19 12:05:01'
        ]);



        CustomerNote::create([
            'id' => 1650,
            'customer_id' => 16891,
            'user_id' => 1,
            'note' => 'booking confirmed',
            'created_at' => '2012-11-19 12:05:30'
        ]);



        CustomerNote::create([
            'id' => 1651,
            'customer_id' => 14066,
            'user_id' => 1,
            'note' => 'mistake, refund 200.00 got second sky instead',
            'created_at' => '2012-11-19 12:06:48'
        ]);



        CustomerNote::create([
            'id' => 1652,
            'customer_id' => 16826,
            'user_id' => 1,
            'note' => 'booking confirmed',
            'created_at' => '2012-11-19 12:09:27'
        ]);



        CustomerNote::create([
            'id' => 1653,
            'customer_id' => 13996,
            'user_id' => 1,
            'note' => 'retune 2 TVs',
            'created_at' => '2012-11-19 14:04:47'
        ]);



        CustomerNote::create([
            'id' => 1654,
            'customer_id' => 13996,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-11-19 14:06:15'
        ]);



        CustomerNote::create([
            'id' => 1655,
            'customer_id' => 16863,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-19 15:07:08'
        ]);



        CustomerNote::create([
            'id' => 1656,
            'customer_id' => 15770,
            'user_id' => 1,
            'note' => 'away now, back next week',
            'created_at' => '2012-11-19 15:09:20'
        ]);



        CustomerNote::create([
            'id' => 1657,
            'customer_id' => 9983,
            'user_id' => 1,
            'note' => '		has SV TV, needs STB for second TV, also needs SV ant',
            'created_at' => '2012-11-19 15:11:57'
        ]);



        CustomerNote::create([
            'id' => 1658,
            'customer_id' => 9983,
            'user_id' => 1,
            'note' => 'booked for thursday pm',
            'created_at' => '2012-11-19 15:15:35'
        ]);



        CustomerNote::create([
            'id' => 1659,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-11-19 15:17:02'
        ]);



        CustomerNote::create([
            'id' => 1660,
            'customer_id' => 297,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-19 15:20:03'
        ]);



        CustomerNote::create([
            'id' => 1661,
            'customer_id' => 14378,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-19 15:21:48'
        ]);



        CustomerNote::create([
            'id' => 1662,
            'customer_id' => 16859,
            'user_id' => 1,
            'note' => 'this one is a fuckin smart arse, cancelled',
            'created_at' => '2012-11-19 15:25:57'
        ]);



        CustomerNote::create([
            'id' => 1663,
            'customer_id' => 16794,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-19 15:27:01'
        ]);



        CustomerNote::create([
            'id' => 1664,
            'customer_id' => 16876,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-19 15:33:06'
        ]);



        CustomerNote::create([
            'id' => 1665,
            'customer_id' => 16406,
            'user_id' => 1,
            'note' => 'no reply',
            'created_at' => '2012-11-19 15:38:33'
        ]);



        CustomerNote::create([
            'id' => 1666,
            'customer_id' => 16817,
            'user_id' => 1,
            'note' => 'up the country at the moment, ring Wed to confirm wed late pm',
            'created_at' => '2012-11-19 15:45:46'
        ]);



        CustomerNote::create([
            'id' => 1667,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => 'set back to pending, TBC later',
            'created_at' => '2012-11-19 15:50:10'
        ]);



        CustomerNote::create([
            'id' => 1668,
            'customer_id' => 197,
            'user_id' => 1,
            'note' => 'booked for wed pm',
            'created_at' => '2012-11-19 15:51:21'
        ]);



        CustomerNote::create([
            'id' => 1669,
            'customer_id' => 12249,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-19 15:54:26'
        ]);



        CustomerNote::create([
            'id' => 1670,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => 'paid cheque',
            'created_at' => '2012-11-19 16:00:17'
        ]);



        CustomerNote::create([
            'id' => 1671,
            'customer_id' => 16869,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-11-19 16:08:35'
        ]);



        CustomerNote::create([
            'id' => 1672,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => 'no reply',
            'created_at' => '2012-11-19 16:10:14'
        ]);



        CustomerNote::create([
            'id' => 1673,
            'customer_id' => 4299,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-19 16:13:22'
        ]);



        CustomerNote::create([
            'id' => 1674,
            'customer_id' => 16472,
            'user_id' => 1,
            'note' => 'tune in RTE',
            'created_at' => '2012-11-19 16:14:56'
        ]);



        CustomerNote::create([
            'id' => 1675,
            'customer_id' => 16703,
            'user_id' => 1,
            'note' => 'called back to go thru stbs etc',
            'created_at' => '2012-11-19 16:18:13'
        ]);



        CustomerNote::create([
            'id' => 1676,
            'customer_id' => 1593,
            'user_id' => 1,
            'note' => '		prov for tuesday',
            'created_at' => '2012-11-19 16:26:47'
        ]);



        CustomerNote::create([
            'id' => 1677,
            'customer_id' => 12576,
            'user_id' => 1,
            'note' => 'fitted ftac',
            'created_at' => '2012-11-19 16:23:51'
        ]);



        CustomerNote::create([
            'id' => 1678,
            'customer_id' => 12576,
            'user_id' => 1,
            'note' => 'TV to come',
            'created_at' => '2012-11-19 16:24:00'
        ]);



        CustomerNote::create([
            'id' => 1679,
            'customer_id' => 16725,
            'user_id' => 1,
            'note' => 'spoke to john, mary is away for a week',
            'created_at' => '2012-11-19 16:43:55'
        ]);



        CustomerNote::create([
            'id' => 1680,
            'customer_id' => 16472,
            'user_id' => 1,
            'note' => 'done paid 49.00',
            'created_at' => '2012-11-19 17:19:16'
        ]);



        CustomerNote::create([
            'id' => 1681,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'no signal on RTE saorsat, check dish',
            'created_at' => '2012-11-19 17:33:35'
        ]);



        CustomerNote::create([
            'id' => 1682,
            'customer_id' => 12393,
            'user_id' => 1,
            'note' => 'fitted mast head amp, and replaced combi with triax',
            'created_at' => '2012-11-20 09:02:17'
        ]);



        CustomerNote::create([
            'id' => 1683,
            'customer_id' => 16813,
            'user_id' => 1,
            'note' => 'replace technistar stb, faulty tuner',
            'created_at' => '2012-11-20 09:07:25'
        ]);



        CustomerNote::create([
            'id' => 1684,
            'customer_id' => 16872,
            'user_id' => 1,
            'note' => 'replaced diplexer, ok  now',
            'created_at' => '2012-11-20 09:08:02'
        ]);



        CustomerNote::create([
            'id' => 1685,
            'customer_id' => 13013,
            'user_id' => 1,
            'note' => 'connected master bed to new ant in attic',
            'created_at' => '2012-11-20 09:08:42'
        ]);



        CustomerNote::create([
            'id' => 1686,
            'customer_id' => 28,
            'user_id' => 1,
            'note' => 'fitted ftac, joe farrell to pay',
            'created_at' => '2012-11-20 09:09:09'
        ]);



        CustomerNote::create([
            'id' => 1687,
            'customer_id' => 16063,
            'user_id' => 1,
            'note' => 'fitted sv stb to indoor aerial, advised signal should be from ant in attic',
            'created_at' => '2012-11-20 09:10:09'
        ]);



        CustomerNote::create([
            'id' => 1688,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => '		spoke to billy, will try do today tuesday or wed or if not will book for next tue or wed, may want other tvs connected to sv ant',
            'created_at' => '2012-11-20 09:34:22'
        ]);



        CustomerNote::create([
            'id' => 1689,
            'customer_id' => 16406,
            'user_id' => 1,
            'note' => 'very low signal levels here, ian made quick fix in atic to get some pics, outdoor aerial needed here, quoted 250.00 less deposit of 90.00 paid',
            'created_at' => '2012-11-20 09:42:15'
        ]);



        CustomerNote::create([
            'id' => 1690,
            'customer_id' => 15146,
            'user_id' => 1,
            'note' => '						sky + with no sat signal, bring second hand sky+ box',
            'created_at' => '2012-11-20 09:53:02'
        ]);



        CustomerNote::create([
            'id' => 1691,
            'customer_id' => 16406,
            'user_id' => 1,
            'note' => 'voicemail to mob',
            'created_at' => '2012-11-20 09:56:25'
        ]);



        CustomerNote::create([
            'id' => 1692,
            'customer_id' => 13266,
            'user_id' => 1,
            'note' => 'tunde bbc radio, foc',
            'created_at' => '2012-11-20 10:06:33'
        ]);



        CustomerNote::create([
            'id' => 1693,
            'customer_id' => 16889,
            'user_id' => 1,
            'note' => 'fitted sv stb 148.00 paid',
            'created_at' => '2012-11-20 10:07:39'
        ]);



        CustomerNote::create([
            'id' => 1694,
            'customer_id' => 16847,
            'user_id' => 1,
            'note' => '		fitted non standard ftac, paid 629.00 50db at kilduff tv',
            'created_at' => '2012-11-20 10:08:35'
        ]);



        CustomerNote::create([
            'id' => 1695,
            'customer_id' => 330,
            'user_id' => 1,
            'note' => 'Packed two cartons for return to AEL. Carton 1 has 4 Technistar 2000 combi & carton 2 has 6 Technistar combi and 1 Triax SD-HD. Courier name ',
            'created_at' => '2012-11-20 11:37:30'
        ]);



        CustomerNote::create([
            'id' => 1696,
            'customer_id' => 4299,
            'user_id' => 1,
            'note' => 'confirmed for wed ',
            'created_at' => '2012-11-20 11:55:38'
        ]);



        CustomerNote::create([
            'id' => 1697,
            'customer_id' => 16826,
            'user_id' => 1,
            'note' => 'done paid 100.00 connection',
            'created_at' => '2012-11-20 12:21:46'
        ]);



        CustomerNote::create([
            'id' => 1698,
            'customer_id' => 16892,
            'user_id' => 1,
            'note' => 'Fitted FTAC to two points with one STB, Feb 2012',
            'created_at' => '2012-11-20 14:21:13'
        ]);



        CustomerNote::create([
            'id' => 1699,
            'customer_id' => 16892,
            'user_id' => 1,
            'note' => 'quoted 25.95 each for STB shelf + 125.00 for used 537 combi with new RC, + fitting. ',
            'created_at' => '2012-11-20 14:22:19'
        ]);



        CustomerNote::create([
            'id' => 1700,
            'customer_id' => 12475,
            'user_id' => 1,
            'note' => '		no signal, dish next door was removed, no signal since, estimate €70-80',
            'created_at' => '2012-11-20 14:41:26'
        ]);



        CustomerNote::create([
            'id' => 1701,
            'customer_id' => 13983,
            'user_id' => 1,
            'note' => 'surveyed job, quote sent',
            'created_at' => '2012-11-20 14:49:51'
        ]);



        CustomerNote::create([
            'id' => 1702,
            'customer_id' => 16893,
            'user_id' => 1,
            'note' => 'SKY- paid 79.00',
            'created_at' => '2012-11-20 15:10:57'
        ]);



        CustomerNote::create([
            'id' => 1703,
            'customer_id' => 3396,
            'user_id' => 1,
            'note' => 'fit SV ant, may require mha, quoted 160.00 + 70.00 ',
            'created_at' => '2012-11-20 15:22:04'
        ]);



        CustomerNote::create([
            'id' => 1704,
            'customer_id' => 16894,
            'user_id' => 1,
            'note' => 'Fit customers combi STB, look at existing dish for connection, Fit SV STB to master bed, supply and fit small kitchen TV, has SV on sony TV. may require SV ant.  ',
            'created_at' => '2012-11-20 16:35:20'
        ]);



        CustomerNote::create([
            'id' => 1705,
            'customer_id' => 16849,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-20 17:01:18'
        ]);



        CustomerNote::create([
            'id' => 1706,
            'customer_id' => 12475,
            'user_id' => 1,
            'note' => 'paid 100.00 deposit',
            'created_at' => '2012-11-20 17:03:35'
        ]);



        CustomerNote::create([
            'id' => 1707,
            'customer_id' => 14080,
            'user_id' => 1,
            'note' => 'Voicemail',
            'created_at' => '2012-11-20 18:21:07'
        ]);



        CustomerNote::create([
            'id' => 1708,
            'customer_id' => 12576,
            'user_id' => 1,
            'note' => 'fitted 32 Hanspree LED, paid 331.00 + 399.00 cheque,',
            'created_at' => '2012-11-21 11:56:11'
        ]);



        CustomerNote::create([
            'id' => 1709,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'fitted triax tsc114 ftac, paid 399.00',
            'created_at' => '2012-11-21 11:56:59'
        ]);



        CustomerNote::create([
            'id' => 1710,
            'customer_id' => 16839,
            'user_id' => 1,
            'note' => 'Wants cordless CCTV looked at',
            'created_at' => '2012-11-21 11:57:20'
        ]);



        CustomerNote::create([
            'id' => 1711,
            'customer_id' => 16406,
            'user_id' => 1,
            'note' => 'does not want to go ahead for now, a good job was done!',
            'created_at' => '2012-11-21 12:05:55'
        ]);



        CustomerNote::create([
            'id' => 1712,
            'customer_id' => 15146,
            'user_id' => 1,
            'note' => 'Cancelled OD',
            'created_at' => '2012-11-21 12:42:54'
        ]);



        CustomerNote::create([
            'id' => 1713,
            'customer_id' => 13996,
            'user_id' => 1,
            'note' => 'tuned one walker stb, paid 50.00',
            'created_at' => '2012-11-21 12:49:08'
        ]);



        CustomerNote::create([
            'id' => 1714,
            'customer_id' => 16838,
            'user_id' => 1,
            'note' => 'replace box with one with text, explained recording drawbacks',
            'created_at' => '2012-11-21 14:36:28'
        ]);



        CustomerNote::create([
            'id' => 1715,
            'customer_id' => 16766,
            'user_id' => 1,
            'note' => 'retuned sv STB, check box',
            'created_at' => '2012-11-21 15:46:20'
        ]);



        CustomerNote::create([
            'id' => 1716,
            'customer_id' => 16766,
            'user_id' => 1,
            'note' => 'confimred',
            'created_at' => '2012-11-21 15:47:25'
        ]);



        CustomerNote::create([
            'id' => 1717,
            'customer_id' => 3396,
            'user_id' => 1,
            'note' => 'fitted sv ant,paid 190.00',
            'created_at' => '2012-11-22 08:50:21'
        ]);



        CustomerNote::create([
            'id' => 1718,
            'customer_id' => 12475,
            'user_id' => 1,
            'note' => 'paid 330.00 in total, 19.00 o/s',
            'created_at' => '2012-11-22 08:51:55'
        ]);



        CustomerNote::create([
            'id' => 1719,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => '				1 saorview stb, 2 sky hd rc, labour , 323.00, paid, remotes to be collected at shop',
            'created_at' => '2012-11-22 08:54:55'
        ]);



        CustomerNote::create([
            'id' => 1720,
            'customer_id' => 16483,
            'user_id' => 1,
            'note' => '		wants sky remote eye connected upstairs,eamon 086 8539166',
            'created_at' => '2012-11-22 16:13:55'
        ]);



        CustomerNote::create([
            'id' => 1721,
            'customer_id' => 16466,
            'user_id' => 1,
            'note' => 'Connect SV stb to existing ant. Fit MHA if required, signal low here. Has cables run already.',
            'created_at' => '2012-11-23 09:26:46'
        ]);



        CustomerNote::create([
            'id' => 1722,
            'customer_id' => 16466,
            'user_id' => 1,
            'note' => '		Connect SV stb to existing ant. Fit MHA if required, signal low here. Has cables run already. also connect third room to ant.',
            'created_at' => '2012-11-23 09:28:04'
        ]);



        CustomerNote::create([
            'id' => 1723,
            'customer_id' => 4758,
            'user_id' => 1,
            'note' => 'Sky pice intermitet, can feett record, can feett play back',
            'created_at' => '2012-11-23 15:26:40'
        ]);



        CustomerNote::create([
            'id' => 1724,
            'customer_id' => 16895,
            'user_id' => 1,
            'note' => 'Sky  no pics, connect kitchen to Sky also',
            'created_at' => '2012-11-24 11:37:44'
        ]);



        CustomerNote::create([
            'id' => 1725,
            'customer_id' => 1032,
            'user_id' => 1,
            'note' => '		remove old ant, blew down in wind, Martha 087 7605451',
            'created_at' => '2012-11-27 15:31:31'
        ]);



        CustomerNote::create([
            'id' => 1726,
            'customer_id' => 16896,
            'user_id' => 1,
            'note' => 'Fix FTA dish, fit SV ant.',
            'created_at' => '2012-11-24 11:42:40'
        ]);



        CustomerNote::create([
            'id' => 1727,
            'customer_id' => 16897,
            'user_id' => 1,
            'note' => 'Call re survey for music system TV etc, has CD player in basement',
            'created_at' => '2012-11-24 11:44:41'
        ]);



        CustomerNote::create([
            'id' => 1728,
            'customer_id' => 16892,
            'user_id' => 1,
            'note' => 'colledted paid 175.00 visa',
            'created_at' => '2012-11-24 12:02:45'
        ]);



        CustomerNote::create([
            'id' => 1729,
            'customer_id' => 16891,
            'user_id' => 1,
            'note' => '		done, fitted mha and psu, paid 240.00 cash 66dB at TV, MTL',
            'created_at' => '2012-11-24 12:08:32'
        ]);



        CustomerNote::create([
            'id' => 1730,
            'customer_id' => 12523,
            'user_id' => 1,
            'note' => 'tuned ok ,paid 49.00 cheque',
            'created_at' => '2012-11-24 12:09:41'
        ]);



        CustomerNote::create([
            'id' => 1731,
            'customer_id' => 9983,
            'user_id' => 1,
            'note' => '		fitted SV ant outside and split to 2 TVs, 53dB at TV, MTL, paid 280.00 cash',
            'created_at' => '2012-11-24 12:10:50'
        ]);



        CustomerNote::create([
            'id' => 1732,
            'customer_id' => 16521,
            'user_id' => 1,
            'note' => '		Cable has come away from back of STB, no pics. Edel.',
            'created_at' => '2012-11-26 11:06:40'
        ]);



        CustomerNote::create([
            'id' => 1734,
            'customer_id' => 11313,
            'user_id' => 1,
            'note' => 'retune stbs\r\n',
            'created_at' => '2012-11-26 11:30:19'
        ]);



        CustomerNote::create([
            'id' => 1735,
            'customer_id' => 12377,
            'user_id' => 1,
            'note' => 'advised cust toretune stb',
            'created_at' => '2012-11-26 11:57:55'
        ]);



        CustomerNote::create([
            'id' => 1736,
            'customer_id' => 2106,
            'user_id' => 1,
            'note' => '		noel dropped of stb, no rte, 086 7228885, had retuned rte, but keep disappearing',
            'created_at' => '2012-11-26 14:58:22'
        ]);



        CustomerNote::create([
            'id' => 1737,
            'customer_id' => 15768,
            'user_id' => 1,
            'note' => 'retune sky box, bbc radio and utv missing',
            'created_at' => '2012-11-26 15:45:44'
        ]);



        CustomerNote::create([
            'id' => 1738,
            'customer_id' => 13117,
            'user_id' => 1,
            'note' => 'advised retune sv stb for rte',
            'created_at' => '2012-11-26 16:03:47'
        ]);



        CustomerNote::create([
            'id' => 1739,
            'customer_id' => 16645,
            'user_id' => 1,
            'note' => 'will come back to us, may want new tv',
            'created_at' => '2012-11-26 16:36:36'
        ]);



        CustomerNote::create([
            'id' => 1740,
            'customer_id' => 15779,
            'user_id' => 1,
            'note' => 'Sky+ STB, no sat sig on  inchFox News inch check signal and check with other box. ',
            'created_at' => '2012-11-26 17:23:04'
        ]);



        CustomerNote::create([
            'id' => 1741,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => '		had builders in, used to have sky in four different rooms, with two boxes, not working at moment, Isabell 087 7563760',
            'created_at' => '2012-11-27 16:16:45'
        ]);



        CustomerNote::create([
            'id' => 1742,
            'customer_id' => 16483,
            'user_id' => 1,
            'note' => 'Eamon rang to cancel, will call to reschedule',
            'created_at' => '2012-11-26 17:29:13'
        ]);



        CustomerNote::create([
            'id' => 1743,
            'customer_id' => 15101,
            'user_id' => 1,
            'note' => 'James Moloney 051 644433 120.00 for check out two TVs',
            'created_at' => '2012-11-26 17:56:55'
        ]);



        CustomerNote::create([
            'id' => 1744,
            'customer_id' => 16766,
            'user_id' => 1,
            'note' => 'retuned',
            'created_at' => '2012-11-26 17:58:35'
        ]);



        CustomerNote::create([
            'id' => 1745,
            'customer_id' => 4889,
            'user_id' => 1,
            'note' => 'levels low at sky box, realigned dish, needs new cable from dish to kitchen, paid 49.00',
            'created_at' => '2012-11-26 18:00:30'
        ]);



        CustomerNote::create([
            'id' => 1746,
            'customer_id' => 4889,
            'user_id' => 1,
            'note' => 'replace cable from dish down to back door, ',
            'created_at' => '2012-11-26 18:01:00'
        ]);



        CustomerNote::create([
            'id' => 1747,
            'customer_id' => 197,
            'user_id' => 1,
            'note' => 'fitted two cam dome day and night cctv c/w dvr, total 1,250 paid kd',
            'created_at' => '2012-11-26 18:02:39'
        ]);



        CustomerNote::create([
            'id' => 1748,
            'customer_id' => 197,
            'user_id' => 1,
            'note' => 'run thru call back required',
            'created_at' => '2012-11-26 18:02:57'
        ]);



        CustomerNote::create([
            'id' => 1749,
            'customer_id' => 15768,
            'user_id' => 1,
            'note' => 'retuned bbc radio and utv, paid 49.00',
            'created_at' => '2012-11-26 18:03:37'
        ]);



        CustomerNote::create([
            'id' => 1750,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => 'cordless phone may be causing interference, will call back if requires callout',
            'created_at' => '2012-11-26 18:15:46'
        ]);



        CustomerNote::create([
            'id' => 1751,
            'customer_id' => 16817,
            'user_id' => 1,
            'note' => 'retuned, paid cash 49.00',
            'created_at' => '2012-11-26 18:18:36'
        ]);



        CustomerNote::create([
            'id' => 1752,
            'customer_id' => 15101,
            'user_id' => 1,
            'note' => '		po number: James Moloney mobile: 086 2164246',
            'created_at' => '2012-11-27 12:28:50'
        ]);



        CustomerNote::create([
            'id' => 1753,
            'customer_id' => 11313,
            'user_id' => 1,
            'note' => 'paid 64.00 ',
            'created_at' => '2012-11-27 12:32:33'
        ]);



        CustomerNote::create([
            'id' => 1754,
            'customer_id' => 14806,
            'user_id' => 1,
            'note' => 'retuned stb, 49.00 o/s FB invoiced',
            'created_at' => '2012-11-27 12:33:22'
        ]);



        CustomerNote::create([
            'id' => 1755,
            'customer_id' => 16728,
            'user_id' => 1,
            'note' => 'replaced SV STb for new one. FOC',
            'created_at' => '2012-11-27 14:43:27'
        ]);



        CustomerNote::create([
            'id' => 1756,
            'customer_id' => 16893,
            'user_id' => 1,
            'note' => 'Fitted Sky+ dish and STB',
            'created_at' => '2012-11-27 14:50:23'
        ]);



        CustomerNote::create([
            'id' => 1757,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'fitted ftac using existing dish, paid 349.00',
            'created_at' => '2012-11-27 14:51:21'
        ]);



        CustomerNote::create([
            'id' => 1758,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'Cust wants triax mod kit & second combi STB in bed room',
            'created_at' => '2012-11-27 14:51:50'
        ]);



        CustomerNote::create([
            'id' => 1759,
            'customer_id' => 16521,
            'user_id' => 1,
            'note' => 'Remake F-conn at back of STB',
            'created_at' => '2012-11-27 15:05:07'
        ]);



        CustomerNote::create([
            'id' => 1760,
            'customer_id' => 16479,
            'user_id' => 1,
            'note' => 'retune sv stb',
            'created_at' => '2012-11-27 15:06:44'
        ]);



        CustomerNote::create([
            'id' => 1761,
            'customer_id' => 15101,
            'user_id' => 1,
            'note' => 'rang switch and mobile, left voice mail and message with reception',
            'created_at' => '2012-11-27 15:25:46'
        ]);



        CustomerNote::create([
            'id' => 1762,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-27 15:27:37'
        ]);



        CustomerNote::create([
            'id' => 1763,
            'customer_id' => 1750,
            'user_id' => 1,
            'note' => 'Fit FTAC 399.00 , told john maybe we could connect extra room to SV ant into price of 399.00 if straight fwd',
            'created_at' => '2012-11-27 15:47:39'
        ]);



        CustomerNote::create([
            'id' => 1764,
            'customer_id' => 1750,
            'user_id' => 1,
            'note' => 'Booking confirmed for Tuesday first thing',
            'created_at' => '2012-11-27 15:48:20'
        ]);



        CustomerNote::create([
            'id' => 1765,
            'customer_id' => 15597,
            'user_id' => 1,
            'note' => 'sky no pics, will try fix himself for now',
            'created_at' => '2012-11-27 15:51:15'
        ]);



        CustomerNote::create([
            'id' => 1766,
            'customer_id' => 16838,
            'user_id' => 1,
            'note' => 'no sats here',
            'created_at' => '2012-11-27 15:55:00'
        ]);



        CustomerNote::create([
            'id' => 1767,
            'customer_id' => 2106,
            'user_id' => 1,
            'note' => 'updated firmware and new channel list, tested box for 24hrs, rtes all ok, 25.00',
            'created_at' => '2012-11-27 16:14:36'
        ]);



        CustomerNote::create([
            'id' => 1768,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-27 16:17:30'
        ]);



        CustomerNote::create([
            'id' => 1769,
            'customer_id' => 10389,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-27 16:19:39'
        ]);



        CustomerNote::create([
            'id' => 1770,
            'customer_id' => 15770,
            'user_id' => 1,
            'note' => 'undecided, will call back',
            'created_at' => '2012-11-27 16:35:10'
        ]);



        CustomerNote::create([
            'id' => 1771,
            'customer_id' => 16849,
            'user_id' => 1,
            'note' => 'cancelled by KD',
            'created_at' => '2012-11-27 16:36:13'
        ]);



        CustomerNote::create([
            'id' => 1772,
            'customer_id' => 14152,
            'user_id' => 1,
            'note' => 'still prob with saorsat sig here',
            'created_at' => '2012-11-27 17:01:08'
        ]);



        CustomerNote::create([
            'id' => 1773,
            'customer_id' => 1032,
            'user_id' => 1,
            'note' => 'all day Wed',
            'created_at' => '2012-11-27 17:07:08'
        ]);



        CustomerNote::create([
            'id' => 1774,
            'customer_id' => 1032,
            'user_id' => 1,
            'note' => 'not wed, try tomorrow or friday',
            'created_at' => '2012-11-28 09:03:41'
        ]);



        CustomerNote::create([
            'id' => 1775,
            'customer_id' => 16898,
            'user_id' => 1,
            'note' => 'fitted DVD player to 2 plasma screens at Waterford xmas.',
            'created_at' => '2012-11-28 09:47:02'
        ]);



        CustomerNote::create([
            'id' => 1776,
            'customer_id' => 16854,
            'user_id' => 1,
            'note' => 'fitted sv stb and ant, and connected to 4 way split in attic.220.00 paid',
            'created_at' => '2012-11-28 09:48:31'
        ]);



        CustomerNote::create([
            'id' => 1777,
            'customer_id' => 16479,
            'user_id' => 1,
            'note' => 'retuned paid 49.00',
            'created_at' => '2012-11-28 09:49:06'
        ]);



        CustomerNote::create([
            'id' => 1778,
            'customer_id' => 16890,
            'user_id' => 1,
            'note' => 'fitted ftac 349 and connected second tv 50. Paid 399 total',
            'created_at' => '2012-11-28 09:50:48'
        ]);



        CustomerNote::create([
            'id' => 1779,
            'customer_id' => 751,
            'user_id' => 1,
            'note' => 'fitted 3 x Triax 537 Nov 2011',
            'created_at' => '2012-11-28 09:53:06'
        ]);



        CustomerNote::create([
            'id' => 1780,
            'customer_id' => 751,
            'user_id' => 1,
            'note' => 'fit another triax 537 to Owens room and poss SV STb in garage using old ant in attic.',
            'created_at' => '2012-11-28 09:54:40'
        ]);



        CustomerNote::create([
            'id' => 1781,
            'customer_id' => 16899,
            'user_id' => 1,
            'note' => 'had sv ant fitted recently, working on one tv, needs signal on other tvs, advised mha may be required.',
            'created_at' => '2012-11-28 10:01:27'
        ]);



        CustomerNote::create([
            'id' => 1782,
            'customer_id' => 13351,
            'user_id' => 1,
            'note' => 'ni pics on tv 2. KD to call before going out',
            'created_at' => '2012-11-28 10:03:18'
        ]);



        CustomerNote::create([
            'id' => 1783,
            'customer_id' => 16900,
            'user_id' => 1,
            'note' => 'Fit SV ant for xmas, quoted 160.00 + 70.00 for MHA, ',
            'created_at' => '2012-11-28 10:09:23'
        ]);



        CustomerNote::create([
            'id' => 1784,
            'customer_id' => 4275,
            'user_id' => 1,
            'note' => 'Fit SV STb and ant 250.00',
            'created_at' => '2012-11-28 10:12:52'
        ]);



        CustomerNote::create([
            'id' => 1785,
            'customer_id' => 16901,
            'user_id' => 1,
            'note' => 'Fit FTAC, customer is concerned about planning guidelines, advised that dish and ant will work on rhs of ground floor app and is ok with planning there too.',
            'created_at' => '2012-11-28 10:17:01'
        ]);



        CustomerNote::create([
            'id' => 1786,
            'customer_id' => 16901,
            'user_id' => 1,
            'note' => 'ring first to meet customer',
            'created_at' => '2012-11-28 10:18:39'
        ]);



        CustomerNote::create([
            'id' => 1787,
            'customer_id' => 4275,
            'user_id' => 1,
            'note' => 'got cheaper somewhere else',
            'created_at' => '2012-11-28 13:53:31'
        ]);



        CustomerNote::create([
            'id' => 1788,
            'customer_id' => 16896,
            'user_id' => 1,
            'note' => 'this is not a job, just got quote for someone else',
            'created_at' => '2012-11-28 13:56:10'
        ]);



        CustomerNote::create([
            'id' => 1789,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-11-28 14:04:32'
        ]);



        CustomerNote::create([
            'id' => 1790,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => 'first thing friday morn, combi booked after this, no mroe than an hour or 1 1.5 hrs here',
            'created_at' => '2012-11-28 14:09:58'
        ]);



        CustomerNote::create([
            'id' => 1791,
            'customer_id' => 15779,
            'user_id' => 1,
            'note' => 'no reply to phone',
            'created_at' => '2012-11-28 14:12:01'
        ]);



        CustomerNote::create([
            'id' => 1792,
            'customer_id' => 4758,
            'user_id' => 1,
            'note' => 'not today will get back to us',
            'created_at' => '2012-11-28 14:13:09'
        ]);



        CustomerNote::create([
            'id' => 1793,
            'customer_id' => 16902,
            'user_id' => 1,
            'note' => 'Fit FTAC and connect customers FTA to dish, advised small xtra cost maybe for 2nd conn.',
            'created_at' => '2012-11-28 14:15:16'
        ]);



        CustomerNote::create([
            'id' => 1794,
            'customer_id' => 16902,
            'user_id' => 1,
            'note' => 'confirmed for 10.30 friday',
            'created_at' => '2012-11-28 14:23:20'
        ]);



        CustomerNote::create([
            'id' => 1795,
            'customer_id' => 16903,
            'user_id' => 1,
            'note' => 'Has sv stb and sv combi, prob with sv signal',
            'created_at' => '2012-11-28 14:46:20'
        ]);



        CustomerNote::create([
            'id' => 1796,
            'customer_id' => 16903,
            'user_id' => 1,
            'note' => 'has 3 sv stbs, 2 of em are combis, may want new dish and sv ant ',
            'created_at' => '2012-11-28 14:49:25'
        ]);



        CustomerNote::create([
            'id' => 1797,
            'customer_id' => 16899,
            'user_id' => 1,
            'note' => 'kath will call back when she knows hours she will be off next week',
            'created_at' => '2012-11-28 14:58:44'
        ]);



        CustomerNote::create([
            'id' => 1798,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'quoted 350.00 ish, difficult to price',
            'created_at' => '2012-11-28 15:01:40'
        ]);



        CustomerNote::create([
            'id' => 1799,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'booked monday after 9.30am',
            'created_at' => '2012-11-28 15:01:57'
        ]);



        CustomerNote::create([
            'id' => 1800,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'only thurs and friday',
            'created_at' => '2012-11-28 15:04:25'
        ]);



        CustomerNote::create([
            'id' => 1801,
            'customer_id' => 15994,
            'user_id' => 1,
            'note' => '		just call and see if you can make sale, not booked',
            'created_at' => '2012-11-28 15:05:28'
        ]);



        CustomerNote::create([
            'id' => 1802,
            'customer_id' => 13351,
            'user_id' => 1,
            'note' => 'KD installed before, rc extr in front room not working, connected to combi in other downstairs sitting room (where computer is)',
            'created_at' => '2012-11-28 15:10:53'
        ]);



        CustomerNote::create([
            'id' => 1803,
            'customer_id' => 16500,
            'user_id' => 1,
            'note' => 'connect extra room to sv ant also',
            'created_at' => '2012-11-28 15:15:48'
        ]);



        CustomerNote::create([
            'id' => 1804,
            'customer_id' => 16474,
            'user_id' => 1,
            'note' => 'sort out signal in showroom and front, no saorview and intermittent sats',
            'created_at' => '2012-11-28 16:00:55'
        ]);



        CustomerNote::create([
            'id' => 1805,
            'customer_id' => 16272,
            'user_id' => 1,
            'note' => 'Prog FTAC STB, and include HDMI lead, 169.00 + 35.00',
            'created_at' => '2012-11-28 16:17:50'
        ]);



        CustomerNote::create([
            'id' => 1806,
            'customer_id' => 15737,
            'user_id' => 1,
            'note' => 'Retune RTE, advised 49.00',
            'created_at' => '2012-11-28 17:11:54'
        ]);



        CustomerNote::create([
            'id' => 1807,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'spoke to Mary Louise Carroll regarding her mother Barbara, lady maintained we  inchhoodwinked inch her widowed aged mother. Mary said she was demanding a refund. Mary said she was not happy with her mothers TV installation. I explained to Mary Louise that we could not comment under Data Protection Act. \r\n\r\n',
            'created_at' => '2012-11-28 17:22:59'
        ]);



        CustomerNote::create([
            'id' => 1808,
            'customer_id' => 16904,
            'user_id' => 1,
            'note' => 'Sky box, no sat sign',
            'created_at' => '2012-11-28 17:27:59'
        ]);



        CustomerNote::create([
            'id' => 1809,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => '		Kd also recalls that Barbara had no problem with her installation until RTe changed on nov 7th. Barbara was also willing for somone to call out and retune her FTAC FOC. Problem only arose post 7th Nov and after quote for callout charge.',
            'created_at' => '2012-11-28 17:36:24'
        ]);



        CustomerNote::create([
            'id' => 1810,
            'customer_id' => 16905,
            'user_id' => 1,
            'note' => 'Fit FTAC ',
            'created_at' => '2012-11-28 17:33:39'
        ]);



        CustomerNote::create([
            'id' => 1811,
            'customer_id' => 16905,
            'user_id' => 1,
            'note' => 'will call friday to confirm access',
            'created_at' => '2012-11-28 17:34:25'
        ]);



        CustomerNote::create([
            'id' => 1812,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'Notes from phone call earlier, Mary Louise rang first off, KD explained he would call her back, customer was not calm during first call. Customer called back again within 15 min , and again was not calm, KD explained he was with another ciustomer and would ring back. KD did call back in approx 15 min. Mary Louise accused me of taking advantage of her elderly mother, she shouted and accused me of installing something that her mother did not need or did not want.',
            'created_at' => '2012-11-28 19:17:01'
        ]);



        CustomerNote::create([
            'id' => 1813,
            'customer_id' => 16899,
            'user_id' => 1,
            'note' => 'confirmed home monday',
            'created_at' => '2012-11-29 14:18:14'
        ]);



        CustomerNote::create([
            'id' => 1814,
            'customer_id' => 16838,
            'user_id' => 1,
            'note' => '		retuned stb, foc',
            'created_at' => '2012-11-29 15:24:07'
        ]);



        CustomerNote::create([
            'id' => 1815,
            'customer_id' => 4299,
            'user_id' => 1,
            'note' => 'fitted sv ant, non standard, 245.00 paid',
            'created_at' => '2012-11-29 15:24:58'
        ]);



        CustomerNote::create([
            'id' => 1816,
            'customer_id' => 4889,
            'user_id' => 1,
            'note' => 'replaced cable, 67.00 paid',
            'created_at' => '2012-11-29 15:25:57'
        ]);



        CustomerNote::create([
            'id' => 1817,
            'customer_id' => 16466,
            'user_id' => 1,
            'note' => '		fitted mha and 3 way split to three tvs, paid 210.50',
            'created_at' => '2012-11-29 15:26:49'
        ]);



        CustomerNote::create([
            'id' => 1818,
            'customer_id' => 15737,
            'user_id' => 1,
            'note' => 'retuned edison stb, paid 49.00',
            'created_at' => '2012-11-29 15:27:20'
        ]);



        CustomerNote::create([
            'id' => 1819,
            'customer_id' => 16906,
            'user_id' => 1,
            'note' => 'FTAV, also connect existng combi to new dish and prob aerial',
            'created_at' => '2012-11-29 16:43:28'
        ]);



        CustomerNote::create([
            'id' => 1820,
            'customer_id' => 3873,
            'user_id' => 1,
            'note' => 'moved tv out of room while decorating, no signal when tv put back in',
            'created_at' => '2012-11-29 16:51:27'
        ]);



        CustomerNote::create([
            'id' => 1821,
            'customer_id' => 16901,
            'user_id' => 1,
            'note' => 'fitted ftac, paid cash',
            'created_at' => '2012-11-30 09:22:42'
        ]);



        CustomerNote::create([
            'id' => 1822,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => 'quoted 600-700 for combi sys and mod kit and set up.',
            'created_at' => '2012-11-30 09:41:47'
        ]);



        CustomerNote::create([
            'id' => 1823,
            'customer_id' => 1138,
            'user_id' => 1,
            'note' => 'paid cheque 338.00',
            'created_at' => '2012-11-30 10:03:39'
        ]);



        CustomerNote::create([
            'id' => 1824,
            'customer_id' => 16907,
            'user_id' => 1,
            'note' => 'Fit SV ant, may have ant',
            'created_at' => '2012-11-30 10:06:36'
        ]);



        CustomerNote::create([
            'id' => 1825,
            'customer_id' => 15994,
            'user_id' => 1,
            'note' => 'just survey and collect deposit here',
            'created_at' => '2012-11-30 10:07:22'
        ]);



        CustomerNote::create([
            'id' => 1826,
            'customer_id' => 14228,
            'user_id' => 1,
            'note' => 'has new sky + box since march this year, has other sky box connected to same dish working ok, check levels at both boxes, sounds like box, bring loan box just in case. Also do back up on box.',
            'created_at' => '2012-11-30 10:20:32'
        ]);



        CustomerNote::create([
            'id' => 1827,
            'customer_id' => 1593,
            'user_id' => 1,
            'note' => 'no rc ext downstairs',
            'created_at' => '2012-11-30 14:10:33'
        ]);



        CustomerNote::create([
            'id' => 1828,
            'customer_id' => 16908,
            'user_id' => 1,
            'note' => 'Sky no signal, advided 49.00 +',
            'created_at' => '2012-11-30 15:18:12'
        ]);



        CustomerNote::create([
            'id' => 1829,
            'customer_id' => 16904,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-12-03 09:02:23'
        ]);



        CustomerNote::create([
            'id' => 1830,
            'customer_id' => 16908,
            'user_id' => 1,
            'note' => 'cancelled',
            'created_at' => '2012-12-03 09:02:48'
        ]);



        CustomerNote::create([
            'id' => 1831,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'no show ID',
            'created_at' => '2012-12-03 09:22:15'
        ]);



        CustomerNote::create([
            'id' => 1832,
            'customer_id' => 16907,
            'user_id' => 1,
            'note' => 'No show ID',
            'created_at' => '2012-12-03 09:23:43'
        ]);



        CustomerNote::create([
            'id' => 1833,
            'customer_id' => 16899,
            'user_id' => 1,
            'note' => 'No show ID',
            'created_at' => '2012-12-03 09:24:46'
        ]);



        CustomerNote::create([
            'id' => 1834,
            'customer_id' => 13351,
            'user_id' => 1,
            'note' => 'No show ID',
            'created_at' => '2012-12-03 09:25:49'
        ]);



        CustomerNote::create([
            'id' => 1835,
            'customer_id' => 13351,
            'user_id' => 1,
            'note' => 'Plugged out during thunder storm',
            'created_at' => '2012-12-03 09:26:56'
        ]);



        CustomerNote::create([
            'id' => 1836,
            'customer_id' => 16500,
            'user_id' => 1,
            'note' => 'No show ID',
            'created_at' => '2012-12-03 09:28:09'
        ]);



        CustomerNote::create([
            'id' => 1837,
            'customer_id' => 16905,
            'user_id' => 1,
            'note' => 'not suitable Tuesday, hold for moment',
            'created_at' => '2012-12-03 09:32:19'
        ]);



        CustomerNote::create([
            'id' => 1838,
            'customer_id' => 16902,
            'user_id' => 1,
            'note' => 'Fitted FTAC, and wired for second FTACconnection. MTL ant 72- TV 56. Paid cash 480.00',
            'created_at' => '2012-12-03 10:24:16'
        ]);



        CustomerNote::create([
            'id' => 1839,
            'customer_id' => 16903,
            'user_id' => 1,
            'note' => 'Fitted FTAc and wired for second combi box, cust advised about low levels, customer to run new cables if any trouble with sig, levels at TV 54,50.MTL. Paid 480.00 cheque',
            'created_at' => '2012-12-03 10:26:10'
        ]);



        CustomerNote::create([
            'id' => 1840,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'Not back until Friday',
            'created_at' => '2012-12-03 10:59:51'
        ]);



        CustomerNote::create([
            'id' => 1841,
            'customer_id' => 16909,
            'user_id' => 1,
            'note' => 'Fit FTAC anc connect two other tvs to SV ant',
            'created_at' => '2012-12-03 11:13:30'
        ]);



        CustomerNote::create([
            'id' => 1842,
            'customer_id' => 16909,
            'user_id' => 1,
            'note' => 'Paid 399.00 visa',
            'created_at' => '2012-12-03 11:14:26'
        ]);



        CustomerNote::create([
            'id' => 1843,
            'customer_id' => 16906,
            'user_id' => 1,
            'note' => '32 inch TV HS LED €369.00',
            'created_at' => '2012-12-03 11:33:03'
        ]);



        CustomerNote::create([
            'id' => 1844,
            'customer_id' => 16716,
            'user_id' => 1,
            'note' => 'call to check SV signal level with a view to installing 2 x SV STBs.',
            'created_at' => '2012-12-03 16:00:19'
        ]);



        CustomerNote::create([
            'id' => 1845,
            'customer_id' => 16894,
            'user_id' => 1,
            'note' => 'Works completed, delivered and fitted 19LG, paid 583.50 in total',
            'created_at' => '2012-12-03 16:14:23'
        ]);



        CustomerNote::create([
            'id' => 1846,
            'customer_id' => 3873,
            'user_id' => 1,
            'note' => 'Paid callout, re connected cables correctly',
            'created_at' => '2012-12-03 16:15:05'
        ]);



        CustomerNote::create([
            'id' => 1847,
            'customer_id' => 14228,
            'user_id' => 1,
            'note' => 'replaced sky box under warranty, foc',
            'created_at' => '2012-12-03 16:15:41'
        ]);



        CustomerNote::create([
            'id' => 1848,
            'customer_id' => 6924,
            'user_id' => 1,
            'note' => 'Realigned dish, off slightly, replaced disecq also. FOC',
            'created_at' => '2012-12-03 16:16:22'
        ]);



        CustomerNote::create([
            'id' => 1849,
            'customer_id' => 751,
            'user_id' => 1,
            'note' => 'fitted SV STB and Triax SD HD 537. Paid 250.00',
            'created_at' => '2012-12-03 16:17:08'
        ]);



        CustomerNote::create([
            'id' => 1850,
            'customer_id' => 1593,
            'user_id' => 1,
            'note' => 'ran new cable and fitted new rc extr. Paid 200.00',
            'created_at' => '2012-12-03 16:17:36'
        ]);



        CustomerNote::create([
            'id' => 1851,
            'customer_id' => 11747,
            'user_id' => 1,
            'note' => 'TV cooected to Sky box not working',
            'created_at' => '2012-12-03 17:17:39'
        ]);



        CustomerNote::create([
            'id' => 1852,
            'customer_id' => 16906,
            'user_id' => 1,
            'note' => 'Confirmed Thursday',
            'created_at' => '2012-12-04 11:44:38'
        ]);



        CustomerNote::create([
            'id' => 1853,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => 'kd will call back to arrange install',
            'created_at' => '2012-12-04 17:32:25'
        ]);



        CustomerNote::create([
            'id' => 1854,
            'customer_id' => 16909,
            'user_id' => 1,
            'note' => 'Fitted Triax FTac, connected SV ant to two other tv points, paid 399 visa and 71.50 cash. SV levels low, cust only in rented house moving in six months.',
            'created_at' => '2012-12-05 13:17:34'
        ]);



        CustomerNote::create([
            'id' => 1855,
            'customer_id' => 16716,
            'user_id' => 1,
            'note' => 'Checked levels in comms, 66 DVB, quoted 200 for record SV STB inc USB, and 360 for two boxes,',
            'created_at' => '2012-12-05 13:20:48'
        ]);



        CustomerNote::create([
            'id' => 1856,
            'customer_id' => 1750,
            'user_id' => 1,
            'note' => 'confirmed Fri first thing',
            'created_at' => '2012-12-05 14:36:37'
        ]);



        CustomerNote::create([
            'id' => 1857,
            'customer_id' => 15779,
            'user_id' => 1,
            'note' => 'no reply to phone, prov for Thurs',
            'created_at' => '2012-12-05 14:48:59'
        ]);



        CustomerNote::create([
            'id' => 1858,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'FTA box no sat signal, dish has not been used for 12 months, friend has been trying to install ',
            'created_at' => '2012-12-05 16:42:35'
        ]);



        CustomerNote::create([
            'id' => 1859,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'Paid laser 49.00',
            'created_at' => '2012-12-05 16:45:59'
        ]);



        CustomerNote::create([
            'id' => 1860,
            'customer_id' => 16911,
            'user_id' => 1,
            'note' => 'fit SV ant, has sv tv',
            'created_at' => '2012-12-05 16:59:59'
        ]);



        CustomerNote::create([
            'id' => 1861,
            'customer_id' => 16911,
            'user_id' => 1,
            'note' => 'prov, will ring if golfing monday',
            'created_at' => '2012-12-05 17:02:16'
        ]);



        CustomerNote::create([
            'id' => 1862,
            'customer_id' => 15779,
            'user_id' => 1,
            'note' => 'Tree causing signal problems,moved dish to location of customers pref, no improvement, moved dish again, signal all OK. Fitted new dish and LNB and cable run. 9-11, two men plus materials ',
            'created_at' => '2012-12-06 11:02:21'
        ]);



        CustomerNote::create([
            'id' => 1863,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => 'confirmed for fri pm',
            'created_at' => '2012-12-06 14:44:44'
        ]);



        CustomerNote::create([
            'id' => 1864,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => 'may want extra points connected, advised mha also',
            'created_at' => '2012-12-06 14:48:49'
        ]);



        CustomerNote::create([
            'id' => 1865,
            'customer_id' => 16912,
            'user_id' => 1,
            'note' => 'Fit Sky+ HD STB, communal system.',
            'created_at' => '2012-12-06 15:59:36'
        ]);



        CustomerNote::create([
            'id' => 1866,
            'customer_id' => 362,
            'user_id' => 1,
            'note' => 'moved tv, no pics',
            'created_at' => '2012-12-06 16:00:46'
        ]);



        CustomerNote::create([
            'id' => 1867,
            'customer_id' => 11747,
            'user_id' => 1,
            'note' => 'cancelled, customer sorted',
            'created_at' => '2012-12-06 16:52:46'
        ]);



        CustomerNote::create([
            'id' => 1868,
            'customer_id' => 16673,
            'user_id' => 1,
            'note' => '		Sounds like SV STB and old TV in kitchen need to be retuned for MTL23, customer moved stuff around since we were out before',
            'created_at' => '2012-12-07 09:48:01'
        ]);



        CustomerNote::create([
            'id' => 1869,
            'customer_id' => 16473,
            'user_id' => 1,
            'note' => 'measure in Sorcha app, then replace dish with TD78 and measure agian.',
            'created_at' => '2012-12-07 09:50:00'
        ]);



        CustomerNote::create([
            'id' => 1870,
            'customer_id' => 14023,
            'user_id' => 1,
            'note' => '				Repair HE at 101 Pat St. after fire damage, key12key',
            'created_at' => '2012-12-07 15:08:27'
        ]);



        CustomerNote::create([
            'id' => 1871,
            'customer_id' => 16913,
            'user_id' => 1,
            'note' => 'Fit FTAC to communal system, quoted €199.00',
            'created_at' => '2012-12-07 10:46:10'
        ]);



        CustomerNote::create([
            'id' => 1872,
            'customer_id' => 16906,
            'user_id' => 1,
            'note' => 'fitted sv ant in attic, split 3 ways to existing combi, new combi , and master bed, also fitted 32 HS LED, paid laser 768.00 , customers dish',
            'created_at' => '2012-12-07 11:00:51'
        ]);



        CustomerNote::create([
            'id' => 1873,
            'customer_id' => 16912,
            'user_id' => 1,
            'note' => 'done',
            'created_at' => '2012-12-07 11:02:13'
        ]);



        CustomerNote::create([
            'id' => 1874,
            'customer_id' => 16914,
            'user_id' => 1,
            'note' => 'Fitted Sky+ HD to living room',
            'created_at' => '2012-12-07 11:16:35'
        ]);



        CustomerNote::create([
            'id' => 1875,
            'customer_id' => 1750,
            'user_id' => 1,
            'note' => 'Fitted FTAC, paid 399.00 cheque . ant 78, TV 74 MTL',
            'created_at' => '2012-12-07 11:55:01'
        ]);



        CustomerNote::create([
            'id' => 1876,
            'customer_id' => 16915,
            'user_id' => 1,
            'note' => 'FTAC 399.00',
            'created_at' => '2012-12-07 12:29:56'
        ]);



        CustomerNote::create([
            'id' => 1877,
            'customer_id' => 16915,
            'user_id' => 1,
            'note' => 'Connect other TVs to SV ant and bill seperate',
            'created_at' => '2012-12-07 12:34:08'
        ]);



        CustomerNote::create([
            'id' => 1878,
            'customer_id' => 16916,
            'user_id' => 1,
            'note' => 'Fit SV ant and connect to living room TV 135.00 ',
            'created_at' => '2012-12-07 14:22:15'
        ]);



        CustomerNote::create([
            'id' => 1879,
            'customer_id' => 13054,
            'user_id' => 1,
            'note' => 'FTA sat no signal',
            'created_at' => '2012-12-07 14:59:01'
        ]);



        CustomerNote::create([
            'id' => 1880,
            'customer_id' => 13054,
            'user_id' => 1,
            'note' => 'Call Monday 17th',
            'created_at' => '2012-12-07 15:02:05'
        ]);



        CustomerNote::create([
            'id' => 1881,
            'customer_id' => 16917,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB to bedroom, look at moving dish up to avoid trees across road. Works on ring rd. close by',
            'created_at' => '2012-12-07 16:01:24'
        ]);



        CustomerNote::create([
            'id' => 1882,
            'customer_id' => 16886,
            'user_id' => 1,
            'note' => 'Fitted SV ant, 180.00 paid',
            'created_at' => '2012-12-07 16:06:09'
        ]);



        CustomerNote::create([
            'id' => 1883,
            'customer_id' => 16915,
            'user_id' => 1,
            'note' => 'Paid visa 399.00',
            'created_at' => '2012-12-10 09:11:58'
        ]);



        CustomerNote::create([
            'id' => 1884,
            'customer_id' => 1706,
            'user_id' => 1,
            'note' => 'Fit SV ant and STB, 250.00',
            'created_at' => '2012-12-10 10:01:00'
        ]);



        CustomerNote::create([
            'id' => 1885,
            'customer_id' => 16918,
            'user_id' => 1,
            'note' => 'Fit FTAC , book for Friday 14th Dec',
            'created_at' => '2012-12-10 10:04:31'
        ]);



        CustomerNote::create([
            'id' => 1886,
            'customer_id' => 16918,
            'user_id' => 1,
            'note' => 'booking prov, TBC with cust',
            'created_at' => '2012-12-10 10:05:44'
        ]);



        CustomerNote::create([
            'id' => 1887,
            'customer_id' => 16807,
            'user_id' => 1,
            'note' => 'new cable required, ask ID',
            'created_at' => '2012-12-10 10:07:01'
        ]);



        CustomerNote::create([
            'id' => 1888,
            'customer_id' => 1909,
            'user_id' => 1,
            'note' => 'sky pics breaking up',
            'created_at' => '2012-12-10 10:11:37'
        ]);



        CustomerNote::create([
            'id' => 1889,
            'customer_id' => 14130,
            'user_id' => 1,
            'note' => 'Sky new conn',
            'created_at' => '2012-12-10 10:16:24'
        ]);



        CustomerNote::create([
            'id' => 1890,
            'customer_id' => 16919,
            'user_id' => 1,
            'note' => 'Sky new conn',
            'created_at' => '2012-12-10 10:17:38'
        ]);



        CustomerNote::create([
            'id' => 1891,
            'customer_id' => 1032,
            'user_id' => 1,
            'note' => 'removed ant, paid 75.00',
            'created_at' => '2012-12-10 10:18:56'
        ]);



        CustomerNote::create([
            'id' => 1892,
            'customer_id' => 16913,
            'user_id' => 1,
            'note' => 'installed combi stb, paid 199.00 visa',
            'created_at' => '2012-12-10 10:19:28'
        ]);



        CustomerNote::create([
            'id' => 1893,
            'customer_id' => 14023,
            'user_id' => 1,
            'note' => 'carried out repairs to HE at 101, new cable run.',
            'created_at' => '2012-12-10 10:20:11'
        ]);



        CustomerNote::create([
            'id' => 1894,
            'customer_id' => 16917,
            'user_id' => 1,
            'note' => 'prov TBC',
            'created_at' => '2012-12-10 11:08:41'
        ]);



        CustomerNote::create([
            'id' => 1895,
            'customer_id' => 16905,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-12-10 11:10:50'
        ]);



        CustomerNote::create([
            'id' => 1896,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 11:12:55'
        ]);



        CustomerNote::create([
            'id' => 1897,
            'customer_id' => 16917,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-12-10 11:13:53'
        ]);



        CustomerNote::create([
            'id' => 1898,
            'customer_id' => 16907,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 11:16:00'
        ]);



        CustomerNote::create([
            'id' => 1899,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 11:22:27'
        ]);



        CustomerNote::create([
            'id' => 1900,
            'customer_id' => 16916,
            'user_id' => 1,
            'note' => 'voicemail tbc',
            'created_at' => '2012-12-10 11:28:10'
        ]);



        CustomerNote::create([
            'id' => 1901,
            'customer_id' => 16916,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 11:43:08'
        ]);



        CustomerNote::create([
            'id' => 1902,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 11:51:05'
        ]);



        CustomerNote::create([
            'id' => 1903,
            'customer_id' => 16500,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-12-10 11:58:12'
        ]);



        CustomerNote::create([
            'id' => 1904,
            'customer_id' => 16500,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 11:58:54'
        ]);



        CustomerNote::create([
            'id' => 1905,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2012-12-10 12:00:05'
        ]);



        CustomerNote::create([
            'id' => 1906,
            'customer_id' => 13351,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 12:01:39'
        ]);



        CustomerNote::create([
            'id' => 1907,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-10 12:02:08'
        ]);



        CustomerNote::create([
            'id' => 1908,
            'customer_id' => 5370,
            'user_id' => 1,
            'note' => 'fit sv ant and stb OR combi sys',
            'created_at' => '2012-12-10 12:55:44'
        ]);



        CustomerNote::create([
            'id' => 1909,
            'customer_id' => 16424,
            'user_id' => 1,
            'note' => 'check TV in kitchen connected to RC extr, and make cable where dog chewed',
            'created_at' => '2012-12-10 14:41:48'
        ]);



        CustomerNote::create([
            'id' => 1910,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'run temp cable from bike shed to app',
            'created_at' => '2012-12-10 15:06:57'
        ]);



        CustomerNote::create([
            'id' => 1911,
            'customer_id' => 16920,
            'user_id' => 1,
            'note' => 'Fit SV ant and stb, contact security on way down.\r\n\r\nref J Neary. 086 2558221\r\n\r\nSeamus (Security) 086 6060544 ',
            'created_at' => '2012-12-13 14:10:53'
        ]);



        CustomerNote::create([
            'id' => 1912,
            'customer_id' => 5370,
            'user_id' => 1,
            'note' => 'no reply to landline, voicemail mobile',
            'created_at' => '2012-12-10 16:27:28'
        ]);



        CustomerNote::create([
            'id' => 1913,
            'customer_id' => 16673,
            'user_id' => 1,
            'note' => '		retuned tv in kitchen',
            'created_at' => '2013-03-22 21:07:08'
        ]);



        CustomerNote::create([
            'id' => 1914,
            'customer_id' => 16473,
            'user_id' => 1,
            'note' => 'replaced dish and multiswitch here, signal at HE, but none at app#1, advised new cabling required',
            'created_at' => '2012-12-10 16:30:11'
        ]);



        CustomerNote::create([
            'id' => 1915,
            'customer_id' => 16919,
            'user_id' => 1,
            'note' => 'cancelled by customer',
            'created_at' => '2012-12-10 16:37:41'
        ]);



        CustomerNote::create([
            'id' => 1916,
            'customer_id' => 16511,
            'user_id' => 1,
            'note' => '		re fit stb following flood damage',
            'created_at' => '2012-12-10 17:28:14'
        ]);



        CustomerNote::create([
            'id' => 1917,
            'customer_id' => 16915,
            'user_id' => 1,
            'note' => '087 2217586',
            'created_at' => '2012-12-10 18:46:16'
        ]);



        CustomerNote::create([
            'id' => 1918,
            'customer_id' => 16921,
            'user_id' => 1,
            'note' => 'Fit Triax combi box only €219.00',
            'created_at' => '2012-12-11 11:23:38'
        ]);



        CustomerNote::create([
            'id' => 1919,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'quoted 100-150',
            'created_at' => '2012-12-11 12:02:11'
        ]);



        CustomerNote::create([
            'id' => 1920,
            'customer_id' => 16922,
            'user_id' => 1,
            'note' => 'Fit Sv STB, has signal, paid 128.00',
            'created_at' => '2012-12-11 12:31:40'
        ]);



        CustomerNote::create([
            'id' => 1921,
            'customer_id' => 16911,
            'user_id' => 1,
            'note' => 'fitted sv ant, paid 180.00',
            'created_at' => '2012-12-11 12:38:23'
        ]);



        CustomerNote::create([
            'id' => 1922,
            'customer_id' => 16923,
            'user_id' => 1,
            'note' => 'Re fit sky dish after builders',
            'created_at' => '2012-12-11 14:13:57'
        ]);



        CustomerNote::create([
            'id' => 1923,
            'customer_id' => 16923,
            'user_id' => 1,
            'note' => 'Confirmed',
            'created_at' => '2012-12-11 14:15:55'
        ]);



        CustomerNote::create([
            'id' => 1924,
            'customer_id' => 11747,
            'user_id' => 1,
            'note' => 'no reply',
            'created_at' => '2012-12-11 14:24:23'
        ]);



        CustomerNote::create([
            'id' => 1925,
            'customer_id' => 11747,
            'user_id' => 1,
            'note' => 'has two sky boxes in same room, sounds like second room is connected via RC extr, no pics on second TV',
            'created_at' => '2012-12-11 14:34:26'
        ]);



        CustomerNote::create([
            'id' => 1926,
            'customer_id' => 16915,
            'user_id' => 1,
            'note' => 'Fitted FTAC and SV to two other points, cables in comms not connected to attic, had to run extra cabling outside. ',
            'created_at' => '2012-12-11 15:01:40'
        ]);



        CustomerNote::create([
            'id' => 1927,
            'customer_id' => 881,
            'user_id' => 1,
            'note' => 'Fit combi sys x 2 , €649.00',
            'created_at' => '2012-12-11 16:13:52'
        ]);



        CustomerNote::create([
            'id' => 1928,
            'customer_id' => 881,
            'user_id' => 1,
            'note' => 'include two sticks',
            'created_at' => '2012-12-11 16:18:54'
        ]);



        CustomerNote::create([
            'id' => 1929,
            'customer_id' => 881,
            'user_id' => 1,
            'note' => 'connect existing video sender to new combi box',
            'created_at' => '2012-12-11 16:22:32'
        ]);



        CustomerNote::create([
            'id' => 1930,
            'customer_id' => 881,
            'user_id' => 1,
            'note' => 'Paid €200.00 visa',
            'created_at' => '2012-12-11 16:24:11'
        ]);



        CustomerNote::create([
            'id' => 1931,
            'customer_id' => 11747,
            'user_id' => 1,
            'note' => 'callout booked, paid €49.00 laser, post receipt',
            'created_at' => '2012-12-11 16:31:03'
        ]);



        CustomerNote::create([
            'id' => 1932,
            'customer_id' => 16405,
            'user_id' => 1,
            'note' => '		odred xoro rc, hrc9000, 34.95, paid visa debit',
            'created_at' => '2012-12-11 16:41:21'
        ]);



        CustomerNote::create([
            'id' => 1933,
            'customer_id' => 16907,
            'user_id' => 1,
            'note' => 'Fitted SV ant MHA and psu, new dish and LNB,paid cheque 300.00',
            'created_at' => '2012-12-12 11:04:57'
        ]);



        CustomerNote::create([
            'id' => 1934,
            'customer_id' => 16899,
            'user_id' => 1,
            'note' => 'Realign ant for MTL, fitted new MHA , connected three TVs, two with  RC extrs, paid 353.00 cash ',
            'created_at' => '2012-12-12 13:54:45'
        ]);



        CustomerNote::create([
            'id' => 1935,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'spoke to barbara, offered sv stb replacement for combi and 110.00 refund, barbara to think about it',
            'created_at' => '2012-12-13 09:46:47'
        ]);



        CustomerNote::create([
            'id' => 1936,
            'customer_id' => 14152,
            'user_id' => 1,
            'note' => '		signal intermittent on saorview and 28 sats, replace set top box and disecq switch, home all day monday',
            'created_at' => '2012-12-13 10:18:50'
        ]);



        CustomerNote::create([
            'id' => 1938,
            'customer_id' => 16918,
            'user_id' => 1,
            'note' => '2.00 pm friday ok, wife, 087 2075756',
            'created_at' => '2012-12-13 11:39:11'
        ]);



        CustomerNote::create([
            'id' => 1939,
            'customer_id' => 16783,
            'user_id' => 1,
            'note' => 'no satellite channels',
            'created_at' => '2012-12-13 12:36:15'
        ]);



        CustomerNote::create([
            'id' => 1940,
            'customer_id' => 16922,
            'user_id' => 1,
            'note' => 'done, signal low from customers existing ant, advised',
            'created_at' => '2012-12-13 13:58:44'
        ]);



        CustomerNote::create([
            'id' => 1941,
            'customer_id' => 16459,
            'user_id' => 1,
            'note' => 'joe called in to office , no sound on both tvs, Ian called out, working again now',
            'created_at' => '2012-12-13 14:00:05'
        ]);



        CustomerNote::create([
            'id' => 1942,
            'customer_id' => 15994,
            'user_id' => 1,
            'note' => 'called, quoted 510.00 for two combi stb and mha and psu',
            'created_at' => '2012-12-13 14:00:53'
        ]);



        CustomerNote::create([
            'id' => 1943,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'fitted triax combi stb & trilink kit, tuned 4 TVs in bar into  mod. ',
            'created_at' => '2012-12-13 14:01:55'
        ]);



        CustomerNote::create([
            'id' => 1944,
            'customer_id' => 2671,
            'user_id' => 1,
            'note' => 'tidy up all cabling upstairs, Jim to organise timber on wall to mount equipment',
            'created_at' => '2012-12-13 14:02:41'
        ]);



        CustomerNote::create([
            'id' => 1945,
            'customer_id' => 16720,
            'user_id' => 1,
            'note' => 'fitted new tv stand, no remote link to 2nd tv since',
            'created_at' => '2012-12-13 15:15:54'
        ]);



        CustomerNote::create([
            'id' => 1947,
            'customer_id' => 16924,
            'user_id' => 1,
            'note' => '		Fit SV STB and SV ant and connect to second TV. Can see MTL from house.',
            'created_at' => '2012-12-14 09:38:49'
        ]);



        CustomerNote::create([
            'id' => 1948,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'customer swaped boxes around, fault still there.',
            'created_at' => '2012-12-13 15:45:52'
        ]);



        CustomerNote::create([
            'id' => 1949,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'check signal levels going to both TVs. Replace diseqc switch on point that is giving trouble. FOC',
            'created_at' => '2012-12-13 15:48:36'
        ]);



        CustomerNote::create([
            'id' => 1950,
            'customer_id' => 6988,
            'user_id' => 1,
            'note' => 'fitted combi etc. as detailed below, paid 650.00 visa',
            'created_at' => '2012-12-13 17:03:20'
        ]);



        CustomerNote::create([
            'id' => 1951,
            'customer_id' => 173,
            'user_id' => 1,
            'note' => 'fix tv in kitchen',
            'created_at' => '2012-12-13 17:49:37'
        ]);



        CustomerNote::create([
            'id' => 1952,
            'customer_id' => 16925,
            'user_id' => 1,
            'note' => 'Fit SV antenna.',
            'created_at' => '2012-12-14 09:19:57'
        ]);



        CustomerNote::create([
            'id' => 1953,
            'customer_id' => 16900,
            'user_id' => 1,
            'note' => 'Paid 160.00, advised on MHA',
            'created_at' => '2012-12-14 09:21:39'
        ]);



        CustomerNote::create([
            'id' => 1954,
            'customer_id' => 16900,
            'user_id' => 1,
            'note' => 'connect second TV, 30,40 extra',
            'created_at' => '2012-12-14 09:24:15'
        ]);



        CustomerNote::create([
            'id' => 1955,
            'customer_id' => 16924,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-14 09:37:51'
        ]);



        CustomerNote::create([
            'id' => 1956,
            'customer_id' => 16536,
            'user_id' => 1,
            'note' => 'confirmed, KD to survey',
            'created_at' => '2012-12-14 09:42:26'
        ]);



        CustomerNote::create([
            'id' => 1957,
            'customer_id' => 16926,
            'user_id' => 1,
            'note' => 'Fit FTAC, has dish, 375.00',
            'created_at' => '2012-12-14 11:38:13'
        ]);



        CustomerNote::create([
            'id' => 1958,
            'customer_id' => 16926,
            'user_id' => 1,
            'note' => 'Awaiting payment',
            'created_at' => '2012-12-14 11:49:03'
        ]);



        CustomerNote::create([
            'id' => 1959,
            'customer_id' => 16926,
            'user_id' => 1,
            'note' => 'cancelled by customer when payment was requested up front',
            'created_at' => '2012-12-14 12:11:27'
        ]);



        CustomerNote::create([
            'id' => 1960,
            'customer_id' => 13673,
            'user_id' => 1,
            'note' => 'Fit wall bracket for 32 Sony TV, 45 movement, also fit combi STB and shelf. ',
            'created_at' => '2012-12-14 14:43:39'
        ]);



        CustomerNote::create([
            'id' => 1961,
            'customer_id' => 1706,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-14 14:48:20'
        ]);



        CustomerNote::create([
            'id' => 1962,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'run temp cable from bike shed to app',
            'created_at' => '2012-12-14 15:02:46'
        ]);



        CustomerNote::create([
            'id' => 1963,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-14 15:05:29'
        ]);



        CustomerNote::create([
            'id' => 1964,
            'customer_id' => 16895,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-14 16:00:30'
        ]);



        CustomerNote::create([
            'id' => 1965,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'call to collect payment 79+79 for two SV STB- Free installation',
            'created_at' => '2012-12-14 16:13:11'
        ]);



        CustomerNote::create([
            'id' => 1966,
            'customer_id' => 16278,
            'user_id' => 1,
            'note' => 'cant get sky on RC extr second TV',
            'created_at' => '2012-12-14 16:21:17'
        ]);



        CustomerNote::create([
            'id' => 1967,
            'customer_id' => 16915,
            'user_id' => 1,
            'note' => 'Paid balance 305.00 cpomplete paid in full',
            'created_at' => '2012-12-16 16:24:10'
        ]);



        CustomerNote::create([
            'id' => 1968,
            'customer_id' => 16921,
            'user_id' => 1,
            'note' => 'paid 219.00 . box fitted',
            'created_at' => '2012-12-16 16:25:29'
        ]);



        CustomerNote::create([
            'id' => 1969,
            'customer_id' => 16921,
            'user_id' => 1,
            'note' => 'agreed to swap for Technistar STB and 32GB USB, FOC',
            'created_at' => '2012-12-16 16:26:11'
        ]);



        CustomerNote::create([
            'id' => 1970,
            'customer_id' => 16927,
            'user_id' => 1,
            'note' => 'Fitted SV ant to attic. Paid 130.00',
            'created_at' => '2012-12-16 16:29:26'
        ]);



        CustomerNote::create([
            'id' => 1971,
            'customer_id' => 16928,
            'user_id' => 1,
            'note' => 'Fitted SV ant to attic. Paid 130.00',
            'created_at' => '2012-12-16 16:29:27'
        ]);



        CustomerNote::create([
            'id' => 1972,
            'customer_id' => 16920,
            'user_id' => 1,
            'note' => 'fitted SV ant and SV STB, left invoice 276.50 MTL 62dB',
            'created_at' => '2012-12-16 16:31:02'
        ]);



        CustomerNote::create([
            'id' => 1973,
            'customer_id' => 16536,
            'user_id' => 1,
            'note' => 'Fitted Technistar x 2 combi. Paid balance 125.00. total 575.00',
            'created_at' => '2012-12-16 16:33:08'
        ]);



        CustomerNote::create([
            'id' => 1974,
            'customer_id' => 16918,
            'user_id' => 1,
            'note' => 'no FTAc here, fitted SV ant to attic and ran cables fomr exiating dish to connect to customers existing STBs. Paid 319.00',
            'created_at' => '2012-12-16 16:35:06'
        ]);



        CustomerNote::create([
            'id' => 1975,
            'customer_id' => 16924,
            'user_id' => 1,
            'note' => 'fitted SV antoutside and split to two tvs, levels ok, advised cust of MHA, 50dB at TV, paid 249.50',
            'created_at' => '2012-12-16 16:36:51'
        ]);



        CustomerNote::create([
            'id' => 1976,
            'customer_id' => 16752,
            'user_id' => 1,
            'note' => 'collected cheque, 158.00',
            'created_at' => '2012-12-16 16:38:09'
        ]);



        CustomerNote::create([
            'id' => 1977,
            'customer_id' => 16424,
            'user_id' => 1,
            'note' => 'replaced cable, piad 49.00',
            'created_at' => '2012-12-16 16:39:13'
        ]);



        CustomerNote::create([
            'id' => 1978,
            'customer_id' => 16917,
            'user_id' => 1,
            'note' => 'fitted sv ant and stb, paid 230.00',
            'created_at' => '2012-12-16 16:40:30'
        ]);



        CustomerNote::create([
            'id' => 1979,
            'customer_id' => 16720,
            'user_id' => 1,
            'note' => 'extender cable in wrong rf out socket. paid 49.00',
            'created_at' => '2012-12-16 16:42:18'
        ]);



        CustomerNote::create([
            'id' => 1980,
            'customer_id' => 1706,
            'user_id' => 1,
            'note' => 'not suitable today, advised may not be able to do pre xmas',
            'created_at' => '2012-12-17 09:35:18'
        ]);



        CustomerNote::create([
            'id' => 1981,
            'customer_id' => 16921,
            'user_id' => 1,
            'note' => 'replaced, ID',
            'created_at' => '2012-12-17 09:45:18'
        ]);



        CustomerNote::create([
            'id' => 1982,
            'customer_id' => 13313,
            'user_id' => 1,
            'note' => '		weak signal on FTA, Contact Denis Byrne 087 7524859',
            'created_at' => '2012-12-17 11:38:37'
        ]);



        CustomerNote::create([
            'id' => 1983,
            'customer_id' => 16929,
            'user_id' => 1,
            'note' => 'prov tbc',
            'created_at' => '2012-12-17 11:50:14'
        ]);



        CustomerNote::create([
            'id' => 1984,
            'customer_id' => 16929,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2012-12-17 14:25:50'
        ]);



        CustomerNote::create([
            'id' => 1985,
            'customer_id' => 4978,
            'user_id' => 1,
            'note' => 'fit FTAC, using customers dish, 349.00',
            'created_at' => '2012-12-17 15:17:55'
        ]);



        CustomerNote::create([
            'id' => 1986,
            'customer_id' => 4978,
            'user_id' => 1,
            'note' => 'Paid 50.00 deposit',
            'created_at' => '2012-12-17 15:18:19'
        ]);



        CustomerNote::create([
            'id' => 1987,
            'customer_id' => 14130,
            'user_id' => 1,
            'note' => 'Install Sky, run new cable from dish to kitchen FTA, paid cash 120.00',
            'created_at' => '2012-12-18 09:18:48'
        ]);



        CustomerNote::create([
            'id' => 1988,
            'customer_id' => 16895,
            'user_id' => 1,
            'note' => 'Fitted new dish and quad lnb, fitted RC ext amp, paid 318.50 cheque',
            'created_at' => '2012-12-18 09:20:09'
        ]);



        CustomerNote::create([
            'id' => 1989,
            'customer_id' => 14152,
            'user_id' => 1,
            'note' => 'replaced disecq switch and stb, problem may be caused by stb going into standby and NOT faulty equipment',
            'created_at' => '2012-12-18 09:22:23'
        ]);



        CustomerNote::create([
            'id' => 1990,
            'customer_id' => 13351,
            'user_id' => 1,
            'note' => 'Ir emitters pulled off stb, replaced, ok  now',
            'created_at' => '2012-12-18 09:33:36'
        ]);



        CustomerNote::create([
            'id' => 1991,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'Fitted TSC114, paid 248.00',
            'created_at' => '2012-12-18 09:34:57'
        ]);



        CustomerNote::create([
            'id' => 1992,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'Tri link kit to be fitted here still, no stock last day, no callout charge next time',
            'created_at' => '2012-12-18 09:37:50'
        ]);



        CustomerNote::create([
            'id' => 1993,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'Fitten new dish and lnb, paid 179.00',
            'created_at' => '2012-12-18 09:38:34'
        ]);



        CustomerNote::create([
            'id' => 1994,
            'customer_id' => 16500,
            'user_id' => 1,
            'note' => 'connected bedroom to SV ant, set up Wee and DVD, paid 119.50',
            'created_at' => '2012-12-18 09:39:21'
        ]);



        CustomerNote::create([
            'id' => 1995,
            'customer_id' => 16916,
            'user_id' => 1,
            'note' => 'Fitted sv ant, re tuned 537 stb, paid 163.50',
            'created_at' => '2012-12-18 09:40:33'
        ]);



        CustomerNote::create([
            'id' => 1996,
            'customer_id' => 4758,
            'user_id' => 1,
            'note' => 'working at time of booking, will leave for now',
            'created_at' => '2012-12-18 09:42:59'
        ]);



        CustomerNote::create([
            'id' => 1997,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'keys under cigarette tin',
            'created_at' => '2012-12-18 09:52:50'
        ]);



        CustomerNote::create([
            'id' => 1998,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'fit SV ant 160.00 no panic',
            'created_at' => '2012-12-18 11:22:24'
        ]);



        CustomerNote::create([
            'id' => 1999,
            'customer_id' => 16923,
            'user_id' => 1,
            'note' => 'Fitted new dish and lnb 215.50 paid cheque',
            'created_at' => '2012-12-20 14:06:13'
        ]);



        CustomerNote::create([
            'id' => 2000,
            'customer_id' => 11747,
            'user_id' => 1,
            'note' => 'checked signal levels at box and at dis, all ok, no problem ',
            'created_at' => '2012-12-20 14:09:34'
        ]);



        CustomerNote::create([
            'id' => 2001,
            'customer_id' => 16543,
            'user_id' => 1,
            'note' => 'No pics on kitchen TV. Bring 27 LG €389.00 and 32 LG. €399.00',
            'created_at' => '2012-12-20 14:21:21'
        ]);



        CustomerNote::create([
            'id' => 2002,
            'customer_id' => 16511,
            'user_id' => 1,
            'note' => 're fit stb after flood',
            'created_at' => '2012-12-20 15:03:04'
        ]);



        CustomerNote::create([
            'id' => 2003,
            'customer_id' => 16543,
            'user_id' => 1,
            'note' => 'fitted other tv in kitchen, no new sale here, paid 49.00',
            'created_at' => '2012-12-22 09:57:09'
        ]);



        CustomerNote::create([
            'id' => 2004,
            'customer_id' => 16807,
            'user_id' => 1,
            'note' => 'no new tv sale here, wife bought tv elsewhere',
            'created_at' => '2012-12-22 09:57:50'
        ]);



        CustomerNote::create([
            'id' => 2005,
            'customer_id' => 881,
            'user_id' => 1,
            'note' => 'Fitted 2 x FTAC and MHA and PSU. Used customers dish. Also 2 x USB  memory. €480.00 due. ',
            'created_at' => '2013-01-02 09:18:46'
        ]);



        CustomerNote::create([
            'id' => 2006,
            'customer_id' => 16929,
            'user_id' => 1,
            'note' => 'Fitted ftac using customers SV ant. Paid visa 349.00. 59dB',
            'created_at' => '2013-01-02 09:28:02'
        ]);



        CustomerNote::create([
            'id' => 2007,
            'customer_id' => 16925,
            'user_id' => 1,
            'note' => 'Fitted SV ant outside. 59dB. Pre paid',
            'created_at' => '2013-01-02 09:29:18'
        ]);



        CustomerNote::create([
            'id' => 2008,
            'customer_id' => 16900,
            'user_id' => 1,
            'note' => 'Fitted SV ant outside. 57dB. Paid 160.00',
            'created_at' => '2013-01-02 09:30:55'
        ]);



        CustomerNote::create([
            'id' => 2009,
            'customer_id' => 1445,
            'user_id' => 1,
            'note' => 'advised dtv story and advised move ant outside 49.00 +, shouldnt need mha up this high',
            'created_at' => '2013-01-02 10:52:44'
        ]);



        CustomerNote::create([
            'id' => 2010,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'New cable run, clipping needs to be tidied up. Paid',
            'created_at' => '2013-01-02 11:16:31'
        ]);



        CustomerNote::create([
            'id' => 2011,
            'customer_id' => 13054,
            'user_id' => 1,
            'note' => 'Fitted new Technistar combi., paid 200.00 cash',
            'created_at' => '2013-01-02 11:21:41'
        ]);



        CustomerNote::create([
            'id' => 2012,
            'customer_id' => 4978,
            'user_id' => 1,
            'note' => 'Fitted FTAC system. Paid bal 349.00 cheque',
            'created_at' => '2013-01-02 11:23:13'
        ]);



        CustomerNote::create([
            'id' => 2013,
            'customer_id' => 188,
            'user_id' => 1,
            'note' => 'delivered 32 LED LG 369.00',
            'created_at' => '2013-01-02 11:25:23'
        ]);



        CustomerNote::create([
            'id' => 2014,
            'customer_id' => 16807,
            'user_id' => 1,
            'note' => 'fitted new ant outside, paid 160.00 cheque',
            'created_at' => '2013-01-02 11:30:32'
        ]);



        CustomerNote::create([
            'id' => 2015,
            'customer_id' => 16793,
            'user_id' => 1,
            'note' => 'cheque returned account closed. ',
            'created_at' => '2013-01-02 11:37:26'
        ]);



        CustomerNote::create([
            'id' => 2016,
            'customer_id' => 16930,
            'user_id' => 1,
            'note' => 'check for SV FTA, property recently renovated',
            'created_at' => '2013-01-02 14:14:21'
        ]);



        CustomerNote::create([
            'id' => 2017,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'customer swapped boxes around, problem seems to be ok now, was fine over xmas, cust will call us if problem appears again',
            'created_at' => '2013-01-02 14:22:47'
        ]);



        CustomerNote::create([
            'id' => 2018,
            'customer_id' => 1909,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2013-01-02 14:33:24'
        ]);



        CustomerNote::create([
            'id' => 2019,
            'customer_id' => 1909,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2013-01-02 14:34:54'
        ]);



        CustomerNote::create([
            'id' => 2020,
            'customer_id' => 16905,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2013-01-02 14:36:10'
        ]);



        CustomerNote::create([
            'id' => 2021,
            'customer_id' => 5696,
            'user_id' => 1,
            'note' => 'pm 7.30 , Liz Brennan',
            'created_at' => '2013-01-02 15:13:08'
        ]);



        CustomerNote::create([
            'id' => 2022,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2013-01-02 15:14:49'
        ]);



        CustomerNote::create([
            'id' => 2023,
            'customer_id' => 1909,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2013-01-02 15:15:06'
        ]);



        CustomerNote::create([
            'id' => 2024,
            'customer_id' => 16007,
            'user_id' => 1,
            'note' => 'connect second room to existing sky box, 80.00- 120-00 estimate',
            'created_at' => '2013-01-02 15:28:53'
        ]);



        CustomerNote::create([
            'id' => 2025,
            'customer_id' => 16007,
            'user_id' => 1,
            'note' => 'check sky signal at mothers house, bring basic sky remote replacement',
            'created_at' => '2013-01-02 15:30:06'
        ]);



        CustomerNote::create([
            'id' => 2026,
            'customer_id' => 16007,
            'user_id' => 1,
            'note' => 'confirmed after 12.00',
            'created_at' => '2013-01-02 15:31:10'
        ]);



        CustomerNote::create([
            'id' => 2027,
            'customer_id' => 16931,
            'user_id' => 1,
            'note' => 'Fit FTAC',
            'created_at' => '2013-01-02 15:44:51'
        ]);



        CustomerNote::create([
            'id' => 2028,
            'customer_id' => 16931,
            'user_id' => 1,
            'note' => 'available from 12.00am confimed',
            'created_at' => '2013-01-02 15:46:26'
        ]);



        CustomerNote::create([
            'id' => 2029,
            'customer_id' => 16930,
            'user_id' => 1,
            'note' => 'fitted sv ant, paid 170.00 cheque',
            'created_at' => '2013-01-02 16:21:59'
        ]);



        CustomerNote::create([
            'id' => 2030,
            'customer_id' => 7352,
            'user_id' => 1,
            'note' => '		missing channels in appartment. tenant may have messed up, also disable auto standby on stb and tv',
            'created_at' => '2013-01-02 16:30:48'
        ]);



        CustomerNote::create([
            'id' => 2031,
            'customer_id' => 16783,
            'user_id' => 1,
            'note' => 'retuned stb, 49.00',
            'created_at' => '2013-01-02 17:21:02'
        ]);



        CustomerNote::create([
            'id' => 2032,
            'customer_id' => 5696,
            'user_id' => 1,
            'note' => 'Sold FTAC sys 399.00 + 2 x combi STB @ 249.00 ea, + 32 GB USB 34.95. Total 932.00.',
            'created_at' => '2013-01-03 10:13:19'
        ]);



        CustomerNote::create([
            'id' => 2033,
            'customer_id' => 4017,
            'user_id' => 1,
            'note' => '		remote eye not working in kitchen, connected to sky box in next room',
            'created_at' => '2013-01-03 10:27:09'
        ]);



        CustomerNote::create([
            'id' => 2034,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'voicemail',
            'created_at' => '2013-01-03 10:29:17'
        ]);



        CustomerNote::create([
            'id' => 2035,
            'customer_id' => 16490,
            'user_id' => 1,
            'note' => 'new cable run complete, paid ',
            'created_at' => '2013-01-03 10:43:36'
        ]);



        CustomerNote::create([
            'id' => 2036,
            'customer_id' => 4017,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2013-01-03 10:47:44'
        ]);



        CustomerNote::create([
            'id' => 2037,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'confirmed',
            'created_at' => '2013-01-03 10:48:05'
        ]);



        CustomerNote::create([
            'id' => 2038,
            'customer_id' => 16007,
            'user_id' => 1,
            'note' => 'first thing friday',
            'created_at' => '2013-01-03 14:06:04'
        ]);



        CustomerNote::create([
            'id' => 2039,
            'customer_id' => 16910,
            'user_id' => 1,
            'note' => 'Fitted TS combi, paid 218.00',
            'created_at' => '2013-01-03 15:11:12'
        ]);



        CustomerNote::create([
            'id' => 2040,
            'customer_id' => 4017,
            'user_id' => 1,
            'note' => 'power switched off for rf 2 on sky box, paid 49.00',
            'created_at' => '2013-01-03 17:20:30'
        ]);



        CustomerNote::create([
            'id' => 2041,
            'customer_id' => 1909,
            'user_id' => 1,
            'note' => 'checked stb at shop, no problem, re installed using scart cable, still problem, advised new dish cable and lnb to rule out signal issues',
            'created_at' => '2013-01-04 09:10:20'
        ]);



        CustomerNote::create([
            'id' => 2042,
            'customer_id' => 16007,
            'user_id' => 1,
            'note' => 'Ellie, ran cable from sky box to tv & sky HD remote. 259.00 cash. Mother, fitted new scart lead and new sky remote 71.95.',
            'created_at' => '2013-01-04 11:56:35'
        ]);



        CustomerNote::create([
            'id' => 2043,
            'customer_id' => 16405,
            'user_id' => 1,
            'note' => 'collected at shop',
            'created_at' => '2013-01-04 11:59:01'
        ]);



        CustomerNote::create([
            'id' => 2044,
            'customer_id' => 16907,
            'user_id' => 1,
            'note' => 'prob with sv pics',
            'created_at' => '2013-01-04 16:59:29'
        ]);



        CustomerNote::create([
            'id' => 2045,
            'customer_id' => 16933,
            'user_id' => 1,
            'note' => 'Move sky dish, building work',
            'created_at' => '2013-01-07 14:14:37'
        ]);



        CustomerNote::create([
            'id' => 2046,
            'customer_id' => 16932,
            'user_id' => 1,
            'note' => 'has five sky stbs, only one working, ID had a quick look, estimated 220.00 to sort out plus 60.00 for quattro if required',
            'created_at' => '2013-01-07 14:35:41'
        ]);



        CustomerNote::create([
            'id' => 2047,
            'customer_id' => 851,
            'user_id' => 1,
            'note' => 'no signal on some TV. ',
            'created_at' => '2013-01-07 14:56:54'
        ]);



        CustomerNote::create([
            'id' => 2048,
            'customer_id' => 1909,
            'user_id' => 1,
            'note' => '		replaced dish and lnb, problem sorted, paid cash 260.00 ish',
            'created_at' => '2013-01-07 14:59:48'
        ]);



        CustomerNote::create([
            'id' => 2049,
            'customer_id' => 851,
            'user_id' => 1,
            'note' => 'had been booked for monday am, had some of her lads sort prob over week end',
            'created_at' => '2013-01-07 14:59:24'
        ]);



        CustomerNote::create([
            'id' => 2050,
            'customer_id' => 16833,
            'user_id' => 1,
            'note' => 'connected fta box to dish, paid 130.00',
            'created_at' => '2013-01-07 15:00:28'
        ]);



        CustomerNote::create([
            'id' => 2051,
            'customer_id' => 16931,
            'user_id' => 1,
            'note' => 'weh out here, no sig on customers dwelling, cust ot ask permission of other tenant to put dish on their wall',
            'created_at' => '2013-01-07 15:02:21'
        ]);



        CustomerNote::create([
            'id' => 2052,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => '						Remove combi stb & remote, and fit new SV  STB and reinstall old FTA box. Do not make any changes to FTA box. Write instructions on docket & go thru with customer. Get docket signed!!!! Office will issue refund of 110.00 when work is complete.',
            'created_at' => '2013-01-07 19:47:48'
        ]);



        CustomerNote::create([
            'id' => 2053,
            'customer_id' => 7352,
            'user_id' => 1,
            'note' => 'retuned tsc114, paid 49.00',
            'created_at' => '2013-01-07 19:32:14'
        ]);



        CustomerNote::create([
            'id' => 2054,
            'customer_id' => 16934,
            'user_id' => 1,
            'note' => 'Fit Sky HD STB',
            'created_at' => '2013-01-08 09:31:52'
        ]);



        CustomerNote::create([
            'id' => 2055,
            'customer_id' => 4789,
            'user_id' => 1,
            'note' => '		Has two CCTV cams on same aerial, one not working, prov wed or thurs am',
            'created_at' => '2013-01-08 09:45:26'
        ]);



        CustomerNote::create([
            'id' => 2056,
            'customer_id' => 16935,
            'user_id' => 1,
            'note' => 'CCTV 4-6 cams, DVR, internet access',
            'created_at' => '2013-01-08 10:07:26'
        ]);



        CustomerNote::create([
            'id' => 2067,
            'customer_id' => 14774,
            'user_id' => 1,
            'note' => 'HAS THREE CCTV CORDLESS CAMS, WANTS FOURTH ',
            'created_at' => '2013-01-08 14:37:39'
        ]);



        CustomerNote::create([
            'id' => 2058,
            'customer_id' => 16936,
            'user_id' => 1,
            'note' => 'Looking for FTAC, five TV points',
            'created_at' => '2013-01-08 12:17:41'
        ]);



        CustomerNote::create([
            'id' => 2059,
            'customer_id' => 13673,
            'user_id' => 1,
            'note' => 'will call back',
            'created_at' => '2013-01-08 12:20:56'
        ]);



        CustomerNote::create([
            'id' => 2060,
            'customer_id' => 16937,
            'user_id' => 1,
            'note' => 'Moved Sky box, multi room not working since, recording not working on main box',
            'created_at' => '2013-01-08 12:29:30'
        ]);



        CustomerNote::create([
            'id' => 2061,
            'customer_id' => 16937,
            'user_id' => 1,
            'note' => 'tried for today pm, will call back wed morning for booking',
            'created_at' => '2013-01-08 12:29:55'
        ]);



        CustomerNote::create([
            'id' => 2062,
            'customer_id' => 16905,
            'user_id' => 1,
            'note' => 'KD set to completed',
            'created_at' => '2013-01-08 12:30:28'
        ]);



        CustomerNote::create([
            'id' => 2063,
            'customer_id' => 16933,
            'user_id' => 1,
            'note' => 'dish moved, bill of 207.50 disputed over callout charge, settled 190.00, paid card',
            'created_at' => '2013-01-08 13:05:18'
        ]);



        CustomerNote::create([
            'id' => 2064,
            'customer_id' => 1549,
            'user_id' => 1,
            'note' => 'job complete, changed combi for saorview STB, refund due 110.00, SV STB on HDMI, FTA on TV ch5 RF.',
            'created_at' => '2013-01-08 14:02:18'
        ]);



        CustomerNote::create([
            'id' => 2065,
            'customer_id' => 16934,
            'user_id' => 1,
            'note' => 'job done, card activated 12.40',
            'created_at' => '2013-01-08 14:02:45'
        ]);



        CustomerNote::create([
            'id' => 2066,
            'customer_id' => 16674,
            'user_id' => 1,
            'note' => 'ordered sky, Id to fit today, paid 79.00',
            'created_at' => '2013-01-08 14:17:05'
        ]);



        CustomerNote::create([
            'id' => 2069,
            'customer_id' => 14774,
            'user_id' => 1,
            'note' => 'not 9-10 out at dentist',
            'created_at' => '2013-01-08 14:40:29'
        ]);



        CustomerNote::create([
            'id' => 2070,
            'customer_id' => 16674,
            'user_id' => 1,
            'note' => 'fitted sky, activated',
            'created_at' => '2013-01-08 16:26:28'
        ]);



        CustomerNote::create([
            'id' => 2077,
            'customer_id' => 14916,
            'user_id' => 1,
            'note' => 'clicking noise coming from DVR, no picture',
            'created_at' => '2013-01-11 11:42:18'
        ]);



        CustomerNote::create([
            'id' => 2078,
            'customer_id' => 13319,
            'user_id' => 1,
            'note' => 'gave customer FTA frequencies over phone',
            'created_at' => '2013-01-11 11:54:46'
        ]);



        CustomerNote::create([
            'id' => 2079,
            'customer_id' => 16932,
            'user_id' => 1,
            'note' => 'remade 6 f conn at dish, set LNB offset, got all rf going on all stbs, 275.45 all in',
            'created_at' => '2013-01-11 12:05:24'
        ]);



        CustomerNote::create([
            'id' => 2080,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'sipply and fit trilink kit, 120.00 paid',
            'created_at' => '2013-01-11 12:42:40'
        ]);



        CustomerNote::create([
            'id' => 2081,
            'customer_id' => 10618,
            'user_id' => 1,
            'note' => 'advised we have a number of second hand sky+ boxes here to replace old one sold 2009',
            'created_at' => '2013-01-11 12:52:29'
        ]);



        CustomerNote::create([
            'id' => 2082,
            'customer_id' => 2733,
            'user_id' => 1,
            'note' => 'quoted for new or s/h sky+ stb',
            'created_at' => '2013-01-11 14:34:31'
        ]);



        CustomerNote::create([
            'id' => 2083,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => 'problem with SV STB in kitchen, pink screen',
            'created_at' => '2013-01-11 16:36:44'
        ]);



        CustomerNote::create([
            'id' => 2084,
            'customer_id' => 16936,
            'user_id' => 1,
            'note' => 'Difficult install here, quote 2k for 5 combi boxes',
            'created_at' => '2013-01-12 18:41:26'
        ]);



        CustomerNote::create([
            'id' => 2085,
            'customer_id' => 16939,
            'user_id' => 1,
            'note' => 'New Sky+ HD connection, paid 79.00 fitted stb, only one sat feed here, serial# 03764157986, viewing# 376328928',
            'created_at' => '2013-01-14 09:00:39'
        ]);



        CustomerNote::create([
            'id' => 2086,
            'customer_id' => 1036,
            'user_id' => 1,
            'note' => 'pink pic, plugged out and in hdmi lead from STB, ok now',
            'created_at' => '2013-01-14 09:01:28'
        ]);



        CustomerNote::create([
            'id' => 2087,
            'customer_id' => 14062,
            'user_id' => 1,
            'note' => 'Fit 42 inch LED, flat on wall, and connect to existing sky box, maybe also fit combi box using exisitng dish.',
            'created_at' => '2013-01-14 10:28:23'
        ]);



        CustomerNote::create([
            'id' => 2088,
            'customer_id' => 16931,
            'user_id' => 1,
            'note' => 'has permission for using neighbours wall, home after 12.00 Thursday',
            'created_at' => '2013-01-14 12:39:15'
        ]);



        CustomerNote::create([
            'id' => 2089,
            'customer_id' => 13054,
            'user_id' => 1,
            'note' => 'quoted 134.00 for trilink kit installed, cable in place, will call us next week',
            'created_at' => '2013-01-14 14:44:48'
        ]);



        CustomerNote::create([
            'id' => 2090,
            'customer_id' => 14062,
            'user_id' => 1,
            'note' => 'fitted 42 tv with customers bracket+ fitted ftac, paid cheque 437.50',
            'created_at' => '2013-01-15 09:10:04'
        ]);



        CustomerNote::create([
            'id' => 2091,
            'customer_id' => 9983,
            'user_id' => 1,
            'note' => '		sound no pic on kitchen tv, sounds like low signal level',
            'created_at' => '2013-01-15 09:18:55'
        ]);



        CustomerNote::create([
            'id' => 2092,
            'customer_id' => 16940,
            'user_id' => 1,
            'note' => 'survey for new tv and fit existing tv',
            'created_at' => '2013-01-15 09:23:15'
        ]);



        CustomerNote::create([
            'id' => 2093,
            'customer_id' => 16941,
            'user_id' => 1,
            'note' => 'Fit 80cm 19.2 deg dish',
            'created_at' => '2013-01-15 14:10:09'
        ]);



        CustomerNote::create([
            'id' => 2094,
            'customer_id' => 9080,
            'user_id' => 1,
            'note' => 'slow to respond',
            'created_at' => '2013-01-17 10:02:00'
        ]);



        CustomerNote::create([
            'id' => 2095,
            'customer_id' => 9080,
            'user_id' => 1,
            'note' => 'check, wall socket, check cables to box, slow to respond to remote',
            'created_at' => '2013-01-17 10:04:49'
        ]);



        CustomerNote::create([
            'id' => 2096,
            'customer_id' => 15999,
            'user_id' => 1,
            'note' => 'tune channel 5 when passing',
            'created_at' => '2013-01-17 15:21:38'
        ]);



        CustomerNote::create([
            'id' => 2097,
            'customer_id' => 16941,
            'user_id' => 1,
            'note' => 'Fitted 80cm dish and LNB for 19 deg Astra, tuned Sam tv for SV and discon existing SV stb, paid cheque 233.00',
            'created_at' => '2013-01-18 09:59:50'
        ]);



        CustomerNote::create([
            'id' => 2098,
            'customer_id' => 16941,
            'user_id' => 1,
            'note' => 'Might be interested in 28 Astra and new combi stb with disceq switch',
            'created_at' => '2013-01-18 10:02:04'
        ]);



        CustomerNote::create([
            'id' => 2099,
            'customer_id' => 362,
            'user_id' => 1,
            'note' => 'job done by the time we got there',
            'created_at' => '2013-01-18 10:03:48'
        ]);



        CustomerNote::create([
            'id' => 2100,
            'customer_id' => 14916,
            'user_id' => 1,
            'note' => 'called to have a look, suspect faulty psu, remover dvr and psu to check',
            'created_at' => '2013-01-18 17:59:44'
        ]);



        CustomerNote::create([
            'id' => 2101,
            'customer_id' => 14916,
            'user_id' => 1,
            'note' => 'tested dvr in workshop, replaced psu and tested overnight, recorded data present ok',
            'created_at' => '2013-01-18 18:00:21'
        ]);



        CustomerNote::create([
            'id' => 2102,
            'customer_id' => 14916,
            'user_id' => 1,
            'note' => 'returned unit and reconnected all cameras and monitor in order.',
            'created_at' => '2013-01-18 18:00:49'
        ]);



        CustomerNote::create([
            'id' => 2103,
            'customer_id' => 10749,
            'user_id' => 1,
            'note' => 'called to check dvr, missing data,only showing pics for every 20 seconds, advised new dvr, qoute sent FB',
            'created_at' => '2013-01-18 18:02:49'
        ]);



        CustomerNote::create([
            'id' => 2104,
            'customer_id' => 16931,
            'user_id' => 1,
            'note' => '		fitted FTAC, non std, paid 459.00 cash',
            'created_at' => '2013-01-18 18:40:58'
        ]);



        CustomerNote::create([
            'id' => 2105,
            'customer_id' => 15785,
            'user_id' => 1,
            'note' => 'problem with sky pin number, advised change to fta, posted listings',
            'created_at' => '2013-01-18 18:17:26'
        ]);



        CustomerNote::create([
            'id' => 2106,
            'customer_id' => 14774,
            'user_id' => 1,
            'note' => 'surveyed job, sent quote on FB',
            'created_at' => '2013-01-18 18:18:16'
        ]);



        CustomerNote::create([
            'id' => 2107,
            'customer_id' => 16942,
            'user_id' => 1,
            'note' => 'Connect f-conn to dish, cust ran new cables',
            'created_at' => '2013-01-18 18:21:24'
        ]);



        CustomerNote::create([
            'id' => 2108,
            'customer_id' => 9080,
            'user_id' => 1,
            'note' => 'cables mixed up at wall socket, removed customers wall socket and joined cables directly, should not occur again, paid cheque 75.00',
            'created_at' => '2013-01-18 18:32:11'
        ]);



        CustomerNote::create([
            'id' => 2109,
            'customer_id' => 15399,
            'user_id' => 1,
            'note' => 'Just to confirm that the problem with reception continues.  Last night on RTE 1 and  BBC 2 broken up image and sound from 8.50 to 11.30.\r\nTonight at 6.25 BBC 1 completely unwatchable - picture and sound scrambled. \r\nI am asking again for some action to be taken on this so that the problem be sorted. \r\nCarmel Cummins\r\n',
            'created_at' => '2013-01-18 18:34:03'
        ]);



        CustomerNote::create([
            'id' => 2110,
            'customer_id' => 16943,
            'user_id' => 1,
            'note' => 'replaced faulty sky+ STB, paid 150.00',
            'created_at' => '2013-01-18 18:49:18'
        ]);



        CustomerNote::create([
            'id' => 2111,
            'customer_id' => 16944,
            'user_id' => 1,
            'note' => 'met with Sinead pre xmas, spoke to Peter electrician, cabling in place, quote to follow',
            'created_at' => '2013-01-18 18:56:07'
        ]);



        CustomerNote::create([
            'id' => 2112,
            'customer_id' => 16495,
            'user_id' => 1,
            'note' => 'spoke to Marian about cctv, call to follow up',
            'created_at' => '2013-01-18 18:59:05'
        ]);



        CustomerNote::create([
            'id' => 2113,
            'customer_id' => 1233,
            'user_id' => 1,
            'note' => 'called to talk about combi and sv, to quote for combi kitchen and shelf, combi master bed, kids sv only, den signal only',
            'created_at' => '2013-01-18 19:02:40'
        ]);



        CustomerNote::create([
            'id' => 2114,
            'customer_id' => 1844,
            'user_id' => 1,
            'note' => 'called to Larry re cctv, quote for 3 outdoor cam, one eight way DVR, two remote key pad, cat 5 from unit to router, and cat 5 from unit to 2 remote key pads, ',
            'created_at' => '2013-01-18 19:04:40'
        ]);



        CustomerNote::create([
            'id' => 2115,
            'customer_id' => 255,
            'user_id' => 1,
            'note' => 'no sat sig at pub after storm',
            'created_at' => '2013-01-19 10:10:59'
        ]);



        CustomerNote::create([
            'id' => 2116,
            'customer_id' => 1521,
            'user_id' => 1,
            'note' => 'Searching for listings, doing this for a while, 4-5 yr old STB ',
            'created_at' => '2013-01-19 15:12:57'
        ]);



        CustomerNote::create([
            'id' => 2117,
            'customer_id' => 12759,
            'user_id' => 1,
            'note' => 'Fit combi STB ',
            'created_at' => '2013-01-19 15:33:54'
        ]);



        CustomerNote::create([
            'id' => 2118,
            'customer_id' => 255,
            'user_id' => 1,
            'note' => 'No satellite signal on both boxes since storm. checked signal at dish, al OK. Water in one cable from LNB to stacker. Possible water damage to stacker. Water also in cable from stacker to TV. Advised run two new cables. ',
            'created_at' => '2013-01-19 18:54:16'
        ]);



        CustomerNote::create([
            'id' => 2119,
            'customer_id' => 16940,
            'user_id' => 1,
            'note' => 'NOTES: 	 Fit new 32 inch LED TV. Assemble floor stand. Fit existing LED TV upstairs. Connect to aerial socket and join cable in attic to living room Sky box. Tune TVs and set up remote control from bed to living room. €1,017.19',
            'created_at' => '2013-01-20 11:01:06'
        ]);



        CustomerNote::create([
            'id' => 2120,
            'customer_id' => 1233,
            'user_id' => 1,
            'note' => 'Fit combi STB in kitchen with shelf, combi master bed, SV only kids room, SAT & SV signal to all 4 TV points. Fit SV ant and replace existing dish for octo LNB.',
            'created_at' => '2013-01-20 11:29:03'
        ]);



        CustomerNote::create([
            'id' => 2121,
            'customer_id' => 1521,
            'user_id' => 1,
            'note' => 'working ok now, will leave for now',
            'created_at' => '2013-01-21 09:20:41'
        ]);



        CustomerNote::create([
            'id' => 2122,
            'customer_id' => 12893,
            'user_id' => 1,
            'note' => 'has 6 cctv cams on cordless aerial system, prob with pics and sound.',
            'created_at' => '2013-01-21 10:18:50'
        ]);



        CustomerNote::create([
            'id' => 2123,
            'customer_id' => 16897,
            'user_id' => 1,
            'note' => 'Fit wireless access point to library. terminate CAT5 cable from comms to sitting room. check smart TV. Remove old sound system. Fit shelf to gym TV for headphones.',
            'created_at' => '2013-01-21 11:35:15'
        ]);



        CustomerNote::create([
            'id' => 2124,
            'customer_id' => 12759,
            'user_id' => 1,
            'note' => 'Fitted combi STB and ext SV ant. Paid laser €368.00',
            'created_at' => '2013-01-22 08:42:19'
        ]);



        CustomerNote::create([
            'id' => 2125,
            'customer_id' => 15999,
            'user_id' => 1,
            'note' => 'tuned ch5 foc as agreed',
            'created_at' => '2013-01-22 08:42:57'
        ]);



        CustomerNote::create([
            'id' => 2126,
            'customer_id' => 12893,
            'user_id' => 1,
            'note' => '		No sound on some cams.Swapped around sound card with other cams. New sound card required. Callout + 1 hr. Invoiced FB',
            'created_at' => '2013-01-22 08:48:41'
        ]);



        CustomerNote::create([
            'id' => 2127,
            'customer_id' => 12893,
            'user_id' => 1,
            'note' => 'sound board ordered',
            'created_at' => '2013-01-22 08:56:52'
        ]);



        CustomerNote::create([
            'id' => 2128,
            'customer_id' => 197,
            'user_id' => 1,
            'note' => 'showed how to use DVR',
            'created_at' => '2013-01-22 18:44:36'
        ]);



        CustomerNote::create([
            'id' => 2129,
            'customer_id' => 16032,
            'user_id' => 1,
            'note' => 'No signal on combi box.\r\n',
            'created_at' => '2013-01-23 12:14:04'
        ]);



        CustomerNote::create([
            'id' => 2130,
            'customer_id' => 16942,
            'user_id' => 1,
            'note' => 'removed old dish and fitted new dish and quad lnb, checked levels on all four outputs, paid cheque  253.00',
            'created_at' => '2013-01-23 13:27:55'
        ]);



        CustomerNote::create([
            'id' => 2131,
            'customer_id' => 16945,
            'user_id' => 1,
            'note' => 'Fit SV ant and SV STB, also connect Sky RC ext. 250.00 +',
            'created_at' => '2013-01-23 16:09:23'
        ]);



        CustomerNote::create([
            'id' => 2132,
            'customer_id' => 16946,
            'user_id' => 1,
            'note' => 'Fit 2 x combi with record',
            'created_at' => '2013-01-23 16:12:31'
        ]);



        CustomerNote::create([
            'id' => 2133,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'collect faulty TV/DVD',
            'created_at' => '2013-01-23 16:14:03'
        ]);



        CustomerNote::create([
            'id' => 2134,
            'customer_id' => 16940,
            'user_id' => 1,
            'note' => 'Fitted 32 Pan and TV stand. Connected up sairs tv to sky via RC ext, paid 1017.00 as per FB.\r\n',
            'created_at' => '2013-01-24 19:01:03'
        ]);



        CustomerNote::create([
            'id' => 2135,
            'customer_id' => 16946,
            'user_id' => 1,
            'note' => '		Fitted two combi and USB on one. paid 600.00 visa',
            'created_at' => '2013-01-24 19:02:34'
        ]);



        CustomerNote::create([
            'id' => 2136,
            'customer_id' => 3785,
            'user_id' => 1,
            'note' => 'no pics, pm only',
            'created_at' => '2013-01-26 14:51:27'
        ]);



        CustomerNote::create([
            'id' => 2137,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => 'collected and returned to Walker ',
            'created_at' => '2013-01-28 09:07:41'
        ]);



        CustomerNote::create([
            'id' => 2138,
            'customer_id' => 12893,
            'user_id' => 1,
            'note' => 'fitted paid cheque 150.00',
            'created_at' => '2013-01-28 09:11:34'
        ]);



        CustomerNote::create([
            'id' => 2139,
            'customer_id' => 16862,
            'user_id' => 1,
            'note' => 'power off box? intermittent power to box',
            'created_at' => '2013-01-28 09:18:11'
        ]);



        CustomerNote::create([
            'id' => 2140,
            'customer_id' => 881,
            'user_id' => 1,
            'note' => 'pics breaking up',
            'created_at' => '2013-01-28 09:19:08'
        ]);



        CustomerNote::create([
            'id' => 2141,
            'customer_id' => 16433,
            'user_id' => 1,
            'note' => 'some problem here',
            'created_at' => '2013-01-28 09:20:22'
        ]);



        CustomerNote::create([
            'id' => 2142,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'no pics on one CCTV cam, Bill',
            'created_at' => '2013-01-28 10:43:27'
        ]);



        CustomerNote::create([
            'id' => 2143,
            'customer_id' => 16416,
            'user_id' => 1,
            'note' => 'cant record on sky+',
            'created_at' => '2013-01-28 12:31:02'
        ]);



        CustomerNote::create([
            'id' => 2144,
            'customer_id' => 3576,
            'user_id' => 1,
            'note' => 'no power to tv',
            'created_at' => '2013-01-28 13:15:11'
        ]);



        CustomerNote::create([
            'id' => 2145,
            'customer_id' => 16862,
            'user_id' => 1,
            'note' => 'Mains lead lose at back of tv. Foc ',
            'created_at' => '2013-01-28 14:32:17'
        ]);



        CustomerNote::create([
            'id' => 2146,
            'customer_id' => 3576,
            'user_id' => 1,
            'note' => 'Collected tv for return to tosh',
            'created_at' => '2013-01-28 14:59:11'
        ]);



        CustomerNote::create([
            'id' => 2147,
            'customer_id' => 3785,
            'user_id' => 1,
            'note' => 'Retuned STB and new firmware, call back re CCTV \r\n',
            'created_at' => '2013-01-28 15:00:13'
        ]);



        CustomerNote::create([
            'id' => 2148,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'fit new cctv cam to shed, cam to coax, will need power cable, F to Phono - to scart connector to mod. TV for RF test at shed.',
            'created_at' => '2013-01-28 16:59:26'
        ]);



        CustomerNote::create([
            'id' => 2149,
            'customer_id' => 15083,
            'user_id' => 1,
            'note' => 'arm hanging off dish',
            'created_at' => '2013-01-30 08:59:44'
        ]);



        CustomerNote::create([
            'id' => 2150,
            'customer_id' => 14361,
            'user_id' => 1,
            'note' => 'no sat sig, Kieran 086 8711797',
            'created_at' => '2013-01-30 09:26:07'
        ]);



        CustomerNote::create([
            'id' => 2151,
            'customer_id' => 12875,
            'user_id' => 1,
            'note' => 'trilink kit not working',
            'created_at' => '2013-01-31 12:46:25'
        ]);



        CustomerNote::create([
            'id' => 2152,
            'customer_id' => 16706,
            'user_id' => 1,
            'note' => 'no satellite pics, advised',
            'created_at' => '2013-01-31 14:56:46'
        ]);



        CustomerNote::create([
            'id' => 2153,
            'customer_id' => 9867,
            'user_id' => 1,
            'note' => '				no pics on two boxes since storm, home after 2.00pm friday, 49.00',
            'created_at' => '2013-01-31 16:05:05'
        ]);



        CustomerNote::create([
            'id' => 2154,
            'customer_id' => 3721,
            'user_id' => 1,
            'note' => 'no sky plus functionality',
            'created_at' => '2013-01-31 17:11:09'
        ]);



        CustomerNote::create([
            'id' => 2155,
            'customer_id' => 5899,
            'user_id' => 1,
            'note' => 'No sky since storm, prob with ESB',
            'created_at' => '2013-01-31 20:14:21'
        ]);



        CustomerNote::create([
            'id' => 2156,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'New cam fitted and new mod, paid 465.00 cheque',
            'created_at' => '2013-02-01 13:18:04'
        ]);



        CustomerNote::create([
            'id' => 2157,
            'customer_id' => 4808,
            'user_id' => 1,
            'note' => 'Also did job for marg, ran new cable from new dish to existing sky hd STB and connected to next room with RC extr, paid 100.00',
            'created_at' => '2013-02-01 13:19:04'
        ]);



        CustomerNote::create([
            'id' => 2158,
            'customer_id' => 1233,
            'user_id' => 1,
            'note' => 'Job done paid cheque',
            'created_at' => '2013-02-01 13:19:50'
        ]);



        CustomerNote::create([
            'id' => 2159,
            'customer_id' => 16706,
            'user_id' => 1,
            'note' => 'dish off line after storm',
            'created_at' => '2013-02-02 17:53:33'
        ]);



        CustomerNote::create([
            'id' => 2160,
            'customer_id' => 3721,
            'user_id' => 1,
            'note' => 'sky stb stuck in standby, sold s/h sky+ stb, 90.00 + 49 callout. Paid cheque',
            'created_at' => '2013-02-02 17:54:58'
        ]);



        CustomerNote::create([
            'id' => 2161,
            'customer_id' => 9867,
            'user_id' => 1,
            'note' => 'Replaced dish and lnb, paid 180.00 cash',
            'created_at' => '2013-02-02 17:55:43'
        ]);



        CustomerNote::create([
            'id' => 2162,
            'customer_id' => 5899,
            'user_id' => 1,
            'note' => 'replaced dish and lnb, paid 170.00 ',
            'created_at' => '2013-02-02 17:56:13'
        ]);



        CustomerNote::create([
            'id' => 2163,
            'customer_id' => 15083,
            'user_id' => 1,
            'note' => '		replaced dish and lnb, paid 170.00',
            'created_at' => '2013-02-02 17:59:40'
        ]);



        CustomerNote::create([
            'id' => 2164,
            'customer_id' => 14361,
            'user_id' => 1,
            'note' => 'replaced dish and lnb, paid 180.00 cheque',
            'created_at' => '2013-02-02 18:03:26'
        ]);



        CustomerNote::create([
            'id' => 2165,
            'customer_id' => 881,
            'user_id' => 1,
            'note' => 'KD called here. FOC\r\nCustomer reporting intermittent signal loss on sats, used customers dish on install. New dish may be required here. Customer to keep a check and report back.',
            'created_at' => '2013-02-02 18:04:53'
        ]);



        CustomerNote::create([
            'id' => 2166,
            'customer_id' => 16032,
            'user_id' => 1,
            'note' => '		replaced psu on combi and tuned sv stb to new MTL ferq, also disabled auto power off on kitchen sv-stb-- FOC',
            'created_at' => '2013-02-02 18:06:34'
        ]);



        CustomerNote::create([
            'id' => 2167,
            'customer_id' => 16907,
            'user_id' => 1,
            'note' => 'liam called, seems the prob was how he was using RC, ok now, cancelled call',
            'created_at' => '2013-02-02 18:07:21'
        ]);



        CustomerNote::create([
            'id' => 2168,
            'customer_id' => 4349,
            'user_id' => 1,
            'note' => 'happy for KD to sort DTV signal problems with SV ant',
            'created_at' => '2013-02-02 18:09:15'
        ]);



        CustomerNote::create([
            'id' => 2169,
            'customer_id' => 16947,
            'user_id' => 1,
            'note' => '		New house enquiry, Thurs-Fri',
            'created_at' => '2013-02-04 09:56:45'
        ]);



        CustomerNote::create([
            'id' => 2170,
            'customer_id' => 16948,
            'user_id' => 1,
            'note' => 'Cow camera CCTV enquiry, Wed',
            'created_at' => '2013-02-04 09:58:48'
        ]);



        CustomerNote::create([
            'id' => 2171,
            'customer_id' => 16898,
            'user_id' => 1,
            'note' => 'fit new 32 LED over lanes',
            'created_at' => '2013-02-04 10:04:25'
        ]);



        CustomerNote::create([
            'id' => 2172,
            'customer_id' => 3785,
            'user_id' => 1,
            'note' => '9.00 - 3.00 pm Fitted new cam down yard at office. Repaired cable to house in 4 different places. Fitted new housing and cam to chimney at house. ',
            'created_at' => '2013-02-05 18:49:21'
        ]);



        CustomerNote::create([
            'id' => 2173,
            'customer_id' => 164,
            'user_id' => 1,
            'note' => 're-aligned dish, paid 49.00',
            'created_at' => '2013-02-05 18:52:08'
        ]);



        CustomerNote::create([
            'id' => 2174,
            'customer_id' => 14398,
            'user_id' => 1,
            'note' => 'Richard phoned, KD to check if this is same customer. dish damaged after storm. Richard 086 8165645 ref OD',
            'created_at' => '2013-02-05 18:56:16'
        ]);



        CustomerNote::create([
            'id' => 2175,
            'customer_id' => 10813,
            'user_id' => 1,
            'note' => 'Fit combi system, with Trilink to existing RC extrs. €484.00 Booked for Friday',
            'created_at' => '2013-02-05 19:00:07'
        ]);



        CustomerNote::create([
            'id' => 2176,
            'customer_id' => 3353,
            'user_id' => 1,
            'note' => 'retuned stb, paid 49.00 + 4 for batts',
            'created_at' => '2013-02-05 19:01:26'
        ]);



        CustomerNote::create([
            'id' => 2177,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => 'no uk channels since storm',
            'created_at' => '2013-02-05 19:02:32'
        ]);



        CustomerNote::create([
            'id' => 2178,
            'customer_id' => 5899,
            'user_id' => 1,
            'note' => 'wants s/h sky STB',
            'created_at' => '2013-02-05 19:10:48'
        ]);



        CustomerNote::create([
            'id' => 2179,
            'customer_id' => 16949,
            'user_id' => 1,
            'note' => 'Fit combi, has dish, agreed 325.00 with Donny Phelan 9 Balltbough St',
            'created_at' => '2013-02-05 19:13:42'
        ]);



        CustomerNote::create([
            'id' => 2180,
            'customer_id' => 16950,
            'user_id' => 1,
            'note' => 'Fit combi system, has dish. Agreed 325.00 with Phelan 9 Newpark',
            'created_at' => '2013-02-05 19:15:54'
        ]);



        CustomerNote::create([
            'id' => 2181,
            'customer_id' => 12139,
            'user_id' => 1,
            'note' => 'Call to discuss double combi with record',
            'created_at' => '2013-02-09 09:26:39'
        ]);



        CustomerNote::create([
            'id' => 2182,
            'customer_id' => 3576,
            'user_id' => 1,
            'note' => 'returned tv to customer',
            'created_at' => '2013-02-11 11:12:39'
        ]);



        CustomerNote::create([
            'id' => 2183,
            'customer_id' => 16888,
            'user_id' => 1,
            'note' => 'no sat sig on existing fta',
            'created_at' => '2013-02-11 11:37:55'
        ]);



        CustomerNote::create([
            'id' => 2184,
            'customer_id' => 16898,
            'user_id' => 1,
            'note' => 'fitted new hanspree led over lane',
            'created_at' => '2013-02-11 11:42:04'
        ]);



        CustomerNote::create([
            'id' => 2185,
            'customer_id' => 3785,
            'user_id' => 1,
            'note' => '2-5.30 pm Friday, run cables from new cam on chimney to tv',
            'created_at' => '2013-02-11 11:42:49'
        ]);



        CustomerNote::create([
            'id' => 2186,
            'customer_id' => 10813,
            'user_id' => 1,
            'note' => 'fitted triax combi and trilink kit, paid 509.00',
            'created_at' => '2013-02-11 11:43:55'
        ]);



        CustomerNote::create([
            'id' => 2187,
            'customer_id' => 16951,
            'user_id' => 1,
            'note' => 'Fit combi system , 399.00',
            'created_at' => '2013-02-11 11:50:47'
        ]);



        CustomerNote::create([
            'id' => 2188,
            'customer_id' => 16952,
            'user_id' => 1,
            'note' => 'fit combi system 399.00',
            'created_at' => '2013-02-11 11:53:06'
        ]);



        CustomerNote::create([
            'id' => 2189,
            'customer_id' => 16953,
            'user_id' => 1,
            'note' => 'Fit 2 x combi with usb, has dish. 570.00, paid 270.00 deposit',
            'created_at' => '2013-02-11 11:56:05'
        ]);



        CustomerNote::create([
            'id' => 2190,
            'customer_id' => 10391,
            'user_id' => 1,
            'note' => 'fit new sky stb',
            'created_at' => '2013-02-11 11:57:18'
        ]);



        CustomerNote::create([
            'id' => 2191,
            'customer_id' => 16897,
            'user_id' => 1,
            'note' => 'Fit sky stb, connect audio to gym, change wifi on Sonos & switch off wifi in basement',
            'created_at' => '2013-02-11 11:58:20'
        ]);



        CustomerNote::create([
            'id' => 2192,
            'customer_id' => 16954,
            'user_id' => 1,
            'note' => 'Refit Sky',
            'created_at' => '2013-02-11 12:01:53'
        ]);



        CustomerNote::create([
            'id' => 2193,
            'customer_id' => 16663,
            'user_id' => 1,
            'note' => '		Sr. Kate 087 7506815 Credit note €329.00',
            'created_at' => '2013-02-11 12:04:35'
        ]);



        CustomerNote::create([
            'id' => 2194,
            'customer_id' => 13955,
            'user_id' => 1,
            'note' => 'John, 086 2640866',
            'created_at' => '2013-02-11 12:09:03'
        ]);



        CustomerNote::create([
            'id' => 2195,
            'customer_id' => 7656,
            'user_id' => 1,
            'note' => 'Replaced dish and wall bit. Paid 200.00',
            'created_at' => '2013-02-11 13:34:57'
        ]);



        CustomerNote::create([
            'id' => 2196,
            'customer_id' => 14398,
            'user_id' => 1,
            'note' => 'Called here, dish literally falling apart, quoted 175/200 for replacement and removal of old antenna. Paid call out.',
            'created_at' => '2013-02-11 13:36:41'
        ]);



        CustomerNote::create([
            'id' => 2197,
            'customer_id' => 16947,
            'user_id' => 1,
            'note' => 'Tim is getting sky to move dish, might want SV ant and dist ',
            'created_at' => '2013-02-11 13:37:41'
        ]);



        CustomerNote::create([
            'id' => 2198,
            'customer_id' => 16954,
            'user_id' => 1,
            'note' => 'Connect rest area and comms room to sky dish. Run cables from existing dish. Fit new Samsung 40 on wall bracket and fit STB over. Thursday ',
            'created_at' => '2013-02-11 13:39:38'
        ]);



        CustomerNote::create([
            'id' => 2199,
            'customer_id' => 16950,
            'user_id' => 1,
            'note' => 'Fitted ant outside and dip with existing dish. Technistar STB ',
            'created_at' => '2013-02-11 20:06:27'
        ]);



        CustomerNote::create([
            'id' => 2200,
            'customer_id' => 16949,
            'user_id' => 1,
            'note' => 'Fitted ant outside and connected using old sky plus cable. Technistar scart',
            'created_at' => '2013-02-11 20:07:57'
        ]);



        CustomerNote::create([
            'id' => 2201,
            'customer_id' => 16455,
            'user_id' => 1,
            'note' => 'Go ahead with second combi box @ 249.00',
            'created_at' => '2013-02-12 16:37:18'
        ]);



        CustomerNote::create([
            'id' => 2202,
            'customer_id' => 16604,
            'user_id' => 1,
            'note' => 'Send channel line up by email',
            'created_at' => '2013-02-12 18:29:23'
        ]);



        CustomerNote::create([
            'id' => 2203,
            'customer_id' => 16888,
            'user_id' => 1,
            'note' => 'Replaced batts in RC , 49+4 ',
            'created_at' => '2013-02-12 21:47:24'
        ]);
    }
}
