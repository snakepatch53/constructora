<?php
class GoalDao
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
        $limit_sql = "";
        if ($limit) $limit_sql = "LIMIT $limit";
        $resultset = $this->mysqlAdapter->query("SELECT * FROM goals $limit_sql");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }

    // public function selectById(int $id)
    // {
    //     $resultset = $this->mysqlAdapter->query("SELECT * FROM contacts WHERE contact_id = $id");
    //     $row = mysqli_fetch_assoc($resultset);
    //     return $this->schematize($row);
    // }

    // public function insert(
    //     string $contact_name,
    //     string $contact_value,
    //     string $contact_link,
    //     string $contact_icon,
    //     string $contact_color,
    //     string $contact_type
    // ) {
    //     $contact_last = date('Y-m-d H:i:s');
    //     $contact_created = date('Y-m-d H:i:s');
    //     return $this->mysqlAdapter->query("
    //         INSERT INTO contacts SET 
    //             contact_name = '$contact_name',
    //             contact_value = '$contact_value',
    //             contact_link = '$contact_link',
    //             contact_icon = '$contact_icon',
    //             contact_color = '$contact_color',
    //             contact_type = '$contact_type',
    //             contact_last = '$contact_last',
    //             contact_created = '$contact_created'
    //     ");
    // }

    // public function update(
    //     string $contact_name,
    //     string $contact_value,
    //     string $contact_link,
    //     string $contact_icon,
    //     string $contact_color,
    //     string $contact_type,
    //     int $contact_id
    // ) {
    //     $contact_last = date('Y-m-d H:i:s');
    //     return $this->mysqlAdapter->query("
    //         UPDATE contacts SET
    //             contact_name='$contact_name',
    //             contact_value='$contact_value',
    //             contact_link='$contact_link',
    //             contact_icon='$contact_icon',
    //             contact_color='$contact_color',
    //             contact_type='$contact_type',
    //             contact_last='$contact_last'
    //         WHERE contact_id=$contact_id
    //     ");
    // }

    // public function delete(string $id)
    // {
    //     $resultset = $this->mysqlAdapter->query("DELETE FROM contacts WHERE contact_id = $id ");
    //     if ($resultset) return true;
    //     return false;
    // }

    private function schematize($row)
    {
        if (strpos($row['goal_icon'], '<i') === false) {
            $row['goal_icon_html'] = '<i class="' . $row['goal_icon'] . '" i></i>';
        }
        return $row;
    }
}
