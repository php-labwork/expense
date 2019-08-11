<?php

    namespace App\Transformers;

    use App\User;
    use League\Fractal\TransformerAbstract;

    class UserTransformer extends TransformerAbstract {
        public function transform(User $user) {
            return [
                'id_user'            => $user->id,
                'full_name'         => $user->name,
                'email'            => $user->email,
                'avatar'            => $user->avatar,
                'type'            => ($user->type == 0) ? "guest" : "administrator",
                'token'            => $user->api_token,
            ];
        }
    }