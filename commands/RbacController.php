<?php
/**
 * Created by PhpStorm.
 * User: jared
 * Date: 24/10/2016
 * Time: 01:28 PM
 */
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $createRegister = $auth->createPermission('createRegister');
        $createRegister->description = 'Create a resgister';
        $auth->add($createRegister);

        $updateRegister = $auth->createPermission('updateRegister');
        $updateRegister->description = 'Update a register';
        $auth->add($updateRegister);

        $deleteRegister = $auth->createPermission('deleteRegister');
        $deleteRegister->description = 'Delete a register';
        $auth->add($deleteRegister);

        $commonUser = $auth->createRole('commonUser');
        $auth->add($commonUser);
        $auth->addChild($commonUser, $createRegister);
        $auth->addChild($commonUser, $updateRegister);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $deleteRegister);
        $auth->addChild($admin, $commonUser);

        $auth->assign($commonUser, 2);
        $auth->assign($admin, 1);
    }
}