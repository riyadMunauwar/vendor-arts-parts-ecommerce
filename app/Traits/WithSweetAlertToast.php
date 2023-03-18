<?php


namespace App\Tratis;


trait WithSweetAlertToast 
{

    public function success($title)
    {
        $this->fireBrowserEvent([
            'color' => '#fff',
            'iconColor' => '#fff',
            'background' => '#a5dc86',
            'icon' => 'success',
            'title' => $title,
        ]);
    }

    public function error($title)
    {
        $this->fireBrowserEvent([
            'color' => '#fff',
            'iconColor' => '#fff',
            'background' => '#f27474',
            'icon' => 'error',
            'title' => $title,
        ]);
    }


    public function warning($title)
    {
        $this->fireBrowserEvent([
            'color' => '#fbbf24',
            'iconColor' => '#fff',
            'background' => '#f27474',
            'icon' => 'warning',
            'title' => $title,
        ]);
    }

    public function info($title)
    {
        $this->fireBrowserEvent([
            'color' => '#fff',
            'iconColor' => '#fff',
            'background' => '#3fc3ee',
            'icon' => 'info',
            'title' => $title,
        ]);
    }

    public function question($title)
    {
        $this->fireBrowserEvent([
            'color' => '#fff',
            'iconColor' => '#fff',
            'background' => '#87adbd',
            'icon' => 'question',
            'title' => $title,
        ]);
    }

    public function toast($options = [])
    {
        $this->fireBrowserEvent($options);
    }


    private function preparedOptions($options)
    {
        $defaultOptions = [
            'color' => '',
            'iconColor' => '',
            'background' => '',
            'icon' => 'success',
            'title' => '',
        ];

        return array_merge($defaultOptions, $options);
    }

    

    private function fireBrowserEvent($config)
    {
        $this->dispatchBrowserEvent('init:swalToast', $this->preparedOptions($options));
    }
}