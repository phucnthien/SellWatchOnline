<?php 

namespace console\controllers;
use yii\console\Controller;


/**
* 
*/
class RbacController extends Controller
{
	
	function actionInit(){
		$auth = Yii::$app->authManager;
		 // add "createPost" permission

		//create permission for product Manager
		//add create Watch permission
        $createWatch = $auth->createPermission('createDongho');
        $createWatch->description = 'Thêm đồng hồ';
        $auth->add($createWatch);

        // add update Watch permission
        $updateWatch = $auth->createPermission('updateDongho');
        $updateWatch->description = 'Cập nhật đồng hồ';
        $auth->add($updateWatch);

         // add index Watch permission
        $indexWatch = $auth->createPermission('indexDongho');
        $indexWatch->description = 'Xem danh sách đồng hồ';
        $auth->add($indexWatch);

         // add view Watch permission
        $viewWatch = $auth->createPermission('viewDongho');
        $viewWatch->description = 'Xem chi tiết đồng hồ';
        $auth->add($viewWatch);


		//create permission for sale Manager
		//add create Watch permission
        $createDon = $auth->createPermission('createDongho');
        $createWatch->description = 'Thêm đồng hồ';
        $auth->add($createWatch);

        // add update Watch permission
        $updateWatch = $auth->createPermission('updateDongho');
        $updateWatch->description = 'Cập nhật đồng hồ';
        $auth->add($updateWatch);

         // add index Watch permission
        $indexWatch = $auth->createPermission('indexDongho');
        $indexWatch->description = 'Xem danh sách đồng hồ';
        $auth->add($indexWatch);

         // add view Watch permission
        $viewWatch = $auth->createPermission('viewDongho');
        $viewWatch->description = 'Xem chi tiết đồng hồ';
        $auth->add($viewWatch);


        // add "author" role and give this role the "createPost" permission
        $author = $auth->createRole('watchManager');
        $auth->add($author);
        $auth->addChild($author, $createPost);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $author);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
	}
}


 ?>