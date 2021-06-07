<?php
namespace App\GraphQL\Mutations;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Scalar\String_;

class UserMutations
{
    public function __construct()
    {

    }

    public function updateUser($_, array $args)
    {
        $name = $args['name'];
        $email = $args['email'];

        $user = User::find($args['id']);
        if ($name != null) $user->name = $name;
        if ($email != null) $user->email = $email;
        $user->save();

        return $user ;
    }

}
