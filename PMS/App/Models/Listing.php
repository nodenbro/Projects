<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model as Eloquent;

    class Listing extends Eloquent
    {
        public function users()
        {
            return $this->BelongsTo(Application::class);
        }
    }


?>