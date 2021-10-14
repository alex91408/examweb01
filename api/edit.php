<?php include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);
$ids=$_POST['id'];

foreach($ids as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $db->del($id);
    }else{
        $row=$db->find($id);

        switch($table){
            case 'title';
            $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id);
            $row['text']=$_POST['text'][$key];
            break;
            case 'admin';
            $row['acc']=$_POST['acc'][$key];
            $row['pw']=$_POST['pw'][$key];
            break;
            case 'menu';
            $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']));
            $row['text']=$_POST['text'][$key];
            $row['href']=$_POST['href'][$key];
            break;
            default:
            $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']));
            $row['text']=$_POST['text'][$key];
        }
        $db->save($row);
    }
}
to("../backend.php?do=".$table);
?>