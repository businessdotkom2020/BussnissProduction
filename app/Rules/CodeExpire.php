<?php
namespace App\Rules;

use App\Models\PasswordReset;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
class CodeExpire implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $password_resset = PasswordReset::where('code', Request()->code)->first();

        if($password_resset)
            return $password_resset->updated_at >=  \Carbon\Carbon::now()->subHours(1)  ;

        return true;
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Code Expired please try to send Code again';
    }
}
