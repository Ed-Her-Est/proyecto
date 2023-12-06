<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $data['title'] = "Agregar Usuario";
        $validation =  \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head') .
                view('usuario/login') .
                view('common/footer');
        }

        $rules = [
            'usuario' => 'required',
            'contrasenia' => 'required'
        ];

        if (!$this->validate($rules)) {
            // Si la validación no pasa, regresa a la vista de inicio de sesión
            return view('common/head') .
                view('usuario/login') .
                view('common/footer');
        } else {
            // Si pasa las reglas
            $usuario = $this->request->getPost('usuario');
            $contrasenia = $this->request->getPost('contrasenia');

            $userModel = model('UserModel');
            $fisioterapeutaModel = model('FisioterapeutaModel');

            // Verifica en la tabla User
            $userData = $userModel->where('usuario', $usuario)
                                 ->where('contrasenia', $contrasenia)
                                 ->first();

            // Verifica en la tabla Fisioterapeuta si no se encuentra en User
            if (!$userData) {
                $userData = $fisioterapeutaModel->where('usuario', $usuario)
                                               ->where('contrasenia', $contrasenia)
                                               ->first();

                if ($userData) {
                    // Fisioterapeuta autenticado
                    $session = session();

                    $newdata = [
                        'ID_Fisioterapeuta' => $userData['ID_Fisioterapeuta'],
                        'nombre'  => $userData['nombre'],
                        'logged_in' => true,
                    ];

                    $session->set($newdata);

                    return redirect()->to('paciente/agregar'); // Redirige a la vista de agregar paciente para el fisioterapeuta
                }
            } else {
                // Usuario normal autenticado
                $session = session();

                $newdata = [
                    'ID_Usuario' => $userData['ID_Usuario'],
                    'Usuario'  => $userData['usuario'],
                    'contrasenia' => $userData['contrasenia'],
                    'logged_in' => true,
                ];

                $session->set($newdata);

                return redirect()->to('cita/agregar'); // Redirige a la vista de agregar cita para el usuario normal
            }

            // Las credenciales no son correctas, regresa a la vista de inicio de sesión
            $data['error'] = 'Credenciales incorrectas';
            return view('common/head') .
                view('usuario/login', $data) .
                view('common/footer');
        }
    }
}
