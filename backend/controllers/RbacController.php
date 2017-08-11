<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class RbacController extends Controller{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['logout', 'create', 'admin'],
                        'allow' => true,
                        // 'roles' => ['admin', 'content'],
                        // 'roles' => ['canAdmin'], // идентична 'roles' => ['admin', 'content']
                        'roles'    => ['admin'],
                    ],
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionAdmin(){
        return $this->render('admin');
    }

    public function actionCreate(){
/*
        $admin = Yii::$app->authManager->createRole('admin');
        $admin->description = 'Администратор';
        Yii::$app->authManager->add($admin);

        $content = Yii::$app->authManager->createRole('content');
        $content->description = 'Контент-менеджер';
        Yii::$app->authManager->add($content);

        $user = Yii::$app->authManager->createRole('user');
        $user->description = 'Пользователь';
        Yii::$app->authManager->add($user);

        $ban = Yii::$app->authManager->createRole('banned');
        $ban->description = 'Заблокированный пользователь';
        Yii::$app->authManager->add($ban);
*/

/*
        $permit = Yii::$app->authManager->createPermission('canAdmin');
        $permit->description = 'Право входа в админку';
        Yii::$app->authManager->add($permit);
*/

/*
        // наследование ролей и прав
        // в данном случае роль admin получает право canAdmin
        $role = Yii::$app->authManager->getRole('admin');
        $permit = Yii::$app->authManager->getPermission('canAdmin');
        Yii::$app->authManager->addChild($role, $permit);

        $role_c = Yii::$app->authManager->getRole('content');
        $permit = Yii::$app->authManager->getPermission('canAdmin');
        Yii::$app->authManager->addChild($role_c, $permit);
*/


/*
        if(Yii::$app->user->can('canAdmin')){
            // блок будет выполнен для пользователей, которые имеют право canAdmin
            // в данном случае, это будут пользователи, которые входят в группу admin и content

            // но работает и для проверки роли, т.е. Yii::$app->user->can('admin')
        }
        else{

        }
*/

        $userRole = Yii::$app->authManager->getRole('admin');
        // Yii::$app->authManager->assign($userRole, Yii::$app->user->getId());
        Yii::$app->authManager->assign($userRole, 5); // в данной БД admin имеет ID = 5

        $var = "Создание ролей";
        return $this->render('index', compact('var'));
    }
}
