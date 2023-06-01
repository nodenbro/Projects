<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model as Eloquent;

    class User extends Eloquent
    {
        public function projects()
        {
            return $this->hasMany(Project::class);
        }

        public function company()
        {
            return $this->BelongsTo(Company::class);
        }
    }


?>