<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;
use App\Repositorios\NoticiasRepo;



class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $ProductoRepo;
    protected $NoticiasRepo;
  

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                EmpresaRepo  $EmpresaRepo,
                                ProductoRepo $ProductoRepo,
                                NoticiasRepo $NoticiasRepo )
    {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->ProductoRepo = $ProductoRepo;
        $this->NoticiasRepo = $NoticiasRepo;
    }

    public function get_home(Request $Request)
    {
        
        $Route                = 'post_contacto_form';       
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos(); 
        $ProductosNuevos      = Cache::remember('ProductosNuevosHome', 30, function() use ($Request) {
                                   return $this->ProductoRepo->getUltimasEntidadesRegistradasRandomActive($Request,4) ; 
               
                                });
        $Noticia              = $NoticiasRepo->getEntidad()->last();  

        return view('paginas.home.home', compact('Route','Empresa','ProductosNuevos','Noticia'));
    }


}
