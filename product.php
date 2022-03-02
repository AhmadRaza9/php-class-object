<?php

class Product
{

    public $title;
    public $description;

    public function get_all_products($db_table)
    {
        $query = "SELECT * FROM " . $db_table;
        $product = $this->find_query($query);
        return $product;
    }

    public function find_query($query)
    {
        global $connection;
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query Faield" . mysqli_errno($connection));
        }
        $product = mysqli_fetch_all($result);
        return $product;

    }

    public function show_products_on_frontend()
    {
        $products = $this->get_all_products("products");
        foreach ($products as $product) {

            $this->title = $product[1];
            $this->description = $product[2];
            echo "
                <div class='flip-card'>
                <div class='flip-card-inner'>
                    <div class='flip-card-front'>
                        <h1>$this->title</h1>
                    </div>
                    <div class='flip-card-back'>
                        <p>$this->description</p>
                    </div>
                </div>
                </div>";

        }
    }

}
