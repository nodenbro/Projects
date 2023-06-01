<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model as Eloquent;

    class Company extends Eloquent
    {
        public function users()
        {
            return $this->hasMany(User::class);
        }
    }


?>