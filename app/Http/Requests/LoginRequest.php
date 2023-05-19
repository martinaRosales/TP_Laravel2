<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array {
        return [
            'usuario' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials() {
        $nombreUsuario = $this->get( 'usuario' );
        $contraseña = $this->get( 'password' );

        $array = [
            'usuario' => $nombreUsuario,
            'password' => $contraseña
        ];
        if( $this->isEmail($nombreUsuario) ){
            $array = [
                'email' => $nombreUsuario, 
                'password' => $contraseña
            ];
        }
        return $array;
    }

    /**
     * Método que verifica si lo que se ingresa es un email
     * @param $value
     * @return bool
     */
    public function isEmail( $value ){
        // Construyo validación en base a clase específica
        $factory = $this->container->make( ValidationFactory::class );
        $objValidator = $factory->make( ['usuario' => $value], ['usuario' => 'email'] );
        $bandera = $objValidator->fails();
        return !$bandera;
    }

}