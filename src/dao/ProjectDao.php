<?php
class ProjectDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM projects $str_limit");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }

    public function selectById(int $id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM projects WHERE service_id = $id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    public function inserts(array $fields, array $values)
    {
        if (count($fields) == 0) return false;
        if (count($values) == 0) return false;
        $fields_sql = implode(',', $fields);
        $fields_sql .= ',project_last,project_created';

        $project_last = date('Y-m-d H:i:s');
        $project_created = date('Y-m-d H:i:s');

        $values_sql = '';
        if (is_array($values[0])) {
            foreach ($values as $value) {
                $values_sql .= "(";
                foreach ($value as $v) {
                    $val_tmp = addslashes($v);
                    $values_sql .= "'$val_tmp',";
                }
                $values_sql .= "'" . $project_last . "','" . $project_created . "'),";
            }
            $values_sql = substr($values_sql, 0, -1);
        } else {
            $values_sql .= "(";
            foreach ($values as $v) {
                $val_tmp = addslashes($v);
                $values_sql .= "'$val_tmp',";
            }
            $values_sql .= "'" . $project_last . "','" . $project_created . "')";
        }
        // return "INSERT INTO projects ($fields_sql) VALUES $values_sql";
        return $this->mysqlAdapter->query("INSERT INTO projects ($fields_sql) VALUES $values_sql");
    }

    public function deleteByOrigin($origin = 'facebook')
    {
        return $this->mysqlAdapter->query("DELETE FROM projects WHERE project_origin = '$origin'");
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
    public function deleteFacebookPosts()
    {
        return $this->mysqlAdapter->query("DELETE FROM projects WHERE project_origin = 'facebook'");
    }

    private function schematize($row)
    {
        $row['project_img_url'] = $_ENV['HTTP_DOMAIN'] . "public/img.projects/" . $row['project_img'] . "?date=" . $row['project_last'];
        return $row;
    }
}
