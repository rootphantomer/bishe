<?php 
namespace Admin\Model;
use Think\Model\ViewModel;

class ArticlescrapViewModel extends ViewModel {
   public $viewFields = array(//展示默认文章的视图模型
     'articlescrap'=>array('id','title','content','user_id','cate_id','time','type','status'),
     'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'articlescrap.cate_id=category.id'),
     'member'=>array('username', '_on'=>'articlescrap.user_id=member.id'),
   );
 }

?>