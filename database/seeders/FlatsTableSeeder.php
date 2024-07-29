<?php

namespace Database\Seeders;

use App\Models\Flat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $flats = [
            [
                "title" => "GRAN MADRE Suite elegante con terrazzo",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 90,
                "address" => "Piazza Gran Madre di Dio, 10131 Torino TO, Italy",
                "latitude" => 45.066365,
                "longitude" => 7.693069,
                "main_img" => "flats_img/thumbnail_GRAN_MADRE_Suite_elegante_con_terrazzo.webp",
                "visible" => true,
                "description" => "Elegante suite con terrazzo, situata vicino alla storica Gran Madre.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Elegante appartamento con terrazzino vista MOLE",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 75,
                "address" => "Via Montebello, 10124 Torino TO, Italy",
                "latitude" => 45.069167,
                "longitude" => 7.692576,
                "main_img" => "flats_img/thumbnail_Elegante_appartamento_con_terrazzino_vista_MOLE.webp",
                "visible" => true,
                "description" => "Appartamento elegante con terrazzino, splendida vista sulla Mole Antonelliana.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Dimora Novecento",
                "max_guests" => 5,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 110,
                "address" => "Via Po, 10123 Torino TO, Italy",
                "latitude" => 45.068267,
                "longitude" => 7.686856,
                "main_img" => "flats_img/thumbnail_Dimora_Novecento.webp",
                "visible" => true,
                "description" => "Dimora storica con interni moderni, situata nel cuore di Torino.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Attico Torino Centro con Terrazzo Vista Mole",
                "max_guests" => 6,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 95,
                "address" => "Piazza Vittorio Veneto, 10124 Torino TO, Italy",
                "latitude" => 45.068536,
                "longitude" => 7.692927,
                "main_img" => "flats_img/thumbnail_Attico_Torino_Centro_con_Terrazzo_Vista_Mole.webp",
                "visible" => true,
                "description" => "Attico esclusivo con terrazzo, vista mozzafiato sulla Mole Antonelliana.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Appartamento Luxury con balcone",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 85,
                "address" => "Via Roma, 10121 Torino TO, Italy",
                "latitude" => 45.067755,
                "longitude" => 7.682489,
                "main_img" => "flats_img/thumbnail_Appartamento_Luxury_con_balcone.webp",
                "visible" => true,
                "description" => "Appartamento di lusso con balcone, situato nella centralissima Via Roma.",
                "user_id" => rand(1, 5)
            ],

            [
                "title" => "Atlana",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 85,
                "address" => "Calle Larga XXII Marzo, 2091, 30124 Venezia VE, Italy",
                "latitude" => 45.4338,
                "longitude" => 12.3346,
                "main_img" => "flats_img/thumbnail_Atlana.webp",
                "visible" => true,
                "description" => "Elegante appartamento moderno nel cuore di Venezia, perfetto per famiglie o gruppi di amici.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Ca Bella Vista",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 110,
                "address" => "Fondamenta delle Zattere, 1401, 30123 Venezia VE, Italy",
                "latitude" => 45.4266,
                "longitude" => 12.3247,
                "main_img" => "flats_img/thumbnail_Ca_Bella_Vista.webp",
                "visible" => true,
                "description" => "Appartamento spazioso con vista mozzafiato sui canali, ideale per un soggiorno di lusso a Venezia.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Ca Rolina",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Strada Nova, 4367, 30121 Venezia VE, Italy",
                "latitude" => 45.4431,
                "longitude" => 12.3266,
                "main_img" => "flats_img/thumbnail_Ca_Rolina.jpg",
                "visible" => true,
                "description" => "Accogliente appartamento nel vivace quartiere di Cannaregio, perfetto per una coppia o una piccola famiglia.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Canal Dream",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 90,
                "address" => "Riva degli Schiavoni, 4187, 30122 Venezia VE, Italy",
                "latitude" => 45.4343,
                "longitude" => 12.3430,
                "main_img" => "flats_img/thumbnail_Canal_Dream.webp",
                "visible" => true,
                "description" => "Appartamento con una vista panoramica sulla laguna, ideale per un soggiorno rilassante e romantico.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Tintoretto",
                "max_guests" => 2,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 60,
                "address" => "Calle della Mandola, 3755, 30124 Venezia VE, Italy",
                "latitude" => 45.4366,
                "longitude" => 12.3351,
                "main_img" => "flats_img/thumbnail_Tintoretto.webp",
                "visible" => true,
                "description" => "Elegante appartamento per due nel cuore di San Marco, ideale per una fuga romantica a Venezia.",
                "user_id" => rand(1, 5)
            ],

            [
                "title" => "Cottage",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 75,
                "address" => "Via del Corso, 1, 50122 Firenze FI, Italy",
                "latitude" => 43.7705,
                "longitude" => 11.2569,
                "main_img" => "flats_img/thumbnail_Cottage.webp",
                "visible" => true,
                "description" => "Accogliente cottage situato nel cuore di Firenze, perfetto per famiglie che vogliono esplorare la città.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Dame di Toscana",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 100,
                "address" => "Via de' Benci, 10, 50122 Firenze FI, Italy",
                "latitude" => 43.7687,
                "longitude" => 11.2610,
                "main_img" => "flats_img/thumbnail_Dame_di_Toscana.webp",
                "visible" => true,
                "description" => "Elegante appartamento nel vivace quartiere di Santa Croce, ideale per gruppi e famiglie.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Farmer House",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 65,
                "address" => "Via Maggio, 13, 50125 Firenze FI, Italy",
                "latitude" => 43.7667,
                "longitude" => 11.2497,
                "main_img" => "flats_img/thumbnail_Farmer_House.webp",
                "visible" => true,
                "description" => "Rustico e accogliente appartamento nel quartiere di Oltrarno, perfetto per una coppia o una piccola famiglia.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Ottavino",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 85,
                "address" => "Borgo San Jacopo, 2, 50125 Firenze FI, Italy",
                "latitude" => 43.7679,
                "longitude" => 11.2522,
                "main_img" => "flats_img/thumbnail_Ottavino.webp",
                "visible" => true,
                "description" => "Appartamento moderno vicino al Ponte Vecchio, perfetto per famiglie o gruppi di amici.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Storico in Villa",
                "max_guests" => 2,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 60,
                "address" => "Via de' Ginori, 8, 50123 Firenze FI, Italy",
                "latitude" => 43.7763,
                "longitude" => 11.2559,
                "main_img" => "flats_img/thumbnail_Storico_in_Villa.webp",
                "visible" => true,
                "description" => "Elegante appartamento storico nel quartiere di San Lorenzo, ideale per una fuga romantica.",
                "user_id" => rand(1, 5)
            ],

            [
                "title" => "Domus Monamì Luxury Suites",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 80,
                "address" => "Via Giulia, 93, 00186 Roma RM",
                "latitude" => 41.8964,
                "longitude" => 12.4686,
                "main_img" => "flats_img/thumbnail_DomusMonamiLuxurySuites.jpg",
                "visible" => true,
                "description" => "Splendida suite di lusso nel cuore di Roma, a due passi da Piazza Navona e il Pantheon. Ideale per soggiorni indimenticabili.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Colosseum Home",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 90,
                "address" => "Via di San Giovanni in Laterano, 10, 00184 Roma RM",
                "latitude" => 41.8899,
                "longitude" => 12.4989,
                "main_img" => "flats_img/thumbnail_ColosseumHome.jpg",
                "visible" => true,
                "description" => "Appartamento spazioso e moderno, a pochi passi dal Colosseo. Perfetto per famiglie o gruppi di amici.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Catapecchia House",
                "max_guests" => 2,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 50,
                "address" => "Via del Corso, 500, 00186 Roma RM",
                "latitude" => 41.9015,
                "longitude" => 12.4812,
                "main_img" => "flats_img/thumbnail_CatapecchiaHouse.webp",
                "visible" => true,
                "description" => "Accogliente appartamento nel centro di Roma, ideale per una coppia in cerca di una vacanza romantica.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Campo di Marte",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Piazza del Popolo, 1, 00187 Roma RM",
                "latitude" => 41.9102,
                "longitude" => 12.4768,
                "main_img" => "flats_img/thumbnail_CampoDiMarte.jpg",
                "visible" => true,
                "description" => "Appartamento moderno e ben arredato, situato a pochi passi da Piazza del Popolo e Villa Borghese.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "All Comfort Nomentano",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 75,
                "address" => "Via Nomentana, 203, 00161 Roma RM",
                "latitude" => 41.9108,
                "longitude" => 12.5124,
                "main_img" => "flats_img/thumbnail_AllComfortNomentano.jpg",
                "visible" => true,
                "description" => "Confortevole appartamento vicino alla stazione Termini, con facile accesso ai principali siti turistici di Roma.",
                "user_id" => rand(1, 5)
            ],

            [
                "title" => "Vesuvio Retreat",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 65,
                "address" => "Via Toledo, 100, 80132 Napoli NA",
                "latitude" => 40.8375,
                "longitude" => 14.2499,
                "main_img" => "flats_img/thumbnail_VesuvioRetreat.jpg",
                "visible" => true,
                "description" => "Incantevole appartamento nel cuore di Napoli, a pochi passi da Via Toledo. Perfetto per esplorare la città e gustare la cucina locale.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Charming Napoli",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 50,
                "address" => "Piazza del Plebiscito, 1, 80132 Napoli NA",
                "latitude" => 40.8351,
                "longitude" => 14.2465,
                "main_img" => "flats_img/thumbnail_CharmingNapoli.jpg",
                "visible" => true,
                "description" => "Accogliente appartamento con vista sulla storica Piazza del Plebiscito, ideale per coppie in cerca di romanticismo e avventura.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Napoli Elegante",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 85,
                "address" => "Via Chiaia, 50, 80121 Napoli NA",
                "latitude" => 40.8392,
                "longitude" => 14.2513,
                "main_img" => "flats_img/thumbnail_NapoliElegante.jpg",
                "visible" => true,
                "description" => "Spazioso appartamento elegante nel centro di Napoli, perfetto per famiglie o gruppi. A pochi passi da negozi e ristoranti.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Vista Mare",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 90,
                "address" => "Lungomare Caracciolo, 100, 80122 Napoli NA",
                "latitude" => 40.8355,
                "longitude" => 14.2545,
                "main_img" => "flats_img/thumbnail_VistaMare.jpg",
                "visible" => true,
                "description" => "Appartamento con vista sul mare, ideale per famiglie e gruppi. A pochi passi da ristoranti e attrazioni turistiche.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Città Antica",
                "max_guests" => 2,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 40,
                "address" => "Via San Gregorio Armeno, 30, 80138 Napoli NA",
                "latitude" => 40.8518,
                "longitude" => 14.2660,
                "main_img" => "flats_img/thumbnail_CittaAntica.jpg",
                "visible" => true,
                "description" => "Piccolo ma affascinante appartamento nel centro storico di Napoli, perfetto per una fuga romantica. Vicino a chiese e mercatini.",
                "user_id" => rand(1, 5)
            ],

            [
                "title" => "PaPa's home",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Via Sparano, 12, 70121 Bari BA",
                "latitude" => 41.1265,
                "longitude" => 16.8692,
                "main_img" => "flats_img/thumbnail_PaPasHome.webp",
                "visible" => true,
                "description" => "Accogliente appartamento nel cuore di Bari, a pochi passi da negozi e ristoranti. Perfetto per famiglie e gruppi di amici.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Little Suite Picca",
                "max_guests" => 2,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 40,
                "address" => "Piazza del Ferrarese, 2, 70121 Bari BA",
                "latitude" => 41.1273,
                "longitude" => 16.8664,
                "main_img" => "flats_img/thumbnail_LittleSuitePicca.webp",
                "visible" => true,
                "description" => "Piccola suite elegante situata in una posizione centrale. Ideale per coppie in cerca di una fuga romantica nella storica Bari.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Liberty Suite",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 90,
                "address" => "Via Giuseppe Mazzini, 30, 70121 Bari BA",
                "latitude" => 41.1290,
                "longitude" => 16.8736,
                "main_img" => "flats_img/thumbnail_LibertySuite.webp",
                "visible" => true,
                "description" => "Ampia suite in stile liberty, perfetta per famiglie o gruppi. Situata vicino alle principali attrazioni turistiche di Bari.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Casa indipendente per vacanze",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 80,
                "address" => "Via Aurelio Saffi, 10, 70124 Bari BA",
                "latitude" => 41.1381,
                "longitude" => 16.8970,
                "main_img" => "flats_img/thumbnail_CasaIndipendenteVacanze.webp",
                "visible" => true,
                "description" => "Spaziosa casa indipendente, ideale per vacanze in famiglia. A pochi minuti dalla spiaggia e dai ristoranti tipici di Bari.",
                "user_id" => rand(1, 5)
            ],

            // SEEDER AGGIUNTIVO


            [
                "title" => "Moncalieri Cozy Flat",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 55,
                "address" => "Via Santa Maria, 5, 10024 Moncalieri TO",
                "latitude" => 45.0094,
                "longitude" => 7.7163,
                "main_img" => "flats_img/thumbnail_MoncalieriCozyFlat.jpg",
                "visible" => true,
                "description" => "Appartamento accogliente a Moncalieri, vicino al castello e ai trasporti pubblici.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Settimo Torinese Modern Studio",
                "max_guests" => 2,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 40,
                "address" => "Via Italia, 12, 10036 Settimo Torinese TO",
                "latitude" => 45.1814,
                "longitude" => 7.6897,
                "main_img" => "flats_img/thumbnail_SettimoTorineseStudio.jpg",
                "visible" => true,
                "description" => "Studio moderno e luminoso a Settimo Torinese, comodo per visitare Torino.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Nichelino Family Apartment",
                "max_guests" => 6,
                "rooms" => 3,
                "beds" => 3,
                "bathrooms" => 2,
                "meters_square" => 85,
                "address" => "Corso Torino, 30, 10042 Nichelino TO",
                "latitude" => 44.9961,
                "longitude" => 7.7126,
                "main_img" => "flats_img/thumbnail_NichelinoFamilyApartment.jpg",
                "visible" => true,
                "description" => "Ampio appartamento ideale per famiglie, situato a Nichelino.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Carmagnola Elegant Loft",
                "max_guests" => 3,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 50,
                "address" => "Piazza S. Giovanni, 2, 10022 Carmagnola TO",
                "latitude" => 44.9452,
                "longitude" => 7.6812,
                "main_img" => "flats_img/thumbnail_CarmagnolaLoft.jpg",
                "visible" => true,
                "description" => "Loft elegante e raffinato a Carmagnola, con ottimi collegamenti con Torino.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Torino Suburb Retreat",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 3,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Via Giardini, 15, 10144 Torino TO",
                "latitude" => 45.0703,
                "longitude" => 7.6869,
                "main_img" => "flats_img/thumbnail_TorinoSuburbRetreat.jpg",
                "visible" => true,
                "description" => "Appartamento tranquillo nei dintorni di Torino, ideale per famiglie.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Frascati Countryside Flat",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 60,
                "address" => "Via del Tempio di Diana, 8, 00044 Frascati RM",
                "latitude" => 41.7893,
                "longitude" => 12.6863,
                "main_img" => "flats_img/thumbnail_FrascatiFlat.jpg",
                "visible" => true,
                "description" => "Appartamento immerso nella campagna romana, con facile accesso a Roma.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Tivoli Garden Apartment",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 3,
                "bathrooms" => 2,
                "meters_square" => 75,
                "address" => "Via della Pace, 10, 00019 Tivoli RM",
                "latitude" => 41.9578,
                "longitude" => 12.7832,
                "main_img" => "flats_img/thumbnail_TivoliGardenApartment.jpg",
                "visible" => true,
                "description" => "Spazioso appartamento con giardino a Tivoli, a pochi passi dalle ville storiche.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Ostia Lido Beach Flat",
                "max_guests" => 3,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 45,
                "address" => "Via dei Coralli, 5, 00122 Roma RM",
                "latitude" => 41.7426,
                "longitude" => 12.2878,
                "main_img" => "flats_img/thumbnail_OstiaLidoBeachFlat.jpg",
                "visible" => true,
                "description" => "Appartamento vicino alla spiaggia di Ostia Lido, ideale per una vacanza al mare.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Guidonia Modern Loft",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 65,
                "address" => "Via della Storia, 3, 00012 Guidonia RM",
                "latitude" => 41.9895,
                "longitude" => 12.7974,
                "main_img" => "flats_img/thumbnail_GuidoniaLoft.jpg",
                "visible" => true,
                "description" => "Loft moderno e luminoso a Guidonia, comodo per raggiungere Roma.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Rieti Historic Studio",
                "max_guests" => 2,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 35,
                "address" => "Piazza Vittorio Emanuele, 4, 02100 Rieti RI",
                "latitude" => 42.4054,
                "longitude" => 12.8516,
                "main_img" => "flats_img/thumbnail_RietiStudio.jpg",
                "visible" => true,
                "description" => "Studio storico nel centro di Rieti, ideale per esplorare la cittÃ .",
                "user_id" => rand(1, 5)
            ],

            [
                "title" => "Mestre Comfortable Apartment",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 60,
                "address" => "Via Garibaldi, 12, 30171 Mestre VE",
                "latitude" => 45.4983,
                "longitude" => 12.2427,
                "main_img" => "flats_img/thumbnail_MestreComfortableApartment.jpg",
                "visible" => true,
                "description" => "Appartamento confortevole a Mestre, ben collegato con il centro di Venezia.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Lido di Venezia Beachside Apt",
                "max_guests" => 3,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 45,
                "address" => "Via Dandolo, 8, 30126 Lido VE",
                "latitude" => 45.4206,
                "longitude" => 12.3507,
                "main_img" => "flats_img/thumbnail_LidoBeachsideApt.jpg",
                "visible" => true,
                "description" => "Appartamento vicino alla spiaggia del Lido di Venezia, perfetto per una vacanza estiva.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Padova Historic Loft",
                "max_guests" => 5,
                "rooms" => 2,
                "beds" => 3,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Piazza dei Signori, 10, 35139 Padova PD",
                "latitude" => 45.4064,
                "longitude" => 11.8768,
                "main_img" => "flats_img/thumbnail_PadovaHistoricLoft.jpg",
                "visible" => true,
                "description" => "Loft storico nel centro di Padova, facilmente raggiungibile da Venezia.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Treviso Elegant Studio",
                "max_guests" => 2,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 40,
                "address" => "Via Roma, 20, 31100 Treviso TV",
                "latitude" => 45.6661,
                "longitude" => 12.2452,
                "main_img" => "flats_img/thumbnail_TrevisoElegantStudio.jpg",
                "visible" => true,
                "description" => "Studio elegante a Treviso, una breve distanza in treno da Venezia.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Chioggia Seaside Apt",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 55,
                "address" => "Corso del Popolo, 5, 30015 Chioggia VE",
                "latitude" => 45.2104,
                "longitude" => 12.2600,
                "main_img" => "flats_img/thumbnail_ChioggiaSeasideApt.jpg",
                "visible" => true,
                "description" => "Appartamento sul mare a Chioggia, ideale per una vacanza rilassante.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Prato Central Studio",
                "max_guests" => 3,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 45,
                "address" => "Piazza del Duomo, 3, 59100 Prato PO",
                "latitude" => 43.8823,
                "longitude" => 11.1022,
                "main_img" => "flats_img/thumbnail_PratoCentralStudio.jpg",
                "visible" => true,
                "description" => "Studio centrale a Prato, a breve distanza da Firenze.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Sesto Fiorentino Modern Apt",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 60,
                "address" => "Via Guglielmo Marconi, 10, 50019 Sesto Fiorentino FI",
                "latitude" => 43.8696,
                "longitude" => 11.2114,
                "main_img" => "flats_img/thumbnail_SestoFiorentinoModernApt.jpg",
                "visible" => true,
                "description" => "Appartamento moderno a Sesto Fiorentino, ben collegato con il centro di Firenze.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Empoli Cozy Flat",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 55,
                "address" => "Via Roma, 25, 50053 Empoli FI",
                "latitude" => 43.7081,
                "longitude" => 10.9364,
                "main_img" => "flats_img/thumbnail_EmpoliCozyFlat.jpg",
                "visible" => true,
                "description" => "Appartamento accogliente a Empoli, ottimo punto di partenza per visitare Firenze.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Fiesole Elegant Apartment",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 3,
                "bathrooms" => 2,
                "meters_square" => 80,
                "address" => "Piazza Mino, 1, 50014 Fiesole FI",
                "latitude" => 43.8053,
                "longitude" => 11.2855,
                "main_img" => "flats_img/thumbnail_FiesoleElegantApartment.jpg",
                "visible" => true,
                "description" => "Elegante appartamento a Fiesole, con splendida vista su Firenze.",
                "user_id" => rand(1, 5)
            ],
            [
                "title" => "Bagno a Ripoli Charming Loft",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 65,
                "address" => "Via di Ripoli, 15, 50012 Bagno a Ripoli FI",
                "latitude" => 43.7358,
                "longitude" => 11.3233,
                "main_img" => "flats_img/thumbnail_BagnoARipoliLoft.jpg",
                "visible" => true,
                "description" => "Loft affascinante a Bagno a Ripoli, a pochi minuti di auto dal centro di Firenze.",
                "user_id" => rand(1, 5)
            ]

        ];




        foreach ($flats as $flat) {
            $newFlat = new Flat();
            $newFlat->fill($flat);
            $newFlat->save();

            $services = [];
            for ($i = 0; $i < rand(5, 20); $i++) {
                $num = rand(1, 20);
                if (!in_array($num, $services)) {
                    $services[] = $num;
                }
            }

            $newFlat->services()->attach($services);
        };
    }
}
