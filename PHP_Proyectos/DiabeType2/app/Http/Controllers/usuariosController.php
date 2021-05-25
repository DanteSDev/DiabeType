<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class usuariosController extends Controller
{
    /**
     * Determina el acceso a un usuario a la aplicación mediante sus datos
     * 
     * @param \Illuminate\Http\Request $Request
     * @return \Illuminate\Response
     * 
     */

    public function inicio()
    {
        if(Session::get('id')!= null){
            return view('vistaPrincipal');
        }
        else{
        return view('login');}
    }

    //Resquest trae todos los valores que hay dentro de un form 
    public function acceso(Request $Request)
    {
        $Request->validate([
            'usuario' => 'required',
            'password' => 'required'
        ]);

        // //Mandar a llamar variables dentro del request
        $usuario = $Request->input('usuario');
        $password = $Request->input('password');

        //el codigo que se quiere mandar a frontend y que se pinte es mediante una variable ej:$resultado
        //Guardar resultado de consulta a la tabla usuario mediante los datos de la vista
        //:: para eloquent significa que despues de que se llama una funcion o a una clase se van a poder usar funciones integradas en eloquent
        $resultado = Usuarios::select('*')
            ->where('usuario', '=', $usuario)
            ->where('password', '=', $password)
            ->first();

        $usuarioID = Usuarios::select('id')
            ->where('usuario',$usuario)
            ->get();
        $validacion = ($resultado != null ? true : false);
        $mensaje = ($validacion == false ? Alert::error('Error', 'Usuario y/o contraseña no válidos') : '');

        if ($validacion == false) {
            return view('login')
                ->with('mensaje', $mensaje);
        } else {
            Session::put('id',$usuarioID);
            
             

            return view('vistaPrincipal');
        }
    }

    public function registro()
    {
        return view('register');
    }

    public function crearUsuario(Request $Request)
    {

        $Request->validate([
            'nombre' => 'required|regex:/^[a-zA-Z -]+$/',
            'apellido' => 'required|regex:/^[a-zA-Z -]+$/',
            'usuario' => 'required|min:8|max:15',
            'password' => 'required',
            'email' => 'required'
        ]);

        $nombre = $Request->input('nombre');
        $apellido = $Request->input('apellido');
        $usuario = $Request->input('usuario');
        $password = $Request->input('password');
        $email = $Request->input('email');

        //Consulta que exista en la base de datos 
        //Todas las columnas de un registro = Usuarios::select('*')
        $resultado = Usuarios::select('*')
            ->where('nombre', '=', $nombre)
            ->where('apellidos', '=', $apellido)
            ->where('usuario', '=', $usuario)
            ->where('password', '=', $password)
            ->where('email', '=', $email)
            ->first();

        //condicion para 
        if ($resultado != null) {
            return view('register')
                ->with('mensaje', Alert::error('Error', 'El usuario ya se encuentra registrado'));
        }

        //Insertar el resultado para almacenar en la base de datos
        $id = Usuarios::insertGetId(
            [
                'nombre' => $nombre,
                'apellidos' => $apellido,
                'usuario' => $usuario,
                'password' => $password,
                'email' => $email,
                'created_at' => Carbon::now()
            ]
        );

        $mensaje = ($id == 0 ? Alert::error('Error', 'Usuario y/o contraseña no válidos') : Alert::success('Exito', 'Usuario registrado correctamente'));

        if ($id = !0) {
            return view('login')
                ->with('mensaje', $mensaje);
        } else {
            return view('register')
                ->with('mensaje', $mensaje);
        }
    }


     public function vistaPrincipal()
    {
        
        if(Session::get('id') == null){
            
            return view('login');
        } 
        else{
        return view('vistaPrincipal');
        }
    }


    public function consulta()
    {
        if(Session::get('id') == null){
            
        
            return view('login');
        } 
        else{
           
        
        

            
            return view('captura');
    }}

    public function capturaGlucosas(request $Request)
    {

        $array1=Session::get('id');
        $var1 = (string)$array1;
        $numGlucosa = $Request->input('numGlucosa');
        $idUsuario= $this->get_string_between($var1,":","}");
        $valorGlucosa = $Request->input('valorGlucosa');
        $fecha = Carbon::today();
        /*$fecha = $Request->input('');*/
        

        $resultado = DB::table('Glucosas')
            ->where('created_at', '=', $fecha)
            ->where('idUsuario',$idUsuario)
            ->first();

        if ($resultado == null) {

            $Glucosa = DB::table('Glucosas')->insert(
                [
                    'idUsuario' => $idUsuario,
                    'glucosa' . $numGlucosa => $valorGlucosa,
                    'created_at' => $fecha,


                ]
            );

            return view('captura');
        } else {
            if($numGlucosa==5){
                $Glucosa = DB::table('Glucosas')
                ->where('created_at', $fecha)
                ->where('idUsuario',$idUsuario)
                ->update(['glucosa' . $numGlucosa => $valorGlucosa]);

                $glucosa1= DB::table('Glucosas')
                ->where('created_at', $fecha)
                ->where('idUsuario',$idUsuario)
                ->pluck('glucosa1');
                $glucosa2= DB::table('Glucosas')
                ->where('created_at', $fecha)
                ->where('idUsuario',$idUsuario)
                ->pluck('glucosa2');
                $glucosa3= DB::table('Glucosas')
                ->where('created_at', $fecha)
                ->where('idUsuario',$idUsuario)
                ->pluck('glucosa3');
                $glucosa4= DB::table('Glucosas')
                ->where('created_at', $fecha)
                ->where('idUsuario',$idUsuario)
                ->pluck('glucosa4');
                $glucosa5= DB::table('Glucosas')
                ->where('created_at', $fecha)
                ->where('idUsuario',$idUsuario)
                ->pluck('glucosa5');
            
                $promedio= ((int)$glucosa1[0]+(int)$glucosa2[0]+(int)$glucosa3[0]+(int)$glucosa4[0]+(int)$glucosa5[0])/5;
                
                $resultado2 = DB::table('Promedios')
            ->where('fecha', '=', $fecha)
            ->where('idUsuario',$idUsuario)
            ->first();

            if($resultado2 != null){}

            else{

                $PromedioDia = DB::table('Promedios')->insert(
                    [
                        'idUsuario' => $idUsuario,
                        'promedio' => $promedio,
                        'fecha' => $fecha,
    
    
                    ]
                );
            
                return view('captura')
                ->with('mensaje', Alert::success('Exito', 'La Glucosa se registro con exito'));
                }
            }
            else{
            $Glucosa = DB::table('Glucosas')
                ->where('created_at', $fecha)
                ->where('idUsuario',$idUsuario)
                ->update(['glucosa' . $numGlucosa => $valorGlucosa]);

            return view('captura')
                ->with('mensaje', Alert::success('Exito', 'La Glucosa se registro con exito'));
                }
        }
    }

    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public function cerrarSesion()
    {
        Session::flush();
        return Redirect::route("SweetAlert");
    }
    
    public function consultaShow()
    {
        if(Session::get('id')!= null){
            return view('consulta');
        }
        else{
        return view('login');}
    }

    public function ConsultaFecha(request $Request)
    {
        $array1=Session::get('id');
        $var1 = (string)$array1;
        $fecha1 = $Request->input('fechaInicial');
        $fecha2 = $Request->input('fechaFinal');
        $idUsuario= $this->get_string_between($var1,":","}");

        $consulta = DB::table('Promedios')
        ->where('idUsuario',$idUsuario)
        ->whereBetween('fecha',[$fecha1,$fecha2])
        ->selectRaw('sum(Promedio)')
        ->get();

        $consulta2 = DB::table('Promedios')
        ->where('idUsuario',$idUsuario)
        ->whereBetween('fecha',[$fecha1,$fecha2])
        ->selectRaw('sum(promedio)')
        ->get();

        $var2 = (string)$consulta2;
        $suma= $this->get_string_between($var2,":","}");
        $datediff = strtotime($fecha1) - strtotime($fecha2);
        $sumad=abs(round($datediff/86400));
        $promedio1 = (int)$suma/((int)$sumad+1);

        return view('consulta')
        ->with('mensaje', Alert::success('Exito', 'Tu promedio es: '.$promedio1));
        }
    }

