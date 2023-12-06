<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuario extends BaseController
{
    public function index()
    {
       
    }
    // Añade esta función en tu controlador
public function login()
{
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

    // Si no se ha enviado el formulario o hay un error, muestra el formulario de inicio de sesión
    return view('common/head') .
           view('usuario/login') . // Crea la vista 'usuario/login' con el formulario de inicio de sesión
           view('common/footer');
}


    public function mostrar()
    {
        $usuarioModel = model('UsuarioModel'); // Cambiado a UsuarioModel
        $data['usuarios'] = $usuarioModel->findAll(); // Cambiado a 'usuarios'
           
            $session = session();
            if($session->get('logged_in')!=TRUE){
                return redirect('usuario/login','refresh');
            }
    
    
            $data['alumnos'] = $alumnoModel->findAll();
    
        return
            view('common/head') .
            
            view('usuario/mostrar', $data) . // Cambiado a 'usuario'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            
            view('usuario/agregar') . // Cambiado a 'usuario'
            view('common/footer');
    }

    public function insert()
    {
        $usuarioModel = model('UsuarioModel'); // Cambiado a UsuarioModel
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "usuario" => $_POST['usuario'],
            "contrasenia" => $_POST['contrasenia'],
            "email" => $_POST['email'],
            
        ];
        $usuarioModel->insert($data, false);
        return redirect('usuario/mostrar', 'refresh'); // Cambiado a 'usuario'
    }

    public function delete($ID_Usuario)
    {
        $usuarioModel = model('UsuarioModel'); // Cambiado a UsuarioModel
        $usuarioModel->delete($ID_Usuario); // Cambiado a 'id_usuario'
        return redirect('usuario/mostrar', 'refresh'); // Cambiado a 'usuario'
    }       

    public function editar($ID_Usuario)
    {
        $usuarioModel = model('UsuarioModel'); // Cambiado a UsuarioModel
        $data['usuario'] = $usuarioModel->find($ID_Usuario); // Cambiado a 'usuario'

        return
            view('common/head') .
            
            view('usuario/editar', $data) . // Cambiado a 'usuario'
            view('common/footer');
    }

    public function update()
    {
        $usuarioModel = model('UsuarioModel');
        
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "usuario" => $_POST['usuario'],
            "contrasenia" => $_POST['contrasenia'],
        ];
    
        // Verificar si 'email' está presente antes de intentar acceder a él
        if (isset($_POST['email'])) {
            $data["email"] = $_POST['email'];
        }
        
        $usuarioModel->update($_POST['id'], $data);
        return redirect('usuario/mostrar', 'refresh');
    }
    

    public function buscar()
    {
        $usuarioModel = model('UsuarioModel'); // Cambiado a UsuarioModel
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $email = $_GET['email'];
            $data['usuarios'] = $usuarioModel
                ->like('nombre', $nombre)
                ->like('email', $email)
                
                ->findAll();
        } else {
            $nombre = "";
            $data['usuarios'] = $usuarioModel->findAll(); // Cambiado a 'usuarios'
        }

        return
            view('common/head') .
          
            view('usuario/buscar', $data) . // Cambiado a 'usuario'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de usuarios
    }
}
