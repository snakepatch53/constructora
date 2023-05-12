<?php
class ContactDao
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

    public function selectContacts()
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM contacts WHERE contact_type = 'contact'");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }

    public function selectSocials()
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM contacts WHERE contact_type = 'social'");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }

    // public function selectById(int $slider_id)
    // {
    //     $resultset = $this->mysqlAdapter->query("SELECT * FROM slider WHERE slider_id = $slider_id");
    //     $row = mysqli_fetch_assoc($resultset);
    //     return $row;
    // }

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
        if (strpos($row['contact_icon'], '<i') === false) {
            $row['contact_icon'] = '<i class="' . $row['contact_icon'] . '" i></i>';
        }
        return $row;
    }
}
