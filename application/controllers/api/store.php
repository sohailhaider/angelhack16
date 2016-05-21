<?php

class Store extends CI_Controller
{
    public function search($name)
    {
        $data = [
            [
                'logitude' => "31.5865147",
                'latitude' => '73.0542684',
                'storename' => 'Ali Baba'
            ],
            [
                'logitude' => "31.5865147",
                'latitude' => '73.0542684',
                'storename' => 'Ali Baba'
            ],
            [
                'logitude' => "31.5865147",
                'latitude' => '73.0542684',
                'storename' => 'Ali Baba'
            ],
            [
                'logitude' => "31.5865147",
                'latitude' => '73.0542684',
                'storename' => 'Ali Baba'
            ]
        ];

        echo json_encode($data);
    } //function
}