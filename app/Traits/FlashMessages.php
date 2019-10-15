<?php

namespace App\Traits;

/**
 * Trait FlashMessages
 * @package App\Traits
 */
trait FlashMessages
{

    protected $errorMessages = [];
    protected $infoMessages = [];
    protected $successMessages = [];
    protected $warningMessages = [];

    protected function setFlashMessage($message, $type)
    {
        $model = 'infoMessages';

        switch($type){

            case 'info':{
                $model = 'infoMessages';
            }
            break;

            case 'error':{
                $model = 'errorMessages';
            }
            break;

            case 'info':{
                $model = 'successMessages';
            }
            break;

            case 'info':{
                $model = 'warningMessages';
            }
            break;
        }

        if(is_array($message)){
            foreach ($message as $key => $value){
                array_push($this->model, $value);
            }
        }else{
            array_push($this->$model, $message);
        }
    }

    protected function getFlashMessage(){
        return[
            'error'     => $this->errorMessages,
            'info'      => $this->infoMessages,
            'success'   => $this->successMessages,
            'warning'   => $this->warningMessages,
        ];
    }

    protected function showFlashMessages(){
        session()->flash('error', $this->errorMessages);
        session()->flash('info', $this->infoMessages);
        session()->flash('success', $this->successMessages);
        session()->flash('warning', $this->warningMessages);
    }

}
