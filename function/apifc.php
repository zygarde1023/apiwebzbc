<?php
class APIFC
{
    /**
     * GET ...
     * Title GET
     * @Description GET all the products
     * API from https://rdapi.herokuapp.com/
     * 
     */
    function get_products()
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
        $data = json_decode($json, true);
        return $data['records'];
    }

    function get_single_product($id)
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id=' . $id);
        return json_decode($json, true);
    }

    function get_categories()
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
        $data = json_decode($json, true);
        return $data['records'];
    }

    function search($keyword)
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s=' . $keyword);
        $data = json_decode($json, true);
        return $data['records'];
    }
}

$apis = new APIFC;
?>