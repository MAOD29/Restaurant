<?php
require_once 'ModeloBase.php';

class Pedido extends ModeloBase
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexpedido($status, $search, $startOfPaging, $amountOfThePaging)
    {
        $db = new ModeloBase();
        if (empty($search)) {
            $sql = "SELECT * FROM pedidos where status  = $status  ORDER BY fecha DESC LIMIT $startOfPaging ,$amountOfThePaging ";
        } else {
            $sql = "SELECT * FROM pedidos WHERE status = $status AND fecha = $search ORDER BY fecha LIMIT $startOfPaging,$amountOfThePaging";
        }
        return  $db->index($sql);
    }
    public function storepedido($datos)
    {

        $db = new ModeloBase();
        $insert = $db->store('pedidos', $datos);
        if ($insert) $_SESSION['mensaje'] = 'Registro exitoso';
    }
    public function editarpedido($id)
    {
        $db = new ModeloBase();
        return $db->edit('pedidos', $id);
    }
    public function ticket($id)
    {
        $db = new ModeloBase();

        $sql = "SELECT pedidos.id,pedidos.descripcion,pedidos.fecha,pedidos.total, usuarios.nombre,usuarios.apellidos,usuarios.email,usuarios.id as id_cliente,pedidos.cantidad
        FROM pedidos
        left JOIN usuarios
        ON pedidos.id_cliente = usuarios.id  Where pedidos.id = $id ";

        return $db->show($sql);
    }
    public function getarticulos($id)
    {
        $db = new ModeloBase();

        $sql = "SELECT articulos.id,articulos.nombre,articulos.precio
        FROM articulos Where articulos.id = $id ";

        return $db->show($sql);
    }
    public function destroypedido($id)
    {
        $db = new ModeloBase();
        return $db->destroy('pedidos', $id);
    }
    public function updatepedido($datos)
    {
        $db = new ModeloBase();
        $sql = "UPDATE pedidos SET status=:status  WHERE id=:id;";

        return $db->update($sql, $datos);
    }
    public function paginationpedido($search)
    {

        $db = new ModeloBase();
        $sql = "SELECT COUNT(id) FROM pedidos WHERE status = 1";

        if (!empty($search)) {
            $sql = "SELECT COUNT(fecha) FROM pedidos  WHERE fecha = $search and status = 1 ";
        }
        $number_of_rows = $db->pagination($sql);
        $section = ceil($number_of_rows / 8);

        return $section;
    }
    public function paginationventa($search)
    {

        $db = new ModeloBase();
        $sql = "SELECT COUNT(id) FROM pedidos WHERE status = 2;";

        if (!empty($search)) {
            $sql = "SELECT COUNT(fecha) FROM pedidos  WHERE fecha = $search AND status = 2 ";
        }
        $number_of_rows = $db->pagination($sql);
        $section = ceil($number_of_rows / 8);

        return $section;
    }
    public function obtener()
    {
        $db = new ModeloBase();

        $sql = "SELECT * FROM pedidos";

        return  $db->index($sql);
    }
    public function obtenerid()
    {
        $db = new ModeloBase();
        $sql = "SELECT MAX(id) FROM pedidos";
        return $db->show($sql);
    }
    public function getcompras($id)
    {
        $db = new ModeloBase();

        $sql = "SELECT * FROM pedidos where id_cliente = $id";

        return  $db->index($sql);
    }
}
