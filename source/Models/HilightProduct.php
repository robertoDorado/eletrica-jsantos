<?php
namespace Source\Models;

use Source\Core\Model;

/**
 * HilightProduct Models
 * @link 
 * @author Roberto Dorado <robertodorado7@gmail.com>
 * @package Source\Models
 */
class HilightProduct extends Model
{
    private string $tableName = CONF_DB_NAME . ".hilights_products";
    /**
     * HilightProduct constructor
     */
    public function __construct()
    {
        parent::__construct($this->tableName, ["id"], ["title", "tag", "current_price", "last_price", "img"]);
    }
}
