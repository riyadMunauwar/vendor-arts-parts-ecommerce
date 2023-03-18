<?php 

namespace App\Services;

class SweetAlert 
{


    public function success($title = '', $message = '', $options = ['color' => 'white', 'iconColor' => 'white'])
    {
        return $this->prepareToastSession('success', '#a5dc86', $title, $message, $options);
    }


    public function error($title = '', $message = '', $options = ['color' => 'white', 'iconColor' => 'white'])
    {
        return $this->prepareToastSession('error', '#f27474', $title,  $message, $options);
    }


    public function warning($title = '', $message = '', $options = ['color' => 'white', 'iconColor' => 'white'])
    {
        return $this->prepareToastSession('warning', '#fbbf24', $title, $message, $options);
    }


    public function info($title = '', $message = '', $options = ['color' => 'white', 'iconColor' => 'white'])
    {   
        return $this->prepareToastSession('info', '#3fc3ee',$title, $message, $options);
    }



    public function question($title = '', $message = '', $options = ['color' => 'white', 'iconColor' => 'white'])
    {
        return $this->prepareToastSession('question', '#87adbd', $title, $message, $options);
    }


    public function message($title = '', $message = '', $options = ['color' => 'white', 'iconColor' => 'white'])
    {
        return $this->prepareToastSession(false, '#fff', $title, $message, $options);
    }



    private function prepareToastSession($toastType = false, $toastBackgroundColor = false, $title,  $message = '', $options = [])
    {
        $defaultOption = [
            'background' => $toastBackgroundColor ?? '#fff',
            'color' => '#6b7280',
            'iconColor' => '#64748b',
            'icon' => $toastType,
            'title' => $title,
            'text' => $message
        ];

        $finalOption = array_merge($defaultOption, $options);

        return session()->flash('swalOption', $finalOption);
    }

}