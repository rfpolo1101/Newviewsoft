<?php
class Usuario extends Controlador
{

    //Metodo constructor para llamar a los metodos
    public function __construct()
    {
        $this->usuarioModelo = $this->modelo("User");

    }

    public function index()
    {

        session_start();
        if (isset($_SESSION['Administrador'])) {
            $this->vista('/inicio/admtd');
        }
        if (isset($_SESSION['Apoyo_admin'])) {
            $this->vista('/inicio/apymd');
        }
        if (isset($_SESSION['Instructor'])) {
            $this->vista('/inicio/ivtd');
        }
    }

    public function ayuda(){
        session_start();
        if (!isset($_SESSION['Administrador']) && !isset($_SESSION['Apoyo_admin']) && !isset($_SESSION['Instructor']) && !isset($_SESSION["Super_admin"])) {
            header('Location:' . RUTA_URL . '/inicio');
        }else{

            $this->vista("general/ayuda");
        }
    }

    //Metodo el cual permite asignar roles
    public function asignar($tipo)
    {
        session_start();

        if (!isset($_SESSION['Super_admin']) && !isset($_SESSION["Administrador"])) {
            header('Location:' . RUTA_URL . '/inicio');
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    "tipo_documento" => $_POST["tipo_documento"],
                    'documento' => trim($_POST['documento']),
                    'cargo' => trim($_POST['cargo']),
                    'tipo' =>  trim($tipo),
                ];

                $this->usuarioModelo->documento($datos);
                if ($this->usuarioModelo->asignar($datos)) {

                    $_SESSION["crear"] = "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                    <strong>Correcto:  </strong>Permiso asiganado con exito</div></div>";
                    $this->vista('superAdministrador/' . $tipo);
                } else {

                    $_SESSION   ["crear"] =  "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                    <strong>Error:  </strong>No se pudo asignar el rol intente de nuevo</div></div>";
    
                    $this->vista('superAdministrador/' . $tipo);

                }
            } else {

                $this->vista('superAdministrador/' . $tipo);
            }
        }
    }

    //Metodo el cuale permite ver y modificar el perfil
    public function perfil()
    {
        session_start();

        if (!isset($_SESSION['Super_admin']) && !isset($_SESSION['Administrador']) && !isset($_SESSION['Apoyo_admin']) && !isset($_SESSION['Instructor'])) {
            header('Location:' . RUTA_URL . '/inicio');
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [

                    "correo" => $_POST["correo"],
                    "primer_nombre" => $_POST["primer_nombre"],
                    "segundo_nombre" => $_POST["segundo_nombre"],
                    "primer_apellido" => $_POST["primer_apellido"],
                    "segundo_apellido" => $_POST["segundo_apellido"],
                    "password" => $_POST["contrasena"],

                ];

                if ($this->usuarioModelo->actualizarPefil($datos)) {

                    $resul = $this->usuarioModelo->perfiles();

                    $dato = ["datos" => $resul,];
                    $_SESSION["crear"] = "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                    <strong>Correcto:  </strong>Perfil Actualizado</div></div>";

                    $_SESSION['nombre'] = $datos["primer_nombre"];
                    $_SESSION['apellido'] = $datos["primer_apellido"];
                    $this->vista('general/perfil', $dato);
                } else {

                    $resul = $this->usuarioModelo->perfiles();

                    $dato = [

                        "datos" => $resul,
                    ];
                    $_SESSION   ["crear"] =  "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                    <strong>Error:  </strong>No se puedo cambiar el perfil verifique los datos</div></div>";

                    $this->vista('general/perfil', $dato);
                }
            } else {
                $resul = $this->usuarioModelo->perfiles();

                $dato = [

                    "datos" => $resul,
                ];
                $_SERVER["crear"] = true;
                $this->vista('general/perfil', $dato);

            }
        }
    }

    public function actualizarContrasena(){
        session_start();

        if (!isset($_SESSION['Super_admin']) && !isset($_SESSION['Administrador']) && !isset($_SESSION['Apoyo_admin']) && !isset($_SESSION['Instructor'])) {
            header('Location:' . RUTA_URL . '/inicio');
        } else {

               //verifica si los envíos de formulario se realizaron correctamente
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [

                'codigo' => trim($_POST['contrasenan']),
                'contrasena' => trim($_POST['contrasena']),
                'contrasenav' => trim($_POST['contrasenav']),
            ];

          
            if ($this->usuarioModelo->cambiarContraseña($datos)) {
                
                $_SESSION["crear"] = "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                <strong>Correcto:  </strong>El cambio de contraseña fue realizado</div></div>";

                    
                $resul = $this->usuarioModelo->perfiles();

                    $dato = [

                        "datos" => $resul,
                    ];
                    $this->vista('general/perfil', $dato);

            } else {
                $_SESSION   ["crear"] =  "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                <strong>Error:  </strong>No se puedo cambiar la contraseña</div></div>";

                $resul = $this->usuarioModelo->perfiles();

                $dato = [

                    "datos" => $resul,
                ];
               
                $this->vista('general/perfil', $dato);

            }

        }else {

                $resul = $this->usuarioModelo->perfiles();

                $dato = [

                    "datos" => $resul,
                ];
                
                $this->vista('general/perfil', $dato);
        }



        }
    }

}
