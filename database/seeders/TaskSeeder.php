<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
               'task_name'=>"Installation des barrières de sécurtié",
               'task_details'=>'Vendredi, 23 Juillet',
               'user_id'=>'1',
            ],
            [
                'task_name'=>"Installation des chaises",
                'task_details'=>'Vendredi, 23 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Installation de la scène 1",
                'task_details'=>'Vendredi, 23 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Installation de la scène 2",
                'task_details'=>'Vendredi, 23 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Accueil des festivaliers à l'entrée",
                'task_details'=>'Vendredi, 23 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Vérification des stands",
                'task_details'=>'Samedi, 24 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Vérification de l'état des toilettes",
                'task_details'=>'Samedi, 24 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Mettre l'éclairage manquant sur la scène 2",
                'task_details'=>'Samedi, 24 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Vérification du matériel de secours",
                'task_details'=>'Samedi, 24 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Décoration de l'entrée 1",
                'task_details'=>'Samedi, 24 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Décoration de l'entrée 2",
                'task_details'=>'Dimanche, 25 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Vérification de l'état des casiers",
                'task_details'=>'Dimanche, 25 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Apporter 3 micros pour la scène 1",
                'task_details'=>'Dimanche, 25 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Vider les poubelles pleines",
                'task_details'=>'Dimanche, 25 Juillet',
                'user_id'=>'1',
             ],
             [
                'task_name'=>"Ranger le matériel",
                'task_details'=>'Dimanche, 25 Juillet',
                'user_id'=>'1',
             ],
        ];

        foreach ($tasks as $key => $value) {
            Task::create($value);
        }
    }
}
