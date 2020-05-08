<?php
class TrainerController
{
    public function index()
    {
        $trainer_list = trainer::getAll();
        require_once('views/trainer/index_trainer.php') ;
    }
}
?>