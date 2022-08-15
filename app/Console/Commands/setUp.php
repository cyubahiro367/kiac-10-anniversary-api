<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class setUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kiac:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert all the required data in the database, for project to start operating';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }   

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {

            DB::transaction(function (){

                //                inserting required data for kiac to work
                DB::unprepared("
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 1,'Afghanistan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 2,'Akrotiri and Dhekelia (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 3,'Aland Islands (Finland)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 4,'Albania', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 5,'Algeria', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 6,'American Samoa (USA)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 7,'Andorra', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 8,'Angola', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 9,'Anguilla (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 10,'Antigua and Barbuda', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 11,'Argentina', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 12,'Armenia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 13,'Aruba (Netherlands)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 14,'Ascension Island (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 15,'Australia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 16,'Austria', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 17,'Azerbaijan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 18,'Bahamas', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 19,'Bahrain', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 20,'Bangladesh', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 21,'Barbados', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 22,'Belarus', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 23,'Belgium', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 24,'Belize', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 25,'Benin', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 26,'Bermuda (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 27,'Bhutan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 28,'Bolivia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 29,'Bonaire (Netherlands)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 30,'Bosnia and Herzegovina', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 31,'Botswana', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 32,'Brazil', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 33,'British Indian Ocean Territory (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 34,'British Virgin Islands (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 35,'Brunei', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 36,'Bulgaria', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 37,'Burkina Faso', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 38,'Burundi', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 39,'Cabo Verde', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 40,'Cambodia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 41,'Cameroon', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 42,'Canada', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 43,'Caribbean Netherlands (Netherlands)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 44,'Cayman Islands (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 45,'Central African Republic', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 46,'Chad', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 47,'Chatham Islands (New Zealand)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 48,'Chile', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 49,'China', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 50,'Christmas Island (Australia)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 51,'Cocos (Keeling) Islands (Australia)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 52,'Colombia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 53,'Comoros', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 54,'Congo, Democratic Republic of the', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 55,'Congo, Republic of the', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 56,'Cook Islands (New Zealand)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 57,'Costa Rica', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 58,'Cote d\'Ivoire', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 59,'Croatia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 60,'Cuba', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 61,'Curacao (Netherlands)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 62,'Cyprus', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 63,'Czechia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 64,'Denmark', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 65,'Djibouti', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 66,'Dominica', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 67,'Dominican Republic', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 68,'Ecuador', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 69,'Egypt', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 70,'El Salvador', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 71,'Equatorial Guinea', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 72,'Eritrea', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 73,'Estonia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 74,'Eswatini (formerly Swaziland)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 75,'Ethiopia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 76,'Falkland Islands (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 77,'Faroe Islands (Denmark)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 78,'Fiji', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 79,'Finland', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 80,'France', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 81,'French Guiana (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 82,'French Polynesia (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 83,'Gabon', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 84,'Gambia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 85,'Georgia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 86,'Germany', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 87,'Ghana', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 88,'Gibraltar (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 89,'Greece', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 90,'Greenland (Denmark)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 91,'Grenada', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 92,'Guadeloupe (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 93,'Guam (USA)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 94,'Guatemala', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 95,'Guernsey (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 96,'Guinea', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 97,'Guinea-Bissau', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 98,'Guyana', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 99,'Haiti', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 100,'Honduras', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 101,'Hong Kong (China)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 102,'Hungary', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 103,'Iceland', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 104,'India', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 105,'Indonesia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 106,'International Monetary Fund (IMF)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 107,'Iran', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 108,'Iraq', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 109,'Ireland', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 110,'Isle of Man (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 111,'Israel', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 112,'Italy', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 113,'Jamaica', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 114,'Japan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 115,'Jersey (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 116,'Jordan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 117,'Kazakhstan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 118,'Kenya', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 119,'Kiribati', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 120,'Kosovo', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 121,'Kuwait', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 122,'Kyrgyzstan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 123,'Laos', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 124,'Latvia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 125,'Lebanon', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 126,'Lesotho', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 127,'Liberia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 128,'Libya', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 129,'Liechtenstein', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 130,'Lithuania', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 131,'Luxembourg', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 132,'Macau (China)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 133,'Madagascar', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 134,'Malawi', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 135,'Malaysia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 136,'Maldives', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 137,'Mali', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 138,'Malta', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 139,'Marshall Islands', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 140,'Martinique (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 141,'Mauritania', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 142,'Mauritius', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 143,'Mayotte (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 144,'Mexico', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 145,'Micronesia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 146,'Moldova', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 147,'Monaco', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 148,'Mongolia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 149,'Montenegro', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 150,'Montserrat (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 151,'Morocco', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 152,'Mozambique', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 153,'Myanmar (formerly Burma)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 154,'Namibia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 155,'Nauru', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 156,'Nepal', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 157,'Netherlands', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 158,'New Caledonia (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 159,'New Zealand', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 160,'Nicaragua', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 161,'Niger', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 162,'Nigeria', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 163,'Niue (New Zealand)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 164,'Norfolk Island (Australia)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 165,'Northern Mariana Islands (USA)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 166,'North Korea', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 167,'North Macedonia (formerly Macedonia)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 168,'Norway', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 169,'Oman', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 170,'Pakistan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 171,'Palau', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 172,'Palestine', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 173,'Panama', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 174,'Papua New Guinea', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 175,'Paraguay', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 176,'Peru', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 177,'Philippines', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 178,'Pitcairn Islands (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 179,'Poland', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 180,'Portugal', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 181,'Puerto Rico (USA)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 182,'Qatar', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 183,'Reunion (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 184,'Romania', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 185,'Russia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 186,'Rwanda', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 187,'Saba (Netherlands)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 188,'Saint Barthelemy (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 189,'Saint Helena (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 190,'Saint Kitts and Nevis', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 191,'Saint Lucia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 192,'Saint Martin (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 193,'Saint Pierre and Miquelon (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 194,'Saint Vincent and the Grenadines', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 195,'Samoa', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 196,'San Marino', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 197,'Sao Tome and Principe', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 198,'Saudi Arabia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 199,'Senegal', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 200,'Serbia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 201,'Seychelles', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 202,'Sierra Leone', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 203,'Singapore', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 204,'Sint Eustatius (Netherlands)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 205,'Sint Maarten (Netherlands)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 206,'Slovakia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 207,'Slovenia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 208,'Solomon Islands', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 209,'Somalia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 210,'South Africa', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 211,'South Georgia Island (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 212,'South Korea', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 213,'South Sudan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 214,'Spain', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 215,'Sri Lanka', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 216,'Sudan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 217,'Suriname', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 218,'Svalbard and Jan Mayen (Norway)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 219,'Sweden', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 220,'Switzerland', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 221,'Syria', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 222,'Taiwan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 223,'Tajikistan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 224,'Tanzania', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 225,'Thailand', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 226,'Timor-Leste', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 227,'Togo', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 228,'Tokelau (New Zealand)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 229,'Tonga', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 230,'Trinidad and Tobago', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 231,'Tristan da Cunha (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 232,'Tunisia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 233,'Turkey', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 234,'Turkmenistan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 235,'Turks and Caicos Islands (UK)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 236,'Tuvalu', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 237,'Uganda', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 238,'Ukraine', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 239,'United Arab Emirates', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 240,'United Kingdom', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 241,'United States of America', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 242,'Uruguay', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 243,'US Virgin Islands (USA)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 244,'Uzbekistan', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 245,'Vanuatu', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 246,'Vatican City (Holy See)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 247,'Venezuela', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 248,'Vietnam', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 249,'Wake Island (USA)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 250,'Wallis and Futuna (France)', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 251,'Yemen', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 252,'Zambia', 1553678707, 1553678707 );
                    INSERT INTO Country( id, name, created_at, updated_at ) VALUES( 253,'Zimbabwe', 1553678707, 1553678707 );
                ");
            });

            $this->info("Setup complete");
        } catch (\Throwable $th) {
            $this->warn($th->getMessage());
            $this->error("Failed to setup required kiac 10-anniversary");
        }
    }
}
