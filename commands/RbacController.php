<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 18.05.15
 * Time: 12:20
 */

namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller{

        public function actionInit()
        {
            Yii::$app->db->createCommand('DELETE FROM {{%auth_item}}')->execute();
            Yii::$app->db->createCommand('DELETE FROM {{%auth_rule}}')->execute();

            $auth = Yii::$app->authManager;

            $client = $auth->createRole('client');
            $client->description = 'Клиенты: Пользователи с возможностями: "просмотр профиля", "привязка карты", "редактирование своего профиля"';
            $auth->add($client);

            $partner = $auth->createRole('partner');
            $partner->description = 'Партнеры - пользователи с возможностями: "регистрация", "редактирование профиля"';
            $auth->add($partner);

            $adminNav = $auth->createPermission('admin.nav');
            $adminNav->description = 'Доступ к навигации в админке';
            $auth->add($adminNav);

            $manager = $auth->createRole('manager');
            $manager->description = 'Менеджеры: Пользователи с возможностями: "активация партнера", "админка"';
            $auth->add($manager);
            $auth->addChild($manager,$partner);
            $auth->addChild($manager,$adminNav);

            $setRole = $auth->createPermission('setRole');
            $setRole->description = 'Проставление роли';
            $auth->add($setRole);

            $admin = $auth->createRole('admin');
            $admin->description = 'Администраторы - пользователи со всеми привелегиями';
            $auth->add($admin);
            $auth->addChild($admin,$manager);
            $auth->addChild($admin,$setRole);

            //проставление ролей у пользователя admin,manager
            $role = $auth->getRole('admin');
            $auth->assign($role,1);

            $role = $auth->getRole('manager');
            $auth->assign($role,2);
        }

}