<?php

use Illuminate\Database\Seeder;

class spa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			// spa_services
            DB::table('spa_services')->insert([
                'id' => 1,
                'nombre' => 'Masaje Atlético',
                'descripcion' => 'Energía 360ºMuscular energético. Recomendado para aliviar tensiones y dolores musculares o para aquellos que disfruten del masaje fuerte.',
                'precio' => 65.00,
            ]);
            DB::table('spa_services')->insert([
                'id' => 2,
                'nombre' => 'Masaje relajante canario 25´',
                'descripcion' => 'Basado en una tradicional técnica. Los resultados incluyen incremento de la circulación, relajación profunda y reducción del estrés.',
                'precio' => 40.00,
            ]);
            DB::table('spa_services')->insert([
                'id' => 3,
                'nombre' => 'Masaje relajante canario 50´',
                'descripcion' => 'Basado en una tradicional técnica. Los resultados incluyen incremento de la circulación, relajación profunda y reducción del estrés.',
                'precio' => 60.00,
            ]);
            DB::table('spa_services')->insert([
                'id' => 4,
                'nombre' => 'Masaje espalda craneal',
                'descripcion' => 'Espalda, cuello ,hombros y craneal.Espectacular masaje sobre toda la espalda, cuello y hombros. Para el alivio de las tensiones y el estrés acumulados en el viaje.',
                'precio' => 45.00,
            ]);

            // spa_services_horario
            DB::table('spa_services_horario')->insert([
                'id' => 1,
                'service_id' => 1,
                'dia' => '2020-04-22',
                'inicio' => 10,
                'fin' => 18,
            ]);
            DB::table('spa_services_horario')->insert([
                'id' => 2,
                'service_id' => 1,
                'dia' => '2020-04-23',
                'inicio' => 10,
                'fin' => 18,
            ]);
            DB::table('spa_services_horario')->insert([
                'id' => 3,
                'service_id' => 1,
                'dia' => '2020-04-24',
                'inicio' => 10,
                'fin' => 18,
            ]);
            DB::table('spa_services_horario')->insert([
                'id' => 4,
                'service_id' => 1,
                'dia' => '2020-04-25',
                'inicio' => 10,
                'fin' => 18,
            ]);
            DB::table('spa_services_horario')->insert([
                'id' => 5,
                'service_id' => 1,
                'dia' => '2020-04-26',
                'inicio' => 10,
                'fin' => 18,
            ]);
            DB::table('spa_services_horario')->insert([
                'id' => 6,
                'service_id' => 1,
                'dia' => '2020-04-27',
                'inicio' => 10,
                'fin' => 16,
            ]);
            DB::table('spa_services_horario')->insert([
                'id' => 7,
                'service_id' => 2,
                'dia' => '2020-04-23',
                'inicio' => 12,
                'fin' => 15,
            ]);

            // spa_services_lng
            DB::table('spa_services_lng')->insert([
                'id' => 1,
                'service_id' => 1,
                'lng_iso3' => 'eng',
                'nombre' => 'Athletic Massage',
                'descripcion' => 'Energy 360º Muscular energy. Recommended to relieve muscle tension and pain or for those who enjoy strong massage.',
            ]);
            DB::table('spa_services_lng')->insert([
                'id' => 2,
                'service_id' => 1,
                'lng_iso3' => 'rus',
                'nombre' => 'Спортивный массаж',
                'descripcion' => 'Энергия 360º Мышечная энергия. Рекомендуется для снятия мышечного напряжения и боли или для тех, кто любит сильный массаж.',
            ]);
            DB::table('spa_services_lng')->insert([
                'id' => 3,
                'service_id' => 2,
                'lng_iso3' => 'eng',
                'nombre' => 'Canarian relaxing massage 25´',
                'descripcion' => 'Based on a traditional technique. The results include increased circulation, deep relaxation and stress reduction.',
            ]);
            DB::table('spa_services_lng')->insert([
                'id' => 4,
                'service_id' => 2,
                'lng_iso3' => 'rus',
                'nombre' => 'Канарский расслабляющий массаж 25´',
                'descripcion' => 'На основе традиционной техники. Результаты включают увеличение циркуляции, глубокое расслабление и снижение стресса.',
            ]);
            DB::table('spa_services_lng')->insert([
                'id' => 5,
                'service_id' => 3,
                'lng_iso3' => 'eng',
                'nombre' => '50´ Canarian relaxing massage',
                'descripcion' => 'Based on a traditional technique. The results include increased circulation, deep relaxation and stress reduction.',
            ]);
            DB::table('spa_services_lng')->insert([
                'id' => 6,
                'service_id' => 3,
                'lng_iso3' => 'rus',
                'nombre' => '50´ Канарский расслабляющий массаж',
                'descripcion' => 'На основе традиционной техники. Результаты включают увеличение циркуляции, глубокое расслабление и снижение стресса.',
            ]);
            DB::table('spa_services_lng')->insert([
                'id' => 7,
                'service_id' => 4,
                'lng_iso3' => 'eng',
                'nombre' => 'Cranial back massage',
                'descripcion' => 'Back, neck, shoulders and cranial. Spectacular massage over the entire back, neck and shoulders. For the relief of tensions and stress accumulated on the trip.',
            ]);
            DB::table('spa_services_lng')->insert([
                'id' => 8,
                'service_id' => 4,
                'lng_iso3' => 'rus',
                'nombre' => 'Черепной массаж спины',
                'descripcion' => 'Спина, шея, плечи и череп. Захватывающий массаж всей спины, шеи и плеч. Для снятия напряженности и стресса, накопленного в поездке.',
            ]);

            // spa_services_reserva
            DB::table('spa_services_reserva')->insert([
                'id' => 1,
                'created_at' => '2020-03-10 00:58:50',
                'updated_at' => '2020-03-10 00:58:50',
                'service_id' => 1,
                'nombre' => 'Tom Sumkin',
                'commentarios' => 'English personal plz)',
                'dia' => '2020-04-23',
                'hora' => 12,
                'precio' => 65.00,
            ]);
            DB::table('spa_services_reserva')->insert([
                'id' => 2,
                'created_at' => '2020-03-09 23:54:57',
                'updated_at' => '2020-03-09 23:54:57',
                'service_id' => 1,
                'nombre' => 'Tom Sumkin',
                'commentarios' => 'nope',
                'dia' => '2020-04-23',
                'hora' => 15,
                'precio' => 65.00,
            ]);

    }
}
