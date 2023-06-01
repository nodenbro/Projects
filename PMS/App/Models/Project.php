<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model as Eloquent;

    class Project extends Eloquent
    {
        public function user()
        {
            return $this->BelongsTo(User::class);
        }
    }


?>