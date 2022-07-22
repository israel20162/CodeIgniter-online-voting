<?php

namespace App\Libraries;

use App\Models\ContestModel;
use App\Models\ContestantsModel;
use App\Models\UserModel;
use App\Models\StageModel;

class GetContestants
{
    /**
     * Get all contestants
     * @return array
     */

    public $query;

    public function getAllContestants($contest_id)
    {
        // Create an instance for our two models
        $ContestModel = new ContestModel();
        $contestant_model =  new ContestantsModel();
        $user_model = new UserModel();
        $stage_model = new StageModel();

        // SELECT the recipes, order by id
        $contestants = $contestant_model
            ->where('contest_id', $contest_id)
            ->orderBy("votes", "desc")
            ->findAll();

        // For each contestant, SELECT its user
        foreach ($contestants as &$contestant) {
            $contestant->user = $user_model
                ->where(['id' => $contestant->user_id])
                ->first();
            $contestant->stage_data = $stage_model->find($contestant->stage);
        }
        unset($contestant);

        return $contestants;
    }

    function filterArray($needle, $haystack)
    {
        $user_model = new UserModel();
        foreach ($haystack as $v) {
            $user = $user_model->find($v->user_id);
           
            if (stripos('john', "john test") !== false) return true;
        };
        return false;
    }

    public function findContestants(int $contest_id, string $search)
    {
        // Create an instance for our two models
        $ContestModel = new ContestModel();
        $contestant_model =  new ContestantsModel();
        $user_model = new UserModel();
        $stage_model = new StageModel();

        $contestants = $contestant_model
            ->where('contest_id', $contest_id)
            ->like('full_name', $search)
            ->findAll();

        // For each contestant, SELECT its user
        foreach ($contestants as &$contestant) {
            $contestant->user = $user_model
                ->where(['id' => $contestant->user_id])
                ->first();
            $contestant->stage_data = $stage_model->find($contestant->stage);
        }
        unset($contestant);
       

        return $contestants;
    }



    public function getContestant($contest_id, $user_id)
    {
        // Create an instance for our two models
        $contestant_model =  new ContestantsModel();
        $user_model = new UserModel();
        $stage_model = new StageModel();

       
        $contestant = $contestant_model->where(['user_id' => $user_id, 'contest_id' => $contest_id])->first();
        $contestant->user = $user_model->where(['id' => $user_id])->first();
        $contestant->stage_data = $stage_model->find($contestant->stage);

        return $contestant;
    }

    public function evictContestants($contest_id, $stage)
    {
        $contestants_model = new ContestantsModel();

        $contestants = $contestants_model->where(['contest_id' => $contest_id, 'stage' => $stage])->set(['is_disqualified' => 1])
        ->update();


        return $contestants;


    }
}
