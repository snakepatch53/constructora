<?php
class CustomerDao
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

    public function select()
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM customers");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }

    public function selectById($id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM customers WHERE customer_id = $id");
        $row = mysqli_fetch_assoc($resultset);
        if (mysqli_num_rows($resultset) == 0) return [];
        return $this->schematize($row);
    }

    // public function insert(
    //     $user_name,
    //     $user_user,
    //     $user_pass,
    //     $user_photo
    // ) {
    //     $user_last = date('Y-m-d H:i:s');
    //     $user_created = date('Y-m-d H:i:s');
    //     return $this->mysqlAdapter->query("
    //         INSERT INTO user SET 
    //             user_name='$user_name', 
    //             user_user='$user_user',
    //             user_pass='$user_pass',
    //             user_photo='$user_photo',
    //             user_last='$user_last',
    //             user_created='$user_created'
    //     ");
    // }
    // public function update(
    //     $user_name,
    //     $user_user,
    //     $user_pass,
    //     $user_photo,
    //     $user_id
    // ) {
    //     $user_last = date('Y-m-d H:i:s');
    //     return $this->mysqlAdapter->query("
    //         UPDATE user SET 
    //             user_name='$user_name', 
    //             user_user='$user_user',
    //             user_pass='$user_pass',
    //             user_photo='$user_photo',
    //             user_last='$user_last'
    //         WHERE user_id = $user_id 
    //     ");
    // }
    // public function delete($user_id)
    // {
    //     return $this->mysqlAdapter->query("DELETE FROM user WHERE user_id = $user_id ");
    // }
    private function schematize($row)
    {
        $row['customer_logo_url'] = $_ENV['HTTP_DOMAIN'] . "public/img.customers/" . ($row['customer_logo'] ? $row['customer_logo'] : 'default.png') . "?date=" . $row['customer_last'];
        return $row;
    }
}
