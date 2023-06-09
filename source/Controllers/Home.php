<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Models\Cliente;
use Source\Models\HilightProduct;

/**
 * Home Controllers
 * @package Source\Controllers
 */
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Home
     * 
     * @return array
     */

    public function index(): void
    {
        $hilightProducts = (new HilightProduct())->find("")->fetch(true);

        if (empty($hilightProducts)) {
            throw new \Exception("empty table hilights_products");
        }

        echo $this->view->render("home", [
            "title" => "Home",
            "hilightProducts" => $hilightProducts
        ]);
    }

    /**
     * Error
     *
     * @param array $data
     * @return void
     */
    public function error($data = [])
    {
        echo $this->view->render("error", [
            "title" => "Error",
            "error_code" => $data['error_code']
        ]);
    }
}
