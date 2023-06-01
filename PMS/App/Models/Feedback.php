<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model as Eloquent;

    class Feedback extends Eloquent
    {
        public function users()
        {
            return $this->belongsTo(User::class);
        }
    }


?>