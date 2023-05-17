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

    public function insert(
        string $theme_name,
        string $theme_color_danger,
        string $theme_color_info,
        string $theme_color_warn,
        string $theme_color_success,
        string $theme_color1,
        string $theme_color1_translucent,
        string $theme_color1_text,
        string $theme_color1_text2,
        string $theme_color1_logo_s1,
        string $theme_color1_logo_s2,
        string $theme_color1_logo_s3,
        string $theme_color1_logo_text,
        string $theme_color1_btn,
        string $theme_color1_btn_text,
        string $theme_color2,
        string $theme_color2_text,
        string $theme_color2_text2,
        string $theme_color4,
        string $theme_color4_text,
        string $theme_color4_text2,
        string $theme_color4_text3,
        string $theme_color4_logo_s1,
        string $theme_color4_logo_s2,
        string $theme_color4_logo_s3,
        string $theme_color4_logo_text,
        string $theme_color5,
        string $theme_color5_text,
        string $theme_color5_text2,
        string $theme_color5_logo_s1,
        string $theme_color5_logo_s2,
        string $theme_color5_logo_s3,
        string $theme_color5_logo_text,
        string $theme_color5_btn,
        string $theme_color5_btn_text,
        string $theme_color6,
        string $theme_color6_text,
        string $theme_color6_text2,
        string $theme_dark_color_danger,
        string $theme_dark_color_info,
        string $theme_dark_color_warn,
        string $theme_dark_color_success,
        string $theme_dark_color1,
        string $theme_dark_color1_translucent,
        string $theme_dark_color1_text,
        string $theme_dark_color1_text2,
        string $theme_dark_color1_logo_s1,
        string $theme_dark_color1_logo_s2,
        string $theme_dark_color1_logo_s3,
        string $theme_dark_color1_logo_text,
        string $theme_dark_color1_btn,
        string $theme_dark_color1_btn_text,
        string $theme_dark_color2,
        string $theme_dark_color2_text,
        string $theme_dark_color2_text2,
        string $theme_dark_color4,
        string $theme_dark_color4_text,
        string $theme_dark_color4_text2,
        string $theme_dark_color4_text3,
        string $theme_dark_color4_logo_s1,
        string $theme_dark_color4_logo_s2,
        string $theme_dark_color4_logo_s3,
        string $theme_dark_color4_logo_text,
        string $theme_dark_color5,
        string $theme_dark_color5_text,
        string $theme_dark_color5_text2,
        string $theme_dark_color5_logo_s1,
        string $theme_dark_color5_logo_s2,
        string $theme_dark_color5_logo_s3,
        string $theme_dark_color5_logo_text,
        string $theme_dark_color5_btn,
        string $theme_dark_color5_btn_text,
        string $theme_dark_color6,
        string $theme_dark_color6_text,
        string $theme_dark_color6_text2
    ) {
        $theme_last = date('Y-m-d H:i:s');
        $theme_created = date('Y-m-d H:i:s');
        $resultset =  $this->mysqlAdapter->query("
            INSERT INTO themes SET 
                theme_name = '$theme_name',
                theme_color_danger = '$theme_color_danger',
                theme_color_info = '$theme_color_info',
                theme_color_warn = '$theme_color_warn',
                theme_color_success = '$theme_color_success',
                theme_color1 = '$theme_color1',
                theme_color1_translucent = '$theme_color1_translucent',
                theme_color1_text = '$theme_color1_text',
                theme_color1_text2 = '$theme_color1_text2',
                theme_color1_logo_s1 = '$theme_color1_logo_s1',
                theme_color1_logo_s2 = '$theme_color1_logo_s2',
                theme_color1_logo_s3 = '$theme_color1_logo_s3',
                theme_color1_logo_text = '$theme_color1_logo_text',
                theme_color1_btn = '$theme_color1_btn',
                theme_color1_btn_text = '$theme_color1_btn_text',
                theme_color2 = '$theme_color2',
                theme_color2_text = '$theme_color2_text',
                theme_color2_text2 = '$theme_color2_text2',
                theme_color4 = '$theme_color4',
                theme_color4_text = '$theme_color4_text',
                theme_color4_text2 = '$theme_color4_text2',
                theme_color4_text3 = '$theme_color4_text3',
                theme_color4_logo_s1 = '$theme_color4_logo_s1',
                theme_color4_logo_s2 = '$theme_color4_logo_s2',
                theme_color4_logo_s3 = '$theme_color4_logo_s3',
                theme_color4_logo_text = '$theme_color4_logo_text',
                theme_color5 = '$theme_color5',
                theme_color5_text = '$theme_color5_text',
                theme_color5_text2 = '$theme_color5_text2',
                theme_color5_logo_s1 = '$theme_color5_logo_s1',
                theme_color5_logo_s2 = '$theme_color5_logo_s2',
                theme_color5_logo_s3 = '$theme_color5_logo_s3',
                theme_color5_logo_text = '$theme_color5_logo_text',
                theme_color5_btn = '$theme_color5_btn',
                theme_color5_btn_text = '$theme_color5_btn_text',
                theme_color6 = '$theme_color6',
                theme_color6_text = '$theme_color6_text',
                theme_color6_text2 = '$theme_color6_text2',
                theme_dark_color_danger = '$theme_dark_color_danger',
                theme_dark_color_info = '$theme_dark_color_info',
                theme_dark_color_warn = '$theme_dark_color_warn',
                theme_dark_color_success = '$theme_dark_color_success',
                theme_dark_color1 = '$theme_dark_color1',
                theme_dark_color1_translucent = '$theme_dark_color1_translucent',
                theme_dark_color1_text = '$theme_dark_color1_text',
                theme_dark_color1_text2 = '$theme_dark_color1_text2',
                theme_dark_color1_logo_s1 = '$theme_dark_color1_logo_s1',
                theme_dark_color1_logo_s2 = '$theme_dark_color1_logo_s2',
                theme_dark_color1_logo_s3 = '$theme_dark_color1_logo_s3',
                theme_dark_color1_logo_text = '$theme_dark_color1_logo_text',
                theme_dark_color1_btn = '$theme_dark_color1_btn',
                theme_dark_color1_btn_text = '$theme_dark_color1_btn_text',
                theme_dark_color2 = '$theme_dark_color2',
                theme_dark_color2_text = '$theme_dark_color2_text',
                theme_dark_color2_text2 = '$theme_dark_color2_text2',
                theme_dark_color4 = '$theme_dark_color4',
                theme_dark_color4_text = '$theme_dark_color4_text',
                theme_dark_color4_text2 = '$theme_dark_color4_text2',
                theme_dark_color4_text3 = '$theme_dark_color4_text3',
                theme_dark_color4_logo_s1 = '$theme_dark_color4_logo_s1',
                theme_dark_color4_logo_s2 = '$theme_dark_color4_logo_s2',
                theme_dark_color4_logo_s3 = '$theme_dark_color4_logo_s3',
                theme_dark_color4_logo_text = '$theme_dark_color4_logo_text',
                theme_dark_color5 = '$theme_dark_color5',
                theme_dark_color5_text = '$theme_dark_color5_text',
                theme_dark_color5_text2 = '$theme_dark_color5_text2',
                theme_dark_color5_logo_s1 = '$theme_dark_color5_logo_s1',
                theme_dark_color5_logo_s2 = '$theme_dark_color5_logo_s2',
                theme_dark_color5_logo_s3 = '$theme_dark_color5_logo_s3',
                theme_dark_color5_logo_text = '$theme_dark_color5_logo_text',
                theme_dark_color5_btn = '$theme_dark_color5_btn',
                theme_dark_color5_btn_text = '$theme_dark_color5_btn_text',
                theme_dark_color6 = '$theme_dark_color6',
                theme_dark_color6_text = '$theme_dark_color6_text',
                theme_dark_color6_text2 = '$theme_dark_color6_text2',
                theme_last = '$theme_last',
                theme_created = '$theme_created'
        ");
        if ($resultset) return $this->mysqlAdapter->getLastId();
        return false;
    }

    public function update(
        string $theme_name,
        string $theme_color_danger,
        string $theme_color_info,
        string $theme_color_warn,
        string $theme_color_success,
        string $theme_color1,
        string $theme_color1_translucent,
        string $theme_color1_text,
        string $theme_color1_text2,
        string $theme_color1_logo_s1,
        string $theme_color1_logo_s2,
        string $theme_color1_logo_s3,
        string $theme_color1_logo_text,
        string $theme_color1_btn,
        string $theme_color1_btn_text,
        string $theme_color2,
        string $theme_color2_text,
        string $theme_color2_text2,
        string $theme_color4,
        string $theme_color4_text,
        string $theme_color4_text2,
        string $theme_color4_text3,
        string $theme_color4_logo_s1,
        string $theme_color4_logo_s2,
        string $theme_color4_logo_s3,
        string $theme_color4_logo_text,
        string $theme_color5,
        string $theme_color5_text,
        string $theme_color5_text2,
        string $theme_color5_logo_s1,
        string $theme_color5_logo_s2,
        string $theme_color5_logo_s3,
        string $theme_color5_logo_text,
        string $theme_color5_btn,
        string $theme_color5_btn_text,
        string $theme_color6,
        string $theme_color6_text,
        string $theme_color6_text2,
        string $theme_dark_color_danger,
        string $theme_dark_color_info,
        string $theme_dark_color_warn,
        string $theme_dark_color_success,
        string $theme_dark_color1,
        string $theme_dark_color1_translucent,
        string $theme_dark_color1_text,
        string $theme_dark_color1_text2,
        string $theme_dark_color1_logo_s1,
        string $theme_dark_color1_logo_s2,
        string $theme_dark_color1_logo_s3,
        string $theme_dark_color1_logo_text,
        string $theme_dark_color1_btn,
        string $theme_dark_color1_btn_text,
        string $theme_dark_color2,
        string $theme_dark_color2_text,
        string $theme_dark_color2_text2,
        string $theme_dark_color4,
        string $theme_dark_color4_text,
        string $theme_dark_color4_text2,
        string $theme_dark_color4_text3,
        string $theme_dark_color4_logo_s1,
        string $theme_dark_color4_logo_s2,
        string $theme_dark_color4_logo_s3,
        string $theme_dark_color4_logo_text,
        string $theme_dark_color5,
        string $theme_dark_color5_text,
        string $theme_dark_color5_text2,
        string $theme_dark_color5_logo_s1,
        string $theme_dark_color5_logo_s2,
        string $theme_dark_color5_logo_s3,
        string $theme_dark_color5_logo_text,
        string $theme_dark_color5_btn,
        string $theme_dark_color5_btn_text,
        string $theme_dark_color6,
        string $theme_dark_color6_text,
        string $theme_dark_color6_text2,
        int $theme_id
    ) {
        $theme_last = date('Y-m-d H:i:s');
        return $this->mysqlAdapter->query("
            UPDATE themes SET 
                theme_name = '$theme_name',
                theme_color_danger = '$theme_color_danger',
                theme_color_info = '$theme_color_info',
                theme_color_warn = '$theme_color_warn',
                theme_color_success = '$theme_color_success',
                theme_color1 = '$theme_color1',
                theme_color1_translucent = '$theme_color1_translucent',
                theme_color1_text = '$theme_color1_text',
                theme_color1_text2 = '$theme_color1_text2',
                theme_color1_logo_s1 = '$theme_color1_logo_s1',
                theme_color1_logo_s2 = '$theme_color1_logo_s2',
                theme_color1_logo_s3 = '$theme_color1_logo_s3',
                theme_color1_logo_text = '$theme_color1_logo_text',
                theme_color1_btn = '$theme_color1_btn',
                theme_color1_btn_text = '$theme_color1_btn_text',
                theme_color2 = '$theme_color2',
                theme_color2_text = '$theme_color2_text',
                theme_color2_text2 = '$theme_color2_text2',
                theme_color4 = '$theme_color4',
                theme_color4_text = '$theme_color4_text',
                theme_color4_text2 = '$theme_color4_text2',
                theme_color4_text3 = '$theme_color4_text3',
                theme_color4_logo_s1 = '$theme_color4_logo_s1',
                theme_color4_logo_s2 = '$theme_color4_logo_s2',
                theme_color4_logo_s3 = '$theme_color4_logo_s3',
                theme_color4_logo_text = '$theme_color4_logo_text',
                theme_color5 = '$theme_color5',
                theme_color5_text = '$theme_color5_text',
                theme_color5_text2 = '$theme_color5_text2',
                theme_color5_logo_s1 = '$theme_color5_logo_s1',
                theme_color5_logo_s2 = '$theme_color5_logo_s2',
                theme_color5_logo_s3 = '$theme_color5_logo_s3',
                theme_color5_logo_text = '$theme_color5_logo_text',
                theme_color5_btn = '$theme_color5_btn',
                theme_color5_btn_text = '$theme_color5_btn_text',
                theme_color6 = '$theme_color6',
                theme_color6_text = '$theme_color6_text',
                theme_color6_text2 = '$theme_color6_text2',
                theme_dark_color_danger = '$theme_dark_color_danger',
                theme_dark_color_info = '$theme_dark_color_info',
                theme_dark_color_warn = '$theme_dark_color_warn',
                theme_dark_color_success = '$theme_dark_color_success',
                theme_dark_color1 = '$theme_dark_color1',
                theme_dark_color1_translucent = '$theme_dark_color1_translucent',
                theme_dark_color1_text = '$theme_dark_color1_text',
                theme_dark_color1_text2 = '$theme_dark_color1_text2',
                theme_dark_color1_logo_s1 = '$theme_dark_color1_logo_s1',
                theme_dark_color1_logo_s2 = '$theme_dark_color1_logo_s2',
                theme_dark_color1_logo_s3 = '$theme_dark_color1_logo_s3',
                theme_dark_color1_logo_text = '$theme_dark_color1_logo_text',
                theme_dark_color1_btn = '$theme_dark_color1_btn',
                theme_dark_color1_btn_text = '$theme_dark_color1_btn_text',
                theme_dark_color2 = '$theme_dark_color2',
                theme_dark_color2_text = '$theme_dark_color2_text',
                theme_dark_color2_text2 = '$theme_dark_color2_text2',
                theme_dark_color4 = '$theme_dark_color4',
                theme_dark_color4_text = '$theme_dark_color4_text',
                theme_dark_color4_text2 = '$theme_dark_color4_text2',
                theme_dark_color4_text3 = '$theme_dark_color4_text3',
                theme_dark_color4_logo_s1 = '$theme_dark_color4_logo_s1',
                theme_dark_color4_logo_s2 = '$theme_dark_color4_logo_s2',
                theme_dark_color4_logo_s3 = '$theme_dark_color4_logo_s3',
                theme_dark_color4_logo_text = '$theme_dark_color4_logo_text',
                theme_dark_color5 = '$theme_dark_color5',
                theme_dark_color5_text = '$theme_dark_color5_text',
                theme_dark_color5_text2 = '$theme_dark_color5_text2',
                theme_dark_color5_logo_s1 = '$theme_dark_color5_logo_s1',
                theme_dark_color5_logo_s2 = '$theme_dark_color5_logo_s2',
                theme_dark_color5_logo_s3 = '$theme_dark_color5_logo_s3',
                theme_dark_color5_logo_text = '$theme_dark_color5_logo_text',
                theme_dark_color5_btn = '$theme_dark_color5_btn',
                theme_dark_color5_btn_text = '$theme_dark_color5_btn_text',
                theme_dark_color6 = '$theme_dark_color6',
                theme_dark_color6_text = '$theme_dark_color6_text',
                theme_dark_color6_text2 = '$theme_dark_color6_text2',
                theme_last = '$theme_last'
            WHERE theme_id = $theme_id 
        ");
    }

    public function delete($theme_id)
    {
        return $this->mysqlAdapter->query("DELETE FROM themes WHERE theme_id = $theme_id ");
    }

    private function schematize($row)
    {
        return $row;
    }
}