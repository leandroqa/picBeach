<?php

use Illuminate\Database\Seeder;

class BeachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beaches')->insert([
            "region_name" => "AL",
            "name" => "maragogi",
            "description" => "Maragogi is a resort town on the Atlantic coast in eastern Brazil. It’s known for its long beaches such as Burgalhau, near the mangrove-lined Dos Paus River. Offshore coral reefs and sandbars have created a shallow lagoon, which acts as a natural pool. South of Maragogi is São Bento, a fishing village with a palm-edged beach. The coast here is part of the Coral Coast protected area, which is rich in flora and fauna."
        ]);

        DB::table('beaches')->insert([
            "region_name" => "BA",
            "name" => "porto_seguro",
            "description" => "Porto Seguro is a coastal resort town in the Brazilian state of Bahia. It’s home to roughly 90 kilometers of tropical beaches, including the popular Praia de Taperapuãn. The city is also known for its vibrant nightlife scene, which centers on the bar-lined promenade Passarela do Álcool. During Carnival season, flamboyantly costumed performers and parading samba musicians help form a massive street party."
        ]);
        DB::table('beaches')->insert([
            "region_name" => "BA",
            "name" => "praia_do_forte",
            "description" => "Praia do Forte is a long beach with a small village 80 km away from the city of Salvador de Bahia, located in northeastern Brazil and facing the Atlantic Ocean. The beach is known for its clear waters, white sand, natural pools, rivers and an ecological reserve of native flora and fauna."
        ]);      

        DB::table('beaches')->insert([
            "region_name" => "CE",
            "name" => "canoa_quebrada",
            "description" => "Canoa Quebrada, known as the pearl of the east coast of Ceará, Brazil, is an international tourist beach resort 164 km from Fortaleza, in the municipality of Aracati. This small fishing village, among dunes and cliffs, has good views and is becoming popular with tourists."
        ]);
        DB::table('beaches')->insert([
            "region_name" => "CE",
            "name" => "fortaleza",
            "description" => "Fortaleza is the capital of the northeastern Brazilian state of Ceará. It's known for its beaches, which are punctuated by red cliffs, palm trees, dunes and lagoons. Fortaleza’s long-standing folkloric traditions are presented in dance performances at the art nouveau José de Alencar theater, open since 1910. Another architectural highlight is the neo-Gothic Catedral Metropolitana."
        ]);
        DB::table('beaches')->insert([
            "region_name" => "CE",
            "name" => "jericoacoara",
            "description" => "Jericoacoara is a resort town in the eastern Brazilian state of Ceará. It’s known for wide Jericoacoara Beach. Restaurants and bars line its sandy streets. Principal Square is at its heart, on Rua Principal, the lively main road. The town is ringed by freshwater lagoons such as Paradise and Blue lagoons, and by Jericoacoara National Park, with vast sand dunes. Sunset Dune is a popular sundown viewpoint."
        ]);
        DB::table('beaches')->insert([
            "region_name" => "CE",
            "name" => "lagoinha",
            "description" => ""
        ]);

        DB::table('beaches')->insert([
            "region_name" => "RJ",
            "name" => "rio_de_janeiro",
            "description" => "Rio de Janeiro is a huge seaside city in Brazil, famed for its Copacabana and Ipanema beaches, 38m Christ the Redeemer statue atop Mount Corcovado and for Sugarloaf Mountain, a granite peak with cable cars to its summit. The city is also known for its sprawling favelas (shanty towns). Its raucous Carnaval festival, featuring parade floats, flamboyant costumes and samba dancers, is considered the world’s largest."
        ]);
        DB::table('beaches')->insert([
            "region_name" => "RJ",
            "name" => "cabo_frio",
            "description" => "Cabo Frio is a municipality in the Brazilian state of Rio de Janeiro. Its beaches include central Praia das Dunas and Praia do Forte, both known for their strong surf. Praia das Conchas has calmer waters. Passagem, the city’s oldest area, features colonial buildings and the Capela de São Benedito, a 1701-built church. Overlooking the sea is 17th-century São Mateus fort, with its rusted cannons."
        ]);
        DB::table('beaches')->insert([
            "region_name" => "RJ",
            "name" => "paraty",
            "description" => "Paraty is a small town backed by mountains on Brazil's Costa Verde, between Rio de Janeiro and São Paulo. Its Portuguese colonial center has cobbled streets and 17th- and 18th-century buildings dating to its time as a port, during the Brazilian Gold Rush. Among its architectural landmarks is the waterfront Capela de Santa Rita, a whitewashed church built in 1722."
        ]);

        DB::table('beaches')->insert([
            "region_name" => "RN",
            "name" => "natal",
            "description" => "Natal is the capital city of the state of Rio Grande do Norte, on Brazil's northeastern tip. It's known for its extensive coastal sand dunes and star-shaped Forte dos Reis Magos, a 16th-century Portuguese fortress at the mouth of the Potengi River. North across the river, Genipabu is an area of towering dunes with a freshwater lagoon. The Via Costeira highway links a 15km stretch of beaches south of the fort."
        ]);

        DB::table('beaches')->insert([
            "region_name" => "SP",
            "name" => "ilha_bela",
            "description" => "Ilhabela is an archipelago off the southeast coast of Brazil. The main island, Ilha de São Sebastião, is known for beaches like Castelhanos, Curral and Jabaquara. On the island's west coast, Ilhabela city is home to the white-and-blue Nossa Senhora d’Ajuda church. In vast, forested Ilhabela State Park, trails lead to Gato and Água Branca waterfalls. Offshore dive sites include the Aymoré and Velasquez shipwrecks."
        ]);

        DB::table('beaches')->insert([
            "region_name" => "PE",
            "name" => "recife",
            "description" => "Recife, the capital of Brazil’s northeastern state of Pernambuco, is distinguished by its many rivers, bridges, islets and peninsulas. Recife Antigo, on its own island by the harbor, is the historic old town center dating to the 16th century. To its south, popular Boa Viagem Beach is sheltered by reefs and lined by tall apartment blocks, modern hotels and restaurants."
        ]);

        // DB::table('beaches')->insert([
        //     "region_name" => "",
        //     "name" => "",
        //     "description" => ""
        // ]);
    }
}
