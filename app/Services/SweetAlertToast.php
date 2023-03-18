<?php 

namespace App\Services;


class SweetAlertToast 
{


    public function success($message = '', $options = [])
    {
        return $this->prepareToastSession('success', '#a5dc86', $message, $options);
    }


    public function error($message = '', $options = [])
    {
        return $this->prepareToastSession('error', '#f27474', $message, $options);
    }


    public function warning($message = '', $options = [])
    {
        return $this->prepareToastSession('warning', '#fbbf24', $message, $options);
    }


    public function info($message = '', $options = [])
    {   
        return $this->prepareToastSession('info', '#3fc3ee', $message, $options);
    }


    public function question($message = '', $options = [])
    {
        return $this->prepareToastSession('question', '#87adbd', $message, $options);
    }



    private function prepareToastSession($toastType = '', $toastBackgroundColor = '', $message = '', $options = [])
    {
        $defaultOption = [
            'background' => $toastBackgroundColor,
            'color' => '#fff',
            'iconColor' => '#fff',
            'icon' => $toastType,
            'title' => $message,
        ];

        $finalOption = array_merge($defaultOption, $options);

        return session()->flash('swalToastOption', $finalOption);
    }

}