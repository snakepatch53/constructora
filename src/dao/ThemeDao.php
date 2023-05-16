<?php
class ThemeDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM themes");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }

    public function selectById($theme_id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM themes WHERE theme_id = $theme_id");
        $row = mysqli_fetch_assoc($resultset);
        if (mysqli_num_rows($resultset) == 0) return [];
        return $this->schematize($row);
    }

    // public function login($theme_theme, $theme_pass)
    // {
    //     $resultset = $this->mysqlAdapter->query("
    //         SELECT * FROM theme 
    //         WHERE theme_theme = '$theme_theme' AND theme_pass = '$theme_pass'
    //     ");
    //     if (mysqli_num_rows($resultset) == 0) return [];
    //     $row = mysqli_fetch_assoc($resultset);
    //     return $this->schematize($row);
    // }
    // public function insert(
    //     $theme_name,
    //     $theme_theme,
    //     $theme_pass,
    //     $theme_photo
    // ) {
    //     $theme_last = date('Y-m-d H:i:s');
    //     $theme_created = date('Y-m-d H:i:s');
    //     return $this->mysqlAdapter->query("
    //         INSERT INTO theme SET 
    //             theme_name='$theme_name', 
    //             theme_theme='$theme_theme',
    //             theme_pass='$theme_pass',
    //             theme_photo='$theme_photo',
    //             theme_last='$theme_last',
    //             theme_created='$theme_created'
    //     ");
    // }
    // public function update(
    //     $theme_name,
    //     $theme_theme,
    //     $theme_pass,
    //     $theme_photo,
    //     $theme_id
    // ) {
    //     $theme_last = date('Y-m-d H:i:s');
    //     return $this->mysqlAdapter->query("
    //         UPDATE theme SET 
    //             theme_name='$theme_name', 
    //             theme_theme='$theme_theme',
    //             theme_pass='$theme_pass',
    //             theme_photo='$theme_photo',
    //             theme_last='$theme_last'
    //         WHERE theme_id = $theme_id 
    //     ");
    // }
    // public function delete($theme_id)
    // {
    //     return $this->mysqlAdapter->query("DELETE FROM theme WHERE theme_id = $theme_id ");
    // }

    private function schematize($row)
    {
        $row['theme_photo_url'] = $_ENV['HTTP_DOMAIN'] . "public/img.themes/" . ($row['theme_photo'] ? $row['theme_photo'] : 'default.png') . "?date=" . $row['theme_last'];
        return $row;
    }
}
