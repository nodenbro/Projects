<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model as Eloquent;

    class Application extends Eloquent
    {
        public function users()
        {
            return $this->BelongsTo(User::class);
        }
    }


?>