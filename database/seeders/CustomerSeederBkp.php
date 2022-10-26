<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'id' => 1,
            'name' => 'Event Media Testing Only',
            'email' => 'hello@eventmedia.ie',
            'phone' => '0868511910',
            'mobile_1' => '353868511910',
            'mobile_2' => NULL,
            'address_1' => 'Kilkenny Commercial Centre',
            'address_2' => 'Sion Road',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'LOC8',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 2,
            'name' => 'Tom Dalton',
            'email' => 'kennydalton@eircom.cet',
            'phone' => '0567771900',
            'mobile_1' => '0567771900',
            'mobile_2' => NULL,
            'address_1' => 'Co.Kilkenny',
            'address_2' => 'Carlow',
            'city' => 'Kilkenny',
            'state' => 'Derry',
            'country' => '',
            'eir_code' => 'ROI',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 3,
            'name' => 'Tom',
            'email' => '',
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => NULL,
            'address_1' => '',
            'address_2' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 4,
            'name' => 'Jim White',
            'email' => '',
            'phone' => '',
            'mobile_1' => '0872481611',
            'mobile_2' => NULL,
            'address_1' => 'St Annes',
            'address_2' => 'Waterford Rd.',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'ROI',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 5,
            'name' => 'Capuchin Friary',
            'email' => '',
            'phone' => '056 7721439',
            'mobile_1' => '',
            'mobile_2' => NULL,
            'address_1' => 'Friary St',
            'address_2' => 'Kilkenny',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'ROI',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 6,
            'name' => 'Mary Corby',
            'email' => '',
            'phone' => '',
            'mobile_1' => '0868877936',
            'mobile_2' => NULL,
            'address_1' => '2 Collaire Court',
            'address_2' => 'Friary Walk',
            'city' => 'Callan',
            'state' => 'Kilkenny',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 7,
            'name' => 'Judy Langton',
            'email' => '',
            'phone' => '',
            'mobile_1' => '353863743063',
            'mobile_2' => NULL,
            'address_1' => 'Templemartin',
            'address_2' => 'Clara',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 8,
            'name' => 'Anna Meaney',
            'email' => '',
            'phone' => '0876462143',
            'mobile_1' => '',
            'mobile_2' => NULL,
            'address_1' => '7 Bannim Tce',
            'address_2' => 'Freshford Rd.',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'ROI',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 9,
            'name' => 'Demo Supplier Account',
            'email' => '',
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => NULL,
            'address_1' => '',
            'address_2' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 10,
            'name' => 'Janet Harper',
            'email' => '',
            'phone' => '0567767655',
            'mobile_1' => '0851543519',
            'mobile_2' => NULL,
            'address_1' => 'Ballyfoyle',
            'address_2' => '',
            'city' => 'Kilkenny',
            'state' => '',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 11,
            'name' => 'Olive Walsh',
            'email' => '',
            'phone' => '051440682',
            'mobile_1' => '0868735886',
            'mobile_2' => NULL,
            'address_1' => 'Old town ',
            'address_2' => '',
            'city' => 'Stony ford',
            'state' => 'Kilkenny',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 12,
            'name' => 'Margaret & Philip O Keeffe',
            'email' => '',
            'phone' => '0567759727',
            'mobile_1' => '0868397316',
            'mobile_2' => NULL,
            'address_1' => 'Calra',
            'address_2' => '',
            'city' => '',
            'state' => 'Co.Kilkenny',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 13,
            'name' => 'Noel O Loughlin',
            'email' => '',
            'phone' => '',
            'mobile_1' => '0833041538',
            'mobile_2' => NULL,
            'address_1' => '',
            'address_2' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 14,
            'name' => 'Marie Cullen Coady',
            'email' => '',
            'phone' => '',
            'mobile_1' => '0878288104',
            'mobile_2' => NULL,
            'address_1' => '7 Riverside Dr',
            'address_2' => 'Freshford Rd',
            'city' => 'Kilkenny',
            'state' => '',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 15,
            'name' => 'Ann O Shea',
            'email' => '',
            'phone' => '',
            'mobile_1' => '353861908799',
            'mobile_2' => NULL,
            'address_1' => '2 Whites Castle',
            'address_2' => '',
            'city' => 'Knocktopher',
            'state' => 'Kilkenny',
            'country' => '',
            'eir_code' => '',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 16,
            'name' => 'Pat Murphy\r\n',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '059 9146785',
            'address_1' => 'BALLYMURPHY',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 17,
            'name' => 'GERRY BYRNE',
            'email' => null,
            'phone' => '051 424869',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GLYNN',
            'address_2' => 'ST. MULLINS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 18,
            'name' => ' KEATING',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6279496',
            'mobile_2' => '0876979496',
            'address_1' => '11 DE LA SALLE PL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 19,
            'name' => 'ANN GUILFOYLE',
            'email' => null,
            'phone' => '056 8831303',
            'mobile_1' => '087 6005677',
            'mobile_2' => '',
            'address_1' => 'THE ISLANDS',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 20,
            'name' => 'Helen MULHALL',
            'email' => null,
            'phone' => '056 7721843',
            'mobile_1' => '086 0507471',
            'mobile_2' => '',
            'address_1' => 'ELMIRA',
            'address_2' => 'KELLS ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 21,
            'name' => 'EAMONN SWEENEY',
            'email' => null,
            'phone' => '0567769467',
            'mobile_1' => '086 2470255',
            'mobile_2' => '',
            'address_1' => 'HUNTSTOWN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 22,
            'name' => 'JASON RUTH',
            'email' => null,
            'phone' => '056 7730892',
            'mobile_1' => '086 2349393',
            'mobile_2' => '',
            'address_1' => 'NORELANDS',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 23,
            'name' => '5 HEALY',
            'email' => null,
            'phone' => '0567741289',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAUDLIN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 24,
            'name' => 'MAJELLA KEEGAN',
            'email' => null,
            'phone' => '0599157015',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MYSHALL',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 25,
            'name' => 'Marie BRENNAN',
            'email' => null,
            'phone' => '056 8833156',
            'mobile_1' => '087 2465671ma',
            'mobile_2' => '',
            'address_1' => 'TINNALINTON',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 26,
            'name' => 'DENNIS CARNEY',
            'email' => null,
            'phone' => '056 7762730',
            'mobile_1' => '087 2576925',
            'mobile_2' => '0567789217',
            'address_1' => 'COOTES LANE',
            'address_2' => 'COLLEGE ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 27,
            'name' => '3 O SHEA',
            'email' => null,
            'phone' => '0567729971',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYMACK',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 28,
            'name' => 'BRIGID Barcoe',
            'email' => null,
            'phone' => '0567722886',
            'mobile_1' => '087 2033150',
            'mobile_2' => '',
            'address_1' => '20 CLUAIN MHUIRE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 29,
            'name' => 'FERGUS DALTON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8142001',
            'mobile_2' => '',
            'address_1' => '1 RIVERSDALE',
            'address_2' => 'ATHY',
            'city' => null,
            'state' => 'CO.  KILDARE',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 30,
            'name' => 'ELIZABETH WALSH',
            'email' => null,
            'phone' => '056 7727003',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CROAN',
            'address_2' => 'DANESFORT',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 31,
            'name' => 'EAMONN BREEN',
            'email' => null,
            'phone' => '056 4441865',
            'mobile_1' => '087 9810849',
            'mobile_2' => '057 8731202',
            'address_1' => 'MUCKALEE',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 32,
            'name' => 'JOHN O BRIEN',
            'email' => null,
            'phone' => '059 9722329',
            'mobile_1' => '086 3588267',
            'mobile_2' => '',
            'address_1' => '5 ST. BRIGIDS CRES',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 33,
            'name' => 'GLEN WARDROP',
            'email' => null,
            'phone' => '0567723892',
            'mobile_1' => '087 2513412',
            'mobile_2' => '',
            'address_1' => '33 SPRING MOUNT',
            'address_2' => 'WATERFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 34,
            'name' => 'Aidan GEOGHEGAN',
            'email' => null,
            'phone' => '056 4441456',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRACK ST',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 35,
            'name' => 'JACK O LEARY',
            'email' => null,
            'phone' => '0599726104',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'PAULSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 36,
            'name' => 'KEVIN BARRY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2078200',
            'mobile_2' => '',
            'address_1' => 'DUBLIN RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 37,
            'name' => 'PEGGY BARDON',
            'email' => null,
            'phone' => '056 7727293',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DANESFORT',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 38,
            'name' => 'E O\'BRIEN',
            'email' => null,
            'phone' => '0567761623',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '23 RIVERVIEW',
            'address_2' => 'ARDNORE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 39,
            'name' => 'Noreen JEREMIAH MOLLOY',
            'email' => null,
            'phone' => '056 7721387',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '48 WALKIN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 40,
            'name' => 'DENIS A TREACY',
            'email' => null,
            'phone' => '056 7721197',
            'mobile_1' => '086 2677307ann',
            'mobile_2' => '086 2640866john',
            'address_1' => 'Ashford',
            'address_2' => 'Castleview',
            'city' => null,
            'state' => 'Kells Rd',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 41,
            'name' => 'lahart RYAN',
            'email' => null,
            'phone' => '0567721860',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WALLSLOUGH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 42,
            'name' => 'EUGENE MC SWEENEY',
            'email' => null,
            'phone' => '056 7756105',
            'mobile_1' => '353872530034',
            'mobile_2' => '',
            'address_1' => 'FRIARS INCH',
            'address_2' => 'BLEACH ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 43,
            'name' => ' BUTLER',
            'email' => null,
            'phone' => '0567756139',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '21 DE LA SALLE PL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 44,
            'name' => 'DES MURPHY',
            'email' => null,
            'phone' => '056 7759832',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PARK',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 45,
            'name' => 'S GRIMSHAW',
            'email' => null,
            'phone' => '0567758112',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LWR CLUNE',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 46,
            'name' => 'Billy MOORE',
            'email' => null,
            'phone' => '0567722671',
            'mobile_1' => '353868108464',
            'mobile_2' => '',
            'address_1' => 'HIGGINSTOWN',
            'address_2' => 'KILDERRY',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => ' R95CX58',
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 47,
            'name' => 'L REIDY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FOXES COVER',
            'address_2' => 'MT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 48,
            'name' => 'BRONAGH REIDY',
            'email' => null,
            'phone' => '056 7754030',
            'mobile_1' => '087 6776199',
            'mobile_2' => '',
            'address_1' => '2 FOXES COVERT',
            'address_2' => 'MT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 49,
            'name' => 'CAROL JONES',
            'email' => null,
            'phone' => '0567727005',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MOATFIELD',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 50,
            'name' => 'PATRICK REDDY',
            'email' => null,
            'phone' => '059 9724760',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TINNAPARK',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 51,
            'name' => 'PAUL MOLLOY',
            'email' => null,
            'phone' => '056 7771098',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '77 THE FAIRWAYS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 52,
            'name' => 'ANTHONY POWER',
            'email' => null,
            'phone' => '0567742882',
            'mobile_1' => '087 6226557',
            'mobile_2' => '',
            'address_1' => 'CRUTT',
            'address_2' => 'CLOGH CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 53,
            'name' => 'LINDA MC EVOY',
            'email' => null,
            'phone' => '0567731870',
            'mobile_1' => '086 8270507',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 54,
            'name' => 'KEVIN BUTLER',
            'email' => null,
            'phone' => '056 7723770',
            'mobile_1' => '087 2598006',
            'mobile_2' => '',
            'address_1' => '23 HOLLYBANK CRES',
            'address_2' => 'CLONGOWAN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 55,
            'name' => 'S J MAXWELL',
            'email' => null,
            'phone' => '052 33666',
            'mobile_1' => '086 8234430',
            'mobile_2' => '052 25088',
            'address_1' => 'BALLYPATRICK',
            'address_2' => 'CLONMEL',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 56,
            'name' => 'HAROLD MC CONVILLE',
            'email' => null,
            'phone' => '059 9724340',
            'mobile_1' => '059 9724142',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 57,
            'name' => 'William Walsh',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9202789',
            'mobile_2' => '',
            'address_1' => 'Clonamery',
            'address_2' => 'Inistoige',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 58,
            'name' => '3 LANIGAN',
            'email' => null,
            'phone' => '056 7769543',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BANSE GLEBE',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 59,
            'name' => 'JOE PHELAN',
            'email' => null,
            'phone' => '056 7762614',
            'mobile_1' => '086 6090133',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'BONNETTSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 60,
            'name' => 'T MC GUINNESS',
            'email' => null,
            'phone' => '0567759920',
            'mobile_1' => '086 8337381',
            'mobile_2' => '',
            'address_1' => 'COOLBRICKEN HSE',
            'address_2' => 'JOHNSWELL',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 61,
            'name' => 'PAT CANTWELL',
            'email' => null,
            'phone' => '056 7771715',
            'mobile_1' => '086 2582450',
            'mobile_2' => '',
            'address_1' => 'SION ORCHARD',
            'address_2' => 'SION ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 62,
            'name' => ' COFFEY',
            'email' => null,
            'phone' => '0567767239',
            'mobile_1' => '086 8251203',
            'mobile_2' => '',
            'address_1' => 'PIKE ROAD',
            'address_2' => 'DUNMORE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 63,
            'name' => 'PAUL KILLIAN',
            'email' => null,
            'phone' => '056 7769620',
            'mobile_1' => '086 4043649',
            'mobile_2' => '',
            'address_1' => 'LISS',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 64,
            'name' => 'JOHN DELANEY',
            'email' => null,
            'phone' => '0567732496',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILRUSH',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 65,
            'name' => 'NOEL DERMODY',
            'email' => null,
            'phone' => '056 8831539',
            'mobile_1' => '086 8563426',
            'mobile_2' => '',
            'address_1' => 'JOHNSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 66,
            'name' => 'MICHAEL MADDEN',
            'email' => null,
            'phone' => '0567722669',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN VILLA',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 67,
            'name' => 'MATT MILLETT',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8306045',
            'mobile_2' => '',
            'address_1' => 'SHEESTOWN',
            'address_2' => 'BENNETTSBRIDGE RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 68,
            'name' => 'JASON KAVANAGH',
            'email' => null,
            'phone' => '0567752000',
            'mobile_1' => '087 2991383',
            'mobile_2' => '',
            'address_1' => '10 GARRINGREEN UPPER',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 69,
            'name' => 'PATRICIA O NEILL',
            'email' => null,
            'phone' => '056 4441586',
            'mobile_1' => '087 9955065',
            'mobile_2' => '0567742252',
            'address_1' => 'LOON',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 70,
            'name' => 'B DOYLE',
            'email' => null,
            'phone' => '0567721875',
            'mobile_1' => '086 8714941',
            'mobile_2' => '',
            'address_1' => '21 ALTAMOUNT PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 71,
            'name' => 'DAVID O HANLON',
            'email' => null,
            'phone' => '051 391584',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SWEETBRIAR PARK',
            'address_2' => 'TRAMORE',
            'city' => null,
            'state' => 'CO. WATERFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 72,
            'name' => 'JIM HOGAN',
            'email' => null,
            'phone' => '059 9775587',
            'mobile_1' => '087 2622555',
            'mobile_2' => '',
            'address_1' => '33 BARROWMOUNT DR',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 73,
            'name' => ' CARROLL',
            'email' => null,
            'phone' => '051 898542',
            'mobile_1' => '086 2571713',
            'mobile_2' => '',
            'address_1' => 'HARRISTOWN',
            'address_2' => 'PILTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 74,
            'name' => 'SEAMUS KAVANAGH',
            'email' => null,
            'phone' => '059 9724958',
            'mobile_1' => '087 6764155',
            'mobile_2' => '',
            'address_1' => '3 BRANDON PARK',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 75,
            'name' => ' MC CONVILLE',
            'email' => null,
            'phone' => '056 7724210',
            'mobile_1' => '0503 24142',
            'mobile_2' => '0567724370',
            'address_1' => 'LOW STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 76,
            'name' => 'RONAN DOLLARD',
            'email' => null,
            'phone' => '056 7767858',
            'mobile_1' => '086 8530200',
            'mobile_2' => '',
            'address_1' => 'OAKLANDS',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 77,
            'name' => 'J CLIFFORD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3226246',
            'mobile_2' => '',
            'address_1' => '121 NEWPARK CLOSE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 78,
            'name' => 'JOHN O KEEFFE',
            'email' => null,
            'phone' => '0567765588',
            'mobile_1' => '087 8108180',
            'mobile_2' => '',
            'address_1' => 'LYRATH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 79,
            'name' => 'EAMONN MC EVOY',
            'email' => null,
            'phone' => '0567761839',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '13 THE ORCHARD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 80,
            'name' => 'P O CONNELL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2691805',
            'mobile_2' => '0862222931',
            'address_1' => 'JAMESTOWN',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 81,
            'name' => 'JANE MINOGUE',
            'email' => null,
            'phone' => '0567765950',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '10 QUAY COURT',
            'address_2' => 'NEW BUILDING LANE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 82,
            'name' => 'BRENDAN LAWLOR',
            'email' => null,
            'phone' => '056 7721652',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '8 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 83,
            'name' => 'Teresa Brennan',
            'email' => null,
            'phone' => '0504 34967',
            'mobile_1' => '087 7440021',
            'mobile_2' => '',
            'address_1' => 'Piercetown',
            'address_2' => 'Moyne',
            'city' => null,
            'state' => 'Thurles',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 84,
            'name' => 'JOSEPH FENLON',
            'email' => null,
            'phone' => '0567743100',
            'mobile_1' => '086 2787598',
            'mobile_2' => '',
            'address_1' => 'COONWEST VIA CARLO',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 85,
            'name' => 'Henry O Grady',
            'email' => null,
            'phone' => '0567731484',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '6 St Josephs TCE',
            'address_2' => 'Urlingford',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 86,
            'name' => 'BRIAN MIDDLETON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8460502',
            'mobile_2' => '',
            'address_1' => '44 THE ORCHARD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 87,
            'name' => 'ELAINE MC GRATH',
            'email' => null,
            'phone' => '0599724282',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HARRISTOWN',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 88,
            'name' => 'MICHAEL MINOGUE',
            'email' => null,
            'phone' => '056 7751798',
            'mobile_1' => '087 2598753',
            'mobile_2' => '087 2276357',
            'address_1' => '7 ABBEYBRIDGE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 89,
            'name' => 'TER PENFOLD',
            'email' => null,
            'phone' => '0599724974',
            'mobile_1' => '',
            'mobile_2' => '0567763888',
            'address_1' => 'BELLEVIEW COOLROE',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 90,
            'name' => 'Raymond Healy',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 7225854',
            'mobile_2' => '',
            'address_1' => '4 Bradog Way',
            'address_2' => 'Gowran',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 91,
            'name' => 'MICHAEL HUTCHINSON',
            'email' => null,
            'phone' => '056 7726301',
            'mobile_1' => '086 2576012',
            'mobile_2' => '',
            'address_1' => 'BALLYQUIRKE',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 92,
            'name' => 'MICHAEL BARRY',
            'email' => null,
            'phone' => '059 9724013',
            'mobile_1' => '087 2591236',
            'mobile_2' => '',
            'address_1' => 'MAIN ST TINNAHINCH',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 93,
            'name' => 'JON BARHAM-NOKES',
            'email' => null,
            'phone' => '0567769574',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLONARD KILMANAGH',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 94,
            'name' => 'JOHN CURRAN',
            'email' => null,
            'phone' => '059 9775968',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLUAIN MHUIRE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 95,
            'name' => 'NUALA HEALY',
            'email' => null,
            'phone' => '056 7759879',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CARRIGEEN',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 96,
            'name' => '-M MAHER',
            'email' => null,
            'phone' => '0567732643',
            'mobile_1' => '087 2378290',
            'mobile_2' => '',
            'address_1' => 'CLONTUBRID',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 97,
            'name' => 'EVELINE HENNESSY',
            'email' => null,
            'phone' => '056 7722668',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILROSS',
            'address_2' => 'NEWPARK',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 98,
            'name' => 'MARK KELLY',
            'email' => null,
            'phone' => '056 7752455',
            'mobile_1' => '087 2377615',
            'mobile_2' => '',
            'address_1' => '64 MARBLE CREST',
            'address_2' => 'LOUGHBOY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 99,
            'name' => 'SALLY KAVANAGH',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8037126',
            'mobile_2' => '056 7724888',
            'address_1' => 'MARKET STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 100,
            'name' => 'MICHAEL MULLINS',
            'email' => null,
            'phone' => '056 7763504',
            'mobile_1' => '086 2645531',
            'mobile_2' => '',
            'address_1' => '8 HEBRON PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 101,
            'name' => 'Dumile Ndombo',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 1214531',
            'mobile_2' => '',
            'address_1' => '4 The Arches',
            'address_2' => 'Barrack St',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 102,
            'name' => 'MICHAEL PURCELL',
            'email' => null,
            'phone' => '056 7729280',
            'mobile_1' => '086 8102835',
            'mobile_2' => '',
            'address_1' => 'OAK TREE FARM',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 103,
            'name' => 'LIAM DALTON',
            'email' => null,
            'phone' => '059 9775171',
            'mobile_1' => '087 6887387',
            'mobile_2' => '',
            'address_1' => 'GORESBRIDGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 104,
            'name' => 'JAMES DEMPSEY',
            'email' => null,
            'phone' => '059 9775362',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYELLEN',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 105,
            'name' => 'PAMELA BROWNE',
            'email' => null,
            'phone' => '051 387778',
            'mobile_1' => '086 0604104',
            'mobile_2' => '',
            'address_1' => '9 Coolfinwood',
            'address_2' => 'Portlaw',
            'city' => null,
            'state' => 'CO Waterford',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 106,
            'name' => 'DENIS O NEILL',
            'email' => null,
            'phone' => '059 9726264',
            'mobile_1' => '',
            'mobile_2' => '059 9721006',
            'address_1' => 'BALLYVALLDEN',
            'address_2' => 'CASTLEWARREN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 107,
            'name' => ' JIMMY CUMMINS',
            'email' => null,
            'phone' => '056 7721561',
            'mobile_1' => '',
            'mobile_2' => '056 7722719',
            'address_1' => 'IRISHTOWN PO',
            'address_2' => '',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 108,
            'name' => 'Michael O KEEFFE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8383806',
            'mobile_2' => '',
            'address_1' => 'Inistioge',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 109,
            'name' => 'BILL CONNOLLY',
            'email' => null,
            'phone' => '0599775336',
            'mobile_1' => '087 6000270',
            'mobile_2' => '0599775800',
            'address_1' => 'BALLYELLEN',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 110,
            'name' => 'JOHN QUINN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLROE',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 111,
            'name' => 'Des Hennessy',
            'email' => null,
            'phone' => '056 7721007',
            'mobile_1' => '086 8120447,086 2567729',
            'mobile_2' => '',
            'address_1' => 'Shellumsrath',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 112,
            'name' => 'JOHN RUTH',
            'email' => null,
            'phone' => '056 7761108',
            'mobile_1' => '087 2572924',
            'mobile_2' => '056 7761792',
            'address_1' => '3 LAWCUS FIELDS',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 113,
            'name' => 'ANN KINSELLA',
            'email' => null,
            'phone' => '0599724849',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 OLIVER PLUNKETT',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 114,
            'name' => 'EDWARD HOLLAND JNR',
            'email' => null,
            'phone' => '0567769600',
            'mobile_1' => '087 4128268',
            'mobile_2' => '',
            'address_1' => 'RAHEEN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 115,
            'name' => 'BRIAN MC CULLAGH',
            'email' => null,
            'phone' => '0567767212',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FOULKSRATH',
            'address_2' => 'JENKINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 116,
            'name' => 'DERRICK KENNY',
            'email' => null,
            'phone' => '056 7769622',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYEVEN',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 117,
            'name' => 'Margaret Thornton',
            'email' => null,
            'phone' => '0567733375',
            'mobile_1' => '353879079411',
            'mobile_2' => '',
            'address_1' => 'LISDOWNEY',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 118,
            'name' => 'Margaret O Driscoll',
            'email' => null,
            'phone' => '056 7725641',
            'mobile_1' => '086 0782937',
            'mobile_2' => '',
            'address_1' => 'Westcourt, Haggardsgreen',
            'address_2' => 'Callan',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 119,
            'name' => ' WALLACE',
            'email' => null,
            'phone' => '056 7728581',
            'mobile_1' => '086 2218631',
            'mobile_2' => '',
            'address_1' => 'ENNISNAG',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 120,
            'name' => 'TERESA MC DERMOTT',
            'email' => null,
            'phone' => '0567741383',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE RISING SUN',
            'address_2' => 'FIRODA CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 121,
            'name' => 'ALAN ',
            'email' => null,
            'phone' => '0502 34207',
            'mobile_1' => '085 7326884',
            'mobile_2' => '',
            'address_1' => 'CLOGH RD',
            'address_2' => 'BALLACOLLA',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 122,
            'name' => 'LAUREN GRANT',
            'email' => null,
            'phone' => '052 54710',
            'mobile_1' => '087 6308967',
            'mobile_2' => '0567762674',
            'address_1' => 'THE COMMONS',
            'address_2' => 'THURLES',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 123,
            'name' => 'PHILIP O NEILL',
            'email' => null,
            'phone' => '056 8833510',
            'mobile_1' => '086 1031484',
            'mobile_2' => '',
            'address_1' => '3 GREENVIEW',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 124,
            'name' => 'MARTIN BRENNAN',
            'email' => null,
            'phone' => '0564441582',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '2 LR BALLYHEMMON',
            'address_2' => 'Kilkenny Road',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 125,
            'name' => 'SEAN RING',
            'email' => null,
            'phone' => '056 41471',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLASHDUFF',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 126,
            'name' => 'THOMAS FARRELL',
            'email' => null,
            'phone' => '056 7771887',
            'mobile_1' => '086 2595028',
            'mobile_2' => '',
            'address_1' => '74 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 127,
            'name' => 'DESMOND mi',
            'email' => null,
            'phone' => '052 53226',
            'mobile_1' => '086 3414735',
            'mobile_2' => '056 52411',
            'address_1' => 'MODESHILL',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO. TIPPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 128,
            'name' => 'JOHN DOLAN',
            'email' => null,
            'phone' => '056 26705',
            'mobile_1' => '087 9845975',
            'mobile_2' => '0857264190',
            'address_1' => '9 ST MARYS COURT',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 129,
            'name' => 'PADRAIG KEEGAN',
            'email' => null,
            'phone' => '056 7767269',
            'mobile_1' => '086 8827896',
            'mobile_2' => '',
            'address_1' => 'KYLEFARNEY',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 130,
            'name' => 'MATILDA PICHIERRI',
            'email' => null,
            'phone' => '056 40193',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KNOCK COTTAGE',
            'address_2' => 'KNOCKNADOGUE',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 131,
            'name' => 'TOMMY O DONNELL',
            'email' => null,
            'phone' => '056 33645',
            'mobile_1' => '087 6226095',
            'mobile_2' => '',
            'address_1' => '45 HIGH ST',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 132,
            'name' => 'JOHN CLEERE',
            'email' => null,
            'phone' => '056 7762573',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '28 PARLIAMENT ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 133,
            'name' => 'A O\'DEA',
            'email' => null,
            'phone' => '056 69379',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KNOCKEENBAWN',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 134,
            'name' => 'DAVID STAPLETON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2532482',
            'mobile_2' => '',
            'address_1' => 'RATHCLOUGH',
            'address_2' => 'DANESFORT',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 135,
            'name' => '- EGAN',
            'email' => null,
            'phone' => '056 61965',
            'mobile_1' => '087 6821918',
            'mobile_2' => '',
            'address_1' => 'SPRINGFIELD',
            'address_2' => 'COOLGRANGE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 136,
            'name' => 'MARY BUTLER',
            'email' => null,
            'phone' => '056 61945',
            'mobile_1' => 'EXT 124',
            'mobile_2' => '056 52699',
            'address_1' => '28 SYCAMORE DRIVE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 137,
            'name' => 'BILL EUSTACE',
            'email' => null,
            'phone' => '056 7728795',
            'mobile_1' => '087 6472394',
            'mobile_2' => '',
            'address_1' => 'KELLSRANGE',
            'address_2' => 'KELLS',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 138,
            'name' => 'LIAM MURPHY',
            'email' => null,
            'phone' => '056 7729079',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CUFFESGRANGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 139,
            'name' => 'EC COYNE',
            'email' => null,
            'phone' => '056 65998',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RATHMOYLE',
            'address_2' => 'TULLAROAN RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 140,
            'name' => 'JOHN QUINN',
            'email' => null,
            'phone' => '0503 75233',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 141,
            'name' => 'ANTHONY PHELAN',
            'email' => null,
            'phone' => '057 8733355',
            'mobile_1' => '087 7681006',
            'mobile_2' => '',
            'address_1' => 'Ironmills',
            'address_2' => 'Ballinakill',
            'city' => null,
            'state' => 'Co Laois',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 142,
            'name' => 'STEVE COOPER',
            'email' => null,
            'phone' => '056 29282',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYBUR',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 143,
            'name' => 'PATRICK HYNES',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '23 WOODLAWN PARK',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 144,
            'name' => 'GER HOGAN',
            'email' => null,
            'phone' => '056 7761238',
            'mobile_1' => '086 2567614',
            'mobile_2' => '',
            'address_1' => '5 BROOKLAWN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 145,
            'name' => 'William MURRAY',
            'email' => null,
            'phone' => '051 647007',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Blenaleen',
            'address_2' => 'South Lodge',
            'city' => null,
            'state' => 'Carrick-on-Suir',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 146,
            'name' => 'Una O Keeffe',
            'email' => null,
            'phone' => '051 641753',
            'mobile_1' => '087 2389124',
            'mobile_2' => '',
            'address_1' => 'Ballyneale',
            'address_2' => 'Carrick-on-Suir',
            'city' => null,
            'state' => 'Co Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 147,
            'name' => 'NIALL BOLGER',
            'email' => null,
            'phone' => '056 67092',
            'mobile_1' => '087 6385994',
            'mobile_2' => '',
            'address_1' => 'KNOCKROE',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 148,
            'name' => 'DAMIEN DONNELLY',
            'email' => null,
            'phone' => '056 7771719',
            'mobile_1' => '087 8176380',
            'mobile_2' => '',
            'address_1' => '2 WOODLAWN',
            'address_2' => 'ARCHERS AVENUE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 149,
            'name' => 'Niamh Parle',
            'email' => null,
            'phone' => '051 642016',
            'mobile_1' => '087 2225044pat',
            'mobile_2' => '',
            'address_1' => 'Mullough',
            'address_2' => 'Ballyneale',
            'city' => null,
            'state' => 'Carrick-on-Suir',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 150,
            'name' => 'Nicholas LANIGAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3262228',
            'mobile_2' => '',
            'address_1' => '42 Rosewood',
            'address_2' => 'Kells Rd',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 151,
            'name' => 'ALAN TRAIT',
            'email' => null,
            'phone' => '056 7756644',
            'mobile_1' => '086 3368293',
            'mobile_2' => '',
            'address_1' => '3 LINTOWN PLACE',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 152,
            'name' => 'JJ DONOHOE',
            'email' => null,
            'phone' => '0503 75442',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOWER GRANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 153,
            'name' => 'NICKY POWER',
            'email' => null,
            'phone' => '056 7763000',
            'mobile_1' => '087 7763000',
            'mobile_2' => '',
            'address_1' => '4 HAZEL GROVE',
            'address_2' => 'ARCHER AVE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 154,
            'name' => 'NOEL OWENS',
            'email' => null,
            'phone' => '056 64558',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PURCELLSINCH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 155,
            'name' => 'SEAN MORONEY electrical',
            'email' => null,
            'phone' => '056 7795655',
            'mobile_1' => '086 8165577',
            'mobile_2' => '056 7751141',
            'address_1' => 'PURCELLSINCH',
            'address_2' => 'DUBLIN RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 156,
            'name' => 'Sheila DAWSON',
            'email' => null,
            'phone' => '056 7722891',
            'mobile_1' => '087 2119165',
            'mobile_2' => '056 52208',
            'address_1' => '117 THE SYCAMORES',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 157,
            'name' => 'a JACKSON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLONEEN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 158,
            'name' => 'JIM BYRNE',
            'email' => null,
            'phone' => '056 26145',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 159,
            'name' => 'PAUL BYRNE',
            'email' => null,
            'phone' => '056 23143',
            'mobile_1' => '086 8263628',
            'mobile_2' => '056 23999',
            'address_1' => '7 BRIDGEVIEW GDNS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 160,
            'name' => 'RICHARD HUDSON',
            'email' => null,
            'phone' => '056 73000',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MOUNT JULIET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 161,
            'name' => 'MASSIMO PEROZZI',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 0771774',
            'mobile_2' => '',
            'address_1' => '12 Holybank Drive',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 162,
            'name' => 'Declan Finlay',
            'email' => null,
            'phone' => '056 7723994',
            'mobile_1' => '085 7373395',
            'mobile_2' => '',
            'address_1' => '10 the Orchard Upper',
            'address_2' => 'Golflinks Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 163,
            'name' => 'SANDRA WALSH',
            'email' => null,
            'phone' => '056 7763161',
            'mobile_1' => '086 2521229',
            'mobile_2' => '',
            'address_1' => 'SHELLUMSRATH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 164,
            'name' => 'SEAMUS CORBALLIS',
            'email' => null,
            'phone' => '056 7727211',
            'mobile_1' => '353863446086',
            'mobile_2' => '',
            'address_1' => 'CASTLEFIELD',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 165,
            'name' => 'Jim Harding',
            'email' => null,
            'phone' => '059 9775304',
            'mobile_1' => '086 2500404 Jim',
            'mobile_2' => '056 7726177',
            'address_1' => 'CASTLEKELLY',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 166,
            'name' => 'TOM MULLINS',
            'email' => null,
            'phone' => '0503 75557',
            'mobile_1' => '087 2555531',
            'mobile_2' => '',
            'address_1' => 'DONINGA',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 167,
            'name' => 'Sean ML KENNEDY',
            'email' => null,
            'phone' => '056 58769',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '10 MILL ROAD',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 168,
            'name' => 'JAMES HOLOHAN',
            'email' => null,
            'phone' => '056 7721170',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BODALMORE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 169,
            'name' => 'Richard NOLAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 7221402',
            'mobile_2' => '',
            'address_1' => '74 Talbots Gate',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 170,
            'name' => 'MICHAEL MURPHY',
            'email' => null,
            'phone' => '056 54376',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JERPOINT ABBEY',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 171,
            'name' => 'PAUL MC CONVILLE',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JERPOINT',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 172,
            'name' => 'SEAN DORAN',
            'email' => null,
            'phone' => '056 8833528',
            'mobile_1' => '086.2527053',
            'mobile_2' => '',
            'address_1' => '12 GREENVIEW',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 173,
            'name' => 'KENNY DALTON',
            'email' => ' admin@daltontv.ie',
            'phone' => '059 9771901',
            'mobile_1' => '087 2750868',
            'mobile_2' => '',
            'address_1' => '36 LODGE COURT',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 174,
            'name' => 'KEVIN GRACE',
            'email' => null,
            'phone' => '056 27547',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILBLINE',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 175,
            'name' => 'E O CONNOR',
            'email' => null,
            'phone' => '056 42138',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLONEEN',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 176,
            'name' => 'MARGARET KIRWAN',
            'email' => null,
            'phone' => '056 7758445',
            'mobile_1' => '086 8188340',
            'mobile_2' => '056 7724140',
            'address_1' => 'BALLYDUFF',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 177,
            'name' => 'MICHAEL O KEEFFE',
            'email' => null,
            'phone' => '056 30995',
            'mobile_1' => '087 2794591',
            'mobile_2' => '',
            'address_1' => 'CASTLE STREET',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 178,
            'name' => 'RICHARD ROCHE',
            'email' => null,
            'phone' => '056 42331',
            'mobile_1' => '087 2908717',
            'mobile_2' => '',
            'address_1' => 'NEW RD',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 179,
            'name' => 'MARGARET SCOTT',
            'email' => null,
            'phone' => '052 53441',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BAWNAVRONA',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO.TIPPERARRY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 180,
            'name' => ' CONNOLLY',
            'email' => null,
            'phone' => '056 61425',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COLLEGE GARDENS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 181,
            'name' => 'KEVIN EGAN',
            'email' => null,
            'phone' => '056 62861',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DRAKELANDS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 182,
            'name' => 'PATRICK CROKE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6115443',
            'mobile_2' => '',
            'address_1' => 'FLAT 4',
            'address_2' => '81 JOHN ST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 183,
            'name' => ' WATSON',
            'email' => null,
            'phone' => '056 67027',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THREECASTLES',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 184,
            'name' => 'PAT NOLAN',
            'email' => null,
            'phone' => '056 67695',
            'mobile_1' => '087 6342356',
            'mobile_2' => '',
            'address_1' => 'DUNMORE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 185,
            'name' => 'JAMES BYRNE',
            'email' => null,
            'phone' => '056 27265',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE CORNER HOUSE',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 186,
            'name' => ' HARP BAR',
            'email' => null,
            'phone' => '056 62331',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 187,
            'name' => ' THOLSTEL BAR',
            'email' => null,
            'phone' => '056 21652',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 188,
            'name' => 'JOHN QUINN',
            'email' => null,
            'phone' => '059 9775233',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAHERS BAR',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 189,
            'name' => 'KEVIN BARRY',
            'email' => null,
            'phone' => '0503 24013',
            'mobile_1' => '086 2631163',
            'mobile_2' => '',
            'address_1' => 'BARRACK STREET',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 190,
            'name' => 'EF MURPHY',
            'email' => null,
            'phone' => '056 31738',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHNSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 191,
            'name' => ' THELOKES BAR',
            'email' => null,
            'phone' => '056 32182',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FRESHFORD',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 192,
            'name' => ' MAGGIES BAR',
            'email' => null,
            'phone' => '056 61017',
            'mobile_1' => '056 62273',
            'mobile_2' => '',
            'address_1' => '60 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 193,
            'name' => ' SPORTSMANS BAR',
            'email' => null,
            'phone' => '056 24351',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOGAN STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 194,
            'name' => 'KIERAN BOLLARD',
            'email' => null,
            'phone' => '056 7761319',
            'mobile_1' => '087 6807885',
            'mobile_2' => '056 7721353',
            'address_1' => 'KIERAN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 195,
            'name' => 'BRIAN CASE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PUBLICAN',
            'address_2' => 'MYSHALL',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 196,
            'name' => 'WALTER POWER',
            'email' => null,
            'phone' => '056 41173',
            'mobile_1' => '',
            'mobile_2' => '056 4440821',
            'address_1' => 'MAIN STREET',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 197,
            'name' => 'Kathleen DUNPHY',
            'email' => null,
            'phone' => '056 7752564',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '22 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 198,
            'name' => 'Anna Pollard',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 1306069',
            'mobile_2' => '',
            'address_1' => '15 Ashwood',
            'address_2' => 'Hebron Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 199,
            'name' => 'Lucy Byrne',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 7215670',
            'mobile_2' => '',
            'address_1' => '69 The Paddocks',
            'address_2' => 'Kells Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 200,
            'name' => 'MICHAEL COMERFORD',
            'email' => null,
            'phone' => '056 4443189',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'USKERTY,  COON',
            'address_2' => 'VIA CARLOW',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 201,
            'name' => 'AINE PHELAN',
            'email' => null,
            'phone' => '056 65914',
            'mobile_1' => '087 2342332',
            'mobile_2' => '',
            'address_1' => '2 RIVERSIDE DRIVE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 202,
            'name' => 'MARTIN CROTTY',
            'email' => null,
            'phone' => '056 61141',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ST CANICES PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 203,
            'name' => 'MOUNT JULIET',
            'email' => null,
            'phone' => '056 73000',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THOMASTOWN',
            'address_2' => 'CO.KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 204,
            'name' => 'JOHN RYAN',
            'email' => null,
            'phone' => '056 70133',
            'mobile_1' => '',
            'mobile_2' => '056 21725',
            'address_1' => 'ASHLEIGH CRT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 205,
            'name' => 'S RONAN',
            'email' => null,
            'phone' => '056 25176',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'AHENURE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 206,
            'name' => 'LOUISE GRAHAM',
            'email' => null,
            'phone' => '056 27812',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE LODGE, HOLDENS',
            'address_2' => 'DUNBELL',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 207,
            'name' => 'JIM HAYES',
            'email' => null,
            'phone' => '056 7771565',
            'mobile_1' => '353879875498',
            'mobile_2' => '056 71565',
            'address_1' => '107 Patrick St',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 208,
            'name' => 'BERNIE DUGGAN',
            'email' => null,
            'phone' => '056 7729044',
            'mobile_1' => '086 6036000',
            'mobile_2' => '',
            'address_1' => 'RAHENNDUFF',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 209,
            'name' => 'DENIS MURPHY',
            'email' => null,
            'phone' => '056 7726371',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLATOGHER',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 210,
            'name' => 'John Fitzgerald',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '13 Castlehill',
            'address_2' => 'Bennettsbridge Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 211,
            'name' => 'LORCAN BARRON',
            'email' => null,
            'phone' => '056 63386',
            'mobile_1' => '086 8667271',
            'mobile_2' => '',
            'address_1' => 'ARCHERS CRESCENT',
            'address_2' => 'LOUGHBOY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 212,
            'name' => 'BRENDAN MAHER',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2300227',
            'mobile_2' => '',
            'address_1' => 'CHAPEL ST',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 213,
            'name' => 'MARGARET CALLANAN',
            'email' => null,
            'phone' => '056 64919',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HEBRON ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 214,
            'name' => 'SHANE CORR',
            'email' => null,
            'phone' => '056 21172',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '15 WOLFETONE ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 215,
            'name' => 'JOE DARCY',
            'email' => null,
            'phone' => '056 70670',
            'mobile_1' => '64051',
            'mobile_2' => '056 70219',
            'address_1' => 'NO 3 ROSE INN ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 216,
            'name' => 'MARGARET EGAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '16 LAWCUS FIELDS',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 217,
            'name' => 'CORMAC ENGLISHBY',
            'email' => null,
            'phone' => '051 648310',
            'mobile_1' => '087 6211401',
            'mobile_2' => '',
            'address_1' => 'PLOUGHBOY',
            'address_2' => 'KILMOGANNY',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 218,
            'name' => 'JIM CORBET',
            'email' => null,
            'phone' => '052 38462',
            'mobile_1' => '086 2135321',
            'mobile_2' => '0504 22428',
            'address_1' => 'GALEROCK LTD',
            'address_2' => '19DESART CT NEW ST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 219,
            'name' => 'RICHARD GAMBLE',
            'email' => null,
            'phone' => '056 23965',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '32 DESART COURT',
            'address_2' => 'NEW STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 220,
            'name' => 'PATRICK HEDDERMAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '26 ROSEHILL COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 221,
            'name' => 'DOUGLAS HIGGINS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8100235',
            'mobile_2' => '',
            'address_1' => 'BENDEMEER',
            'address_2' => 'COLLEGE GARDENS',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 222,
            'name' => 'ALICE HOLDEN',
            'email' => null,
            'phone' => '056 7770459',
            'mobile_1' => '087 9895034',
            'mobile_2' => '056 7770020',
            'address_1' => 'LOW STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO.  KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 223,
            'name' => 'TONY JUDGE',
            'email' => null,
            'phone' => '056 73000',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MOUNT JULIET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 224,
            'name' => 'SALLY KAVANAGH',
            'email' => null,
            'phone' => '056 7726462',
            'mobile_1' => '087 2610959',
            'mobile_2' => '056 24888',
            'address_1' => 'FOREST LODGE',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 225,
            'name' => 'LIZZIE LAWLOR',
            'email' => null,
            'phone' => '0503 73248',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARNAHASKA',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 226,
            'name' => 'ROBERT LEW',
            'email' => null,
            'phone' => '056 23322',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'C/O PEARLS',
            'address_2' => 'IRISHTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 227,
            'name' => 'MIRIAM MAHER',
            'email' => null,
            'phone' => '052 53454',
            'mobile_1' => '087 6226481',
            'mobile_2' => '22719',
            'address_1' => 'C/O ANN NOLAN',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO.TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 228,
            'name' => 'MARY MAHER RIP',
            'email' => null,
            'phone' => '0503 75233',
            'mobile_1' => '0863300649',
            'mobile_2' => '',
            'address_1' => 'CHAPEL ST',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 229,
            'name' => 'LORRAINE O SULLIVAN',
            'email' => null,
            'phone' => '056 63527',
            'mobile_1' => '',
            'mobile_2' => '056 65333',
            'address_1' => '14 MAYFIELD',
            'address_2' => 'KELLS RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 230,
            'name' => 'URSULA O MALLEY',
            'email' => null,
            'phone' => '056 7756652',
            'mobile_1' => '087 2029297',
            'mobile_2' => '',
            'address_1' => 'DAMMA LOWER',
            'address_2' => 'BALLYCALLAN ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 231,
            'name' => 'KIERAN PHELAN',
            'email' => null,
            'phone' => '0567724169',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MOONEEN',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 232,
            'name' => 'ANNE Russell',
            'email' => null,
            'phone' => '056 70410',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '51 RICHVIEW',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 233,
            'name' => 'PADDY CLEERE',
            'email' => null,
            'phone' => '056 65799',
            'mobile_1' => '087 2933390',
            'mobile_2' => '',
            'address_1' => 'THE NORE BAR',
            'address_2' => 'GREENSBRIDGE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 234,
            'name' => 'ANNE MARIE WALSH',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 2418036',
            'mobile_2' => '056 85000',
            'address_1' => '28 VICAR STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 235,
            'name' => 'HELEN DEMPSEY',
            'email' => null,
            'phone' => '056 7758634',
            'mobile_1' => '087 9800292',
            'mobile_2' => '',
            'address_1' => 'THE BARN',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 236,
            'name' => 'THE WATERGATE',
            'email' => null,
            'phone' => '056 7761674',
            'mobile_1' => '087 6330923',
            'mobile_2' => '',
            'address_1' => 'PARLIAMENT ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'ATT: GER COADY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 237,
            'name' => ' SAMINA',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '36 ALTAMOUNT PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 238,
            'name' => ' CAHILL',
            'email' => null,
            'phone' => '056 51889',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LAUNARD HSE',
            'address_2' => 'KELLS ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 239,
            'name' => ' SHIMLA',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '056 23788',
            'address_1' => 'DEAN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 240,
            'name' => 'JOHN BARRY',
            'email' => null,
            'phone' => '056 7724126',
            'mobile_1' => '086 3842256',
            'mobile_2' => '056 54996',
            'address_1' => 'SUGARSTOWN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 241,
            'name' => 'JOHN Bradley',
            'email' => null,
            'phone' => '056 7729015',
            'mobile_1' => '',
            'mobile_2' => '056 7721014',
            'address_1' => 'CUFFESGRANGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 242,
            'name' => ' SPOLLEN',
            'email' => null,
            'phone' => '056 61516',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '21 RICHVIEW',
            'address_2' => 'CASTLECOMER RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 243,
            'name' => 'DON MURPHY',
            'email' => null,
            'phone' => '056 65488',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BROWNSTOWN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 244,
            'name' => 'MARTIN WARD',
            'email' => null,
            'phone' => '056 26471',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 245,
            'name' => 'DAVID GERTBERG',
            'email' => null,
            'phone' => '056 7723457',
            'mobile_1' => '086 2324205',
            'mobile_2' => '',
            'address_1' => 'WARRINGTON LANE',
            'address_2' => 'BENNETTSBRIDGE RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 246,
            'name' => 'TOM NOLAN',
            'email' => null,
            'phone' => '056 7722607',
            'mobile_1' => '086 8363894',
            'mobile_2' => '',
            'address_1' => 'OUTRATH',
            'address_2' => ' KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 247,
            'name' => 'R WHELAN',
            'email' => null,
            'phone' => '051 647187',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NINE MILE HOUSE',
            'address_2' => 'CARRICK ON SUIR',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 248,
            'name' => 'GERRY RAFTER',
            'email' => null,
            'phone' => '056 7722970',
            'mobile_1' => '353866076900',
            'mobile_2' => '',
            'address_1' => 'RAFTER DEMPSEYS',
            'address_2' => 'FRIARY ST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 249,
            'name' => 'o Anchor Bar',
            'email' => null,
            'phone' => '0503 24207',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Main Street',
            'address_2' => 'Graignamanagh',
            'city' => null,
            'state' => 'Co. Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 250,
            'name' => 'MICHAEL BRENNAN',
            'email' => null,
            'phone' => '0503 75442',
            'mobile_1' => '087 2307625',
            'mobile_2' => '',
            'address_1' => 'CLOMONEY',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 251,
            'name' => ' HENDERSONS BAR',
            'email' => null,
            'phone' => '056 62331',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE PARADE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 252,
            'name' => ' KYTELERS INN',
            'email' => null,
            'phone' => '056 21064',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KIERAN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 253,
            'name' => 'SEAMUS KEANEY',
            'email' => null,
            'phone' => '056 24774',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE LONGMAN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 254,
            'name' => 'Geraldine Phelan',
            'email' => null,
            'phone' => '056 7762837',
            'mobile_1' => '087 2114658',
            'mobile_2' => '',
            'address_1' => '64 riverview',
            'address_2' => 'Ardnore',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 255,
            'name' => 'LARRY WALSH',
            'email' => null,
            'phone' => '056 7726422',
            'mobile_1' => '353878169573',
            'mobile_2' => '',
            'address_1' => 'OUNCEL HOUSE',
            'address_2' => 'DUNGARVAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 256,
            'name' => ' PARIS TEXAS',
            'email' => null,
            'phone' => '056 61822',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 257,
            'name' => 'ROBERT DELANEY',
            'email' => null,
            'phone' => '056 63778',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'METROPOLE HOTEL',
            'address_2' => 'JAMES STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 258,
            'name' => 'Anthony Morrisson',
            'email' => null,
            'phone' => '',
            'mobile_1' => '353876299248',
            'mobile_2' => '',
            'address_1' => 'CHRISTYS BAR',
            'address_2' => 'PATRICK STREET',
            'city' => ' Kilkenny',
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 259,
            'name' => 'ANDREW RYAN',
            'email' => null,
            'phone' => '056 62281',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RYANS BAR',
            'address_2' => '3 FRIARY STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 260,
            'name' => 'SHEILA SHIRLEY',
            'email' => null,
            'phone' => '056 28302',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHIRLEYS BAR',
            'address_2' => 'KELLS',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 261,
            'name' => 'ANGELA O\'HARA',
            'email' => null,
            'phone' => '056 24613',
            'mobile_1' => '086 8141985',
            'mobile_2' => '',
            'address_1' => 'LOW STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 262,
            'name' => 'FRANK BOURKE',
            'email' => null,
            'phone' => '056 7729122',
            'mobile_1' => '086 2587972',
            'mobile_2' => '',
            'address_1' => 'SEVENHOUSES',
            'address_2' => 'KELLS ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 263,
            'name' => 'WILLIAM CARROLL',
            'email' => null,
            'phone' => '056 7768629',
            'mobile_1' => '',
            'mobile_2' => '056 7768082',
            'address_1' => 'CARROLLS BAR',
            'address_2' => 'KNOCKTOPHER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 264,
            'name' => 'JOHN MC GRATH',
            'email' => null,
            'phone' => '056 32109',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 265,
            'name' => ' BYRNES PUB',
            'email' => null,
            'phone' => '056 21783',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '39 JOHN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 266,
            'name' => 'JANE LENEHANS BAR',
            'email' => null,
            'phone' => '056 7721621',
            'mobile_1' => '087 9294290',
            'mobile_2' => '',
            'address_1' => 'BARRACK ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 267,
            'name' => 'SHEM LAWLOR',
            'email' => null,
            'phone' => '056 21543',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHEMS',
            'address_2' => 'JOHN STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 268,
            'name' => 'PADDY BRENNAN',
            'email' => null,
            'phone' => '056 7726327',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FLAGMOUNT',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 269,
            'name' => ' WORLDS END',
            'email' => null,
            'phone' => '056 22302',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 270,
            'name' => 'Barry BRIDGE BROOKE',
            'email' => null,
            'phone' => '056 7724152',
            'mobile_1' => '087 2986897',
            'mobile_2' => '',
            'address_1' => 'THOMASTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 271,
            'name' => 'PAT BREEN',
            'email' => null,
            'phone' => '056 31738',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 272,
            'name' => ' 03/08/04',
            'email' => null,
            'phone' => '056 21094',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BLACKMILL STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 273,
            'name' => ' BIDDY EARLYS',
            'email' => null,
            'phone' => '056 22689',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 274,
            'name' => ' ABBEY BAR',
            'email' => null,
            'phone' => '056 25538',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 275,
            'name' => ' THE TAVERN',
            'email' => null,
            'phone' => '056 24917',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE QUAY',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 276,
            'name' => ' THE VILLAGE INN',
            'email' => null,
            'phone' => '056 63506',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PATRICK STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 277,
            'name' => 'EDDIE KELL THE STEPPES BAR',
            'email' => null,
            'phone' => '056 7725962',
            'mobile_1' => '086 8623759',
            'mobile_2' => '',
            'address_1' => 'GREEN STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 278,
            'name' => 'JOHN O\'BRIEN',
            'email' => null,
            'phone' => '0503 24766',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 279,
            'name' => 'MICHAEL RYAN',
            'email' => null,
            'phone' => '0503 24117',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST UPR',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 280,
            'name' => 'Richie The Metro',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6452980',
            'mobile_2' => '',
            'address_1' => 'Richie',
            'address_2' => 'High St',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 281,
            'name' => 'WILLIAM RYAN',
            'email' => null,
            'phone' => '056 7769163',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILMANAGH',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 282,
            'name' => 'PAUL PRICE',
            'email' => null,
            'phone' => '056 68819',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CENTRAL BAR',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 283,
            'name' => 'PHILOMENA BRENNAN',
            'email' => null,
            'phone' => '056 7769244',
            'mobile_1' => '087 6709595',
            'mobile_2' => '',
            'address_1' => 'TULLAROAN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 284,
            'name' => 'JOE BRENNAN',
            'email' => null,
            'phone' => '056 21150',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BOTTLING STORE',
            'address_2' => 'WALKIN STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 285,
            'name' => 'DAVID CAMPION',
            'email' => null,
            'phone' => '056 21754',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BLACKMILL STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 286,
            'name' => 'JIM CONNOLLY',
            'email' => null,
            'phone' => '056 27335',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUNBELL',
            'address_2' => 'MADDOXTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 287,
            'name' => ' DELANEYS BAR',
            'email' => null,
            'phone' => '056 21287',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '30 UPR PATRICK ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 288,
            'name' => ' CARROLLS BAR',
            'email' => null,
            'phone' => '056 24273',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOGAN STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 289,
            'name' => ' THE COACH HSE',
            'email' => null,
            'phone' => '056 24278',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 290,
            'name' => ' KELLYS PUB',
            'email' => null,
            'phone' => '056 7725962',
            'mobile_1' => '086 8623759',
            'mobile_2' => '',
            'address_1' => 'GREEN STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 291,
            'name' => 'DENIS DOHERTY',
            'email' => null,
            'phone' => '056 21233',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '30 FRIARY STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 292,
            'name' => 'JAS HAYES',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'URLINGFORD',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 293,
            'name' => 'Nicholas Healy',
            'email' => null,
            'phone' => '086 7751934',
            'mobile_1' => '087 7553445',
            'mobile_2' => '',
            'address_1' => 'Briar Lodge',
            'address_2' => 'Maidenhill',
            'city' => null,
            'state' => 'Kells Rd',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 294,
            'name' => 'KEVIN SHEERIN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE RIDGE',
            'address_2' => 'OLD LEIGHLIN',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 295,
            'name' => 'JOSEPH BUTLER',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SPORTSMANS INN',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 296,
            'name' => 'Con Downey',
            'email' => null,
            'phone' => '056 7761407',
            'mobile_1' => '086 8227052eile',
            'mobile_2' => '',
            'address_1' => '13 Talbots inch',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 297,
            'name' => 'Tom Egan',
            'email' => null,
            'phone' => '056 7790727',
            'mobile_1' => '086 3612696',
            'mobile_2' => '',
            'address_1' => '24 The Sycamores',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 298,
            'name' => 'ROBT DOHERTY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUNAMAGGIN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 299,
            'name' => 'Brenda Whitely',
            'email' => null,
            'phone' => '056 7759938',
            'mobile_1' => 'mart',
            'mobile_2' => '',
            'address_1' => 'Feathallagh',
            'address_2' => 'Johnswell',
            'city' => null,
            'state' => 'CO Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 300,
            'name' => 'MARTIN CLEARY',
            'email' => null,
            'phone' => '056 7768697',
            'mobile_1' => '086 8807979',
            'mobile_2' => '',
            'address_1' => 'CLEARYS PUB',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 301,
            'name' => 'JOSEPHINE LUNCH',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRIDGE STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 302,
            'name' => ' LITTLE ARRIGLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYHALE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 303,
            'name' => ' LANGTONS HOTEL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '056 7765133',
            'address_1' => 'JOHN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 304,
            'name' => 'W MOLONEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STRAND BAR',
            'address_2' => 'COON',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 305,
            'name' => 'SEAN MURPHY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TULLAROAN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 306,
            'name' => ' THE BIG WHEEL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GREEN STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 307,
            'name' => 'MICHAEL BRANNIGANS',
            'email' => null,
            'phone' => '056 7765897',
            'mobile_1' => '087 2435818',
            'mobile_2' => '',
            'address_1' => 'GLENDINE INN',
            'address_2' => 'CASTLECOMER RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 308,
            'name' => 'Thomas Talbot',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9152898',
            'mobile_2' => '',
            'address_1' => '68 An Choill Rua',
            'address_2' => 'Kellymount',
            'city' => null,
            'state' => 'Paulstown',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 309,
            'name' => ' THE COSY INN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 310,
            'name' => 'MARTIN CAMPION',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THREECASTLES',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 311,
            'name' => 'DENIS DOYLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CENTRAL BAR',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 312,
            'name' => 'EDWARD MURPHY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOW STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 313,
            'name' => 'KEVIN KEOGH',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 314,
            'name' => 'THOS MULLALLY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILCREENE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 315,
            'name' => 'JOHN BEHAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE GROVE',
            'address_2' => 'TOLERTON',
            'city' => null,
            'state' => 'BALLICKMOYLER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 316,
            'name' => 'SEAMUS DREA',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COPPENAGH',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 317,
            'name' => 'JOHN DOWLING',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WETLANDS',
            'address_2' => 'CALLAN RD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 318,
            'name' => 'ANN CUNNINGHAM',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRIDGE STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 319,
            'name' => ' HOURIGANS PUB',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRIDGE STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 320,
            'name' => 'E TROY',
            'email' => null,
            'phone' => '056 29264',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SEVENHOUSES',
            'address_2' => 'KELLS RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 321,
            'name' => ' ORMOND HOSTEL',
            'email' => null,
            'phone' => '056 7752733',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHNS GREEN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 322,
            'name' => 'GABRIEL WHITE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6405156',
            'mobile_2' => '',
            'address_1' => '43 BISHOP BIRCH PL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 323,
            'name' => ' DOYLE',
            'email' => null,
            'phone' => '051 424780',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ST MULLINS',
            'address_2' => 'CO. CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 324,
            'name' => 'Sean Maher',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 7935149',
            'mobile_2' => '',
            'address_1' => '2 Lower Bridge St',
            'address_2' => 'Callan',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 325,
            'name' => ' JAMES STEPHENS',
            'email' => null,
            'phone' => '056 7765050',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LARCHFIELD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 326,
            'name' => 'GORDON BURDESS',
            'email' => null,
            'phone' => '056 7724024',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '1 THE INCH',
            'address_2' => 'MT.JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 327,
            'name' => ' HOMELINE',
            'email' => null,
            'phone' => '01 4568228',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 21 PARKMORE IND. EST',
            'address_2' => 'LONG MILE RD',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 328,
            'name' => ' ROMAK COMPUTERS LTD',
            'email' => null,
            'phone' => '0429327270',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COES ROAD',
            'address_2' => 'DUNDALK',
            'city' => null,
            'state' => 'IRELAND',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 329,
            'name' => ' AIM CASH & CARRY',
            'email' => null,
            'phone' => '014502350',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 20 ROBINHOOD IND EST',
            'address_2' => 'DUBLIN 22',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 330,
            'name' => ' ARMSTRONG ELECTRONICS LTD',
            'email' => null,
            'phone' => '01 4509480',
            'mobile_1' => '086 2515027',
            'mobile_2' => '',
            'address_1' => 'UNIT 3 BLUEBELL IND. EST',
            'address_2' => 'NAAS ROAD',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 331,
            'name' => ' BEKO IRELAND',
            'email' => null,
            'phone' => '018014020',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRACETOWN BUSINESS PARK',
            'address_2' => 'CLONEE',
            'city' => null,
            'state' => 'CO. MEATH',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 332,
            'name' => ' Dynamic CCTV',
            'email' => null,
            'phone' => '01642220166',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '9A BOWES RD',
            'address_2' => 'RIVERSIDE PARK',
            'city' => null,
            'state' => 'MIDDLESBOROUGH TS2 1LU',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 333,
            'name' => ' DONBERG ELECTRONICS',
            'email' => null,
            'phone' => '074 9548275',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RANAFAST',
            'address_2' => 'LETTERKENNY',
            'city' => null,
            'state' => 'CO DONEGAL',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 334,
            'name' => ' ELECTROPLUS CABLE & SATELLITE',
            'email' => null,
            'phone' => '01 4196240',
            'mobile_1' => '01 4196245fax',
            'mobile_2' => '01 8161166RET',
            'address_1' => 'UNIT 5 CITY LINK BUSINESS PK',
            'address_2' => 'OLD NAAS ROAD',
            'city' => null,
            'state' => 'DUBLIN  12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 335,
            'name' => ' EVER READY (IRL) LTD',
            'email' => null,
            'phone' => '014752327',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PO BOX 373A',
            'address_2' => 'PORTOBELLO HARBOUR',
            'city' => null,
            'state' => 'DUBLIN 8',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 336,
            'name' => ' INTEK LIMITED',
            'email' => null,
            'phone' => '01 4509375',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4078 KINGSWOOD RD',
            'address_2' => 'CITYWEST',
            'city' => null,
            'state' => 'BUSINESS CAMPUS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 337,
            'name' => 'NOVAR OBF DISTRIBUTORS LTD',
            'email' => null,
            'phone' => '014504644',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 55',
            'address_2' => 'PARK WEST',
            'city' => null,
            'state' => 'INDUSTRIAL EST',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 338,
            'name' => ' ORMONDE ELECTRICAL WSLE LTD',
            'email' => null,
            'phone' => '056 7762498',
            'mobile_1' => '087 9492378john',
            'mobile_2' => '056 7763134',
            'address_1' => 'NEW STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 339,
            'name' => ' PEATS WHOLESALE LTD',
            'email' => null,
            'phone' => '01 6264662',
            'mobile_1' => '086 3837795tony',
            'mobile_2' => '',
            'address_1' => 'UNIT 14/15 WESTLINK IND EST',
            'address_2' => 'KYLEMORE RD',
            'city' => null,
            'state' => 'DUBLIN 10',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 340,
            'name' => ' SHOMAR LTD',
            'email' => null,
            'phone' => '01 4509150',
            'mobile_1' => '087 8243005',
            'mobile_2' => 'fax 01 4509606',
            'address_1' => 'UNIT 9',
            'address_2' => 'WESTERN IND EST',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 341,
            'name' => ' UNIVERSAL PROVIDERS',
            'email' => null,
            'phone' => '056 7720220',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KELLS ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 342,
            'name' => ' WALLIS UNIVERSAL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT A109 RIVERSIDE BUS PARK',
            'address_2' => 'BENDON VALLEY RD',
            'city' => null,
            'state' => 'LONDON SW18 4UQ',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 343,
            'name' => ' CHARLIE SHIELS LTD',
            'email' => null,
            'phone' => '014545844',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 3-4 GOLDENBRIDGE IND EST',
            'address_2' => 'INCHICORE',
            'city' => null,
            'state' => 'DUBLIN 8',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 344,
            'name' => ' HW FASTENERS LTD',
            'email' => null,
            'phone' => '051 376187',
            'mobile_1' => 'jim hartery',
            'mobile_2' => '',
            'address_1' => 'UNIT 627',
            'address_2' => 'IDA IND EST',
            'city' => null,
            'state' => 'NORTHERN EXT',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 345,
            'name' => ' KILKENNY PEOPLE',
            'email' => null,
            'phone' => '056 7721015',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 346,
            'name' => ' RADIO KILKENNY',
            'email' => null,
            'phone' => 'NOS.IN SVC',
            'mobile_1' => '',
            'mobile_2' => '056 63688',
            'address_1' => '32 HEBRON RD',
            'address_2' => 'HEBRON IND ESTATE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 347,
            'name' => ' TOP OIL',
            'email' => null,
            'phone' => '056 7770255',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HEBRON ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 348,
            'name' => ' ACC BANK',
            'email' => null,
            'phone' => '056 7722641',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '7 PARLIAMENT ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 349,
            'name' => ' AIB BANK',
            'email' => null,
            'phone' => '01 6685500',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CREDIT CARD CENTRE',
            'address_2' => 'PO BOX 708,',
            'city' => null,
            'state' => 'DONNYBROOK, DUBLIN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 350,
            'name' => ' MBNA INTERNATIONAL BANK LTD',
            'email' => null,
            'phone' => '1800409511',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PO BOX 5538',
            'address_2' => 'DUBLIN 2',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 351,
            'name' => ' EVERYDAY FINANCE LTD',
            'email' => null,
            'phone' => '091 569200',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '36A MERCHANTS RD',
            'address_2' => 'GALWAY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 352,
            'name' => 'David Cooke',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 7315400',
            'mobile_2' => '056 7722566',
            'address_1' => 'Apt 6 Brothe Thomas Place',
            'address_2' => 'Church Lane',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 353,
            'name' => 'ANGELA O GRADY',
            'email' => null,
            'phone' => '056.22757',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BELMONT',
            'address_2' => 'FOULKSTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 354,
            'name' => 'OLLIE BERGIN',
            'email' => null,
            'phone' => '056 40979',
            'mobile_1' => '086.8758757',
            'mobile_2' => '056.41548',
            'address_1' => 'ARDRA',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 355,
            'name' => 'JOHN DELEHANTY',
            'email' => null,
            'phone' => '056 21095',
            'mobile_1' => '087 2306629',
            'mobile_2' => '056',
            'address_1' => 'KEATINGSTOWN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 356,
            'name' => 'NIGEL BRANDER',
            'email' => null,
            'phone' => '056 7729039',
            'mobile_1' => '086 8180951',
            'mobile_2' => '056 7751111',
            'address_1' => 'BALLYBUR',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 357,
            'name' => 'MARTIN MOYLAN',
            'email' => null,
            'phone' => '056.63689',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'OLD GOLFLINKS RD.',
            'address_2' => 'NEWPARK',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 358,
            'name' => ' ELECTROFAST',
            'email' => null,
            'phone' => '014500600',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'EXCEL WORKS',
            'address_2' => 'BLUEBELL IND EST',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 359,
            'name' => 'JOHN RYAN',
            'email' => null,
            'phone' => '056 70576',
            'mobile_1' => '086 2567677',
            'mobile_2' => '0868186461',
            'address_1' => 'TALBOTS INCH',
            'address_2' => 'FRESHFORD RD.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 360,
            'name' => 'JOHN BREEN',
            'email' => null,
            'phone' => '056 63924',
            'mobile_1' => '086 8141979',
            'mobile_2' => '',
            'address_1' => 'PUMPHOUSE',
            'address_2' => 'PARLIAMENT STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 361,
            'name' => 'ACT ACTIVE CARS',
            'email' => null,
            'phone' => '0503 34848',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HACKETSTOWN RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 362,
            'name' => ' LAHART GARAGES LTD',
            'email' => null,
            'phone' => '056 7722195',
            'mobile_1' => '',
            'mobile_2' => 'fax 0567761783',
            'address_1' => 'WATERFORD RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 363,
            'name' => ' CAULFIELDS SUPE VALU',
            'email' => null,
            'phone' => '056 65404',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOUGHBOY S C',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 364,
            'name' => ' CLELANDS SUPERMAKET',
            'email' => null,
            'phone' => '0503 42766',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KENNEDY ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 365,
            'name' => 'ANDREW BYRNE',
            'email' => null,
            'phone' => '0503 51132',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRIDGE ST',
            'address_2' => 'TULLOW',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 366,
            'name' => ' BYRNES SUPERMARKET',
            'email' => null,
            'phone' => '056 32126',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 367,
            'name' => ' CENTRA FOODMARKET',
            'email' => null,
            'phone' => '05 31636',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 368,
            'name' => 'Mary Keating',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3347255',
            'mobile_2' => '',
            'address_1' => 'Bouleakeale',
            'address_2' => 'Kilmanagh',
            'city' => null,
            'state' => 'Co  Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 369,
            'name' => ' DOYLES FOODMARKET',
            'email' => null,
            'phone' => '0503 24229',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 370,
            'name' => 'Maeve Duneske Leisure Centre',
            'email' => null,
            'phone' => '052 7445517',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Cahir',
            'address_2' => 'Co Tipperary',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 371,
            'name' => 'MICHAEL HOSEY',
            'email' => null,
            'phone' => '056 31562',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '8 STAPLESTOWN RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 372,
            'name' => 'Edward KENNEDY',
            'email' => null,
            'phone' => '059 9724160',
            'mobile_1' => '086 8059496',
            'mobile_2' => '',
            'address_1' => 'Newtown',
            'address_2' => 'Borris',
            'city' => null,
            'state' => 'Co Carlow',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 373,
            'name' => 'PATK LAWLOR',
            'email' => null,
            'phone' => '0503 21173',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKET SQ',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 374,
            'name' => ' L & N SUPERVALU',
            'email' => null,
            'phone' => '0503 31263',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CARLOW TOWN',
            'address_2' => '',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 375,
            'name' => ' MANNINGS FOODMARKET',
            'email' => null,
            'phone' => '056 21421',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ST FIACRES PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 376,
            'name' => ' NEWPARK STORES',
            'email' => null,
            'phone' => '056 21703',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWPARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 377,
            'name' => 'MJ Nolan',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2241967',
            'mobile_2' => '',
            'address_1' => 'Shannon Rd House',
            'address_2' => 'Strawhall',
            'city' => null,
            'state' => 'Carlow',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 378,
            'name' => ' SUPER VALU',
            'email' => null,
            'phone' => '056 25603',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CALLAN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 379,
            'name' => ' SUPER VALU',
            'email' => null,
            'phone' => '056 41213',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLECOMER',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 380,
            'name' => ' SUPER VALU',
            'email' => null,
            'phone' => '0503 24452',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GRAIGNAMANAGH',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 381,
            'name' => ' CUNNIFFE',
            'email' => null,
            'phone' => '056 65026',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SUPER VALU',
            'address_2' => 'JOHNS GREEN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 382,
            'name' => ' KAVANAGH',
            'email' => null,
            'phone' => '056 24175',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SUPER VALU',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 383,
            'name' => 'William Walsh',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 7433399',
            'mobile_2' => '',
            'address_1' => '14 St Josephs Rd',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 384,
            'name' => 'Daniel Hayes',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3360033',
            'mobile_2' => '',
            'address_1' => 'Glenview',
            'address_2' => 'Ballyrichard',
            'city' => null,
            'state' => 'Carrick-on-Suir',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 385,
            'name' => 'Michael Holohan',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9445953',
            'mobile_2' => '086 0405479',
            'address_1' => '28 Castle Heights',
            'address_2' => 'Carrickbeg',
            'city' => null,
            'state' => 'Carrick-on-Suir',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 386,
            'name' => 'Ger Gorey',
            'email' => null,
            'phone' => '056 7729103',
            'mobile_1' => '086 4021429',
            'mobile_2' => '',
            'address_1' => 'Coalsfarm',
            'address_2' => 'Cuffsgrange',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 387,
            'name' => 'Kevin Oliver',
            'email' => null,
            'phone' => '051 643673',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Magnolia',
            'address_2' => 'Kildalton',
            'city' => null,
            'state' => 'Piltown',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 388,
            'name' => 'THOMAS SHARKEY',
            'email' => null,
            'phone' => '056 31153',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHNSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 389,
            'name' => 'WILLIAM WHELAN',
            'email' => null,
            'phone' => '0503 56108',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KING X',
            'address_2' => 'TULLOW',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 390,
            'name' => 'Dympna Nolan',
            'email' => null,
            'phone' => '056 7722577',
            'mobile_1' => '087 6163786',
            'mobile_2' => '',
            'address_1' => 'Ballyragget',
            'address_2' => 'Co Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 391,
            'name' => ' DARRERS STORES',
            'email' => null,
            'phone' => '0503 31387',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '142 TULLOW STREET',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 392,
            'name' => 'Mary Lynch',
            'email' => null,
            'phone' => '056 7786915',
            'mobile_1' => '086 0723010',
            'mobile_2' => '',
            'address_1' => '59 Hebron Park',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 393,
            'name' => ' ALLEN CARLOW LTD',
            'email' => null,
            'phone' => '0503 31160',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '19 CASTLE ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 394,
            'name' => 'Elena Atitienei',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 7383510',
            'mobile_2' => '',
            'address_1' => '1 Cahir Park Cottages',
            'address_2' => 'Ardfinnan',
            'city' => null,
            'state' => 'Cahir',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 395,
            'name' => 'Nicky Glyn Ambulance HQ',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8124589Larr',
            'mobile_2' => '056 7785568',
            'address_1' => 'Kilcreene Hospital',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 396,
            'name' => ' GREAT EXPECTATIONS',
            'email' => null,
            'phone' => '0503`22422',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILCARRIG',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 397,
            'name' => ' KILKENNY DESIGN CENTRE',
            'email' => null,
            'phone' => '056 22118',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLE YARD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 398,
            'name' => 'MANAGER KNICK KNACK SHOP',
            'email' => null,
            'phone' => '056 62568',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '32 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 399,
            'name' => 'MANAGER LIMITED GIFTWARE',
            'email' => null,
            'phone' => '056 51212',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 18',
            'address_2' => 'MARKET CROSS SC',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 400,
            'name' => 'MANAGER NICHOLAS MOSSE POTTERY LTD',
            'email' => null,
            'phone' => '056 27105',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BENNETTSBRIDGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 401,
            'name' => 'MANAGER O\'BRAONAIN\'S GIFTS',
            'email' => null,
            'phone' => '056 41134',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '85 KILKENNY ST',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 402,
            'name' => 'MANAGER SOS Kilkenny',
            'email' => null,
            'phone' => '056 7764000',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CALLAN RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 403,
            'name' => 'MARIE SWIFTS',
            'email' => null,
            'phone' => '056 65365',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '26 KIERAN ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 404,
            'name' => 'MANAGER TREASURE CHEST',
            'email' => null,
            'phone' => '0503 42658',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'POLLERTON RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 405,
            'name' => 'MANAGER WRAPPED UP GIFT SHOP',
            'email' => null,
            'phone' => '056 24216',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKET ST',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 406,
            'name' => 'MANAGER YESTERDAYS NOSTALGIC GIFTS',
            'email' => null,
            'phone' => '056 65557',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '30 LR PATRICK ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 407,
            'name' => 'OWNER ASKEA FILLING STATION',
            'email' => null,
            'phone' => '0503 30022',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'POLLERTON RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 408,
            'name' => 'OWNER BARROW SERVICE STATION',
            'email' => null,
            'phone' => '0503 41567',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILKENNY ROAD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 409,
            'name' => 'OWNER BLACKQUARRY SERVICE STATION',
            'email' => null,
            'phone' => '056 61864',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BENNETTSBRIDGE RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 410,
            'name' => 'Derek Sidor',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 7659604',
            'mobile_2' => '',
            'address_1' => '67 Poocock Lower',
            'address_2' => 'Johnswell Rd',
            'city' => null,
            'state' => 'Kikenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 411,
            'name' => 'OWNER DEERPARK SERVICE STATION',
            'email' => null,
            'phone' => '0503 31414',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUBLIN RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 412,
            'name' => 'JOHN DE LOUGHREY',
            'email' => null,
            'phone' => '056 62805',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TALBOTS INCH SERVICE STATION',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 413,
            'name' => 'OWNER DOLMEN SERVICE STATION',
            'email' => null,
            'phone' => '0503 40446',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BENNEKERRY',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 414,
            'name' => 'Sarah DOYLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8643516',
            'mobile_2' => '',
            'address_1' => '2 Market Gate',
            'address_2' => 'James\' St',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 415,
            'name' => 'JOE GLEESON',
            'email' => null,
            'phone' => '056 35288',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WOODSGIFT SERVICE STATION',
            'address_2' => '(via Thurles)',
            'city' => null,
            'state' => 'Co. Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 416,
            'name' => 'Robert Gibney',
            'email' => null,
            'phone' => '056 7786274',
            'mobile_1' => '086 8165622',
            'mobile_2' => '',
            'address_1' => '9 The Crescent',
            'address_2' => 'The Weir View',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 417,
            'name' => 'Kevin Healy',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8389490',
            'mobile_2' => '',
            'address_1' => '2 Upper Garrengreen',
            'address_2' => 'Johnswell Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 418,
            'name' => 'OWNER HEBRON FILLING STATION',
            'email' => null,
            'phone' => '056 71791',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HEBRON ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 419,
            'name' => 'OWNER STATOIL FILLING STATION',
            'email' => null,
            'phone' => '056 21385',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLECOMER ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 420,
            'name' => 'OWNER JOHNSTONS GARAGE',
            'email' => null,
            'phone' => '056 65622',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CALLAN ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 421,
            'name' => 'RAY NOLAN',
            'email' => null,
            'phone' => '056 64991',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STATOIL SERVICE STATION',
            'address_2' => 'DUBLIN RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 422,
            'name' => 'OWNER MILL MOTORS',
            'email' => null,
            'phone' => '0503 43837',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLICKMOYLER RD',
            'address_2' => 'GRAIGUECULLEN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 423,
            'name' => 'WM O\'MAHONY',
            'email' => null,
            'phone' => '056 27555',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SERVICE STATION',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 424,
            'name' => 'OWNER OSSORY SERVICE STATION',
            'email' => null,
            'phone' => '0502 36440',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE COURSE',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 425,
            'name' => 'OWNER YOUNGS SERVICE STATION',
            'email' => null,
            'phone' => '056 63823',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WATERFORD RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 426,
            'name' => 'OWNER ALDA MOTOR FACTORS',
            'email' => null,
            'phone' => '0503 43014',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KENNEDY ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 427,
            'name' => ' Lisdowney Parish',
            'email' => null,
            'phone' => '056 8833138',
            'mobile_1' => '087 2353520',
            'mobile_2' => '',
            'address_1' => 'Fr Patrick O Farrell',
            'address_2' => 'Lisdowney',
            'city' => null,
            'state' => 'Ballyraggett',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 428,
            'name' => 'MANAGER JAMES WALSH LTD',
            'email' => null,
            'phone' => '056 22810',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '25 WALKIN ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 429,
            'name' => 'MANAGER THE MOTOR STORE',
            'email' => null,
            'phone' => '056 51987',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '12 PARLIAMENT ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 430,
            'name' => 'BILLY BOYD',
            'email' => null,
            'phone' => '0503 32417',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BOYD MOTORS',
            'address_2' => 'THE QUAY',
            'city' => null,
            'state' => 'CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 431,
            'name' => 'MANAGER J.L BRADSHAW & CO',
            'email' => null,
            'phone' => '0503 40966',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'INDUSTRIAL ESTATE',
            'address_2' => 'O\'BRIEN RD',
            'city' => null,
            'state' => 'CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 432,
            'name' => 'OWNER THE BEEHIVE',
            'email' => null,
            'phone' => '056 51775',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUBLIN RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 433,
            'name' => 'OWNER BLAKES NEWSAGENTS',
            'email' => null,
            'phone' => '0503 41416',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '13 DUBLIN RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 434,
            'name' => 'PETER BOWDEN',
            'email' => null,
            'phone' => '0503 31715',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '6 KENNEDY STREET',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 435,
            'name' => 'Marie Ruth',
            'email' => null,
            'phone' => '056 8833327',
            'mobile_1' => '353863216202',
            'mobile_2' => '',
            'address_1' => 'Patrick St',
            'address_2' => 'Ballyragget',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 436,
            'name' => 'Maibe Carey',
            'email' => null,
            'phone' => '056 7721510',
            'mobile_1' => '087 2234314',
            'mobile_2' => '',
            'address_1' => '21 Parliament St',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 437,
            'name' => 'Eileen Power',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2286540',
            'mobile_2' => '',
            'address_1' => 'Ballyreddin Lodge',
            'address_2' => 'Bennettsbridge',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 438,
            'name' => 'Cathal Power',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 7135383',
            'mobile_2' => '',
            'address_1' => '6 Bradog Way',
            'address_2' => 'Gowran',
            'city' => null,
            'state' => 'CO Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 439,
            'name' => 'PEADAR DOYLE',
            'email' => null,
            'phone' => '0503 30169',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CARLOW S C',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 440,
            'name' => 'GERRY FARRELL',
            'email' => null,
            'phone' => '0503 51184',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRIDGE ST',
            'address_2' => 'TULLOW',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 441,
            'name' => 'MANAGER HAPPY DAYS',
            'email' => null,
            'phone' => '056 52488',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 42 MARKET CROSS SC',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 442,
            'name' => 'GERARD KIELY',
            'email' => null,
            'phone' => '0503 22065',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CORNER HSE ROYAL OAK',
            'address_2' => 'MUINE BHEAG',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 443,
            'name' => 'Ladislav Bily',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 7362373',
            'mobile_2' => '',
            'address_1' => 'Soakwood COurt',
            'address_2' => 'Parc na Gown',
            'city' => null,
            'state' => 'Outhrath Rd',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 444,
            'name' => 'MANAGER LAMBERTS NEWSAGENTS',
            'email' => null,
            'phone' => '0503 31921',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '16 DUBLIN ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 445,
            'name' => 'MANAGER LEONARDS NEWSAGENTS',
            'email' => null,
            'phone' => '056 21842',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '76 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 446,
            'name' => 'MANAGER NEWSWORLD',
            'email' => null,
            'phone' => '056 27252',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '11 COFFEY HOUSE LANE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 447,
            'name' => 'MANAGER O\'CONNOR\'S',
            'email' => null,
            'phone' => '0503 43237',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE RITZ CENTRE',
            'address_2' => 'TULLOW ST',
            'city' => null,
            'state' => 'CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 448,
            'name' => 'LIAM O\'CONNOR',
            'email' => null,
            'phone' => '0503 51337',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'TULLOW',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 449,
            'name' => ' O\'KEEFFES NEWSAGENCY',
            'email' => null,
            'phone' => '0503 42903',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ATHY RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 450,
            'name' => 'JOHN O\'LEARY & SONS',
            'email' => null,
            'phone' => '0503 24105',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST LR',
            'address_2' => 'GRAIGUENAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 451,
            'name' => 'JOHN O\'ROURKE',
            'email' => null,
            'phone' => '056 41156',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '67 KILKENNY ST',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 452,
            'name' => 'OWNER O\'NEILLS NEWSAGENTS',
            'email' => null,
            'phone' => '0503 21476',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ROYAL OAK',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 453,
            'name' => 'OWNER O\'SULLIVANS NEWSAGENTS',
            'email' => null,
            'phone' => '056 25113',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '11 BRIDGE ST',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 454,
            'name' => 'Kevin Cosgrave',
            'email' => null,
            'phone' => '',
            'mobile_1' => '353872119580',
            'mobile_2' => '',
            'address_1' => 'Scorteen',
            'address_2' => 'Borris',
            'city' => null,
            'state' => 'Co Carlow',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 455,
            'name' => 'CATHERINE SMITH',
            'email' => null,
            'phone' => '0503 31283',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUBLIN RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 456,
            'name' => 'MANAGER WHISTLE STOP SHOP',
            'email' => null,
            'phone' => '0503 30276',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RAILWAY STATION',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 457,
            'name' => 'MANAGER XTRA NEWS',
            'email' => null,
            'phone' => '0503 41885',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KENNEDY AVE',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 458,
            'name' => 'DAWN HENNESSY',
            'email' => null,
            'phone' => '059 9775619',
            'mobile_1' => '087 2203055',
            'mobile_2' => '',
            'address_1' => 'BARRACORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 459,
            'name' => 'OWNER BARGAIN CITY CARPETS',
            'email' => null,
            'phone' => '0503 40858',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRACK ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 460,
            'name' => 'OWNER BARGAIN CITY CARPETS',
            'email' => null,
            'phone' => '056 63711',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'U6 LOUGHBOY IND EST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 461,
            'name' => 'OWNER CARLOW CARPET & FURNITURE CENTRE',
            'email' => null,
            'phone' => '0503 33777',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TULLOW RD SC',
            'address_2' => 'TULLOW RD',
            'city' => null,
            'state' => 'CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 462,
            'name' => 'OWNER CARPET OPTIONS',
            'email' => null,
            'phone' => '056 51744',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WALKIN ST',
            'address_2' => ' KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 463,
            'name' => 'OWNER CARPET VALUE',
            'email' => null,
            'phone' => '056 63711',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'U5 LOUGHBOY IND EST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 464,
            'name' => 'MANAGER DARCY INTERIORS',
            'email' => null,
            'phone' => '0503 31888',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '33-35 TULLOW ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 465,
            'name' => 'OWNER GREENWOOD FURNITURE',
            'email' => null,
            'phone' => '0503 51280',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'TULLOW',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 466,
            'name' => 'JOHN GUNN',
            'email' => null,
            'phone' => '056 21752',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GUNN CARPETS',
            'address_2' => 'JAMES ST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 467,
            'name' => 'JOHN IRWIN',
            'email' => null,
            'phone' => '059 9721396',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILREE ST',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 468,
            'name' => 'JOHN ROSSITER',
            'email' => null,
            'phone' => '0503 22617',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JR CARPETS, KILREE ST',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 469,
            'name' => ' LOWRY\'S FLOORING & FURNITURE',
            'email' => null,
            'phone' => '056 22221',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PARNELL ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 470,
            'name' => 'MANAGER TREACYS FURNITURE',
            'email' => null,
            'phone' => '056 27193',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STATION RD',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 471,
            'name' => 'SHAY FOLEY',
            'email' => null,
            'phone' => '059 9775340',
            'mobile_1' => '087 9834088',
            'mobile_2' => '056 26666',
            'address_1' => 'POLLOUGH',
            'address_2' => 'SKEOUGHVOSTEEN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 472,
            'name' => 'PAUL ROBERTS',
            'email' => null,
            'phone' => '056 22681',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LISADELL',
            'address_2' => 'WATERFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 473,
            'name' => 'MANAGER PAULS DEPT STORE',
            'email' => null,
            'phone' => '056 21289',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '12 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 474,
            'name' => 'GOODS LTD',
            'email' => null,
            'phone' => '056 7722143',
            'mobile_1' => '087  9892190 Greg Good',
            'mobile_2' => '',
            'address_1' => '88-90 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => ' Kilkenny',
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 475,
            'name' => 'MANAGER HADDENS LTD',
            'email' => null,
            'phone' => '0503 31650',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '15 TULLOW ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 476,
            'name' => 'MANAGER HEATONS',
            'email' => null,
            'phone' => '056 61440',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 2',
            'address_2' => 'MARKET CROSS SC',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 477,
            'name' => 'MANAGER SHAW & SONS LTD',
            'email' => null,
            'phone' => '0503 31509',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '11 TULLOW ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 478,
            'name' => 'MANAGER WINSTONS',
            'email' => null,
            'phone' => '056 21699',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PARLIAMENT ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 479,
            'name' => 'MICHAEL TIERNEY',
            'email' => null,
            'phone' => '056 7758566',
            'mobile_1' => '086 8434047',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => ' INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 480,
            'name' => 'GARY MC GOVERN',
            'email' => null,
            'phone' => '056 54263',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NO 8 & 12 SOUTH PADDOCKS',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 481,
            'name' => 'AISLING HURLEY',
            'email' => null,
            'phone' => '056 22711',
            'mobile_1' => '087 6959934',
            'mobile_2' => '',
            'address_1' => '2 FRIARS BRIDGE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 482,
            'name' => ' CAFE ROMA',
            'email' => null,
            'phone' => '056 21262',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 483,
            'name' => 'ANNASTATIA BOVE',
            'email' => null,
            'phone' => '056 7724362',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKET STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 484,
            'name' => 'MANAGER ABRAKEBABRA',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '8 ROSE INN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 485,
            'name' => 'THE DUISKE DINER',
            'email' => null,
            'phone' => '0503 24445',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 486,
            'name' => 'THE GOLDEN CROWN',
            'email' => null,
            'phone' => '056 24015',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOGAN STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 487,
            'name' => 'JOHN HEHIR',
            'email' => null,
            'phone' => '056 61141',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ST CANICES PLACE',
            'address_2' => 'IRISHTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 488,
            'name' => ' JADE FLOWER',
            'email' => null,
            'phone' => '0503 42027',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 1',
            'address_2' => 'BARRACK STREET',
            'city' => null,
            'state' => 'CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 489,
            'name' => ' KENTUCKY STAR',
            'email' => null,
            'phone' => '056 25855',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 490,
            'name' => 'MICHAEL LARKIN',
            'email' => null,
            'phone' => '056 62283',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LARKINS TAKEAWAY',
            'address_2' => '39 WATERFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 491,
            'name' => ' LOTUS HOUSE',
            'email' => null,
            'phone' => '056 51944',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '27 PARLIAMENT STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 492,
            'name' => 'THE MINI DINE TAKEAWAY',
            'email' => null,
            'phone' => '0503 31611',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CHARLOTTE ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 493,
            'name' => 'THE PIT STOP',
            'email' => null,
            'phone' => '0503 52320',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'TULLOW',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 494,
            'name' => ' PIZZA DANTE',
            'email' => null,
            'phone' => '0503 43946',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '23 DUBLIN ST',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 495,
            'name' => ' PIZZA NAPOLI',
            'email' => null,
            'phone' => '0503 22192',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'REGENT ST',
            'address_2' => 'MUINE BHEAG',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 496,
            'name' => 'EDWARD ROBERTS',
            'email' => null,
            'phone' => '0503 31064',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '5 LR STAPLESTOWN RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 497,
            'name' => ' ROMAMO',
            'email' => null,
            'phone' => '0503 22499',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '5 MAIN STREET',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 498,
            'name' => ' ROOSTERS',
            'email' => null,
            'phone' => '0503 22299',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKET SQUARE',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 499,
            'name' => ' UNCLE SAMS',
            'email' => null,
            'phone' => '056 62954',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '21 HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 500,
            'name' => 'OWNER THE ANCHOR',
            'email' => null,
            'phone' => '0503 21284',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILCARRIG ST',
            'address_2' => 'MUINE BHEAG',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 501,
            'name' => 'OWNER A & O FOODSTORE',
            'email' => null,
            'phone' => '056 25225',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GREEN ST',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 502,
            'name' => 'MAURICE BOUTROS',
            'email' => null,
            'phone' => '056 42113',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CRETTYARD STORES',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 503,
            'name' => ' BUTLERS SHOP',
            'email' => null,
            'phone' => '056 7721565',
            'mobile_1' => '087 9936802',
            'mobile_2' => '',
            'address_1' => 'LORD EDWARD ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 504,
            'name' => 'OWNER THE BY PASS STORES',
            'email' => null,
            'phone' => '0503 22039',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SESKIN RD',
            'address_2' => 'LEIGHLINBRIDGE',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 505,
            'name' => 'OWNER THE CO-OP SHOP',
            'email' => null,
            'phone' => '056 62560',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'O\'LOUGHLIN COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 506,
            'name' => 'JOHN CONNORS',
            'email' => null,
            'phone' => '0503 48647',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RATHOE',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 507,
            'name' => 'MICHAEL COOGAN',
            'email' => null,
            'phone' => '056 41203',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'YELLOW RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 508,
            'name' => 'Lisa Cullen',
            'email' => null,
            'phone' => '056 7726342',
            'mobile_1' => '087 9576240',
            'mobile_2' => '',
            'address_1' => 'Blanchfields Park',
            'address_2' => 'Clifden',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 509,
            'name' => ' CULLENS FOODSTORE',
            'email' => null,
            'phone' => '056 70887',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KENNYSWELL RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 510,
            'name' => 'Von DILLON',
            'email' => null,
            'phone' => '056 7728832',
            'mobile_1' => '087 1225967',
            'mobile_2' => '',
            'address_1' => 'Shortallstown',
            'address_2' => 'Dunnamaggin',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 511,
            'name' => 'Marie FENNELLY',
            'email' => null,
            'phone' => '052 9154177',
            'mobile_1' => '353868190825',
            'mobile_2' => '',
            'address_1' => 'Balloughboy',
            'address_2' => 'Ballingarry',
            'city' => null,
            'state' => 'Via thurles',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 512,
            'name' => ' FORDES FOODSTORE',
            'email' => null,
            'phone' => '056 51747',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '36 UPR PATRICK ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 513,
            'name' => 'EAMONN KELLY',
            'email' => null,
            'phone' => '056 32187',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 514,
            'name' => 'MAUREEN KELLY',
            'email' => null,
            'phone' => '056 41663',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '25 KILKENNY ST',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 515,
            'name' => 'OWNER MC DERBYS SHOP',
            'email' => null,
            'phone' => '0503 41790',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STAPLESTOWN RD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 516,
            'name' => 'Annette Ashe',
            'email' => null,
            'phone' => '056 7758534',
            'mobile_1' => '086 1692789',
            'mobile_2' => '',
            'address_1' => 'Main St',
            'address_2' => 'Inistioge',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 517,
            'name' => 'DAN Richardson',
            'email' => null,
            'phone' => '',
            'mobile_1' => '0861724623',
            'mobile_2' => '',
            'address_1' => '11 White Gate Lawn',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 518,
            'name' => 'DAN RYAN',
            'email' => null,
            'phone' => '056 54010',
            'mobile_1' => '087 6773332',
            'mobile_2' => '',
            'address_1' => 'NO 6 SOUTH PADDOCKS',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 519,
            'name' => 'JIM BAMBRICK',
            'email' => null,
            'phone' => '056 21164',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TROYSGATE HOUSE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 520,
            'name' => 'SEAMUS ROWAN',
            'email' => null,
            'phone' => '056 7725176',
            'mobile_1' => '',
            'mobile_2' => '056 21014',
            'address_1' => 'AHENURE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 521,
            'name' => 'MARGARET BRETT',
            'email' => null,
            'phone' => '056 7770241',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BAMFORD CROSS',
            'address_2' => 'KELLS ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 522,
            'name' => 'RICHARD FITZPATRICK',
            'email' => null,
            'phone' => '056 7771515',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE METRO',
            'address_2' => 'HIGH STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 523,
            'name' => 'ROY STRUDWICK',
            'email' => null,
            'phone' => '056 7758443',
            'mobile_1' => '087 7870670padd',
            'mobile_2' => '056 7758756',
            'address_1' => 'BALLYGALLON',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 524,
            'name' => 'EILEEN DOYLE',
            'email' => null,
            'phone' => '056 8833434',
            'mobile_1' => '0877674724',
            'mobile_2' => '',
            'address_1' => 'MOATE',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 525,
            'name' => 'ELLEN MC DONALD',
            'email' => null,
            'phone' => '056 51182',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '3 FR. ALBERT PL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 526,
            'name' => 'VIVIENNE HOYNE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GLENDINE ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 527,
            'name' => 'MIKE MURPHY',
            'email' => null,
            'phone' => '056 54376',
            'mobile_1' => '087 9951140',
            'mobile_2' => '',
            'address_1' => '44 NEWTOWN TCE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 528,
            'name' => 'SEAN KELLY',
            'email' => null,
            'phone' => '056 22433',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DAMA UPR',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 529,
            'name' => 'JIM LOWRY',
            'email' => null,
            'phone' => '056 7722497',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GREENSHILL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 530,
            'name' => 'MICHAEL MADDEN',
            'email' => null,
            'phone' => '056 7722866',
            'mobile_1' => '087 2565548',
            'mobile_2' => '056 7722669',
            'address_1' => 'BONNETTSTOWN',
            'address_2' => 'NEWTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 531,
            'name' => 'DECLAN TWOMEY',
            'email' => null,
            'phone' => '056  7723734',
            'mobile_1' => '086 8411269.',
            'mobile_2' => '',
            'address_1' => 'KILCREENE CROSS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 532,
            'name' => 'MS MAHMOOD',
            'email' => null,
            'phone' => '056 70878',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '94 THE SYCAMORES',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 533,
            'name' => 'PAUL HENNESSY',
            'email' => null,
            'phone' => '056 7726252',
            'mobile_1' => '087 2650493',
            'mobile_2' => '',
            'address_1' => 'GARRYDUFF',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 534,
            'name' => 'SYL HENNESSY',
            'email' => null,
            'phone' => '0503 75119',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRAGHCORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 535,
            'name' => 'MICHAEL SOMERS',
            'email' => null,
            'phone' => '0503 75157',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOWER GRANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 536,
            'name' => 'PETER MULLEN',
            'email' => null,
            'phone' => '056 27443',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUNBELL',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 537,
            'name' => 'EILEEN O RIORDAN',
            'email' => null,
            'phone' => '056 64914',
            'mobile_1' => '',
            'mobile_2' => '056 22488',
            'address_1' => 'GRANGERS RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 538,
            'name' => 'PATRICK MC DONALD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8497019',
            'mobile_2' => '',
            'address_1' => 'STONEYFORD',
            'address_2' => 'CO.KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 539,
            'name' => 'KEVIN KENNEDY',
            'email' => null,
            'phone' => '051 896955',
            'mobile_1' => '086 3355441',
            'mobile_2' => '',
            'address_1' => '25 MOONCOIN HEIGHTS',
            'address_2' => 'MOONCOIN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 540,
            'name' => 'JIM NUGENT',
            'email' => null,
            'phone' => '056 7729192',
            'mobile_1' => '087 4169192',
            'mobile_2' => '',
            'address_1' => 'GROVE',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 541,
            'name' => 'JIMMY KAVANAGH',
            'email' => null,
            'phone' => '056 7752000',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE DALES',
            'address_2' => 'BENNETTSBRIDGE RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 542,
            'name' => 'JOE BARRY',
            'email' => null,
            'phone' => '056 7756161',
            'mobile_1' => '086 1504093',
            'mobile_2' => '',
            'address_1' => '15 BUTTS GREEN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 543,
            'name' => 'LIAM LARKIN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LARBREN HSE',
            'address_2' => 'DRAKELANDS',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 544,
            'name' => 'JOE DOHERTY',
            'email' => null,
            'phone' => '056 62784',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '66 ASSUMPTION PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 545,
            'name' => 'LIAM DUGGAN',
            'email' => null,
            'phone' => '051 648025',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLINTESKIN',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 546,
            'name' => 'JAS BRENNAN',
            'email' => null,
            'phone' => '0502 36204',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ATTANAGH',
            'address_2' => 'CO. LAOIS',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 547,
            'name' => 'DAVID SHEPPARD',
            'email' => null,
            'phone' => '0502 36123',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '30 BLACKMILL ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 548,
            'name' => ' CONWAY',
            'email' => null,
            'phone' => '056 28485',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BAWNNAIGH',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 549,
            'name' => 'JOAN O DEA',
            'email' => null,
            'phone' => '056 7769379',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KNOCKEENBAWN',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 550,
            'name' => 'TAHIL MASOOD',
            'email' => null,
            'phone' => '056 52481',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '87 THE PADDOCKS',
            'address_2' => 'KELLS ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 551,
            'name' => 'BETTY DELANEY',
            'email' => null,
            'phone' => '0505 46712',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '45 QUIGLEY PARK',
            'address_2' => 'RATHDOWNEY',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 552,
            'name' => 'JAMES PHELAN',
            'email' => null,
            'phone' => '056 69346',
            'mobile_1' => '086 3322500',
            'mobile_2' => '',
            'address_1' => 'CORSTOWN',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 553,
            'name' => 'JOHN BARCOE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYELLEN',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 554,
            'name' => ' HAYES',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '3 BUTTS GREEN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 555,
            'name' => ' MOUNT JULIET HOTEL',
            'email' => null,
            'phone' => '056 7773092',
            'mobile_1' => '086 8530200rona',
            'mobile_2' => '',
            'address_1' => 'THOMASTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 556,
            'name' => ' MT JULIET PROPERTIES',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THOMASTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 557,
            'name' => 'MARTIN DONOHOE',
            'email' => null,
            'phone' => '059 9775550.',
            'mobile_1' => '087 2569496',
            'mobile_2' => 'H75550',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 558,
            'name' => 'RITA COMISKY',
            'email' => null,
            'phone' => '056 24436',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '53 CLOGHABRODY HEIGHTS',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 559,
            'name' => 'DEREK BRANDON',
            'email' => null,
            'phone' => '056 7724130',
            'mobile_1' => '087 2867467',
            'mobile_2' => '056 7758013-new',
            'address_1' => 'KILMURRAY HOUSE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 560,
            'name' => 'NEAL MURPHY',
            'email' => null,
            'phone' => '056 7759846',
            'mobile_1' => '086 8910770',
            'mobile_2' => '',
            'address_1' => 'KILMOGAR',
            'address_2' => 'CLARA',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 561,
            'name' => 'LIAM GANNON',
            'email' => null,
            'phone' => '056 62126',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'BONNETTSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 562,
            'name' => 'DICK DALTON',
            'email' => null,
            'phone' => '056 32348',
            'mobile_1' => '086 2532508',
            'mobile_2' => '',
            'address_1' => 'CLASHACROW',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 563,
            'name' => 'EUGENE DUNNE',
            'email' => null,
            'phone' => '056 64894',
            'mobile_1' => '',
            'mobile_2' => '056 63006',
            'address_1' => 'IRISHTOWN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 564,
            'name' => 'LILLIAN FREER',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '8 CASTLECOMER  RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 565,
            'name' => 'JOHNNY GUERY',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '29 FRIARY STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 566,
            'name' => 'JOHN DELAHUNTY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2266220',
            'mobile_2' => '056 64800',
            'address_1' => '14 TALBOTS INCH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 567,
            'name' => 'P JOYCE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2045054',
            'mobile_2' => '',
            'address_1' => '14 O\'LOUGHLIN COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 568,
            'name' => 'MARTIN RAFTER',
            'email' => null,
            'phone' => '056 33406',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYCONRA',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 569,
            'name' => 'DENIS BRENNAN',
            'email' => null,
            'phone' => '056 4441109',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAYHORA',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 570,
            'name' => 'LINDA CASS',
            'email' => null,
            'phone' => '056 23289',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '2 POCOCKE UPPER',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 571,
            'name' => 'NH ROCHOLL',
            'email' => null,
            'phone' => '056 51735',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGGINSTOWN',
            'address_2' => 'KILDERRY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 572,
            'name' => 'BRIAN MANLEY',
            'email' => null,
            'phone' => '056 63110',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '32 PEARSE STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 573,
            'name' => ' PIERCE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '01 2800710',
            'address_1' => '3 NORTH PADDOCKS',
            'address_2' => 'MOUNT JULIET,',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 574,
            'name' => 'Paul MC KIERNAN',
            'email' => null,
            'phone' => '056 7764652',
            'mobile_1' => '087 9043071',
            'mobile_2' => '',
            'address_1' => 'SANDFORDS COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 575,
            'name' => 'TERRY GRACE',
            'email' => null,
            'phone' => '056 64193',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '9 OLD GOLF LINKS RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 576,
            'name' => 'C MAHER',
            'email' => null,
            'phone' => '056 68048',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HUGGINSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 577,
            'name' => 'M CARWAY',
            'email' => null,
            'phone' => '056 52339',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BLEACH ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 578,
            'name' => 'P FITZGERALD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2259597',
            'mobile_2' => '',
            'address_1' => '7 QUAY COURT',
            'address_2' => 'NEW BUILDING LANE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 579,
            'name' => 'M O SULLIVAN',
            'email' => null,
            'phone' => '056 68048',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HUGGINSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 580,
            'name' => 'S ZOCCHI',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '3 DEAN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 581,
            'name' => 'M KENNEDY',
            'email' => null,
            'phone' => '056 70152',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '28 O LOUGHLIN COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 582,
            'name' => 'AL LOUBANI',
            'email' => null,
            'phone' => '056 23507',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '13 KILSHEELIN HEIGHTS',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 583,
            'name' => 'F CLEGG',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE MEWS COLLIERS LANE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 584,
            'name' => 'ANN DUNNE',
            'email' => null,
            'phone' => '056 7751525',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '35 POCOCKE UPPER',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 585,
            'name' => 'J TRANT',
            'email' => null,
            'phone' => '056 65629',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BROOKFIELD',
            'address_2' => 'DUNMORE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 586,
            'name' => 'E KETT',
            'email' => null,
            'phone' => '0',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TULLAHERIN',
            'address_2' => 'DUNGARVAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 587,
            'name' => 'J MULCAHY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NO 9 NORTH PADDOCKS',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 588,
            'name' => 'WILLIAM O NEILL',
            'email' => null,
            'phone' => '056 52538',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '83 UPPER PATRICK STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 589,
            'name' => 'S BARRY',
            'email' => null,
            'phone' => '056 64015',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '68 THE FAIRWAYS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 590,
            'name' => 'JOHN HOLOHAN',
            'email' => null,
            'phone' => '056 7723061',
            'mobile_1' => '',
            'mobile_2' => '086 7974691',
            'address_1' => 'BLEACH RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 591,
            'name' => 'DL CARLISLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '1 THE PADDOCKS',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 592,
            'name' => 'MICHAEL WALSH',
            'email' => null,
            'phone' => '056 32561',
            'mobile_1' => '086 3622783',
            'mobile_2' => '',
            'address_1' => '47 WOODVIEW',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 593,
            'name' => 'C CAHILL',
            'email' => null,
            'phone' => '056 28342',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHORTALSTOWN',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 594,
            'name' => 'B MOFFATT',
            'email' => null,
            'phone' => '056 51959',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 BIANCONI COURT',
            'address_2' => 'ABBEY STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 595,
            'name' => 'B DUFFY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2748548',
            'mobile_2' => '',
            'address_1' => '20 GARRENGREEN',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 596,
            'name' => 'E MOLYNEAUX',
            'email' => null,
            'phone' => '056 71897',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 POCOCKE VALLEY',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 597,
            'name' => ' WILLIAMS',
            'email' => null,
            'phone' => '056 24086',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '6 THE INCH',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 598,
            'name' => 'GER DAWSON',
            'email' => null,
            'phone' => '0567752780',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '29 NEW ORCHARD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 599,
            'name' => 'M MOORE',
            'email' => null,
            'phone' => '056 26175',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOWER GRANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 600,
            'name' => 'JIM DWYER',
            'email' => null,
            'phone' => '056 7724545',
            'mobile_1' => '087 6486793',
            'mobile_2' => '',
            'address_1' => '2 THE INCH',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 601,
            'name' => 'NEIL WATTS',
            'email' => null,
            'phone' => '056 7758756',
            'mobile_1' => '087 9103330',
            'mobile_2' => '',
            'address_1' => 'STUD GROOMS COTTAGE, BALLYGALLON STU',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 602,
            'name' => 'J BURKE',
            'email' => null,
            'phone' => '056 27259',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUNDARVARK',
            'address_2' => 'DANESFORT',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 603,
            'name' => 'PS SWEENEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '088 2116567',
            'mobile_2' => '',
            'address_1' => '52 POCOCKE VALLEY',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 604,
            'name' => 'LEO FARRELL',
            'email' => null,
            'phone' => '056 59827',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILKIERAN',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 605,
            'name' => 'DERMOT EARDLEY',
            'email' => null,
            'phone' => '056 7723203',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '7 CYPRESS GROVE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 606,
            'name' => ' HAYES',
            'email' => null,
            'phone' => '056 43243',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COON',
            'address_2' => 'CO. CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 607,
            'name' => ' GARRY',
            'email' => null,
            'phone' => '056 24102',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOWE STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 608,
            'name' => 'NOEL TREACY',
            'email' => null,
            'phone' => '056 7769569',
            'mobile_1' => '353868415068',
            'mobile_2' => '',
            'address_1' => 'RAHEEN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 609,
            'name' => 'EAMON COMISKEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 7687384',
            'mobile_2' => '',
            'address_1' => 'BRIDGE HOUSE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 610,
            'name' => 'MICHAEL NOLAN',
            'email' => null,
            'phone' => '056 7765218',
            'mobile_1' => '086 3790000',
            'mobile_2' => '',
            'address_1' => '139 WALKIN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 611,
            'name' => 'J QUIGLEY',
            'email' => null,
            'phone' => '052 56816',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'AVONDALE GRAIGUE',
            'address_2' => 'KILLENAULE',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 612,
            'name' => 'PAT CAHILL',
            'email' => null,
            'phone' => '056 4441221',
            'mobile_1' => '087 7721297',
            'mobile_2' => '',
            'address_1' => '26 CHURCH AVENUE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 613,
            'name' => 'J M RYAN',
            'email' => null,
            'phone' => '056 63729',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '19 HAZEL GROVE',
            'address_2' => 'ARCHERS STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 614,
            'name' => 'NORMAN KILROY',
            'email' => null,
            'phone' => '056 7754290',
            'mobile_1' => '087 2571846',
            'mobile_2' => '056 7773000',
            'address_1' => 'AMEN CORNER, 7 NORTH PADDOCKS',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 615,
            'name' => 'M KELLY',
            'email' => null,
            'phone' => '0504 23750',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYGRENANE',
            'address_2' => 'THURLES',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 616,
            'name' => 'DAVID KERWICK',
            'email' => null,
            'phone' => '052 54398',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEW PARK THE COMMONS',
            'address_2' => 'THURLES',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 617,
            'name' => ' RINUCCINI RESTAURANT',
            'email' => null,
            'phone' => '056 61575',
            'mobile_1' => '087 2423607Anto',
            'mobile_2' => '',
            'address_1' => 'NO 1 THE PARADE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 618,
            'name' => 'P V RYAN',
            'email' => null,
            'phone' => '056 31826',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FOULKCOURT',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 619,
            'name' => 'BRIDGET WALSH',
            'email' => null,
            'phone' => '056 32485',
            'mobile_1' => '086 3622783',
            'mobile_2' => '',
            'address_1' => 'BOHERGLAS',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 620,
            'name' => 'W SHEA',
            'email' => null,
            'phone' => '056 41334',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHEALLY',
            'address_2' => 'KILKENNY RD',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 621,
            'name' => 'M BRENNAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 4086846',
            'mobile_2' => '0863829826',
            'address_1' => 'LOON',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 622,
            'name' => 'MERVIN BAY',
            'email' => null,
            'phone' => '056 7724440',
            'mobile_1' => '086 8261440',
            'mobile_2' => '',
            'address_1' => 'ST JOSEPHS NURSING HOME',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 623,
            'name' => 'M N',
            'email' => null,
            'phone' => '056 65569',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '21 O\'LOUGHLIN ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 624,
            'name' => 'Sean FLYNN',
            'email' => null,
            'phone' => '056 7723118',
            'mobile_1' => '087 2490184',
            'mobile_2' => '056 7762680',
            'address_1' => 'KILLARNEY HOUSE',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 625,
            'name' => 'D WEBSTER',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOUGHINNEY',
            'address_2' => 'BARNA VIA THURLES',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 626,
            'name' => 'DENNIS DRENNAN',
            'email' => null,
            'phone' => '056 7729268',
            'mobile_1' => '086 0233377',
            'mobile_2' => '056 7729245',
            'address_1' => 'THE ORCHARD BALLYROBERTS',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 627,
            'name' => 'PAULINE HARTLEY',
            'email' => null,
            'phone' => '056 25903',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLALONG',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 628,
            'name' => 'JOHN MEANEY',
            'email' => null,
            'phone' => '056 7765067',
            'mobile_1' => '',
            'mobile_2' => '056 36825',
            'address_1' => 'KINGSLAND',
            'address_2' => 'VIA CELLARSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 629,
            'name' => 'M BUTLER',
            'email' => null,
            'phone' => '056 32422',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WOODVIEW',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 630,
            'name' => 'PADRAIG HUGHES',
            'email' => null,
            'phone' => '056 70044',
            'mobile_1' => '086 8076905',
            'mobile_2' => '056 51111',
            'address_1' => 'TALBOTS INCH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 631,
            'name' => 'E MURPHY',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PIGEON PARK',
            'address_2' => 'DANESFORT',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 632,
            'name' => 'JIMMY MC GARRY',
            'email' => null,
            'phone' => '056 7751286',
            'mobile_1' => '',
            'mobile_2' => '056 71555',
            'address_1' => '17 DE LA SALLE PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 633,
            'name' => 'DENIS FOLEY',
            'email' => null,
            'phone' => '056 7751779',
            'mobile_1' => '087 2674785',
            'mobile_2' => '',
            'address_1' => '3 BANIM TERRACE',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 634,
            'name' => 'B NOLAN',
            'email' => null,
            'phone' => '0503 26365',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '5 NEWHOUSES',
            'address_2' => 'PAULSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 635,
            'name' => 'John + Joa DRENNAN',
            'email' => null,
            'phone' => '056 7726310',
            'mobile_1' => '0863217060',
            'mobile_2' => '',
            'address_1' => 'CLASHWILLIAM',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 636,
            'name' => 'M SAID',
            'email' => null,
            'phone' => '056 62035',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '11 GREENFIELDS',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 637,
            'name' => 'Stephan Dunne',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8326854',
            'mobile_2' => '',
            'address_1' => '7 Prologue',
            'address_2' => 'Callan',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 638,
            'name' => 'S PARSLOW',
            'email' => null,
            'phone' => '056 71740',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '20 GREEN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 639,
            'name' => 'JIM MORAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2526871',
            'mobile_2' => '',
            'address_1' => 'ROMANS VALLEY',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 640,
            'name' => 'JOHN MOORE',
            'email' => null,
            'phone' => '056 68069',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHEEPSTOWN',
            'address_2' => 'DUNAMAGGIN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 641,
            'name' => 'Breda TYNAN',
            'email' => null,
            'phone' => '056 67611',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'POST OFFICE',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 642,
            'name' => 'JOHN RYAN',
            'email' => null,
            'phone' => '056 42334',
            'mobile_1' => '086 8686839',
            'mobile_2' => '',
            'address_1' => 'CLOGH',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 643,
            'name' => 'MARK TALLIS',
            'email' => null,
            'phone' => '056 8832302',
            'mobile_1' => '087 6451496',
            'mobile_2' => '056 51399',
            'address_1' => 'BALLEEN CROSS',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 644,
            'name' => 'P LAWLOR',
            'email' => null,
            'phone' => '056 70669',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '35 NEWPARK CLOSE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 645,
            'name' => 'DEREK BEEHAN',
            'email' => null,
            'phone' => '056 31806',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FOULKSCOURT',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 646,
            'name' => 'JOHN BRENNAN',
            'email' => null,
            'phone' => '056 7722315',
            'mobile_1' => '0861099348',
            'mobile_2' => '',
            'address_1' => 'Bregagh House',
            'address_2' => 'DEAN STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 647,
            'name' => 'PADDY TYRRELL',
            'email' => null,
            'phone' => '056 7767237',
            'mobile_1' => '086 8380660',
            'mobile_2' => '',
            'address_1' => 'BLEACH ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 648,
            'name' => 'MARTIN KIRWAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '0870520026',
            'mobile_2' => '',
            'address_1' => 'BALLYELLEN',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 649,
            'name' => 'A BRENNAN',
            'email' => null,
            'phone' => '056 7745521',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GARRENDENNY',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 650,
            'name' => 'M GALLAGHER',
            'email' => null,
            'phone' => '056 58758',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HOLLYTHORN COTTAGE',
            'address_2' => 'THE SQ. INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 651,
            'name' => 'SANDRA CULLEN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'INISTIOGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 652,
            'name' => 'PAT PURCELL',
            'email' => null,
            'phone' => '056 7725292',
            'mobile_1' => '086 2597614',
            'mobile_2' => '',
            'address_1' => 'WEST STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 653,
            'name' => 'ANTONIO CAVALIERE',
            'email' => null,
            'phone' => '056 7761575',
            'mobile_1' => '0872423607',
            'mobile_2' => '',
            'address_1' => '14 SPRINGMOUNT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 654,
            'name' => 'MICHAEL HENNESSY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2203055',
            'mobile_2' => '056 7726482',
            'address_1' => 'COOLGRANGE',
            'address_2' => 'CLARA',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 655,
            'name' => 'NOEL KENT',
            'email' => null,
            'phone' => '051 880399',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MULLINAVAT',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 656,
            'name' => 'MARGARET KIELY',
            'email' => null,
            'phone' => '056 21144',
            'mobile_1' => '',
            'mobile_2' => '056 21063',
            'address_1' => 'BENNETTSBRIDGE RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 657,
            'name' => 'ANITA GIBBONS',
            'email' => null,
            'phone' => '056 4442709',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 658,
            'name' => 'MICHAEL MURPHY',
            'email' => null,
            'phone' => '056 23539',
            'mobile_1' => '087 6553416',
            'mobile_2' => '056 21157',
            'address_1' => 'NEWMARKET',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 659,
            'name' => 'JOHN BARNAVILLE',
            'email' => null,
            'phone' => '056 8832749',
            'mobile_1' => '35383',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 660,
            'name' => 'Shane BUTLER',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086-1963157',
            'mobile_2' => '',
            'address_1' => 'Greystones street',
            'address_2' => 'Carrick-on-Suir',
            'city' => null,
            'state' => 'Co Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 661,
            'name' => 'Liam Mc Loughlin',
            'email' => null,
            'phone' => '059 9775123',
            'mobile_1' => '086 8217132',
            'mobile_2' => '',
            'address_1' => 'Main Street',
            'address_2' => 'Goresbridge',
            'city' => null,
            'state' => 'Co.Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 662,
            'name' => 'BRIGID WALL',
            'email' => null,
            'phone' => '056 33365',
            'mobile_1' => '',
            'mobile_2' => '056 41291',
            'address_1' => 'LISDOWNEY',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 663,
            'name' => 'PADRAIG GILL',
            'email' => null,
            'phone' => '0567726207',
            'mobile_1' => '087 2316513',
            'mobile_2' => '',
            'address_1' => 'HORSE PARK',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 664,
            'name' => 'ANNEMARIE O SHEA',
            'email' => null,
            'phone' => '056 42279',
            'mobile_1' => '',
            'mobile_2' => '056 63434',
            'address_1' => 'NEWTOWN',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 665,
            'name' => 'az ',
            'email' => null,
            'phone' => '056 56219',
            'mobile_1' => '086 3112270',
            'mobile_2' => '056 63786',
            'address_1' => '14 ROSEHILL COURT',
            'address_2' => 'CIRCULAR ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 666,
            'name' => 'MARK CARLIN',
            'email' => null,
            'phone' => '056 51930',
            'mobile_1' => '086 2058874',
            'mobile_2' => '',
            'address_1' => '13 POCOCKE LOWER',
            'address_2' => 'JOHNSWELL ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 667,
            'name' => 'EDDIE HANLON',
            'email' => null,
            'phone' => '056 7767751',
            'mobile_1' => '087 2290124mary',
            'mobile_2' => '',
            'address_1' => 'CLOPOOK',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 668,
            'name' => 'PATTY BURKE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '353863585403',
            'mobile_2' => '056 70966',
            'address_1' => '8 KENNYSWELL RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 669,
            'name' => 'NICKSY MURPHY',
            'email' => null,
            'phone' => '0503 75862',
            'mobile_1' => '',
            'mobile_2' => '0503 75144',
            'address_1' => 'DONINGA',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 670,
            'name' => ' HEHIR',
            'email' => null,
            'phone' => '056 21737',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '12 WILLIAM STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 671,
            'name' => '- BARRETT',
            'email' => null,
            'phone' => '0508 82957',
            'mobile_1' => '087 2304475',
            'mobile_2' => '0872777742',
            'address_1' => 'WOODFIELDS, BANNOUES,',
            'address_2' => 'BALTINGLASS',
            'city' => null,
            'state' => 'CO. WICKLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 672,
            'name' => 'JOHN O DONNELL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9686271',
            'mobile_2' => '',
            'address_1' => '5 Lissadell',
            'address_2' => 'Carrick-on-Suir',
            'city' => null,
            'state' => 'Co Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 673,
            'name' => 'DECLAN WHEARTY',
            'email' => null,
            'phone' => '056 70180',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '14 WHITEWOOD',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 674,
            'name' => 'TOM TEESDALE',
            'email' => null,
            'phone' => '056 7724865',
            'mobile_1' => '087 6839828',
            'mobile_2' => '',
            'address_1' => 'JERPOINT CHURCH',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 675,
            'name' => 'CLAIRE BLACKMORE',
            'email' => null,
            'phone' => '056 27511',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILLENNIUM COURT',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 676,
            'name' => 'ALAN BOYD',
            'email' => null,
            'phone' => '050343285',
            'mobile_1' => '086 8271256',
            'mobile_2' => '0502 63792',
            'address_1' => 'PLANET AUTO, UNIT 20 LAOIS SHOPPING',
            'address_2' => 'PORTLAOISE',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 677,
            'name' => 'MARGARET CULLETON',
            'email' => null,
            'phone' => '059 9773378',
            'mobile_1' => '353879354662',
            'mobile_2' => '',
            'address_1' => 'TINNECARRIG',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 678,
            'name' => 'TERRY CALLAGHAN',
            'email' => null,
            'phone' => '056 56902',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GLENDINE COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 679,
            'name' => 'MARY BARCOE',
            'email' => null,
            'phone' => '0503 75103',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOWER GRANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 680,
            'name' => 'BRIAN KIELTHY',
            'email' => null,
            'phone' => '053 35261',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYCOGLEY CREGG',
            'address_2' => 'BRIDGETOWN',
            'city' => null,
            'state' => 'CO. WEXFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 681,
            'name' => 'ROY NICHOLLS',
            'email' => null,
            'phone' => '056 7763052',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 ALTAMOUNT PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 682,
            'name' => 'J CARROLL',
            'email' => null,
            'phone' => '0',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'POLLAGH, SKEAUGHVOSTEEN',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 683,
            'name' => 'J CLEARY RIP',
            'email' => null,
            'phone' => '0503 75268',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN ST',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 684,
            'name' => 'J MAHER',
            'email' => null,
            'phone' => '056 65585',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ST. JUDES',
            'address_2' => 'CIRCULAR ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 685,
            'name' => 'dtv dtv',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '',
            'address_2' => '',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 686,
            'name' => 'A SOMERS',
            'email' => null,
            'phone' => '056 26105',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CROBALLY',
            'address_2' => 'DUNGARVAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 687,
            'name' => 'WILLIAM CUSHEN',
            'email' => null,
            'phone' => '059 9724661',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'ST MULLINS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 688,
            'name' => 'P MC GOVERN',
            'email' => null,
            'phone' => '0',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 689,
            'name' => ' ALL THAT GLISTENS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LADYWELL',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 690,
            'name' => ' BUTLERS SUPERMARKET',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COYNE STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 691,
            'name' => ' DYNASTY ACCESSORIES',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BLOCK 0, UNIT `1',
            'address_2' => 'MARINA COMMERCIAL',
            'city' => null,
            'state' => 'CORK',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 692,
            'name' => 'JOHN MC GONAGLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STAUNTONS INTOSPORT',
            'address_2' => 'TUAM RD IND EST',
            'city' => null,
            'state' => 'GALWAY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 693,
            'name' => 'NUALA GONZALEZ',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKETING MANAGER, HEATONS,',
            'address_2' => 'WHITESTOWN IND EST',
            'city' => null,
            'state' => 'DUBLIN 24',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 694,
            'name' => 'BARRY GRAY',
            'email' => null,
            'phone' => ' 056 7724518',
            'mobile_1' => '00447710141112',
            'mobile_2' => '',
            'address_1' => '11 THE PADDOCKS',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 695,
            'name' => 'KEITH BARTON',
            'email' => null,
            'phone' => '051 648347',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLONE',
            'address_2' => 'KILMOGANNY',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 696,
            'name' => ' HENNESSY SPORTS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PARLIAMENT ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 697,
            'name' => ' WIGODERS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JAMES ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 698,
            'name' => 'Elizabeth Vereker',
            'email' => null,
            'phone' => '056 7767381',
            'mobile_1' => '0851867929',
            'mobile_2' => '',
            'address_1' => 'Schoolmasters House',
            'address_2' => 'Threecastles',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 699,
            'name' => ' WALLIS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKET CROSS SC',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 700,
            'name' => ' CHESS MENSWEAR',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKET CROSS SC',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 701,
            'name' => 'JOHN X BALFE',
            'email' => null,
            'phone' => '056 59762',
            'mobile_1' => '0868281720',
            'mobile_2' => '',
            'address_1' => 'CAMELS REST KILDERRY',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 702,
            'name' => 'SEAN DELANEY',
            'email' => null,
            'phone' => '056 7728265',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KELLS',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 703,
            'name' => ' STONEWARE JACKSON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BATEMAN QUAY',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 704,
            'name' => 'en CONDREN',
            'email' => null,
            'phone' => '056 7752401',
            'mobile_1' => '086 8265376ann',
            'mobile_2' => '',
            'address_1' => 'TALBOTS INCH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 705,
            'name' => 'MARGARET CUDDIHY',
            'email' => null,
            'phone' => '056 29214',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYBUR',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 706,
            'name' => ' PAINT POT',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DEAN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 708,
            'name' => ' ROMA CAFE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 709,
            'name' => 'PADDY HUGHES',
            'email' => null,
            'phone' => '056 8831197',
            'mobile_1' => '0872835539',
            'mobile_2' => '',
            'address_1' => 'BALLYSPELLAN',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 710,
            'name' => 'SEAN TREACY',
            'email' => null,
            'phone' => '056 27130',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BENNETTSBRIDGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 711,
            'name' => 'PAT LOUGHLIN',
            'email' => null,
            'phone' => '056 7726115',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 712,
            'name' => 'PAUL FARRELL',
            'email' => null,
            'phone' => '056 26511',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GARRYDUFF',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 713,
            'name' => 'EDWARD COTTERELL',
            'email' => null,
            'phone' => '056 77 24875',
            'mobile_1' => '086 0623245',
            'mobile_2' => '',
            'address_1' => 'BROWNSBARN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 714,
            'name' => 'PATRICK POWER',
            'email' => null,
            'phone' => '0503 73365',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LISELICAN',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 715,
            'name' => 'FRANK DALY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '088 567690',
            'mobile_2' => '',
            'address_1' => 'JERPOINT WEST',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 716,
            'name' => 'LIAM BROPHY',
            'email' => null,
            'phone' => '056 68751',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHEEPSTOWN',
            'address_2' => 'DUNAMAGGAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 717,
            'name' => 'CATHERINE WAUGH',
            'email' => null,
            'phone' => '056 27216',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILBLINE',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 718,
            'name' => 'MARY CONROY',
            'email' => null,
            'phone' => '056 7726328',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BLANCHFIELDS PARK',
            'address_2' => 'CLIFDEN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 719,
            'name' => 'THOMAS LALOR',
            'email' => null,
            'phone' => '0502 36186',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CORK ROAD',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 720,
            'name' => 'EAMON GIBBONS',
            'email' => null,
            'phone' => '056 32287',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARNA VIA THURLES',
            'address_2' => 'CO. TIPPERARY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 721,
            'name' => 'DECLAN KILLEEN',
            'email' => null,
            'phone' => '056 32716',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLEEN',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 722,
            'name' => 'JOSEPH ENGLISH',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '15 CLUAIN MHUIRE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 723,
            'name' => 'JAMES HOUGH',
            'email' => null,
            'phone' => '051 86157',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '15 ROSELAWN',
            'address_2' => 'TRAMORE',
            'city' => null,
            'state' => 'CO. WATERFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 724,
            'name' => 'M BANCROFT',
            'email' => null,
            'phone' => '056 58449',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILLSTONE COTTAGE',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 725,
            'name' => 'PJ GARDINER',
            'email' => null,
            'phone' => '0503 75373',
            'mobile_1' => '087 2521071',
            'mobile_2' => '',
            'address_1' => '15 BARROWMOUNT DRIVE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 726,
            'name' => 'FRANK O HARA',
            'email' => null,
            'phone' => '056 67157',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SUTTONSRATH',
            'address_2' => 'JENKINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 727,
            'name' => 'G BLYTH',
            'email' => null,
            'phone' => '056 52419',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLEFIELD',
            'address_2' => 'SION ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 728,
            'name' => 'J RYAN',
            'email' => null,
            'phone' => '056 67010',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KNOCKROE',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 729,
            'name' => 'M O CONNELL',
            'email' => null,
            'phone' => '056 61399',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LITTLE INCH',
            'address_2' => 'SION ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 730,
            'name' => 'NOEL BOLGER',
            'email' => null,
            'phone' => '056 64517',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LEGGETTSRATH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 731,
            'name' => ' DOHENY',
            'email' => null,
            'phone' => '056 69405',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYKEEFFE',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 732,
            'name' => 'HELEN MALONE',
            'email' => null,
            'phone' => '0503',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KYLE BALLYMURPHY',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 733,
            'name' => 'JOHN BERGIN',
            'email' => null,
            'phone' => '056 27691',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '5 KILREE PARK',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 734,
            'name' => 'STEVE EDWARDS',
            'email' => null,
            'phone' => '051 895713',
            'mobile_1' => '',
            'mobile_2' => '051 895714',
            'address_1' => 'KNOCKTOPHER',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 735,
            'name' => 'N BURKE',
            'email' => null,
            'phone' => '056 68948',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'BALLYHALE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 736,
            'name' => 'THOMAS DOWLING',
            'email' => null,
            'phone' => '056 64626',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GROVINE',
            'address_2' => 'WATERFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 737,
            'name' => 'P KEALY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLEWARREN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 738,
            'name' => 'N NICHOLSON',
            'email' => null,
            'phone' => '051 43445',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GLEBE HOUSE',
            'address_2' => 'THE ROWER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 739,
            'name' => 'E O HANRAHAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FAIRFIELDS COLMKILLE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 740,
            'name' => 'R BRANNIGAN',
            'email' => null,
            'phone' => '056 7790271',
            'mobile_1' => '086 8243026',
            'mobile_2' => '',
            'address_1' => 'FURZE HOUSE',
            'address_2' => 'BENNETTSBRIDGE RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 741,
            'name' => 'P MULLINS',
            'email' => null,
            'phone' => '056 61833',
            'mobile_1' => '086 2598213',
            'mobile_2' => '',
            'address_1' => 'WARRINGTON',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 742,
            'name' => 'A MC LOUGHLIN',
            'email' => null,
            'phone' => '056 27228',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WOOLENGRANGE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 743,
            'name' => 'PATRICK PHELAN',
            'email' => null,
            'phone' => '056 26317',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLE ELLIS',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 744,
            'name' => 'v LONG',
            'email' => null,
            'phone' => '0503 75280',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYELLEN',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 745,
            'name' => 'MARK O BRIEN',
            'email' => null,
            'phone' => '056 7767973',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MOTHEL',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 746,
            'name' => 'TEDDY BRADLEY',
            'email' => null,
            'phone' => '056 4441650',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DRUMGOOLE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 747,
            'name' => 'ED BRENNAN',
            'email' => null,
            'phone' => '0503 26211',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '7 ST. ENDAS TERRACE',
            'address_2' => 'PAULSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 748,
            'name' => 'M MURPHY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '353874013736',
            'mobile_2' => '056 24294',
            'address_1' => '3 CHURCH VIEW',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 749,
            'name' => 'MICHAEL SINSTEDEN',
            'email' => null,
            'phone' => '056 27349',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BENNETTSBRIDGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 750,
            'name' => 'TED FARRELL',
            'email' => null,
            'phone' => '056 24303',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PLEBERSTOWN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 751,
            'name' => 'MICHAEL BARCOE',
            'email' => null,
            'phone' => '059 9726336',
            'mobile_1' => '353872719805',
            'mobile_2' => '',
            'address_1' => 'PAULSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 752,
            'name' => 'BILLY WALSH',
            'email' => null,
            'phone' => '056 61661',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DERDIMUS',
            'address_2' => 'CALLAN ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 753,
            'name' => 'MARGARET BURKE',
            'email' => null,
            'phone' => '056 35121',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WOODSGIFT',
            'address_2' => 'VIA THURLES',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 754,
            'name' => 'B DULLARD',
            'email' => null,
            'phone' => '056 61712',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '12 JOHNS QUAY',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 755,
            'name' => 'ELEANOR BYRNE',
            'email' => null,
            'phone' => '056 7726452',
            'mobile_1' => '087 8560336',
            'mobile_2' => '',
            'address_1' => 'SHRAUGH',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 756,
            'name' => 'LARRY WALSH',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 8169573',
            'mobile_2' => '5',
            'address_1' => 'DUNGARVAN',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 757,
            'name' => 'JOE O NEILL',
            'email' => null,
            'phone' => '056 7726104',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STANGS',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 758,
            'name' => 'M WHELAN',
            'email' => null,
            'phone' => '051 25044',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LACKEN',
            'address_2' => 'NEW ROSS',
            'city' => null,
            'state' => 'CO. WEXFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 759,
            'name' => 'TISH CONNOLLY',
            'email' => null,
            'phone' => '059 9775297',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '23 CLUAIN MHUIRE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 760,
            'name' => 'P H HOGAN',
            'email' => null,
            'phone' => '056 52756',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '48 HIGH STREET',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 761,
            'name' => 'MARY WALSH',
            'email' => null,
            'phone' => '056 33437',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '25 GREENVIEW',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 762,
            'name' => 'LIAM NOLAN',
            'email' => null,
            'phone' => '056 7727478',
            'mobile_1' => '087 2597619',
            'mobile_2' => '',
            'address_1' => 'Carn',
            'address_2' => 'Dunbell',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 763,
            'name' => 'DAVID BYRNE',
            'email' => null,
            'phone' => '051 647215',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYDUGGAN NINE MILE HOUSE',
            'address_2' => 'CARRICK ON SUIR',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 764,
            'name' => 'JOHN DUNPHY',
            'email' => null,
            'phone' => '051 23735',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILLEEN',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 765,
            'name' => 'MARGARET O BRIEN',
            'email' => null,
            'phone' => '0503 75173',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BOHERKYLE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 766,
            'name' => 'JOSEPH TYRRELL',
            'email' => null,
            'phone' => '056 67163',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYFOYLE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 767,
            'name' => 'JAMES EGAN',
            'email' => null,
            'phone' => '056 62768',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DRAKELANDS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 768,
            'name' => 'DAVID HOLMES',
            'email' => null,
            'phone' => '0503 75279',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 769,
            'name' => 'B SHEPPARD',
            'email' => null,
            'phone' => '0502 36431',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARN HILL',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 770,
            'name' => 'ALAN SNYPE',
            'email' => null,
            'phone' => '056 7761952',
            'mobile_1' => '086 2592493',
            'mobile_2' => '',
            'address_1' => '19 SHANDON PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 771,
            'name' => 'E KENNEDY',
            'email' => null,
            'phone' => '0',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGH STREET',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 772,
            'name' => 'JOHN DOWLING',
            'email' => null,
            'phone' => '0503 22173',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GREEN ROAD',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 773,
            'name' => 'TOM KAVANAGH',
            'email' => null,
            'phone' => '059 9775356',
            'mobile_1' => '087 9226885',
            'mobile_2' => '',
            'address_1' => 'CLOMONEY',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 774,
            'name' => 'A O LEARY',
            'email' => null,
            'phone' => '051 62530',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'YOLETOWN BALLYCULANE',
            'address_2' => 'NEW ROSS',
            'city' => null,
            'state' => 'CO. WEXFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 775,
            'name' => 'F CAHILL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '77 BANGOR RD',
            'address_2' => 'CRUMLIN',
            'city' => null,
            'state' => 'DUBLIN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 776,
            'name' => 'LOUIS TYRRELL',
            'email' => null,
            'phone' => '056 25251',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYLARKIN',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 777,
            'name' => 'p HEARNE',
            'email' => null,
            'phone' => '051 27459',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE RED HOUSE',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 778,
            'name' => 'SEAN BARRY',
            'email' => null,
            'phone' => '056 64735',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '61 LORD ED.ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 779,
            'name' => ' SHELL GARAGE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CORK RD',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 780,
            'name' => ' STATOIL GARAGE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'URLINGFORD',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 781,
            'name' => 'Rita Cooke',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 7535681kath',
            'mobile_2' => '',
            'address_1' => '34 Killonerry Close',
            'address_2' => 'Carrick-on-Suir',
            'city' => null,
            'state' => 'Co Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);



        Customer::create([
            'id' => 782,
            'name' => ' KAVANAGH DRAPERY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 783,
            'name' => ' BERGIN SUPERMARKET',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 784,
            'name' => ' KAVANAGHS GARAGE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'URLINGFORD',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 785,
            'name' => 'C & M MURPHY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'URLINGFORD',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 786,
            'name' => 'EDDIE MC DERMOTT',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 787,
            'name' => 'OSMOND BENNETT',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHNSTOWN',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 788,
            'name' => '- MORRISSEYS GROCERS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHNSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 789,
            'name' => ' DALYS ESSO GARAGE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHNSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 790,
            'name' => 'Jillian RYAN',
            'email' => null,
            'phone' => '056 7721860',
            'mobile_1' => '086 1968984',
            'mobile_2' => '',
            'address_1' => 'Wallslough',
            'address_2' => 'Co Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 791,
            'name' => ' LAWLORS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SUPERMARKET',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 792,
            'name' => 'Eileen HOLOHAN',
            'email' => null,
            'phone' => '056 7729906',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Grove',
            'address_2' => 'Cuffesgrange',
            'city' => null,
            'state' => 'CO Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 793,
            'name' => ' LONDIS SUPERMARKET',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLECOMER',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 794,
            'name' => 'STEVEN HOLOHAN',
            'email' => null,
            'phone' => '059 9775574',
            'mobile_1' => '086 2333906',
            'mobile_2' => '',
            'address_1' => 'LOWER GRANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 795,
            'name' => ' MORRISSEYS',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FRIARY STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 796,
            'name' => ' BREATHNACHS',
            'email' => null,
            'phone' => '056 7756737',
            'mobile_1' => '',
            'mobile_2' => '7756737',
            'address_1' => 'JOHN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 797,
            'name' => 'SHEILA TREACY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MARKET STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 798,
            'name' => 'EDDIE RYAN',
            'email' => null,
            'phone' => '056 24788',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LADYWELL',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 799,
            'name' => 'EILEEN LENNON',
            'email' => null,
            'phone' => '056 21948',
            'mobile_1' => '',
            'mobile_2' => '056 21014',
            'address_1' => 'DICKSBORO',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 800,
            'name' => 'M NEVIN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '2 GRANGE COURT',
            'address_2' => 'MULLINGAR',
            'city' => null,
            'state' => 'CO. WESTMEATH',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 801,
            'name' => 'J KENNY',
            'email' => null,
            'phone' => '0505 46663',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LEVALLEY',
            'address_2' => 'RATHDOWNEY',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 802,
            'name' => 'M CUMMINS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9800240',
            'mobile_2' => '056 70877',
            'address_1' => '30 SMITHLANDS COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 803,
            'name' => 'J GEOGHEGAN',
            'email' => null,
            'phone' => '056 41625',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILKENNY STREET',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 804,
            'name' => ', MC CARTHY',
            'email' => null,
            'phone' => '056 7726425',
            'mobile_1' => '087 2586948',
            'mobile_2' => '056 7751388',
            'address_1' => 'DUNGARVAN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 805,
            'name' => 'S KENNEDY',
            'email' => null,
            'phone' => '056 64554',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MICHAELS CHURCH',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 806,
            'name' => ' NOLAN RYAN PARTNERSHIP',
            'email' => null,
            'phone' => '62633',
            'mobile_1' => '086 2567677',
            'mobile_2' => '',
            'address_1' => 'DEAN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 807,
            'name' => 'DILIP JONDHALE',
            'email' => null,
            'phone' => '056 7771695',
            'mobile_1' => '086 8115474',
            'mobile_2' => '',
            'address_1' => '21 POCOCKE UPPER',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 808,
            'name' => 'THE URLINGFORD ARMS',
            'email' => null,
            'phone' => '056 31626',
            'mobile_1' => '',
            'mobile_2' => '056 31851',
            'address_1' => 'URLINGFORD',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 809,
            'name' => 'Maura MAHON',
            'email' => null,
            'phone' => '059 9131381',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Springfield',
            'address_2' => 'Bennekerry',
            'city' => null,
            'state' => 'Co Carlow',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 810,
            'name' => 'JIM DEVLIN',
            'email' => null,
            'phone' => '056 70444',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '18 LORD EDWARD STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 811,
            'name' => 'ANN MURPHY',
            'email' => null,
            'phone' => '056 7724645',
            'mobile_1' => '087 6784433',
            'mobile_2' => '',
            'address_1' => 'COLMCILLE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 812,
            'name' => 'UNA ROCHE',
            'email' => null,
            'phone' => '056 22403',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '5 ELM GREEN',
            'address_2' => 'LOUGHBOY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 813,
            'name' => ' BLACK ABBOTT',
            'email' => null,
            'phone' => '056 21947',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THOMAS STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 814,
            'name' => '8 CAREY',
            'email' => null,
            'phone' => '056 26423',
            'mobile_1' => '',
            'mobile_2' => '056 61277',
            'address_1' => 'DEMESNE',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 815,
            'name' => 'Pascal O NEILL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 0504166john',
            'mobile_2' => '059 9726974',
            'address_1' => 'DONINGA',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 816,
            'name' => 'LIAM CROSBIE',
            'email' => null,
            'phone' => '056 32295',
            'mobile_1' => '',
            'mobile_2' => '056 67608',
            'address_1' => 'CLINSTOWN RD',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 817,
            'name' => 'IAN ',
            'email' => null,
            'phone' => '056 67107',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TROYSWOOD',
            'address_2' => 'KEATINGSTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 818,
            'name' => 'J REIDY',
            'email' => null,
            'phone' => '056 27509',
            'mobile_1' => '',
            'mobile_2' => '056 24350',
            'address_1' => '12 THE RING',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 819,
            'name' => 'TOM STEVENSON RIP',
            'email' => null,
            'phone' => '056 67190',
            'mobile_1' => '353868778259',
            'mobile_2' => '',
            'address_1' => 'KILMACAR',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 820,
            'name' => 'J HOLOHAN',
            'email' => null,
            'phone' => '056 27149',
            'mobile_1' => '',
            'mobile_2' => '056 26466',
            'address_1' => 'MEADOWVILLEW',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 821,
            'name' => 'B HOLOHAN',
            'email' => null,
            'phone' => '056 27391',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '2 WOODLAWN',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 822,
            'name' => ' SMS TRAILERS',
            'email' => null,
            'phone' => '056 7763937',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HEBRON ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 823,
            'name' => 'CW FINN',
            'email' => null,
            'phone' => '056 28944',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '53 LAWCUS FIELDS',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 824,
            'name' => 'TOM BARRETT',
            'email' => null,
            'phone' => '0508 81814',
            'mobile_1' => '087 8376900',
            'mobile_2' => '',
            'address_1' => 'BAWNOGUES,',
            'address_2' => 'CASTLEDERMOT ROAD',
            'city' => null,
            'state' => 'BALTINGLASS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 825,
            'name' => 'NOELEEN BREEN',
            'email' => null,
            'phone' => '056 61552',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '9 BANIM TCE',
            'address_2' => 'FRESHFORD RD.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 826,
            'name' => 'MARTIN MC KENNA',
            'email' => null,
            'phone' => '056 4441811',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 827,
            'name' => 'BRIAN PHELAN',
            'email' => null,
            'phone' => '059 6481037',
            'mobile_1' => '086 823 7890',
            'mobile_2' => '',
            'address_1' => 'SHROUGHAUN',
            'address_2' => 'BALTINGLASS',
            'city' => null,
            'state' => 'CO.WICKLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 828,
            'name' => 'JOHN O BRIEN',
            'email' => null,
            'phone' => '056 7761083',
            'mobile_1' => '087 9692193',
            'mobile_2' => 'fax 7795907',
            'address_1' => '10 LORETTO PARK',
            'address_2' => 'TROYS LANE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 829,
            'name' => 'IAN DREELNG',
            'email' => null,
            'phone' => '056 26415',
            'mobile_1' => '087 6789186',
            'mobile_2' => '056 71900',
            'address_1' => 'JOHNS PLC',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 830,
            'name' => 'JOE RYAN',
            'email' => null,
            'phone' => '056 8832559',
            'mobile_1' => '087 2205253',
            'mobile_2' => '',
            'address_1' => 'BAWNTANAMEENAGH',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 831,
            'name' => 'JIMMY TIMMONS',
            'email' => null,
            'phone' => '0503 43622',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '12 BESTFIELD',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 832,
            'name' => 'DANIEL HENNESSY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2636693',
            'mobile_2' => '056 31900',
            'address_1' => 'MOUNTFINN',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 833,
            'name' => 'PAT DREELING',
            'email' => null,
            'phone' => '056 4441087',
            'mobile_1' => '087 1216480',
            'mobile_2' => '',
            'address_1' => 'DONAGUILE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 834,
            'name' => 'GERARD FERRIS',
            'email' => null,
            'phone' => '056 41854',
            'mobile_1' => '087 2277249',
            'mobile_2' => '',
            'address_1' => 'ARDRA',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 835,
            'name' => 'MARY WALSH',
            'email' => null,
            'phone' => '056 41841',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '5 KILLTOWN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 836,
            'name' => 'SIMON&DJ WHITTY',
            'email' => null,
            'phone' => '061 451737',
            'mobile_1' => '087 2387084dj',
            'mobile_2' => '',
            'address_1' => 'SUPERSAVE',
            'address_2' => 'CAHERDAVIN',
            'city' => null,
            'state' => 'CO. LIMERICK',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 837,
            'name' => 'Joan KEOGH',
            'email' => null,
            'phone' => '056 7729764',
            'mobile_1' => '086 3306813',
            'mobile_2' => '',
            'address_1' => 'Grovine',
            'address_2' => 'Waterford Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 838,
            'name' => 'KIERAN RYAN',
            'email' => null,
            'phone' => '056 7721694',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWPARK UPPR',
            'address_2' => 'JOHNSWELL RD.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 839,
            'name' => ' KINSELLA',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NO 5 SOUTH PADDOCKS',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 840,
            'name' => 'John O NEILL',
            'email' => null,
            'phone' => '056 7756696',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '79 LARCHFIELD',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 841,
            'name' => 'RICHARD PHELAN',
            'email' => null,
            'phone' => '056 7724467',
            'mobile_1' => '087 2325370',
            'mobile_2' => '',
            'address_1' => '39 CASTLE AVENUE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 842,
            'name' => 'MARTIN FORTUNE',
            'email' => null,
            'phone' => '056 7767753',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYDOWEL',
            'address_2' => 'RATHMOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 843,
            'name' => 'SEAMUS COSTELLO',
            'email' => null,
            'phone' => '056 51211',
            'mobile_1' => '086 8335755',
            'mobile_2' => '',
            'address_1' => 'LOUGHBOY',
            'address_2' => 'WATERFORD RD.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 844,
            'name' => 'LINDA CLEERE',
            'email' => null,
            'phone' => '056 67732',
            'mobile_1' => '',
            'mobile_2' => '056 72421',
            'address_1' => 'BALLYDANIEL',
            'address_2' => 'BONETTSTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 845,
            'name' => 'Patrick MURPHY',
            'email' => null,
            'phone' => '056 7722030',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHELLUMSRATH',
            'address_2' => 'CALLAN RD.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 846,
            'name' => 'JIM KELLY',
            'email' => null,
            'phone' => '056 21313',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TALBOTSINCH',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 847,
            'name' => 'DECLAN GIBBONS',
            'email' => null,
            'phone' => '056 26277',
            'mobile_1' => '087 7933962',
            'mobile_2' => '',
            'address_1' => 'GOWRAN',
            'address_2' => 'CO.KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 848,
            'name' => 'RICHARD BURKE',
            'email' => null,
            'phone' => '056 7768008',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CROAN',
            'address_2' => 'DUNAMAGGIN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 849,
            'name' => 'BRENDAN KENNEDY',
            'email' => null,
            'phone' => '051 648259',
            'mobile_1' => '087 6558844',
            'mobile_2' => '051 648965',
            'address_1' => 'CARRICK RD',
            'address_2' => 'KILMOGANNY',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 850,
            'name' => 'JOHN STAPLETON',
            'email' => null,
            'phone' => '056 7725627',
            'mobile_1' => '086 2547985',
            'mobile_2' => '',
            'address_1' => 'COOLALONG',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 851,
            'name' => ' BALLYLINCH STUD',
            'email' => null,
            'phone' => '056 7724217',
            'mobile_1' => '086 7310228',
            'mobile_2' => '',
            'address_1' => 'MOUNT JULIET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 852,
            'name' => 'MARY O SHEA',
            'email' => null,
            'phone' => '056 7721556',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '20 WILLIAM STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 853,
            'name' => 'TONY STAFFORD',
            'email' => null,
            'phone' => '059 9775428',
            'mobile_1' => '086 0836503',
            'mobile_2' => '',
            'address_1' => 'LOWER GRANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 854,
            'name' => 'KILLIAN KANE',
            'email' => null,
            'phone' => '056 7726223',
            'mobile_1' => '087 7733200',
            'mobile_2' => '087 4179880',
            'address_1' => 'CLOVER',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 855,
            'name' => 'JOHN MULDOWNEY',
            'email' => null,
            'phone' => '056 7769209',
            'mobile_1' => '087 2575125',
            'mobile_2' => '',
            'address_1' => 'KILMANAGH',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 856,
            'name' => 'JOHN O ROURKE',
            'email' => null,
            'phone' => '056 7724619',
            'mobile_1' => '086 0551105',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 857,
            'name' => 'PATRICK O NEILL',
            'email' => null,
            'phone' => '0503 75318',
            'mobile_1' => '087 9881721',
            'mobile_2' => '',
            'address_1' => '8 MC DONNELL PK.',
            'address_2' => 'BALLINKILLEN',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 858,
            'name' => 'MARTIN KAVANAGH',
            'email' => null,
            'phone' => '056 63665',
            'mobile_1' => '086 8255826',
            'mobile_2' => '',
            'address_1' => '58 DEANS COURT',
            'address_2' => 'WATERFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 859,
            'name' => 'RONALD NOLAN',
            'email' => null,
            'phone' => '056 7724917',
            'mobile_1' => '087 6808571',
            'mobile_2' => '056 7770877',
            'address_1' => 'THE QUAY',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 860,
            'name' => 'BRIGID BYRNE',
            'email' => null,
            'phone' => '059 9726159',
            'mobile_1' => '086 2332351',
            'mobile_2' => '056 7726124',
            'address_1' => 'HILLSIDE VIEW',
            'address_2' => 'CASTLEWARREN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 861,
            'name' => 'FONSIE MEALLY',
            'email' => null,
            'phone' => '056 4441229',
            'mobile_1' => '087 2562973',
            'mobile_2' => '056 4441390',
            'address_1' => 'THE SQUARE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 862,
            'name' => 'GARRY GORDON',
            'email' => null,
            'phone' => '056 7767292',
            'mobile_1' => '086 2496025',
            'mobile_2' => '',
            'address_1' => 'HENNEBRYS CROSS',
            'address_2' => 'DUNMORE WEST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 863,
            'name' => 'ANDREW RING',
            'email' => null,
            'phone' => '056 41365',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILKENNY ST',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 864,
            'name' => 'Martina Brennan',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9868635',
            'mobile_2' => '',
            'address_1' => '55 Upper Acorns',
            'address_2' => 'Castlecomer',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 865,
            'name' => 'ANDY PHELAN',
            'email' => null,
            'phone' => '056 7762189',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'BONNETTSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 866,
            'name' => 'TOM WALSH',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 2843382',
            'mobile_2' => '056 63081',
            'address_1' => 'NEWPARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 867,
            'name' => 'SEAN WALL',
            'email' => null,
            'phone' => '056 8835175',
            'mobile_1' => '087 9807561maur',
            'mobile_2' => '',
            'address_1' => 'LOUGHINNEY',
            'address_2' => 'BARNA',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 868,
            'name' => 'TERRY BLACQUE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 8515840',
            'mobile_2' => '',
            'address_1' => 'OVENSTOWN',
            'address_2' => 'KELLS',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 869,
            'name' => 'Imelda Broderick',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3614075',
            'mobile_2' => '',
            'address_1' => 'FENNOR',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 870,
            'name' => 'MICHAEL O BRIEN',
            'email' => null,
            'phone' => '056 7725665',
            'mobile_1' => '',
            'mobile_2' => '056 7725194',
            'address_1' => 'GREEN STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 871,
            'name' => ' WARD',
            'email' => null,
            'phone' => '0503 21825',
            'mobile_1' => '',
            'mobile_2' => '0503 21385',
            'address_1' => '28 MAPLE DRIVE',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 872,
            'name' => 'JIM TYRRELL',
            'email' => null,
            'phone' => '056 63004',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '28 DOMINIC STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 873,
            'name' => 'FRANCES DIAMOND',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NO 21 TROYSGATE',
            'address_2' => 'BISHOPS HILL',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 874,
            'name' => 'STAN MASON',
            'email' => null,
            'phone' => '056 7758449',
            'mobile_1' => '353878113937',
            'mobile_2' => '',
            'address_1' => 'MILLSTONE LODGE',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 875,
            'name' => 'PADDY DENNY',
            'email' => null,
            'phone' => '056 7725375',
            'mobile_1' => '086 8664136',
            'mobile_2' => '',
            'address_1' => 'CONVENT VIEW',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 876,
            'name' => 'JOHN FARRELL',
            'email' => null,
            'phone' => '056 4441932',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DONAGUILE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 877,
            'name' => 'MARY NOLAN',
            'email' => null,
            'phone' => '056 8832954',
            'mobile_1' => '086 3841337',
            'mobile_2' => '087 2463785',
            'address_1' => 'BOHERGLASS',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 878,
            'name' => 'LAWERENCE FLANNERY',
            'email' => null,
            'phone' => '056 7762794',
            'mobile_1' => '086 8308840',
            'mobile_2' => 'marian\'s mob',
            'address_1' => '31 GARRINGREEN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 879,
            'name' => 'AnnEnglish SOS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9379630ann',
            'mobile_2' => '056 7764000',
            'address_1' => '61 Margarets Fields',
            'address_2' => 'Callan Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 880,
            'name' => 'TED DOODY',
            'email' => null,
            'phone' => '056 24388',
            'mobile_1' => '087 2341335',
            'mobile_2' => '',
            'address_1' => 'COLMCILLE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 881,
            'name' => 'JULIA COOPER',
            'email' => null,
            'phone' => '056 7767736',
            'mobile_1' => '353833283736',
            'mobile_2' => '',
            'address_1' => 'TOWER RD',
            'address_2' => 'JENKINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 882,
            'name' => 'LIAM WHELAN',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 2570202',
            'mobile_2' => '',
            'address_1' => 'DANVILLE',
            'address_2' => 'BENNETTSBRIDGE RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 883,
            'name' => 'TERRY O NEILL',
            'email' => null,
            'phone' => '056 43200',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RIDGEWAY',
            'address_2' => 'KNOCKMAJOR CASTLEC',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 884,
            'name' => 'TERESA CRENNAN',
            'email' => null,
            'phone' => '056 67129',
            'mobile_1' => '086 8749941',
            'mobile_2' => '056 52444',
            'address_1' => 'CORBETTSTOWN',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 885,
            'name' => 'BRIAN STEPHENSON',
            'email' => null,
            'phone' => '056 67170',
            'mobile_1' => '086 8635995',
            'mobile_2' => '',
            'address_1' => 'TEACHMOR',
            'address_2' => 'CORBETSTOWN',
            'city' => null,
            'state' => 'BALLYFOYLE',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 886,
            'name' => 'Seamus Harris',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 1967601',
            'mobile_2' => '',
            'address_1' => '40 Treacy Park',
            'address_2' => 'Carrick-onSuir',
            'city' => null,
            'state' => 'CO Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 887,
            'name' => 'MAURICE GIBSON',
            'email' => null,
            'phone' => '056 69563',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TULLORAON',
            'address_2' => 'CO.KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 888,
            'name' => 'DYLAN VAUGHAN',
            'email' => null,
            'phone' => '056 54233',
            'mobile_1' => '087 2569929',
            'mobile_2' => '',
            'address_1' => 'LOWE STREET',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 889,
            'name' => 'DAVID STAPLETON',
            'email' => null,
            'phone' => '056 8833152',
            'mobile_1' => '086 1713998',
            'mobile_2' => '',
            'address_1' => 'STAPLETONS PUB',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 890,
            'name' => 'EDMOND DREELING',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ATLAMOUNT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 891,
            'name' => 'EOIN BLAKE',
            'email' => null,
            'phone' => '059 9775042',
            'mobile_1' => '087 9685965',
            'mobile_2' => '',
            'address_1' => 'SLYGUFF',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 892,
            'name' => 'JJ DONOHOE',
            'email' => null,
            'phone' => '056 61504',
            'mobile_1' => '087 2234780',
            'mobile_2' => '',
            'address_1' => '29 LWR PATRICK ST.',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 893,
            'name' => 'ROBERT BRISCOE',
            'email' => null,
            'phone' => '056 27723',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TALLENTS LANE',
            'address_2' => 'SHEESTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 894,
            'name' => 'LIAM MOYLAN',
            'email' => null,
            'phone' => '056 7759814',
            'mobile_1' => '353872530031',
            'mobile_2' => '056 7752866mary',
            'address_1' => 'The Cottage',
            'address_2' => 'Upper Clara',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 17901,
            'name' => 'David Wright',
            'email' => 'dwright1941@googlemail.com',
            'phone' => '00441352741701 ',
            'mobile_1' => '35383',
            'mobile_2' => NULL,
            'address_1' => '',
            'address_2' => '',
            'city' => 'Passage East',
            'state' => 'Waterford',
            'country' => 'Ireland',
            'eir_code' => '',
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 895,
            'name' => 'JOHN MULHOLLAND/RUTH WOODS',
            'email' => null,
            'phone' => '056 7754465kath',
            'mobile_1' => '086 2556387',
            'mobile_2' => '086 2315070',
            'address_1' => '1 FOXES COVERT',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 896,
            'name' => 'SEAMUS MOORE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2440579',
            'mobile_2' => '',
            'address_1' => 'DUNAMAGGIN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 897,
            'name' => 'NOEL O DONOHOE',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 6011013',
            'mobile_2' => '',
            'address_1' => 'BRUSHWOOD FARM',
            'address_2' => 'KILMAGAR',
            'city' => null,
            'state' => 'JOHNSWELL',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 898,
            'name' => 'BRIAN PHELAN',
            'email' => null,
            'phone' => '056 28606',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'KELLS',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 899,
            'name' => 'LIAM POWER',
            'email' => null,
            'phone' => '056 7763806',
            'mobile_1' => '087 6630122',
            'mobile_2' => '056 7785000',
            'address_1' => '5 SYCAMORE DR.',
            'address_2' => 'ARDNORE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 900,
            'name' => 'MICHAEL BURKE',
            'email' => null,
            'phone' => '056  69007',
            'mobile_1' => '087 2476738',
            'mobile_2' => '',
            'address_1' => 'VALLEYVIEW',
            'address_2' => 'LISNALEA',
            'city' => null,
            'state' => 'TULLAROAN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 901,
            'name' => 'LIAM DEVLIN',
            'email' => null,
            'phone' => '056 7721934',
            'mobile_1' => '086 3148251',
            'mobile_2' => '',
            'address_1' => '46 ST. FRANCIS TCE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 902,
            'name' => ' AB DISTRIBUTORS',
            'email' => null,
            'phone' => '1762326943',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PO BOX 6, F',
            'address_2' => 'MALCOLM RD',
            'city' => null,
            'state' => 'LURGAN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 903,
            'name' => 'JIM BERGIN',
            'email' => null,
            'phone' => '056 25670',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'AHENURE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 904,
            'name' => ' JM ADAMS',
            'email' => null,
            'phone' => '1232455954',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TAMAR COMMERCIAL CENTRE',
            'address_2' => '6/7 CHATER ST,',
            'city' => null,
            'state' => 'BELFAST BT4 1HS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 905,
            'name' => ' THE CONNECT AGENCY',
            'email' => null,
            'phone' => '01 4500777',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '243/244 HOLLY RD',
            'address_2' => 'WESTERN IND EST',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 906,
            'name' => ' AV IMPORT',
            'email' => null,
            'phone' => '01 2405600',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHN F KENNEDY DRIVE',
            'address_2' => 'NAAS ROAD',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 907,
            'name' => ' BEAUMARK',
            'email' => null,
            'phone' => '014566384',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT L1 BALLYMOUNT DR',
            'address_2' => 'WALKINSTOWN',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 908,
            'name' => 'ORIGO BEAVER DISTRIBUTION',
            'email' => null,
            'phone' => '01 4666858',
            'mobile_1' => 'fax: 01 4666859',
            'mobile_2' => '',
            'address_1' => 'MAGNA DRIVE',
            'address_2' => 'MAGNA BUSINESS PK',
            'city' => null,
            'state' => 'CITY WEST',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 909,
            'name' => ' BODEL DISTRIBUTORS',
            'email' => null,
            'phone' => '92672412',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '9 HULLS LANE',
            'address_2' => 'MOIRA RD',
            'city' => null,
            'state' => 'LISBURN BR28 2SR',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 910,
            'name' => ' BROWNBROOK DISTRIBUTORS',
            'email' => null,
            'phone' => '38337317',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 24 SEAGOE IND. EST',
            'address_2' => 'PORTADOWN',
            'city' => null,
            'state' => 'CO. ARMAGH',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 911,
            'name' => ' BURKE BROS SON & CO',
            'email' => null,
            'phone' => '018387387',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL LANE',
            'address_2' => 'NAVAN RD',
            'city' => null,
            'state' => 'ASHTOWN DUBLIN 15',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 912,
            'name' => ' CALVERT ELECTRIC',
            'email' => null,
            'phone' => '232773711',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FARADAY HOUSE',
            'address_2' => 'ALEXANDRA PARK AVE',
            'city' => null,
            'state' => 'BELFAST BT15 3SA',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 913,
            'name' => ' CHC AERIAL SATELLITE',
            'email' => null,
            'phone' => '2892664771',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '6 RICHMOND DRIVE',
            'address_2' => 'LISBURN',
            'city' => null,
            'state' => 'CO. ANTRIM BT282DJ',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 914,
            'name' => ' DABS DISTRIBUTION',
            'email' => null,
            'phone' => '1232662831',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '127 DONNYBROOK ST',
            'address_2' => 'BELFAST',
            'city' => null,
            'state' => 'BT9 7DE',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 915,
            'name' => ' DIMPCO',
            'email' => null,
            'phone' => '018424833',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'AIRPORT RD',
            'address_2' => 'CLOGHRAN',
            'city' => null,
            'state' => 'CO. DUBLIN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 916,
            'name' => ' DOMOTEC',
            'email' => null,
            'phone' => '01 4602855',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NAAS RD',
            'address_2' => 'DUBLIN 12',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 917,
            'name' => ' DUNLOP & HAMILTON',
            'email' => null,
            'phone' => '1232799399',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 9 PRINCE REGENT RD',
            'address_2' => 'CASTLEREAGH',
            'city' => null,
            'state' => 'BELFAST BT5 6SH',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 918,
            'name' => ' EDI',
            'email' => null,
            'phone' => '01 6264366',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KYLEMORE PARK WEST',
            'address_2' => 'BALLYFERRMOT',
            'city' => null,
            'state' => 'DUBLIN 10',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 919,
            'name' => ' EDMUNDSON ELECTRICAL IRELAND',
            'email' => null,
            'phone' => '01 8221350',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 3A RESEMOUNT INDUSTRIAL EST',
            'address_2' => 'BALLYCOOLIN',
            'city' => null,
            'state' => 'DUBLIN 11',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 920,
            'name' => ' ELECTROLUX GROUP IRELAND',
            'email' => null,
            'phone' => '01 4195100',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LONG MILE RD',
            'address_2' => 'DUBLIN 12',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 921,
            'name' => ' MIDIA DISTRIBUTION',
            'email' => null,
            'phone' => '01 4567911',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Unit B',
            'address_2' => 'Montone Bus. Pk.',
            'city' => null,
            'state' => 'Oak Road',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 922,
            'name' => ' ENERGIZER IRELAND',
            'email' => null,
            'phone' => '01 4968054',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '17 PORTOBELLO HARBOUR',
            'address_2' => 'DUBLIN 8',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 923,
            'name' => ' EXPERT IRELAND',
            'email' => null,
            'phone' => '01 8428645',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 5 SANTRYHALL IND EST',
            'address_2' => 'SANTRY',
            'city' => null,
            'state' => 'DUBLIN 9',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 924,
            'name' => ' GFD COMMUNICATIONS',
            'email' => null,
            'phone' => '01 4569500',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '15A PARKMORE IND EST',
            'address_2' => 'LONG MILE RD',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 925,
            'name' => ' HOME AUDIO AND VIDEO',
            'email' => null,
            'phone' => '01 8570455',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 2 114 DRUMCONDRA RD',
            'address_2' => 'DRUMCONDRA',
            'city' => null,
            'state' => 'DUBLIN 9',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 926,
            'name' => ' JVC IRELAND',
            'email' => null,
            'phone' => '01 4561177',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '1 CARRIGLEA IND EST',
            'address_2' => 'NAAS RD',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 927,
            'name' => ' MAGIMIX',
            'email' => null,
            'phone' => '01 2806630',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NORTHUMBERLAND HSE',
            'address_2' => 'DUNLAOIRE',
            'city' => null,
            'state' => 'CO. DUBLIN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 928,
            'name' => 'GERARD MURPHY',
            'email' => null,
            'phone' => '0503 73583',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLNABRONE',
            'address_2' => 'SKEOUGHVOSTEEN',
            'city' => null,
            'state' => 'BORRIS, CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 929,
            'name' => 'BRENDAN ROBERTS',
            'email' => null,
            'phone' => '056 7725969',
            'mobile_1' => '086 2456118',
            'mobile_2' => '056 7762798',
            'address_1' => 'FOXCOVER',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 930,
            'name' => ' MITSUBISHI ELECTRIC EUROPE',
            'email' => null,
            'phone' => '01 4198800',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WESTGATE BUSINESS PARK',
            'address_2' => 'BALLYMOUNT',
            'city' => null,
            'state' => 'DUBLIN 24',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 931,
            'name' => ' NETCOM COMMUNICATIONS',
            'email' => null,
            'phone' => '01 4607282',
            'mobile_1' => 'FAX  01 4607283',
            'mobile_2' => '',
            'address_1' => 'UNIT 65 WESTERN PARKWAY BUS. PARK',
            'address_2' => 'LR BALLYMOUNT RD',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 932,
            'name' => ' NILFISK ADVANCE',
            'email' => null,
            'phone' => '284765163',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWMARKET RD',
            'address_2' => 'BURY ST EDMONDS',
            'city' => null,
            'state' => 'SUFFOLK IP33 3SR',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 933,
            'name' => ' PANASONIC IRELAND',
            'email' => null,
            'phone' => '01 2959966',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BURTON HALL RD',
            'address_2' => 'SANDYFORD IND EST',
            'city' => null,
            'state' => 'DUBLIN 18',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 934,
            'name' => ' PORTOBELLO DISTRIBUTORS',
            'email' => null,
            'phone' => '01 4750010',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DML HOUSE,',
            'address_2' => 'PORTOBELLO HARBOUR',
            'city' => null,
            'state' => 'DUBLIN 8',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 935,
            'name' => ' QUALITY GOODS INTERNATIONAL',
            'email' => null,
            'phone' => '01 2955441',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT T10 MAPLE AVENUE',
            'address_2' => 'STILLORGAN IND PAR',
            'city' => null,
            'state' => 'BLACKROCK, CO. DUB',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 936,
            'name' => ' SANYO IRELAND',
            'email' => null,
            'phone' => '01 4568910',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '41 WESTERN PARKWAY BUSINESS CENTRE',
            'address_2' => 'BALLYMOUNT ROAD',
            'city' => null,
            'state' => 'DUBLIN 12',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 937,
            'name' => ' SHERLANE AGENCIES',
            'email' => null,
            'phone' => '01 2827468',
            'mobile_1' => '',
            'mobile_2' => 'FAX 01 2821049',
            'address_1' => 'UNIT 3, LOUGHLINSTOWN IND EST',
            'address_2' => 'BALLYBRACK',
            'city' => null,
            'state' => 'CO. DUBLIN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 938,
            'name' => ' SKS COMMUNICATIONS',
            'email' => null,
            'phone' => '01 4565656',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 2 ROBINHOOD INDUSTRIAL ESTATE',
            'address_2' => 'CLONDALKIN',
            'city' => null,
            'state' => 'DUBLIN 22',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 939,
            'name' => ' SONY IRELAND',
            'email' => null,
            'phone' => '01 4131700',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '82 BROOMHILL RD',
            'address_2' => 'TALLAGHT',
            'city' => null,
            'state' => 'DUBLIN 24',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 940,
            'name' => ' TELECOM CONNECT',
            'email' => null,
            'phone' => '061 317322',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UNIT 18, THE ENTERPRISE CENTRE',
            'address_2' => 'KILMALLOCK RD',
            'city' => null,
            'state' => 'LIMERICK',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 941,
            'name' => 'PAUL COOGAN',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 6975293',
            'mobile_2' => '',
            'address_1' => '35 DEAN CAVANAGH PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 942,
            'name' => 'JOSEPHINE STRANGER',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 2816923',
            'mobile_2' => '',
            'address_1' => '25 PEARSE STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 943,
            'name' => 'Joseph KENNEDY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6571609',
            'mobile_2' => '',
            'address_1' => '2 friarshill',
            'address_2' => 'Graiguenamanagh',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 944,
            'name' => 'JOHN RAFTER',
            'email' => null,
            'phone' => '056 7767769',
            'mobile_1' => '086 2712423',
            'mobile_2' => 'Diane',
            'address_1' => 'BALLYDANIEL',
            'address_2' => 'THREECASTLES',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 945,
            'name' => 'JOE O NEILL',
            'email' => null,
            'phone' => '059 9775449',
            'mobile_1' => '086 8160768',
            'mobile_2' => '',
            'address_1' => 'BALLYELLEN',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 946,
            'name' => 'TOMMY HIGGINS',
            'email' => null,
            'phone' => '056 63836',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '10 DE LA SALLE PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 947,
            'name' => 'John Dumecz',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2066371',
            'mobile_2' => '',
            'address_1' => '14 Deans Court',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 948,
            'name' => 'JOSEPHINE DOYLE',
            'email' => null,
            'phone' => '059 9724364',
            'mobile_1' => '087 2996144',
            'mobile_2' => '',
            'address_1' => 'BALLYCRINNEGAN',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 949,
            'name' => ' SOMERS',
            'email' => null,
            'phone' => '051 648040',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CARRIGETNA',
            'address_2' => 'KILMOGANNY',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 950,
            'name' => 'MICHAEL DELANEY',
            'email' => null,
            'phone' => '056 8832475',
            'mobile_1' => '087 6860075',
            'mobile_2' => '',
            'address_1' => 'CASCADE',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 951,
            'name' => 'WILLIAM O NEILL',
            'email' => null,
            'phone' => '056 7727798',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILBLINE',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 952,
            'name' => 'Lester Ryan',
            'email' => null,
            'phone' => '056 7726250',
            'mobile_1' => '087 2601524',
            'mobile_2' => '',
            'address_1' => 'Clover',
            'address_2' => 'Gowran',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 953,
            'name' => 'KEN BYRNE',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYKEEFFE',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 954,
            'name' => 'Mary Hoyne',
            'email' => null,
            'phone' => '059 9726920',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'Baurnafea',
            'address_2' => 'Castlewarren',
            'city' => null,
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 955,
            'name' => 'TOM HOLDEN',
            'email' => null,
            'phone' => '056 52788',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CHRISTIES IRISH STORES',
            'address_2' => 'HIGH ST.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 956,
            'name' => 'Gerard CLANCY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087-7959700',
            'mobile_2' => '',
            'address_1' => '32 St Johns Terrace',
            'address_2' => 'Carrick-on-Suir',
            'city' => null,
            'state' => 'Co Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 957,
            'name' => 'SAM JOHNSON',
            'email' => null,
            'phone' => '056 23590',
            'mobile_1' => '088 6910579',
            'mobile_2' => '',
            'address_1' => '44 O LOUGHLIN COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 958,
            'name' => 'RONAN PHELAN',
            'email' => null,
            'phone' => '056 56036',
            'mobile_1' => '086 8509392',
            'mobile_2' => '',
            'address_1' => '62 FIACRA PLC.',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 959,
            'name' => 'GORDON NELSON',
            'email' => null,
            'phone' => '056 21750',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '42 O LOUGHLIN COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 960,
            'name' => 'PATRICK LAWLOR',
            'email' => null,
            'phone' => '0503 23014',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ROYAL OAK RD',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 961,
            'name' => 'CATHAL O NEILL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2443229',
            'mobile_2' => '056 22830',
            'address_1' => '6 LORETTO PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 962,
            'name' => 'AKEEM DESHPANDEY',
            'email' => null,
            'phone' => '056 7756633',
            'mobile_1' => '087 6168529',
            'mobile_2' => '',
            'address_1' => '36 BEECHLAWNS',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 963,
            'name' => 'M AZAM',
            'email' => null,
            'phone' => '056 71611',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '34 FAIRWAYS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 964,
            'name' => 'SEAN O GORMAN',
            'email' => null,
            'phone' => '056 8835101',
            'mobile_1' => '',
            'mobile_2' => '056 7765404',
            'address_1' => 'KILDRENAGH',
            'address_2' => 'WOODSGIFT',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 965,
            'name' => 'IDA BYRNE',
            'email' => null,
            'phone' => '056 26374',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRICKANA',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 966,
            'name' => 'LARRY BRITTON',
            'email' => null,
            'phone' => '056 7763760',
            'mobile_1' => '',
            'mobile_2' => '7770900 TOM',
            'address_1' => 'HILLCREST',
            'address_2' => 'GREENSHILL',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 967,
            'name' => 'SHANE KELLY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6785691',
            'mobile_2' => '056 73000',
            'address_1' => 'CARROLLS BAR',
            'address_2' => 'LOGAN ST.',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 968,
            'name' => 'FINBAR WALSH',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 8839407',
            'mobile_2' => '',
            'address_1' => 'DANGANMORE',
            'address_2' => 'DUNAMAGGIN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 969,
            'name' => 'MICHAEL DERMODY',
            'email' => null,
            'phone' => '056 8833647',
            'mobile_1' => '087 2892908',
            'mobile_2' => '',
            'address_1' => '13 BROOKFIELD',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 970,
            'name' => 'MICHAEL ANDERSON',
            'email' => null,
            'phone' => '056 69420',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KNOCKROE',
            'address_2' => 'RATHMOYLE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 971,
            'name' => 'SUSAN ERRITY',
            'email' => null,
            'phone' => '056 42824',
            'mobile_1' => '086 3261722',
            'mobile_2' => '',
            'address_1' => '12 NEW ROAD',
            'address_2' => 'GURTEEN, CASTLECOM',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 972,
            'name' => 'MYLES KAVANAGH',
            'email' => null,
            'phone' => '056 7770556',
            'mobile_1' => '086 8404504',
            'mobile_2' => '',
            'address_1' => '2 THOMAS SQ.',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 973,
            'name' => 'JOHN BOLGER',
            'email' => null,
            'phone' => '056 7729119',
            'mobile_1' => '087 2774041',
            'mobile_2' => '',
            'address_1' => 'GROVE',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 974,
            'name' => 'KATHRYN KEOGH',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 8094076',
            'mobile_2' => '',
            'address_1' => 'TULLORAN',
            'address_2' => 'CO.KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 975,
            'name' => 'FRANK PURCELL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 6010001',
            'mobile_2' => '',
            'address_1' => 'St Johns',
            'address_2' => 'Dublin Rd',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 976,
            'name' => 'J RIGLEY',
            'email' => null,
            'phone' => '056 52431',
            'mobile_1' => '087 6721081',
            'mobile_2' => '',
            'address_1' => '2 GARRINGREEN',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 977,
            'name' => 'J MC DONALD',
            'email' => null,
            'phone' => '059 9724480',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BAHANA',
            'address_2' => 'ST MULLINS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 978,
            'name' => 'MERVIN KIDD',
            'email' => null,
            'phone' => '0503 21165',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SLYGUFF',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 979,
            'name' => 'LIAM GLENNON',
            'email' => null,
            'phone' => '056 7725770',
            'mobile_1' => '086 2418556',
            'mobile_2' => '',
            'address_1' => 'GREEN ST',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO.  KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 980,
            'name' => 'PAUL ',
            'email' => null,
            'phone' => '056 7728246',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STONEYFORD',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 981,
            'name' => 'FRANCIS TYRRELL',
            'email' => null,
            'phone' => '056 67273',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LEUGH',
            'address_2' => 'RATHMOYLE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 982,
            'name' => 'MARGARET O DONNELL',
            'email' => null,
            'phone' => '056 29189',
            'mobile_1' => '',
            'mobile_2' => '056 70620',
            'address_1' => 'BURNCHURCH',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 983,
            'name' => 'MARY CLIFFORD',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087  2037256',
            'mobile_2' => '0863120037',
            'address_1' => '6 MC CAULEY PLC',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 984,
            'name' => 'MP HANTON',
            'email' => null,
            'phone' => '056 65645',
            'mobile_1' => '087 2949441',
            'mobile_2' => '056 21014',
            'address_1' => 'NEWTOWN',
            'address_2' => 'BONNETTSTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 985,
            'name' => 'SEAN MURPHY',
            'email' => null,
            'phone' => '059 9773653',
            'mobile_1' => '087 2210369',
            'mobile_2' => '',
            'address_1' => 'KILLEDMOND',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 986,
            'name' => 'GORETTI KIERNAN',
            'email' => null,
            'phone' => '059 9775451',
            'mobile_1' => '087 2721587',
            'mobile_2' => '',
            'address_1' => 'SLATE RANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 987,
            'name' => 'PASCAL RYAN',
            'email' => null,
            'phone' => '056 8838013',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 988,
            'name' => 'PHILIP SCOTT',
            'email' => null,
            'phone' => '0502 36388',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PATRICK ST.',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 989,
            'name' => 'CJ TELFORD',
            'email' => null,
            'phone' => '056 27473',
            'mobile_1' => '087 6699889',
            'mobile_2' => '',
            'address_1' => 'RATHCUSACK',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 990,
            'name' => 'PATRICIA O NEILL',
            'email' => null,
            'phone' => '056 4443200',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RIDGEWAY',
            'address_2' => 'COOLCULLEN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 991,
            'name' => 'N NUNN',
            'email' => null,
            'phone' => '056 23687',
            'mobile_1' => '086 2761256',
            'mobile_2' => '',
            'address_1' => '33 DESART COURT',
            'address_2' => 'NEW ST.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 992,
            'name' => 'A FARIDI',
            'email' => null,
            'phone' => '0503 35779',
            'mobile_1' => '087 2481765',
            'mobile_2' => '',
            'address_1' => '130 DOLMEN GARDENS',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 993,
            'name' => 'EAMON WALSH',
            'email' => null,
            'phone' => '056 7762891',
            'mobile_1' => '086 8595516',
            'mobile_2' => '',
            'address_1' => '25 MICHAEL ST.',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 994,
            'name' => 'ÀNTHONY MC DONALD',
            'email' => null,
            'phone' => '0503 22408',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '42 EASTWOOD',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 995,
            'name' => 'NOEL FOLEY',
            'email' => null,
            'phone' => '0503 75192',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SLYGUFF',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 996,
            'name' => 'RICHARD DEMPSEY',
            'email' => null,
            'phone' => '056 58611',
            'mobile_1' => '087 6238697',
            'mobile_2' => '056 58634',
            'address_1' => 'MILL ROAD',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 997,
            'name' => 'EDWIN LONG',
            'email' => null,
            'phone' => '056 4442004',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UPPER COOLBAWN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 998,
            'name' => 'MARY FULLBROOK',
            'email' => null,
            'phone' => '052 9154668',
            'mobile_1' => '087 2274927',
            'mobile_2' => '',
            'address_1' => 'MOHOBER',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'THURLES/TIPPER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 999,
            'name' => 'SEAN MOLLOY',
            'email' => null,
            'phone' => '056 67066',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LISNAFUNCHION',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1000,
            'name' => 'ISABEL LYONS',
            'email' => null,
            'phone' => '059 6473957',
            'mobile_1' => '086 2525052',
            'mobile_2' => '',
            'address_1' => '3 CASTLEOAKS',
            'address_2' => 'KILTEGAN',
            'city' => null,
            'state' => 'CO. WICKLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1001,
            'name' => 'JAMES MORAN',
            'email' => null,
            'phone' => '056 42373',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => ' ROSIE GURTEEN',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1002,
            'name' => 'JOHN FLEMMING',
            'email' => null,
            'phone' => '056 7761504',
            'mobile_1' => '087 2363298',
            'mobile_2' => '0874170111',
            'address_1' => '29 LOWER PATRICK  ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1003,
            'name' => 'BRIAN JACKMAN',
            'email' => null,
            'phone' => '056 7751130',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '37 FR MURPHY SQ',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1004,
            'name' => 'GEROID MOYNIHAN',
            'email' => null,
            'phone' => '056 56541',
            'mobile_1' => '086 8238906',
            'mobile_2' => '0868225661',
            'address_1' => '38 BEECH LAWNS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1005,
            'name' => 'CATHERINE MARTIN',
            'email' => null,
            'phone' => '056 7728040',
            'mobile_1' => '087 9889106',
            'mobile_2' => '',
            'address_1' => 'RATH',
            'address_2' => 'DANESFORT',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1006,
            'name' => 'ANN O BRIEN',
            'email' => null,
            'phone' => '056 7727170',
            'mobile_1' => '087 2599286',
            'mobile_2' => '',
            'address_1' => 'KILREE',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1007,
            'name' => 'TOM RYAN',
            'email' => null,
            'phone' => '056 31853',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HARTES HOUSE',
            'address_2' => 'CASTLETOWN',
            'city' => null,
            'state' => 'CROSSPATRICK',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1008,
            'name' => 'NEVIN BUTLER',
            'email' => null,
            'phone' => '056 7767063',
            'mobile_1' => '086 8227444',
            'mobile_2' => '',
            'address_1' => 'BALLYRAFTEN',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1009,
            'name' => 'Richard CODY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086-254587',
            'mobile_2' => '',
            'address_1' => 'Glenaskough',
            'address_2' => 'Nine Mile House',
            'city' => null,
            'state' => 'Carrick-on-Suir',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1010,
            'name' => 'MARTIN GIBBONS',
            'email' => null,
            'phone' => '056 7763180',
            'mobile_1' => '086 2593264',
            'mobile_2' => '',
            'address_1' => 'DRAKELANDS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1011,
            'name' => 'DAVID O CALLAGHAN',
            'email' => null,
            'phone' => '056 70250',
            'mobile_1' => '087 2220500',
            'mobile_2' => '056 23000',
            'address_1' => '5 LARCHFIELD AVE.',
            'address_2' => 'DUKESMEADOWS',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1012,
            'name' => 'JOHN HALL',
            'email' => null,
            'phone' => '056 7769446',
            'mobile_1' => '',
            'mobile_2' => '056 36310',
            'address_1' => 'GORTNAGAP',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1013,
            'name' => 'JAMES HEALY',
            'email' => null,
            'phone' => '056 32396',
            'mobile_1' => '087 2736664',
            'mobile_2' => '',
            'address_1' => 'ASHBROOK',
            'address_2' => 'CLONE',
            'city' => null,
            'state' => 'BALLYRAGGET',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1014,
            'name' => '- HARRINGTON',
            'email' => null,
            'phone' => '056 58536',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CAPPAGH',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1015,
            'name' => 'MJ DOHERTY',
            'email' => null,
            'phone' => '05997 24616',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GRIFFINSTOWN',
            'address_2' => 'SKEOUGHVOSTEEN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1016,
            'name' => 'JR RYAN',
            'email' => null,
            'phone' => '0503 24204',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYJOHNBOY',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1017,
            'name' => 'MORGAN DOYLE',
            'email' => null,
            'phone' => '056 69153',
            'mobile_1' => '086 2617172',
            'mobile_2' => '0872414439',
            'address_1' => 'BALLYKEEFFE',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1018,
            'name' => 'SIMON FLEMING',
            'email' => null,
            'phone' => '056 70831',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '15 ABBEY GARDENS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1019,
            'name' => 'ALAN WALTON',
            'email' => null,
            'phone' => '056 58655',
            'mobile_1' => '086 6010397',
            'mobile_2' => '',
            'address_1' => 'THE MOTTE RESTAURANT',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1020,
            'name' => 'BOBBY SWEENEY',
            'email' => null,
            'phone' => '056 7769160',
            'mobile_1' => '0862102061',
            'mobile_2' => '',
            'address_1' => 'BRITTAS',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1021,
            'name' => 'MARGARET SMITH',
            'email' => null,
            'phone' => '056 4440124',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYHEMMON UPR',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1022,
            'name' => 'JAMES LANIGAN',
            'email' => null,
            'phone' => '056 58407',
            'mobile_1' => '087 2592030',
            'mobile_2' => '',
            'address_1' => 'FIDDOWN',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1023,
            'name' => 'Denise DUNPHY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3559286',
            'mobile_2' => '',
            'address_1' => 'Lowhill',
            'address_2' => 'Ballinakill',
            'city' => null,
            'state' => 'Co Laois',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1024,
            'name' => 'MICKY MURPHY',
            'email' => null,
            'phone' => '056 59750',
            'mobile_1' => '086 2681810',
            'mobile_2' => '',
            'address_1' => 'MOUNTROSE',
            'address_2' => 'JOHNSWELL',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1025,
            'name' => 'JOE POLLARD',
            'email' => null,
            'phone' => '056 7769266',
            'mobile_1' => '087 2649944',
            'mobile_2' => '',
            'address_1' => 'COURTSTOWN',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1026,
            'name' => 'CHRISTOPHE KEALY',
            'email' => null,
            'phone' => '059 9775204',
            'mobile_1' => '087 7662264',
            'mobile_2' => '',
            'address_1' => 'BALLYCABUS',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1027,
            'name' => 'ANNE BYRNE',
            'email' => null,
            'phone' => '056 26457',
            'mobile_1' => '086 2631151',
            'mobile_2' => '',
            'address_1' => 'BLANCHFIELDS PARK',
            'address_2' => 'CLIFDEN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1028,
            'name' => 'RICHARD MURPHY',
            'email' => null,
            'phone' => '056 7728409',
            'mobile_1' => '085 1409916',
            'mobile_2' => '',
            'address_1' => 'DUNAMAGGIN VILLAGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1029,
            'name' => 'RICHARD BOLAND',
            'email' => null,
            'phone' => '056 4441538',
            'mobile_1' => '087 2783668',
            'mobile_2' => '',
            'address_1' => 'DRUMGOOLE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1030,
            'name' => 'ANNMARIE GLEESON',
            'email' => null,
            'phone' => '056 7726448',
            'mobile_1' => '086 1728251',
            'mobile_2' => '',
            'address_1' => 'CLOHOGUE',
            'address_2' => 'CLIFDEN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1031,
            'name' => 'AM GLEESON',
            'email' => null,
            'phone' => '056 63789',
            'mobile_1' => '087 6884067',
            'mobile_2' => '',
            'address_1' => 'HIGHRATH',
            'address_2' => 'MADDOXTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1032,
            'name' => 'BRIAN BUTLER',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '353872765714',
            'mobile_2' => '',
            'address_1' => 'LISMARTIN',
            'address_2' => 'CASTLECOMER RD.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1033,
            'name' => 'DAVID O NEILL',
            'email' => null,
            'phone' => '056 63140',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '37 BEECHLAWNS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1034,
            'name' => 'DENIS O SULLIVAN',
            'email' => null,
            'phone' => '056 4440130',
            'mobile_1' => '056 41711',
            'mobile_2' => '',
            'address_1' => 'SKEHANA',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1035,
            'name' => 'MICHAEL GEOGHEGAN',
            'email' => null,
            'phone' => '059 9721606',
            'mobile_1' => '087 2684448',
            'mobile_2' => '',
            'address_1' => 'MONEMORE',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1036,
            'name' => 'Kathleen & Tony O Neill',
            'email' => null,
            'phone' => '059 9775331',
            'mobile_1' => '0874188174',
            'mobile_2' => '',
            'address_1' => '31 Barrowmount DR',
            'address_2' => 'Goresbridge',
            'city' => null,
            'state' => 'Co. Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1037,
            'name' => 'KEVIN KENNEDY',
            'email' => null,
            'phone' => '056 7768059',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYHALE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1038,
            'name' => 'PJ MURPHY',
            'email' => null,
            'phone' => '056 64634',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'OUTRATH ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1039,
            'name' => 'M KEALY',
            'email' => null,
            'phone' => '056 7761608',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PARKMORE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1040,
            'name' => 'WILLIAM DUGGAN',
            'email' => null,
            'phone' => '056 7766935',
            'mobile_1' => '085 7309050',
            'mobile_2' => '',
            'address_1' => 'GOWLAWN',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1041,
            'name' => 'PETER KENNEALLY',
            'email' => null,
            'phone' => '056 7768674',
            'mobile_1' => '087 6785867',
            'mobile_2' => '',
            'address_1' => 'CATSTOWN',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1042,
            'name' => 'A MOORE',
            'email' => null,
            'phone' => '056 41470',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WILDFIELD',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1043,
            'name' => 'JOHN BOWEN',
            'email' => null,
            'phone' => '056 7754219',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KNOCKBRACK',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1044,
            'name' => 'ROSE MURPHY',
            'email' => null,
            'phone' => '059 9724864',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 BRANDON PARK',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1045,
            'name' => 'LIAM MINOGUE',
            'email' => null,
            'phone' => '056 32177',
            'mobile_1' => '087 2828203',
            'mobile_2' => '',
            'address_1' => 'KYLE',
            'address_2' => 'BARNA',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1046,
            'name' => 'JENNIFER BOYD',
            'email' => null,
            'phone' => '059 9143285',
            'mobile_1' => '086 6018751',
            'mobile_2' => '0503 32417',
            'address_1' => 'PALATINE',
            'address_2' => 'CO. CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1047,
            'name' => 'MARIE FOGARTY',
            'email' => null,
            'phone' => '056 7763881',
            'mobile_1' => '087 2051018',
            'mobile_2' => '',
            'address_1' => '19 BISHOP BIRCH PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1048,
            'name' => 'JOHN Carrigan',
            'email' => null,
            'phone' => '056 7767922',
            'mobile_1' => '353866073321',
            'mobile_2' => '056 7721517',
            'address_1' => 'WEBBSBORO',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1049,
            'name' => 'CHARLES O NEILL',
            'email' => null,
            'phone' => '056 7762974',
            'mobile_1' => '087 2843064',
            'mobile_2' => '',
            'address_1' => '29 St Fiacre Place',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1050,
            'name' => 'MARK LONG',
            'email' => null,
            'phone' => '056 56078',
            'mobile_1' => '087 1241127',
            'mobile_2' => '',
            'address_1' => '8 NEW BUILDING LANE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1051,
            'name' => 'LARRY BUGGY',
            'email' => null,
            'phone' => '059 9775160',
            'mobile_1' => '087 9940603',
            'mobile_2' => '',
            'address_1' => 'KILGREANEY',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1052,
            'name' => 'JIM CROSBY',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 9840139',
            'mobile_2' => '0876159097',
            'address_1' => '14 CASTLEGARDENS',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1053,
            'name' => 'BERNADETTE DALY',
            'email' => null,
            'phone' => '059 9721103',
            'mobile_1' => '087 9688136',
            'mobile_2' => '',
            'address_1' => 'KILREE STREET',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1054,
            'name' => 'PAT WALSH',
            'email' => null,
            'phone' => '059 9726241',
            'mobile_1' => '086 8334282',
            'mobile_2' => '0503 26199',
            'address_1' => 'GARRYDUFF',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1055,
            'name' => 'MG O BRIEN',
            'email' => null,
            'phone' => '056 7758428',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'INISTIOGE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1056,
            'name' => 'RICHARD BYRNE',
            'email' => null,
            'phone' => '056 7765875',
            'mobile_1' => '086 2551135',
            'mobile_2' => '',
            'address_1' => 'MAGNOLIA',
            'address_2' => 'CALLAN ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1057,
            'name' => 'FRANK PRENDERGAST',
            'email' => null,
            'phone' => '056 7759818',
            'mobile_1' => '',
            'mobile_2' => '056 7751597',
            'address_1' => 'CLARA UPPER',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1058,
            'name' => 'EDWARD BYRNE',
            'email' => null,
            'phone' => '056 7765845',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '7 Rose Gardens, Rosehill,',
            'address_2' => 'Kells Rd.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1059,
            'name' => 'P LANIGAN',
            'email' => null,
            'phone' => '056 51722',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '58 GLENDINE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1060,
            'name' => 'MILLIE HUGHES',
            'email' => null,
            'phone' => '059 9724867',
            'mobile_1' => '086 8060532',
            'mobile_2' => '',
            'address_1' => 'TINNAHINCH',
            'address_2' => 'GRAIGUE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1061,
            'name' => 'MARTIN BROADERS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '50 FAIRVIEW',
            'address_2' => 'GRAIGUE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1062,
            'name' => 'JOHN HARVEY',
            'email' => null,
            'phone' => '0503 73758',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE STABLES',
            'address_2' => 'BORRIS HSE',
            'city' => null,
            'state' => 'BORRIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1063,
            'name' => 'EAMMON B BUTLER',
            'email' => null,
            'phone' => '056 7769206',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '11 NEW HOUSES',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1064,
            'name' => 'Milton AMERICAS',
            'email' => null,
            'phone' => '056 7751940',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE LYDON',
            'address_2' => 'TENNYPARK',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1065,
            'name' => 'P ALLEN',
            'email' => null,
            'phone' => '056 41851',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LWR. MUCKALEE',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1066,
            'name' => 'SALLY HENNESSY',
            'email' => null,
            'phone' => '056 7769475',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BRITTAS',
            'address_2' => 'TULLORAN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1067,
            'name' => 'NB BRENNAN',
            'email' => null,
            'phone' => '0503 75401',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '13 ST ENDAS TERRACE',
            'address_2' => 'BALLYELLEN',
            'city' => null,
            'state' => 'GORESBRIDGE, CO. K',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1068,
            'name' => 'MARTIN PATTERSON',
            'email' => null,
            'phone' => '056 7759889',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLCULLEN VIA CARLOW',
            'address_2' => 'CO . KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1069,
            'name' => 'SEAN O MAHONY',
            'email' => null,
            'phone' => '056 4441467',
            'mobile_1' => '087 2859633',
            'mobile_2' => '',
            'address_1' => 'CLORINKA',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1070,
            'name' => 'EMILY O BRIEN',
            'email' => null,
            'phone' => '059 9724579',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RAHEENDENORE',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1071,
            'name' => 'O PARLON',
            'email' => null,
            'phone' => '056 24361',
            'mobile_1' => '086 8070059',
            'mobile_2' => '',
            'address_1' => 'BALLYLYNCH STUD',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1072,
            'name' => 'MICHAEL GAFFNEY',
            'email' => null,
            'phone' => '056 7755938',
            'mobile_1' => '086 3715584',
            'mobile_2' => '',
            'address_1' => '10A GREENSHILL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1073,
            'name' => 'FRANCIS KAVANAGH',
            'email' => null,
            'phone' => '056 7722833',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '60 NEWPARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1074,
            'name' => 'MARGARET MORRIS',
            'email' => null,
            'phone' => '052 53553',
            'mobile_1' => '086 6078365',
            'mobile_2' => '',
            'address_1' => 'MODESHILL',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO. TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1075,
            'name' => 'Paula Drohan',
            'email' => null,
            'phone' => '056 7751331',
            'mobile_1' => '087 6063704',
            'mobile_2' => '',
            'address_1' => 'Leapstown',
            'address_2' => 'Ballyfoyle',
            'city' => null,
            'state' => 'CO. Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1076,
            'name' => 'ANTHONY MURPHY',
            'email' => null,
            'phone' => '056 65710',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '22 GREENFIELDS',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1077,
            'name' => 'PAUL HAROLD',
            'email' => null,
            'phone' => '056 7726673',
            'mobile_1' => '086 1642337',
            'mobile_2' => '',
            'address_1' => 'ABBEY VIEW',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1078,
            'name' => 'STEPHEN BYRNE',
            'email' => null,
            'phone' => '056 59819',
            'mobile_1' => '086 8400224',
            'mobile_2' => '',
            'address_1' => 'CLARA BRICKEN',
            'address_2' => 'CLIFDEN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1079,
            'name' => 'EAMON MANSFIELD',
            'email' => null,
            'phone' => '056 42117',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'OLD ROAD',
            'address_2' => 'MONEENROE',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1080,
            'name' => 'NOEL FENNELLY',
            'email' => null,
            'phone' => '056 7751191',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '46 MAUDLIN ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1081,
            'name' => 'PHILIP HEAK',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8172356',
            'mobile_2' => '',
            'address_1' => '2 COLLONADE COTTAGES',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1082,
            'name' => 'SEAMUS DELANEY',
            'email' => null,
            'phone' => '056 4442631',
            'mobile_1' => '087 2720157',
            'mobile_2' => '056 4441652',
            'address_1' => '6 FR RAFTICE PLACE',
            'address_2' => 'MONEENROE',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1083,
            'name' => 'NF FLOOD',
            'email' => null,
            'phone' => '0',
            'mobile_1' => '087 6189510',
            'mobile_2' => '',
            'address_1' => 'FLAT 3',
            'address_2' => '36 JOHN STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1084,
            'name' => 'GERRY MC INTYRE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2454804',
            'mobile_2' => '056 7752700',
            'address_1' => 'CASTLEGARDENS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1085,
            'name' => 'GERARD MC GARRY',
            'email' => null,
            'phone' => '056 34382',
            'mobile_1' => '087 2859632',
            'mobile_2' => '',
            'address_1' => 'INCHOROURKE',
            'address_2' => 'URLINGFORD VIA THU',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1086,
            'name' => 'Ml&Siobhan HEALY',
            'email' => null,
            'phone' => '056 7727492',
            'mobile_1' => '087 2440727',
            'mobile_2' => '087 9762046',
            'address_1' => 'EIN KAREN',
            'address_2' => 'DUNBELL',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1087,
            'name' => 'E CONDRON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 416 7964',
            'mobile_2' => '',
            'address_1' => '8 KILKENNY RD',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1088,
            'name' => 'JOHN FITZPATRICK',
            'email' => null,
            'phone' => '056 7728519',
            'mobile_1' => '086 1601074',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'KELLS',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1089,
            'name' => 'E CLIFFORD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6111846',
            'mobile_2' => '',
            'address_1' => '35 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1090,
            'name' => 'JOHN O CARROLL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '085 7155232',
            'mobile_2' => '056 71000',
            'address_1' => '80 ROBERTSHILL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1091,
            'name' => 'PATRICK O NEILL',
            'email' => null,
            'phone' => '056 41380',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ARDRA',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1092,
            'name' => 'PASCAL CULLAGH',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRAGHCORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1093,
            'name' => 'MICHAEL WALSH',
            'email' => null,
            'phone' => '056 7728540',
            'mobile_1' => '087 4125650',
            'mobile_2' => '',
            'address_1' => '5 CHURCHVIEW',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1094,
            'name' => 'CLARE GREEN',
            'email' => null,
            'phone' => '056 7770902',
            'mobile_1' => '087 9886439',
            'mobile_2' => '056 7721947',
            'address_1' => '2 CASHEL AVENUE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1095,
            'name' => 'BRIAN HARRINGTON',
            'email' => null,
            'phone' => '056 41155',
            'mobile_1' => '086 8192966',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1096,
            'name' => 'MAURA BRANNIGAN',
            'email' => null,
            'phone' => '056 8835126',
            'mobile_1' => '086 8728259',
            'mobile_2' => '',
            'address_1' => 'BARNA VIA THURLES',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1097,
            'name' => 'NICHOLAS GRACE',
            'email' => null,
            'phone' => '056 7767637',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LEUGH',
            'address_2' => 'THREECASTLES',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1098,
            'name' => 'James HARDING',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 7635796',
            'mobile_2' => '056 4441287',
            'address_1' => '17 MARYVILLE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1099,
            'name' => 'RICHARD POWER',
            'email' => null,
            'phone' => '056 7725513',
            'mobile_1' => '086 2473613',
            'mobile_2' => '',
            'address_1' => 'COMMOGE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1100,
            'name' => 'FRANCES LONG',
            'email' => null,
            'phone' => '059 9775114',
            'mobile_1' => '086 2498128',
            'mobile_2' => '059 9773201',
            'address_1' => 'BARACORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1101,
            'name' => 'MINNIE DONNELLY',
            'email' => null,
            'phone' => '056 59838',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'JOHNSWELL',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1102,
            'name' => 'NED BRENNAN',
            'email' => null,
            'phone' => '056 29957',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DESART',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1103,
            'name' => 'PADDY CLANCY',
            'email' => null,
            'phone' => '056 4442154',
            'mobile_1' => '086 2500405',
            'mobile_2' => '0872945235',
            'address_1' => 'SIDEGATE',
            'address_2' => 'MOONEENROE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1104,
            'name' => 'MICHAEL HAROLD',
            'email' => null,
            'phone' => '056 26070',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SAN ANTONIO',
            'address_2' => 'MAIN ST GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1105,
            'name' => 'Pat BRENNAN',
            'email' => null,
            'phone' => '059 9773840',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SPAHILL',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1106,
            'name' => 'A BARCOE',
            'email' => null,
            'phone' => '056 7726649',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '9 PARKMORE TERRACE',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1107,
            'name' => 'BILL CULBERT',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2954044',
            'mobile_2' => '056 7720136',
            'address_1' => 'RAHEEN HOUSE',
            'address_2' => 'DUNNAMAGGIN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1108,
            'name' => ' BOYLE',
            'email' => null,
            'phone' => '056 65337',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PARKVIEW',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1109,
            'name' => 'PADDY PARKER',
            'email' => null,
            'phone' => '056 7751129',
            'mobile_1' => '086 8888951',
            'mobile_2' => '',
            'address_1' => '19 NEW ORCHARD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1110,
            'name' => '9 SHARKEY',
            'email' => null,
            'phone' => '056 8831202',
            'mobile_1' => '',
            'mobile_2' => '056 7753196',
            'address_1' => 'VIOLET HILL',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1111,
            'name' => 'JAMES BYRNE',
            'email' => null,
            'phone' => '056 41894',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILLTOWN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1112,
            'name' => 'JANE O NEILL',
            'email' => null,
            'phone' => '056 4442465',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NIALLS ACRE',
            'address_2' => 'CHATSWORTH CLOGH',
            'city' => null,
            'state' => 'CASTLECOMER CO. KI',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1113,
            'name' => 'LISA DELANEY',
            'email' => null,
            'phone' => '056 70118',
            'mobile_1' => '087 4130166',
            'mobile_2' => '',
            'address_1' => '47 POCOCKE VALLEY',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1114,
            'name' => 'WILLIAM HOLDEN',
            'email' => null,
            'phone' => '056 25474',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLETOBIN',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1115,
            'name' => 'EDWARD BOLGER',
            'email' => null,
            'phone' => '051 421189',
            'mobile_1' => '087 2028069',
            'mobile_2' => '',
            'address_1' => 'NEWFARM',
            'address_2' => 'THE ROWER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1116,
            'name' => 'PAT CODY',
            'email' => null,
            'phone' => '056 7729246',
            'mobile_1' => '086 1942315',
            'mobile_2' => '056 21739',
            'address_1' => 'BAWNLUSK',
            'address_2' => 'KELLS ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1117,
            'name' => 'PHILOMENA HICKEY',
            'email' => null,
            'phone' => '056 8835257',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOUGHINNY',
            'address_2' => 'WOODSGIFT FRESHFOR',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1118,
            'name' => 'JOHN ROCHE',
            'email' => null,
            'phone' => '056 7770877',
            'mobile_1' => '087 9814595',
            'mobile_2' => '0872046234',
            'address_1' => 'DANGAN ROAD',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1119,
            'name' => 'DAVID LANNEN',
            'email' => ' irishhides@gmail.com',
            'phone' => '056 7763900',
            'mobile_1' => '353872553058',
            'mobile_2' => '',
            'address_1' => 'MILLMOUNT',
            'address_2' => 'MADDOXTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1120,
            'name' => 'HS SMYTH',
            'email' => null,
            'phone' => '056 40163',
            'mobile_1' => '087 2070138',
            'mobile_2' => '',
            'address_1' => 'KILLTOWN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1121,
            'name' => 'JOHN BRENNAN',
            'email' => null,
            'phone' => '056 7771681',
            'mobile_1' => '086 3893506',
            'mobile_2' => '056 7721070',
            'address_1' => '296 JOHNSWELL RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1122,
            'name' => 'AILISH LAWRY',
            'email' => null,
            'phone' => '056 7769488',
            'mobile_1' => '086 8856871',
            'mobile_2' => '',
            'address_1' => 'THE FOLLY',
            'address_2' => 'ARDABAWN',
            'city' => null,
            'state' => 'TULLAROAN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1123,
            'name' => 'MARY HARDING',
            'email' => null,
            'phone' => '056 7767675',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ESKER',
            'address_2' => 'JENKINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1124,
            'name' => 'SAM HYNES',
            'email' => null,
            'phone' => '059 9773496',
            'mobile_1' => '086 6080815',
            'mobile_2' => '',
            'address_1' => '23 WOODLAWN PARK',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1125,
            'name' => 'BRENDAN MORRISSEY',
            'email' => null,
            'phone' => '087',
            'mobile_1' => '087 2510893',
            'mobile_2' => '',
            'address_1' => '40 PARLIAMENT ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1126,
            'name' => 'PETER MARNELL',
            'email' => null,
            'phone' => '056 7729058',
            'mobile_1' => '086 8912913',
            'mobile_2' => '',
            'address_1' => 'BALLYBUR',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1127,
            'name' => 'Donal Carroll',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8265241',
            'mobile_2' => '',
            'address_1' => 'Greenshill',
            'address_2' => 'Greensbridge',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1128,
            'name' => 'KATHLEEN BOLGER',
            'email' => null,
            'phone' => '059 9724278',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PINEHURST',
            'address_2' => 'BRANDONDALE',
            'city' => null,
            'state' => 'GRAIGNAMANAGH',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1129,
            'name' => 'RACHEL CLIFFORD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2829293',
            'mobile_2' => '',
            'address_1' => '27 BUTTS GREEN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1130,
            'name' => 'CATHERINE CUDDIHY',
            'email' => null,
            'phone' => '056 7769121',
            'mobile_1' => '087 6716818',
            'mobile_2' => '',
            'address_1' => 'BRITTAS',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1131,
            'name' => 'PATRICIA POWER',
            'email' => null,
            'phone' => '051 648131',
            'mobile_1' => '087 2589227',
            'mobile_2' => '',
            'address_1' => 'SLATEQUARRIES',
            'address_2' => 'CARRICK ON SUIR',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1132,
            'name' => 'GEARLDINE CULLEN',
            'email' => null,
            'phone' => '056 7727570',
            'mobile_1' => '087 4160508',
            'mobile_2' => '',
            'address_1' => 'ANNAMULT',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1133,
            'name' => 'JIM WOODCOCK',
            'email' => null,
            'phone' => '056 21112',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BISHOPS HILL',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1134,
            'name' => 'NEANS NOLAN',
            'email' => null,
            'phone' => '056 59986',
            'mobile_1' => '086 2620355',
            'mobile_2' => '',
            'address_1' => 'THORNBROOK',
            'address_2' => 'CLARA',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1135,
            'name' => 'PAT FITZPATRICK',
            'email' => null,
            'phone' => '056 7702858',
            'mobile_1' => '086 8670570',
            'mobile_2' => '70796',
            'address_1' => '13 FR. DELAHUNTY TCE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1136,
            'name' => 'MARY CASHIN',
            'email' => null,
            'phone' => '056 7767656',
            'mobile_1' => '086 3306842',
            'mobile_2' => '',
            'address_1' => 'WEBBSBORO',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1137,
            'name' => 'JOHANNA IVORS',
            'email' => null,
            'phone' => '051 648987',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WINDGAP VILLAGE',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1138,
            'name' => 'Colm COSTELLO',
            'email' => null,
            'phone' => '056 7751989',
            'mobile_1' => '087 2622324',
            'mobile_2' => '',
            'address_1' => 'BLEACH ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1139,
            'name' => 'EUGENE FEAHENY',
            'email' => null,
            'phone' => '056 7768841',
            'mobile_1' => '087 2545866',
            'mobile_2' => '',
            'address_1' => 'BARRETTSTOWN',
            'address_2' => 'KNOCKTOPHER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1140,
            'name' => 'GERARD MULLAN',
            'email' => null,
            'phone' => '056 67624',
            'mobile_1' => '',
            'mobile_2' => '056 22714',
            'address_1' => 'BALLYDANIEL',
            'address_2' => 'THREECASTLES',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1141,
            'name' => 'MICHAEL BRENNAN',
            'email' => null,
            'phone' => '056 7722498',
            'mobile_1' => '087 2234328',
            'mobile_2' => '',
            'address_1' => 'QUETTA',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1142,
            'name' => 'Niall MINOGUE',
            'email' => null,
            'phone' => '056 7723468',
            'mobile_1' => '087 6698460',
            'mobile_2' => '',
            'address_1' => '4 THE FAIRWAYS',
            'address_2' => 'OLD GOLFLINKS RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1143,
            'name' => 'JIM GOGARTY',
            'email' => null,
            'phone' => '056 67084',
            'mobile_1' => '087 6443863',
            'mobile_2' => '',
            'address_1' => 'HAZEL GROVE',
            'address_2' => 'THE ROCK',
            'city' => null,
            'state' => 'FRESHFORD RD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1144,
            'name' => 'MJ & Bridget Maher',
            'email' => null,
            'phone' => '059 9775393',
            'mobile_1' => '087 2714894',
            'mobile_2' => '059 9775201',
            'address_1' => 'LOWER GRANGE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1145,
            'name' => 'PAT WALLIS CONST',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2808567',
            'mobile_2' => '',
            'address_1' => 'CASTLE RD.',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1146,
            'name' => 'NEVILLE RYAN',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 9874788',
            'mobile_2' => '',
            'address_1' => 'BALLYFOYLE',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1147,
            'name' => 'JULIE PRATT',
            'email' => null,
            'phone' => '056 7768656',
            'mobile_1' => '087 9542229',
            'mobile_2' => '',
            'address_1' => 'BALLYGERDRA',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1148,
            'name' => 'MUHAMMAD CHISHTY',
            'email' => null,
            'phone' => '059 9134916',
            'mobile_1' => '086 3066005',
            'mobile_2' => '',
            'address_1' => 'ST DYMPHNAS HOSPITAL',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1149,
            'name' => ' KEARNEY',
            'email' => null,
            'phone' => '056 51920',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '13 BANNIM TCE',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1150,
            'name' => 'LINDA BLAGRIFF',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ROCKFIELD',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1151,
            'name' => 'MARCUS BRUCE',
            'email' => null,
            'phone' => '0508 73956',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '9 CASTLE OAKS',
            'address_2' => 'KILTEGAN',
            'city' => null,
            'state' => 'CO. WICKLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1152,
            'name' => 'B STEWART',
            'email' => null,
            'phone' => '056 7758581',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RUPPA CAPPAGH',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1153,
            'name' => 'MARTIN CROSBIE',
            'email' => null,
            'phone' => '056 54944',
            'mobile_1' => '086 4055268',
            'mobile_2' => '',
            'address_1' => 'DANGAN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1154,
            'name' => 'JOHN DREW',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8523777',
            'mobile_2' => '',
            'address_1' => '30 HEBRON PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1155,
            'name' => 'BRIAN O CONNOR',
            'email' => null,
            'phone' => '056 8832319',
            'mobile_1' => '087 9251365',
            'mobile_2' => '',
            'address_1' => 'CLASHACROW',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1156,
            'name' => 'IRENE QUINN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TURFMARKET',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1157,
            'name' => 'TERRY BRENNAN',
            'email' => null,
            'phone' => '056 4441272',
            'mobile_1' => '087 7470313',
            'mobile_2' => '21158',
            'address_1' => 'RIVERSIDE',
            'address_2' => 'THE SQUARE',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1158,
            'name' => 'JOHN WALSH',
            'email' => null,
            'phone' => '056 7765624',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MICHAELS CHURCH',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1159,
            'name' => 'MARGARET GAMBLE',
            'email' => null,
            'phone' => '056 28992',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '7 BURGESS COURT',
            'address_2' => 'KELLS',
            'city' => null,
            'state' => 'CO. KILKENNNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1160,
            'name' => 'PAT DOWLING',
            'email' => null,
            'phone' => '056 7752293',
            'mobile_1' => '087 2117278',
            'mobile_2' => '',
            'address_1' => 'LYRATH COTTAGE',
            'address_2' => 'DUBLIN RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1161,
            'name' => 'FERGUS WALSH',
            'email' => null,
            'phone' => '056 7727894',
            'mobile_1' => '086 8066346',
            'mobile_2' => '',
            'address_1' => 'DUNBELL BIG',
            'address_2' => 'MADDOXTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1162,
            'name' => 'ALAN EVANS',
            'email' => null,
            'phone' => '056 7726540',
            'mobile_1' => '087 2594103',
            'mobile_2' => '',
            'address_1' => 'RATHCASH',
            'address_2' => 'CLIFDEN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1163,
            'name' => 'KIERAN DAVIN',
            'email' => null,
            'phone' => '056 7727007',
            'mobile_1' => '',
            'mobile_2' => '056 7727662',
            'address_1' => 'STATION ROAD',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO .KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1164,
            'name' => 'PAUL BRENNAN',
            'email' => null,
            'phone' => '056 7770270',
            'mobile_1' => '',
            'mobile_2' => '056 7721166',
            'address_1' => '35 STEPHEN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1165,
            'name' => 'NOAH WALSH',
            'email' => null,
            'phone' => '056 31099',
            'mobile_1' => '087 6877520',
            'mobile_2' => 'fax 31982',
            'address_1' => 'JOHNSTOWN',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1166,
            'name' => 'HELEN MADIGAN',
            'email' => null,
            'phone' => '056 61814',
            'mobile_1' => '',
            'mobile_2' => '056 52341',
            'address_1' => 'LYNDON',
            'address_2' => 'FURZEHOUSE,',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1167,
            'name' => 'DAVID STAPLETON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '54 FR MURPHY SQUARE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1168,
            'name' => 'ALAN BOYLE',
            'email' => null,
            'phone' => '056 26916',
            'mobile_1' => '086 2514039',
            'mobile_2' => '',
            'address_1' => '2 THE WEIR',
            'address_2' => 'CASTLECOMER RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1169,
            'name' => 'TREVOR SHIRLEY',
            'email' => null,
            'phone' => '056 43179',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLCULLEN VIA CARLOW',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1170,
            'name' => 'COLETTE CROKE',
            'email' => null,
            'phone' => '056 62316',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '2 LAUREL DRIVE',
            'address_2' => 'LOUGHBOY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1171,
            'name' => 'KATHLEEN DOYLE',
            'email' => null,
            'phone' => '056 35282',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WOODSGIFT VIA THURLES',
            'address_2' => 'CO. TIPPERARY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1172,
            'name' => 'SEAN MAHER',
            'email' => null,
            'phone' => '056 7767046',
            'mobile_1' => '087 6171089',
            'mobile_2' => '',
            'address_1' => 'TROYSWOOD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1173,
            'name' => 'EAMON DUNNE',
            'email' => null,
            'phone' => '056 7767740',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLESHAL',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1174,
            'name' => 'HELENA MURPHY',
            'email' => null,
            'phone' => '056 7724314',
            'mobile_1' => '086 8577788',
            'mobile_2' => '056 68088',
            'address_1' => 'CASTLEGARDEN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1175,
            'name' => 'CHRISTY HENNESSY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6557302',
            'mobile_2' => '056 7765065',
            'address_1' => 'POTTLERATH',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1176,
            'name' => 'LIAM HOGAN',
            'email' => null,
            'phone' => '051 898197',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CURRABEHY',
            'address_2' => 'MULLINAVAT',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1177,
            'name' => 'SHEM GIBBONS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ROCKFIELD',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1178,
            'name' => 'FRANCES POWER',
            'email' => null,
            'phone' => '051 641060',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '47 ST MOLLERANS',
            'address_2' => 'CARRICK BEG',
            'city' => null,
            'state' => 'CARRICK ON SUIR',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1179,
            'name' => 'PATRICK YOUNG',
            'email' => null,
            'phone' => '0502 36382',
            'mobile_1' => '086 8096693',
            'mobile_2' => '',
            'address_1' => 'ARCHERSTOWN',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1180,
            'name' => 'MICHAEL KENNEDY SNR',
            'email' => null,
            'phone' => '0502 36184',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLEWOOD',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1181,
            'name' => 'LIAM CLEERE',
            'email' => null,
            'phone' => '056 32961',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '21 WOODVIEW',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1182,
            'name' => 'ALICE FITZPATRICK',
            'email' => null,
            'phone' => '0502 37101',
            'mobile_1' => '',
            'mobile_2' => '056 8831666',
            'address_1' => 'BALLYNEVIN',
            'address_2' => 'CULLOHILL, PORTLAO',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1183,
            'name' => 'TONY HEUSTON',
            'email' => null,
            'phone' => '056 68636',
            'mobile_1' => '087 2357655',
            'mobile_2' => '056 67076',
            'address_1' => 'CASTLEGARDENS',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1184,
            'name' => 'LINDA O TOOLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2286537',
            'mobile_2' => '',
            'address_1' => '19 MOONCOIN HEIGHTS',
            'address_2' => 'MOONCOIN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1185,
            'name' => 'MICHAEL MURPHY',
            'email' => null,
            'phone' => '056 7767002',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KEATINGSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1186,
            'name' => 'J MEAGHER',
            'email' => null,
            'phone' => '056 32578',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GRAIGUESWOOD',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1187,
            'name' => 'ENDA CARRIGAN',
            'email' => null,
            'phone' => '056 7751314',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYBOUGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1188,
            'name' => 'M CONNOLLY',
            'email' => null,
            'phone' => '056 41805',
            'mobile_1' => '',
            'mobile_2' => '056 41419',
            'address_1' => '3 DEERPARK',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1189,
            'name' => 'S DORAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6238694',
            'mobile_2' => '',
            'address_1' => 'APT 1',
            'address_2' => '21 VICAR STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1190,
            'name' => 'MICHAEL O BRIEN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6620843',
            'mobile_2' => '',
            'address_1' => 'GLASSLACKEN',
            'address_2' => 'BUNCLODY',
            'city' => null,
            'state' => 'CO WEXFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1191,
            'name' => 'CATHERINA BEALE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6197332',
            'mobile_2' => '056 7763274',
            'address_1' => '45 WALKIN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1192,
            'name' => 'Catherine FLYNN',
            'email' => null,
            'phone' => '056 7762680',
            'mobile_1' => '087 2490184',
            'mobile_2' => '',
            'address_1' => '4 UPPER PATRICK ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1193,
            'name' => 'ANDREW MAGAN',
            'email' => null,
            'phone' => '056 7726744',
            'mobile_1' => '087 2331548',
            'mobile_2' => '056 7772616',
            'address_1' => 'BLANCHVILLESKILL',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1194,
            'name' => 'EDMUND GALAVAN',
            'email' => null,
            'phone' => '051 423643',
            'mobile_1' => '086 8228167',
            'mobile_2' => '',
            'address_1' => 'TINCARANE',
            'address_2' => 'THE ROWER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1195,
            'name' => 'DAVID BUCKLEY',
            'email' => null,
            'phone' => '056 7769633',
            'mobile_1' => '086 8260350',
            'mobile_2' => '',
            'address_1' => 'LEYNAN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1196,
            'name' => 'PAUL CASEY',
            'email' => null,
            'phone' => '056 67808',
            'mobile_1' => '086 8510143',
            'mobile_2' => '',
            'address_1' => 'BALLYFOYLE',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1197,
            'name' => 'BRIAN KELLY',
            'email' => null,
            'phone' => '059 9773551',
            'mobile_1' => '-',
            'mobile_2' => '',
            'address_1' => 'FENAGH RD.',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1198,
            'name' => 'EDDIE BYRNE',
            'email' => null,
            'phone' => '0503 73518',
            'mobile_1' => '087 2899535',
            'mobile_2' => '',
            'address_1' => 'COURNELLAN',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1199,
            'name' => 'MICHAEL BURKE',
            'email' => null,
            'phone' => '056 25596',
            'mobile_1' => '086 2596141',
            'mobile_2' => '',
            'address_1' => 'CAPPASS',
            'address_2' => 'CANNAFAHY',
            'city' => null,
            'state' => 'CALLAN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1200,
            'name' => 'JOHN FAHY',
            'email' => null,
            'phone' => '056 7764867',
            'mobile_1' => '353870512565',
            'mobile_2' => '',
            'address_1' => '15 NEWPARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1201,
            'name' => 'MARTINA PEMBROKE',
            'email' => null,
            'phone' => '056 7721710',
            'mobile_1' => '087 2843965',
            'mobile_2' => '056 7761734',
            'address_1' => 'GRANGES ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1202,
            'name' => 'FRED AGAR',
            'email' => null,
            'phone' => '056 4442295',
            'mobile_1' => '087 6618873',
            'mobile_2' => '056 4442710',
            'address_1' => 'CRUTTENCLOUGH',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1203,
            'name' => 'DAVE RYAN',
            'email' => null,
            'phone' => '056 23592',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '58 HEBRON PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1204,
            'name' => 'MARTIN HOROHAN',
            'email' => null,
            'phone' => '056 7769629',
            'mobile_1' => '087 9704864',
            'mobile_2' => '056 7723355',
            'address_1' => 'GREAT OAK',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1205,
            'name' => 'JOHN SHEEHAN',
            'email' => null,
            'phone' => '056 28263',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KNOCK MHUIRE',
            'address_2' => 'STONYFORD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1206,
            'name' => 'SOPHIA SHIRLEY',
            'email' => null,
            'phone' => '056 4441062',
            'mobile_1' => '',
            'mobile_2' => '056 7761544',
            'address_1' => '11 DONAGUILE HEIGHTS',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1207,
            'name' => 'TOM NOLAN',
            'email' => null,
            'phone' => '056 67777',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CORBETSTOWN',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1208,
            'name' => 'GERALDINE HARRISON',
            'email' => null,
            'phone' => '056 7724637',
            'mobile_1' => '087 6843797',
            'mobile_2' => '056 7725213',
            'address_1' => 'JERPOINT WEST',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1209,
            'name' => 'ALMA CARROLL',
            'email' => null,
            'phone' => '056 31649',
            'mobile_1' => '086 1628811',
            'mobile_2' => '056 52666',
            'address_1' => 'FOULKSCOURT',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1210,
            'name' => 'SHAY KELLY',
            'email' => null,
            'phone' => '056 21665',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '2 HALTIGAN TERRACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1211,
            'name' => 'LINDA MC MULLEN',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 8424083',
            'mobile_2' => '',
            'address_1' => '8 FREREN COURT',
            'address_2' => 'ABBY ST.',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1212,
            'name' => 'MARTIN CLEERE',
            'email' => null,
            'phone' => '056 70443',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '2 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1213,
            'name' => ' BOLGER',
            'email' => null,
            'phone' => '056 65740',
            'mobile_1' => '087 6491398',
            'mobile_2' => '',
            'address_1' => '2 POCOCKE LOWER',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1214,
            'name' => 'PATRICK YOUNG',
            'email' => null,
            'phone' => '056 7770506',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '79 THE FAIRWAYS',
            'address_2' => 'OLD GOLFLINKS RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1215,
            'name' => 'CHRISS LACEY',
            'email' => null,
            'phone' => '056 8833390',
            'mobile_1' => '353877597425',
            'mobile_2' => '',
            'address_1' => 'FINNAN',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1216,
            'name' => 'MAI LACEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6493822',
            'mobile_2' => '',
            'address_1' => '1 Mayfield',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1217,
            'name' => 'MERVYN BRADLEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6172310',
            'mobile_2' => '',
            'address_1' => 'GURTEEN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1218,
            'name' => 'ANGELA HEALY',
            'email' => null,
            'phone' => '056 8831682',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '36 ASSUMPTION PLACE',
            'address_2' => 'URLINGFORD VIA THU',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1219,
            'name' => 'PATRICK MURPHY',
            'email' => null,
            'phone' => '056 7726100',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLATOGHER',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1220,
            'name' => 'MICHAEL KEALY',
            'email' => null,
            'phone' => '052 54716',
            'mobile_1' => '086 4084275',
            'mobile_2' => '',
            'address_1' => 'BALLINTAGGART',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1221,
            'name' => 'MICHAEL MALONE',
            'email' => null,
            'phone' => '056 4442744',
            'mobile_1' => '087 2956622',
            'mobile_2' => '61839',
            'address_1' => 'UPR COOLBAWN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => '',
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 16738,
            'name' => 'Yvonne Guilfoyle',
            'email' => '',
            'phone' => '',
            'mobile_1' => '353879578487',
            'mobile_2' => NULL,
            'address_1' => '61 Chaplfield',
            'address_2' => 'Urlingford',
            'city' => '',
            'state' => 'Co.Kilkenny',
            'country' => 'Ireland',
            'eir_code' => '',
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1222,
            'name' => 'NEIL YEARSLEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 4035550',
            'mobile_2' => '01 6064597',
            'address_1' => 'GRAGARA',
            'address_2' => 'JENKINSTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1223,
            'name' => 'BREDA KENNEDY',
            'email' => null,
            'phone' => '056 7767887',
            'mobile_1' => '087 9178011husb',
            'mobile_2' => '056 7796130',
            'address_1' => '30 GLENVALE',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1224,
            'name' => 'RICHARD STONE',
            'email' => null,
            'phone' => '056 8833576',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'OLDTOWN',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1225,
            'name' => 'GERARD O KEEFFE',
            'email' => null,
            'phone' => '056 7751104',
            'mobile_1' => '353862431282',
            'mobile_2' => '01 8155183',
            'address_1' => 'EL SHADDAI',
            'address_2' => 'PURCELLSINCH',
            'city' => null,
            'state' => 'DUBLIN RD KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1226,
            'name' => 'NICKY DUNNE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6655993',
            'mobile_2' => '',
            'address_1' => 'DANGAN ROAD',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1227,
            'name' => 'MAUREEN SLATTERY',
            'email' => null,
            'phone' => '056 7727183',
            'mobile_1' => '087 2658492',
            'mobile_2' => '',
            'address_1' => 'DANESFORT',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1228,
            'name' => 'PHILIP DENIEFFE',
            'email' => null,
            'phone' => '086 0894267',
            'mobile_1' => '087 6732585',
            'mobile_2' => '',
            'address_1' => 'TIMBEROE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1229,
            'name' => 'SARAH WALSH',
            'email' => null,
            'phone' => '056 7725503',
            'mobile_1' => '086 3188788',
            'mobile_2' => '',
            'address_1' => '10 SKEAUGH',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1230,
            'name' => 'PATRICK CURRY',
            'email' => null,
            'phone' => '056 4441465',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '48 MARYVILLE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1231,
            'name' => 'ANNIE FEEHAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6743199',
            'mobile_2' => '',
            'address_1' => '20 ASSUMPTION PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1232,
            'name' => 'MICHAEL MARUM',
            'email' => null,
            'phone' => '0502 33527',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CHAPEL STREET',
            'address_2' => 'BALLINAKILL',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1233,
            'name' => 'Tony & Maura Joyce',
            'email' => ' tjoyce@iol.ie',
            'phone' => '056 7765617',
            'mobile_1' => '353879483245',
            'mobile_2' => '',
            'address_1' => 'TALBOTS INCH',
            'address_2' => 'FRESHFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1234,
            'name' => 'JOAN THORNTON',
            'email' => null,
            'phone' => '051 895949',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ST ANNES TERRACE',
            'address_2' => 'MOONCOIN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1235,
            'name' => 'EDDIE HENNESSY',
            'email' => null,
            'phone' => '69169',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WALLSTOWN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1236,
            'name' => 'TERESA BRENNAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9634193dami',
            'mobile_2' => '056 7763081',
            'address_1' => 'KILKEASY',
            'address_2' => 'KNOCKTOPHER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1237,
            'name' => 'WJ O BRENNAN',
            'email' => null,
            'phone' => '056 7769459',
            'mobile_1' => '087 9892791',
            'mobile_2' => '',
            'address_1' => 'POTTLERATH',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1238,
            'name' => 'MICHAEL HARDING',
            'email' => null,
            'phone' => '056 7767675',
            'mobile_1' => '086 2610948',
            'mobile_2' => '',
            'address_1' => 'ESKER',
            'address_2' => 'JENKINSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1239,
            'name' => 'PETER WHELAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6145834',
            'mobile_2' => '059 9724106',
            'address_1' => 'BARROWLANE',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1240,
            'name' => 'DENIS SAVAGE',
            'email' => null,
            'phone' => '059 9775508',
            'mobile_1' => '087 2595281',
            'mobile_2' => '',
            'address_1' => 'COOLNABRONE',
            'address_2' => 'SKEOGHVASTEEN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1241,
            'name' => 'James O LEARY',
            'email' => null,
            'phone' => '056 7728334',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 STONEYFORD',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1242,
            'name' => 'NICKY BRETT',
            'email' => null,
            'phone' => '056 62353',
            'mobile_1' => '086 8363841',
            'mobile_2' => '',
            'address_1' => '3 WESTFIELD',
            'address_2' => 'OUTRATH RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1243,
            'name' => 'EDDIE HOYNE',
            'email' => null,
            'phone' => '056 7769169',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WALLSTOWN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1244,
            'name' => 'JOHN JOE COSTIGAN',
            'email' => null,
            'phone' => '059 9726217',
            'mobile_1' => '087 9635615',
            'mobile_2' => '',
            'address_1' => 'CASTLEWARREN',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1245,
            'name' => 'ANNASTATIA BOLGER',
            'email' => null,
            'phone' => '059 9724720',
            'mobile_1' => '',
            'mobile_2' => '056 7771222',
            'address_1' => 'BRANDONDALE',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1246,
            'name' => 'SHEILA LAWLOR',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2647786',
            'mobile_2' => '',
            'address_1' => 'BONEYARROW',
            'address_2' => 'CLOGH',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1247,
            'name' => 'JAMES WALTON',
            'email' => null,
            'phone' => '056 69108',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'REIMEEN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1248,
            'name' => 'JOHN THORNTON',
            'email' => null,
            'phone' => '056 7725951',
            'mobile_1' => '086 8582636',
            'mobile_2' => '',
            'address_1' => '41 RICE PARK',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1249,
            'name' => 'BOBBY DOWLING',
            'email' => null,
            'phone' => '056 7763783',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '304 JOHNSWELL RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1250,
            'name' => 'JOHN MEANEY',
            'email' => null,
            'phone' => '056 7765067',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SEONLIN',
            'address_2' => 'KINGSLAND',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1251,
            'name' => 'ASSUMPTA MARTIN',
            'email' => null,
            'phone' => '056 8832120',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '27 WOODVIEW',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1252,
            'name' => 'GEORGE CARPENDALE',
            'email' => null,
            'phone' => '056 7722344',
            'mobile_1' => '',
            'mobile_2' => '056 7775375',
            'address_1' => 'LAVISTOWN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1253,
            'name' => 'DENIS MC GRATH',
            'email' => null,
            'phone' => '052 53246',
            'mobile_1' => '087 6129890',
            'mobile_2' => '',
            'address_1' => 'BRIARSFIELD',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1254,
            'name' => 'FRANK FITZPATRICK',
            'email' => null,
            'phone' => '056 7770796',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NO 1 FR ALBERT GARDENS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1255,
            'name' => 'MICHAEL BAMBRICK',
            'email' => null,
            'phone' => '056 7751000',
            'mobile_1' => '086 2616288',
            'mobile_2' => '',
            'address_1' => 'TROYSGATE HOUSE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1256,
            'name' => 'WILLIAM DEMPSEY',
            'email' => null,
            'phone' => '056 7724919',
            'mobile_1' => '087 2580408',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1257,
            'name' => 'BRIAN O SULLIVAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2229198',
            'mobile_2' => '',
            'address_1' => '17 BEECHLAWNS',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1258,
            'name' => 'KATHLEEN BARRY',
            'email' => null,
            'phone' => '0502 33346',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLONKING',
            'address_2' => 'ABBEYLEIX',
            'city' => null,
            'state' => 'CO. LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1259,
            'name' => 'PADDY BRENNAN',
            'email' => null,
            'phone' => '056 4442330',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'NEWHOUSE GLEN',
            'address_2' => 'MONEENROE',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1260,
            'name' => 'BILLY DWYER',
            'email' => null,
            'phone' => '056 4442651',
            'mobile_1' => '086 8108293',
            'mobile_2' => '',
            'address_1' => 'MASSFORD',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1261,
            'name' => 'NIALL HEADEN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8141682',
            'mobile_2' => '',
            'address_1' => 'GARRANTAGGART',
            'address_2' => 'ABBEYLEIX',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1262,
            'name' => 'PADDY KELLY',
            'email' => null,
            'phone' => '056 7727353',
            'mobile_1' => '086 2607354',
            'mobile_2' => '',
            'address_1' => 'NEWTOWN',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1263,
            'name' => 'MARY T KELLY',
            'email' => null,
            'phone' => '059 9775101',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILCRUIT',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1264,
            'name' => 'MICHAEL KENNEDY',
            'email' => null,
            'phone' => '056 7724340',
            'mobile_1' => '056 7724690',
            'mobile_2' => '',
            'address_1' => 'BUN NA COILLE',
            'address_2' => 'BROWNSBARN',
            'city' => null,
            'state' => 'THOMASTOWN',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1265,
            'name' => 'M DUNNE',
            'email' => null,
            'phone' => '056 21708',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '11 OLD GOLFLINKS RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1266,
            'name' => 'GERRY BUCKLEY',
            'email' => null,
            'phone' => '056 7763724',
            'mobile_1' => '086 1642878',
            'mobile_2' => '',
            'address_1' => '2 JOHNSWELL RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1267,
            'name' => 'COLETTE RYAN',
            'email' => null,
            'phone' => '051 895993',
            'mobile_1' => '087 6745377',
            'mobile_2' => '087 4150630',
            'address_1' => 'MOONCOIN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1268,
            'name' => 'HARRY RYAN',
            'email' => null,
            'phone' => '056 65631',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGGINSTOWN',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1269,
            'name' => 'MALCOLM SHARP',
            'email' => null,
            'phone' => '052 53243',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MOHOBER',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1270,
            'name' => 'LIAM NOLAN',
            'email' => null,
            'phone' => '056 7793370',
            'mobile_1' => '085 7371523',
            'mobile_2' => '',
            'address_1' => 'COPPENAGH',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1271,
            'name' => 'TJ DOYLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6546877',
            'mobile_2' => '',
            'address_1' => 'Apt 2',
            'address_2' => 'The Stores',
            'city' => null,
            'state' => 'Goresbridge',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1272,
            'name' => 'MARTIN DALTON',
            'email' => null,
            'phone' => '05997 75543',
            'mobile_1' => '087 9079502',
            'mobile_2' => '',
            'address_1' => 'BALLINKILLEN',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1273,
            'name' => 'DEREK REDMOND',
            'email' => null,
            'phone' => '059173531',
            'mobile_1' => '087 6490164',
            'mobile_2' => '',
            'address_1' => 'RATHGERAN',
            'address_2' => 'BALLYMURPHY',
            'city' => null,
            'state' => 'BORRIS CO. CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1274,
            'name' => 'DONAL BYRNE',
            'email' => null,
            'phone' => '056 7755033',
            'mobile_1' => '086 8468053',
            'mobile_2' => '',
            'address_1' => 'LOWER BRIDGE ST',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1275,
            'name' => 'BERNIE QUINN',
            'email' => null,
            'phone' => '056 8833442',
            'mobile_1' => '087 8042196',
            'mobile_2' => '',
            'address_1' => 'LISDOWNEY',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1276,
            'name' => 'THOMAS O NEILL',
            'email' => null,
            'phone' => '056 4442393',
            'mobile_1' => '087 7674727',
            'mobile_2' => '',
            'address_1' => 'THE ARCHES',
            'address_2' => 'NEW RD',
            'city' => null,
            'state' => 'MONEENROE',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1277,
            'name' => 'LIAM KEANE',
            'email' => null,
            'phone' => '056 7769630',
            'mobile_1' => '087 9842457',
            'mobile_2' => '056 7763950',
            'address_1' => 'BALLYCUDDIHY',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1278,
            'name' => 'JOHN MINION',
            'email' => null,
            'phone' => '059 9137685',
            'mobile_1' => '087 2506098',
            'mobile_2' => '059 9143224',
            'address_1' => 'CLOGRENNANE',
            'address_2' => 'CARLOW',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1279,
            'name' => 'MARY MULDOWNEY O SHEA',
            'email' => null,
            'phone' => '052 54428',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GRAWN',
            'address_2' => 'BALLINGARRY',
            'city' => null,
            'state' => 'THURLES CO TIPP',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1280,
            'name' => 'MICHAEL RYAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 3153582',
            'mobile_2' => '',
            'address_1' => '17 THE RING',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1281,
            'name' => 'TONY DOHERTY',
            'email' => null,
            'phone' => '056 28155',
            'mobile_1' => '087 6401647',
            'mobile_2' => '',
            'address_1' => 'HAWTHORN HOUSE',
            'address_2' => 'ENNISNAG',
            'city' => null,
            'state' => 'STONEYFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1282,
            'name' => 'MICHAEL BUTLER',
            'email' => null,
            'phone' => '056 7767755',
            'mobile_1' => '086 3853081',
            'mobile_2' => '',
            'address_1' => 'CLOPOOK',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1283,
            'name' => 'TINA WALSH',
            'email' => null,
            'phone' => '056 7767583',
            'mobile_1' => '086 2584989',
            'mobile_2' => '0567767622',
            'address_1' => 'THREECASTLES',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1284,
            'name' => 'PAT GLEESON',
            'email' => null,
            'phone' => '056 7722847',
            'mobile_1' => '086 2577311',
            'mobile_2' => '',
            'address_1' => '33 SHANDON PARK',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1285,
            'name' => 'ANDREAS OSWALD',
            'email' => null,
            'phone' => '052 53492',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MODESHILL',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1286,
            'name' => 'AILISH WALSH',
            'email' => null,
            'phone' => '059 9726097',
            'mobile_1' => '087 7651000',
            'mobile_2' => '086 8248448',
            'address_1' => 'ARBOUR BREEZE',
            'address_2' => 'DONINGA PAULSTOWN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1287,
            'name' => 'MICHAEL DORAN',
            'email' => null,
            'phone' => '056 7727549',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '14 MARION PLACE',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1288,
            'name' => 'ORLA HUGHES',
            'email' => null,
            'phone' => '056 7726562',
            'mobile_1' => '',
            'mobile_2' => '056 7722042',
            'address_1' => 'BRICANA',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1289,
            'name' => 'ELIZABETH LOOBY',
            'email' => null,
            'phone' => '056 31404',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUBLIN RD',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1290,
            'name' => 'BRIAN KELLY',
            'email' => null,
            'phone' => '056 7759744',
            'mobile_1' => '086 3000237',
            'mobile_2' => '',
            'address_1' => 'BALLASALLA',
            'address_2' => 'JOHNSWELL',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1291,
            'name' => 'MARGARET CANNING',
            'email' => null,
            'phone' => '059 9775221',
            'mobile_1' => '086 2363829',
            'mobile_2' => '',
            'address_1' => 'BARRACORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1292,
            'name' => 'DAVID MORRIS',
            'email' => null,
            'phone' => '056 7763291',
            'mobile_1' => '086 1617634',
            'mobile_2' => '',
            'address_1' => '147 WALKIN ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1293,
            'name' => 'VERA DOWLING',
            'email' => null,
            'phone' => '056 7771001',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '6 ST TERESA TCE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1294,
            'name' => ' STYLE BOUTIQUE',
            'email' => null,
            'phone' => '056 52481',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'HIGH STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1295,
            'name' => 'iMARY DOYLE',
            'email' => null,
            'phone' => '056 64190',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FIRHOUSE',
            'address_2' => 'GROVINE EAST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1296,
            'name' => 'TOM READE',
            'email' => null,
            'phone' => '056 7771730',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '3 LAUREL DRIVE',
            'address_2' => 'LOUGHBOY',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1297,
            'name' => 'CONAN CONDON',
            'email' => null,
            'phone' => '059 9775590',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GORESBRIDGE',
            'address_2' => 'CO,. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1298,
            'name' => 'COLIN CODD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL RD',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1299,
            'name' => 'THOMAS COYNE',
            'email' => null,
            'phone' => '056 7722050',
            'mobile_1' => '087 7767514',
            'mobile_2' => '',
            'address_1' => '1 LARCHFIELD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1300,
            'name' => 'BRIAN O DRISCOLL',
            'email' => null,
            'phone' => '056 7752089',
            'mobile_1' => '086 8895190',
            'mobile_2' => '',
            'address_1' => '5 COACH ROAD',
            'address_2' => 'DEAN STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1301,
            'name' => 'DAPHNE HUNT',
            'email' => null,
            'phone' => '056 7726343',
            'mobile_1' => '087 6332080',
            'mobile_2' => '0503 44433',
            'address_1' => 'SCART',
            'address_2' => 'DUNGARVAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1302,
            'name' => '1 O REILLY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8481484',
            'mobile_2' => '',
            'address_1' => '32 AYLESBURY',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1303,
            'name' => 'SHARON KEYES',
            'email' => null,
            'phone' => '056 8833816',
            'mobile_1' => '086 8239712',
            'mobile_2' => '',
            'address_1' => 'KNOCKMANNON',
            'address_2' => 'LISDOWNEY',
            'city' => null,
            'state' => 'BALLYRAGGET',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1304,
            'name' => 'TREVOR KIELY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2985906',
            'mobile_2' => '',
            'address_1' => '6 ABBEYBRIDGE',
            'address_2' => 'DEAN STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1305,
            'name' => 'MARTIN MEANEY',
            'email' => null,
            'phone' => '056 4443187',
            'mobile_1' => '086 6023199',
            'mobile_2' => '',
            'address_1' => '59 COON EAST',
            'address_2' => 'BILBOA',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1306,
            'name' => 'MARTIN RYAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2919306',
            'mobile_2' => '056 7761200',
            'address_1' => '20 MELVILLE HEIGHTS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1307,
            'name' => 'THOMAS HUFF',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9665019',
            'mobile_2' => '',
            'address_1' => '53 WOODLAWN PARK',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1308,
            'name' => 'PAT KELLY',
            'email' => null,
            'phone' => '056 40079',
            'mobile_1' => '',
            'mobile_2' => '056 40071',
            'address_1' => 'KILKENNY RD',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1309,
            'name' => 'FRANK WILLIAMS',
            'email' => null,
            'phone' => '056 68190',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CARRICKMERLIN',
            'address_2' => 'HUGGINSTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1310,
            'name' => 'Betty TOM LENNON',
            'email' => null,
            'phone' => '056 8833548',
            'mobile_1' => '353876843307',
            'mobile_2' => '',
            'address_1' => 'BALLYCONRA',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1311,
            'name' => 'PEARSE BOYLE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3015589',
            'mobile_2' => '',
            'address_1' => '1 FREREN COURT',
            'address_2' => 'ABBEY STREET',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1312,
            'name' => 'GERALDINE MULROONEY',
            'email' => null,
            'phone' => '056 7769246',
            'mobile_1' => '0868078961',
            'mobile_2' => '',
            'address_1' => 'BALLYKEEFFE',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1313,
            'name' => 'KATHLEEN HEFFERNAN',
            'email' => null,
            'phone' => '056 41076',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'AGHAMUCKY',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1314,
            'name' => 'JOE RYAN',
            'email' => null,
            'phone' => '052 53324',
            'mobile_1' => ' 086-8366049',
            'mobile_2' => '',
            'address_1' => 'KYLEADOHER',
            'address_2' => 'MULLINAHONE THURLE',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1315,
            'name' => 'JANE HOGAN',
            'email' => null,
            'phone' => '056 24426',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CARRICKMOURNE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1316,
            'name' => 'MARY T GLEESON',
            'email' => null,
            'phone' => '0503 73754',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'FERHILL KILCUMNEY',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1317,
            'name' => 'JUSTIN RING',
            'email' => null,
            'phone' => '056 4441242',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRACK ST',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1318,
            'name' => 'JOHN DOYLE',
            'email' => null,
            'phone' => '059 9723617',
            'mobile_1' => '086 8365981',
            'mobile_2' => '056 7771480 URS',
            'address_1' => 'TINAPARK',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1319,
            'name' => 'PATRICK BYRNE',
            'email' => null,
            'phone' => '056 4441675',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRACK HILL',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1320,
            'name' => 'KIERAN PHELAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3005945',
            'mobile_2' => '',
            'address_1' => '27 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1321,
            'name' => 'CHRIS HARDING',
            'email' => null,
            'phone' => '056 7763439',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CELLARSTOWN',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1322,
            'name' => 'SEAMUS WALPOLE',
            'email' => null,
            'phone' => '056 7727593',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'STATION RD',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1323,
            'name' => 'EDDIE CONNERY',
            'email' => null,
            'phone' => '056 8833562',
            'mobile_1' => '086 1965002',
            'mobile_2' => '',
            'address_1' => 'ARCHVIEW  PARKSGROVE',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1324,
            'name' => 'PADDY HOROHAN',
            'email' => null,
            'phone' => '056 7761848',
            'mobile_1' => '086 2571424',
            'mobile_2' => '',
            'address_1' => '31 OLD CALLAN RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1325,
            'name' => 'ANN MC HUGH',
            'email' => null,
            'phone' => '056 21797',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RADESTOWN',
            'address_2' => 'WATERWORKS',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1326,
            'name' => 'KATHLEEN COSTIGAN',
            'email' => null,
            'phone' => '059 9726233',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYGURTEEN',
            'address_2' => 'CASTLEWARREN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1327,
            'name' => 'RICHARD MULLALLY',
            'email' => null,
            'phone' => '056 4441198',
            'mobile_1' => '353876274330',
            'mobile_2' => '',
            'address_1' => 'THE CASTLE ARDRA',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1328,
            'name' => ' KALIDINDI',
            'email' => null,
            'phone' => '056 70242',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '67 BEECHLAWNS',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1329,
            'name' => 'BERNIE BANNON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2570780',
            'mobile_2' => '',
            'address_1' => 'BONNETTSTOWN',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1330,
            'name' => 'JIMMY PHELAN',
            'email' => null,
            'phone' => '056 7763445',
            'mobile_1' => '087 7971591',
            'mobile_2' => '',
            'address_1' => 'GARINGREEN',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => ' KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1331,
            'name' => 'SEAMUS RONAN',
            'email' => null,
            'phone' => '056 7769402',
            'mobile_1' => '087 6440450',
            'mobile_2' => '',
            'address_1' => 'OLDTOWN',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1332,
            'name' => 'JAMES MEANEY',
            'email' => null,
            'phone' => '051 423733',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CULLAWN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1333,
            'name' => 'ENDA CANTWELL',
            'email' => null,
            'phone' => '056 7751019',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '13 ST MAULS',
            'address_2' => 'NEW ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1334,
            'name' => 'ADRIENNE WATSON',
            'email' => null,
            'phone' => '0',
            'mobile_1' => '087 6319580',
            'mobile_2' => '',
            'address_1' => '3 TOGHER LAWNS',
            'address_2' => 'URLINGFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1335,
            'name' => 'MICHAEL BURKE',
            'email' => null,
            'phone' => '056 8832169',
            'mobile_1' => '087 9763717',
            'mobile_2' => '',
            'address_1' => '43 WOODVIEW',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1336,
            'name' => 'TOM QUIRKE',
            'email' => null,
            'phone' => '056 43023',
            'mobile_1' => '087 9755558',
            'mobile_2' => '',
            'address_1' => 'SESKINREA',
            'address_2' => 'OLD LEIGHLIN',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1337,
            'name' => 'DANNY MEANEY',
            'email' => null,
            'phone' => '056 7758542',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLODIAGH',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1338,
            'name' => 'DOUGLAS MASSEY',
            'email' => null,
            'phone' => '056 69592',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILMANAGH',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1339,
            'name' => 'CATHERINE RAINSFORD',
            'email' => null,
            'phone' => '056 4441423',
            'mobile_1' => '087 6292819',
            'mobile_2' => '',
            'address_1' => '22 HILLSIDE VIEW',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1340,
            'name' => 'MARTIN CURRAN',
            'email' => null,
            'phone' => '056 71125',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CELLARSTOWN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1341,
            'name' => 'TRIONA HARDING',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6333250',
            'mobile_2' => '',
            'address_1' => 'STONEY RD',
            'address_2' => 'LOON',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1342,
            'name' => 'JOHN O KEEFFE',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '087 2574735',
            'mobile_2' => '018377514',
            'address_1' => 'THE SQUARE',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1343,
            'name' => 'JAMES TREACY',
            'email' => null,
            'phone' => '056 4442738',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CHAPEL LANE',
            'address_2' => 'MONEENROE',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1344,
            'name' => ' MOBILE CONNECTIONS',
            'email' => null,
            'phone' => '056 23000',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'ROSE INN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1345,
            'name' => 'EDWARD BUGGY',
            'email' => null,
            'phone' => '056 42867',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DOONANE',
            'address_2' => 'CRETTYARD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1346,
            'name' => 'MARY O HARA',
            'email' => null,
            'phone' => '0502 36636',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUMORE',
            'address_2' => 'DURROW',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1347,
            'name' => 'HELEN BAMBRICK',
            'email' => null,
            'phone' => '056 7769958',
            'mobile_1' => '087 7569234',
            'mobile_2' => '',
            'address_1' => 'MOUNTGALE',
            'address_2' => 'RATHMOYLE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1348,
            'name' => 'GERARD LANNON',
            'email' => null,
            'phone' => '056 54129',
            'mobile_1' => '087 6109820',
            'mobile_2' => '056 24308',
            'address_1' => '26 DANGAN TCE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1349,
            'name' => 'PAT BRENNAN',
            'email' => null,
            'phone' => '056 8833357',
            'mobile_1' => '',
            'mobile_2' => '051 640194',
            'address_1' => '24 BROOKFIELD',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1350,
            'name' => 'FRANK SWEETNAM',
            'email' => null,
            'phone' => '052 54129',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE ISLANDS',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1351,
            'name' => 'FELICITY GAY',
            'email' => null,
            'phone' => '056 7754909',
            'mobile_1' => '086 2524455',
            'mobile_2' => '',
            'address_1' => 'LEGAN COTTAGE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1352,
            'name' => 'PAT MURPHY',
            'email' => null,
            'phone' => '056 7759882',
            'mobile_1' => '086 2500417',
            'mobile_2' => '',
            'address_1' => 'JOHNSWELL',
            'address_2' => 'CO. KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1353,
            'name' => 'PAUL BURKE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8743257',
            'mobile_2' => '051 885371',
            'address_1' => 'PROLOGUE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1354,
            'name' => 'Seamus & Mary Dowling',
            'email' => null,
            'phone' => '056 4440033',
            'mobile_1' => '087 2720157',
            'mobile_2' => '056 41652',
            'address_1' => '6 DONAGUILE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1355,
            'name' => 'JOHN COMERFORD',
            'email' => null,
            'phone' => '056 43242',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLRAHEEN',
            'address_2' => 'COOLCULLEN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1356,
            'name' => 'JOSEPH DONNELLY',
            'email' => null,
            'phone' => '056 7769976',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'PICKETTS TOWN',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1357,
            'name' => 'CATHERINE WHELAN',
            'email' => null,
            'phone' => '056 7726530',
            'mobile_1' => '',
            'mobile_2' => '056 7763137',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1358,
            'name' => 'TONY O HARA',
            'email' => null,
            'phone' => '056 8833293',
            'mobile_1' => '087 2631281',
            'mobile_2' => '',
            'address_1' => 'AHARNEY',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1359,
            'name' => 'NOREEN MAHER',
            'email' => null,
            'phone' => '056 59008',
            'mobile_1' => '086 8223843',
            'mobile_2' => '',
            'address_1' => 'KILKIERAN',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1360,
            'name' => 'JAMES MEANEY',
            'email' => null,
            'phone' => '051 423823',
            'mobile_1' => '087 7502283',
            'mobile_2' => '',
            'address_1' => 'BALLINABEARNA',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1361,
            'name' => 'MICHAEL DAVIN',
            'email' => null,
            'phone' => '056 7764340',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '37 ST FRANCIS TCE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1362,
            'name' => 'JAMES BYRNE',
            'email' => null,
            'phone' => '056 7708718',
            'mobile_1' => '086 8360223',
            'mobile_2' => '',
            'address_1' => 'COOLBRICKEN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1363,
            'name' => 'GERRY JORDAN',
            'email' => null,
            'phone' => '059 9775743',
            'mobile_1' => '086 0707094',
            'mobile_2' => '0503 75317',
            'address_1' => '35 BARROWMOUNT DRIVE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1364,
            'name' => 'KAREN WILLIAMS',
            'email' => null,
            'phone' => '059 9722905',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILREE STREET',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1365,
            'name' => 'CHRISTOPHE KERWICK',
            'email' => null,
            'phone' => '056 7763563',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '15 SYCAMORE DRIVE',
            'address_2' => 'ARCHERS ST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1366,
            'name' => 'JIM O NEILL',
            'email' => null,
            'phone' => '056 7721985',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE RACECOURSE',
            'address_2' => 'KELLS ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1367,
            'name' => 'MICHAEL DURNAY',
            'email' => null,
            'phone' => '056 54424',
            'mobile_1' => '',
            'mobile_2' => '24690',
            'address_1' => 'GRENNAN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1368,
            'name' => 'NORA GLEESON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 7658445',
            'mobile_2' => '056 7752208',
            'address_1' => 'POTTLERATH',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1369,
            'name' => 'EDMOND DREELING',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6384617',
            'mobile_2' => '',
            'address_1' => 'BALLINABOOLA CROSS',
            'address_2' => 'MADDOXTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1370,
            'name' => 'RICKY PROCTOR',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 8683154',
            'mobile_2' => '',
            'address_1' => 'MILL RD',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1371,
            'name' => 'JOHN FOLEY',
            'email' => null,
            'phone' => '059 9775648',
            'mobile_1' => '086 8234063',
            'mobile_2' => '',
            'address_1' => 'POLLAGH',
            'address_2' => 'SKEOGHVASTEEN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1372,
            'name' => 'JIM O CONNELL',
            'email' => null,
            'phone' => '056 7724175',
            'mobile_1' => '087 2487615',
            'mobile_2' => '056 7754505',
            'address_1' => 'KNOCKANORE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1373,
            'name' => 'MICHAEL LAWLOR',
            'email' => null,
            'phone' => '056 7768655',
            'mobile_1' => '086 8134117',
            'mobile_2' => '',
            'address_1' => 'BALLYHALE',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1374,
            'name' => 'JEFF LYNCH',
            'email' => null,
            'phone' => '056 7725318',
            'mobile_1' => '086 8239991',
            'mobile_2' => '',
            'address_1' => 'GOLFLINKS RD',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1375,
            'name' => 'DERMOT PRENDERGAST',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8531742',
            'mobile_2' => '',
            'address_1' => 'KILMACSHANE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1376,
            'name' => 'NIALL HUGHES',
            'email' => null,
            'phone' => '056 28141',
            'mobile_1' => '353876569899',
            'mobile_2' => '',
            'address_1' => 'ENNISNAG HOUSE',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1377,
            'name' => 'Judith PARTRIDGE',
            'email' => null,
            'phone' => '056 7724524',
            'mobile_1' => '086 3952709',
            'mobile_2' => '',
            'address_1' => 'GRENNAN FARMHOUSE',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1378,
            'name' => 'JOHN DOWNEY',
            'email' => null,
            'phone' => '0502 33359',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BOLEYBAWN',
            'address_2' => 'BALLINAKILL',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1379,
            'name' => 'DAVID MC CORMACK',
            'email' => null,
            'phone' => '056 7723447',
            'mobile_1' => '087 6272818.',
            'mobile_2' => '',
            'address_1' => '26 CIRCULAR ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1380,
            'name' => 'TOMMY DAVITT',
            'email' => null,
            'phone' => '056 64442',
            'mobile_1' => '',
            'mobile_2' => '056 61021',
            'address_1' => '9 ASHFIELD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1381,
            'name' => 'TOMMY OWENS',
            'email' => null,
            'phone' => '056 61763',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 SYCAMORE DRIVE',
            'address_2' => 'ARDNORE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1382,
            'name' => 'JOHN O BRIEN',
            'email' => null,
            'phone' => '056 7724164',
            'mobile_1' => '087 2371227',
            'mobile_2' => '',
            'address_1' => 'DANGAN',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1383,
            'name' => 'ROBBIE COMERFORD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 6090857',
            'mobile_2' => '',
            'address_1' => 'THE CORN STORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1384,
            'name' => 'PAT MC DOWELL',
            'email' => null,
            'phone' => '056 59989',
            'mobile_1' => '',
            'mobile_2' => '056 65026',
            'address_1' => 'MUCKALEE',
            'address_2' => 'BALLYFOYLE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1385,
            'name' => 'MARTIN EGAN',
            'email' => null,
            'phone' => '056 7765990',
            'mobile_1' => '',
            'mobile_2' => '056 7721174',
            'address_1' => '9 ROTHE TERRACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1386,
            'name' => 'MARTHA LEAHY',
            'email' => null,
            'phone' => '056 7752079',
            'mobile_1' => '',
            'mobile_2' => '056 65404',
            'address_1' => '21 PINEWOOD AVE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1387,
            'name' => 'MARY HENNESSY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8043076',
            'mobile_2' => '',
            'address_1' => 'BARRAGHCORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1388,
            'name' => 'FRANK GARVAN',
            'email' => null,
            'phone' => '056 7769194',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYCALLAN',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1389,
            'name' => 'KAREN THATCHER',
            'email' => null,
            'phone' => '056 32967',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GORTEENMUCK',
            'address_2' => 'GATHABAWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1390,
            'name' => 'ELIZABETH CUMMINS',
            'email' => null,
            'phone' => '056 7727576',
            'mobile_1' => '086 8174000',
            'mobile_2' => '056 7765019',
            'address_1' => '1 HILLVIEW',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1391,
            'name' => 'WILLIAM DALTON',
            'email' => null,
            'phone' => '051 898300',
            'mobile_1' => '086 8167286',
            'mobile_2' => '',
            'address_1' => 'LISMATIGUE',
            'address_2' => 'KNOCKTOPHER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1392,
            'name' => 'BREDA BOLGER',
            'email' => null,
            'phone' => '0503 24192',
            'mobile_1' => '086 8740505',
            'mobile_2' => '',
            'address_1' => 'BARROW STREET',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1393,
            'name' => 'JENNIFER TREACY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '056 22927',
            'address_1' => '11 IRISHTOWN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1394,
            'name' => 'KEVIN MOLONEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8886840',
            'mobile_2' => '',
            'address_1' => 'BAUNTHA',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1395,
            'name' => 'AILEEN MAHER',
            'email' => null,
            'phone' => '052 54299',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLINTAGGART',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1396,
            'name' => 'ADRIAN MC HUGH',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6994920',
            'mobile_2' => '056 22034',
            'address_1' => '26 NEW ORCHARD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1397,
            'name' => 'JAMES SHERWOOD',
            'email' => null,
            'phone' => '056 4440181',
            'mobile_1' => '',
            'mobile_2' => '056 7723927',
            'address_1' => '15 MARYVILLE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1398,
            'name' => 'ANN RYAN',
            'email' => null,
            'phone' => '056 7729272',
            'mobile_1' => '087 6226477',
            'mobile_2' => '',
            'address_1' => 'BURNCHURCH',
            'address_2' => 'CUFFESGRANGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1399,
            'name' => ' CLASSIC FURNITURE',
            'email' => null,
            'phone' => '056 7763081',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GREEN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1400,
            'name' => 'JJ DONOHOE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2234780',
            'mobile_2' => '',
            'address_1' => 'APT 5 ASHURST',
            'address_2' => 'COLLEGE ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1401,
            'name' => 'SEAMUS MC GRATH',
            'email' => null,
            'phone' => '0503 75278',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GORESBRIDGE',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1402,
            'name' => 'CYRIL DOHENY',
            'email' => null,
            'phone' => '056 7761229',
            'mobile_1' => '087 9888282',
            'mobile_2' => '',
            'address_1' => '5 KILSHEELIN HGTS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1403,
            'name' => 'MARY PHELAN',
            'email' => null,
            'phone' => '0502 33355',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'IRONMILLS',
            'address_2' => 'BALLINAKILL',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1404,
            'name' => 'BREDA HICKMAN',
            'email' => null,
            'phone' => '056 52780',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '29 NEW ORCHARD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1405,
            'name' => 'MARTIN ROCHE',
            'email' => null,
            'phone' => '056 35998',
            'mobile_1' => '087 2729849',
            'mobile_2' => '',
            'address_1' => 'KNOCK NA MUCK',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1406,
            'name' => 'CATHERINE MURPHY',
            'email' => null,
            'phone' => '056 59882',
            'mobile_1' => '086 2500417',
            'mobile_2' => '',
            'address_1' => 'WELLVIEW',
            'address_2' => 'JOHNSWELL',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1407,
            'name' => ' O NEILL',
            'email' => null,
            'phone' => '056 26730',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CLOVER',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1408,
            'name' => 'CECIL STONE',
            'email' => null,
            'phone' => '056 41767',
            'mobile_1' => '353871333223',
            'mobile_2' => '056 41292',
            'address_1' => 'SKEHANA',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1409,
            'name' => 'LESLIE MC DONALD',
            'email' => null,
            'phone' => '056 26381',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'UPPER GRANGE',
            'address_2' => 'GOWRAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1410,
            'name' => 'TONY DROHAN',
            'email' => null,
            'phone' => '056 62764',
            'mobile_1' => '087 9761882',
            'mobile_2' => '',
            'address_1' => 'DAMMA UPPER',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1411,
            'name' => 'FRANK DEVITOR',
            'email' => null,
            'phone' => '059 9775269',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRAGHCORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1412,
            'name' => 'PETER MC GEEHAN',
            'email' => null,
            'phone' => '056 35280',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RATHCLEVIN',
            'address_2' => 'WOODSGIFT',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1413,
            'name' => 'DONAL WALSH',
            'email' => null,
            'phone' => '056 8831466',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RATHPOLEEN',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1414,
            'name' => 'MARY O MAHONY',
            'email' => null,
            'phone' => '056 4441487',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WILDFIELD',
            'address_2' => 'MUCKALEE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1415,
            'name' => 'M KAVANAGH',
            'email' => null,
            'phone' => '056 21835',
            'mobile_1' => '086 2679948',
            'mobile_2' => '056 22122',
            'address_1' => 'EIDERVILLE',
            'address_2' => 'RADESTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1416,
            'name' => 'PAUL BRENNAN',
            'email' => null,
            'phone' => '056 40978',
            'mobile_1' => '',
            'mobile_2' => '056 41775',
            'address_1' => '19 CHURCH AVENUE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1417,
            'name' => 'ALICE COMERFORD',
            'email' => null,
            'phone' => '056 33189',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '1 BROOKFIELD',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1418,
            'name' => 'PAUL RYAN',
            'email' => null,
            'phone' => '051 647224',
            'mobile_1' => '086 8713330',
            'mobile_2' => '',
            'address_1' => 'KILLAMERY',
            'address_2' => 'NINE MILE HOUSE',
            'city' => null,
            'state' => 'CARRICK ON SUIR',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1419,
            'name' => 'LIZ CONLON',
            'email' => null,
            'phone' => '056 7727422',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '4 WOODLAWN',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1420,
            'name' => 'JIM CORBETT',
            'email' => null,
            'phone' => '0567752396',
            'mobile_1' => '086 2135321',
            'mobile_2' => '',
            'address_1' => '1B GREENSHILL ROAD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'CO.  KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1421,
            'name' => 'PATRICK SUTTON',
            'email' => null,
            'phone' => '056 7758554',
            'mobile_1' => '087 9686596',
            'mobile_2' => '',
            'address_1' => 'THE SQUARE',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1422,
            'name' => 'JACKIE MEALLY',
            'email' => null,
            'phone' => '056 42808',
            'mobile_1' => '087 2783080',
            'mobile_2' => '',
            'address_1' => 'BAN OG',
            'address_2' => 'MONEENROE',
            'city' => null,
            'state' => 'CASTLECOMER CO KIL',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1423,
            'name' => 'SEAN DWYER',
            'email' => null,
            'phone' => '056 68717',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BAYSRATH',
            'address_2' => 'KNOCKTOPHER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1424,
            'name' => 'JOHN KAVANAGH',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6123827',
            'mobile_2' => '',
            'address_1' => '14 NEWPARK CLOSE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1425,
            'name' => 'LIDIA DITA',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8672665',
            'mobile_2' => '',
            'address_1' => '5 STEEPLE COURT',
            'address_2' => 'NEW BUILDING LANE',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1426,
            'name' => 'MARGARET GORMAN',
            'email' => null,
            'phone' => '056 32179',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BALLYRING',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1427,
            'name' => 'EDDIE DAVITT',
            'email' => null,
            'phone' => '056 40113',
            'mobile_1' => '087 6257982',
            'mobile_2' => '056 7764658',
            'address_1' => 'CLORINCA',
            'address_2' => 'MUCKALEE',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1428,
            'name' => 'J ROUGHAN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 9978366',
            'mobile_2' => '',
            'address_1' => '25 OAK HILL',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1429,
            'name' => 'OLIVER ROCHE',
            'email' => null,
            'phone' => '056 7728522',
            'mobile_1' => '086 3979745',
            'mobile_2' => '056 71000',
            'address_1' => 'DUNARAS LAWCUS',
            'address_2' => 'STONEYFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1430,
            'name' => 'LIAM BRENNAN',
            'email' => null,
            'phone' => '056 26621',
            'mobile_1' => '087 2562024',
            'mobile_2' => '',
            'address_1' => 'MOONHALL',
            'address_2' => 'CLIFDEN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1431,
            'name' => 'ANDREW HUGHES',
            'email' => null,
            'phone' => '056 7728670',
            'mobile_1' => '087 2646569',
            'mobile_2' => '',
            'address_1' => 'Viper',
            'address_2' => 'Kells',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1432,
            'name' => 'MICHAEL COMERFORD',
            'email' => null,
            'phone' => '056 43202',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLRAHEEN',
            'address_2' => 'COOLCULLEN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1433,
            'name' => 'JIM FITZGERALD',
            'email' => null,
            'phone' => '052 53344',
            'mobile_1' => '086 0633818',
            'mobile_2' => '',
            'address_1' => 'CLASHBEG',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1434,
            'name' => 'MARY DONNELLY',
            'email' => null,
            'phone' => '059 9775375',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'GORESBRIDGE',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1435,
            'name' => ' SULLIVAN',
            'email' => null,
            'phone' => '056 63182',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'LOCNAMON HOUSE',
            'address_2' => 'SION ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1436,
            'name' => 'MARIA DOYLE',
            'email' => null,
            'phone' => '059 9726320',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CHERRYLAWN',
            'address_2' => 'DONINGA',
            'city' => null,
            'state' => 'GORESBRIDGE',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1437,
            'name' => 'MARIAN ROCHE',
            'email' => null,
            'phone' => '056 65383',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '43 O LOUGHLIN COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1438,
            'name' => 'EMILY FITZPATRICK',
            'email' => null,
            'phone' => '056 7768797',
            'mobile_1' => '',
            'mobile_2' => '051 894005',
            'address_1' => 'BALLYHALE',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1439,
            'name' => 'JAMIE O DWYER',
            'email' => null,
            'phone' => '056 7763821',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '66 ST FIACRES PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1440,
            'name' => 'BRENDAN DOWNEY',
            'email' => null,
            'phone' => '056 40138',
            'mobile_1' => '086 8530444',
            'mobile_2' => '',
            'address_1' => 'KILTOWN',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1441,
            'name' => 'KATHLEEN SALMON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2041121',
            'mobile_2' => '',
            'address_1' => '7 KILKENNY RD',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1442,
            'name' => 'MAURA WALSH',
            'email' => null,
            'phone' => '0504 44400',
            'mobile_1' => '086 3429755',
            'mobile_2' => '',
            'address_1' => 'OLD SCHOOL HOUSE, POULDINE',
            'address_2' => 'HORSE & JOCKEY',
            'city' => null,
            'state' => 'THURLES CO TIPP',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1443,
            'name' => 'M IQBAL',
            'email' => null,
            'phone' => '056 56582',
            'mobile_1' => '087 2227181',
            'mobile_2' => '',
            'address_1' => '31 BEECHLAWNS',
            'address_2' => 'JOHNSWELL ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1444,
            'name' => 'PAUL O BRIEN',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8549923',
            'mobile_2' => '056 56622',
            'address_1' => 'TEACH BATA',
            'address_2' => ' KILLOUGHTERNANE',
            'city' => null,
            'state' => 'BORRIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1445,
            'name' => 'IRENE LAWLOR',
            'email' => null,
            'phone' => '056 4441086',
            'mobile_1' => '087 2976575',
            'mobile_2' => '056 7764308',
            'address_1' => '81 OAKHILL',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1446,
            'name' => 'VINCENT CODY',
            'email' => null,
            'phone' => '056 51789',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '104 PATRICK STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1447,
            'name' => 'NOREEN TIERNEY',
            'email' => null,
            'phone' => '056 7758632',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL ROAD',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1448,
            'name' => 'MAURICE CLANCY',
            'email' => null,
            'phone' => '056 43990',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CRUTTENCLOUGH',
            'address_2' => 'COON VIA CARLOW',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1449,
            'name' => 'PAUL BRENNAN',
            'email' => null,
            'phone' => '056 4441655',
            'mobile_1' => '087 6106574',
            'mobile_2' => '',
            'address_1' => '7 MARYVILLE',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1450,
            'name' => 'NOELLE PHELAN',
            'email' => null,
            'phone' => '056 31317',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'RATHLOGAN',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1451,
            'name' => 'DAVID HOLMES',
            'email' => null,
            'phone' => '0503 75553',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BARRACORE',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1452,
            'name' => 'WENDY BYRNE',
            'email' => null,
            'phone' => 'MOBILE',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '22 WALTONS GROVE',
            'address_2' => 'MOUNT JULIET',
            'city' => null,
            'state' => 'THOMASTOWN CO KILK',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1453,
            'name' => 'TOM DAVIS',
            'email' => null,
            'phone' => '056 28314',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'DUNAMAGGIN',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1454,
            'name' => 'HELEN TOBIN',
            'email' => null,
            'phone' => '056 7763296',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'THE PIKE BAR',
            'address_2' => 'LAVISTOWN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1455,
            'name' => 'PETER O DONNELL',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8240488',
            'mobile_2' => '',
            'address_1' => '1 Castlehill',
            'address_2' => 'Bennetsbridge Road',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1456,
            'name' => 'JOHN O BRIEN',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 8239519',
            'mobile_2' => '',
            'address_1' => 'HIGH ST',
            'address_2' => 'JOHNSTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1457,
            'name' => 'LIAM DELANEY',
            'email' => null,
            'phone' => '056 7769301',
            'mobile_1' => '087 2425371, 0876103664',
            'mobile_2' => '',
            'address_1' => 'UPPER DAMMA',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1458,
            'name' => 'MARY DREA',
            'email' => null,
            'phone' => '056 7726254',
            'mobile_1' => '086 9196435',
            'mobile_2' => '',
            'address_1' => 'BLANCHFIELDS PARK',
            'address_2' => 'CLIFDEN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1459,
            'name' => 'ELIZABETH DOWLING',
            'email' => null,
            'phone' => '056 33034',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MOATE PARK',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1460,
            'name' => 'ANDY BARCOE',
            'email' => null,
            'phone' => '056 58400',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'KILCROSS',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1461,
            'name' => 'ROBERT MIDLETON',
            'email' => null,
            'phone' => '056 70848',
            'mobile_1' => '087 2825975',
            'mobile_2' => '',
            'address_1' => '7 CASTLE VIEW',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1462,
            'name' => ' CAULFIELD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MAIN STREET',
            'address_2' => 'GORESBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1463,
            'name' => 'MICHAEL MULLALLY',
            'email' => null,
            'phone' => '056 4441025',
            'mobile_1' => '353874360253',
            'mobile_2' => '',
            'address_1' => 'FOREST COTTAGE',
            'address_2' => 'ARDRA',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1464,
            'name' => 'MICHAEL CLIFFORD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6321008',
            'mobile_2' => '',
            'address_1' => '10 ST JOSEPHS RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1465,
            'name' => 'ELIZABETH DAWSON',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 4078547',
            'mobile_2' => '',
            'address_1' => '52 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1466,
            'name' => 'PAUL CLIFFORD',
            'email' => null,
            'phone' => '056 23579',
            'mobile_1' => '087 6412319',
            'mobile_2' => '',
            'address_1' => '26 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1467,
            'name' => 'JAMES LONG',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6321008',
            'mobile_2' => '',
            'address_1' => '39 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1468,
            'name' => ' LEE',
            'email' => null,
            'phone' => '056 58653',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'MILL RD',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1469,
            'name' => 'Tony Knox',
            'email' => null,
            'phone' => '056 7751692',
            'mobile_1' => '087 6614050',
            'mobile_2' => '',
            'address_1' => '45 Hollybank Park',
            'address_2' => 'Clongown',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1470,
            'name' => 'EDWARD KENNY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3100301',
            'mobile_2' => '056 41291',
            'address_1' => 'SIDEGATE',
            'address_2' => 'MONEENROE',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1471,
            'name' => 'THOMAS KANE',
            'email' => null,
            'phone' => '056 7726417',
            'mobile_1' => '087 2626504',
            'mobile_2' => '',
            'address_1' => 'KILMANAHAN',
            'address_2' => 'DUNGARVAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1472,
            'name' => 'PETER DAVIS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2731157',
            'mobile_2' => '',
            'address_1' => 'CROAN',
            'address_2' => 'DANESFORT',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1473,
            'name' => 'PHILOMENA MC CONNELL',
            'email' => null,
            'phone' => '056 8833595',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'OLDTOWN',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1474,
            'name' => 'GER PURCELL',
            'email' => null,
            'phone' => '056 67946',
            'mobile_1' => '087 6557760',
            'mobile_2' => '',
            'address_1' => 'WOODVILLE',
            'address_2' => 'GRAGARA JENKINSTOW',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1475,
            'name' => 'JOSEPH O DONNELL',
            'email' => null,
            'phone' => '056 4441696',
            'mobile_1' => '087 6369130',
            'mobile_2' => '',
            'address_1' => '32 HILLSIDE VIEW',
            'address_2' => 'CASTLECOMER',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1476,
            'name' => 'RICHIE KIELTHY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2311865',
            'mobile_2' => '',
            'address_1' => 'DONORE',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1477,
            'name' => 'MICHAEL O BRIEN',
            'email' => null,
            'phone' => '056 7761333',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'SHELLUMSRATH',
            'address_2' => 'CALLAN RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1478,
            'name' => 'EILEEN MURPHY',
            'email' => null,
            'phone' => '056 7729931',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'CASTLEINCH',
            'address_2' => 'CALLAN ROAD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1479,
            'name' => 'MICHAEL EGAN',
            'email' => null,
            'phone' => '056 7702657',
            'mobile_1' => '087 1314362',
            'mobile_2' => '',
            'address_1' => '133 WALKIN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1480,
            'name' => 'EDWARD BRADLEY',
            'email' => null,
            'phone' => '0503 73538',
            'mobile_1' => '087 2774291',
            'mobile_2' => '',
            'address_1' => 'COONOGUE',
            'address_2' => 'BALLYMURPHY',
            'city' => null,
            'state' => 'BORRIS CO.CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1481,
            'name' => 'MARTINA SCANLON',
            'email' => null,
            'phone' => '056 7726720',
            'mobile_1' => '087 6380088',
            'mobile_2' => '',
            'address_1' => '25A Altamount Park',
            'address_2' => 'Dublin Rd',
            'city' => null,
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1482,
            'name' => 'Billy DOHERTY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 7391765',
            'mobile_2' => '',
            'address_1' => '36 Castle Heights',
            'address_2' => 'Carrick-on-Suir',
            'city' => null,
            'state' => 'Co Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1483,
            'name' => 'Mary Roche',
            'email' => null,
            'phone' => '056 4442478',
            'mobile_1' => '087 6247155',
            'mobile_2' => '056 41568',
            'address_1' => 'BONEYARROW',
            'address_2' => 'CLOGH',
            'city' => null,
            'state' => 'CASTLECOMER',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1484,
            'name' => 'JOHN DUNNE',
            'email' => null,
            'phone' => '0503 24011',
            'mobile_1' => '',
            'mobile_2' => '056 52528',
            'address_1' => '21 WOODLANDS',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1485,
            'name' => 'DARREN COMERFORD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3916895',
            'mobile_2' => '056 52177',
            'address_1' => '32 KENNYSWELL RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1486,
            'name' => 'BENNY DOHERTY',
            'email' => null,
            'phone' => '056 28172',
            'mobile_1' => '086 8221798',
            'mobile_2' => '',
            'address_1' => 'DUNNAMAGGAN EAST',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1487,
            'name' => 'MIRIAM HOLMES',
            'email' => null,
            'phone' => '056 7764526',
            'mobile_1' => '086 3783370',
            'mobile_2' => '',
            'address_1' => '46 THE SYCAMORES',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1488,
            'name' => 'MICHAEL MADDEN',
            'email' => null,
            'phone' => '056 64870',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '33 WESTFIELDS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1489,
            'name' => 'DIARMUID DUNNE',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 8384782',
            'mobile_2' => '',
            'address_1' => '49 POCOCKE LOWER',
            'address_2' => 'JOHNSWELL RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1490,
            'name' => 'URSULA O MALLEY',
            'email' => null,
            'phone' => '056 7756652',
            'mobile_1' => '086 6480864',
            'mobile_2' => '',
            'address_1' => 'DAMMA LOWER',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1491,
            'name' => 'ANDY HENDERSON',
            'email' => null,
            'phone' => '056 21718',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '28 ROSE INN STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1492,
            'name' => 'TERRY CLIFFORD',
            'email' => null,
            'phone' => '056 52306',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '8 PEARSE STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1493,
            'name' => 'KATHLEEN & TALLON',
            'email' => null,
            'phone' => '059 9722555',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'WELLS',
            'address_2' => 'BAGENALSTOWN',
            'city' => null,
            'state' => 'CO:CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1494,
            'name' => 'JOSEPH GRIFFIN',
            'email' => null,
            'phone' => '056 23845',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'OK HOUSE',
            'address_2' => 'HIGH ST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1495,
            'name' => 'MARY KERWICK',
            'email' => null,
            'phone' => '056 51011',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'TULLAROAN RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1496,
            'name' => 'MARY BRENNAN',
            'email' => null,
            'phone' => '056 7767723',
            'mobile_1' => '',
            'mobile_2' => '056 67717',
            'address_1' => 'WEBBSBORO',
            'address_2' => 'CASTLECOMER RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1497,
            'name' => 'JOHN CARROLL',
            'email' => null,
            'phone' => '0505 46511',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'COOLKERRY PARK',
            'address_2' => 'RATHDOWNEY',
            'city' => null,
            'state' => 'CO LAOIS',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1498,
            'name' => 'Eoighan St Helens Hotel',
            'email' => null,
            'phone' => '053 9133233',
            'mobile_1' => '086 7988947',
            'mobile_2' => '',
            'address_1' => '',
            'address_2' => 'ROSSLARE',
            'city' => null,
            'state' => 'CO WEXFORD',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1499,
            'name' => 'EILEEN DELOUGHRY',
            'email' => null,
            'phone' => '056 7722219',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BUTTSGREEN',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1500,
            'name' => 'UNA CROWLEY',
            'email' => null,
            'phone' => '056 7755713',
            'mobile_1' => '086 8305525',
            'mobile_2' => '056 7725138',
            'address_1' => 'TULLAMAINE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1501,
            'name' => 'DAVID SWAIN',
            'email' => null,
            'phone' => '056 54295',
            'mobile_1' => '086 8078074',
            'mobile_2' => '',
            'address_1' => 'MONG',
            'address_2' => 'THOMASTOWN',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1502,
            'name' => 'Ebou Ndure',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 2179645',
            'mobile_2' => '',
            'address_1' => '7 Lintown Drive',
            'address_2' => 'Kilkenny',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1503,
            'name' => 'ASHLING KENNEDY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6686599',
            'mobile_2' => '',
            'address_1' => '7 MILLENIUM COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1504,
            'name' => 'MAY MEANEY',
            'email' => null,
            'phone' => '056 7758594',
            'mobile_1' => '085 2758273',
            'mobile_2' => '',
            'address_1' => 'LAURELHILL',
            'address_2' => 'INISTIOGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1505,
            'name' => 'MARTIN MOLONEY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '056 23900',
            'address_1' => '15 WILLIAM STREET',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1506,
            'name' => 'AGNES BRADSHAW',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 2571350',
            'mobile_2' => '',
            'address_1' => 'KILVEMNON',
            'address_2' => 'MULLINAHONE',
            'city' => null,
            'state' => 'CO TIPPERARY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1507,
            'name' => 'BRIDGET MORAN',
            'email' => null,
            'phone' => '056 7727451',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '10 WOODLAWN',
            'address_2' => 'BENNETTSBRIDGE',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1508,
            'name' => 'EDDIE FUNCHEON',
            'email' => null,
            'phone' => '056 7762666',
            'mobile_1' => '087 6759386',
            'mobile_2' => '',
            'address_1' => '39 DEAN CAVANAGH PLACE',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1509,
            'name' => 'JOHN COONEY',
            'email' => null,
            'phone' => '0503 24078',
            'mobile_1' => '086 8514759',
            'mobile_2' => '',
            'address_1' => 'COPPENAGH',
            'address_2' => 'DUNGARVAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1510,
            'name' => 'ROSS PHELAN',
            'email' => null,
            'phone' => '056 33275',
            'mobile_1' => '087 2372969',
            'mobile_2' => '',
            'address_1' => 'BROOKFIELD',
            'address_2' => 'BALLYRAGGET',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1511,
            'name' => 'JOSEPH KNOX',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6637191',
            'mobile_2' => '',
            'address_1' => 'PRIMROSE HOUSE',
            'address_2' => 'CASTLECOMER RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1512,
            'name' => 'Muriel Ryan',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 1760891',
            'mobile_2' => '',
            'address_1' => '36 Killonerry Close',
            'address_2' => 'Carrick-onSuir',
            'city' => null,
            'state' => 'Co Tipperary',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1513,
            'name' => 'JIMMY GLENNON',
            'email' => null,
            'phone' => '056 69581',
            'mobile_1' => '086-8203522',
            'mobile_2' => '',
            'address_1' => 'KYLEMORE FARM',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1514,
            'name' => 'MARTINA CLIFFORD',
            'email' => null,
            'phone' => '',
            'mobile_1' => '086 3051765',
            'mobile_2' => '',
            'address_1' => '12 NEW RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1515,
            'name' => 'DANIEL DOYLE',
            'email' => null,
            'phone' => '059 9724704',
            'mobile_1' => '087 7935856',
            'mobile_2' => '',
            'address_1' => 'BALLYLING LOWER',
            'address_2' => 'GRAIGNAMANAGH',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1516,
            'name' => 'JOHN GRANVILLE',
            'email' => null,
            'phone' => '056 7765340',
            'mobile_1' => '086 1610161',
            'mobile_2' => '',
            'address_1' => '70 SPRINGFIELDS',
            'address_2' => 'WATERFORD RD',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1517,
            'name' => 'PETER BUTLER',
            'email' => null,
            'phone' => '056 7769277',
            'mobile_1' => '086 0875842',
            'mobile_2' => '',
            'address_1' => 'LISNALEA',
            'address_2' => 'TULLAROAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1518,
            'name' => 'MICHAEL HALL',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 3388430',
            'mobile_2' => '',
            'address_1' => 'GORTNAGAP',
            'address_2' => 'KILMANAGH',
            'city' => null,
            'state' => 'CO.KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1519,
            'name' => 'KEVIN WOODS',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '36 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1520,
            'name' => 'CLARE MC AULIFFE',
            'email' => null,
            'phone' => '056 56067',
            'mobile_1' => '086 3029646',
            'mobile_2' => '',
            'address_1' => '13 ST JOSEPHS RD',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1521,
            'name' => 'GER O REILLY',
            'email' => null,
            'phone' => '056 8832097',
            'mobile_1' => '087 2663615',
            'mobile_2' => '',
            'address_1' => '21 THE MILLS',
            'address_2' => 'FRESHFORD',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1522,
            'name' => 'JOSEPH GRACE',
            'email' => null,
            'phone' => '056 7725655',
            'mobile_1' => '086 2398558',
            'mobile_2' => '',
            'address_1' => 'BEECHFIELD HOUSE',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1523,
            'name' => ' OLD CHARTER HSE',
            'email' => null,
            'phone' => '056 55902',
            'mobile_1' => '087 6789262',
            'mobile_2' => '',
            'address_1' => 'GREEN STREET',
            'address_2' => 'CALLAN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1524,
            'name' => 'D GOREY',
            'email' => null,
            'phone' => '056',
            'mobile_1' => '086 2220506',
            'mobile_2' => '',
            'address_1' => 'CUFFESGRANGE',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1525,
            'name' => 'SUZANNA GASTON',
            'email' => null,
            'phone' => '056 23250',
            'mobile_1' => '',
            'mobile_2' => '056 62344',
            'address_1' => '8B ABBEY GARDENS',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1526,
            'name' => 'JAMES HENNESSY',
            'email' => null,
            'phone' => '059 9726144',
            'mobile_1' => '086 4067417maur',
            'mobile_2' => '',
            'address_1' => 'BLACK ACRE',
            'address_2' => 'PAULSTOWN',
            'city' => null,
            'state' => 'CO KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1527,
            'name' => 'CON BARRY',
            'email' => null,
            'phone' => '056 27144',
            'mobile_1' => '086 2306851',
            'mobile_2' => '',
            'address_1' => 'DANESFORT',
            'address_2' => 'CO KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1528,
            'name' => 'EAMON O SHEA',
            'email' => null,
            'phone' => '056 21565',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => 'BUTLERS SHOP',
            'address_2' => 'LORD EDWARD ST',
            'city' => null,
            'state' => 'KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1529,
            'name' => 'MICHAEL BYRNE',
            'email' => null,
            'phone' => '059 9773642',
            'mobile_1' => '',
            'mobile_2' => '0503 73300',
            'address_1' => 'CLOUGHGRACE',
            'address_2' => 'BORRIS',
            'city' => null,
            'state' => 'CO CARLOW',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1530,
            'name' => 'NIALL GREENE',
            'email' => null,
            'phone' => '056 7721330',
            'mobile_1' => '353868100630',
            'mobile_2' => '',
            'address_1' => 'DAMMA HOUSE',
            'address_2' => 'BALLYCALLAN',
            'city' => null,
            'state' => 'CO. KILKENNY',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1531,
            'name' => 'JONATHAN TREACY',
            'email' => null,
            'phone' => '',
            'mobile_1' => '087 6203707',
            'mobile_2' => '',
            'address_1' => '15 MILLENNIUM COURT',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1532,
            'name' => 'JOE WOODS',
            'email' => null,
            'phone' => '056 70926',
            'mobile_1' => '',
            'mobile_2' => '056 51566',
            'address_1' => '50 CONNOLLY ST',
            'address_2' => 'KILKENNY',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 1533,
            'name' => 'B ',
            'email' => null,
            'phone' => '',
            'mobile_1' => '',
            'mobile_2' => '',
            'address_1' => '',
            'address_2' => '',
            'city' => null,
            'state' => '',
            'country' => 'Ireland',
            'eir_code' => null,
            'status' => 'completed'
        ]);
    }
}
