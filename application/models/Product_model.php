<?php
class Product_model extends Model{
    
    function category_options(){
        
        $rows = $this->db->select('name')
                ->from('Parish')
                ->get()->result();
        
        $category_options = array('' => '');
        foreach ($rows as $row){
            $category_options[$row -> name] = $row -> name;
        }
        
        return $category_options;
        
    }
}