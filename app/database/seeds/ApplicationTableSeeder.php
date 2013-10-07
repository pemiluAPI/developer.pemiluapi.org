<?php

class ApplicationTableSeeder extends Seeder {

    public function run()
    {
        $title = 'PemiluAPI Developer';

        DB::table('applications')->where('title', '=', $title)->delete();

        $application = array(
            'title' => $title,
            'api_key' => md5($title)
        );

        Application::create($application);
    }

}