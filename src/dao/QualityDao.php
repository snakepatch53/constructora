<?php
class QualityDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    public function getLastId()
    {
        return $this->mysqlAdapter->getLastId();
    }

    public function select(int $limit = 0)
    {
        $str_limit = "";
        if ($limit) {
            $str_limit = " LIMIT $limit";
        }
        $resultset = $this->mysqlAdapter->query("SELECT * FROM qualities $str_limit");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }

    public function selectById(int $id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM qualities WHERE quality_id = $id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    // public function insert(
    //     string $slider_title,
    //     String $slider_img
    // ) {
    //     return $this->mysqlAdapter->query("
    //         INSERT INTO slider SET 
    //             slider_title='$slider_title',
    //             slider_img='$slider_img'
    //     ");
    // }

    // public function update(
    //     string $slider_title,
    //     string $slider_img,
    //     int $slider_id
    // ) {
    //     return $this->mysqlAdapter->query("
    //         UPDATE slider SET
    //             slider_title='$slider_title', 
    //             slider_img='$slider_img'
    //         WHERE slider_id=$slider_id
    //     ");
    // }

    // public function delete(string $slider_id)
    // {
    //     return $this->mysqlAdapter->query("DELETE FROM slider WHERE slider_id = $slider_id ");
    // }

    private function schematize($row)
    {
        $row['quality_img_url'] = $_ENV['HTTP_DOMAIN'] . "public/img.qualities/" . $row['quality_img'] . "?date=" . $row['quality_last'];
        return $row;
    }
}
