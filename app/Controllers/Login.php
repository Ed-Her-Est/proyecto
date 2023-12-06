<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function login()
    {
        return view('common/head') .
            view('common/menu') .
            view('usuario/login') .
            view('common/footer');
    }

    public function processLogin()
    {
        $username = $this->request->getVar('usuario');
        $password = $this->request->getVar('contrasenia');

        // Verifica las credenciales y procesa el inicio de sesión
        $authentication = service('authentication');
        $result = $authentication->attempt($username, $password);

         // Verifica si se ha enviado el formulario
    if ($this->request->getMethod() === 'POST') {
        $usuarioModel = model('UsuarioModel'); // Ajusta según sea necesario
        $usuario = $usuarioModel->where('usuario', $this->request->getPost('usuario'))
                                ->first();

        // Verifica si el usuario existe y la contraseña coincide
        if ($usuario && password_verify($this->request->getPost('contrasenia'), $usuario['contrasenia'])) {
            // Inicia sesión y redirige a la página principal o a donde sea necesario
            $session = session();
            $session->set('usuario_id', $usuario['ID_Usuario']);
            return redirect()->to('/paciente/agregar'); // Ajusta la redirección según sea necesario
        } else {
            // Muestra un mensaje de error, por ejemplo
            echo "Usuario o contraseña incorrectos";
        }
    }
}

    public function logout()
    {
         // Cierra la sesión
         $authentication = service('authentication');
         $authentication->logout();
 
         // Redirige al usuario a la página de inicio
         return redirect()->to('/');
    }
}
